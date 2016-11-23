<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    private $pokemon;
    private $var;

    public function __construct() {
        parent::__construct();
        $this->load->model("Consulta", "model_consulta");
        $this->pokemon = $this->model_consulta->lista();
    }

    public function index() {
        $this->load->helper('text');
        $termo['pokemon'] = $this->pokemon;
        $this->load->view('html-header');
        $this->load->view('header', $termo);
        $this->load->view('principal', $termo);
        $this->load->view('footer');
        $this->load->view('html-footer');
    }

  

}
