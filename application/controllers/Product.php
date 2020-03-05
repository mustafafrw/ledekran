<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
  public $viewFolder="";
  
  public function __construct() {
      
      parent::__construct();
      $this->viewFolder = "includes";
      $this->load->model("product_model");
  }

    public function index()
	{
  
          $viewData = new stdClass();
           
        /** Tablodan Verilerin Getirilmesi.. */
        $header = $this->product_model->get_all(
            array("type" => "head"), "menu_id ASC","menu"
        );
        $footer = $this->product_model->get_all(
            array("type" => "footer"), "menu_id ASC","menu"
        );
        $slider = $this->product_model->get_all(
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
        public function headerMenu(){
            /*$viewData = new stdClass();
           
        $items = $this->product_model->get_all(
            array(
                  "type"   => $this->db->get("footer"),

            ) 
        );

        $viewData->viewFolder = $this->viewFolder;
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/index", $viewData);*/
        }
}
