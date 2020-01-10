<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
	}
	public function encrypt($hash){
		$this->load->library('encrypt');
		echo $this->encrypt->encode($hash,'123');
	}
	public function decrypt(){
		echo $this->encrypt->decode('oyvXk2RQu67nuGrFbzsP6uCJ8vSfTDt2nBX4wzlGE8UPof6VMOVT/b8XHq8J7ePvRLj+DjIeS+DE8nF2QvO0Kw==','123');
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function test(){
		$a = $this->db->get('tbl_siswa');
		print_r($a->list_fields());
	}
	public function do_login()
	{
		if(isset($_POST['login'])){
			$kode = $this->security->xss_clean($this->input->post('kode'));
			$password = $this->input->post('password',TRUE);
			//echo $password;
			$data_user = $this->db->get_where('tbl_siswa',array('no_induk'=>$kode));
			if($data_user->num_rows() > 0){
				$data_login = $data_user->row_array();
				$pwd = trim($data_login['password']);
				$dcd = $pwd;//$this->encrypt->decode($pwd);
				//var_dump($data_login);
				if($password == $dcd){
					$userdata_login = $data_login;
					unset($userdata_login['password']);
					$userdata_login['get_login_siswa']= TRUE ; 
					$this->session->set_userdata($userdata_login);
					$error['error_type']='success';
					$error['error']='Selamat anda berhasil login kedalam sistem!';
					$this->session->set_flashdata('alert',$error['error']);
					redirect('home');
				}else{
					$error['error_type']='danger';

					$error['error']='Maaf, password anda salah. Silakan coba lagi!';
					$this->session->set_flashdata('alert',$error['error']);
				}

			}else{
				$error['error_type']='warning';
				$error['error']='Maaf, username tidak ditemukan dalam sistem kami.';
				$this->session->set_flashdata('alert',$error['error']);
			}
		}
		redirect('home');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
	public function ujian()
	{
		$data_login = $this->session->userdata('get_login_siswa');
		if($data_login!=='' && $data_login!==TRUE){
			redirect(base_url());
		}
		$mode = 'ujian';
		$sess_id = session_id();
		$a = $this->db->get_where('jawaban_siswa',array('session_id'=>$sess_id,'siswa_id'=>$this->session->userdata('siswa_id')))->num_rows();
		if($a>0){
			$mode = 'hasil';
		}
		//$this->db->order_by('soal_id','RANDOM');
		$this->db->order_by('levelsoal','ASC');
		$data['data_soal'] = $this->db->get('tbl_soal')->result();
		$data['tipe']='ujian';
		$data['mode']=$mode;
		$this->load->view('ujian',$data);
	}
	public function submit_ujian(){
		
		$sess_id = session_id();
		//echo $sess_id.'1';
		$siswa_id = $this->session->userdata('siswa_id');
		$benar = 0;
		foreach ($_POST['jawab'] as $key=>$val) {
			
			$jwb['siswa_id']=$siswa_id;
			$jwb['soal_id']=$key;
			$jwb['jawaban_id']=$val;
			$jwb['session_id']=$sess_id;
			$this->db->insert('jawaban_siswa',$jwb);
			echo $sess_id.'2';
			unset($jwb);
			$jawaban = $this->db->get_where('jawaban_soal',array('soal_id'=>$key,'jawaban_id'=>$val))->row();
			if($jawaban->benar=='1'){
				$benar++;
			}
		}
		$jumlah_soal = $this->db->get('tbl_soal')->num_rows();
		if($jumlah_soal>0){
			$nilai = $benar/$jumlah_soal * 100;
			$ins_j['siswa_id']=$siswa_id;
			$ins_j['session_id']=$sess_id;
			$ins_j['nilai']=$nilai;
			$this->db->insert('nilai',$ins_j);
		}
		
		//echo $sess_id.'3';
		redirect(site_url('home/ujian'));
	}
	public function hasil(){

	}
}
