<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->model('model_user');
		$title			= "Daftar Nama User <br><br> ";
		$data['title']	= $title;
		$data['user']	= $this->model_user->tampil_user()->result();
		$this->load->view('user/list_user',$data);
	}

	public function input_user()
	{
		
		$this->load->view('user/input_user');
	}

	public function simpan_user()
	{
		$data = array(
			'id'		=> $this->input->post('id'),
			'username'	=> $this->input->post('username'),
			'email'		=> $this->input->post('email'));
			$this->db->insert('tbl_user',$data);
			redirect('user');
	}

	public function edit_user()
	{
		$this->load->model('model_user');
		$id = $this->uri->segment(3);
		$data['user'] = $this->model_user->user($id)->row_array();
		$this->load->view('user/edit_user',$data);
	}

	public function update_user(){
		$id 	= $this->input->post('id');
		$data = array(
			'id'		=> $this->input->post('id'),
			'username'	=> $this->input->post('username'),
			'email'		=> $this->input->post('email'));

			$this->db->where('id',$id);
			$this->db->update('tbl_user',$data);
			redirect('user');

	}

	public function delete_user(){
		$id = $this->uri->segment(3);
		$this->db->where('id',$id);
		$this->db->delete('tbl_user');
		redirect('user');
	}
}
