<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$data_login = $this->session->userdata('get_login');
		if($data_login!=='' && $data_login!==TRUE){
			redirect('dashboard/login');
		}
	}
	public function index()
	{
		
		$sender['content']='soal/home_soal';
		$sender['menu_aktif']='soal';
		$sender['data_soal'] = $this->db->get('tbl_soal')->result();
		$this->load->view('layout/template',$sender);
	}
	public function add(){
		$sender['content']='soal/form_soal';
		$sender['menu_aktif']='soal';
		$sender['mode'] = 'tambah';
		$this->load->view('layout/template',$sender);
	}
	public function edit($id){
		$sender['content']='soal/form_soal';
		$sender['menu_aktif']='soal';
		$sender['mode'] = 'edit';
		$sender['data_edit'] = $this->db->get_where('tbl_soal',array('soal_id'=>$id))->row_array();
		$sender['soal_id']=$sender['data_edit']['soal_id'];
		$this->load->view('layout/template',$sender);
	}
	
	public function save(){
		$mode = $this->input->post('mode');
		$ins['isi_soal'] = $this->input->post('isi_soal');
		$ins['levelsoal'] = $this->input->post('levelsoal');
		$jwb = $this->input->post('jawaban');
		$benar = intval($this->input->post('benar'));
        if($mode=='tambah'){
        	$this->db->insert('tbl_soal',$ins);
        	$id = $this->db->insert_id();
        	$i=0;
        	foreach($jwb as $j){
        		$i++;
        		if($benar==$i){
        			$detail['benar']='1';
        		}else{
        			$detail['benar']='0';
        		}
        		$detail['jawaban_kode']=$i;
        		$detail['jawaban']=$j;
        		$detail['soal_id']=$id;
        		$this->db->insert('jawaban_soal',$detail);
			}
		}else
		if($mode == 'edit'){
			$id = $this->input->post('soal_id');
			$this->db->where('soal_id',$id);
			$this->db->update('tbl_soal',$ins);
			
			$i=0;
			foreach($jwb as $j){
        		$i++;
        		if($benar==$i){
        			$detail['benar']='1';
        		}else{
        			$detail['benar']='0';
        		}
        		$detail['jawaban']=$j;
        		$this->db->where('soal_id',$id);
        		$this->db->where('jawaban_kode',$i);
				$this->db->update('jawaban_soal',$detail);
			}
		}
		redirect('soal');
		
		
	}
	public function delete($id){
		
		
		$this->db->where('soal_id',$id);
		$this->db->delete('tbl_soal');
		$this->db->where('soal_id',$id);
		$this->db->delete('jawaban_soal');
		//redirect('autosoal');
		
		
	}
	
	
	
}
