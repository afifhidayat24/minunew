<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Akunmurid extends CI_Model {

	var $id_murid;
	var $password;
	var $user_data;

	public function __construct(){
		$this->id_murid = '';
		$this->password = '';
	}

	public function set_user($id_murid){
		$this->id_murid = $id_murid;
		$this->user_data['c_id_murid'] = $id_murid;
	}

	public function set_password($password){
		$this->password = $password;
		$this->user_data['c_password'] = md5($password);
	}

	public function do_login(){

		$query = "Select * from user where sid='$this->id_murid' and pass=md5('$this->password')";
		$result = $this->db->query($query);
		$rows = $result->row_array();

		if ($this->db->affected_rows() > 0) {

			$this->user_data['c_id'] = $rows['id_user'];
			$this->user_data['c_id_murid'] = $rows['sid'];
			$this->user_data['c_password'] = $rows['pass'];
			$this->user_data['c_status'] = $rows['status'];

			$this->set_cookie();

			return true;
		} else {
			return false;
		}

	}

	public function do_logout(){
		$sess = array();

		$sess['c_id'] = '';
		$sess['c_id_murid'] = '';
		$sess['c_password'] = '';
		$sess['c_status'] = '';

		$this->session->unset_userdata($sess);
		session_destroy();
		$this->session->sess_destroy();
	}

	protected function set_cookie(){
		$this->session->set_userdata($this->user_data);
	}

	public function get_cookie(){
		$sess = array();

		$sess['c_id'] = $this->session->userdata('c_id');
		$sess['c_id_murid'] = $this->session->userdata('c_id_murid');
		$sess['c_password'] = $this->session->userdata('c_password');
		$sess['c_status'] = $this->session->userdata('c_status');

		return $sess;
	}

	public function validate_cookie(){
		if ($this->session->userdata('c_id_murid') != '' && $this->session->userdata('c_password') != '')
		return true;
		else
		return false;
	}
}
