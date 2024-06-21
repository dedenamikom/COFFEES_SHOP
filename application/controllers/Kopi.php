<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kopi extends CI_Controller {
    public function index(){
        if(empty($this->session->userdata('username'))){
            redirect('before_login');
        }
        $this->load->view('konsumen/dashboard');
    }
    public function cek_login(){
        $this->load->model('Madmin');
        $u = $this->input->post('username');
        $p = $this->input->post('password');
        $cekuser = $this->Madmin->cek_login($u, $p)->num_rows();
        $cekadmin = $this->Madmin->cek_login_admin($u, $p)->num_rows();
        if ($cekuser == 1) {
            $data_session = array(
                'idUser' => $cekuser->idUser,
                'username' => $u
                
            );
            $this->session->set_userdata($data_session);
            redirect('kopi');
        } else if($cekadmin == 1) {
            $data_session = array(
                'username' => $u,
                'password' => $p,
            );
            $this->session->set_userdata($data_session);
            redirect('admin');
        } else {
            $this->session->set_flashdata('error', 'Username atau Password Salah !!');
            redirect('login');
        }
    }
    public function register(){
        $this->load->model('Madmin');
        $namaKonsumen = $this->input->post('namaKonsumen');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $tlpn = $this->input->post('tlpn');
        $alamat = $this->input->post('alamat');
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password
        );
        $this->Madmin->insert('tbl_user', $data);
        $this->session->set_flashdata('success', 'Pendaftaran Berhasil. Silakan Login Ulang !!');
        redirect('login');
    }
    public function logout(){
		$this->session->sess_destroy();
		redirect('login');
		}
}
?>
