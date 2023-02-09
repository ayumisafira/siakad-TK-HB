<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mapel_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Mapel";
        $data['mapel'] = $this->Mapel_model->get();
        $this->load->view("layout/header");
        $this->load->view("mapel/vw_mapel", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Mapel";
        $this->load->view("layout/header");
        $this->load->view("mapel/vw_tambah_mapel", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Mapel";
        $data['mapel'] = $this->Mapel_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("mapel/vw_detail_mapel", $data);
        $this->load->view("layout/footer");
    }
    function hapus($id)
    {
        $data['mapel'] = $this->Mapel_model->delete($id);
        $data['mapel'] = $this->Mapel_model->get();
        $data['judul'] = "Halaman Mapel";
        $this->load->view("layout/header");
        $this->load->view("mapel/vw_mapel", $data);
        $this->load->view("layout/footer");
    }

    function upload()
    {
        $data = [
            'mapel' => $this->input->post('mapel'),
            'id_semester' => $this->input->post('id_semester'),
        ];
        $this->Mapel_model->insert($data);
        redirect('Mapel');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Mapel";
        $data['mapel'] = $this->Mapel_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("mapel/vw_ubah_mapel", $data);
        $this->load->view("layout/footer");
    }

    function update()
    {
        $data = [
            'mapel' => $this->input->post('mapel'),
            'id_semester' => $this->input->post('id_semester'),
        ];
        $id = $this->input->post('id_mapel');
        $this->Mapel_model->update(['id_mapel' => $id], $data);
        redirect('Mapel');
    }
}