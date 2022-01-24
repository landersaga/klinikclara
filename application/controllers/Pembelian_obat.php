<?php 

/**
* 
*/
class Pembelian_obat extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_beliobat');
		$this->load->model('m_pegawai');
		$this->load->model('m_pelanggan');
		$this->load->model('m_obat');
		$this->load->helper('url');
	}

	function index(){
		$data['kode'] = $this->m_beliobat->kode_otomatis();
		$data['pegawai'] = $this->m_pegawai->tampil_data();
		$data['pelanggan'] = $this->m_pelanggan->tampil_data();
		$data['obat'] = $this->m_obat->tampil_data();
		$this->load->view('v-inputbeliobat',$data);
	}
	function tambah(){
		$data['pegawai'] = $this->m_pegawai->tampil_data();
		$data['pelanggan'] = $this->m_pelanggan->tampil_data();
		$data['obat'] = $this->m_obat->tampil_data();
		$this->load->view('v-inputbeliobat',$data);
	}
	function tambah_aksi(){
		$id = $this->input->post('id');
		$idpeg = $this->input->post('idpeg');
		$idpel = $this->input->post('idpel');
		$obat = $this->input->post('obat');
		$jumlah = $this->input->post('jumlah');
		$harga = $this->input->post('harga');

		$data = array(
			'id_pembelian' => $id,
			'id_pegawai' => $idpeg,
			'id_pelanggan' => $idpel,
			'obat' => $obat,
			'jumlah' => $jumlah,
			'harga' => $harga,
			);
		$this->m_beliobat->input_data($data,'beli_obat');
		redirect('pembelian_obat/index');
	}
	function updatestatus(){
		$query = $this->db->query('UPDATE');
	}
}

 ?>