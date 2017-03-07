<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class member extends CI_Model {

	public function get_all()
	{
		$query = $this->db->query('SELECT name, title, email FROM member');
		return $query->result();
		
}
}