<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class SU_Controller extends CI_Controller
{
    public function __construct(){
        parent:: __construct();

        $this->load->model('Akunsuper');

        // $this->output->enable_profiler(true);

        if(!$this->Akunsuper->validate_cookie()){
            $this->session->set_flashdata('error', 'Silahkan login terlebih dahulu');
            header('location: '.base_url().'admin/Loginsuper');
        }else{
            $this->data['cookie'] = $this->Akunsuper->get_cookie();
        }
    }
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
