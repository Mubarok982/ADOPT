<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ipk extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Ipk_model');
    }

    public function index() {
        $data['title'] = "Data IPK Mahasiswa";
        $data['ipk_mahasiswa'] = $this->Ipk_model->get_all_with_nama();
        $this->load->view('templates/header', $data);
        $this->load->view('ipk/index', $data);
        $this->load->view('templates/footer');
    }
}
