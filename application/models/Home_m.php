<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_m extends CI_Model {

	//video
	public function getVideoPemabelajaran(){
		$this->db->order_by('kategori_video','desc');
		$this->db->where('pembelajaran');
		$this->db->limit(5);

		$vidP=$this->db->get('video');
		return $vidP->result();
	}

	public function lastVidP(){
		$this->db->select_max('kategori_video');
		$this->db->where('pembelajaran');

		$this->db->get('video');
	}

	public function getartikel (){
		$this->db->order_by('id_artikel', 'desc');
		$this->db->limit(5);

		$sdf=$this->db->get('artikel');
		return $sdf->result();
	}
	public function getgaleri (){
		$this->db->order_by('id_galeri', 'desc');
		$this->db->limit(3);

		$sdf=$this->db->get('galeri');
		return $sdf->result();
	}
	public function getartikel1 (){
		$this->db->select('*');
		$this->db->order_by('id_artikel', 'desc');
		$sdf=$this->db->get('artikel');
		return $sdf->row();
	}
	public function getartikel2 (){
		$this->db->order_by('id_artikel', 'desc');
		$this->db->limit(3);

		$sdf=$this->db->get('artikel');
		return $sdf->result();
	}
	public function getartikel3 (){
		$this->db->order_by('id_artikel', 'desc');
		$this->db->where('id_kategori','10');
		$this->db->limit(5);

		$sdf=$this->db->get('artikel');
		return $sdf->result();
	}
	public function getartikelprestasi (){
		$this->db->order_by('id_artikel', 'desc');
		$this->db->where('id_kategori','18');
		$this->db->limit(7);

		$sdf=$this->db->get('artikel');
		return $sdf->result();
	}
	public function getartikeljariyah (){
		$this->db->order_by('id_artikel', 'desc');
		$this->db->where('id_kategori','19');
		$this->db->limit(5);

		$sdf=$this->db->get('artikel');
		return $sdf->result();
	}
	public function getartikelagenda (){
		$this->db->order_by('id_artikel', 'desc');
		$this->db->where('id_kategori','17');
		$this->db->limit(5);

		$sdf=$this->db->get('artikel');
		return $sdf->result();
	}
	public function detailartikel ($idartikel){

		$this->db->select('*');
		$this->db->where('id_artikel', $idartikel);
		$this->db->from('artikel');
		$sdf=$this->db->get();
		return $sdf->row();
	}
	public function listfaq (){

		$this->db->order_by('id_faq', 'desc');
		$this->db->limit(5);

		$sdf=$this->db->get('faq');
		return $sdf->result();
	}

	public function insert_kontak ($data){
		$this->db->insert('kontak', $data);
	}
	public function getsemuapage(){
		$this->db->order_by('id_page', 'desc');
		$sdf=$this->db->get('page');
		return $sdf->result();
	}

	public function lihat($id){
		$this->db->where('id_page', $id);
		$sdf=$this->db->get('page');
		return $sdf;
	}


}
