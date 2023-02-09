<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Nilai";
        $data['nilai'] = $this->Nilai_model->get();
        $this->load->view("layout/header");
        $this->load->view("nilai/vw_nilai", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Nilai";
        $this->load->view("layout/header");
        $this->load->view("nilai/vw_tambah_nilai", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Nilai";
        $data['nilai'] = $this->Nilai_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("nilai/vw_detail_nilai", $data);
        $this->load->view("layout/footer");
    }
    function hapus($id)
    {
        $data['nilai'] = $this->Nilai_model->delete($id);
        $data['nilai'] = $this->Nilai_model->get();
        $data['judul'] = "Halaman Nilai";
        $this->load->view("layout/header");
        $this->load->view("nilai/vw_nilai", $data);
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
        $this->Nilai_model->insert($data);
        redirect('Nilai');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Nilai";
        $data['nilai'] = $this->Nilai_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("nilai/vw_ubah_nilai", $data);
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
        $this->Nilai_model->update(['id' => $id], $data);
        redirect('Nilai');
    }
}