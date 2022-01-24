<?php 

/**
* 
*/
class Dokter extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_dokter');
		$this->load->helper('url');
	}

	function index(){
		$data['dokter'] = $this->m_dokter->tampil_data();
		$this->load->view('v-tampildokter',$data);
	}

	function tambah(){
		$data['kode'] = $this->m_dokter->kode_otomatis();
		$this->load->view('v-inputdokter',$data);
	}
	function tambah_aksi(){
		$id	 = $this->input->post('iddok');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$umur = $this->input->post('umur');
		$kontak = $this->input->post('kontak');
		$spesialis = $this->input->post('spesialis');

		$data = array(
			'id_dokter' => $id,
			'nama_dokter' => $nama,
			'alamat_dokter' => $alamat,
			'umur_dokter' => $umur,
			'kontak_dokter' => $kontak,
			'spesialis' => $spesialis,
			);
		$this->m_dokter->input_data($data,'dokter');
		redirect('dokter/index');
	}

	function hapus($id){
		$where = array('id_dokter' => $id);
		$this->m_dokter->hapus_data($where,'dokter');
		redirect('dokter/index');
	}
	function edit($id){
		$where = array('id_dokter' => $id);
		$data['dokter'] = $this->m_dokter->edit_data($where,'dokter')->result();
		$this->load->view('v-editdokter', $data);
	}
	function update(){
		$id	 = $this->input->post('iddok');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$umur = $this->input->post('umur');
		$kontak = $this->input->post('kontak');
		$spesialis = $this->input->post('spesialis');

		$data = array(
			'id_dokter' => $id,
			'nama_dokter' => $nama,
			'alamat_dokter' => $alamat,
			'umur_dokter' => $umur,
			'kontak_dokter' => $kontak,
			'spesialis' => $spesialis,
			);
		$where = array(
			'id_dokter	' => $id	
			);
		$this->m_dokter->update_data($where, $data,'dokter');
		redirect('dokter/index');
	}
	function out(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

 ?>