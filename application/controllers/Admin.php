<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sideadmin');
        $this->load->view('admin_view/index');
        $this->load->view('templates/footer');
    }

    public function view_document()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sideadmin');
        $this->load->view('admin_view/view_document');
        $this->load->view('templates/footer');
    }

    public function rekaplaper()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sideadmin');
        $this->load->view('admin_view/view_rekaplaper');
        $this->load->view('templates/footer');
    }
}
