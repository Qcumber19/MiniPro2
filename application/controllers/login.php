<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('M_Admin');
    }
 
    function index(){
        $this->load->view('login_signup/Login');
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek=$this->login_model->auth($username,$password);
 
        if($cek->num_rows() > 0){
                $data=$cek->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses admin
                    $data['mhs'] = $this->M_Admin->show_user_mhs()->result();
                    $data['dosen'] = $this->M_Admin->show_user_dosen()->result();
                    $data['admin'] = $this->M_Admin->show_user_admin()->result();
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['unique_id']);
                    $this->session->set_userdata('ses_nama',$data['username']);
                    $this->load->view('admin/index', $data);
 
                 }elseif($data['level']=='2'){ //akses mhs
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('ses_id',$data['unique_id']);
                    $this->session->set_userdata('ses_nama',$data['username']);
                    $this->load->view('mahasiswa/index');

                 }elseif($data['level']=='3'){ //akses dosen
                    $this->session->set_userdata('akses','3');
                    $this->session->set_userdata('ses_id',$data['unique_id']);
                    $this->session->set_userdata('ses_nama',$data['username']);
                    $this->load->view('dosen/index');

                 }
        }else{
                    $this->session->set_flashdata('error',"Login gagal! Username atau Password");   
                    redirect('login/index');
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

    function register(){
    	$this->load->view('login_signup/Signup');
    }

    function signup(){
    	$this->load->helper('form');         
		$this->load->library('form_validation');           
		$data['title'] = '';           
		$this->form_validation->set_rules('username', 'username', 'required');         
		$this->form_validation->set_rules('fname', 'fname', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		if ($this->form_validation->run() === FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");                        
			redirect('login/register');                      
		}else{             
            $this->session->set_flashdata('sukses','Signup Berhasil');
			$this->login_model->signup();                          
			redirect('login/index');                    			
		}  
    }
}