<?php
 class ParalelModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_paralel');
 	}

 	function findBy($id){
 		$this->db->where($id);
 		return $this->db->get('tb_paralel');
 	}

 	function add($data){
 		return $this->db->insert('tb_paralel',$data);
 	}
 	
 	function update($id,$data){
 		$this->db->where($id);
 		return $this->db->update('tb_paralel',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_paralel');
 	}
 }
