<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once (APPPATH. "core/A_Controller.php");

class Cfaq extends A_Controller {
    

    public function __construct() {
        parent::__construct();
        $this->load->model('Home_m');
        $this->load->helper(array('url','html','form'));
    }

    public function index()
    {
        $data['title'] = 'MADRASAH IBTIDAIYAH NAHDLATUL ULAMA 2';
        $data['taglineuni'] = 'LEMBAGA PENDIDIKAN MA’ARIF CAB. BANYUWANGI';
        $data['alamat'] = 'Jl. Sumber Urip Kaliboyo Kradenan Purwoharjo Banyuwangi Jawa Timur';
        $data['chatfaq'] = $this->Home_m->listfaq();

        $data['halaman'] = 'pages/vfaq';
        $this->load->view('pages/vhome', $data);

    }

}
