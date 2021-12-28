<?php
 class Kelas_siswaModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
		$this->db->select('tb_siswa.id as id_siswa, tb_tahun_pelajaran_siswa.id, tb_siswa.nama, tb_kelas.kelas, tb_jurusan.nama_jurusan, tb_tahun_pelajaran.tahun_awal, tb_tahun_pelajaran.tahun_akhir, tb_tahun_pelajaran_siswa.id_tahun_pelajaran');
		$this->db->from('tb_tahun_pelajaran_siswa');
		$this->db->join('tb_siswa', 'tb_tahun_pelajaran_siswa.id_siswa = tb_siswa.id', 'left');
		$this->db->join('tb_kelas', 'tb_tahun_pelajaran_siswa.id_kelas = tb_kelas.id', 'left');
		$this->db->join('tb_jurusan', 'tb_tahun_pelajaran_siswa.id_jurusan = tb_jurusan.id', 'left');
		$this->db->join('tb_tahun_pelajaran', 'tb_tahun_pelajaran_siswa.id_tahun_pelajaran = tb_jurusan.id', 'left');
		return $this->db->get();
 	}
 	
 	function get_siswa_non_kelas(){
		$this->db->select('tb_siswa.id as id_siswa, tb_tahun_pelajaran_siswa.id, tb_siswa.nama, tb_kelas.kelas, tb_jurusan.nama_jurusan, tb_tahun_pelajaran.tahun_awal, tb_tahun_pelajaran.tahun_akhir, tb_tahun_pelajaran_siswa.id_tahun_pelajaran');
		$this->db->from('tb_tahun_pelajaran_siswa');
		$this->db->join('tb_siswa', 'tb_tahun_pelajaran_siswa.id_siswa = tb_siswa.id', 'right');
		$this->db->join('tb_kelas', 'tb_tahun_pelajaran_siswa.id_kelas = tb_kelas.id', 'left');
		$this->db->join('tb_jurusan', 'tb_tahun_pelajaran_siswa.id_jurusan = tb_jurusan.id', 'left');
		$this->db->join('tb_tahun_pelajaran', 'tb_tahun_pelajaran_siswa.id_tahun_pelajaran = tb_jurusan.id', 'left');
		$this->db->where('tb_tahun_pelajaran_siswa.id_siswa', NULL);
		return $this->db->get();
 	}

 	function findBy($id){
		$this->db->select('tb_siswa.id as id_siswa, tb_tahun_pelajaran_siswa.id, tb_siswa.nama, tb_kelas.kelas, tb_jurusan.nama_jurusan, tb_tahun_pelajaran.tahun_awal, tb_tahun_pelajaran.tahun_akhir, tb_tahun_pelajaran_siswa.id_tahun_pelajaran');
		// $this->db->from('tb_tahun_pelajaran_siswa');
		$this->db->join('tb_siswa', 'tb_tahun_pelajaran_siswa.id_siswa = tb_siswa.id', 'right');
		$this->db->join('tb_kelas', 'tb_tahun_pelajaran_siswa.id_kelas = tb_kelas.id', 'left');
		$this->db->join('tb_jurusan', 'tb_tahun_pelajaran_siswa.id_jurusan = tb_jurusan.id', 'left');
		$this->db->join('tb_tahun_pelajaran', 'tb_tahun_pelajaran_siswa.id_tahun_pelajaran = tb_jurusan.id', 'left');
 		$this->db->where($id);
 		return $this->db->get('tb_tahun_pelajaran_siswa');
 	}

 	function add($data){
 		return $this->db->insert('tb_tahun_pelajaran_siswa',$data);
 	}
 	
 	function update($id,$data){
 		$this->db->where($id);
 		return $this->db->update('tb_tahun_pelajaran_siswa',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_tahun_pelajaran_siswa');
 	}
 }
