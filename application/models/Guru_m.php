<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_m extends CI_Model{

  function select_data_guru ($sid){
    $this->db->select('*');
    $this->db->from('guru');
    $this->db->join('user', 'user.id_user = guru.id_user');
		$this->db->where('user.sid', $sid);
    $query = $this->db->get();
		return $query->row();
  }
  function insert_data_guru($data){
    	$this->db->insert('guru', $data);
  }
  function update_guru($id, $data){
      $this->db->where('id_user', $id);
    	$this->db->update('guru', $data);

  }

}
