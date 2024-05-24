<?php
 class Kelas_siswaModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
		$this->db->select('tb_siswa.id as id_siswa, tb_tahun_pelajaran_siswa.id as id_tapel_siswa, tb_tahun_pelajaran.status_tahun, tb_tahun_pelajaran_siswa.paralel, tb_siswa.nama, tb_kelas.kelas, tb_jurusan.nama_jurusan, tb_tahun_pelajaran.tahun_awal, tb_tahun_pelajaran_siswa.jurusan, tb_tahun_pelajaran.tahun_akhir, tb_tahun_pelajaran_siswa.id_tahun_pelajaran, tb_tahun_pelajaran_siswa.kode as kode, tb_siswa.nohp, tb_siswa.jk, tb_siswa.nisn, tb_siswa.no_induk, tb_siswa.nik_siswa');
		$this->db->from('tb_tahun_pelajaran_siswa');
		$this->db->join('tb_siswa', 'tb_tahun_pelajaran_siswa.id_siswa = tb_siswa.id', 'right');
		$this->db->join('tb_kelas', 'tb_tahun_pelajaran_siswa.id_kelas = tb_kelas.id', 'left');
		$this->db->join('tb_paralel', 'tb_tahun_pelajaran_siswa.id_paralel = tb_paralel.id', 'left');
		$this->db->join('tb_jurusan', 'tb_tahun_pelajaran_siswa.id_jurusan = tb_jurusan.id', 'left');
		$this->db->join('tb_tahun_pelajaran', 'tb_tahun_pelajaran_siswa.id_tahun_pelajaran = tb_tahun_pelajaran.id', 'left');
		$this->db->where('tb_tahun_pelajaran.status_tahun', '1');
		return $this->db->get();
 	}
 	
 	function get_siswa_non_kelas(){
		$this->db->select('tb_siswa.id as id_siswa, tb_tahun_pelajaran_siswa.id as id_tapel_siswa, tb_tahun_pelajaran_siswa.paralel, tb_siswa.nama, tb_kelas.kelas, tb_jurusan.nama_jurusan, tb_tahun_pelajaran.tahun_awal, tb_tahun_pelajaran_siswa.jurusan, tb_tahun_pelajaran.tahun_akhir, tb_tahun_pelajaran_siswa.id_tahun_pelajaran, tb_tahun_pelajaran_siswa.kode as kode, tb_siswa.nohp');
		$this->db->from('tb_tahun_pelajaran_siswa');
		$this->db->join('tb_siswa', 'tb_tahun_pelajaran_siswa.id_siswa = tb_siswa.id', 'right');
		$this->db->join('tb_kelas', 'tb_tahun_pelajaran_siswa.id_kelas = tb_kelas.id', 'left');
		$this->db->join('tb_paralel', 'tb_tahun_pelajaran_siswa.id_paralel = tb_paralel.id', 'left');
		$this->db->join('tb_jurusan', 'tb_tahun_pelajaran_siswa.id_jurusan = tb_jurusan.id', 'left');
		$this->db->join('tb_tahun_pelajaran', 'tb_tahun_pelajaran_siswa.id_tahun_pelajaran = tb_tahun_pelajaran.id', 'left');
		$this->db->where('tb_tahun_pelajaran_siswa.id_siswa', NULL);
		return $this->db->get();
 	}

 	function findBy($id){
		$this->db->select('tb_siswa.id as id_siswa, tb_tahun_pelajaran_siswa.id as id_tapel_siswa, tb_tahun_pelajaran_siswa.paralel, tb_siswa.nama, tb_kelas.kelas, tb_jurusan.nama_jurusan, tb_tahun_pelajaran.tahun_awal, tb_tahun_pelajaran_siswa.jurusan, tb_tahun_pelajaran.tahun_akhir, tb_tahun_pelajaran_siswa.id_tahun_pelajaran, tb_tahun_pelajaran_siswa.kode as kode, tb_siswa.nohp, tb_siswa.jk, tb_siswa.nisn, tb_siswa.no_induk, tb_siswa.nik_siswa, tb_siswa.nisn');
		// $this->db->from('tb_tahun_pelajaran_siswa');
		$this->db->join('tb_siswa', 'tb_tahun_pelajaran_siswa.id_siswa = tb_siswa.id', 'right');
		$this->db->join('tb_kelas', 'tb_tahun_pelajaran_siswa.id_kelas = tb_kelas.id', 'left');
		$this->db->join('tb_paralel', 'tb_tahun_pelajaran_siswa.id_paralel = tb_paralel.id', 'left');
		$this->db->join('tb_jurusan', 'tb_tahun_pelajaran_siswa.id_jurusan = tb_jurusan.id', 'left');
		$this->db->join('tb_tahun_pelajaran', 'tb_tahun_pelajaran_siswa.id_tahun_pelajaran = tb_tahun_pelajaran.id', 'left');
 		$this->db->where($id);
 		return $this->db->get('tb_tahun_pelajaran_siswa');
 	}

	function get_siswa_kelas($kode){
		$this->db->select('tb_siswa.nama, tb_siswa.nik_siswa, tb_siswa.password, tb_siswa.nohp, tb_tahun_pelajaran_siswa.id as id_tapel_siswa, tb_tahun_pelajaran_siswa.paralel, tb_tahun_pelajaran_siswa.kode as kode');
		$this->db->join('tb_siswa', 'tb_tahun_pelajaran_siswa.id_siswa = tb_siswa.id', 'right');
		$this->db->join('tb_tahun_pelajaran', 'tb_tahun_pelajaran_siswa.id_tahun_pelajaran = tb_tahun_pelajaran.id', 'left');
		$this->db->where($kode);
		return $this->db->get('tb_tahun_pelajaran_siswa');
	} 

	// get siswa untuk export excel
	function get_siswa_for_excel($kode){
		$this->db->select('tb_siswa.id, tb_siswa.kode_pendaftaran, tb_siswa.password, tb_siswa.nama, tb_siswa.foto, tb_siswa.jk, tb_siswa.no_induk, tb_siswa.nisn, tb_siswa.nik_siswa, tb_siswa.no_kk, tb_siswa.tempatlahir_siswa, tb_siswa.tgllahir_siswa, tb_siswa.noakte_lahir, tb_siswa.agama, tb_siswa.kewarganegaraan, tb_siswa.alamat_siswa, tb_siswa.nohp, tb_siswa.rt, tb_siswa.rw, tb_siswa.dusun, tb_siswa.desa, tb_siswa.kec, tb_siswa.kab, tb_siswa.kodepos, tb_siswa.tempat_tinggal, tb_siswa.moda_transportasi, tb_siswa.anak_keberapa, tb_siswa.nomor_kip, tb_siswa.nama_kip, tb_siswa.lintang, tb_siswa.bujur, tb_siswa.nomor_kks, tb_siswa.nomor_kps_pkh, tb_siswa.nama_ayah, tb_siswa.nohp_ayah, tb_siswa.nik_ayah, tb_siswa.tgllahir_ayah, tb_siswa.pendidikan_ayah, tb_siswa.pekerjaan_ayah, tb_siswa.penghasilan_ayah, tb_siswa.nama_ibu, tb_siswa.nohp_ibu, tb_siswa.nik_ibu, tb_siswa.tgllahir_ibu, tb_siswa.pendidikan_ibu, tb_siswa.pekerjaan_ibu, tb_siswa.penghasilan_ibu, tb_siswa.nama_wali, tb_siswa.nohp_wali, tb_siswa.nik_wali, tb_siswa.tgllahir_wali, tb_siswa.pendidikan_wali, tb_siswa.pekerjaan_wali, tb_siswa.penghasilan_wali, tb_siswa.tinggi_badan, tb_siswa.berat_badan, tb_siswa.jarak_tempat_tinggal, tb_siswa.waktu_tempuh_kesekolah, tb_siswa.jumlah_saudara_kandung, tb_siswa.jenis_pendaftaran, tb_siswa.nis, tb_siswa.tgl_masuk_sekolah, tb_siswa.asal_sekolah, tb_siswa.nomor_peserta_ujian, tb_siswa.nomor_seri_ijazah, tb_siswa.keluar_karena, tb_siswa.tanggal_keluar, tb_siswa.alasan_keluar, tb_tahun_pelajaran_siswa.kelas, tb_tahun_pelajaran_siswa.jurusan, tb_tahun_pelajaran_siswa.paralel');
		$this->db->join('tb_siswa', 'tb_tahun_pelajaran_siswa.id_siswa = tb_siswa.id', 'right');
		$this->db->where($kode);
		$this->db->limit(2);
		return $this->db->get('tb_tahun_pelajaran_siswa');
	}

	// get siswa untuk export excel
	function get_siswa_for_cetak_buku_induk($kode){
		$this->db->select('*');
		$this->db->join('tb_siswa', 'tb_tahun_pelajaran_siswa.id_siswa = tb_siswa.id', 'right');
		$this->db->where($kode);
		// $this->db->limit(2);
		return $this->db->get('tb_tahun_pelajaran_siswa');
	}

	// get kelas untuk
	function get_kelas_tapel($kode)
	{
		$this->db->select('kelas, jurusan, paralel, tahun_awal, tahun_akhir, jk, nisn, no_induk, nik_siswa, nisn');
		$this->db->join('tb_tahun_pelajaran', 'tb_tahun_pelajaran.id = tb_tahun_pelajaran_siswa.id_tahun_pelajaran');
		$this->db->join('tb_siswa', 'tb_tahun_pelajaran_siswa.id_siswa = tb_siswa.id');
		$this->db->where($kode);
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
