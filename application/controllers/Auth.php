<?php
defined('BASEPATH') or exit('NO direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->load->view("layout/auth_header.php");       
        $this->load->view("auth/login");
        $this->load->view("auth/auth_footer.php");
    }
}

