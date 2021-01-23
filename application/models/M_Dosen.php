<?php
class M_Dosen extends CI_Model
{
	function show_khstable(){
        return $this->db->get('data_khs');
    }

    function show_serkomtable(){
        return $this->db->get('data_serkom');
    }

    function show_tablelulus(){
		return $this->db->get('data_kelulusan');
	}

    function show_formlulus(){
        return $this->db->get('data_kelulusan');
    }

	/*--------------------------------------KRS---------------------------*/
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