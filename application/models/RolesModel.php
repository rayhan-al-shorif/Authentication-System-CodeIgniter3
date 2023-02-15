<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RolesModel extends CI_Model
{

	public $roles;

	public function __construct()
	{
		parent::__construct();
	}

	public function getRoles()
	{
		$query = $this->db->get('roles');
		return $query->result();
		// return $this->roles;
	}

	public function addRole($role)
	{
		$this->db->insert('roles', $role);
		return $this->db->affected_rows();
	}
}
