<?php 

/**
* 
*/
class Pegawai extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_pegawai');
		$this->load->helper('url');
	}

	function index(){
		$data['pegawai'] = $this->m_pegawai->tampil_data();
		$this->load->view('v-tampilpegawai',$data);
	}

	function tambah(){
		$data['kode'] = $this->m_pegawai->kode_otomatis();
		$this->load->view('v-inputpegawai',$data);
	}
	function tambah_aksi(){
		$id	 = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$kontak = $this->input->post('kontak');
		$umur = $this->input->post('umur');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'id_pegawai' => $id,
			'nama_pegawai' => $nama,
			'alamat_pegawai' => $alamat,
			'kontak_pegawai' => $kontak,
			'umur_pegawai' => $umur,
			'username' => $username,
			'password' => $password,
		);
		$this->m_pegawai->input_data($data,'pegawai');
		redirect('pegawai/index');
	}

	function hapus($id){
		$where = array('id_pegawai' => $id);
		$this->m_pegawai->hapus_data($where,'pegawai');
		redirect('pegawai/index');
	}
	function edit($id){
		$where = array('id_pegawai' => $id);
		$data['pegawai'] = $this->m_pegawai->edit_data($where,'pegawai')->result();
		$this->load->view('v-editpegawai', $data);
	}
	function update(){
		$id	 = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$kontak = $this->input->post('kontak');
		$umur = $this->input->post('umur');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'id_pegawai' => $id,
			'nama_pegawai' => $nama,
			'alamat_pegawai' => $alamat,
			'kontak_pegawai' => $kontak,
			'umur_pegawai' => $umur,
			'username' => $username,
			'password' => $password,
		);
		$where = array(
			'id_pegawai' => $id	
			);
		$this->m_pegawai->update_data($where, $data,'pegawai');
		redirect('pegawai/index');
	}
	function out(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

 ?>