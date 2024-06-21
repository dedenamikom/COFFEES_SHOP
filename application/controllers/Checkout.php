<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
    public function index(){
        if(empty($this->session->userdata('username'))){
            redirect('before_login');
        }
        $this->load->view('konsumen/layout/header');
        $this->load->view('konsumen/transaksi');
    }
}
?>