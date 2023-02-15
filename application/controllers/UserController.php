<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('RolesModel');
		$this->load->model('UserModel');

		if (!get_cookie('loginUser')) {
			redirect('/');
		}
	}


	public function index($page = 'user')
	{
		$this->load->helper('url');
		if (!file_exists(APPPATH . 'views/pages/user/index.php')) {
			show_404();
		}
		$data['title'] = ucfirst($page);
		$data['breadcrumbs'] = array(
			'Home' => base_url(),
			'User' => base_url('user/index'),
		);
		$data['content']   = 'user/index';
		$data['users'] = $this->UserModel->getUsers();
		$data['divisions'] = $this->AddressModel->get_division();
		$data['districts'] = $this->AddressModel->get_district();
		$data['thanas'] = $this->AddressModel->get_thana();
		$data['roles'] = $this->RolesModel->getRoles();
		$this->load->view('templates/main', $data);
	}

	public function create($page = 'create')
	{
		$this->load->helper('url');
		$data['roles'] = $this->RolesModel->getRoles();
		if (!file_exists(APPPATH . 'views/pages/user/index.php')) {
			show_404();
		}
		$data['title'] = ucfirst($page);
		$data['content']   = 'user/create';
		$this->load->view('templates/main', $data);
	}


	public function show($id)
	{
		$this->load->helper('url');
		$data['user'] = $this->UserModel->getUserById($id);
		if (!file_exists(APPPATH . 'views/pages/user/index.php')) {
			show_404();
		}
		$data['title'] = ucfirst('User Profile');
		$data['content']   = 'user/show';
		$this->load->view('templates/main', $data);
	}


	public function edit($id)
	{
		$data['user'] = $this->UserModel->getUserById($id);
		echo json_encode($data);
	}



	public function store()
	{
		$matchConfirmPass = $this->input->post('password') == $this->input->post('confirmation_password') ? true : false;
		if ($matchConfirmPass) {
			$this->UserModel->insert_user();
		} else {
			$this->setSessionFlashData('error', 'danger', 'Password and confirmation password does not match');
			redirect(base_url('user/create'));
		}
		$this->setSessionFlashData('success', 'success', 'User created successfully');
		redirect(base_url('user/index'));
	}


	public function update($id)
	{
		$this->load->helper('form');
		$this->UserModel->update_user($id);
		redirect(base_url('user/index'));
	}
	public function delete($id)
	{
		$this->UserModel->delete_user($id);
		$this->respondWithSuccess("data", $id);
	}
}
