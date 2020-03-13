<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {
    public $viewFolder="";

  public function __construct() {

      parent::__construct();
      if($_SESSION['user_logged'] == FALSE){
        $this->session->set_flashdata("error","Please login first to view this page!!");
        redirect('admin/auth/login');
  }
      $this->viewFolder = "admin/ayarlar/pdf";
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
                    "UstResimYolu"   => $this->input->post("UstResimYolu"),
                    "AltResimYolu"      => $this->input->post("AltResimYolu"),
                    "GirisYazisi"   => $this->input->post("GirisYazisi"),
                    "TeklifSartlari"   => $this->input->post("TeklifSartlari"),
                ),
                   "ayarlar"
            );

            // TODO Alert sistemi eklenecek...
            if($update){

                redirect(base_url("admin/ayarlar/pdf"));

            } else {

                redirect(base_url("admin/ayarlar/pdf"));

            }


    }


}
