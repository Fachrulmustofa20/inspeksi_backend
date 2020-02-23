<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('project_model');
    }

    public function index()
    {
        $data['title'] = 'Input Inspeksi';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required', [
            'required'      => '%s harus di isi'
        ]);
        $this->form_validation->set_rules('nama_pengemudi', 'Nama Pengemudi', 'required', [
            'required'      => '%s harus di isi'
        ]);
        $this->form_validation->set_rules('umur', 'Umur', 'required', [
            'required'      => '%s harus di isi'
        ]);
        $this->form_validation->set_rules('nama_po', 'Nama Po', 'required', [
            'required'      => '%s harus di isi'
        ]);
        $this->form_validation->set_rules('nomor_kendaraan', 'Nomor Kendaraan', 'required', [
            'required'      => '%s harus di isi'
        ]);
        $this->form_validation->set_rules('nomor_stuk', 'Nomor Stuk', 'required', [
            'required'      => '%s harus di isi'
        ]);
        $this->form_validation->set_rules('trayek', 'Trayek', 'required', [
            'required'      => '%s harus di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('input_inspeksi', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'tgl'           => time(),
                'lokasi'        => $this->input->post('answer[1]', true),
                'nama_lok'      => htmlspecialchars($this->input->post('nama_lokasi', true)),
                'nama_pngmd'    => htmlspecialchars($this->input->post('nama_pengemudi', true)),
                'umur'          => htmlspecialchars($this->input->post('umur', true)),
                'nama_po'       => htmlspecialchars($this->input->post('nama_po', true)),
                'no_kendaraan'  => htmlspecialchars($this->input->post('nomor_kendaraan', true)),
                'jns_no_kendaraan'  => $this->input->post('answer[2]', true),
                'no_stuk'           => htmlspecialchars($this->input->post('nomor_stuk', true)),
                'jenis_trayek'  => $this->input->post('answer[3]', true),
                'trayek'  => $this->input->post('trayek', true),
                'kartu_uji_stuk'  => $this->input->post('answer[4]', true),
                'kp_reguler'  => $this->input->post('answer[5]', true),
                'kp_cadangan'  => $this->input->post('answer[6]', true),
                'sim_pengemudi'  => $this->input->post('answer[7]', true),
                'luk_dekat'  => $this->input->post('answer[8]', true),
                'luk_jauh'  => $this->input->post('answer[9]', true),
                'sein_depan'  => $this->input->post('answer[10]', true),
                'sein_belakang'  => $this->input->post('answer[11]', true),
                'lampu_rem'  => $this->input->post('answer[12]', true),
                'lampu_mundur'  => $this->input->post('answer[13]', true),
                'rem_utama'  => $this->input->post('answer[14]', true),
                'rem_parkir'  => $this->input->post('answer[15]', true),
                'kaca_depan'  => $this->input->post('answer[16]', true),
                'ban_depan'  => $this->input->post('answer[17]', true),
                'ban_belakang'  => $this->input->post('answer[18]', true),
                'sabuk'  => $this->input->post('answer[19]', true),
                'kecepatan'  => $this->input->post('answer[20]', true),
                'lampu_posisi_d'  => $this->input->post('answer[21]', true),
                'lampu_posisi_b'  => $this->input->post('answer[22]', true),
                'kaca_spion'  => $this->input->post('answer[23]', true),
                'wiper'  => $this->input->post('answer[24]', true),
                'klakson'  => $this->input->post('answer[25]', true),
                'tempat_duduk'  => $this->input->post('answer[26]', true),
                'ban_cadangan'  => $this->input->post('answer[27]', true),
                'stg_pengaman'  => $this->input->post('answer[28]', true),
                'dongkrak'  => $this->input->post('answer[29]', true),
                'pmbk_roda'  => $this->input->post('answer[30]', true),
                'lampu_senter'  => $this->input->post('answer[31]', true),
                'pintu_darurat'  => $this->input->post('answer[32]', true),
                'jendela_darurat'  => $this->input->post('answer[33]', true),
                'pemecah_kaca'  => $this->input->post('answer[34]', true),
                'hasil_inspeksi'  => $this->input->post('answer[35]', true),
                'catatan'  => $this->input->post('catatan', true),
                'id_penguji'  =>  $this->session->userdata('id'),
                'nama_penyidik'  => $this->input->post('nama_penyidik', true),
                'nip_penyidik'  => $this->input->post('nip_penyidik', true)
            ];
            $this->db->insert('form', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Inspeksi Berhasil di tambahkan!</div>');
            redirect('form/laporan');
        }
    }
    public function laporan()
    {
        $data['title'] = 'Laporan';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['laporan'] = $this->project_model->tampil_laporan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        $data['title'] = 'detail';

        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $data['form_detail'] = $this->project_model->get_form_id($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('detail', $data);
        $this->load->view('templates/footer');
    }
}
