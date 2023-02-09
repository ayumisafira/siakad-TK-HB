<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->get();
        $data['judul'] = "Halaman Mahasiswa";
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_mahasiswa", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Mahasiswa";
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
        $this->load->view("layout/footer");
    }
    function hapus($id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->delete($id);
        $data['mahasiswa'] = $this->Mahasiswa_model->get();
        $data['judul'] = "Halaman Mahasiswa";
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_mahasiswa", $data);
        $this->load->view("layout/footer");
    }

    function upload()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'prodi' => $this->input->post('prodi'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
        ];
        $this->Mahasiswa_model->insert($data);
        redirect('Mahasiswa');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
        $this->load->view("layout/footer");
    }

    function update()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'prodi' => $this->input->post('prodi'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
        ];
        $id = $this->input->post('id');
        $this->Mahasiswa_model->update(['id' => $id], $data);
        redirect('Mahasiswa');
    }
}