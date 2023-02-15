<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{


	public function index()
	{
		if (get_cookie('loginUser')) {
			redirect('dashboard');
		} else {
			$this->load->view('pages/auth/login');
		}
	}
	public function userLogin()
	{

		$login =  $this->AuthModel->userLogin();
		if ($login) {
			$this->setSessionFlashData('success', 'success', 'Login successfully');
			redirect('dashboard');
		} else {
			$this->setSessionFlashData('error', 'danger', 'Invalid email or password');
			redirect('/');
		}
	}
	public function userLogout()
	{
		if (get_cookie('loginUser')) {
			delete_cookie('loginUser');
			redirect('/');
		} else {
			redirect('dashboard');
		}
	}
}
