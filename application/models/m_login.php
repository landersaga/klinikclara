<?php
/**
* 
*/
class m_login extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function cekUserPass(){
		$query = $this->db->query("SELECT * FROM pegawai 
			WHERE username = '".$this->input->post('username')."'
			AND password = '".($this->input->post('password'))."'");
		$data = $query->row_array();
		$jml = $query->num_rows();

		if($jml > 0){
			$data = array(
				'username' => $data['username'],
				'isLogin' => true
				);

			$this->session->set_userdata($data);
			redirect('home');
		}else{
			$this->session->set_flashdata('message','username atau password salah');
			redirect('login');
		}
	}
}
?>