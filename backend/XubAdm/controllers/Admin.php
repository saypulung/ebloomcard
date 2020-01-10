<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$data_login = $this->session->userdata('get_login');
		if($data_login!=='' && $data_login!==TRUE){
			redirect('dashboard/login');
		}
	}
	public function index($id)
	{
		
		$sender['content']='admin/home_admin';
		$sender['id_otobus']=$id;
		$sender['menu_aktif']='autobus';
		$this->db->where('id_otobus',$id);
		$sender['data_admin'] = $this->db->get('admin')->result();
		$this->load->view('layout/template',$sender);
	}
	public function add(){
		$sender['content']='admin/form_admin';
		$sender['menu_aktif']='autobus';
		$sender['mode'] = 'tambah';
		$sender['id_otobus']=$this->uri->segment(3);
		$this->load->view('layout/template',$sender);
	}
	public function edit($id){
		$sender['content']='admin/form_admin';
		$sender['menu_aktif']='autobus';
		$sender['mode'] = 'edit';
		$sender['data_edit'] = $this->db->get_where('admin',array('id_admin'=>$id))->row_array();
		$sender['id_otobus']=$sender['data_edit']['id_otobus'];
		$sender['id_admin']=$sender['data_edit']['id_admin'];

		$this->load->view('layout/template',$sender);
	}
	public function save(){
		$mode = $this->input->post('mode');
		$ins['nama_admin'] = $this->input->post('nama_admin');
		$ins['nama_login'] = $this->input->post('username');
		$ins['email'] = $this->input->post('email');
		$ins['telepon'] = $this->input->post('telepon');
		$ins['level']='admin';

		
		$id_otobus = $this->input->post('id_otobus');

        if($mode=='tambah'){
        	$u_password = $this->input->post('u_password');
			$password = $this->input->post('password');
			$ins['password'] = trim($this->encrypt->encode($password));
        	$ins['id_otobus']=$id_otobus;

        	$this->db->insert('admin',$ins);
		}else
		if($mode == 'edit'){
			$id = $this->input->post('id_admin');
			
			$this->db->where('id_admin',$id);
			$this->db->update('admin',$ins);

		}
		redirect('admin/autobus/'.$id_otobus);
		
		
	}
	public function delete($id){
		$this->db->where('id_admin',$id);
		$this->db->delete('admin');
		//redirect('autobus');
		
		
	}
	
	
}
