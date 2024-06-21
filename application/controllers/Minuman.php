<?php
use PhpParser\Node\Stmt\Else_;

defined('BASEPATH') or exit('No direct script access allowed');
class Minuman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }
    public function index()
    {
        $data['minuman'] = $this->Madmin->get_all_data('tbl_kopi')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('minuman/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    
    public function add()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('minuman/formAdd');
        $this->load->view('admin/layout/footer');
    }
    
    public function save()
    {

        $namaKopi = $this->input->post('namaKopi');
        $harga = $this->input->post('harga');

        // Upload configuration
        $config['upload_path'] = './assets/img/minuman';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $data_file = $this->upload->data();

            $data = array(
                'namaKopi' => $namaKopi,
                'foto' => $data_file['file_name'],
                'harga' => $harga
            );

            // Assuming 'Madmin' is the model and 'insert' is the method to insert data into 'tbl_mobil'
            $this->Madmin->insert('tbl_kopi', $data);

            // Set success message
            $this->session->set_flashdata('success_message', 'Data added successfully!');
            redirect('minuman');
        } else {
            // Set error message if file upload fails
            $this->session->set_flashdata('error_message', 'Failed to upload image!');
            redirect('minuman/add');
        }
    }



    public function get_by_id($id)
    {
        if (empty($this->session->userdata('username'))) {
            redirect('admin');
        }
        $dataWhere = array('idKopi' => $id);
        $data['minuman'] = $this->Madmin->get_by_id('tbl_kopi', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/top_menu');
        $this->load->view('minuman/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }
    public function edit()
    {
        if (empty($this->session->userdata('username'))) {
            redirect('admin');
        }
        $this->load->model('Madmin');
    
        $id = $this->input->post('idKopi');
        $namaKopi = $this->input->post('namaKopi');
        $harga = $this->input->post('harga');
    
        // Check if a file was uploaded
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/img/minuman';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048; // 2MB
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('foto')) {
                $uploadData = $this->upload->data();
                $foto = $uploadData['file_name'];
            } else {
                // Handle upload failure
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('minuman');
            }
        } else {
            // No file uploaded, use existing photo value
            $foto = $this->input->post('foto');
        }
    
        // Prepare data for update
        $dataUpdate = array(
            'namaKopi' => $namaKopi,
            'foto' => $foto,
            'harga' => $harga
        );
    
        // Update data in database
        $this->Madmin->update('tbl_kopi', $dataUpdate, 'idKopi', $id);
    
        // Set flash message and redirect
        $this->session->set_flashdata('success', 'Data changed successfully!');
        redirect('minuman');
    }
    


    public function delete($id)
    {
        if (empty($this->session->userdata('username'))) {
            redirect('minuman');
        }
        $this->Madmin->delete('tbl_kopi', 'idKopi', $id);
        $this->session->set_flashdata('success_message', 'Data deleted successfully');
        redirect('minuman');
    }
}

