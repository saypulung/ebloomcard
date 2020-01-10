<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$data_login = $this->session->userdata('get_login');
		if($data_login!=='' && $data_login!==TRUE){
			redirect('dashboard/login');
		}
	}
	public function index()
	{
		
		$sender['content']='ujian/home_ujian';
		$sender['menu_aktif']='ujian';
		$sender['data_siswa'] = $this->db->get_where('v_nilai')->result();
		$this->load->view('layout/template',$sender);
	}
	public function detail(){
		$session_id = $this->uri->segment(3);
		$this->db->where('session_id',$session_id);
		$sender['data_siswa'] = $this->db->get_where('v_nilai')->row();
		$this->db->where('session_id',$session_id);
		$sender['data'] = $this->db->get('v_jawaban_siswa')->result();
		$sender['menu_aktif']='ujian';
		$sender['content']='ujian/home_detail_ujian';
		$this->load->view('layout/template',$sender);
	}
	
	
	
}
