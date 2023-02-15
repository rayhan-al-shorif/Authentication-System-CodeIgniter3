<?php

class Controller404 extends CI_Controller

{

	public function __construct()

	{

		parent::__construct();
	}



	public function index()
	{
		$data['title'] = ucfirst('404 Error Page');
		$this->load->view('err404',	$data);
	}
}
