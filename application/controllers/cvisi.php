<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cvisi extends CI_Controller{

  public function __construct() {
    parent::__construct();
  }

  public function index()
  {

    $data['halaman'] = 'pages/vvisi';
    $this->load->view('pages/vhome', $data);

  }

}
