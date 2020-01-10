<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$data_login = $this->session->userdata('get_login');
		if($data_login!=='' && $data_login!==TRUE){
			redirect('dashboard/login');
		}
	}
	public function index()
	{
		$sender['content']='member/home_member';
		$sender['menu_aktif']='member';
		$sender['data_member'] = $this->db->get('member')->result();
		$this->load->view('layout/template',$sender);
	}
	public function block(){
			
	}
	public function unblock(){
		
	}
	
	
	
	
}
