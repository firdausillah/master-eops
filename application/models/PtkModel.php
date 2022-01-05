<?php
 class PtkModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_ptk');
 	}

 	function findBy($id){
 		$this->db->where($id);
 		return $this->db->get('tb_ptk');
 	}

 	function add($data){
 		return $this->db->insert('tb_ptk',$data);
 	}
 	
 	function update($id,$data){
 		$this->db->where($id);
 		return $this->db->update('tb_ptk',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_ptk');
 	}
 }