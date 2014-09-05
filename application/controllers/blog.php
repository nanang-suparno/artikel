<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller 
{

	 function __construct()
	{
		parent::__construct();

		$this->load->model('martikel');
		$this->load->model('mkomentar');
	}

	public function index ()
	{
		
		$data['query'] = $this->martikel->get();

		$this->load->view('belajar',$data);
	}

	public function browse($data)
	{
		$res['query_artikel']  = $this->martikel->get($data);
		$res['query_komentar'] = $this->mkomentar->read_komen($data);

		$this->load->view('belajar_detail',$res);
	}

	public function delete($id)
	{
	
		$this->martikel->delete($id);

		redirect('blog/index');
	}

	public function add_komen()
	{

		$this->mkomentar->add_komen();
		redirect('blog/index');
	}

	public function edit($id)
	{
		$data['query'] = $this->martikel->edit($id); 
		$this->load->view('belajar_edit',$data);
	}

	public function update()
	{
		$this->martikel->update();
		redirect('blog/index');
	}
 
}
