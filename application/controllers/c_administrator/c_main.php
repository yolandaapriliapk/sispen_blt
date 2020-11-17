<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_main extends CI_Controller
{
	public function index()
	{
		$this->load->view('v_administrator/v_login');
	}

	function login()
	{
		$this->load->view('v_administrator/v_login');
	}

	function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
			//true
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//model function
			$this->load->model('m_main');
			if($this->m_main->can_login($username, $password))
			{
				$session_data = array(
					'username' => $username
				);
				$this->session->set_userdata($session_data);
				redirect(base_url('c_administrator/c_main/enter'));
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid username and password');
				redirect(base_url('c_administrator/c_main/login'));
			}
		}
		else
		{
			//false
			$this->login();
		}
	}

	function enter()
	{
		if($this->session->userdata('username') != '')
		{
			redirect(base_url('c_administrator/c_dashboard'));
		}
		else
		{
			redirect(base_url('c_administrator/c_main/login'));	
		}
	}

	function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url('c_administrator/c_main/login'));
	}
}
