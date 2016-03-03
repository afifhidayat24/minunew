<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Murid_m extends CI_Model{

  function getmurid($sid){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('sid', $sid);

    $query = $this->db->get();
		return $query->row();
  }

  

}
