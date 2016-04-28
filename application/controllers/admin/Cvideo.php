<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once (APPPATH. "core/A_Controller.php");

class Cvideo extends A_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_m');
        $this->load->model('User_m');
        $this->load->helper(array('url','html','form'));
    }

    public function index() {
        $data['page']='admin/adm-list-video-v';
        $data['nav']='admin/nav-admin';
        $data['title'] = 'list video';
        $data['dtuser'] = $this->session->userdata('c_username');
        $data['listvideo'] = $this->Admin_m->getvideo();
        $data['userdata'] = $this->User_m->getuser();
        $data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));
        $this->load->view('admin/vdashboard', $data);

    }
    public function show() {
        $this->load->view('adm-show-video-v');
    }

    public function add_video(){

        $data['page']='admin/add-video-v';
        $data['nav']='admin/nav-admin';
        $data['title'] = 'tambah video';
        $data['dtuser'] = $this->session->userdata('c_username');
        $data['dtguru'] = $this->User_m->daftar_guru();
        $data['gtuser'] = $this->User_m->detail_user($this->session->userdata('c_id'));
        $this->load->view('admin/vdashboard', $data);
    }
    public function proses_add_video(){
        $post = $this->input->post();

        $data = array(
            'judul_video'  => $post['judul_video'],
            'sinopsis' => $post['sinopsis'],
            'tgl_upload'   => $post['tgl_upload'],
            'id_kategori'   => $post['id_kategori'],
            'id_user'   => $this->session->userdata('c_id'),

        );

        if (isset($_FILES['video']['name']) && $_FILES['video']['name'] != '') {
            unset($config);
            $date = date("Ymd");
            $configVideo['upload_path'] = './assets/video';
            $configVideo['max_size'] = '100000000';
            $configVideo['allowed_types'] = 'avi|flv|wmv|mp3|mp4';
            $configVideo['overwrite'] = FALSE;
            $configVideo['remove_spaces'] = TRUE;
            $video_name = $date.$_FILES['video']['name'];
            $configVideo['file_name'] = $video_name;

            $this->load->library('upload', $configVideo);
            $this->upload->initialize($configVideo);
            if(!$this->upload->do_upload('video')) {
                echo $this->upload->display_errors('!!! Video Gagal ditambahkan Periksa Kembali Format video yang anda tambahkan !!!');
            }else{
                $videoDetails = $this->upload->data();

                $this->Admin_m->insert_video ($data);
                $this->session->set_flashdata('message', 'Video Barhasil ditambahkan');

                redirect('admin/Cvideo/add_video');
            }

        }else{
            echo "Please select a file";
        }
    }

    function get_guru_mapel(){
        $id_user = $this->input->get('id_user');
        $this->load->model('m_guru_mapel');

        $guru_mapel = $this->m_guru_mapel->get_mapel_of_guru($id_user);
        echo json_encode($guru_mapel);
    }

}
