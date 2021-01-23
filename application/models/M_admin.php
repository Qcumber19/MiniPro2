<?php
class M_Admin extends CI_Model{


/*---------------------------DATA INDUK------------------------*/
	function show_dataindukmhs(){
		return $this->db->get('data_induk');
	}
/*---------------------------TABLE VIEW-----------------------*/
	function show_khstable(){
        return $this->db->get('data_khs');
    }

    function show_serkomtable(){
        return $this->db->get('data_serkom');
    }
/*---------------------------KELULUSAN------------------------*/
	function show_formlulus(){
		return $this->db->get('data_kelulusan');
	}
/*---------------------------ADD USER------------------------*/
	function show_user_mhs(){
		return $this->db->get_where('user', array('level'=>'2'));
	}

	function show_user_dosen(){
		return $this->db->get_where('user', array('level'=>'3'));
	}

	function show_user_admin(){
		return $this->db->get_where('user', array('level'=>'1'));
	}

	function MAddAdmin($username = 0){
		$this->load->helper('url');
		$cek = url_title($this->input_->post('username'), 'dash', TRUE);
		$data = array(
			'unique_id' => $this->input_->post('username'), 
			'username' => $this->input_->post('fname'), 
			'password' => md5($this->input_->post('password')),
			'level' => 1
		);
		if ($username == 0){
			return $this->db->insert('user', $data);
		} else {
			$url=base_url('');
            echo $this->session->set_flashdata('msg','Username sudah ada');
            redirect($url);
		}
	}

	function MAddDosen($username = 0){
		$this->load->helper('url');
		$cek = url_title($this->input_->post('username'), 'dash', TRUE);
		$data = array(
			'unique_id' => $this->input_->post('username'), 
			'username' => $this->input_->post('fname'), 
			'password' => md5($this->input_->post('password')),
			'level' => 3
		);
		if ($username == 0){
			return $this->db->insert('user', $data);
		} else {
			$url=base_url('');
            echo $this->session->set_flashdata('msg','Username sudah ada');
            redirect($url);
		}
	}

	function MAddMhs($username = 0){
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

/*--------------------EDIT USER----------------*/
	function edituser(){
            $data = array(
                'unique_id'=> $this->input_->post('unique_id'),
                'username'=> $this->input_->post('username'),
                'password'=> md5($this->input_->post('password'))
            );
            $this->db->where('id', $_POST['id']);
            $this->db->update('user', $data);
    }
/*---------------------------KRS--------------------------------*/
	function show_krs_matkul(){
		return $this->db->get('data_matkul');
	}

	function show_krs_mhs(){
		return $this->db->get('data_mahasiswa');
	}

	function show_krs(){
		return $this->db->get('data_krs');
	}

	public function nama($semester)
    {
        return $this->db
                    ->where('semester', $semester)
                    ->select('kode_matkul, nama_matkul, jurusan, semester, sks')
                    ->get('data_matkul')
                    ->result();
    }
    public function semester()
    {
        return $this->db
                    ->select('semester')
                    ->order_by('semester')
                    ->group_by('semester')
                    ->get('data_matkul')
                    ->result();
    }

    public function find($id_krs){
        $sql = "SELECT * FROM data_krs WHERE id_krs = ? ";
        $query = $this->db->query($sql, $id_krs);
        if ($query->num_rows() > 0) {
          $result = $query->row_array();
            return $result;
        } else {
            return array();
        }
    }

    public function update($data, $id_krs){
        return $this->db
                     ->where('id_krs',$id_krs)
                     ->update('data_krs', $data);
    }
}