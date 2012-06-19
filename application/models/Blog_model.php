<?php
class Blog_model extends CI_Controller
{
	public function subpost()
	{
		$data['title'] = $this->input->post('title');
		$data['body'] = $this->input->post('body');
		$data['deleted'] = 0;
		if($this->db->insert('tbl_addpost',$data))
			return true;
		else
			return false;
	}
	
	public function viewpost($id)
	{
		$result = $this->db->query("select title,body  from tbl_addpost  where id=".$id);
		return $result->result();
			
	}
	
	public function updatepost($id)
	{
		$dat['title'] = $this->input->post('heading');
		$dat['body'] = $this->input->post('description');
		//$this->db->where('id', $id);
		//$this->db->update('tbl_addpost', $dat);
		if($this->db->update('tbl_addpost', $dat, array('id' => $id)))
			return true;
		else
			return false;
				
	}
	
}	
?>