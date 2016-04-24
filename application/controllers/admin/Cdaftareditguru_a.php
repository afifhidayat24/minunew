<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (APPPATH. "core/A_Controller.php");

class Cdaftareditguru_a extends A_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Admin_m');
		$this->load->model('Guru_m');
		$this->load->library('resize');
	}

	public function index() {

		$data['page']='admin/adm-daftar-guru-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'home';
		$data['gurudata'] = $this->Guru_m->select_data_guru();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));

		$this->load->view('admin/vdashboard', $data);
	}

	public function proses_delete_guru ($id){
		$this->Guru_m->delete_guru($id);
		$this->session->set_flashdata('messagehapus', 'Data Guru Barhasil dihapus');
		redirect(base_url('admin/Cdaftarguru_a'));
	}

	public function edit_guru ($id_guru) {
		$data['nav']='admin/nav-admin';
		$data['page']='admin/adm-daftar-editguru-v';
		$data['title'] = 'edit guru -'.$this->Guru_m->detailguru($id_guru)->row('username');
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['userdata'] = $this->User_m->getuser();
		$data['getkategori']= $this->Admin_m->getkategori();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));
		$data['detailguru']= $this->Guru_m->detailguru($id_guru)->row();
		$this->load->view('admin/vdashboard', $data);

	}


	public function proses_update_dataguru (){
		$post = $this->input->post();

		$data2 = array(
			'nama_guru'=> $post['nama_guru'],
			'tgl_lahir'=> $post['tgl_lahir'],
			'nip'=> $post['nip'],
			'jabatan'=> $post['jabatan'],
			'gender'=> $post['gender'],
			'alamat'=> $post['alamat'],
			'status_guru'=> $post['status_guru'],
			'nm_ibu'=> $post['nm_ibu'],
			'kode_guru'=> $post['kode_guru'],
		);

		$id = $this->input->post('id_guru');
		$this->Guru_m->update_guru ($id, $data2);
		$this->session->set_flashdata('message', 'Data Guru Barhasil diperbarui');

		redirect(base_url('admin/Cdaftareditguru_a/'));
	}

}
