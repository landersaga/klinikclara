<?php 

/**
* 
*/
class Booking extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_booking');
		$this->load->model('m_pegawai');
		$this->load->model('m_pelanggan');
		$this->load->model('m_kasur');
		$this->load->helper('url');
	}

	function index(){
		$data['kode'] = $this->m_booking->kode_otomatis();
		$data['pegawai'] = $this->m_pegawai->tampil_data();
		$data['pelanggan'] = $this->m_pelanggan->tampil_data();
		$data['kasur'] = $this->m_kasur->tampil_data();
		$this->load->view('v-inputbooking',$data);
	}
	function tambah(){
		$data['pegawai'] = $this->m_pegawai->tampil_data();
		$data['pelanggan'] = $this->m_pelanggan->tampil_data();
		$data['kasur'] = $this->m_kasur->tampil_data();
		$this->load->view('v-inputbooking',$data);
	}
	function tambah_aksi(){
		$id = $this->input->post('id');
		$idpeg = $this->input->post('idpeg');
		$idpel = $this->input->post('idpel');
		$idkas = $this->input->post('idkas');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			'id_booking' => $id,
			'id_pegawai' => $idpeg,
			'id_pelanggan' => $idpel,
			'id_kasur' => $idkas,
			'tanggal_booking' => $tanggal,
			);
		$this->m_booking->input_data($data,'booking_opname');
		redirect('booking/index');
	}
	function updatestatus(){
		$query = $this->db->query('UPDATE');
	}
}

 ?>