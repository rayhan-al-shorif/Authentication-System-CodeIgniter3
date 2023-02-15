<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{
	public function userLogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$query = $this->db->get_where('user', ['email' => $email]);
		if ($query->num_rows() == 0) {
			return false;
		}
		$user = $query->result();
		if ($user[0]->password == md5($password)) {
			$this->session->set_userdata('loginUser', $user[0]);
			$this->session->set_userdata('user_name', $user[0]->name);

			return true;
		} else {
			return false;
		}
	}
}
