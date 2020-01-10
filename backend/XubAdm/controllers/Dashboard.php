<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		$data_login = $this->session->userdata('get_login');
		if($data_login!=='' && $data_login!==TRUE){
			redirect('dashboard/login');
		}
		$sender['content']='dashboard/home';
		$sender['menu_aktif']='dashboard';
		$this->load->view('layout/template',$sender);

		
	}
	public function login(){
		//echo $this->encrypt->encode('Yudi123');
		$error=array();
		if(isset($_POST['login'])){
			$username = $this->security->xss_clean($this->input->post('username'));
			$password = $this->input->post('password');
			//echo $password;
			$data_user = $this->db->get_where('tbl_admin',array('username'=>$username));
			if($data_user->num_rows() > 0){
				$data_login = $data_user->row_array();
				$pwd = trim($data_login['password']);
				$dcd = $this->encrypt->decode($pwd);
				//var_dump($data_login);
				if($password == $dcd){
					$userdata_login = $data_login;
					unset($userdata_login['password']);
					$userdata_login['get_login']= TRUE ; 
					$this->session->set_userdata($userdata_login);
					redirect('dashboard/index');
				}else{
					$error['error_type']='danger';
					$error['error']='Maaf, password anda salah. Silakan coba lagi!';
				}

			}else{
				$error['error_type']='warning';
				$error['error']='Maaf, username tidak ditemukan dalam sistem kami.';
			}
			
		}
		
		$this->load->view('dashboard/login',$error);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('dashboard');
	}
	
}
