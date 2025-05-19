<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function get_ipk_by_email($email)
{
    $this->db->select('ipk_mahasiswa.semester, ipk_mahasiswa.ipk');
    $this->db->from('users');
    $this->db->join('mahasiswa', 'users.id_mahasiswa = mahasiswa.id_mahasiswa');
    $this->db->join('ipk_mahasiswa', 'ipk_mahasiswa.id_mahasiswa = mahasiswa.id_mahasiswa');
    $this->db->where('users.email', $email);
    $this->db->order_by('ipk_mahasiswa.semester', 'ASC');

    return $this->db->get()->result();
}
}