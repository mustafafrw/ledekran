<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
    public $viewFolder="";

  public function __construct() {

      parent::__construct();
      if($_SESSION['user_logged'] == FALSE){
        $this->session->set_flashdata("error","Please login first to view this page!!");
        redirect('admin/auth/login');
  }
      $this->viewFolder = "admin/slider";
      $this->load->model("main_model");
  }

        public function index(){


        $viewData = new stdClass();

         $items= $this->main_model->get_all(
            array(), "id ASC" ,"slider"

        );


        $this->image_form();
       // $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);


        }

         public function new_form(){

        $viewData = new stdClass();

         $kategoriListe = $this->main_model->get_all(
            array(), "id ASC" ,"slider"

        );
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "liste";
        $viewData->item = $kategoriListe;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }
      public function delete($id){

        $delete = $this->main_model->delete(
            array(
                "id"    => $id
            ),
           "slider"
        );

        // TODO Alert Sistemi Eklenecek...
        if($delete){
            redirect(base_url("admin/slider"));
        } else {
            redirect(base_url("admin/slider"));
        }

    }
       public function update($id){



            $update = $this->main_model->update(
                array(
                        "id"  => $id
                ),
                array(
                    "path"    => $this->input->post("path"),
                    "yazi1"   => $this->input->post("title1"),
                    "yazi2"   => $this->input->post("title2"),
                    "picture" => $this->input->post("picture"),
                ),
                   "slider"
            );

            // TODO Alert sistemi eklenecek...
            if($update){

                redirect(base_url("admin/slider"));

            } else {

                redirect(base_url("admin/slider"));

            }

        // Başarılı ise
        // Kayit işlemi baslar
        // Başarısız ise
        // Hata ekranda gösterilir...

    }
      public function update_form($id){

        $viewData = new stdClass();


         $slider = $this->main_model->get(
                array(
                    "id"    => $id,
                ),
                    "slider"
            );

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "güncelle";
        $viewData->item = $slider;

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
                    "post_id"         => convertToSEO($this->input->post("title")),
                    "title"         => $this->input->post("title"),
                    "description"   => $this->input->post("description"),
                    "category_id"           => convertToSEO($this->input->post("category_id")),
                ),
                    "posts"
            );

            // TODO Alert sistemi eklenecek...
            if($insert){

                redirect(base_url("admin/urunler"));

            } else {

                redirect(base_url("admin/urunler"));

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
     public function refresh_image_list(){
          $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";


        $viewData->item_images = $this->main_model->get_all(
          array(
          ),"id ASC","slider"
        );

       $render_html = $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/render_elements/image_list_v", $viewData,true);

       echo $render_html;
    }
    public function image_upload(){

        $file_name = convertToSEO(pathinfo($_FILES["file"]["name"],PATHINFO_FILENAME)).".".pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION);

        $config["allowed_types"] = "jpg|jpeg|png";
        $config["upload_path"]   = "uploads";
        $config["file_name"]     =$file_name;

        $this->load->library("upload", $config);

        $upload = $this->upload->do_upload("file");

        if($upload){

          $uploaded_file = $this->upload->data("file_name");

          $this->main_model->add(
        array(
              "id"    => $id,
              "path"  => $uploaded_file,
              "yazi1"  => "yazi1",
              "yazi2"  => "yazi2",
              "picture"  => "picture",
        ),"slider"
            );

        } else {
            echo "islem basarisiz";
        }

    }
    public function image_form(){

        $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";

        $viewData->item_images = $this->main_model->get_all(
            array(
            ),"id ASC",
            "slider"
        );

        /*$viewData->item_images = $this->main_model->get_all(
          array(
           "id" => $id
                //sürekleyip bırakınca sıralamanın kalması için  ranka göre ASC şeklinde sırala
        ),"pictures_id ASC","pictures"
                );*/

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }
    public function imageDelete($id){

      $fileName = $this->main_model->get(
              array(
                   "pictures_id"=> $id
              ),"pictures"
            );
      $delete = $this->main_model->delete(
          array(
              "id" => $id
          ),"slider"
        );


      // TODO Alert Sistemi Eklenecek...
      if($delete){

         unlink("uploads/$fileName->path");

          redirect(base_url("admin/slider/image_form/$post_id"));

      } else {
          redirect(base_url("admin/slider/image_form/$post_id"));
      }

  }
}
