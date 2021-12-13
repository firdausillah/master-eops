<?php
 class Nama_pembayaranModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_nama_pembayaran');
 	}

 	function findBy($id){
 		$this->db->where($id);
 		return $this->db->get('tb_nama_pembayaran');
 	}

 	function add($data){
 		return $this->db->insert('tb_nama_pembayaran',$data);
 	}
 	
 	function update($id,$data){
 		$this->db->where($id);
 		return $this->db->update('tb_nama_pembayaran',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_nama_pembayaran');
 	}
 }
