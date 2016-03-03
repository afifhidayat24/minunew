<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cuserhome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Murid_m');
		$this->load->model('Akunmurid');
		$this->load->helper(array('url','html','form'));
	}

	public function index()	{
		if (!$this->Akunmurid->validate_cookie()) {
			redirect(base_url('chome'));
		}
		else {
			$data['halaman'] = 'pages/vhomesiswa';
			$data['murid'] = $this->Murid_m->getmurid($this->session->userdata('c_id_murid'));
			$this->load->view('pages/vuserhome', $data);
		}
	}
}
