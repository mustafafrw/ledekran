<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class urunler extends CI_Controller {
    public $viewFolder="";
  
  public function __construct() {
      
      parent::__construct();
      $this->viewFolder = "admin/urunler";
      $this->load->model("main_model");
  }
      
        public function index(){
            
            
        $viewData = new stdClass();
        
         $kategoriListe = $this->main_model->get_all(
            array(), "post_id ASC" ,"posts"
                 
        );
        
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "liste";
        $viewData->items = $kategoriListe;
        
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
        
         public function new_form(){

        $viewData = new stdClass();
         
         $kategoriListe = $this->main_model->get_all(
            array(), "id ASC" ,"category"
                 
        );
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "ekle";
        $viewData->items = $kategoriListe;
        
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
       
    }
      public function delete($post_id){

        $delete = $this->main_model->delete(
            array(
                "post_id"    => $post_id
            ),
           "posts"
        );

        // TODO Alert Sistemi Eklenecek...
        if($delete){
            redirect(base_url("admin/urunler"));
        } else {
            redirect(base_url("admin/urunler"));
        }

    }
       public function update($post_id){

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
                    "post_id"    => $post_id
                ),
                array(
                    "title"         => $this->input->post("title"),
                    "description"   => $this->input->post("description"),
                    "category_id"   => $this->input->post("category_id"),
                    "thumbnail"           => convertToSEO($this->input->post("thumbnail")),
                ),
                   "posts"
            );

            // TODO Alert sistemi eklenecek...
            if($update){

                redirect(base_url("admin/urunler"));

            } else {

                redirect(base_url("admin/urunler"));

            }

        } else {

            $viewData = new stdClass();

            /** Tablodan Verilerin Getirilmesi.. */
            $item = $this->main_model->get(
                array(
                    "post_id"    => $post_id,
                ),
                    "posts"
            );

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "güncelle";
            $viewData->form_error = true;
            $viewData->item = $item;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

        // Başarılı ise
        // Kayit işlemi baslar
        // Başarısız ise
        // Hata ekranda gösterilir...

    }
      public function update_form($post_id){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->main_model->get(
            array(
                "post_id"    => $post_id,
            ),"posts"
        );
        
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "güncelle";
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
     public function refresh_image_list($post_id){
          $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";

        
        $viewData->item_images = $this->main_model->get_all(
          array(
           "post_id" => $post_id,       
          ),"pictures"
        ); 
   
       $render_html = $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/render_elements/image_list_v", $viewData,true);
       
       echo $render_html;

    }
    public function image_upload($post_id){
        
        echo "SONUÇ OJERFMVPEKRGTOPRMTGHRM";

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
            "post_id"=> $post_id,
              "path"   => $uploaded_file,
              "type"  => "normal",
        ),"pictures"
            ); 
         
        } else {
            echo "islem basarisiz";
        }

    }
    public function image_form($id){

        $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";

        $viewData->item = $this->main_model->get(
            array(
                "post_id"    => $id
            ),
            "posts"
        );

        $viewData->item_images = $this->main_model->get_all(
          array(
           "post_id" => $id
                //sürekleyip bırakınca sıralamanın kalması için  ranka göre ASC şeklinde sırala
        ),"pictures_id ASC","pictures"
                );

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }
}
