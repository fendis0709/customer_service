<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('v_nav_header');
        $this->load->view('v_kontak');
        $this->load->view('v_nav_footer');
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

