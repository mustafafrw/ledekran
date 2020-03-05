<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
  public $viewFolder="";
  
  public function __construct() {
      
      parent::__construct();
      $this->viewFolder = "includes";
      $this->load->model("product_model");
  }

    public function index()
	{
        echo 'dalga';
	}
}
