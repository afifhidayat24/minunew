<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ckontak extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->model('Home_m');
  }

  public function index(){

    $data['title'] = 'MADRASAH IBTIDAIYAH NAHDLATUL ULAMA 2';
    $data['taglineuni'] = 'LEMBAGA PENDIDIKAN MA’ARIF CAB. BANYUWANGI';
    $data['alamat'] = 'Jl. Sumber Urip Kaliboyo Kradenan Purwoharjo Banyuwangi Jawa Timur';

    $data['halaman'] = 'pages/vkontak';
    $this->load->view('pages/vhome', $data);

  }

  public function insert_kontak() {
    $post = $this->input->post();

    $data = array(

      'nama_k' => $post['nama_k'],
      'no_telp_k'   => $post['no_telp_k'],
      'email_k' => $post['email_k'],
      'subyek_k' => $post['subyek_k'],
      'pertanyaan_k' => $post['pertanyaan_k'],
    );

    $this->Home_m->insert_kontak ($data);
    $this->session->set_flashdata('message', 'Pertanyaan Berhasil Dikirim');

    redirect(base_url('ckontak/'));
  }

}
