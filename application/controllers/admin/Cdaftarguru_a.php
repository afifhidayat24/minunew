<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (APPPATH. "core/A_Controller.php");

class Cdaftarguru_a extends A_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Guru_m');
	}

	public function index() {

		$data['page']='admin/adm-daftar-guru-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'home';
		$data['gurudata'] = $this->User_m->getguru();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));

		$this->load->view('admin/vdashboard', $data);
	}

	public function proses_update_dataguru (){
		$post = $this->input->post();

		$data = array(
			'username' => $post['username'],
			'pass' => md5($post['password']),
			'status'   => $post['status'],
		);
		$data2 = array(
			'nama_guru'=> $post['nama_guru'],
			'tgl_lahir'=> $post['tgl_lahir'],
			'nip'=> $post['nip'],
			'jabatan'=> $post['jabatan'],
			'alamat'=> $post['alamat'],
			'status_guru'=> $post['status_guru'],
			'nm_ibu'=> $post['nm_ibu'],
			'kode_guru'=> $post['kode_guru'],
		);

		$id = $this->input->post('id_user');
		$this->User_m->edit_user ($id, $data);
		$this->Guru_m->update_guru ($id, $data2);
		$this->session->set_flashdata('message', 'Data Guru Barhasil diperbarui');

		redirect(base_url('admin/Cdaftarguru_a/'));
	}

}
