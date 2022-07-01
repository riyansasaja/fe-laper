<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pa_user extends CI_Controller
{

	public function index()
	{
		$data['js'] = '';
		$this->load->view('templates/header');
		$this->load->view('templates/side');
		$this->load->view('pa_user/index');
		$this->load->view('templates/footer', $data);
	}

	public function action_view()
	{
		$data['js'] = '';
		$this->load->view('templates/header');
		$this->load->view('templates/side');
		$this->load->view('pa_user/action_view');
		$this->load->view('templates/footer', $data);
	}
}
