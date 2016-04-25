<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admin_m extends CI_Model {

	public function getkategori (){
		$sdf=$this->db->get('kategori');
		return $sdf->result();
	}
	public function getpage (){
		$sdf=$this->db->get('page');
		return $sdf->result();
	}
	public function getkontak (){
		$sdf=$this->db->get('kontak');
		return $sdf->result();
	}
	public function getprogramu (){
		$this->db->select('*');
		$this->db->from('program');
		$this->db->where('kat_program','Unggulan');
		$query = $this->db->get();
		return $query->result();
	}
	public function getprograme (){
		$this->db->select('*');
		$this->db->from('program');
		$this->db->where('kat_program','Ekstrakulikuler');
		$query = $this->db->get();
		return $query->result();
	}
	public function getvideo (){
		$this->db->select('*');
		$this->db->from('video');
		$this->db->join('user', 'user.id_user = video.id_user');
		$query = $this->db->get();
		return $query->result();
	}
	public function getgaleri (){
		$sdf=$this->db->get('galeri');
		return $sdf->result();
	}
	public function insert_kategori ($data){
		$this->db->insert('kategori', $data);
	}
	public function insert_page ($data){
		$this->db->insert('page', $data);
	}
	public function insert_video ($data){
		$this->db->insert('video', $data);
	}
	public function insert_galeri ($data){
		$this->db->insert('galeri', $data);
	}
	public function delete_kategori ($id){
		$this->db->where('id_kategori', $id);
		$this->db->delete('kategori');
	}
	public function delete_program ($id){
		$this->db->where('id_program', $id);
		$this->db->delete('program');
	}
	public function delete_page ($id){
		$this->db->where('id_page', $id);
		$this->db->delete('page');
	}
	public function delete_artikel ($id){
		$this->db->where('id_artikel', $id);
		$this->db->delete('artikel');
	}
	public function edit_kategori ($id){
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
		$query = $this->db->get();
		return $query;
	}
	public function update_kategori($id, $data){
		$this->db->where('id_kategori', $id);
		$this->db->update('kategori', $data);
	}
	public function edit_program($id, $data){
		$this->db->where('id_program', $id);
		$this->db->update('program', $data);
	}
	public function insert_artikel ($data){
		$this->db->insert('artikel', $data);
	}
	public function insert_program ($data){
		$this->db->insert('program', $data);
	}
	public function add_video ($data){
		$this->db->insert('video', $data);
	}
	public function insert_faq ($data){
		$this->db->insert('faq', $data);
	}
	public function detail_dashboard (){
		$this->db->select('dashboard', $data);
	}
	public function detail_user ($id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id);
		$query = $this->db->get();
		return $query->row();
	}
	public function getLastID (){
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->order_by('id_artikel', 'dsc');
		$query = $this->db->get();
		return $query->row();
	}
	public function getartikel(){
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->join('user', 'user.id_user = artikel.id_user');
		$this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
		$this->db->order_by('judul_artikel', 'asc');
		$query = $this->db->get();
		return $query->result();
	}
	public function detailartikel($id_artikel){
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->join('user', 'user.id_user = artikel.id_user');
		$this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
		$this->db->where('id_artikel', $id_artikel);
		$query = $this->db->get();
		return $query;
	}
	public function detailprogram($id){
		$this->db->select('*');
		$this->db->from('program');
		$this->db->where('id_program', $id);
		$query = $this->db->get();
		return $query;
	}
	public function update_artikel ($id, $data){
		$this->db->where('id_artikel', $id);
		$this->db->update('artikel', $data);
	}
}
