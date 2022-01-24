<?php 

/**
* 
*/
class Perawat extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_perawat');
		$this->load->helper('url');
	}

	function index(){
		$data['perawat'] = $this->m_perawat->tampil_data();
		$this->load->view('v-tampilperawat',$data);
	}

	function tambah(){
		$data['kode'] = $this->m_perawat->kode_otomatis();
		$this->load->view('v-inputperawat',$data);
	}
	function tambah_aksi(){
		$id	 = $this->input->post('id');
		$nik = $this->input->post('nama');
		$nama = $this->input->post('alamat');
		$alamat = $this->input->post('kontak');
		$umur = $this->input->post('umur');

		$data = array(
			'id_perawat' => $id,
			'nama_perawat' => $nama,
			'alamat_perawat' => $alamat,
			'kontak_perawat' => $kontak,
			'umur_perawat' => $umur,
		);
		$this->m_perawat->input_data($data,'perawat');
		redirect('perawat/index');
	}

	function hapus($id){
		$where = array('id_perawat' => $id);
		$this->m_perawat->hapus_data($where,'perawat');
		redirect('perawat/index');
	}
	function edit($id){
		$where = array('id_perawat' => $id);
		$data['perawat'] = $this->m_perawat->edit_data($where,'perawat')->result();
		$this->load->view('v-editperawat', $data);
	}
	function update(){
		$id	 = $this->input->post('id');
		$nik = $this->input->post('nama');
		$nama = $this->input->post('alamat');
		$alamat = $this->input->post('kontak');
		$umur = $this->input->post('umur');

		$data = array(
			'id_perawat' => $id,
			'nama_perawat' => $nama,
			'alamat_perawat' => $alamat,
			'kontak_perawat' => $kontak,
			'umur_perawat' => $umur,
		);
		$where = array(
			'id_perawat' => $id	
			);
		$this->m_perawat->update_data($where, $data,'perawat');
		redirect('perawat/index');
	}
	function out(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

 ?>