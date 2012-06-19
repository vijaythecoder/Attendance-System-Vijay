<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function admin()
	{
		$data['query'] = $this->db->get('tbl_addpost');
		$this->load->view('dashboard',$data);
	}
	public function addpost()
	{
		$this->load->view('addpost');
	}
	public function insertpost()
	{
		$this->load->model('Blog_model');
		if($this->Blog_model->subpost())
			redirect('blog/admin');
	}
	public function viewpost()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Blog_model');
		$res['data'] = $this->Blog_model->viewpost($id);
		$this->load->view('view_post',$res);
	}
	public function editpost()
	{
		$this->load->model('Blog_model');
		$data['id']= $this->uri->segment(3);
		$data['res'] = $this->Blog_model->viewpost($data['id']);
		$this->load->view('edit_post',$data);
	}
	public function updatepost()
	{
		$id = $this->uri->segment(3);
		$this->load->model('Blog_model');
		$this->Blog_model->updatepost($id);
		
			
		
	}
	
}