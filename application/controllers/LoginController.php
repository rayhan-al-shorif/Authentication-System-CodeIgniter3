<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('loginUser')) {
			$this->load->view('pages/auth/login');
		} else {
			redirect('dashboard');
		}
	}
	public function userLogin()
	{

		$login =  $this->AuthModel->userLogin();
		if ($login) {
			redirect('dashboard');
		} else {
			$this->setSessionFlashData('error', 'danger', 'Invalid email or password');
			redirect('/');
		}
	}
	public function userLogout()
	{
		if ($this->session->userdata('loginUser')) {
			$this->session->unset_userdata('loginUser');
			redirect('/');
		} else {
			redirect('dashboard');
		}
	}
}
