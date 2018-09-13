<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    public function index() {
        $this->load->view('cadastro');
    }

    public function registra() {
        $campos = $this->input->post();
        $this->db->insert('users', $campos);
    }

}
