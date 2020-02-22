<?php
class Project_model extends CI_Model
{
    public function tampil_laporan()
    {
        # code...
        return $this->db->get('form')->result_array();
    }
}
