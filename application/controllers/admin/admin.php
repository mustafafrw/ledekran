<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    public $viewFolder="";
  
  public function __construct() {
      
      parent::__construct();
      $this->viewFolder = "admin/main";
      $this->load->model("main_model");
  }
        
        
        public function index(){
            
        $viewData = new stdClass();
        
        $form = $this->main_model->get_all(
            array(), "id ASC" ,"form"               
        );
        
            
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "";
        $viewData->items = $form;
        $this->load->view("{$viewData->viewFolder}/index", $viewData);
        }
        
       
    
}
