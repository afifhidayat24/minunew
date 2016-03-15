<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (APPPATH. "core/G_Controller.php");

class Cdaftarguru_g extends G_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Guru_m');
	}

	public function index() {

		$data['page']='admin/adm-daftar-guru-v';
		$data['nav']='admin/nav-guru';
		$data['title'] = 'home';
		$data['gurudata'] = $this->User_m->getguru();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));

		$this->load->view('admin/vdashboard', $data);
	}



}
