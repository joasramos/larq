<?php

/**
 * Descrição do participante
 *
 * @author joasaraujo
 */
class Participante extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * 
     * Método para persistir um participante no banco
     */
    public function insert($p) {

        $data = array(
            "nome" => $p['nome'],
            "email" => $p['email'],
            "telefone" => $p['tel'],
            "instituicao" => $p['insti'],
            "formacao" => $p["forma"],
            "user" => $p['user_name'],
            "pass" => MD5($p['password']),
        );

        $this->db->insert("participante", $data);
    }

    /**
     * 
     * Método que trás uma lista de todos os participantes cadastrados
     */
    public function findAll() {
        return $this->db->get("participante")->result();
    }

    /**
     * 
     * Método que recupera as formações academicas cadastradas
     */
    public function getFormacao() {
        return $this->db->get("formacao")->result();
    }

    /**
     *  Retorna um participante caso ele exista no banco. 
     * A verificação é feita com base nos parâmetros passados
     * @param type $username - username do participante
     * @param type $password - senha do participante
     * @return boolean
     */
    public function login($username, $password) {
        $this->db->select('idparti, user, pass, admin');
        $this->db->from('participante');
        $this->db->where('user', $username);
        $this->db->where('pass', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getAllInscPaga($nome = "") {
        $this->db->like('nome', $nome);
        $this->db->where('inscricao_paga = 1 and admin = 0');
        return $this->db->get('participante')->result();
    }

    public function getAllInscNoPaga($nome = " ") {
        $this->db->like('nome', $nome);
        $this->db->where('inscricao_paga = 0 and admin = 0');
        return $this->db->get('participante')->result();
    }

    public function getDadosParti($id) {
        $this->db->where('idparti', $id);
        return $this->db->get('participante')->result();
    }

}
