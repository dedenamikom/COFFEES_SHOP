<?php

class Madmin extends CI_Model{

    public function cek_login($u, $p){
        $q = $this->db->get_where('tbl_user', array('username'=>$u, 'password'=>$p));
        return $q;
    }
    public function cek_login_admin($u, $p){
        $q = $this->db->get_where('tbl_admin', array('username'=>$u, 'password'=>$p));
        return $q;
    }
    public function get_all_data($tabel) {
        $q=$this->db->get($tabel);
        return $q;
    }
        public function insert($tabel, $data) {
        $this->db->insert($tabel, $data);
    }
        public function get_by_id($tabel, $id) {
        return $this->db->get_where($tabel, $id);
    }
        public function update($tabel, $data, $pk, $id) {
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }
        public function delete($tabel, $id, $val) {
         $this->db->delete($tabel, array($id => $val));
    }
    public function find($id){
        $result = $this->db->where('idKopi', $id)->limit(1)->get('tbl_kopi');
        return $result->row();
    }
    public function updatetransaksi($table, $data, $where, $id)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }
    public function get_by_id_transaksi($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
