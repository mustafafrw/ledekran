<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iletisim extends CI_Controller {
  public $viewFolder="";

  public function __construct() {

      parent::__construct();
      $this->viewFolder = "iletisim";
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
         $iletisim = $this->main_model->get(
            array(), "ayarlar"
        );
        $items = array(
            "header" => $header,
            "footer" => $footer,
            "ayarlar" =>$iletisim
        );
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/index", $viewData);
	}

          public function save(){

        $this->load->library("form_validation");

        // Kurallar yazilir..


            $insert = $this->main_model->add(
                array(
                    "isim"        => $this->input->post("isim"),
                    "soyisim"     => $this->input->post("soyisim"),
                    "email"       => $this->input->post("email"),
                    "mesaj"       => $this->input->post("mesaj"),
                    "telefon"     => $this->input->post("telefon"),
                    "tarih"       => gmdate('d/m/Y H:i:s',time()+3600*(3+date("I"))),
                ),
                    "form"
            );

            // TODO Alert sistemi eklenecek...
            if($insert){

                redirect(base_url("iletisim"));

            } else {

                redirect(base_url("iletisim"));

            }

            $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
       //veri tabanından type ı head olanları getirdik menu_id ve menu parametereleri
        $header = $this->main_model->get_all(
            array("type" => "head"), "menu_id ASC","menu"
        );
        $footer = $this->main_model->get_all(
            array("type" => "footer"), "menu_id ASC","menu"
        );
         $iletisim = $this->main_model->get(
            array(), "ayarlar"
        );
        $items = array(
            "header" => $header,
            "footer" => $footer,
            "ayarlar" =>$iletisim
        );
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/index", $viewData);

        // Başarılı ise
            // Kayit işlemi baslar
        // Başarısız ise
            // Hata ekranda gösterilir...
    }
}
