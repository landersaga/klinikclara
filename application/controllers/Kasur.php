<?php 

/**
* 
*/
class Kasur extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_kasur');
		$this->load->helper('url');
	}

	function index(){
		$data['kasur'] = $this->m_kasur->tampil_data();
		$this->load->view('v-tampilkasur',$data);
	}

	function tambah(){
		$data['kode'] = $this->m_kasur->kode_otomatis();
		$this->load->view('v-inputkasur',$data);
	}
	function tambah_aksi(){
		$id	 = $this->input->post('idkasur');
		$status = $this->input->post('status');
		$data = array(
			'id_kasur' => $id,
			'status' => $status,
			);
		$this->m_kasur->input_data($data,'kasur');
		redirect('kasur/index');
	}

	function hapus($id){
		$where = array('id_kasur' => $id);
		$this->m_kasur->hapus_data($where,'kasur');
		redirect('kasur/index');
	}
	function edit($id){
		$where = array('id_kasur' => $id);
		$data['kasur'] = $this->m_kasur->edit_data($where,'kasur')->result();
		$this->load->view('v-editkasur', $data);
	}
	function update(){
		$id	 = $this->input->post('id_kasur');
		$status = $this->input->post('status');

		$data = array(
			'id_kasur' => $id,
			'status' => $status,
			);
		$where = array(
			'id_kasur' => $id	
			);
		$this->m_kasur->update_data($where, $data,'kasur');
		redirect('kasur/index');
	}
	function out(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

 ?>