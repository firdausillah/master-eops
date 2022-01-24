<?php
 class Wali_kelasModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
		$this->db->select('tb_ptk.id as id_ptk, tb_wali_kelas.id as id_tapel_ptk, tb_tahun_pelajaran.status_tahun, tb_wali_kelas.paralel, tb_ptk.nama, tb_kelas.kelas, tb_jurusan.nama_jurusan, tb_tahun_pelajaran.tahun_awal, tb_wali_kelas.jurusan, tb_tahun_pelajaran.tahun_akhir, tb_wali_kelas.id_tahun_pelajaran');
		$this->db->from('tb_wali_kelas');
		$this->db->join('tb_ptk', 'tb_wali_kelas.id_ptk = tb_ptk.id', 'left');
		$this->db->join('tb_kelas', 'tb_wali_kelas.id_kelas = tb_kelas.id', 'left');
		$this->db->join('tb_paralel', 'tb_wali_kelas.id_paralel = tb_paralel.id', 'left');
		$this->db->join('tb_jurusan', 'tb_wali_kelas.id_jurusan = tb_jurusan.id', 'left');
		$this->db->join('tb_tahun_pelajaran', 'tb_wali_kelas.id_tahun_pelajaran = tb_tahun_pelajaran.id', 'left');
		$this->db->where('tb_tahun_pelajaran.status_tahun', '1');
		return $this->db->get();
 	}
 	
 	function get_ptk_non_kelas(){
		$this->db->select('tb_ptk.id as id_ptk, tb_wali_kelas.id as id_tapel_ptk, tb_wali_kelas.paralel, tb_ptk.nama, tb_kelas.kelas, tb_jurusan.nama_jurusan, tb_tahun_pelajaran.tahun_awal, tb_wali_kelas.jurusan, tb_tahun_pelajaran.tahun_akhir, tb_wali_kelas.id_tahun_pelajaran');
		$this->db->from('tb_wali_kelas');
		$this->db->join('tb_ptk', 'tb_wali_kelas.id_ptk = tb_ptk.id', 'right');
		$this->db->join('tb_kelas', 'tb_wali_kelas.id_kelas = tb_kelas.id', 'left');
		$this->db->join('tb_paralel', 'tb_wali_kelas.id_paralel = tb_paralel.id', 'left');
		$this->db->join('tb_jurusan', 'tb_wali_kelas.id_jurusan = tb_jurusan.id', 'left');
		$this->db->join('tb_tahun_pelajaran', 'tb_wali_kelas.id_tahun_pelajaran = tb_tahun_pelajaran.id', 'left');
		// $this->db->where('tb_wali_kelas.id_tahun_pelajaran', 2);
		return $this->db->get();

		// return $this->db->get('tb_ptk');
 	}

 	function findBy($id){
		$this->db->select('tb_ptk.id as id_ptk, tb_wali_kelas.id as id_tapel_ptk, tb_wali_kelas.paralel, tb_ptk.nama, tb_kelas.kelas, tb_jurusan.nama_jurusan, tb_tahun_pelajaran.tahun_awal, tb_wali_kelas.jurusan, tb_tahun_pelajaran.tahun_akhir, tb_wali_kelas.id_tahun_pelajaran, tb_wali_kelas.id_kelas, tb_wali_kelas.id_jurusan, tb_wali_kelas.id_paralel');
		// $this->db->from('tb_wali_kelas');
		$this->db->join('tb_ptk', 'tb_wali_kelas.id_ptk = tb_ptk.id', 'right');
		$this->db->join('tb_kelas', 'tb_wali_kelas.id_kelas = tb_kelas.id', 'left');
		$this->db->join('tb_paralel', 'tb_wali_kelas.id_paralel = tb_paralel.id', 'left');
		$this->db->join('tb_jurusan', 'tb_wali_kelas.id_jurusan = tb_jurusan.id', 'left');
		$this->db->join('tb_tahun_pelajaran', 'tb_wali_kelas.id_tahun_pelajaran = tb_tahun_pelajaran.id', 'left');
 		$this->db->where($id);
 		return $this->db->get('tb_wali_kelas');
 	}

 	function add($data){
 		return $this->db->insert('tb_wali_kelas',$data);
 	}
 	
 	function update($id,$data){
 		$this->db->where($id);
 		return $this->db->update('tb_wali_kelas',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_wali_kelas');
 	}
 }
