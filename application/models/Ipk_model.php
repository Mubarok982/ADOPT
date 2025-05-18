<?php
class Ipk_model extends CI_Model {

    public function get_all_with_nama() {
    $this->db->select('ipk_mahasiswa.*, mahasiswa.nama_mahasiswa');
    $this->db->from('ipk_mahasiswa');
    $this->db->join('mahasiswa', 'ipk_mahasiswa.id_mahasiswa = mahasiswa.id_mahasiswa');
    $query = $this->db->get();
    return $query->result();
}
}
