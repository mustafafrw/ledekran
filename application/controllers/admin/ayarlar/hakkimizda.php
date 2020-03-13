<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimizda extends CI_Controller {
    public $viewFolder="";

  public function __construct() {

      parent::__construct();
      if($_SESSION['user_logged'] == FALSE){
        $this->session->set_flashdata("error","Please login first to view this page!!");
        redirect('admin/auth/login');
  }
      $this->viewFolder = "admin/ayarlar/hakkimizda";
      $this->load->model("main_model");
  }

        public function index(){


        $viewData = new stdClass();

         $kategoriListe = $this->main_model->get(
            array(),"ayarlar"

        );

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "liste";
        $viewData->items = $kategoriListe;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }


       public function update($id){

            $update = $this->main_model->update(
                array(
                    "id"    => $id
                ),
                array(
                    "hakkimda"      => $this->input->post("hakkimda"),
                ),
                   "ayarlar"
            );

            // TODO Alert sistemi eklenecek...
            if($update){

                redirect(base_url("admin/ayarlar/hakkimizda"));

            } else {

                redirect(base_url("admin/ayarlar/hakkimizda"));

            }


    }


}
