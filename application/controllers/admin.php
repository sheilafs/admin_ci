<?php
class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		
	}
	function index(){
		if($this->session->userdata('logged_in') == TRUE){
			$data['kat'] = $this->m_admin->kat()->result();
			$data['kategori'] = $this->m_admin->kategori()->result();
			$this->load->view('admin/header');
			$this->load->view('admin/admin', $data);
			$this->load->view('admin/footer');
		} else {
			echo "<script type='text/javascript'> alert('Anda belum login!');</script>";
			redirect(base_url('login/'), 'refresh');
		}
	}
	
	function hasil(){
		$data2['cari'] = $this->m_admin->cari();
		$this->load->view('admin/header');
		$this->load->view('admin/result', $data2);
		$this->load->view('admin/footer');
	}
	
	function tambah_news(){
		$id_news = $this->input->post('id_news');
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$gambar = $this->input->post('gambar');
		$id_kategori = $this->input->post('id_kategori');
		
		$data = array(
			'id_news' => $id_news,
			'title' => $title,
			'content' => $content,
			'image' => $gambar,
			'id_kategori' => $id_kategori
			);
		$this->m_admin->input($data,'news');
		redirect(base_url('admin/admin'));
	}
	
	function tambah_kategori(){
		$id_ktg = $this->input->post('id_ktg');
		$kategori = $this->input->post('kategori');
		
		$data = array(
			'id_ktg' => $id_ktg,
			'kategori' => $kategori
			);
		$this->m_admin->input($data,'kategori');
		redirect(base_url('admin/'));
	}
	
	function hapus($id){//untuk mengambil data id yang dikirim melalui url link hapus{
		$where = array('id_news'=>$id); 
		$this->m_admin->hapus($where,'news'); //parameter pertama variabel array $where berisi data id dan parameter kedua untuk nama tabel
		redirect(base_url('admin/'));
	}
	
	function edit($id_news){		
		$where = array('id_news' => $id_news);
		$data['news'] = $this->m_admin->pilih($where,'news')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/update', $data);
		$this->load->view('admin/footer');
	}
		
	function update(){
		$id_news = $this->input->post('id_news');
		$data = array(
			'title'		=> $this->input->post('title'),
			'content'	=> $this->input->post('content'),
			'image'	=> $this->input->post('image')
		);
		
		$where = array('id_news' => $id_news);
		$this->m_admin->update_data($where,$data,'news');
		redirect(base_url('admin/'));
	}
	
	function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('level');
		redirect(base_url('login/'));
	}
}
?>