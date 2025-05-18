<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
   public function getAllJadwal() {
    $this->db->select('jadwal.*, dosen.nama_dosen, matkul.nama_matkul, kelas.nama_kelas, kelas.nama_ruangan');
    $this->db->from('jadwal');
    $this->db->join('dosen', 'dosen.id_dosen = jadwal.id_dosen');
    $this->db->join('matkul', 'matkul.kode_matkul = jadwal.kode_matkul');
    $this->db->join('kelas', 'kelas.id_kelas = jadwal.id_kelas');
    return $this->db->get()->result();
}

}