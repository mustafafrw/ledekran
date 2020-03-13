<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
  public $viewFolder="";
  
  public function __construct() {
      
      parent::__construct();
      $this->viewFolder = "main";
      $this->load->model("main_model");
  }

    public function index()
	{
  
          $viewData = new stdClass();
           
        /** Tablodan Verilerin Getirilmesi.. */
       //veri tabanından type ı head olanları getirdik menu_id ve menu parametereleri
        $header = $this->main_model->get_all(
            array("type" => "head"), "menu_id ASC","menu"
        );
        $footer = $this->main_model->get_all(
            array("type" => "footer"), "menu_id ASC","menu"
        );
        $slider = $this->main_model->get_all(
            array(), "id ASC","slider"
        );
        $ayarlar = $this->main_model->get(
            array(), "ayarlar"
        );
        $kategori = $this->main_model->get_all(
            array(),"id ASC", "category"
        );
        $items = array(
            "header" => $header,
            "footer" => $footer,
            "slider" => $slider,
            "ayarlar" => $ayarlar,
            "kategori" =>$kategori
               
        );
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/index", $viewData);
	}
}
