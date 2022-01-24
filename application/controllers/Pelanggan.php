<?php 

/**
* 
*/
class Pelanggan extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_pelanggan');
		$this->load->helper('url');
	}

	function index(){
		$data['pelanggan'] = $this->m_pelanggan->tampil_data();
		$this->load->view('v-tampilpelanggan',$data);
	}

	function tambah(){
		$data['kode'] = $this->m_pelanggan->kode_otomatis();
		$this->load->view('v-inputpelanggan',$data);
	}
	function tambah_aksi(){
		$id	 = $this->input->post('id');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$umur = $this->input->post('umur');

		$data = array(
			'id_pelanggan' => $id,
			'nik_pelanggan' => $nik,
			'nama_pelanggan' => $nama,
			'alamat_pelanggan' => $alamat,
			'umur_pelanggan' => $umur,
		);
		$this->m_pelanggan->input_data($data,'pelanggan');
		redirect('pelanggan/index');
	}

	function hapus($id){
		$where = array('id_pelanggan' => $id);
		$this->m_pelanggan->hapus_data($where,'pelanggan');
		redirect('pelanggan/index');
	}
	function edit($id){
		$where = array('id_pelanggan' => $id);
		$data['pelanggan'] = $this->m_pelanggan->edit_data($where,'pelanggan')->result();
		$this->load->view('v-editpelanggan', $data);
	}
	function update(){
		$id	 = $this->input->post('id');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$umur = $this->input->post('umur');

		$data = array(
			'id_pelanggan' => $id,
			'nik_pelanggan' => $nik,
			'nama_pelanggan' => $nama,
			'alamat_pelanggan' => $alamat,
			'umur_pelanggan' => $umur,
		);
		$where = array(
			'id_pelanggan' => $id	
			);
		$this->m_pelanggan->update_data($where, $data,'pelanggan');
		redirect('pelanggan/index');
	}
	function out(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

 ?>