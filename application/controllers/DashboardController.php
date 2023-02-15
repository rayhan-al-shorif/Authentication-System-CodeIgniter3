<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!get_cookie('loginUser')) {
			redirect('/');
		}
	}
	public function index($page	= 'dashboard')
	{
		$this->load->helper('url');
		$data['title'] = ucfirst($page);
		$data['content']       = $page;
		$this->load->view('templates/main', $data);
	}
}
