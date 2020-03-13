<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {
  
  public function __construct() {
      
      parent::__construct();
      $this->load->model("main_model");
  }

    public function index()
	{
        $viewData = new stdClass();
        $data = $this->main_model->get_all(
            array(), "post_id ASC","posts"
        );
        header("Content-Type: text/xml;charset=iso-8859-1");
        $viewData->data = $data;
        $this->load->view("sitemap/index",$viewData);
	}
}
