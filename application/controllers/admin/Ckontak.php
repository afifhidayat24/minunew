<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ckontak extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_m');
		$this->load->model('User_m');
	}

	public function index() {

		$data['page']='admin/adm-kontakmasuk-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'Kontak';
		$data['getkontak'] = $this->Admin_m->getkontak();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));

		$this->load->view('admin/vdashboard', $data);
	}

}
