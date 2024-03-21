<?php
 class PrestasiModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_prestasi');
 	}
	 
 	function findBy($id){
 		$this->db->where($id);
 		return $this->db->get('tb_prestasi');
 	}

 	function add($data){
 		return $this->db->insert('tb_prestasi',$data);
	}
 	
 	function update($id,$data){
		 $this->db->where($id);
 		return $this->db->update('tb_prestasi',$data);
	}
	
	function delete($id){
		$this->db->where($id);
 		return $this->db->delete('tb_prestasi');
 	}
 }
