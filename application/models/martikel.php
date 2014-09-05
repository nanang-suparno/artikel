<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class martikel extends CI_Model {
	
	function __construct()
	{
		parent::__construct();

		$this->table = "artikel";
	}

	function get()
	{
		$query = $this->db->get($this->table);

		return $query;
	}

	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}

	function get_detail($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get($this->table);

		return $query;
		
	}

	function edit($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get($this->table);

		return $query;
	}

	function update()
	{
		//$now = date("Y-m-d");
		$id       = $this->input->post('idh');
		//print_r($_POST);
		//exit();
		$data = array
		( 
			
			'nama' => $this->input->post('nama'),
			'artikel' => $this->input->post('artikel')		
		);
		$where = array('id' => $id);
		$this->db->update($this->table,$data,$where);
			//$id       = $this->input->post('idh');
			//$nama     = $this->input->post('nama');
			//$artikel  = $this->input->post('artikel');
//
//			//$data = array(
//			//'nama'=>$nama,
			//'artikel'=>$artikel,);
		
		//$this->db->update($this->table,$data);
	}

}