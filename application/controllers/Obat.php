<?php 

/**
* 
*/
class Obat extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_obat');
		$this->load->helper('url');
	}

	function index(){
		$data['obat'] = $this->m_obat->tampil_data();
		$this->load->view('v-tampilobat',$data);
	}

	function tambah(){
		$data['kode'] = $this->m_obat->kode_otomatis();
		$this->load->view('v-inputobat',$data);
	}
	function tambah_aksi(){
		$id	 = $this->input->post('id');
		$jenis = $this->input->post('jenis');
		$produsen = $this->input->post('produsen');
		$harga = $this->input->post('harga');

		$data = array(
			'id_obat' => $id,
			'jenis_obat' => $jenis,
			'produsen_obat' => $produsen,
			'harga_obat' => $harga,
		);
		$this->m_obat->input_data($data,'obat');
		redirect('obat/index');
	}

	function hapus($id){
		$where = array('id_obat' => $id);
		$this->m_obat->hapus_data($where,'obat');
		redirect('obat/index');
	}
	function edit($id){
		$where = array('id_obat' => $id);
		$data['obat'] = $this->m_obat->edit_data($where,'obat')->result();
		$this->load->view('v-editobat', $data);
	}
	function update(){
		$id	 = $this->input->post('id');
		$jenis = $this->input->post('jenis');
		$produsen = $this->input->post('produsen');
		$harga = $this->input->post('harga');

		$data = array(
			'id_obat' => $id,
			'jenis_obat' => $jenis,
			'produsen_obat' => $produsen,
			'harga_obat' => $harga,
			);
		$where = array(
			'id_obat' => $id	
			);
		$this->m_obat->update_data($where, $data,'obat');
		redirect('obat/index');
	}
	function out(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

 ?>