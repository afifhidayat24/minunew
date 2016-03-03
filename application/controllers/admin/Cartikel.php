<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (APPPATH. "core/MY_Controller.php");

class Cartikel extends MY_Controller {

	public function __construct()
    {
        parent:: __construct();
		    $this->load->model('User_m');
		    $this->load->model('admin_m');
		    $this->load->library('resize');

	}

	public function index()
	{

		$data['page']='admin/list-artikel-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'tambah artikel';
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['listartikel'] = $this->admin_m->getartikel();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));

		$this->load->view('admin/vdashboard', $data);
	}
	public function tambah_artikel () {
		$data['page']='admin/add-artikel-v';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'tambah artikel';
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['userdata'] = $this->User_m->getuser();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));
		$data['getkategori']= $this->admin_m->getkategori();
		$this->load->view('admin/vdashboard', $data);

	}
	public function proses_delete_artikel ($id){
		$this->admin_m->delete_artikel($id);
		$this->session->set_flashdata('messagehapus', 'artikel Barhasil dihapus');
		redirect(base_url('admin/Cartikel/'));
	}

	public function edit_artikel ($id_artikel) {
		$data['nav']='admin/nav-admin';
		$data['page']='admin/edit-artikel-v';
		$data['title'] = 'edit artikel -'.$this->admin_m->detailartikel($id_artikel)->row('username');
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['userdata'] = $this->User_m->getuser();
		$data['getkategori']= $this->admin_m->getkategori();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));
		$data['detailartikel']= $this->admin_m->detailartikel($id_artikel)->row();
		$this->load->view('admin/vdashboard', $data);

	}

	public function proses_edit_artikel (){
	$post = $this->input->post();

 		$data = array(
	      'judul_artikel'  => $post['judul_artikel'],
	      'tgl_artikel' => $post['tgl_artikel'],
	      'isi_artikel'   => $post['isi_artikel'],
	      'id_kategori'   => $post['id_kategori']
	    );

 	$id = $this->input->post('id_artikel');
 	$file = $this->admin_m->detailartikel($id)->row('gambar_artikel');
    if (!empty($_FILES["photo"]["tmp_name"])) {
            if ($file != "default.jpg") {
                unlink("assets/img/artikel/$file");
            }
        }

	$namafolder="assets/img/artikel/"; //folder tempat menyimpan file
    if (!empty($_FILES["photo"]["tmp_name"]))
    {
      $LastID = $this->admin_m->getLastID()->id_artikel;
      $newID = ++$LastID;
      $namaExpl = explode('.', basename($_FILES['photo']['name']));
      $jmlArr = count($namaExpl);
      $namaFix = '';
      for ($i = 0; $i < $jmlArr-1; $i++) {
        $namaFix .= $namaExpl[$i];
      }
      $namafileOri = strtolower(url_title("minu artikel".'-'.$post['judul_artikel'].'-'.$newID.'-'.date('Ymd').'-'.time('Hms')).'.'.$namaExpl[$jmlArr-1]);
      // replace file name
      $_FILES['photo']['name'] = $namafileOri;
      $jenis_gambar=$_FILES['photo']['type'];
      if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png" || $jenis_gambar=="image/x-png")
      {
        $gambar = $namafolder . basename($_FILES['photo']['name']);
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $gambar)) {
          //echo "Gambar yang di upload: ".basename($_FILES['epsimage']['name']);
          $data['gambar_artikel'] = basename($_FILES['photo']['name']);
        } else {
          echo "Gambar gagal dikirim";
      }
      } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
      }
    } else {
      $data['gambar_artikel'] = $post['gambarsaatini'];
    }
    $a = basename($_FILES['photo']['name']);
    //file yang akan di resize
    $file = "assets/img/artikel/$a";
    //output resize (bisa juga di ubah ke format yang berbeda ex: jpg, png dll)
    $resizedFile = "assets/img/artikel/$a";
    $this->resize->smart_resize_image(null , file_get_contents($file), 400 , 250 , false , $resizedFile , true , false ,35 );

	    $this->admin_m->update_artikel ($id, $data);
	    $this->session->set_flashdata('message', 'Artikel Barhasil diperbarui');

	    redirect(base_url('admin/Cartikel/edit_artikel/'.$_POST['id_artikel']));
	}

	public function proses_add_artikel (){
		$post = $this->input->post();

	    $data = array(
	      'judul_artikel'  => $post['judul_artikel'],
	      'tgl_artikel' => $post['tgl_artikel'],
	      'isi_artikel'   => $post['isi_artikel'],
	      'id_kategori'   => $post['id_kategori'],
	      'id_user'   => $this->session->userdata('c_id')
	    );

    $namafolder="assets/img/artikel/"; //folder tempat menyimpan file
    if (!empty($_FILES["photo"]["tmp_name"]))
    {
      $LastID = $this->admin_m->getLastID()->id_artikel;
      $newID = ++$LastID;
      $namaExpl = explode('.', basename($_FILES['photo']['name']));
      $jmlArr = count($namaExpl);
      $namaFix = '';
      for ($i = 0; $i < $jmlArr-1; $i++) {
        $namaFix .= $namaExpl[$i];
      }
      $namafileOri = strtolower(url_title("minu artikel".'-'.$post['judul_artikel'].'-'.$newID.'-'.date('Ymd').'-'.time('Hms')).'.'.$namaExpl[$jmlArr-1]);
      // replace file name
      $_FILES['photo']['name'] = $namafileOri;
      $jenis_gambar=$_FILES['photo']['type'];
      if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png" || $jenis_gambar=="image/x-png")
      {
        $gambar = $namafolder . basename($_FILES['photo']['name']);
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $gambar)) {
          //echo "Gambar yang di upload: ".basename($_FILES['epsimage']['name']);
          $data['gambar_artikel'] = basename($_FILES['photo']['name']);
        } else {
          echo "Gambar gagal dikirim";
      }
      } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
      }
    } else {
      $data['gambar_artikel'] = ('default.jpg');
    }
    $a = basename($_FILES['photo']['name']);
    //file yang akan di resize
    $file = "assets/img/artikel/$a";
    //output resize (bisa juga di ubah ke format yang berbeda ex: jpg, png dll)
    $resizedFile = "assets/img/artikel/$a";
    $this->resize->smart_resize_image(null , file_get_contents($file), 400 , 250 , false , $resizedFile , true , false ,35 );

	    $this->admin_m->insert_artikel ($data);
	    $this->session->set_flashdata('message', 'Artikel Baru Barhasil dibuat');

	    redirect(base_url('admin/Cartikel/'));
	}


}
