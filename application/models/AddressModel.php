<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddressModel extends CI_Model
{
	public function get_division()
	{
		$query = $this->db->get('division');
		return $query->result();
	}
	public function get_district($divisionId = null)
	{
		if ($divisionId == null) {
			$query = $this->db->get('district');
			return $query->result();
		} else {
			$query = $this->db->get_where('district', array('division_id' => $divisionId));
			return $query->result();
		}
	}
	public function get_thana($districtId = null)
	{
		if ($districtId == null) {
			$query = $this->db->get('thana');
			return $query->result();
		} else {
			$query = $this->db->get_where('thana', array('district_id' => $districtId));
			return $query->result();
		}
	}
	public function get_address($name, $id)
	{
		$searchField = $name . "_id" . $id;
		return $searchField;
		// $query = $this->db->get_where($tableName, array($searchField => $id));
		// $query->result();
	}
}
