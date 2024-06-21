<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Model {

    public function get_all_minuman() {
        $query = $this->db->get('minuman');
        return $query->result();
    }

    public function get_minuman_by_id($idKopi) {
        $query = $this->db->get_where('minuman', array('idKopi' => $idKopi));
        return $query->row();
    }

    public function save_order($data) {
        $this->db->insert('tbl_checkout', $data);
        return $this->db->insert_id();
    }
    public function save_pembelian($data) {
        $this->db->insert('tbl_detailtransaksi', $data);
        return $this->db->insert_id();
    }

    public function save_order_detail($data) {
        $this->db->insert('tbl_transaksi', $data);
    }
}
