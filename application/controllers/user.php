<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function register() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('register');
        } else {
            $data = array(
                'username_user' => $this->input->post('username'),
                'password_user' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
            );
            if ($this->User_model->register($data)) {
                $this->session->set_flashdata('msg', 'Registration successful!');
                redirect('user/login');
            } else {
                $this->session->set_flashdata('msg', 'Registration failed!');
                $this->load->view('register');
            }
        }
    }

    public function login() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->User_model->login($email, $password);
            if ($user) {
                $userdata = array(
                    'user_id' => $user->Id_user,
                    'username' => $user->username_user,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($userdata);
                redirect('welcome');
            } else {
                $this->session->set_flashdata('msg', 'Invalid login credentials');
                $this->load->view('login');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata(array('user_id', 'username', 'logged_in'));
        $this->session->set_flashdata('msg', 'Logged out successfully');
        redirect('user/login');
    }
}
?>
