<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (APPPATH. "core/A_Controller.php");

class Cdaftarguru_a extends A_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('User_m');
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

	public function Proses_add_dataguru (){
		$post = $this->input->post();
		$data = array(
			'nama_guru' => $post['nama_guru'],
			'nip' => $post['nip'],
			'tgl_lahir' => $post['tgl_lahir'],
			'alamat' => $post['alamat'],
			'kode_guru' => $post['kode_guru'],
			'jabatan'	=> $post['jabatan'],
			'gender' => $post['gender']


		);
		$namafolder="assets/img/guru/"; //folder tempat menyimpan file
		if (!empty($_FILES["photo"]["tmp_name"]))
		{
			$LastID = $this->Guru_m->getLastID()->id_guru;
			$newID = ++$LastID;
			$namaExpl = explode('.', basename($_FILES['photo']['name']));
			$jmlArr = count($namaExpl);
			$namaFix = '';
			for ($i = 0; $i < $jmlArr-1; $i++) {
				$namaFix .= $namaExpl[$i];
			}
			$namafileOri = strtolower(url_title("Minu Staff".'-'.$post['nama_guru'].'-'.$newID.'-'.date('Ymd').'-'.time('Hms')).'.'.$namaExpl[$jmlArr-1]);
			// replace file name
			$_FILES['photo']['name'] = $namafileOri;
			$jenis_gambar=$_FILES['photo']['type'];
			if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png" || $jenis_gambar=="image/x-png")
			{
				$gambar = $namafolder . basename($_FILES['photo']['name']);
				if (move_uploaded_file($_FILES['photo']['tmp_name'], $gambar)) {
					//echo "Gambar yang di upload: ".basename($_FILES['epsimage']['name']);
					$data['photo'] = basename($_FILES['photo']['name']);
				} else {
					echo "Gambar gagal dikirim";
				}
			} else {
				echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
			}
		} else {
			$data['photo'] = ('default.jpg');
		}
		$a = basename($_FILES['photo']['name']);
		//file yang akan di resize
		$file = "assets/img/guru/$a";
		//output resize (bisa juga di ubah ke format yang berbeda ex: jpg, png dll)
		$resizedFile = "assets/img/guru/$a";
		$this->resize->smart_resize_image(null , file_get_contents($file), 400 , 250 , false , $resizedFile , true , false ,35 );

		$this->User_m->insert_guru ($data);
		$this->session->set_flashdata('message', 'Guru Barhasil ditambahkan');

		redirect(base_url('admin/Cdaftarguru_a'));
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

		redirect(base_url('admin/Cdaftarguru_a/'));
	}

}
