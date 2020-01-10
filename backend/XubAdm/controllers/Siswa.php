<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$data_login = $this->session->userdata('get_login');
		if($data_login!=='' && $data_login!==TRUE){
			redirect('dashboard/login');
		}
	}
	public function index()
	{
		
		$sender['content']='siswa/home_siswa';
		$sender['menu_aktif']='siswa';
		$sender['data_siswa'] = $this->db->get_where('tbl_siswa')->result();
		$this->load->view('layout/template',$sender);
	}
	public function add(){
		$sender['content']='siswa/form_siswa';
		$sender['menu_aktif']='siswa';
		$sender['mode'] = 'tambah';
		$this->load->view('layout/template',$sender);
	}
	public function edit($id){
		$sender['content']='siswa/form_siswa';
		$sender['menu_aktif']='siswa';
		$sender['mode'] = 'edit';
		$sender['data_edit'] = $this->db->get_where('tbl_siswa',array('siswa_id'=>$id))->row_array();
		$sender['siswa_id']=$sender['data_edit']['siswa_id'];
		$this->load->view('layout/template',$sender);
	}
	public function save(){
		$mode = $this->input->post('mode');
		$ins['nama_siswa'] = $this->input->post('nama_siswa');
		$ins['no_induk'] = $this->input->post('no_induk');
		$ins['password'] = $this->input->post('password');
		
        if($mode=='tambah'){
        	$this->db->insert('tbl_siswa',$ins);
		}else
		if($mode == 'edit'){
			$id = $this->input->post('siswa_id');
			$this->db->where('siswa_id',$id);
			$this->db->update('tbl_siswa',$ins);
		}
		redirect('siswa');
		
		
	}
	public function delete($id){
		
		$this->db->where('siswa_id',$id);
		$this->db->delete('tbl_siswa');
		
		
	}
	public function reset_pwd($id){
		
		$this->db->where('siswa_id',$id);
		$this->db->update('tbl_siswa',array('password'=>'123'));
		redirect('siswa');
		
	}
	
	
	
}
