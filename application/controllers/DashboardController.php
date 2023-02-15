<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
	public function index($page	= 'dashboard')
	{

		if (!$this->session->userdata('loginUser')) {
			redirect('/');
		}
		$this->load->helper('url');
		$data['title'] = ucfirst($page);
		$data['content']       = $page;
		$this->load->view('templates/main', $data);
	}
}
