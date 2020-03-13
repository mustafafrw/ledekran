<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller {
    public $viewFolder="";

  public function __construct() {

      parent::__construct();
      if($_SESSION['user_logged'] == FALSE){
        $this->session->set_flashdata("error","Please login first to view this page!!");
      redirect('admin/auth/login');
  }
      $this->viewFolder = "admin/ayarlar/seo";
      $this->load->model("main_model");
  }

        public function index(){

            echo "adfdf";
        $viewData = new stdClass();

         $kategoriListe = $this->main_model->get(
            array(),"ayarlar"

        );

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "liste";
        $viewData->items = $kategoriListe;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }


      public function delete($id){

        $delete = $this->main_model->delete(
            array(
                "id"    => $id
            ),
           "ayarlar"
        );

        // TODO Alert Sistemi Eklenecek...
        if($delete){
            redirect(base_url("admin/ayarlar"));
        } else {
            redirect(base_url("admin/ayarlar"));
        }

    }
       public function update($id){

            $update = $this->main_model->update(
                array(
                    "id"    => $id
                ),
                array(
                    "sirket_ismi"   => $this->input->post("sirket_ismi"),
                    "hakkimda"      => $this->input->post("hakkimda"),
                    "misyon"        => $this->input->post("misyon"),
                    "visyon"        => $this->input->post("visyon"),
                    "logo"          => $this->input->post("logo"),
                    "tel_1"         => $this->input->post("tel_1"),
                    "email"         => $this->input->post("email"),
                    "facebook"      => $this->input->post("facebook"),
                    "instagram"     => $this->input->post("instagram"),
                    "twitter "      => $this->input->post("twitter"),
                    "adres"         => $this->input->post("adres"),
                    "title"         => $this->input->post("title"),
                    "description"   => $this->input->post("description"),
                    "keywords"      => $this->input->post("keywords"),
                ),
                   "ayarlar"
            );

            // TODO Alert sistemi eklenecek...
            if($update){

                redirect(base_url("admin/ayarlar/seo"));

            } else {

                redirect(base_url("admin/ayarlar/seo"));

            }


    }


}
