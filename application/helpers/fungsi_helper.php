<?php

function check_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('email');
    if (!$user_session) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login Terlebih Dahulu!</div>');
        redirect('auth');
    }
}

function is_admin()
{
    $ci = &get_instance();
    $role = $ci->session->userdata('role_id');
    if ($role != 1) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akses Block!</div>');
        redirect('profile');
    }
}
