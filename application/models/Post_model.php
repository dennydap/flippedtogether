
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Post_model extends CI_Model {
	public function getPost() {
		$this->db->join('users', 'users.id = posts.author_id', 'left');
		$this->db->order_by('posts.id', 'desc');
		return $this->db->get('posts')->result();
	}
	public function getPostById($id) {
		$this->db->where('id', $id);
		return $this->db->get('posts')->result();
	}
	public function getPostByAuthor($author) {
		$this->db->where('author_id', $author);
		return $this->db->get('posts')->result();
	}
	public function getPostLimit($num) {
		$this->db->limit($num);
		return $this->db->get('posts')->result();
	}
	public function addPost($data) {
		return $this->db->insert('posts', $data);
	}
	public function editPost($data) {
		return $this->db->get('posts')->result();
	}
	public function updatePost($data) {
		$this->db->where('id', $data['id']);
		return $this->db->update('posts', $data);
	}
	public function deletePost($id) {
		$this->db->where('id', $id);
		return $this->db->delete('posts');
	}
}