<?php 

/**
* 
*/
class m_beliobat extends CI_Model{
	function tampil_data(){
		return $this->db->get('beli_obat');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function kode_otomatis(){
		$this->db->select('RIGHT(beli_obat.id_pembelian,2) as kode',FALSE);
		$this->db->order_by('id_pembelian','DESC');
		$this->db->limit(1);
		$query = $this->db->get('beli_obat');
		
		if ($query->num_rows() <> 0){
			$data = $query->row();
			$kode = intval($data->kode)+1;
		}else{
			$kode = 1;
		}
		$kodemax = str_pad($kode, 2, "0",STR_PAD_LEFT);
		$kodejadi = "PEM".$kodemax;
		return $kodejadi;
	}
	function tampil_harga(){
		$query = ("SELECT * FROM kasur where status='Available'");
	}
}

 ?>