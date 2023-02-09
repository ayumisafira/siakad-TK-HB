<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Guru_model');
		$this->load->model('Siswa_model');
		// $this->load->model('User_model');
		// $this->load->model('Detail_model');
	}
	function index()
	{
		//$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['guru'] = $this->Guru_model->tguru();
		$data['siswa'] = $this->Siswa_model->tsiswa();
		//$data['totalb'] = $this->Detail_model->charts();
		//$data['us'] = $this->User_model->tuser();
		$this->load->view("layout/header", $data);
		$this->load->view("auth/dashboard", $data);
		$this->load->view("layout/footer");
	}
}
