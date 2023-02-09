<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Spp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Spp_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Spp";
        $data['spp'] = $this->Spp_model->get();
        $this->load->view("layout/header");
        $this->load->view("spp/vw_spp", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Spp";
        $this->load->view("layout/header");
        $this->load->view("spp/vw_tambah_spp", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Spp";
        $data['spp'] = $this->Spp_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("spp/vw_detail_spp", $data);
        $this->load->view("layout/footer");
    }
    function hapus($id)
    {
        $data['spp'] = $this->Spp_model->delete($id);
        $data['spp'] = $this->Spp_model->get();
        $data['judul'] = "Halaman Spp";
        $this->load->view("layout/header");
        $this->load->view("spp/vw_spp", $data);
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
        $this->Spp_model->insert($data);
        redirect('Spp');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit SPP";
        $data['spp'] = $this->Spp_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("spp/vw_ubah_spp", $data);
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
        $this->Spp_model->update(['id' => $id], $data);
        redirect('Spp');
    }
}