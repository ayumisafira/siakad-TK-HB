<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Komentar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Komentar_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Komentar";
        $data['komentar'] = $this->Komentar_model->get();
        $this->load->view("layout/header");
        $this->load->view("komentar/vw_komentar", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Komentar";
        $this->load->view("layout/header");
        $this->load->view("komentar/vw_tambah_komentar", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Komentar";
        $data['komentar'] = $this->Komentar_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("komentar/vw_detail_komentar", $data);
        $this->load->view("layout/footer");
    }
    function hapus($id)
    {
        $data['komentar'] = $this->Komentar_model->delete($id);
        $data['komentar'] = $this->Komentar_model->get();
        $data['judul'] = "Halaman Komentar";
        $this->load->view("layout/header");
        $this->load->view("komentar/vw_komentar", $data);
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
        $this->Komentar_model->insert($data);
        redirect('Komentar');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Komentar";
        $data['komentar'] = $this->Komentar_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("komentar/vw_ubah_komentar", $data);
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
        $this->Komentar_model->update(['id' => $id], $data);
        redirect('Komentar');
    }
}