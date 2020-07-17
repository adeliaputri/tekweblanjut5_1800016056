<?php

class Model_user extends CI_Model
{
	public function ambillogin($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('login');
		if ($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$sess = array('username' => $row->username, 'password' => $row->password);
			}
			$this->session->set_userdata($sess);
			redirect('user');
		}
		else{
			$this->session->set_flashdata('info','Maaf Username dan password Anda Salah!');
			redirect('login');
		}
	}

	public function keamanan(){
		$username = $this->session->sess_destroy('username');
		if(!empty($username)){
			$this->session->sess_destroy();
			redirect('user');
		}
	}

	//codingan project cruf
	public function tampil_user()
	{
		//menampilkan data user dari tabel di database user mysql
		$user = $this->db->get('tbl_user');
		return $user;
	}

	public function user($id){
		return $this->db->get_where('tbl_user', array('id'=>$id));
	}
	
	public function update_user(){
		return $this->db->get_where('tbl_user', array('id'=>$id));
	}
}