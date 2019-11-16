<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    // public function __construct() {
    //     parent::__construct();
    //     if (!$this->session->has_userdata('nama')) {
    //         redirect('Sign_in');
    //     }
    // }

    // public function news() {
    //     $data['kate'] = $this->news->getkategori();
    //     $this->load->view('news/add_news', $data);
    // }

    public function index() {
        $this->load->view('home');
    }

}
