<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

	/* Basic User Auth */
	public function masuk()
	{
		$data['title'] = "User Area - Login";
		$this->load->view('templates/header', $data);
		$this->load->view('user/login');
		$this->load->view('templates/footer');
	}

	public function daftar()
	{
		$data['title'] = "User Area - Register";
		$data['mode'] = 'register';
		$this->load->view('templates/header', $data);
		$this->load->view('user/register');
		$this->load->view('templates/footer');
	}

	public function register(){
		$data = array(
			'name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'email' => $this->input->post('email'),
			'institusi' => $this->input->post('institusi'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'created_at' => date('Y-m-j H:i:s'),
		);
		if($this->input->post('username') == null && $this->input->post('password') == null) {
			redirect('user/daftar');
		} else {
			$this->user_model->register($data);
			redirect('user/masuk');
		}
	}

	public function login() {
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$userdata = $this->user_model->login($data);
		$session_data = array(
			'id' => $userdata[0]->id,
			'username' => $userdata[0]->username,
			'name' => $userdata[0]->name,
			'logged_in' => 'true'
		);		
		$this->session->set_userdata($session_data);
		if($userdata) {
			redirect('/user/dashboard');
		} else {
			redirect('/user/masuk');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('/');
	}

	/* Function after Login */
	public function dashboard()
	{
		if(!$this->session->userdata('logged_in')) {
			redirect('user/masuk');
		} else {
			$data['title'] = "User Dashboard";
			$data['query'] = $this->post_model->getPostByAuthor($this->session->userdata('id'));
			$this->load->view('templates/header', $data);
			$this->load->view('user/dashboard');
			$this->load->view('templates/footer');
		}
	}

	public function view($id) 
	{
		$data['query'] = $this->post_model->getPostByAuthor($id);
		$data['profile'] = $this->user_model->getUserById($id);
		$data['title'] = "View - ".$data['profile'][0]->name;
		$this->load->view('templates/header', $data);
		$this->load->view('user/view');
		$this->load->view('templates/footer');
	}
}