<?php

defined('BASEPATH') or exit('No direct srcript access allowed');

class Keluhan extends CI_Controller {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library(array('form_validation', 'email'));
    }

    public function index() {
        $this->load->view('v_nav_header');
        $this->load->view('v_keluhan');
        $this->load->view('v_nav_footer');
    }

    function aturan_form_keluhan() {
        $rules = array(
            'nama' => array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required|xss_clean',
            ),
            'email' => array(
                'field' => 'email',
                'label' => 'Email.',
                'rules' => 'trim|required|xss_clean|valid_email'
            ),
            'topik' => array(
                'field' => 'topik',
                'label' => 'Topik',
                'rules' => 'trim|required|xss_clean'
            ),
            'keluhan' => array(
                'field' => 'keluhan',
                'label' => 'Keluhan',
                'rules' => 'trim|required|xss_clean',
            ),
            'anti_spam' => array(
                'field' => 'anti_spam',
                'label' => 'Anti Spam.',
                'rules' => 'trim|required|xss_clean'
            )
        );

        $this->form_validation->set_rules($rules);

        $this->form_validation->set_error_delimiters('<label class="control-label" for="inputError" style="color: tomato;"><i class="fa fa-times-circle-o"></i>&nbsp;&nbsp;&nbsp;', '</label>');
        $catatan = array(
            'required' => 'Harap Diisi.',
            'numeric' => 'Hanya menerima input angka.',
            'xss_clean' => 'Scripting detected...!!!'
        );

        $data['message'] = $this->form_validation->set_message($catatan);
    }

    function insert() {
//        $this->aturan_form_keluhan();
//        if($this->form_validation->run() === FALSE){
//            $this->session->set_flashdata('pesan', '<center><div class="alert" style="color:tomato; font-size: 16pt;"><i class="fa fa-warning"></i><p>Pengisian data mengalami kesalahan.<br>Pastikan Anda memsaukkan data dengan benar.</p></div></center>');
//            redirect('home');
//        } else {
        if (($this->input->post('anti_spam_ans')) == ($this->input->post('anti_spam'))) {
            $data = array(
                'id_akun' => NULL,
                'nama_pelanggan' => $this->input->post('nama'),
                'email_pelanggan' => $this->input->post('email'),
                'judul_keluhan' => $this->input->post('topik'),
                'deskrip_keluhan' => $this->input->post('keluhan'),
                'status_keluhan' => 'Belum',
                'tgl_keluhan' => date("Y-m-d H:i:s"),
                'tgl_proses' => NULL,
                'tgl_selesai' => NULL
            );

            /* Insert data ke database */
            $this->m_keluhan->insert($data);

            /* Pesan untuk ditampilkan, bahwa data telah berhasil di-insert-kan ke database */
//            $this->session->set_flashdata('pesan', '<center><div class="alert alert-success" style="color:yellowgreen;" id="alert"><i class="fa fa-info fa-2x"></i> <h4>Data berhasil ditambahkan.</h4><br><p>ID Comlaint Anda : ' . $id_keluhan . '</p></div></center>');


            $get_id_keluhan = $this->m_keluhan->get_id($this->input->post('keluhan'), date("Y-m-d H:i:s"));
            foreach ($get_id_keluhan as $rkeluhan) {
                /* Pesan untuk ditampilkan, bahwa data telah berhasil di-insert-kan ke database */
                $this->session->set_flashdata('pesan', '<center><div class="alert alert-success" style="color:yellowgreen;" id="alert"><i class="fa fa-info fa-2x"></i> <h4>Data berhasil ditambahkan.</h4><br><p>ID Complaint Anda : ' . $rkeluhan->id_keluhan . '</p><br><p>Harap catat ID Complaint Anda. Karena jika Anda ingin mengecek status keluhan yang telah Anda sampaikan, Anda diharuskan mencantumkan ID Complaint tersebut.</p></div></center>');
                $id_keluhan = $rkeluhan->id_keluhan;
                $email_to = $rkeluhan->email_pelanggan;
                $judul_keluhan = $rkeluhan->judul_keluhan;
                $deskrip_keluhan = $rkeluhan->deskrip_keluhan;
                $tgl_keluhan = $rkeluhan->tgl_keluhan;
            }

            redirect(base_url().'home/#keluhan');

//            $config['protocol'] = 'smtp';
//            $config['smtp_host'] = 'ssl://smtp.gmail.com'; //change this
//            $config['smtp_port'] = '25';
//            $config['smtp_user'] = 'fendi.septiawan0709@gmail.com'; //change this
//            $config['smtp_pass'] = 'password'; //change this
//
//            $config['smtp_timeout'] = '4';
//            $config['mailtype'] = 'html';
//            $config['charset'] = 'iso-8859-1';
//            $config['wordwrap'] = TRUE;
//            $config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard

//            $this->email->initialize($config);

            $this->email->from('fendi.septiawan0709@gmail.com');
            $this->email->to($email_to);

            $this->email->subject('[AUTOREPLY] Keluhan Anda pada Boox');
            $this->email->message('Terima kasih telah menyampaikan keluhan Anda kepada kami. Berikut data keluhan Anda yang telah disampaikan kepada kami.<br> ID Complain : '.$id_keluhan.'<br>Topik Keluhan : '.$judul_keluhan.'<br>Deskripsi Keluhan : '.$deskrip_keluhan.'<br>Tanggal penyampaian keluhan : '.$tgl_keluhan.'.Sebagai bentuk pelayanan kami kepada pelanggan setia kami. Boox technology Indonesia memberikan kebebasan bagi pelanggan untuk menyampaikan keluhan kepada kami. Agar kami dapat terus memberikan pelayanan terbaik kami kepada pelanggan.');

            $this->email->send();
            if ($this->email->send() == TRUE) {
                $this->session->set_flashdata('mail', '<h3>Success send email to '.$email_to.'</h3>');
            } else {
                $this->session->set_flashdata('mail', '<h3>Fail send email to '.$email_to.'</h3>');
            }
        } else {
            $this->session->set_flashdata('pesan', '<center><div class="alert alert-warning" style="color:tomato;" id="alert"><i class="fa fa-info fa-2x"></i> <h4>Data <strong>tidak</strong> berhasil ditambahkan.</h4></div></center>');

            redirect('home');
        }

//        }
    }

    function cari() {
        $rules = array(
            'id_keluhan' => array(
                'field' => 'id_keluhan',
                'label' => 'ID Complaint',
                'rules' => 'trim|required|xss_clean',
            )
        );
        $this->form_validation->set_rules($rules);

        $this->form_validation->set_error_delimiters('<label class="control-label" for="inputError" style="color: tomato;"><i class="fa fa-times-circle-o"></i>&nbsp;&nbsp;&nbsp;', '</label>');
        $catatan = array(
            'required' => 'Harap Diisi.',
            'xss_clean' => 'Scripting detected...!!!'
        );

        $data['message'] = $this->form_validation->set_message($catatan);
//        if ($this->form_validation->run() == FALSE) {
//            $this->session->set_flashdata('pesan_cari', '<center><div class="alert" style="color:tomato; font-size: 16pt;"><i class="fa fa-warning"></i><p>ID Complaint salah.</p></div></center>');
//            redirect('home');
//        } else {
        $id_keluhan = $this->input->post('id_complaint');
        $data['get_id_keluhan'] = $this->m_keluhan->get_byid($id_keluhan);
        $this->load->view('v_nav_header');
        $this->load->view('v_keluhan', $data);
        $this->load->view('v_nav_footer');
//        }
    }

    function detail($id_keluhan) {
        if (null !== $this->session->userdata('nama_akun')) {
            $data['get_byid'] = $this->m_keluhan->get_byid($id_keluhan);
            $this->load->view('v_keluhan_detail', $data);
        } else {
            redirect('home');
        }
    }

    function update($id_keluhan) {
        if (null !== $this->session->userdata('nama_akun')) {
            $get_id_keluhan = $this->m_keluhan->get_byid($id_keluhan);
            foreach ($get_id_keluhan as $rkeluhan) {
                $id_keluhan = $rkeluhan->id_keluhan;
                $status_keluhan = $rkeluhan->status_keluhan;
            }
            $status = $this->input->post('status_keluhan');
            /*
             * Jika status sekarang adalah 'Belum', maka bukakan 'Belum' dan 'Proses'
             * Jika status sekarang adalah 'Proses' atau 'Selesai', maka bukakan 'Belum', 'Proses', dan 'Selesai'
             */
            if ($status_keluhan == 'Belum' && $status == 'Proses') {
                //Set tgl proses
                $data = array(
                    'id_akun' => $this->session->userdata('id_akun'),
                    'status_keluhan' => $status,
                    'tgl_proses' => date("Y-m-d H:i:s")
                );
                $this->m_keluhan->update($id_keluhan, $data);
                redirect('admin');
            } else if ($status_keluhan == 'Proses' && $status == 'Selesai') {
                //Set tgl selesai
                $data = array(
                    'id_akun' => $this->session->userdata('id_akun'),
                    'status_keluhan' => $status,
                    'tgl_selesai' => date("Y-m-d H:i:s")
                );
                $this->m_keluhan->update($id_keluhan, $data);
                redirect('admin');
            }
        } else {
            redirect('home');
        }
    }

}
