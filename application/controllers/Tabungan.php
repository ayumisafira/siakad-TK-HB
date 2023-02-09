<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tabungan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabungan_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Tabungan";
        $data['tabungan'] = $this->Tabungan_model->get();
        $this->load->view("layout/header");
        $this->load->view("tabungan/vw_tabungan", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Tabungan";
        $this->load->view("layout/header");
        $this->load->view("tabungan/vw_tambah_tabungan", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Tabungan";
        $data['tabungan'] = $this->Tabungan_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("tabungan/vw_detail_tabungan", $data);
        $this->load->view("layout/footer");
    }
    function hapus($id)
    {
        $data['tabungan'] = $this->Tabungan_model->delete($id);
        $data['tabungan'] = $this->Tabungan_model->get();
        $data['judul'] = "Halaman Tabungan";
        $this->load->view("layout/header");
        $this->load->view("tabungan/vw_tabungan", $data);
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
        $this->Tabungan_model->insert($data);
        redirect('Tabungan');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Tabungan";
        $data['tabungan'] = $this->Tabungan_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("tabungan/vw_ubah_tabungan", $data);
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
        $this->Tabungan_model->update(['id' => $id], $data);
        redirect('Tabungan');
    }
}