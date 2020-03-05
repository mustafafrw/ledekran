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
        echo $param;
        $header = $this->main_model->get_all(
            array("type" => "head"), "menu_id ASC","menu"
        );
        $footer = $this->main_model->get_all(
            array("type" => "footer"), "menu_id ASC","menu"
        );
        $slider = $this->main_model->get_all(
            array(), "id ASC","slider"
        );
        $items = array(
            "header" => $header,
            "footer" => $footer,
            "slider" => $slider
        );
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/index", $viewData);
    }

    
        
    
}
