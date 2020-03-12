<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urun extends CI_Controller {
    public $viewFolder="";

  public function __construct() {

      parent::__construct();
      $this->viewFolder = "urun";
      $this->load->model("main_model");
  }

    function _remap($param) {
        $this->index($param);
    }

    function index($param){
       /* if ($this->input->server('REQUEST_METHOD') == 'GET')
        echo "selam";*/
        $viewData = new stdClass();

        $header = $this->main_model->get_all(
            array("type" => "head"), "menu_id ASC","menu"
        );
        $footer = $this->main_model->get_all(
            array("type" => "footer"), "menu_id ASC","menu"
        );

         $kategoriListe = $this->main_model->get_all(
            array(), "id ASC" ,"category"

        );
          $posts = $this->main_model->get(
            array("post_id" => $param),"posts"
        );
        $kategori = $this->main_model->get(
            array("id" =>$posts->category_id ), "category"

        );
          $posts_data = $this->main_model->get(
            array("post_id" => $param),"post_data"
        );
        $ayarlar = $this->main_model->get(
            array(),"ayarlar"
        );
        $thumbnail = $this->main_model->get(
            array("post_id" => $param,"type"=>"kapak"),"pictures"
        );
        $pictures = $this->main_model->get_all(
            array("post_id" => $param,"type"=>"normal"),"pictures_id ASC","pictures"
        );
        $related = $this->main_model->get_all(
            array(),"RAND()","posts"
        );
        $items = array(
            "ayarlar" => $ayarlar,
            "header" => $header,
            "footer" => $footer,
            "categoryInfo" => $kategori,
            "categoryList" =>$kategoriListe,
            "post"         => $posts,
            "post_data" => $posts_data,
            "thumbnail" => $thumbnail,
            "pictures"=>$pictures,
            "related" => $related
        );


        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->items = $items;
        $this->load->view("{$viewData->viewFolder}/index", $viewData);
    }




}
