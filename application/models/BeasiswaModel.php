<?php
 class BeasiswaModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_beasiswa');
 	}
	 
 	function findBy($id){
 		$this->db->where($id);
 		return $this->db->get('tb_beasiswa');
 	}

 	function add($data){
 		return $this->db->insert('tb_beasiswa',$data);
	}
 	
 	function update($id,$data){
		 $this->db->where($id);
 		return $this->db->update('tb_beasiswa',$data);
	}
	
	function delete($id){
		$this->db->where($id);
 		return $this->db->delete('tb_beasiswa');
 	}
 }
