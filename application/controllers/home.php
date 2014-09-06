<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); 

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $this->load->model("participante");
            /*
             * Se for administrador
             */
            if ($session_data['admin']) {
                /*
                 * Carrega lista de participante
                 */

                /*
                 * Pega todos os participantes que pagaram a inscrição
                 */
                $nome_p = $this->input->post('p_p_nome');
                $data['insc_paga'] = $this->participante->getAllInscPaga($nome_p);

                /*
                 * Pega todos os participantes que não pagaram
                 */
                $nome = $this->input->post('p_nome');
                $data['insc_no_paga'] = $this->participante->getAllInscNoPaga($nome);

                /**
                 * Carregar a view e passa os dados
                 */
                $this->load->view("registro/admin/lista-parti", $data);
            } else {

                $this->output->set_template('blank');
                $this->load->css("assets/themes/registro/fv.css");
                $this->load->js("assets/themes/default/js/jquery-1.9.1.min.js");
                $this->load->js("assets/themes/registro/multifield.js");
                $this->load->js("assets/themes/registro/validator.js");

                $data['formacao'] = $this->participante->getFormacao();
                /*
                 * Se for um participante
                 */
                $data['parti'] = $this->participante->getDadosParti($session_data['id']);
                
                $this->load->view('registro/admin/edit-parti', $data);
            }
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }

}


