<?php

class c_dashboard extends CI_Controller{

	public function index()
	{
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('v_administrator/v_dashboard');
		$this->load->view('templates_administrator/footer');
	}

	// public function search(){
	// 	$keyword = $this->input->post('keyword');
	// 	$data['blt2020'] = $this->m_main->get_keyword($keyword);
	// 	$data['kriteria'] = $this->m_main->get_keyword($keyword);
	// 	$this->load->view('templates_administrator/header');
	// 	$this->load->view('templates_administrator/sidebar');
	// 	$this->load->view('v_administrator/v_dashboard', $data);
	// 	$this->load->view('templates_administrator/footer');
	// }
}
