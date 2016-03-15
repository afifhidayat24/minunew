<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_m extends CI_Model {

	function generate_id($type){
		switch ($type) {
			case 'murid':
				$sql = "SELECT MAX(CAST(RIGHT(sid, 4) AS UNSIGNED)) as 'max_id' FROM user where status = ?";
				$query = $this->db->query($sql, $type);
				$result = $query->row_array();
				if ($result['max_id'] < 9) {
					$new_id = 'M000'.($result['max_id']+1);
				}else if($result['max_id'] < 99){
					$new_id = 'M00'.($result['max_id']+1);
				}else if($result['max_id'] < 999){
					$new_id = 'M0'.($result['max_id']+1);
				}else if($result['max_id'] < 9999){
					$new_id = 'M'.($result['max_id']+1);
				}
				break;
			case 'guru':
				$sql = "SELECT MAX(CAST(RIGHT(sid, 4) AS UNSIGNED)) as 'max_id' FROM user where status = ?";
				$query = $this->db->query($sql, $type);
				$result = $query->row_array();
				if ($result['max_id'] < 9) {
					$new_id = 'G000'.($result['max_id']+1);
				}else if($result['max_id'] < 99){
					$new_id = 'G00'.($result['max_id']+1);
				}else if($result['max_id'] < 999){
					$new_id = 'G0'.($result['max_id']+1);
				}else if($result['max_id'] < 9999){
					$new_id = 'G'.($result['max_id']+1);
				}
				break;

			default:
				# code...
				break;
		}
		return $new_id;

	}

	public function getuser (){
		$sdf=$this->db->get('user');
		return $sdf->result();
	}
	public function getguru (){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('guru','guru.id_user = user.id_user');
		$this->db->where('status', 'guru');
		$query = $this->db->get();
		return $query->result();
	}
	public function getsiswa (){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('status', 'murid');
		$query = $this->db->get();
		return $query->result();
	}
	public function delete_user ($id){
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}
	public function insert_user ($data){
		$this->db->insert('user', $data);
	}
	public function insert_guru ($data2){
		$this->db->insert('guru', $data2);
	}
	public function insert_murid ($data2){
		$this->db->insert('siswa', $data2);
	}
	public function detail_user ($id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id);
		$query = $this->db->get();
		return $query->row();
	}
	public function getuserinvalid(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kondisi','invalid');
		$query = $this->db->get();
		return $query->result();
	}
	public function getuservalid(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('kondisi','valid');
		$query = $this->db->get();
		return $query->result();
	}
	public function detail_user2 ($id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id);
		$query = $this->db->get();
		return $query;
	}
	public function edit_user ($id, $data){
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}
	public function getLastID (){
		$this->db->select('id_user');
		$this->db->from('user');
		$this->db->order_by('id_user', 'desc');
		$query = $this->db->get();
		return $query->row();
	}
	public function maxid (){
		$this->db->select_max('id_user');
		$query = $this->db->get('user');
		return $query->row();
	}
	public function daftar_guru (){
		return $this->db->get_where('user', array('status' => 'guru'))->result();
	}

}
