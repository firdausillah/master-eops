<?php
 class KelasModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_kelas');
 	}

 	function findBy($id){
 		$this->db->where($id);
 		return $this->db->get('tb_kelas');
 	}

 	function add($data){
 		return $this->db->insert('tb_kelas',$data);
 	}
 	
 	function update($id,$data){
 		$this->db->where($id);
 		return $this->db->update('tb_kelas',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_kelas');
 	}
 }
