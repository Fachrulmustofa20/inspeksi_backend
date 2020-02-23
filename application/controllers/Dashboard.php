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
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $data['totalAll'] = $this->project_model->getTotalAll();
        $data['totalLaik'] = $this->project_model->getTotalLaik();
        $data['totaltdkLaik'] = $this->project_model->getTotaltdkLaik();
        $data['totalUser'] = $this->project_model->getTotalUser();
        $data['laporan_limit'] = $this->project_model->laporan_limit();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}
