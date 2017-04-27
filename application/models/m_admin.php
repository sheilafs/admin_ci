<?php
class M_admin extends CI_Model {
	function kat(){
		$query = ('SELECT * from kategori'); //query untuk menampilkan data dari tabel 
		return $this->db->query($query);
	}
	
	function cari()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from news 
			join kategori on news.id_kategori = kategori.id_kategori where title like '%$cari%' ");
		return $data->result();
	}
	
	function kategori(){
		$query = ('SELECT * from news 
			join kategori on news.id_kategori = kategori.id_kategori'); //query untuk menampilkan data dari tabel dengan kondisi join
		return $this->db->query($query);
	}
	
	function input($data,$table){
		$this->db->insert($table,$data); //untuk menambah data berdasar array $table dan $data
	}
	
	function hapus($where,$table){
		$this->db->where($where); //$where untuk menyeleksi query
		$this->db->delete($table); //delete untuk menghapus record
	}
	
	function pilih($id_news){		
		 $this->db->where('id_news',$id_news);
		return $this->db->get('news')->result(); //sama seperi SELECT * FROM news WHERE id_news=‘$id_news’
	}

	function update_data($data,$id_news){
		$this->db->where('id_news',$id_news);
		$this->db->update('news',$data);
		return TRUE;
	}
}
