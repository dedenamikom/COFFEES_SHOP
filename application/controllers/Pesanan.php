<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('cart');
        $this->load->model('Madmin');
        $this->load->model('Checkout');
    }
    public function index(){
        $data['pesanan'] = $this->Madmin->get_all_data('tbl_transaksi')->result();
        $this->load->view('admin/layout/header');
		$this->load->view('admin/layout/top_menu');
		$this->load->view('pesanan/tampil', $data);
		$this->load->view('admin/layout/footer');
    }
    public function lihat(){
        $data['pesanan'] = $this->Madmin->get_all_data('tbl_detailtransaksi')->result();
        $this->load->view('admin/layout/header');
		$this->load->view('admin/layout/top_menu');
		$this->load->view('pesanan/lihat', $data);
		$this->load->view('admin/layout/footer');
    }
    public function update_status_pembelian()
    {
        $idTransaksi = $this->input->post('idTransaksi');
        $status_pembelian = $this->input->post('status_pembelian');

        $data = array(
            'status_pembelian' => $status_pembelian
        );

        $where = array('idTransaksi' => $idTransaksi);

        $this->Madmin->updatetransaksi('tbl_transaksi', $data, $where, $idTransaksi);

        redirect('pesanan');
    }
    public function update_status_pembayaran()
    {
        $idTransaksi = $this->input->post('idTransaksi');
        $status_pembayaran = $this->input->post('status_pembayaran');

        $data = array(
            'status_pembayaran' => $status_pembayaran
        );

        $where = array('idTransaksi' => $idTransaksi);

        $this->Madmin->updatetransaksi('tbl_transaksi', $data, $where, $idTransaksi);

        redirect('pesanan');
    }
    public function delete($id)
    {
        if (empty($this->session->userdata('username'))) {
            redirect('admin');
        }
        $this->Madmin->delete('tbl_detailtransaksi', 'id', $id);
        $this->session->set_flashdata('success_message', 'Data deleted successfully');
        redirect('pesanan/lihat');
    }

    public function deleteTransaksi($id)
    {
        if (empty($this->session->userdata('username'))) {
            redirect('admin');
        }
        $this->Madmin->delete('tbl_transaksi', 'idTransaksi', $id);
        $this->session->set_flashdata('success_message', 'Data deleted successfully');
        redirect('pesanan');
    }
}
?>