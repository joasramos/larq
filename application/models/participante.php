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

    //put your code here

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
    
    public function findAll(){
        return $this->db->get("participante")->result();
    }

}
