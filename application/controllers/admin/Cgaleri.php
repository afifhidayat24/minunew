<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (APPPATH. "core/A_Controller.php");

class Cgaleri extends A_Controller {

	public function __construct()
    {
        parent:: __construct();
		    $this->load->model('User_m');
		    $this->load->model('Admin_m');
		    $this->load->library('resize');

	}

	public function index()
	{

		$data['page']='admin/adm-list-galeri-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'galeri';
		$data['listgaleri'] = $this->Admin_m->getgaleri();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));

		$this->load->view('admin/vdashboard', $data);
	}
	public function proses_delete_galeri ($id){
		$this->Admin_m->delete_galeri($id);
		$this->session->set_flashdata('messagehapus', 'galeri Barhasil dihapus');
		redirect(base_url('admin/Cgaleri/'));
	}
	public function tambah_galeri () {
		$data['page']='admin/adm-galeri-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'tambah galeri';
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));
		$data['getgaleri']= $this->Admin_m->getgaleri();

		$this->load->view('admin/vdashboard', $data);

	}
	public function edit_galeri ($id_galeri) {
		$data['nav']='admin/nav-admin';
		$data['page']='admin/adm-edit-galeri-v';
		$data['title'] = 'edit galeri -'.$this->Admin_m->edit_galeri($id_galeri)->row('username');
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['userdata'] = $this->User_m->getuser();
		$data['getkategori']= $this->Admin_m->getkategori();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));
		$data['editgaleri']= $this->Admin_m->edit_galeri($id_galeri)->row();
		$this->load->view('admin/vdashboard', $data);

	}
	public function proses_edit_galeri (){
		$post = $this->input->post();

		$data = array(
	      'judul_img'  => $post['judul_img'],
	      'tgl_upload' => $post['tgl_upload'],
	      'ket_galeri'   => $post['ket_galeri'],
	      'id_user'   => $this->session->userdata('c_id')
	    );

		$id = $this->input->post('id_galeri');
		$file = $this->Admin_m->edit_galeri($id)->row('img_galeri');
		if (!empty($_FILES["img_galeri"]["tmp_name"])) {
			if ($file != "default.jpg") {
				unlink("assets/img/galeri/$file");
			}
		}
		$namafolder="assets/img/galeri/"; //folder tempat menyimpan file
	    if (!empty($_FILES["img_galeri"]["tmp_name"]))
	    {
	      $LastID = $this->Admin_m->getLastID()->id_galeri;
	      $newID = ++$LastID;
	      $namaExpl = explode('.', basename($_FILES['img_galeri']['name']));
	      $jmlArr = count($namaExpl);
	      $namaFix = '';
	      for ($i = 0; $i < $jmlArr-1; $i++) {
	        $namaFix .= $namaExpl[$i];
	      }
	      $namafileOri = strtolower(url_title("galeri".'-'.$post['judul_img'].'-'.$newID.'-'.date('Ymd').'-'.time('Hms')).'.'.$namaExpl[$jmlArr-1]);
	      // replace file name
	      $_FILES['img_galeri']['name'] = $namafileOri;
	      $jenis_gambar=$_FILES['img_galeri']['type'];
	      if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png" || $jenis_gambar=="image/x-png")
	      {
	        $gambar = $namafolder . basename($_FILES['img_galeri']['name']);
	        if (move_uploaded_file($_FILES['img_galeri']['tmp_name'], $gambar)) {
	          //echo "Gambar yang di upload: ".basename($_FILES['epsimage']['name']);
	          $data['img_galeri'] = basename($_FILES['img_galeri']['name']);
	        } else {
	          echo "Gambar gagal dikirim";
	      }
	      } else {
	        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
	      }
	    } else {
	      $data['img_galeri'] = ('gambarsaatini');
	    }
	    $a = basename($_FILES['img_galeri']['name']);
	    //file yang akan di resize
	    $file = "assets/img/galeri/$a";
	    //output resize (bisa juga di ubah ke format yang berbeda ex: jpg, png dll)
	    $resizedFile = "assets/img/galeri/$a";
	    $this->resize->smart_resize_image(null , file_get_contents($file), 400 , 250 , false , $resizedFile , true , false ,35 );

		    $this->Admin_m->update_galeri ($id, $data);
		    $this->session->set_flashdata('message', 'Galeri Baru Barhasil diperbarui');

		    redirect(base_url('admin/Cgaleri/'));
		}




	public function  proses_tambah_galeri(){
		$post = $this->input->post();

	    $data = array(
	      'judul_img'  => $post['judul_img'],
	      'tgl_upload' => $post['tgl_upload'],
	      'ket_galeri'   => $post['ket_galeri'],
	      'id_user'   => $this->session->userdata('c_id')
	    );

    $namafolder="assets/img/galeri/"; //folder tempat menyimpan file
    if (!empty($_FILES["img_galeri"]["tmp_name"]))
    {
      $LastID = $this->Admin_m->getLastID()->id_artikel;
      $newID = ++$LastID;
      $namaExpl = explode('.', basename($_FILES['img_galeri']['name']));
      $jmlArr = count($namaExpl);
      $namaFix = '';
      for ($i = 0; $i < $jmlArr-1; $i++) {
        $namaFix .= $namaExpl[$i];
      }
      $namafileOri = strtolower(url_title("galeri".'-'.$post['judul_img'].'-'.$newID.'-'.date('Ymd').'-'.time('Hms')).'.'.$namaExpl[$jmlArr-1]);
      // replace file name
      $_FILES['img_galeri']['name'] = $namafileOri;
      $jenis_gambar=$_FILES['img_galeri']['type'];
      if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png" || $jenis_gambar=="image/x-png")
      {
        $gambar = $namafolder . basename($_FILES['img_galeri']['name']);
        if (move_uploaded_file($_FILES['img_galeri']['tmp_name'], $gambar)) {
          //echo "Gambar yang di upload: ".basename($_FILES['epsimage']['name']);
          $data['img_galeri'] = basename($_FILES['img_galeri']['name']);
        } else {
          echo "Gambar gagal dikirim";
      }
      } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
      }
    } else {
      $data['img_galeri'] = ('default.jpg');
    }
    $a = basename($_FILES['img_galeri']['name']);
    //file yang akan di resize
    $file = "assets/img/galeri/$a";
    //output resize (bisa juga di ubah ke format yang berbeda ex: jpg, png dll)
    $resizedFile = "assets/img/galeri/$a";
    $this->resize->smart_resize_image(null , file_get_contents($file), 400 , 250 , false , $resizedFile , true , false ,35 );

	    $this->Admin_m->insert_galeri ($data);
	    $this->session->set_flashdata('message', 'Galeri Baru Barhasil dibuat');

	    redirect(base_url('admin/Cgaleri/'));
	}


}
