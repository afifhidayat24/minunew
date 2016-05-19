<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clomba extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->model('Home_m');
  }

  public function index()
  {
    $data['title'] = 'MADRASAH IBTIDAIYAH NAHDLATUL ULAMA 2';
    $data['taglineuni'] = 'LEMBAGA PENDIDIKAN MA’ARIF CAB. BANYUWANGI';
    $data['alamat'] = 'Jl. Sumber Urip Kaliboyo Kradenan Purwoharjo Banyuwangi Jawa Timur';
    $data['halaman'] = 'pages/vlomba';
    $this->load->view('pages/vhome', $data);

  }

}
