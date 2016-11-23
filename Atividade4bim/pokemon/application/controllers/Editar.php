<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Editar extends CI_Controller {

    private $pokemon;
    private $update;

    public function __construct() {
        parent::__construct();
                 $this->load->model("Consulta", "model_consulta");
        $this->pokemon = $this->model_consulta->lista();



    }

    public function index() {
        $this->load->helper('text');
       
        $this->load->view('html-header');
        $this->load->view('header');
        $this->load->view('editar');
        $this->load->view('footer');
        $this->load->view('html-footer');
    }

}
