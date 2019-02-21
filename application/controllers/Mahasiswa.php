<?php
class Mahasiswa extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['judul']='Halaman Mahasiswa';
        $data['mahasiswa']=$this->Mahasiswa_model->getAllMahasiswa();
        if ($this->input->post('keyword')){
            $data['mahasiswa']=$this->Mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nrp','NRP','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run() == FALSE){
            $data['judul']='Tambah Mahasiswa';
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        }else {
            var_dump($this->Mahasiswa_model->tambahDataMahasiswa());
            die();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('mahasiswa');
        }
    }

    public function hapus($id){
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect('mahasiswa');
    }

    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/detail',$data);
        $this->load->view('templates/footer');
    }

    public function ubah($id){
        $data['judul']='Form Ubah';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Pangan','Teknik Mesin'];
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nrp','NRP','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/ubah',$data);
            $this->load->view('templates/footer');
        }else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            $this->session->set_flashdata('flash','diubah');
            redirect('mahasiswa');
        }
    }
}