<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (APPPATH. "core/MY_Controller.php");

class Cdaftarsiswa_a extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Murid_m');
	}

	public function index() {
		
		$data['page']='admin/adm-daftar-siswa-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'siswa';
		$data['siswadata'] = $this->User_m->getsiswa();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));

		$this->load->view('admin/vdashboard', $data);
	}

}
