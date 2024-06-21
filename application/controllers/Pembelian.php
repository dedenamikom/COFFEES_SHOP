<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Madmin');
    }

    public function index(){
        // Fetch data for cars and drivers from the database
        $data['mobil'] = $this->Madmin->get_all_data('tbl_mobil')->result();
        $data['driver'] = $this->Madmin->get_all_data('tbl_driver')->result();
        $data['pariwisata'] = $this->Madmin->get_all_data('tbl_pariwisata')->result();
        $dataMobil['kategori'] = $this->Madmin->get_all_data('tbl_mobil')->result();
        $dataDriver['driver'] = $this->Madmin->get_all_data('tbl_driver')->result();
        $dataPariwisata['pariwisata'] = $this->Madmin->get_all_data('tbl_pariwisata')->result();
        
        // Load the view and pass the data
        $this->load->view('layout/menu');
        $this->load->view('crud/transaksi', $data);
        $this->load->view('car/mobil', $dataMobil);
        $this->load->view('car/driver', $dataDriver);
        $this->load->view('paket/pariwisata', $dataPariwisata);
    }
    public function detail(){
        if($this->input->post()){
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'email' => $this->input->post('email'),
                'nomor_telepon' => $this->input->post('nomor_telepon'),
                'tanggal_pengambilan' => $this->input->post('tanggal_pengambilan'),
                'mobil' => $this->input->post('mobil'),
                'driver' => $this->input->post('driver'),
                'paket_pariwisata' => $this->input->post('paket_pariwisata'),
                'durasi_sewa' => $this->input->post('durasi_sewa'),
                'alamat_penjemputan' => $this->input->post('alamat_penjemputan'),
                'kota' => $this->input->post('kota'),
                'kode_pos' => $this->input->post('kode_pos'),
                'tambahan_asuransi' => ($this->input->post('tambahan_asuransi') == 'yes') ? 1 : 0, // Menyimpan 1 jika checkbox di-check, 0 jika tidak
                'ambil_di_lokasi' => ($this->input->post('ambil_di_lokasi') == 'yes') ? 1 : 0, // Menyimpan 1 jika checkbox di-check, 0 jika tidak
                'metode_pembayaran' => $this->input->post('metode_pembayaran')
            );
            $this->Madmin->insert('tbl_transaksidetail', $data);
            $this->session->set_flashdata('success', 'Transaksi berhasil diproses.');
            redirect('home/dashboard');
        }
    }
}
?>
