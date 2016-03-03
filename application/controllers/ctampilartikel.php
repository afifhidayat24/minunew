<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctampilartikel extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->model('Home_m');
    $this->load->helper(array('url','html','form'));
  }

  public function artikel($idartikel) {
    $data['title'] = 'MADRASAH IBTIDAIYAH NAHDLATUL ULAMA 2';
    $data['taglineuni'] = 'LEMBAGA PENDIDIKAN MA’ARIF CAB. BANYUWANGI';
    $data['alamat'] = 'Jl. Sumber Urip Kaliboyo Kradenan Purwoharjo Banyuwangi Jawa Timur';
    $data['artbycat'] = $this->Home_m->detailartikel($idartikel);
    $data['halaman'] = 'pages/vtampilartikel';
    $this->load->view('pages/vhome', $data);
  }

}
