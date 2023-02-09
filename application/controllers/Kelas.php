<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Kelas";
        $data['kelas'] = $this->Kelas_model->get();
        $this->load->view("layout/header");
        $this->load->view("kelas/vw_kelas", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Kelas";
        $data['kelas'] = $this->Kelas_model->get();
        $this->load->view("layout/header");
        $this->load->view("kelas/vw_tambah_kelas", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Kelas";
        $data['kelas'] = $this->Kelas_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("kelas/vw_detail_kelas", $data);
        $this->load->view("layout/footer");
    }
    function hapus($id)
    {
        $data['kelas'] = $this->Kelas_model->delete($id);
        $data['kelas'] = $this->Kelas_model->get();
        $data['judul'] = "Halaman Kelas";
        $this->load->view("layout/header");
        $this->load->view("kelas/vw_kelas", $data);
        $this->load->view("layout/footer");
    }

    function upload()
    {
        $data = [
            'nama_kelas' => $this->input->post('nama_kelas'),
            'id_guru' => $this->input->post('id_guru'),
            'id_semester' => $this->input->post('id_semester'),
        ];
        $this->Kelas_model->insert($data);
        redirect('Kelas');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Kelas";
        $data['kelas'] = $this->Kelas_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("kelas/vw_ubah_kelas", $data);
        $this->load->view("layout/footer");
    }

    function update()
    {
        $data = [
            'nama_kelas' => $this->input->post('nama_kelas'),
            'id_guru' => $this->input->post('id_guru'),
            'id_semester' => $this->input->post('id_semester'),
        ];
        $id = $this->input->post('id_kelas');
        $this->Kelas_model->update(['id_kelas' => $id], $data);
        redirect('Kelas');
    }
}