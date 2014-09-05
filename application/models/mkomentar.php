<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mkomentar extends CI_Model {

	$now = date("Y-m-d");
		$data = array
		( 
			'artikel_id' => $this->input->post('idh'),
			'nama' => $this->input->post('nama'),
			'tgl' => $now,
			'komentar' => $this->input->post('komentar')		
		);
		
		$this->db->insert($this->table,$data);
	function __construct()
	{
		parent::__construct();

		$this->table = "komentar";
	}

	function add_komen()
	{
		
 	}

 	function read_komen($id)
 	{
 		$this->db->where('artikel_id',$id);
 		$query = $this->db->get($this->table);

 		return $query;

 	}
 
}
