<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Presensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Presensi_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Presensi";
        $data['presensi'] = $this->Presensi_model->get();
        $this->load->view("layout/header");
        $this->load->view("presensi/vw_presensi", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Presensi";
        $this->load->view("layout/header");
        $this->load->view("presensi/vw_tambah_presensi", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Presensi";
        $data['presensi'] = $this->Presensi_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("presensi/vw_detail_presensi", $data);
        $this->load->view("layout/footer");
    }
    function hapus($id)
    {
        $data['presensi'] = $this->Presensi_model->delete($id);
        $data['presensi'] = $this->Presensi_model->get();
        $data['judul'] = "Halaman Presensi";
        $this->load->view("layout/header");
        $this->load->view("presensi/vw_presensi", $data);
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
        $this->Presensi_model->insert($data);
        redirect('Presensi');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Presensi";
        $data['presensi'] = $this->Presensi_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("presensi/vw_ubah_presensi", $data);
        $this->load->view("layout/footer");
    }

    function update()
    {
        $data = [
            'nis' => $this->input->post('nis'),
            'hari' => $this->input->post('hari'),
            'tanggal' => $this->input->post('tanggal'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $id = $this->input->post('id_presensi');
        $this->Presensi_model->update(['id_presensi' => $id], $data);
        redirect('Presensi');
    }
}