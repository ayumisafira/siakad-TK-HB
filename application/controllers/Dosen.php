<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Dosen";
        $data['dosen'] = $this->Dosen_model->get();
        $data['judul'] = "Halaman Dosen";
        $data['judul'] = "Halaman Dosen";
        $this->load->view("layout/header");
        $this->load->view("dosen/vw_dosen", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Dosen";
        $this->load->view("layout/header");
        $this->load->view("dosen/vw_tambah_dosen", $data);
        $this->load->view("layout/footer");
    }
    function hapus($id)
    {
        $data['dosen'] = $this->Dosen_model->delete($id);
        $data['dosen'] = $this->Dosen_model->get();
        $data['judul'] = "Halaman Dosen";
        $this->load->view("layout/header");
        $this->load->view("dosen/vw_dosen", $data);
        $this->load->view("layout/footer");
    }
    function upload()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nip' => $this->input->post('nip'),
            'inisial' => $this->input->post('inisial'),
            'prodi' => $this->input->post('prodi'),
            'email' => $this->input->post('email'),
            'kompetensi' => $this->input->post('kompetensi'),
        ];
        $this->Dosen_model->insert($data);
        redirect('Dosen');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Dosen";
        $data['dosen'] = $this->Dosen_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("dosen/vw_ubah_dosen", $data);
        $this->load->view("layout/footer");
    }

    function update()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nip' => $this->input->post('nip'),
            'inisial' => $this->input->post('inisial'),
            'prodi' => $this->input->post('prodi'),
            'email' => $this->input->post('email'),
            'kompetensi' => $this->input->post('kompetensi'),
        ];
        $id = $this->input->post('id');
        $this->Dosen_model->update(['id' => $id], $data);
        redirect('Dosen');
    }
}