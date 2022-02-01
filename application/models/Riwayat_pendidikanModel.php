<?php
 class Riwayat_pendidikanModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_riwayat_pendidikan');
 	}

 	function findBy($id){
 		$this->db->where($id);
 		return $this->db->get('tb_riwayat_pendidikan');
 	}

 	function add($data){
 		return $this->db->insert('tb_riwayat_pendidikan',$data);
 	}
 	
 	function update($id,$data){
 		$this->db->where($id);
 		return $this->db->update('tb_riwayat_pendidikan',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_riwayat_pendidikan');
 	}
 }
