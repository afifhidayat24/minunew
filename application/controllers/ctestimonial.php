<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctestimonial extends CI_Controller{

  public function __construct() {
    parent::__construct();
  }

  public function index()
  {

    $data['halaman'] = 'pages/vtestimonial';
    $this->load->view('pages/vhome', $data);

  }

}
