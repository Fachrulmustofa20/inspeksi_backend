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
    public function getTotalAll()
    {
        $query = $this->db->get('form');
        $total = $query->num_rows();
        return $total;
    }
    public function getTotalLaik()
    {
        $query = $this->db->query("SELECT * FROM form WHERE hasil_inspeksi = 1 or hasil_inspeksi = 2");
        return $query->num_rows();
    }
    public function getTotaltdkLaik()
    {
        $query = $this->db->query("SELECT * FROM form WHERE hasil_inspeksi = 3 or hasil_inspeksi = 4");
        return $query->num_rows();
    }
    public function getTotalUser()
    {
        $this->db->where('is_active', 1);
        $query = $this->db->get('user');
        $total = $query->num_rows();
        return $total;
    }
    public function laporan_limit()
    {
        $this->db->select('*');
        $this->db->from('form');
        $this->db->limit(5);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
}
