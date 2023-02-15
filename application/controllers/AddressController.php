<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddressController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!get_cookie('loginUser')) {
			redirect('/');
		}
	}

	public function getDivision()
	{
		$this->load->model('AddressModel');
		$data = $this->AddressModel->get_division();
		echo json_encode($data);
	}

	public function getDistrict($divisionId)
	{
		$this->load->model('AddressModel');
		$data = $this->AddressModel->get_district($divisionId);
		echo json_encode($data);
	}
	public function getThana($districtId)
	{
		$this->load->model('AddressModel');
		$data = $this->AddressModel->get_thana($districtId);
		echo json_encode($data);
	}
}
