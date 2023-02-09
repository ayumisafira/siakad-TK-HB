<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Kegiatan";
        $data['kegiatan'] = $this->Kegiatan_model->get();
        $this->load->view("layout/header");
        $this->load->view("kegiatan/vw_kegiatan", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Kegiatan";
        $this->load->view("layout/header");
        $this->load->view("kegiatan/vw_tambah_kegiatan", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Kegiatan";
        $data['kegiatan'] = $this->Kegiatan_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("kegiatan/vw_detail_kegiatan", $data);
        $this->load->view("layout/footer");
    }
    function hapus($id)
    {
        $data['kegiatan'] = $this->Kegiatan_model->delete($id);
        $data['kegiatan'] = $this->Kegiatan_model->get();
        $data['judul'] = "Halaman Kegiatan";
        $this->load->view("layout/header");
        $this->load->view("kegiatan/vw_kegiatan", $data);
        $this->load->view("layout/footer");
    }

    function upload()
    {
        $data = [
            'kegiatan' => $this->input->post('kegiatan'),
            'pengeluaran' => $this->input->post('pengeluaran'),
        ];
        $this->Kegiatan_model->insert($data);
        redirect('Kegiatan');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Kegiatan";
        $data['kegiatan'] = $this->Kegiatan_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("kegiatan/vw_ubah_kegiatan", $data);
        $this->load->view("layout/footer");
    }

    function update()
    {
        $data = [
            'kegiatan' => $this->input->post('kegiatan'),
            'pengeluaran' => $this->input->post('pengeluaran'),
        ];
        $id = $this->input->post('id_kegiatan');
        $this->Kegiatan_model->update(['id_kegiatan' => $id], $data);
        redirect('Kegiatan');
    }
}