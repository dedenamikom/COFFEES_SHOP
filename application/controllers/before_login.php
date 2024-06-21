<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class before_login extends CI_Controller {
    public function index(){
        $this->load->view('konsumen/before_login');
    }
}
?>