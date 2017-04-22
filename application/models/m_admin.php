<?php
class M_admin extends CI_Model {
	function kat(){
		$query = ('SELECT * from kategori'); //query untuk menampilkan data dari tabel 
		return $this->db->query($query);
	}
	
	function kategori(){
		$query = ('SELECT * from news 
			join kategori on news.id_kategori = kategori.id_kategori'); //query untuk menampilkan data dari tabel dengan kondisi join
		return $this->db->query($query);
	}
	
	function input($data,$table){
		$this->db->insert($table,$data); //untuk menambah data berdasar array $table dan $data
	}
}
