<?php
class Usuario_model extends CI_Model {

    function getUsuario($login, $senha) {

        $this->db->where('login', $login);
        $this->db->where('senha', $senha);

        $query = $this->db->get('users');

        if ($query->num_rows() > 0) {
            $this->session->set_userdata('usuario', $query->result());
            return true;
        } else {
            return false;
        }
    }

}

