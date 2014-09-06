<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inscricoes extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_init();
    }

    private function _init() {
        $this->load->helper('url');
        $this->load->model("participante");
        $this->output->set_template('blank');
        $this->load->css("assets/themes/registro/fv.css");
        $this->load->js("assets/themes/default/js/jquery-1.9.1.min.js");
        $this->load->js("assets/themes/registro/multifield.js");
        $this->load->js("assets/themes/registro/validator.js");
    }

    /**
     * Exibe homepage do evento
     */
    public function index() {
        $this->load->view("registro/index");
    }

    /*
     * Exibe view com o formulário de cadastro de um participante
     */

    public function cadastro($status = null) {
        $data['formacao'] = $this->participante->getFormacao();
        $data['status'] = $status;
        $this->load->view("registro/cad-parti", $data);
    }

    /*
     * Exibe view de apresentação do evento
     */

    public function apresentacao() {
        $this->load->view("registro/apresentacao");
    }

    /*
     * Exibe view de apresentação do registro
     */

    public function programacao() {
        $this->load->view("registro/programacao"); 
    }

    /*
     * Exibe view de apresentação do normas
     */

    public function normas() {
        $this->load->view("registro/normas");
    }

    /**
     * Método chamado no ato do cadastro de um participante
     */
    public function submit() {
        $p = $this->input->post();
        $this->participante->insert($p);
//        echo "<script>alert('Cadastro realizado com sucesso!')</script>";
        redirect("inscricoes/cadastro/success_insc");
    }

    /*
     * Carrega página de sucesso após inserir um participante
     */

    public function success() {
        $this->load->view("registro/success"); 
    }

    /**
     * Exibe lista de participantes registrados no sistema
     */
    public function registrados() {
        $this->load->css("assets/themes/registro/style-tbl-part.css");
        $data = array();

        $this->load->model("participante");
        $data['list'] = $this->participante->findAll();

        $this->load->view("registro/admin/list-parti", $data);
    }

}
