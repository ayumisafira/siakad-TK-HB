<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Guru";
        $data['guru'] = $this->Guru_model->get();
        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = "Halaman Guru";
        $this->load->view("layout/header");
        $this->load->view("guru/vw_guru", $data);
        $this->load->view("layout/footer");
    }
function tambah()
{
	$data['judul'] = "Halaman Tambah Guru";
	// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	// $this->form_validation->set_rules('nama', 'Nama', 'required', [
	// 	'required' => 'Nama Guru Wajib di isi'
	// ]);
	// $this->form_validation->set_rules('nama', 'Nama', 'required', [
	// 	'required' => 'Nama Guru Wajib di isi'
	// ]);
	// $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
	// 	'required' => 'Jenis Kelamin Wajib di isi',
	// ]);
	// $this->form_validation->set_rules('email', 'Email', 'required', [
	// 	'required' => 'Email Wajib di isi'
	// ]);
	// $this->form_validation->set_rules('departemen', 'Departemen', 'required', [
	// 	'required' => 'Departemen Wajib di isi'
	// ]);
	// if ($this->form_validation->run() == false) {
	$this->load->view("layout/header");
	$this->load->view("guru/vw_tambah_guru", $data);
	$this->load->view("layout/footer");
}
function detail($id)
{
	$data['judul'] = "Halaman Detail Guru";
	$data['guru'] = $this->Guru_model->getById($id);
	$this->load->view("layout/header");
	$this->load->view("guru/vw_detail_guru", $data);
	$this->load->view("layout/footer");
}
function hapus($id)
{
	$data['guru'] = $this->Guru_model->delete($id);
	$data['guru'] = $this->Guru_model->get();
	$data['judul'] = "Halaman Guru";
	$this->load->view("layout/header");
	$this->load->view("guru/vw_guru", $data);
	$this->load->view("layout/footer");
}

function upload()
{
	$data = [
		'nama' => $this->input->post('nama'),
		'username' => $this->input->post('username'),
		'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		'agama' => $this->input->post('agama'),
		'tempat_lahir' => $this->input->post('tempat_lahir'),
		'tanggal_lahir' => $this->input->post('tanggal_lahir'),
		'email' => $this->input->post('email'),
		'no_hp' => $this->input->post('no_hp'),
		'pendidikan' => $this->input->post('pendidikan'),
		'alamat' => $this->input->post('alamat'),
		'foto' => $this->input->post('foto'),
	];
	$this->Guru_model->insert($data);
	redirect('Guru');
}

function edit($id)
{
	$data['judul'] = "Halaman Edit Guru";
	$data['guru'] = $this->Guru_model->getById($id);
	$this->load->view("layout/header");
	$this->load->view("guru/vw_ubah_guru", $data);
	$this->load->view("layout/footer");
}

function update()
{
	$data = [
		'nama' => $this->input->post('nama'),
		'username' => $this->input->post('username'),
		'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		'agama' => $this->input->post('agama'),
		'tempat_lahir' => $this->input->post('tempat_lahir'),
		'tanggal_lahir' => $this->input->post('tanggal_lahir'),
		'email' => $this->input->post('email'),
		'no_hp' => $this->input->post('no_hp'),
		'pendidikan' => $this->input->post('pendidikan'),
		'alamat' => $this->input->post('alamat'),
		'foto' => $this->input->post('foto'),
	];
	$id = $this->input->post('id_guru');
	$this->Guru_model->update(['id_guru' => $id], $data);
	redirect('Guru');
}
}

