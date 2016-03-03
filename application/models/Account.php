<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Account extends CI_Model {

	var $sid;
	var $password;
	var $user_data;

	public function __construct(){
		$this->sid = '';
		$this->password = '';
	}

	public function set_user($sid){
		$this->sid = $sid;
		$this->user_data['c_sid'] = $sid;
	}

	public function set_password($password){
		$this->password = $password;
		$this->user_data['c_password'] = md5($password);
	}

	public function do_login(){

		$query = "Select * from user where sid='$this->sid' and pass=md5('$this->password')";
		$result = $this->db->query($query);
		$rows = $result->row_array();

		if ($this->db->affected_rows() > 0) {

			$this->user_data['c_id'] = $rows['id_user'];
			$this->user_data['c_sid'] = $rows['sid'];
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
		$sess['c_sid'] = '';
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
		$sess['c_sid'] = $this->session->userdata('c_sid');
		$sess['c_password'] = $this->session->userdata('c_password');
		$sess['c_status'] = $this->session->userdata('c_status');

		return $sess;
	}

	public function validate_cookie(){
		if ($this->session->userdata('c_sid') != '' && $this->session->userdata('c_password') != '')
		return true;
		else
		return false;
	}
}
