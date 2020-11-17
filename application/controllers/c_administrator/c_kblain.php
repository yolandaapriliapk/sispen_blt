<?php

class c_kblain extends CI_Controller{

	public function index()
	{
		$data['kbantuanlain'] = $this->m_kblain->tampil_kblain()->result();

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('v_administrator/v_kblain',$data);
		$this->load->view('templates_administrator/footer');
	}
}