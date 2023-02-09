<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Siswa";
        $data['siswa'] = $this->Siswa_model->get();
        $this->load->view("layout/header");
        $this->load->view("siswa/vw_siswa", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Siswa";
        $this->load->view("layout/header");
        $this->load->view("siswa/vw_tambah_siswa", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Siswa";
        $data['siswa'] = $this->Siswa_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("siswa/vw_detail_siswa", $data);
        $this->load->view("layout/footer");
    }
    function hapus($id)
    {
        $data['siswa'] = $this->Siswa_model->delete($id);
        $data['siswa'] = $this->Siswa_model->get();
        $data['judul'] = "Halaman Siswa";
        $this->load->view("layout/header");
        $this->load->view("siswa/vw_siswa", $data);
        $this->load->view("layout/footer");
    }

    function upload()
    {
        $data = [
            'nis' => $this->input->post('nis'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'no_hp' => $this->input->post('no_hp'),
            'foto' => $this->input->post('foto'),
            'id_kelas'=> $this->input->post('id_kelas'),
        ];
        $this->Siswa_model->insert($data);
        redirect('Siswa');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Siswa";
        $data['siswa'] = $this->Siswa_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_ubah_siswa", $data);
        $this->load->view("layout/footer");
    }

    function update()
    {
        $data = [
            'nis' => $this->input->post('nis'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'no_hp' => $this->input->post('no_hp'),
            'foto' => $this->input->post('foto'),
            'id_kelas' => $this->input->post('id_kelas'),
        ];
        $id = $this->input->post('nis');
        $this->Siswa_model->update(['nis' => $id], $data);
        redirect('Siswa');
    }
}