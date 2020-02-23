<?php
class Project_model extends CI_Model
{
    public function tampil_laporan()
    {
        # code...
        return $this->db->get('form')->result_array();
    }
    public function tambah_form($data)
    {
        $this->db->insert('form', $data);
    }
    public function get_form_id($id)
    {
        return $this->db->get_where('form', ['id' => $id])->row_array();
    }
}
