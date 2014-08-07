<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed!");
}

/**
 * Description of default
 *
 * @author joasaraujo
 */
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("artefato");
    }

    public function index() {
//        $data['artefatos'] = $this->artefato->findAll();
        $data['natureza_peca'] = $this->artefato->findAll('natureza_peca');
        $data['artefato'] = $this->artefato->findAll('artefato');
        $data['contorno'] = $this->artefato->findAll('contorno');
        $data['forma'] = $this->artefato->findAll('forma');
        $data['labio'] = $this->artefato->findAll('labio');
        $data['borda'] = $this->artefato->findAll('borda');
        $data['parede'] = $this->artefato->findAll('parede');
        $data['base'] = $this->artefato->findAll('base');
        $data['inflexao'] = $this->artefato->findAll('inflexao');
        $data['apendice'] = $this->artefato->findAll('apendice');
        $data['espessura'] = $this->artefato->findAll('espessura');
        $data['queima'] = $this->artefato->findAll('queima');
        $data['tempero'] = $this->artefato->findAll('tempero');
        $data['tecnica_manufatura'] = $this->artefato->findAll('tecnica_manufatura');
        $data['tratamento_superficie'] = $this->artefato->findAll('tratamento_superficie');
        $data['decoracao'] = $this->artefato->findAll('decoracao');
        $data['local_decoracao'] = $this->artefato->findAll('local_decoracao');
        $data['tipo_decoracao'] = $this->artefato->findAll('tipo_decoracao');
        $data['cor'] = $this->artefato->findAll('cor');
        $data['motivo'] = $this->artefato->findAll('motivo');
        $data['decoracao_plastica'] = $this->artefato->findAll('decoracao_plastica');
        $data['tafonomia'] = $this->artefato->findAll('tafonomia');
        
        $this->load->view("index", $data);
    }

    public function insere() {
        $this->artefato->insert($this->input->get());
    }

    public function selecionado() {
        $data['artefato'] = $this->artefato->findAllById($this->input->get('id'));
        $this->load->view("selecionado", $data);
    }

}
