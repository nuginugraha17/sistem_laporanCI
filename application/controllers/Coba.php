<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coba extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $data['title'] = "Dashboard";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('coba', $data);
        $this->load->view('templates/footer');
    }
}