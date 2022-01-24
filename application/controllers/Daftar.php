<?php 

/**
* 
*/
class Daftar extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_daftar');
		$this->load->model('m_pegawai');
		$this->load->model('m_pelanggan');
		$this->load->helper('url');
	}

	function index(){
		$data['kode'] = $this->m_daftar->kode_otomatis();
		$data['pegawai'] = $this->m_pegawai->tampil_data();
		$data['pelanggan'] = $this->m_pelanggan->tampil_data();
		$this->load->view('v-inputdaftar',$data);
	}
	function tambah(){
		$data['pegawai'] = $this->m_pegawai->tampil_data();
		$data['pelanggan'] = $this->m_pelanggan->tampil_data();
		$this->load->view('v-inputdaftar',$data);
	}
	function tambah_aksi(){
		$no = $this->input->post('no');
		$idpeg = $this->input->post('idpeg');
		$idpel = $this->input->post('idpel');
		$namapas = $this->input->post('namapas');
		$alamatpas = $this->input->post('alamatpas');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			'no_pendaftaran' => $no,
			'id_pegawai' => $idpeg,
			'id_pelanggan' => $idpel,
			'nama_pasien' => $namapas,
			'alamat_pasien' => $alamatpas,
			'tanggal_daftar' => $tanggal,
			);
		$this->m_daftar->input_data($data,'pendaftaran');
		redirect('daftar/index');
	}
	function updatestatus(){
		$query = $this->db->query('UPDATE');
	}
}

 ?>