<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori_v extends CI_Controller {
    public $viewFolder="";
  
  public function __construct() {
      
      parent::__construct();
      $this->viewFolder = "admin/kategori";
      $this->load->model("main_model");
  }
        
        
        public function index(){
            
            
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
       
    }

