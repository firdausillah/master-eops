<?php
 class Riwayat_sertifikasiModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_riwayat_sertifikasi');
 	}

 	function findBy($id){
 		$this->db->where($id);
 		return $this->db->get('tb_riwayat_sertifikasi');
 	}

 	function add($data){
 		return $this->db->insert('tb_riwayat_sertifikasi',$data);
 	}
 	
 	function update($id,$data){
 		$this->db->where($id);
 		return $this->db->update('tb_riwayat_sertifikasi',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_riwayat_sertifikasi');
 	}
 }
