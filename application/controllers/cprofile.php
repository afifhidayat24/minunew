<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cprofile extends CI_Controller {

	public function __construct() {
    parent::__construct();
    $this->load->model('Murid_m');
    $this->load->helper(array('url','html','form'));
  }


	public function index()
	{
		$data['title'] = 'MADRASAH IBTIDAIYAH NAHDLATUL ULAMA 2';
    $data['taglineuni'] = 'LEMBAGA PENDIDIKAN MA’ARIF CAB. BANYUWANGI';
    $data['alamat'] = 'Jl. Sumber Urip Kaliboyo Kradenan Purwoharjo Banyuwangi Jawa Timur';
		
		$data['murid'] = $this->Murid_m->getmurid($this->session->userdata('c_id_murid'));
		$this->load->view('pages/vprofile', $data);

	}
}
