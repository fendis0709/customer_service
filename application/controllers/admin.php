<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author Fendi_S0709
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if (null !== $this->session->userdata('nama_akun')) {
            $data['get_data'] = $this->m_keluhan->get_data();
            $data['count_belum'] = $this->m_keluhan->count_data('Belum');
            $data['count_proses'] = $this->m_keluhan->count_data('Proses');
            $data['count_selesai'] = $this->m_keluhan->count_data('Selesai');
            $this->load->view('v_admin', $data);
        } else {
            redirect('home');
        }
    }
}
