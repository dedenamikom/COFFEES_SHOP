<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }
    public function index()
    {
        $this->load->view('konsumen/login');
    }

    public function register()
    {
        $this->load->view('konsumen/register');
    }
    public function dashboard()
    {
        $this->load->view('konsumen/dashboard');
    }

}
