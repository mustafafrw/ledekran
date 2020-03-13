 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    public $viewFolder="";

  public function __construct() {

      parent::__construct();
      if($_SESSION['user_logged'] == FALSE){
        $this->session->set_flashdata("error","Please login first to view this page!!");
        redirect('admin/auth/login');
  }
      $this->viewFolder = "admin/kategori";
      $this->load->model("main_model");
  }

        public function index(){


        $viewData = new stdClass();

         $kategoriListe = $this->main_model->get_all(
            array(), "id ASC" ,"category"

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
                "id"    => $id
            ),
           "category"
        );

        // TODO Alert Sistemi Eklenecek...
        if($delete){
            redirect(base_url("admin/kategori"));
        } else {
            redirect(base_url("admin/kategori"));
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
                    "id"    => $id
                ),
                array(
                    "title"         => $this->input->post("title"),
                    "description"   => $this->input->post("description"),
                    "url"           => convertToSEO($this->input->post("title")),
                ),
                   "category"
            );

            // TODO Alert sistemi eklenecek...
            if($update){

                redirect(base_url("admin/kategori"));

            } else {

                redirect(base_url("admin/kategori"));

            }

        } else {

            $viewData = new stdClass();

            /** Tablodan Verilerin Getirilmesi.. */
            $item = $this->main_model->get(
                array(
                    "id"    => $id,
                ),
                    "category"
            );

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "guncelle";
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
                "id"    => $id,
            ),"category"
        );

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "guncelle";
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
                    "id"         => convertToSEO($this->input->post("title")),
                    "title"         => $this->input->post("title"),
                    "description"   => $this->input->post("description"),
                    "url"           => convertToSEO($this->input->post("title")),
                ),
                    "category"
            );

            // TODO Alert sistemi eklenecek...
            if($insert){

                redirect(base_url("admin/kategori"));

            } else {

                redirect(base_url("admin/kategori"));

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
