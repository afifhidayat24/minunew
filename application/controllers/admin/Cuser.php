<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (APPPATH. "core/MY_Controller.php");

class Cuser extends MY_Controller {

	public function __construct()
    {
        parent:: __construct();
				$this->load->model('Guru_m');
		    $this->load->model('User_m');
		    $this->load->library('resize');

	}

	public function index()
	{

		$data['page']='admin/vuser';
		$data['nav']='admin/nav-admin';
		$data['title'] = 'user';
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['userdata'] = $this->User_m->getuser();
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));

		$this->load->view('admin/vdashboard', $data);
	}
	public function proses_delete_user ($id){
		$this->User_m->delete_user($id);
		$this->session->set_flashdata('messagehapus', 'Data User Barhasil dihapus');
		redirect(base_url('admin/Cuser'));
	}
	public function detail_user ($id){
		$data['page']='admin/vdetail';
		$data['title'] = 'detail user';
		$data['nav']='admin/nav-admin';
		$data['dtuser'] = $this->session->userdata('c_username');
		$data['htuser'] = $this->User_m->detail_user($id);
		$data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));
		$this->load->view('admin/vdashboard', $data);
	}
	public function proses_add_user (){
		$post = $this->input->post();
	    $data = array(
	      'username' => $post['username'],
	      'pass' => md5($post['password']),
	      'sid'   => $this->User_m->generate_id($post['status']),
	      'gender' => $post['gender'],
				'status'   => $post['status'],
	      'foto_profile'   => 'default.jpg'
	    );
	    $this->User_m->insert_user ($data);
			$data2 = array('id_user' => $this->User_m->getLastID()->id_user);
			if ($post['status'] == 'guru') {
				$this->User_m->insert_guru ($data2);
			} else {
				$this->User_m->insert_murid ($data2);
			}
	    $this->session->set_flashdata('message', 'User Barhasil ditambahkan');

	    redirect(base_url('admin/Cuser'));
	}
	public function proses_edit_user (){
	$post = $this->input->post();

 		$data = array(
				'status'   => $post['status'],
	      'username' => $post['username'],
	      'pass' => md5($post['password']),
	      'tgl_lahir'   => $post['tgl_lahir'],
	      'no_telp' => $post['no_telp'],
	      'gender' => $post['gender'],
	      'alamat'   => $post['alamat'],
	    );

	    $id = $this->input->post('id_user');
	    $this->User_m->edit_user ($id, $data);
	    $this->session->set_flashdata('message', 'User Barhasil diperbarui');

	    redirect(base_url('admin/Cuser/detail_user/'.$_POST['id_user']));
	}
	public function proses_ubah_password (){
	$post = $this->input->post();

 		$data = array(

	      'pass' => md5($post['pass'])

	    );

	    $id = $this->input->post('id_user');
	    $this->User_m->edit_user ($id, $data);
	    $this->session->set_flashdata('message', 'password Barhasil diperbarui');

	    redirect(base_url('admin/Cuser/detail_user/'.$_POST['id_user']));
	}
	public function proses_add_foto_profil(){
    $id = $this->input->post('id_user');
    $post = $this->input->post();
    $file = $this->User_m->detail_user2($id)->row('foto_profile');
    if (!empty($_FILES["fotoprofile"]["tmp_name"])) {
            if ($file != "default.jpg") {
                unlink("assets/img/userimage/$file");
            }
        }

    $namafolder="assets/img/userimage/"; //folder tempat menyimpan file
    if (!empty($_FILES["fotoprofile"]["tmp_name"]))
    {
      $LastID = $this->User_m->getLastID()->id_user;
      $newID = ++$LastID;
      $namaExpl = explode('.', basename($_FILES['fotoprofile']['name']));
      $jmlArr = count($namaExpl);
      $namaFix = '';
      for ($i = 0; $i < $jmlArr-1; $i++) {
        $namaFix .= $namaExpl[$i];
      }
      $namafileOri = strtolower(url_title("minu".'-'.$post['username'].'-'.$newID.'-'.date('Ymd').'-'.time('Hms')).'.'.$namaExpl[$jmlArr-1]);
      // replace file name
      $_FILES['fotoprofile']['name'] = $namafileOri;
      $jenis_gambar=$_FILES['fotoprofile']['type'];
      if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png" || $jenis_gambar=="image/x-png")
      {
        $gambar = $namafolder . basename($_FILES['fotoprofile']['name']);
        if (move_uploaded_file($_FILES['fotoprofile']['tmp_name'], $gambar)) {
          //echo "Gambar yang di upload: ".basename($_FILES['epsimage']['name']);
          $data['foto_profile'] = basename($_FILES['fotoprofile']['name']);
        } else {
          echo "Gambar gagal dikirim";
        }
      } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
      }
    } else {
      $data['foto_profile'] = ('default.jpg');
    }
    $a = basename($_FILES['fotoprofile']['name']);
    //file yang akan di resize
    $file = "assets/img/userimage/$a";
    //output resize (bisa juga di ubah ke format yang berbeda ex: jpg, png dll)
    $resizedFile = "assets/img/userimage/$a";
    $this->resize->smart_resize_image(null , file_get_contents($file), 250 , 250 , false , $resizedFile , true , false ,35 );
    $this->User_m->edit_user ($id, $data);
    $this->session->set_flashdata('message', 'Profil Berhasil Di Perbarui');

    redirect(base_url('admin/Cuser/detail_user/'.$this->input->post('id_user')));
  }
}
