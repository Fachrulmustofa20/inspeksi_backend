<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('project_model');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['laporan'] = $this->project_model->tampil_laporan();
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function input_inspeksi()
    {
        $data['title'] = 'Input Inspeksi';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('input_inspeksi', $data);
        $this->load->view('templates/footer');
    }
    public function laporan()
    {
        $data['title'] = 'Laporan';
        $data['laporan'] = $this->project_model->tampil_laporan();
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan', $data);
        $this->load->view('templates/footer');
    }
    public function detail()
    {
        $data['title'] = 'detail';

        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('detail', $data);
        $this->load->view('templates/footer');
    }
}
