<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('v_login');
    }

    function aturan_form_login() {
        $rules = array(
            'username' => array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'trim|required|xss_clean'
            ),
            'password' => array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|xss_clean'
            )
        );
        $this->form_validation->set_rules($rules);

        $this->form_validation->set_error_delimiters('<label class="control-label" for="inputError" style="color: tomato;"><i class="fa fa-times-circle-o"></i>&nbsp;&nbsp;&nbsp;', '</label>');
        $catatan = array(
            'required' => 'Harap Diisi.',
            'xss_clean' => 'Scripting detected...!!!'
        );

        $data['message'] = $this->form_validation->set_message($catatan);
    }

    function login() {
//        $this->aturan_form_login();
//        if ($this->form_validation->run() === FALSE) {
//            $this->session->set_flashdata('pesan', '<center><div class="alert" style="color:tomato; font-size: 16pt;"><i class="fa fa-warning"></i><p>Username dan Password salah.</p></div></center>');
//            $this->load->view('v_login');
//        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $mdpass = md5($password);

            $get = $this->m_user->get_username($username, $mdpass);

            if ($get == TRUE) {
                foreach ($get as $row) {
                    $id = $row->id_akun;
                    $user = $row->username_akun;
                    $nama = $row->nama_akun;
                    $level = $row->level_akun;
                    $alamat = $row->email_akun;
                }
                $data = array(
                    'id_akun' => $id_akun,
                    'username' => $username,
                    'nama_akun' => $nama,
                    'level_akun' => $level,
                    'email_akun' => $email
                );
                $this->session->set_userdata($data);
                if ($level == 1) {
                    //redirect to Admin master page
                    redirect('admin');
                } else {
                    //redirect to user page
                }
            } else {
                $this->session->set_flashdata('pesan', '<center><div class="alert" style="color:tomato; font-size: 16pt;"><i class="fa fa-warning"></i><p>Username dan Password salah.</p></div></center>');
                redirect('login');
            }
        }
//  }

    function logout() {
        $this->session->sess_destroy();
        redirect('home');
    }

}
