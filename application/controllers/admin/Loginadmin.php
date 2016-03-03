<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginadmin extends CI_Controller {

  public function index(){

    $post = $this->input->post('submit');
    if($post){

			$this->load->model('Akunadmin');

			$this->Akunadmin->set_user($this->input->post('username'));
			$this->Akunadmin->set_password($this->input->post('password'));
			$this->form_validation->set_rules('username', 'username', 'required|alpha_dash');
			$this->form_validation->set_rules('password', 'password', 'required|alpha_dash');

			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			}else{
				if($this->Akunadmin->do_login()){
					header('location: '.base_url().'admin/dashboardadmin');
				}else{
					$data['error'] = 'username dan Password tidak sesuai, silahkan periksa kembali';
				}
			}
		}else{
			$data['error']   = $this->session->flashdata('error');
		}
		$this->load->view('admin/Loginadmin',$data);
  }

  public function logout(){
		$this->load->model('Akunadmin');
		$this->Akunadmin->do_logout();
		header('location: '.base_url().'admin/Loginadmin');
	}
}
