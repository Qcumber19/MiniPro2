<?php
class admin extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
        $this->load->model('M_Admin');
    }

    function index()
    {
        $data['mhs'] = $this->M_Admin->show_user_mhs()->result();
        $data['dosen'] = $this->M_Admin->show_user_dosen()->result();
        $data['admin'] = $this->M_Admin->show_user_admin()->result();
    	$this->load->view('admin/index', $data);
    }
/*--------------------KARTU HASIL STUDI--------------------*/
function KHSTableview(){
    $data['user'] = $this->M_Admin->show_khstable()->result();
    $this->load->view('admin/admin_dosen/KHSView', $data);
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
                redirect('admin/KHSTableView');
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
                redirect('admin/KHSTableView');
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
                redirect('admin/KHSTableView');
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
                redirect('admin/KHSTableView');
            }       
    }

    public function KHSDel($id){
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('admin/KHSTableView');
        }else{
            $this->db->where('id', $id);
            $this->db->delete('data_khs');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('admin/KHSTableView');
        }
    }

/*-------------------------------SERTFIKAT KOMPETENSI--------------------------------*/
function SerKomTableview(){
    $data['user'] = $this->M_Admin->show_serkomtable()->result();
    $this->load->view('admin/admin_dosen/SerKomView', $data);
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
                redirect('admin/SerKomTableView');
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
                redirect('admin/SerKomTableView');
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
                redirect('admin/KHSTableView');
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
                redirect('admin/SerKomTableView');
            }       
    }

    public function SerKomDel($id){
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('admin/SerKomTableView');
        }else{
            $this->db->where('id', $id);
            $this->db->delete('data_serkom');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('admin/SerKomTableView');
        }
    }

/*------------------------------EDIT USER-----------------------------*/

    function edituser(){
        $data['mhs'] = $this->M_Admin->show_user_mhs()->result();
        $data['dosen'] = $this->M_Admin->show_user_dosen()->result();
        $data['admin'] = $this->M_Admin->show_user_admin()->result();
        $this->load->helper('form');
        $this->form_validation->set_rules('id','id','required');
        $this->form_validation->set_rules('unique_id','unique_id','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        
        if($this->form_validation->run()==FALSE) {
            redirect('admin/index', $data);
        }else{
            $this->M_Admin->edituser();
            redirect('admin/index', $data);
        }
    }
    


/*-----------------------DATA INDUK-------------------------*/
    function DataIndukView()
    {
    	$data['user'] = $this->M_Admin->show_dataindukmhs()->result();
    	$this->load->view('admin/admin_mahasiswa/DataIndukView', $data);
    }

       public function DataIndukInsert(){
            $this->form_validation->set_rules('nim','nim','required');
            $this->form_validation->set_rules('nama','nama','required');
            
            $config['upload_path']      = './upload/DataIndukMhs';
            $config['allowed_types']    = 'jpg';
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
                redirect('admin/DataIndukView');
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
                redirect('admin/DataIndukView');
            }       
        }

    public function DataIndukEdit(){
        $this->form_validation->set_rules('nim','nim','required');
            $this->form_validation->set_rules('nama','nama','required');
            
            $config['upload_path']      = './upload/DataIndukMhs/';
            $config['allowed_types']    = 'jpg';
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
                $this->session->set_flashdata('error',"Data Gagal Di Update");
                redirect('admin/DataIndukView');
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

                $this->db->where('id',$_POST['id']);
                $this->db->update('data_induk',$data);
                $this->session->set_flashdata('sukses','Data Berhasil Di Update');
                redirect('admin/DataIndukView');
            }
    }

    public function DataIndukDel($id){
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('admin/DataIndukView');
        }else{
            $this->db->where('id', $id);
            $this->db->delete('data_induk');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('admin/DataIndukView');
        }
    }


/*-----------------------ADD USER-------------------------*/
    function AddAdminView(){
        $this->load->view('admin/add user/addadmin');
    }

    function AddDosenView(){
        $this->load->view('admin/add user/adddosen');
    }

    function AddMhsView(){
        $this->load->view('admin/add user/addmhs');
    }

    function AddAdmin(){
        $data['mhs'] = $this->M_Admin->show_user_mhs()->result();
        $data['dosen'] = $this->M_Admin->show_user_dosen()->result();
        $data['admin'] = $this->M_Admin->show_user_admin()->result();
        $this->load->helper('form');         
        $this->load->library('form_validation');                     
        $this->form_validation->set_rules('username', 'username', 'required');         
        $this->form_validation->set_rules('fname', 'fname', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        
        if ($this->form_validation->run() === FALSE){                        
            $this->load->view('admin/add user/addadmin');                        
        }else{             
            $this->M_Admin->MAddAdmin();                          
            redirect('admin/index', $data);                             
        }  
    }
    function AddDosen(){
        $data['mhs'] = $this->M_Admin->show_user_mhs()->result();
        $data['dosen'] = $this->M_Admin->show_user_dosen()->result();
        $data['admin'] = $this->M_Admin->show_user_admin()->result();
        $this->load->helper('form');         
        $this->load->library('form_validation');                    
        $this->form_validation->set_rules('username', 'username', 'required');         
        $this->form_validation->set_rules('fname', 'fname', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        
        if ($this->form_validation->run() === FALSE){                        
            $this->load->view('admin/add user/adddosen');                        
        }else{             
            $this->M_Admin->MAddDosen();                          
            redirect('admin/index', $data);                              
        }  
    }

    function AddMhs(){
        $data['mhs'] = $this->M_Admin->show_user_mhs()->result();
        $data['dosen'] = $this->M_Admin->show_user_dosen()->result();
        $data['admin'] = $this->M_Admin->show_user_admin()->result();
        $this->load->helper('form');         
        $this->load->library('form_validation');                      
        $this->form_validation->set_rules('username', 'username', 'required');         
        $this->form_validation->set_rules('fname', 'fname', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        
        if ($this->form_validation->run() === FALSE){                        
            $this->load->view('admin/add user/addmhs');                        
        }else{             
            $this->M_Admin->MAddMhs();                          
            redirect('admin/index', $data);                              
        }  
    }

/*----------------Kelulusan--------------------*/
    function FormLulusView()
    {
        $data['user'] = $this->M_Admin->show_formlulus()->result();
        $this->load->view('admin/admin_mahasiswa/FormLulusView', $data);
    }

       function FormLulusInsert(){
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

                $insert = $this->db->insert('data_kelulusan',$data);
                $this->session->set_flashdata('sukses','Data Berhasil Di Tambahkan');
                redirect('admin/FormLulusView');
            }       
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
                redirect('admin/FormLulusView');
            }
    }

        public function FormLulusDel($id){
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('admin/FormLulusView');
        }else{
            $this->db->where('id', $id);
            $this->db->delete('data_kelulusan');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('admin/FormLulusView');
        }
    }

/*-----------------------------------KRS----------------------------------------*/
    function krs_view(){
        $data['mahasiswa'] = $this->M_Admin->show_krs_mhs()->result();
        $data['matkul'] = $this->M_Admin->semester();
        $this->load->view('admin/krs/krs', $data);
    }

    public function krs_edit_view($id_krs)
    {
        $data['mahasiswa'] = $this->M_Admin->show_krs_mhs()->result();
        $data['matkul'] = $this->M_Admin->semester();
        $data['krs'] = $this->M_Admin->find($id_krs);
        $this->load->view('admin/krs/krs_edit', $data);
    }

    function krs_table_view(){
        $data['krs'] = $this->M_Admin->show_krs()->result();
        $this->load->view('admin/krs/krs_table', $data);
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
            $this->load->view('admin/krs/krs', $data);
        }else{
            $this->db->insert('data_krs',$data);
            $this->session->set_flashdata('sukses','Data Berhasil Di Tambahkan');
            redirect('admin/krs_view');
        }

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
            redirect('admin/krs_edit_view');
            
        } else {
            $this->M_Admin->update($data, $id_krs);
            $this->session->set_flashdata('sukses','Data Berhasil Di Update');
            redirect('admin/krs_table_view');
        }        
    }

    public function krs_del($id){
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('admin/krs_table_view');
        }else{
            $this->db->where('id_krs', $id);
            $this->db->delete('data_krs');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('admin/krs_table_view');
        }
    }


/*------------------------------KRS_Mahasiswa----------------------------------*/
    function krs_mahasiswa_view(){
        $data['mahasiswa'] = $this->M_Admin->show_krs_mhs()->result();
        $this->load->view('admin/krs/krs_mahasiswa', $data);
    }

    public function krs_mahasiswa_add(){
            $this->form_validation->set_rules('nim','nim','required');
            $this->form_validation->set_rules('nama','nama','required');
            $this->form_validation->set_rules('semester','semester','required');
            $this->form_validation->set_rules('jurusan','jurusan','required');

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
                redirect('admin/krs_mahasiswa_view');
            }else{
                $data = array(
                    'nim' => $this->input_->post('nim',TRUE), 
                    'nama' => $this->input_->post('nama',TRUE), 
                    'semester' => $this->input_->post('semester',TRUE),
                    'jurusan' => $this->input_->post('jurusan',TRUE)
                    );

                $insert = $this->db->insert('data_mahasiswa',$data);
                $this->session->set_flashdata('sukses','Data Berhasil Di Tambahkan');
                redirect('admin/krs_mahasiswa_view');
            }       
    }

    public function krs_mahasiswa_edit(){
            $this->form_validation->set_rules('nim','nim','required');
            $this->form_validation->set_rules('nama','nama','required');
            $this->form_validation->set_rules('semester','semester','required');
            $this->form_validation->set_rules('jurusan','jurusan','required');

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
                redirect('admin/krs_mahasiswa_view');
            }else{
                $data = array(
                    'nim' => $this->input_->post('nim',TRUE), 
                    'nama' => $this->input_->post('nama',TRUE), 
                    'semester' => $this->input_->post('semester',TRUE),
                    'jurusan' => $this->input_->post('jurusan',TRUE)
                    );

                $this->db->where('id_mahasiswa',$_POST['id_mahasiswa']);
                $this->db->update('data_mahasiswa',$data);
                $this->session->set_flashdata('sukses','Data Berhasil Di Update');
                redirect('admin/krs_mahasiswa_view');
            }
    }

        public function krs_mahasiswa_del($id){
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('admin/krs_mahasiswa_view');
        }else{
            $this->db->where('id_mahasiswa', $id);
            $this->db->delete('data_mahasiswa');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('admin/krs_mahasiswa_view');
        }
    }

/*-----------------------------KRS_Matakuliah---------------------------------*/
    function krs_matakuliah_view(){
        $data['matkul'] = $this->M_Admin->show_krs_matkul()->result();
        $this->load->view('admin/krs/krs_matakuliah', $data);
    }

    public function krs_matakuliah_add(){
            $this->form_validation->set_rules('kode_matkul','kode_matkul','required');
            $this->form_validation->set_rules('nama_matkul','nama_matkul','required');
            $this->form_validation->set_rules('jurusan','jurusan','required');
            $this->form_validation->set_rules('semester','semester','required');
            $this->form_validation->set_rules('sks','sks','required');

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
                redirect('admin/krs_matakuliah_view');
            }else{
                $data = array(
                    'kode_matkul' => $this->input_->post('kode_matkul',TRUE), 
                    'nama_matkul' => $this->input_->post('nama_matkul',TRUE), 
                    'jurusan' => $this->input_->post('jurusan',TRUE),
                    'semester' => $this->input_->post('semester',TRUE),
                    'sks' => $this->input_->post('sks',TRUE)
                    );

                $insert = $this->db->insert('data_matkul',$data);
                $this->session->set_flashdata('sukses','Data Berhasil Di Tambahkan');
                redirect('admin/krs_matakuliah_view');
            }       
    }

    public function krs_matakuliah_edit(){
            $this->form_validation->set_rules('kode_matkul','kode_matkul','required');
            $this->form_validation->set_rules('nama_matkul','nama_matkul','required');
            $this->form_validation->set_rules('jurusan','jurusan','required');
            $this->form_validation->set_rules('semester','semester','required');
            $this->form_validation->set_rules('sks','sks','required');

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
                redirect('admin/krs_matakuliah_view');
            }else{
                $data = array(
                    'kode_matkul' => $this->input_->post('kode_matkul',TRUE), 
                    'nama_matkul' => $this->input_->post('nama_matkul',TRUE), 
                    'jurusan' => $this->input_->post('jurusan',TRUE),
                    'semester' => $this->input_->post('semester',TRUE),
                    'sks' => $this->input_->post('sks',TRUE)
                    );

                $this->db->where('id_matkul',$_POST['id_matkul']);
                $this->db->update('data_matkul',$data);
                $this->session->set_flashdata('sukses','Data Berhasil Di Update');
                redirect('admin/krs_matakuliah_view');
            }
    }

        public function krs_matakuliah_del($id){
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('admin/krs_matakuliah_view');
        }else{
            $this->db->where('id_matkul', $id);
            $this->db->delete('data_matkul');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('admin/krs_matakuliah_view');
        }
    }
}