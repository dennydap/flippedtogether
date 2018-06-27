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
}