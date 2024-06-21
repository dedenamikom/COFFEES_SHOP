<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function register($data) {
        return $this->db->insert('tbl_user', $data);
    }

    public function login($username, $password) {
        $this->db->where('username_user', $username);
        $query = $this->db->get('tbl_user');
        if ($query->num_rows() == 1) {
            $user = $query->row();
            if (password_verify($password, $user->password_user)) {
                return $user;
            }
        }
        return false;
    }
}
?>
