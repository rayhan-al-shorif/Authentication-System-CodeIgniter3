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
			$setUser = json_encode($user[0]);
			$this->input->set_cookie(['name' => 'loginUser', 'value' => 	$setUser, 'expire' => '60', 'secure' => TRUE]);
			return true;
		} else {
			return false;
		}
	}
}
