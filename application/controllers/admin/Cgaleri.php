<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (APPPATH. "core/A_Controller.php");

class Cgaleri extends A_Controller {

	public function __construct()
    {
        parent:: __construct();
		    $this->load->model('User_m');
		    $this->load->model('admin_m');
		    $this->load->library('resize');

	}

	public function index()
	{

		$data['page']='admin/adm-list-galeri-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'galeri';
		$data['listgaleri'] = $this->admin_m->getgaleri();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));

		$this->load->view('admin/vdashboard', $data);
	}
	public function tambah_galeri () {
		$data['page']='admin/adm-galeri-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'tambah galeri';
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));
		$data['getgaleri']= $this->admin_m->getgaleri();

		$this->load->view('admin/vdashboard', $data);

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
      $LastID = $this->admin_m->getLastID()->id_artikel;
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

	    $this->admin_m->insert_galeri ($data);
	    $this->session->set_flashdata('message', 'Artikel Baru Barhasil dibuat');

	    redirect(base_url('admin/Cgaleri/'));
	}


}
