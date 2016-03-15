<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cfaq extends A_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_m');
		$this->load->model('User_m');
	}

	public function index() {

		$data['page']='admin/adm-faq-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'FAQ';
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));

		$this->load->view('admin/vdashboard', $data);
	}
	public function insert_faq() {
		$post = $this->input->post();

		$data = array(

			'subyek_faq' => $post['subyek_faq'],
			'keterangan_faq'   => $post['keterangan_faq'],
		);

		$this->Admin_m->insert_faq ($data);
		$this->session->set_flashdata('message', 'Kategori Barhasil dibuat');

		redirect(base_url('admin/cfaq/'));
	}
}
