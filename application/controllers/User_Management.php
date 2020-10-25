<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Management extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

        check_login();
        //cek role admin
        is_admin();
    }
    public function index()
    {
        $data['title'] = 'Dashboard';

        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array(); //user sesuai session

        $data['role'] = $this->user_model->get_role();
        $data['users'] = $this->user_model->get_user(); //mengambil semua user

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user_management', $data);
        $this->load->view('templates/footer');
    }
    public function add_user()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email has already registered!'
        ]); //table user coloumn email
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont mathch!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Add Users Failed!</div>');
            redirect('user_management');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name'          => htmlspecialchars($this->input->post('name', true)),
                'email'         => htmlspecialchars($email),
                'image'         => 'default.png',
                'password'      => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'nip'          => htmlspecialchars($this->input->post('nip', true)),
                'role_id'       => $this->input->post('role'),
                'is_active'     => 0,
                'date_created'  => time()
            ];

            // token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email'     => $email,
                'token'     => $token,
                'date_created'  => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akun Sudah Didaftarkan. Silahkan cek email untuk di aktivasi!</div>');
            redirect('user_management');
        }
    }
    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => '****@gmail.com', //ganti dengan email aktif
            'smtp_pass' => '*****', //password email
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('developerapik@gmail.com', 'Petugas Inspeksi Online');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Akun Verifikasi');
            $this->email->message('Klik untuk mengaktifkan akun anda Sekarang. link berlaku 24 jam setelah di daftarkan :<br> 
            <a href="' . base_url() . 'user_management/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '"><h3>Aktifkan Sekarangs</h3></a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' Aktif! Login Sekarang!</div>');
                    redirect('auth');
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Token kadaluwarsa.</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! token salah.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktifasi akun gagal! email salah.</div>');
            redirect('auth');
        }
    }


    public function edit()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'password too short!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Update Pengguna Gagal!</div>');
            redirect('user_management');
        } else {

            $this->user_model->edit_user();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses Edit Pengguna!</div>');
            redirect('user_management');
        }
    }


    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->user_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Success Delete User</div>');
            redirect('user_management');
        }
    }
}
