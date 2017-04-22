<?php
class Login extends CI_Controller {
	function index()
	{
		$this->load->view('login');
	}
	
	function cek_login(){
        $username = $this->input->post('username');
        $pass = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $pass);
        $log = $this->m_login->cek_user('user', $where)->result();
		
        foreach($log as $l){
			$id_user = $l->id_user;
			$level = $l->level;
		};
		
        if($log > 1){
            $userdata = array(
                'username' => $username,
                'password' => $pass,
                'logged_in' => TRUE, 
				'id_user' => $id_user,
				'level' => $level);
            $this->session->set_userdata($userdata);
            if($level == 1){
				echo "<script type='text/javascript'> alert('Berhasil Login Admin!!');</script>";
               	redirect(base_url('admin/'), 'refresh');
            } elseif($level == 2){
				echo "<script type='text/javascript'> alert('Berhasil Login User!!');</script>";
               	redirect(base_url('user/'), 'refresh');
            } else {
				redirect(base_url('login?aa=1'));
			}
        } else{
            redirect(base_url('login?aa=1'));
        }
	}
}
