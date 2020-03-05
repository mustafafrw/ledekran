<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
  public $viewFolder="";
  
  public function __construct() {
      
      parent::__construct();
      $this->viewFolder = "includes";
      $this->load->model("main_model");
  }

    function _remap($param) {
        $this->index($param);
    }

    function index($param){
        echo $param;
    }
    /*public function pr($id){
        echo $id;
    }*/
}
