<?php 

/**
* 
*/
class Resep extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_resep');
		$this->load->model('m_dokter');
		$this->load->helper('url');
	}

	function index(){
		$data['resep'] = $this->m_resep->tampil_data();
		$data['dokter'] = $this->m_dokter->tampil_data();
		$this->load->view('v-tampilresep',$data);
	}

	function tambah(){
		$data['kode'] = $this->m_resep->kode_otomatis();
		$data['dokter'] = $this->m_dokter->tampil_data();
		$this->load->view('v-inputresep',$data);
	}
	function tambah_aksi(){
		$id	 = $this->input->post('idresep');
		$iddok = $this->input->post('iddok');
		$nama_pasien = $this->input->post('nama_pasien');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			'id_resep' => $id,
			'id_dokter' => $iddok,
			'nama_pasien' => $nama_pasien,
			'tanggal' => $tanggal,
			);
		$this->m_resep->input_data($data,'resep_dokter');
		redirect('resep/index');
	}

	function hapus($id){
		$where = array('id_resep' => $id);
		$this->m_resep->hapus_data($where,'resep_dokter');
		redirect('resep/index');
	}
	function edit($id){
		$where = array('id_resep' => $id);
		$data['resep_dokter'] = $this->m_resep->edit_data($where,'resep_dokter')->result();
		$this->load->view('v-editresep', $data);
	}
	function update(){
		$id	 = $this->input->post('idresep');
		$iddok = $this->input->post('iddok');
		$nama_pasien = $this->input->post('nama_pasien');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			'id_resep' => $id,
			'id_dokter' => $iddok,
			'nama_pasien' => $nama_pasien,
			'tanggal' => $tanggal,
			);
		$where = array(
			'id_resep' => $id	
			);
		$this->m_resep->update_data($where, $data,'resep_dokter');
		redirect('resep/index');
	}
	function out(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

 ?>