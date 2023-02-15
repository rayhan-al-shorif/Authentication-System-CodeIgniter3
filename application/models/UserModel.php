<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
	public function getUsers()
	{
		$this->db->select('user.*, roles.name as role, division.name as division, district.name as district, thana.name as thana');
		$this->db->from('user');
		$this->db->join('roles', 'roles.id = user.role_id');
		$this->db->join('division', 'division.id = user.division_id');
		$this->db->join('district', 'district.id = user.district_id');
		$this->db->join('thana', 'thana.id = user.thana_id');
		$query = $this->db->get();
		return $query->result();
	}
	public function getUserById($id)
	{
		$this->db->select('user.*, roles.name as role, division.name as division, district.name as district, thana.name as thana');
		$this->db->from('user');
		$this->db->where('user.id', $id);
		$this->db->join('roles', 'roles.id = user.role_id');
		$this->db->join('division', 'division.id = user.division_id');
		$this->db->join('district', 'district.id = user.district_id');
		$this->db->join('thana', 'thana.id = user.thana_id');
		$query = $this->db->get();
		return $query->result();
	}
	public function insert_user()
	{
		$data = array(
			'name' => $this->input->post('user_name'),
			'email' => $this->input->post('email'),
			'full_name' => $this->input->post('full_name'),
			'division_id' => $this->input->post('user_division'),
			'district_id' => $this->input->post('user_district'),
			'thana_id' => $this->input->post('user_thana'),
			'password' => MD5($this->input->post('password')),
			'role_id' => $this->input->post('user_type')
		);
		return $this->db->insert('user', $data);
	}
	public function update_user($id)
	{
		$data = array(
			'name' => $this->input->post('user_name'),
			'full_name' => $this->input->post('full_name'),
			'email' => $this->input->post('email'),
			'division_id' => $this->input->post('user_division'),
			'district_id' => $this->input->post('user_district'),
			'thana_id' => $this->input->post('user_thana'),
			'password' => MD5($this->input->post('password')),
			'role_id' => $this->input->post('user_type')
		);
		$this->db->where('id', $id);
		return $this->db->update('user', $data);
	}

	public function delete_user($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('user');
	}
}
