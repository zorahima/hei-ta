<?php

Class Login_m extends CI_Model {

// Insert registration data in database

	public function prosesLogin() {
		$this->db->where('email', $user);
		$this->db->where('password', $pass);
		/*$this->db->where('status','aktif');*/
		return $this->db->get('user')->row();
	}

	public function registration_insert($data) {

// Query to check whether email already exist or not
		$condition = "email =" . "'" . $data['email'] . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {

// Query to insert data in database
			$this->db->insert('user', $data);
			if ($this->db->affected_rows() > 0) {
				return true;
			}
		} else {
			return false;
		}
	}

// Read data using email and password
	public function login($data) {

		$condition = "email =" . "'" . $data['email'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

// Read data from database to show data in admin page
	public function read_user_information($email) {

		$condition = "email =" . "'" . $email . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

}

?>