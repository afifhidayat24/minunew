<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (APPPATH. "core/SU_Controller.php");

class Dashboardsuper extends SU_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Akunsuper');
	}

	public function index() {

		$data['page']='admin/home-dashboard-v';
		$data['nav']='admin/nav-super';
		$data['title'] = 'home';
		$data['userdata'] = $this->User_m->getuser();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));
		$this->load->view('admin/vdashboard', $data);
	}

	public function detail_dashboard(){

		$data['page']='admin/home-dashboard-v';
		$data['title'] = 'home';
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));
		$this->load->view('admin/vdashboard', $data);
	}

}
