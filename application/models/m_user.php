<?php

defined('BASEPATH') or exit('No direct script allowed');

class M_user extends CI_Model {
    /*
     * Level akun 
     * 1 = Admin Master
     * 2 = User
     */
    
    var $tabel = 'akun';

    function __construct() {
        parent::__construct();
    }

    function jumlah_user() {
        $jumlah = $this->db->get_where($this->tabel, array('level_akun' => '2'));
        $j = $jumlah->num_rows();
        return $j;
    }

    function get_username($username, $password) {
        $this->db->where("username_akun='$username' AND password_akun='$password'");
        $query = $this->db->get($this->tabel);
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
