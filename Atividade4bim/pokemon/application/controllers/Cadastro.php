<?php defined('BASEPATH') OR exit('No direct script access allowed') ;
 class Cadastro extends CI_Controller{
 public $pokemon;
	public function __construct () {
		parent::__construct();
      $this->load->library("session");
		}
		 public function index () {
		 $this->load->helper('text');
		 $this->load->view('html-header');
		 $this->load->view('header');
		 $this->load->view('cadastro');
		 $this->load->view('footer');
		 $this->load->view('html-footer') ;
		 }
     public function inserir(){
             $this->load->helper(array("form", "url"));
             $this->load->database();
             $data['nome'] = $this->input->post('nome');
             $data['data_captura'] = $this->input->post('data_captura');
             $data['tipo_pokemon'] = $this->input->post('tipo_pokemon');
             if ($this->db->insert('pokemon',$data)) {
               redirect(base_url("index.php/Home"));
             }
       }
}
