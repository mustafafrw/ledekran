<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    public $viewFolder="";
  
  public function __construct() {
      
      parent::__construct();
      $this->viewFolder = "kategori";
      $this->load->model("main_model");
  }
    
    function _remap($param) {
        $this->index($param);
    }

    function index($param){
        $viewData = new stdClass();

        $header = $this->main_model->get_all(
            array("type" => "head"), "menu_id ASC","menu"
        );
        $footer = $this->main_model->get_all(
            array("type" => "footer"), "menu_id ASC","menu"
        );
        $items = array(
            "header" => $header,
            "footer" => $footer
        );
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->items = $items;
        $this->load->view("{$viewData->viewFolder}/index", $viewData);
    }

    
        
    
}
