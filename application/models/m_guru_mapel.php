<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_guru_mapel extends CI_Model{

  function get_mapel_of_guru($id_user){
    $sql = "SELECT * FROM guru_mapel INNER JOIN mapel USING(mapel_id) WHERE id_user = ?";
    $query = $this->db->query($sql, $id_user);
    if ($query->num_rows() > 0) {
      return $query->result_array();
    }
  }

}
