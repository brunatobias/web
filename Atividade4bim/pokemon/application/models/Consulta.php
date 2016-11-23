<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Consulta extends CI_Model {
    public function __construct(){
      parent::__construct();
    }
    public function lista(){
      return $this->db->get('pokemon')->result();
    }
}
?>
