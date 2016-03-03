<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class soal_m extends CI_Model {

	public function getsoal (){
		$sdf=$this->db->get('soal');
		return $sdf->result();
	}
}
