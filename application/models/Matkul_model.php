<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul_model extends CI_Model
{
    public function get_all_matkul()
    {
        return $this->db->get('matkul')->result();
    }

    
    public function insert_matkul($data)
    {
        $this->db->insert('matkul', $data);
    }

    public function get_matkul_by_id($id)
    {
        return $this->db->get_where('matkul', ['kode_matkul' => $id])->row();
    }

    public function update_matkul($id, $data)
    {
        $this->db->where('kode_matkul', $id);
        $this->db->update('matkul', $data);
    }

    public function delete_matkul($id)
    {
        $this->db->where('kode_matkul', $id);
        $this->db->delete('matkul');
    }
    public function get_count() {
        return $this->db->count_all('matkul');
    }
}
