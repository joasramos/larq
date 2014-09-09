<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->helper('url');

        $this->_init();
    }

    private function _init() {
        $this->output->set_template('default_larq');
    }

    public function index() {
        
    }

    public function example_3() {
        $this->load->section('sidebar', 'ci_simplicity/sidebar');
        $this->load->view('ci_simplicity/example_3');
    }
}
