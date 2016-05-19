<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chome extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->model('Home_m');
		$this->load->helper(array('url','html','form'));
  }

  public function index()
  {
    $data['title'] = 'MADRASAH IBTIDAIYAH NAHDLATUL ULAMA 2';
    $data['taglineuni'] = 'LEMBAGA PENDIDIKAN MA’ARIF CAB. BANYUWANGI';
    $data['alamat'] = 'Jl. Sumber Urip Kaliboyo Kradenan Purwoharjo Banyuwangi Jawa Timur';
    $data['artbycat'] = $this->Home_m->getartikel();
    $data['artbycat1'] = $this->Home_m->getartikel1();
    $data['artbycat2'] = $this->Home_m->getartikel2();
    $data['artbycat3'] = $this->Home_m->getartikel3();
    $data['artbycatpres'] = $this->Home_m->getartikelprestasi();
    $data['artbycatjar'] = $this->Home_m->getartikeljariyah();
    $data['artbycatagenda'] = $this->Home_m->getartikelagenda();
    $data['catgaleri'] = $this->Home_m->getgaleri();


    $data['halaman'] = 'pages/vmainhome';
    $this->load->view('pages/vhome', $data);

  }

  function lihat($id){
      $this->load->model('Home_m');
      $num_row = $this->Home_m->lihat($id)->num_rows();
      if ($num_row != 1) {
          show_404();
      }else{
          $data['title'] = 'MADRASAH IBTIDAIYAH NAHDLATUL ULAMA 2';
          $data['taglineuni'] = 'LEMBAGA PENDIDIKAN MA’ARIF CAB. BANYUWANGI';
          $data['alamat'] = 'Jl. Sumber Urip Kaliboyo Kradenan Purwoharjo Banyuwangi Jawa Timur';

          $data['pageini'] = $this->Home_m->lihat($id)->row(); 
          $data['halaman'] = 'pages/vlihat';
          $this->load->view('pages/vhome', $data);
      }
  }
}
