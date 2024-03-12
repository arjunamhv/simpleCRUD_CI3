<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }
    public function index() {
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('notelp', 'Nomor Telepon', 'required|numeric');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
        }
    }
    public function ubah($nim) {
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaByNim($nim);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('notelp', 'Nomor Telepon', 'required|numeric');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('mahasiswa');
        }
    
    }
    public function hapus($nim) {
        $this->Mahasiswa_model->hapusDataMahasiswa($nim);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }
    public function detail($nim) {
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaByNim($nim);
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }
}
