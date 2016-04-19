<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_m extends CI_Model{

  function select_data_guru (){
    $this->db->select('*');
    $this->db->from('guru');
    $query = $this->db->get();
	return $query->result();
  }
  function getLastID (){
    $this->db->select('id_guru');
    $this->db->from('guru');
    $this->db->order_by('id_guru', 'desc');
    $query = $this->db->get();
	return $query->row();
  }
  function insert_data_guru($data){
    	$this->db->insert('guru', $data);
  }
  function update_guru($id, $data2){
      $this->db->where('id_guru', $id);
      $this->db->update('guru', $data2);
  }
  public function delete_guru ($id){
      $this->db->where('id_guru', $id);
      $this->db->delete('guru');
  }


}
