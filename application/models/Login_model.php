<?php
class Login_model extends CI_Model{
    //cek nip dan password dosen
    function auth($username,$password){
        $query=$this->db->query("SELECT * FROM user WHERE unique_id='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
    function signup($username = 0){
		$this->load->helper('url');
		$cek = url_title($this->input_->post('username'), 'dash', TRUE);
		$data = array(
			'unique_id' => $this->input_->post('username'), 
			'username' => $this->input_->post('fname'), 
			'password' => md5($this->input_->post('password')),
			'level' => 2
		);
		if ($username == 0){
			return $this->db->insert('user', $data);
		} else {
			$url=base_url('');
            echo $this->session->set_flashdata('msg','Username sudah ada');
            redirect($url);
		}
	}
}