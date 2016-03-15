<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginsuper extends CI_Controller {

    public function index(){

        $post = $this->input->post('submit');
        if($post){

            $this->load->model('Akunsuper');

            $this->Akunsuper->set_user($this->input->post('username'));
            $this->Akunsuper->set_password($this->input->post('password'));
            $this->form_validation->set_rules('username', 'username', 'required|alpha_dash');
            $this->form_validation->set_rules('password', 'password', 'required|alpha_dash');

            if ($this->form_validation->run() == FALSE){
                $data['error'] = validation_errors();
            }else{
                if($this->Akunsuper->do_login()){
                    header('location: '.base_url().'admin/dashboardsuper');
                }else{
                    $data['error'] = 'username dan Password tidak sesuai, silahkan periksa kembali';
                }
            }
        }else{
            $data['error']   = $this->session->flashdata('error');
        }
        $this->load->view('admin/loginsuper',$data);
    }

    public function logout(){
        $this->load->model('Akunsuper');
        $this->Akunsuper->do_logout();
        header('location: '.base_url().'admin/Loginsuper');
    }
}
