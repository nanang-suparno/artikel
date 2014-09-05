<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_m extends CI_Model {

	
	function __construct()
	{
		parent::__construct();
	}

	function get()
	{
		//$this->db->select("*");
		//$this->db->from();
		$query = $this->db->get("artikel");

		return $query;
	}

	function delete($id)
	{
		//$res = $this->db->delete($tabelName,$where);
		//return $res;
		$this->db->where('id',$id);
		$this->db->delete('artikel');
	}

	function get_detail($id)
	{
		//$this->db->where('id',$id);
		//$this->db->select("*");
		//$this->db->from("artikel");
		//return $this->db->get();
		$this->db->where('id',$id);
		$query = $this->db->get('artikel');

		return $query;
		
	}

	function add_komen()
	{
		$now = date("Y-m-d");
		$data = array
		( 
			'artikel_id' => $this->input->post('idh'),
			'nama' => $this->input->post('nama'),
			'tgl' => $now,
			'komentar' => $this->input->post('komentar')		
		);
		
		$this->db->insert('komentar',$data);
 	}

 	function read_komen($id)
 	{
 		//$this->db->where("id",$id);
 		//$this->db->select("*");
 		//$this->db->from("komentar");
 		//return $this->db->get();
 		$this->db->where('id',$id);
 		$query = $this->db->get("komentar");

 		return $query;

 	}
 
}
