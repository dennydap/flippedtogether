
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
	public function getUser() {
		return $this->db->get('users')->result();
	}
	public function getUserById($id) {
		$this->db->where('id', $id);
		return $this->db->get('users')->result();
	}
	public function getUserLimit($num) {
		$this->db->limit($num);
		return $this->db->get('users')->result();
	}
	public function editUser($data) {
		return $this->db->get('users')->result();
	}
	public function updateUser($data) {
		$this->db->where('id', $data['id']);
		return $this->db->update('users', $data);
	}
	public function deleteUser($id) {
		$this->db->where('id', $id);
		return $this->db->delete('users');
	}
	public function register($data){
		return $this->db->insert('users', $data);
	}
	public function login($data){
		$this->db->where('username', $data['username']);
		$query = $this->db->get('users');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
}