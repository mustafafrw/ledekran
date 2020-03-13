<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    public $viewFolder="";

  public function __construct() {

      parent::__construct();
      if($_SESSION['user_logged'] == FALSE){
        $this->session->set_flashdata("error","Please login first to view this page!!");
        redirect('admin/auth/login');
  }
      $this->viewFolder = "admin/menu";
      $this->load->model("main_model");
  }

        public function index(){


        $viewData = new stdClass();

         $kategoriListe = $this->main_model->get_all(
            array(), "menu_id ASC" ,"menu"

        );

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "liste";
        $viewData->items = $kategoriListe;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

         public function new_form(){

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "ekle";

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

         }
      public function delete($id){

        $delete = $this->main_model->delete(
            array(
                "menu_id"    => $id
            ),
           "menu"
        );

        // TODO Alert Sistemi Eklenecek...
        if($delete){
            redirect(base_url("admin/menu"));
        } else {
            redirect(base_url("admin/menu"));
        }

    }
       public function update($id){

        $this->load->library("form_validation");

        // Kurallar yazilir..
        $this->form_validation->set_rules("title", "Başlık", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        // Form Validation Calistirilir..
        // TRUE - FALSE
        $validate = $this->form_validation->run();

        // Monitör Askısı
        // monitor-askisi

        if($validate){

            $update = $this->main_model->update(
                array(
                    "menu_id"    => $id
                ),
                array(
                    "title"         => $this->input->post("title"),
                    "url"           => $this->input->post("url"),
                    "type"           => $this->input->post("type"),
                ),
                   "menu"
            );

            // TODO Alert sistemi eklenecek...
            if($update){

                redirect(base_url("admin/menu"));

            } else {

                redirect(base_url("admin/menu"));

            }

        } else {

            $viewData = new stdClass();

            /** Tablodan Verilerin Getirilmesi.. */
            $item = $this->main_model->get(
                array(
                    "menu_id"    => $id,
                ),
                    "menu"
            );

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;
            $viewData->item = $item;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

        // Başarılı ise
        // Kayit işlemi baslar
        // Başarısız ise
        // Hata ekranda gösterilir...

    }
      public function update_form($id){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->main_model->get(
            array(
                "menu_id"    => $id,
            ),"menu"
        );

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

     }
    public function save(){

        $this->load->library("form_validation");

        // Kurallar yazilir..
        $this->form_validation->set_rules("title", "Başlık", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        // Form Validation Calistirilir..
        // TRUE - FALSE
        $validate = $this->form_validation->run();

        // Monitör Askısı
        // monitor-askisi

        if($validate){

            $insert = $this->main_model->add(
                array(
                    "title"         => $this->input->post("title"),
                    "url"           => $this->input->post("url"),
                    "type"          => $this->input->post("type")
                ),
                    "menu"
            );

            // TODO Alert sistemi eklenecek...
            if($insert){

                redirect(base_url("admin/menu"));

            } else {

                redirect(base_url("admin/menu"));

            }

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "ekle";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

        // Başarılı ise
            // Kayit işlemi baslar
        // Başarısız ise
            // Hata ekranda gösterilir...

    }

    }
