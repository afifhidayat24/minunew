<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (APPPATH. "core/A_Controller.php");

class cpage extends A_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('admin_m');
	}
	public function select_kategori()
	{
		$data['page']='admin/adm-kategori-v';
		$data['nav']='admin/nav-admin';
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['title'] = 'Kategori';
		$data['gtuser'] = $this->admin_m->detail_user($this->session->userdata('c_id'));
		$data['getkategori']= $this->admin_m->getkategori();
		$this->load->view('admin/vdashboard', $data);
	}
	public function select_page()
	{
		$data['page']='admin/adm-page-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'page';
		$data['gtuser'] = $this->admin_m->detail_user($this->session->userdata('c_id'));
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['getpage']= $this->admin_m->getpage();
		$data['getkategori']= $this->admin_m->getkategori();
		$this->load->view('admin/vdashboard', $data);
	}
	public function select_pageisi()
	{
		$data['page']='admin/adm-isipage-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'page';
		$data['gtuser'] = $this->admin_m->detail_user($this->session->userdata('c_id'));
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['getpage']= $this->admin_m->getpage();
		$data['getkategori']= $this->admin_m->getkategori();
		$this->load->view('admin/vdashboard', $data);
	}
	public function proses_add_kategori (){
		$post = $this->input->post();

		$this->form_validation->set_rules('kode_kategori', 'Kode Kategori', 'required|max_length[3]');
		$this->form_validation->set_rules('judul_kategori', 'Judul Kategori', 'required');
		$this->form_validation->set_rules('ket_kategori', 'Keterangan Kategori', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message', validation_errors());
		}else{
			$data = array(
				'kode_kategori'  => $post['kode_kategori'],
				'judul_kategori' => $post['judul_kategori'],
				'ket_kategori'   => $post['ket_kategori'],
			);

			$this->admin_m->insert_kategori ($data);
			$this->session->set_flashdata('message', 'Kategori Barhasil dibuat');
		}

		redirect(base_url('admin/cpage/select_kategori'));
	}
	public function proses_add_page (){
		$post = $this->input->post();

		$data = array(
			'judul_page'=> $post['judul_page'],
			'isi_page'  => $post['isi_page'],
			'icon_page'  => $post['icon_page'],
		);

		$this->admin_m->insert_page ($data);
		$this->session->set_flashdata('message', 'page baru Barhasil dibuat');

		redirect(base_url('admin/cpage/select_page'));
	}
	public function proses_delete_kategori ($id){
		$this->admin_m->delete_kategori($id);
		$this->session->set_flashdata('messagehapus', 'Kategori Barhasil dihapus');
		redirect(base_url('admin/cpage/select_kategori'));
	}
	public function proses_delete_page ($id){
		$this->admin_m->delete_page($id);
		$this->session->set_flashdata('messagehapus', 'page Barhasil dihapus');
		redirect(base_url('admin/cpage/select_page'));
	}
	public function edit_kategori ($id){
		$data['page']='admin/adm-edit-kategori';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'Kategori';
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['gtuser'] = $this->admin_m->detail_user($this->session->userdata('c_id'));
		$data['getkategori']= $this->admin_m->edit_kategori($id)->row();
		$this->load->view('admin/vdashboard', $data);
	}
	public function proses_edit_kategori (){
		$post = $this->input->post();

		$data = array(
			'kode_kategori'  => $post['kode_kategori'],
			'judul_kategori' => $post['judul_kategori'],
			'ket_kategori'   => $post['ket_kategori'],
		);

		$id = $this->input->post('id_kategori');
		$this->admin_m->update_kategori ($id, $data);
		$this->session->set_flashdata('message', 'Kategori Barhasil diperbarui');

		redirect(base_url('admin/cpage/select_kategori'));
	}
}
