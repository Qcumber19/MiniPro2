<?php
class dosen extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
        $this->load->model('M_Dosen');
    }

    function index()
    {
    	$this->load->view('dosen/index');
    }
/*--------------------KARTU HASIL STUDI--------------------*/
function KHSTableview(){
    $data['user'] = $this->M_Dosen->show_khstable()->result();
    $this->load->view('dosen/DataMahasiswaView/KHSView', $data);
}

function KHSInsert()
    {
        $this->form_validation->set_rules('nim','nim','required');
            $this->form_validation->set_rules('nama','nama','required');
            
            $config['upload_path']      = './upload/KHS/';
            $config['allowed_types']    = 'jpg|jpeg';
            $config['max_size']         = 5048;
            $config['encrypt_name']     = TRUE;
            
            $this->load->library('upload',$config);

            if (!empty($_FILES['khs'])) {
                $this->upload->do_upload('khs');
                $data6 = $this->upload->data();
                $khs = $data6['file_name'];
            }

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
                redirect('dosen/KHSTableView');
            }else{
                $nim  = $this->input->post('nim',TRUE);
                $nama = $this->input->post('nama',TRUE);
                $data = array(
                    'nim'=>$nim, 
                    'nama'=>$nama, 
                    'khs'=>$khs, 
                    );

                $insert = $this->db->insert('data_khs',$data);
                $this->session->set_flashdata('sukses','Data Berhasil Di Tambahkan');
                redirect('dosen/KHSTableView');
            }       
    }

    function KHSEdit()
    {
        $this->form_validation->set_rules('nim','nim','required');
            $this->form_validation->set_rules('nama','nama','required');
            
            $config['upload_path']      = './upload/KHS/';
            $config['allowed_types']    = 'jpg|jpeg';
            $config['max_size']         = 5048;
            $config['encrypt_name']     = TRUE;
            
            $this->load->library('upload',$config);

            if (!empty($_FILES['khs'])) {
                $this->upload->do_upload('khs');
                $data6 = $this->upload->data();
                $khs = $data6['file_name'];
            }

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
                redirect('dosen/KHSTableView');
            }else{
                $nim  = $this->input->post('nim',TRUE);
                $nama = $this->input->post('nama',TRUE);
                $data = array(
                    'nim'=>$nim, 
                    'nama'=>$nama, 
                    'khs'=>$khs, 
                    );
                $this->db->where('id',$_POST['id']);
                $insert = $this->db->update('data_khs',$data);
                $this->session->set_flashdata('sukses','Data Berhasil Di Tambahkan');
                redirect('dosen/KHSTableView');
            }       
    }

    public function KHSDel($id){
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('dosen/KHSTableView');
        }else{
            $this->db->where('id', $id);
            $this->db->delete('data_khs');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('dosen/KHSTableView');
        }
    }

/*-------------------------------SERTFIKAT KOMPETENSI--------------------------------*/
function SerKomTableview(){
    $data['user'] = $this->M_Dosen->show_serkomtable()->result();
    $this->load->view('dosen/DataMahasiswaView/SerKomView', $data);
}

function SerKomInsert()
    {
        $this->form_validation->set_rules('nim','nim','required');
            $this->form_validation->set_rules('nama','nama','required');
            
            $config['upload_path']      = './upload/SerKom/';
            $config['allowed_types']    = 'jpg|jpeg';
            $config['max_size']         = 5048;
            $config['encrypt_name']     = TRUE;
            
            $this->load->library('upload',$config);

            if (!empty($_FILES['serkom'])) {
                $this->upload->do_upload('serkom');
                $data6 = $this->upload->data();
                $serkom = $data6['file_name'];
            }

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
                redirect('dosen/SerKomTableView');
            }else{
                $nim  = $this->input->post('nim',TRUE);
                $nama = $this->input->post('nama',TRUE);
                $data = array(
                    'nim'=>$nim, 
                    'nama'=>$nama, 
                    'serkom'=>$serkom, 
                    );

                $insert = $this->db->insert('data_serkom',$data);
                $this->session->set_flashdata('sukses','Data Berhasil Di Tambahkan');
                redirect('dosen/SerKomTableView');
            }       
    }

    function SerKomEdit()
    {
        $this->form_validation->set_rules('nim','nim','required');
            $this->form_validation->set_rules('nama','nama','required');
            
            $config['upload_path']      = './upload/SerKom/';
            $config['allowed_types']    = 'jpg|jpeg';
            $config['max_size']         = 5048;
            $config['encrypt_name']     = TRUE;
            
            $this->load->library('upload',$config);

            if (!empty($_FILES['serkom'])) {
                $this->upload->do_upload('serkom');
                $data6 = $this->upload->data();
                $serkom = $data6['file_name'];
            }

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
                redirect('dosen/KHSTableView');
            }else{
                $nim  = $this->input->post('nim',TRUE);
                $nama = $this->input->post('nama',TRUE);
                $data = array(
                    'nim'=>$nim, 
                    'nama'=>$nama, 
                    'serkom'=>$serkom, 
                    );
                $this->db->where('id',$_POST['id']);
                $insert = $this->db->update('data_serkom',$data);
                $this->session->set_flashdata('sukses','Data Berhasil Di Tambahkan');
                redirect('dosen/SerKomTableView');
            }       
    }

    public function SerKomDel($id){
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('dosen/SerKomTableView');
        }else{
            $this->db->where('id', $id);
            $this->db->delete('data_serkom');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('dosen/SerKomTableView');
        }
    }
    /*---------------------------------KRS--------------------------*/
    function KRS_View(){
        $data['krs'] = $this->M_Dosen->show_krs()->result();
        $this->load->view('dosen/DataMahasiswaView/KRSView', $data);
    }

    public function krs_edit_view($id_krs)
    {
        $data['mahasiswa'] = $this->M_Dosen->show_krs_mhs()->result();
        $data['matkul'] = $this->M_Dosen->semester();
        $data['krs'] = $this->M_Dosen->find($id_krs);
        $this->load->view('Dosen/DataMahasiswaView/KRSEdit', $data);
    }

    public function krs_edit()
    {   
        $id_krs = $this->input->post('id_krs');
        $data['nama'] = $this->input->post('nama');
        if (null !== $this->input->post('matakuliah[]')) {
            $data['matakuliah'] = implode(',', $this->input->post('matakuliah[]'));
        }
        $data['jurusan'] = $this->input->post('jurusan');
        $data['sks'] = $this->input->post('sks');

        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('matakuliah[]','matakuliah','required');
        $this->form_validation->set_rules('jurusan','jurusan','required');


        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('dosen/krs_edit_view');
            
        } else {
            $this->M_Dosen->update($data, $id_krs);
            $this->session->set_flashdata('sukses','Data Berhasil Di Update');
            redirect('dosen/KRS_View');
        }        
    }

    public function krs_del($id){
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('dosen/KRS_View');
        }else{
            $this->db->where('id_krs', $id);
            $this->db->delete('data_krs');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('dosen/KRS_View');
        }
    }

    /*---------------------------------FORM LULUS-----------------------------------*/
    function FormLulusView()
    {
        $data['user'] = $this->M_Dosen->show_formlulus()->result();
        $this->load->view('Dosen/DataMahasiswaView/FormLulusView', $data);
    }

    public function FormLulusEdit(){
            $this->form_validation->set_rules('nim','nim','required');
            $this->form_validation->set_rules('nama','nama','required');
            
            $config['upload_path']      = './upload/Kelulusan/';
            $config['allowed_types']    = 'jpg';
            $config['max_size']         = 2048;
            $config['encrypt_name']     = TRUE;
            
            $this->load->library('upload',$config);

            if (!empty($_FILES['dokPengajuanSidang'])) {
                $this->upload->do_upload('dokPengajuanSidang');
                $data1 = $this->upload->data();
                $dokPengajuanSidang = $data1['file_name'];
            }

            if (!empty($_FILES['dokKelengkapanSidang'])) {
                $this->upload->do_upload('dokKelengkapanSidang');
                $data2 = $this->upload->data();
                $dokKelengkapanSidang = $data2['file_name'];
            }

            if (!empty($_FILES['yudisium'])) {
                $this->upload->do_upload('yudisium');
                $data3 = $this->upload->data();
                $yudisium = $data3['file_name'];
            }

            if (!empty($_FILES['ijazah'])) {
                $this->upload->do_upload('ijazah');
                $data4 = $this->upload->data();
                $ijazah = $data4['file_name'];
            }

            if (!empty($_FILES['nilai'])) {
                $this->upload->do_upload('nilai');
                $data5 = $this->upload->data();
                $nilai = $data5['file_name'];
            }

            if (!empty($_FILES['skpi'])) {
                $this->upload->do_upload('skpi');
                $data6 = $this->upload->data();
                $skpi = $data6['file_name'];
            }

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
                redirect('admin/FormLulusView');
            }else{
                $nim  = $this->input->post('nim',TRUE);
                $nama = $this->input->post('nama',TRUE);
                $data = array(
                    'nim'=>$nim, 
                    'nama'=>$nama, 
                    'dokPengajuanSidang'=>$dokPengajuanSidang, 
                    'dokKelengkapanSidang'=>$dokKelengkapanSidang, 
                    'yudisium'=>$yudisium, 
                    'ijazah'=>$ijazah, 
                    'nilai'=>$nilai, 
                    'skpi'=>$skpi
                    );

                $this->db->where('id',$_POST['id']);
                $this->db->update('data_kelulusan',$data);
                $this->session->set_flashdata('sukses','Data Berhasil Di Update');
                redirect('dosen/FormLulusView');
            }
    }

        public function FormLulusDel($id){
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('dosen/FormLulusView');
        }else{
            $this->db->where('id', $id);
            $this->db->delete('data_kelulusan');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('dosen/FormLulusView');
        }
    }
}