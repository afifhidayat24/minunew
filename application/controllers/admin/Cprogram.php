<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cprogram extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('User_m');
		$this->load->model('Admin_m');
		$this->load->library('resize');

	}

	public function index()
	{

		$data['page']='admin/list-program-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'Tambah Program';
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['listprogram'] = $this->Admin_m->getprogram();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));

		$this->load->view('admin/vdashboard', $data);
	}
	public function tambah_program () {
		$data['page']='admin/add-program-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'tambah program';
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['userdata'] = $this->User_m->getuser();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));
		$this->load->view('admin/vdashboard', $data);

	}
	public function proses_delete_program ($id){
		$this->Admin_m->delete_program($id);
		$this->session->set_flashdata('messagehapus', 'program Barhasil dihapus');
		redirect(base_url('admin/Cprogram/'));
	}

	public function edit_program ($id_program) {
		$data['nav']='admin/nav-admin';
		$data['page']='admin/edit-program-v';
		$data['title'] = 'edit program -'.$this->Admin_m->detailprogram($id_program)->row('username');
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['userdata'] = $this->User_m->getuser();
		$data['getkategori']= $this->Admin_m->getkategori();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));
		$data['detailprogram']= $this->Admin_m->detailprogram($id_program)->row();
		$this->load->view('admin/vdashboard', $data);

	}

	public function proses_edit_program (){
		$post = $this->input->post();

		$data = array(
			'nm_program'  => $post['nm_program'],
			'ket_program' => $post['ket_program'],
			'kat_program' => $post['kat_program'],
		);

		$id = $this->input->post('id_program');
		$file = $this->Admin_m->detailprogram($id)->row('img_program');
		if (!empty($_FILES["photo"]["tmp_name"])) {
			if ($file != "default.jpg") {
				unlink("assets/img/program/$file");
			}
		}

		$namafolder="assets/img/program/"; //folder tempat menyimpan file
		if (!empty($_FILES["photo"]["tmp_name"]))
		{
			$LastID = $this->Admin_m->getLastID()->id_program;
			$newID = ++$LastID;
			$namaExpl = explode('.', basename($_FILES['photo']['name']));
			$jmlArr = count($namaExpl);
			$namaFix = '';
			for ($i = 0; $i < $jmlArr-1; $i++) {
				$namaFix .= $namaExpl[$i];
			}
			$namafileOri = strtolower(url_title("minu program".'-'.$post['nm_program'].'-'.$newID.'-'.date('Ymd').'-'.time('Hms')).'.'.$namaExpl[$jmlArr-1]);
			// replace file name
			$_FILES['photo']['name'] = $namafileOri;
			$jenis_gambar=$_FILES['photo']['type'];
			if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png" || $jenis_gambar=="image/x-png")
			{
				$gambar = $namafolder . basename($_FILES['photo']['name']);
				if (move_uploaded_file($_FILES['photo']['tmp_name'], $gambar)) {
					//echo "Gambar yang di upload: ".basename($_FILES['epsimage']['name']);
					$data['img_program'] = basename($_FILES['photo']['name']);
				} else {
					echo "Gambar gagal dikirim";
				}
			} else {
				echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
			}
		} else {
			$data['img_program'] = $post['gambarsaatini'];
		}
		$a = basename($_FILES['photo']['name']);
		//file yang akan di resize
		$file = "assets/img/program/$a";
		//output resize (bisa juga di ubah ke format yang berbeda ex: jpg, png dll)
		$resizedFile = "assets/img/program/$a";
		$this->resize->smart_resize_image(null , file_get_contents($file), 400 , 250 , false , $resizedFile , true , false ,35 );

		$this->Admin_m->update_program ($id, $data);
		$this->session->set_flashdata('message', 'program Barhasil diperbarui');

		redirect(base_url('admin/Cprogram/edit_program/'.$_POST['id_program']));
	}

	public function proses_add_program (){
		$post = $this->input->post();

		$data = array(
			'nm_program'  => $post['nm_program'],
			'ket_program' => $post['ket_program'],
			'kat_program' => $post['kat_program'],

		);

		$namafolder="assets/img/program/"; //folder tempat menyimpan file
		if (!empty($_FILES["photo"]["tmp_name"]))
		{
			$LastID = $this->Admin_m->getLastID()->id_program;
			$newID = ++$LastID;
			$namaExpl = explode('.', basename($_FILES['photo']['name']));
			$jmlArr = count($namaExpl);
			$namaFix = '';
			for ($i = 0; $i < $jmlArr-1; $i++) {
				$namaFix .= $namaExpl[$i];
			}
			$namafileOri = strtolower(url_title("minu program".'-'.$post['nm_program'].'-'.$newID.'-'.date('Ymd').'-'.time('Hms')).'.'.$namaExpl[$jmlArr-1]);
			// replace file name
			$_FILES['photo']['name'] = $namafileOri;
			$jenis_gambar=$_FILES['photo']['type'];
			if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png" || $jenis_gambar=="image/x-png")
			{
				$gambar = $namafolder . basename($_FILES['photo']['name']);
				if (move_uploaded_file($_FILES['photo']['tmp_name'], $gambar)) {
					//echo "Gambar yang di upload: ".basename($_FILES['epsimage']['name']);
					$data['img_program'] = basename($_FILES['photo']['name']);
				} else {
					echo "Gambar gagal dikirim";
				}
			} else {
				echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
			}
		} else {
			$data['img_program'] = ('default.jpg');
		}
		$a = basename($_FILES['photo']['name']);
		//file yang akan di resize
		$file = "assets/img/program/$a";
		//output resize (bisa juga di ubah ke format yang berbeda ex: jpg, png dll)
		$resizedFile = "assets/img/program/$a";
		$this->resize->smart_resize_image(null , file_get_contents($file), 400 , 250 , false , $resizedFile , true , false ,35 );

		$this->Admin_m->insert_program ($data);
		$this->session->set_flashdata('message', 'program Baru Barhasil dibuat');

		redirect(base_url('admin/Cprogram/tambah_program'));
	}


}
