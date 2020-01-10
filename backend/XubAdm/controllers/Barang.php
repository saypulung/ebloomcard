<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$data_login = $this->session->userdata('get_login');
		if($data_login!=='' && $data_login!==TRUE){
			redirect('dashboard/login');
		}
	}
	public function index($jadwal_id)
	{
		
		$sender['content']='barang/home_barang';
		$sender['menu_aktif']='jadwal';
		$sender['data_barang'] = $this->db->get('tbl_barang')->result();
		$this->load->view('layout/template',$sender);
	}
	public function add($jadwal_id){
		$sender['content']='barang/form_barang';
		$sender['menu_aktif']='jadwal';
		$sender['mode'] = 'tambah';
		$sender['jadwal_id']=$jadwal_id;
		$this->load->view('layout/template',$sender);
	}
	public function edit($id){
		$sender['content']='barang/form_barang';
		$sender['menu_aktif']='jadwal';
		$sender['mode'] = 'edit';
		$sender['data_edit'] = $this->db->get_where('tbl_barang',array('barang_id'=>$id))->row_array();
		$sender['barang_id']=$sender['data_edit']['barang_id'];
		$sender['jadwal_id']=$sender['data_edit']['jadwal_id'];;
		$this->load->view('layout/template',$sender);
	}
	
	private function __set_upload_options($value)
	{   
	    $fn = $this->upload->remove_extension($value);
	    $config = array();
	    $config['file_name']=url_title($fn.time(),'-',TRUE);
	    $config['upload_path'] = UPLOAD_PATH. DS. 'Images' . DS . 'Barang' . DS ;
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size']      = '0';
	    $config['overwrite']     = FALSE;
	    return $config;
	}
	
	public function save(){
		$mode = $this->input->post('mode');
		$ins['jadwal_id'] = $this->input->post('jadwal_id');
		$ins['nama_barang'] = $this->input->post('nama_barang');
		$ins['sertifikat'] = $this->input->post('sertifikat');
		$ins['keterangan_barang'] = $this->input->post('keterangan_barang');

		if(isset($_FILES['gambar']) && count($_FILES['gambar']) > 0){
    		$this->upload->initialize($this->__set_upload_options($_FILES['gambar']['name']));
    		if($this->upload->do_upload('gambar')==TRUE){
    			$filename = $this->upload->data('file_name');
    			$ins['gambar_barang']=$filename;
    			if($mode=='edit'){
					$id = $this->input->post('barang_id');
					$a = $this->db->get_where('tbl_barang',array('barang_id'=>$id))->row();
					@unlink(UPLOAD_PATH.DS.'Images'.DS.'Barang'.DS.$a->gambar_barang);
    			}
    		}
    	}
        if($mode=='tambah'){
        	$this->db->insert('tbl_barang',$ins);
		}else
		if($mode == 'edit'){
			$id = $this->input->post('barang_id');
			$this->db->where('barang_id',$id);
			$this->db->update('tbl_barang',$ins);

		}
		redirect('barang/list/'.$ins['jadwal_id']);
		
		
	}
	public function delete($id){
		$a = $this->db->get_where('tbl_barang',array('barang_id'=>$id))->row();
		@unlink(UPLOAD_PATH.DS.'Images'.DS.'Barang'.DS.$a->gambar_barang);
		
		$this->db->where('barang_id',$id);
		$this->db->delete('tbl_barang');
		//redirect('autobus');
		
		
	}
	
	
	
}
