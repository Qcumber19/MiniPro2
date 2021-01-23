<?php
class mahasiswa extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
        $this->load->model('m_mahasiswa');
    }

    function index()
    {
    	$this->load->view('mahasiswa/index');
        $this->load->model('m_mahasiswa');
    }

/*------------------------DATA INDUK---------------------------*/
    function DataIndukView()
    {
    	$this->load->view('mahasiswa/Dokumen Mahasiswa/DataInduk');
    }

    public function DataIndukInsert(){
            $this->form_validation->set_rules('nim','nim','required');
            $this->form_validation->set_rules('nama','nama','required');
            
            $config['upload_path']      = './upload/DataIndukMhs';
            $config['allowed_types']    = 'jpg|png|pdf';
            $config['max_size']         = 2048;
            $config['encrypt_name']     = TRUE;
            
            $this->load->library('upload',$config);

            if (!empty($_FILES['ktp'])) {
                $this->upload->do_upload('ktp');
                $data1 = $this->upload->data();
                $ktp = $data1['file_name'];
            }

            if (!empty($_FILES['kk'])) {
                $this->upload->do_upload('kk');
                $data2 = $this->upload->data();
                $kk = $data2['file_name'];
            }

            if (!empty($_FILES['foto'])) {
                $this->upload->do_upload('foto');
                $data3 = $this->upload->data();
                $foto = $data3['file_name'];
            }

            if (!empty($_FILES['ijazah'])) {
                $this->upload->do_upload('ijazah');
                $data4 = $this->upload->data();
                $ijazah = $data4['file_name'];
            }

            if (!empty($_FILES['formdaftar'])) {
                $this->upload->do_upload('formdaftar');
                $data5 = $this->upload->data();
                $formdaftar = $data5['file_name'];
            }

            if (!empty($_FILES['pmb'])) {
                $this->upload->do_upload('pmb');
                $data6 = $this->upload->data();
                $pmb = $data6['file_name'];
            }

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
                redirect('mahasiswa/DataIndukView');
            }else{
                $nim  = $this->input->post('nim',TRUE);
                $nama = $this->input->post('nama',TRUE);
                $data = array(
                    'nim'=>$nim, 
                    'nama'=>$nama, 
                    'ktp'=>$ktp, 
                    'kk'=>$kk, 
                    'foto'=>$foto, 
                    'ijazah'=>$ijazah, 
                    'formdaftar'=>$formdaftar, 
                    'pmb'=>$pmb
                    );

                $insert = $this->db->insert('data_induk',$data);
                $this->session->set_flashdata('sukses','Data Berhasil Di Tambahkan');
                redirect('mahasiswa/DataIndukView');
            }       
        }

    
/*---------------------------------------------DATA MAHASISWA------------------------------------------------------------*/

function KHSview(){
    $data['user'] = $this->m_mahasiswa->show_khstable()->result();
    $this->load->view('mahasiswa/Dokumen Mahasiswa/KHS', $data);
}

function SerKomview(){
    $data['user'] = $this->m_mahasiswa->show_serkomtable()->result();
    $this->load->view('mahasiswa/Dokumen Mahasiswa/SerKom', $data);
}

/*--------------------------KELULUSAN--------------------------------*/
function FormLulusView(){
    $this->load->view('mahasiswa/Kelulusan/FormLulus');
}

function FormLulusInsert(){
            $this->form_validation->set_rules('nim','nim','required');
            $this->form_validation->set_rules('nama','nama','required');
            
            $config['upload_path']      = './upload/DataIndukMhs';
            $config['allowed_types']    = 'jpg|png|pdf';
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
                redirect('mahasiswa/FormLulusView');
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

                $insert = $this->db->insert('data_kelulusan',$data);
                $this->session->set_flashdata('sukses','Data Berhasil Di Tambahkan');
                redirect('mahasiswa/FormLulusView');
            }       
        }
/*-----------------------------------KRS---------------------------------*/

    function KRSview(){
        $data['mahasiswa'] = $this->m_mahasiswa->show_krs_mhs()->result();
        $data['matkul'] = $this->m_mahasiswa->semester();
        $this->load->view('mahasiswa/Dokumen Mahasiswa/KRS', $data);
    }

    function KRS_table_view(){
        $data['krs'] = $this->m_mahasiswa->show_krs()->result();
        $this->load->view('mahasiswa/Dokumen Mahasiswa/KRS_Table', $data);
    }

    public function krs_add(){
        $data['nama'] = $this->input->post('nama');
        $data['matakuliah'] = implode(',', $this->input->post('matakuliah[]'));
        $data['jurusan'] = $this->input->post('jurusan');
        $data['sks'] = $this->input->post('sks');

        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('matakuliah[]','matakuliah','required');
        $this->form_validation->set_rules('jurusan','jurusan','required');
    
        if ($this->form_validation->run() == FALSE) {
            $data['mahasiswa'] = $this->M_Admin->show_krs_mhs()->result();
            $data['matkul'] = $this->M_Admin->semester();   

            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            $this->load->view('mahasiswa/Dokumen Mahasiswa/KRS', $data);
        }else{
            $this->db->insert('data_krs',$data);
            $this->session->set_flashdata('sukses','Data Berhasil Di Tambahkan');
            redirect('mahasiswa/KRS_table_view');
        }

    }

    function krs_print($id_krs){
        $data['krs'] = $this->m_mahasiswa->krs_print($id_krs);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->filename = "KRS_.pdf";
        $this->pdf->load_view('mahasiswa/Dokumen Mahasiswa/KRS_PDF', $data);
    }

}