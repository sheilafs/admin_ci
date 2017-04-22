<?php
class User extends CI_Controller {
	function index(){
		$this->load->view('user');
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