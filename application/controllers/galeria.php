<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->output->set_template("default_larq");
        $this->load->view("site/galeria");
    }
}
