<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inscricoes extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->_init();
    }

    private function _init() {
        $this->output->set_template('blank');
        $this->load->css("assets/themes/registro/fv.css");
        $this->load->js("assets/themes/default/js/jquery-1.9.1.min.js");
        $this->load->js("assets/themes/registro/multifield.js");
        $this->load->js("assets/themes/registro/validator.js");
    }

    public function index() {
        $this->load->view("registro/index");
    }

    public function submit() {
        $p = $this->input->post();
        $this->load->model("participante");
        $this->participante->insert($p);
        redirect("inscricoes/success");
    }

    public function success() {
        $this->load->view("registro/success");
    }

}
