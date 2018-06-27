<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Posts extends CI_Controller {

	public function explore()
	{
		$data['title'] = "Jelajahi";
		$data['query'] = $this->post_model->getPost();
		$this->load->view('templates/header', $data);
		$this->load->view('posts/explore');
		$this->load->view('templates/footer');
	}

	public function delete($id) {
		$this->post_model->deletePost($id);
		redirect('user/dashboard');
	}

	public function add() {
		$data['title'] = "Tambah Post";
		$data['mode'] = 'add';
		$this->load->view('templates/header', $data);
		$this->load->view('posts/add_edit');
		$this->load->view('templates/footer');
	}

	public function create(){
		$data = array(
			'title' => $this->input->post('title'),
			'captions' => $this->input->post('captions'),
			'url' => $this->input->post('url'),
			'author_id' => $this->session->userdata('id'),
			'created_at' => date('Y-m-j H:i:s'),
		);
		if($this->input->post('title') == null && $this->input->post('url') == null) {
			redirect('posts/add');
		} else {
			$this->post_model->addPost($data);
			redirect('user/dashboard');
		}
	}

	public function edit($id) {
		$data['title'] = "Edit Post";
		$data['query'] = $this->post_model->getPostById($id);
		$data['mode'] = 'edit';
		$this->load->view('templates/header', $data);
		$this->load->view('posts/add_edit');
		$this->load->view('templates/footer');
	}

	public function update($id) {
		$data = array(
			'id' => $id,
			'title' => $this->input->post('title'),
			'captions' => $this->input->post('captions'),
			'url' => $this->input->post('url'),
			'author_id' => $this->session->userdata('id'),
		);
		if($this->input->post('title') == null && $this->input->post('url') == null) {
			redirect('posts/edit/'.$id);
		} else {
			$this->post_model->updatePost($data);
			redirect('user/dashboard');
		}
	}
}