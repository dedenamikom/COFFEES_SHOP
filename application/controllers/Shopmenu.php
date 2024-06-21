<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shopmenu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('cart');
        $this->load->model('Madmin');
        $this->load->model('Checkout');
    }

    public function index()
    {
        $data['minuman'] = $this->Madmin->get_all_data('tbl_kopi')->result();
        $this->load->view('konsumen/layout/header');
        $this->load->view('konsumen/shopMenu', $data);
    }

    public function addToCart($idKopi)
    {
        $minuman = $this->Madmin->find($idKopi);

        $data = array(
            'id' => $minuman->idKopi,
            'qty' => 1,
            'price' => $minuman->harga,
            'name' => $minuman->namaKopi,
        );
        $this->cart->insert($data);
        redirect('Shopmenu');
    }

    public function detail_keranjang()
    {
        $this->load->view('konsumen/layout/header');
        $this->load->view('konsumen/transaksi');
    }

    public function proses_checkout()
    {
        $idUser = $this->session->userdata('idUser');

        // Save order
        $order_data = array(
            'total' => $this->cart->total()
        );
        $order_id = $this->Checkout->save_order($order_data);

        // Log order ID for debugging
        log_message('debug', 'Order ID: ' . $order_id);

        // Save order details
        foreach ($this->cart->contents() as $item) {
            $order_detail_data = array(
                'idOrder' => $order_id,
                'idKopi' => $item['id'],
                'namaKopi' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price'],
                'total' => $item['subtotal'],
                'status_pembelian' => 'baru',
                'status_pembayaran' => 'menunggu'
            );
            $this->Checkout->save_order_detail($order_detail_data);
        }

        redirect('shopmenu/pembayaran');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('shopmenu/index');
    }

    public function pembayaran()
    {
        $this->load->view('konsumen/layout/header');
        $this->load->view('konsumen/pembayaran');
    }

    public function proses_pesanan()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('no_telp', 'No. Telepon', 'required');
        $this->form_validation->set_rules('jasa_kirim', 'Jasa kirim', 'required');
        $this->form_validation->set_rules('pilih_bank', 'Pilih BANK', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Load the form again if validation fails
            $this->load->view('konsumen/layout/header');
            $this->load->view('konsumen/transaksi');
        } else {
            // Handle file upload
            $config['upload_path'] = './assets/img/pembayaran/';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf';
            $config['max_size'] = 2048; // 2MB
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('pembayaran')) {
                $error = array('error' => $this->upload->display_errors());
                // Load the form again with error message
                $this->load->view('konsumen/layout/header');
                $this->load->view('konsumen/transaksi', $error);
            } else {
                $fileData = $this->upload->data();

                // Get cart items
                $cart_items = $this->cart->contents();
                $orders = array();
                foreach ($cart_items as $item) {
                    $order_data = array(
                        'nama' => $this->input->post('nama_lengkap'),
                        'alamat' => $this->input->post('alamat'),
                        'telepon' => $this->input->post('no_telp'),
                        'jasaKirim' => $this->input->post('jasa_kirim'),
                        'bank' => $this->input->post('pilih_bank'),
                        'foto' => $fileData['file_name'],
                        'namaProduk' => $item['name'],
                        'jumlah'=> $item['qty'],
                        'totalHarga' => $item['subtotal'],
                        'tanggal' => date('Y-m-d H:i:s')
                    );
                    $orders[] = $order_data;
                }

                // Save all orders
                foreach ($orders as $order) {
                    $this->Checkout->save_pembelian($order);
                }
                $this->cart->destroy();
                redirect('shopmenu');
            }
        }
    }


}
