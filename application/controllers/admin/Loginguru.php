<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginguru extends CI_Controller {

  public function index(){

    $post = $this->input->post('submit');
    if($post){

			$this->load->model('Akunguru');

			$this->Akunguru->set_user($this->input->post('username'));
			$this->Akunguru->set_password($this->input->post('password'));
			$this->form_validation->set_rules('username', 'username', 'required|alpha_dash');
			$this->form_validation->set_rules('password', 'password', 'required|alpha_dash');

			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			}else{
				if($this->Akunguru->do_login()){
					header('location: '.base_url().'admin/dashboardguru');
				}else{
					$data['error'] = 'username dan Password tidak sesuai, silahkan periksa kembali';
				}
			}
		}else{
			$data['error']   = $this->session->flashdata('error');
		}
		$this->load->view('admin/loginguru',$data);
  }

  public function logout(){
		$this->load->model('Akunguru');
		$this->Akunguru->do_logout();
		header('location: '.base_url().'admin/Loginguru');
	}
}
