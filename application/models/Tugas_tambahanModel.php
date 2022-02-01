<?php
 class Tugas_tambahanModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_tugas_tambahan');
 	}

 	function findBy($id){
 		$this->db->where($id);
 		return $this->db->get('tb_tugas_tambahan');
 	}

 	function add($data){
 		return $this->db->insert('tb_tugas_tambahan',$data);
 	}
 	
 	function update($id,$data){
 		$this->db->where($id);
 		return $this->db->update('tb_tugas_tambahan',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_tugas_tambahan');
 	}
 }
