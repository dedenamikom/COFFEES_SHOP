<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Madmin');
	}

	public function index()
	{
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/top_menu');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/layout/footer');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}
