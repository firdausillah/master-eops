<?php
 class Riwayat_sertifikasiModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_riwayat_sertifikasi_m');
 	}

 	function findBy($id){
 		$this->db->where($id);
 		return $this->db->get('tb_riwayat_sertifikasi_m');
 	}

 	function add($data){
 		return $this->db->insert('tb_riwayat_sertifikasi_m',$data);
 	}
 	
 	function update($id,$data){
 		$this->db->where($id);
 		return $this->db->update('tb_riwayat_sertifikasi_m',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_riwayat_sertifikasi_m');
 	}
 }
