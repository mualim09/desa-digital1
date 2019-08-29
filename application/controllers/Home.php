<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('M_event');
        $this->load->model('M_berita');
    }

    public function index()
    {
        $data["event"] = $this->M_event->ui();
        $data["berita"] = $this->M_berita->ui_berita();
        $this->load->view('user/home', $data);
    }

    public function homeuser()
    {
        $this->load->view('user/home1');
    }
}
