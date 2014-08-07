<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of participante
 *
 * @author joasaraujo
 */
class Participante extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insert($p) {

        $data = array(
            "nome" => $p['nome'],
            "idade" => $p['idade'],
            "email" => $p['email']
        );

        $this->db->insert("participante", $data);
    }

    public function findAll() {
        return $this->db->get("participante")->result();
    }

    public function getFormacao() {
        return $this->db->get("formacao")->result();
    }

    public function login($username, $password) {
        $this->db->select('id, username, password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}
