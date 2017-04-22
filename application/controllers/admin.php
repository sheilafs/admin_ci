<?php
class Admin extends CI_Controller {
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
		redirect(base_url('admin/'));
	}
	
	function tambah_kategori(){
		$id_kategori = $this->input->post('id_kategori');
		$kategori = $this->input->post('kategori');
		
		$data = array(
			'id_kategori' => $id_kategori,
			'kategori' => $kategori
			);
		$this->m_admin->input($data,'kategori');
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