<?php

class c_blt2020 extends CI_Controller{

	public function index()
	{
		// $config['base_url'] 	= site_url('c_administrator/c_blt2020/index');
		// $config['total_rows'] 	= $this->db->count_all('tb_blt2020');
		// $config['per_page'] 	= 4;
		// $config['uri_segment'] 	= 4;
		// $choice 				= $config["total_rows"] / $config['per_page'];
		// $config["num_links"] 	= floor($choice);

		// $config['first_link'] 		= 'First';
		// $config['last_link'] 		= 'Last';
		// $config['next_link'] 		= 'Next';
		// $config['prev_link'] 		= 'Prev';
		// $config['full_tag_open'] 	= '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		// $config['full_tag_close'] 	= '</ul></nav></div>';
		// $config['num_tag_open'] 	= '<li class="page-item"><span class="page-link">';
		// $config['num_tag_close']	= '</span></li>';
		// $config['cur_tag_open']		= '<li class="page-item active"><span class="page-link">';
		// $config['cur_tag_close']	= '</span></li>';
		// $config['next_tag_open']	= '<li class="page-item"><span class="page-link">';
		// $config['next_tagl_close']	= '<span aria-hidden="true">&raquo</span></span></li>';
		// $config['prev_tag_open']	= '<li class="page-item"><span class="page-link">';
		// $config['prev_tagl_close']	= '</span>Next</li>';
		// $config['first_tag_open']	= '<li class="page-item"><span class="page-link">';
		// $config['first_tagl_close']	= '</span></li>';
		// $config['last_tag_open']	= '<li class="page-item"><span class="page-link">';
		// $config['last_tagl_close']	= '</span></li>';

		// $this->pagination->initialize($config);
		// $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;

		// $data['blt2020'] = $this->m_blt2020->tampil_blt2020($config["per_page"], $data['page'])->result();
		// $data ['pagination'] = $this->pagination->create_links();

		$data['blt2020'] = $this->m_blt2020->tampil_blt2020();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('v_administrator/v_blt2020',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_blt2020()
	{
		$data ['kbantuanlain'] = $this->m_kblain->tampil_kblain()->result();

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('v_administrator/v_tambah_blt2020',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function simpan_blt2020()
	{
		$this->rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_blt2020();
		} else {
			$data = array(
				'nama' => $this->input->post('nama', TRUE),
				'nik' => $this->input->post('nik', TRUE),
				'alamat' => $this->input->post('alamat', TRUE),
				'id_kblain' => $this->input->post('k_bantuanlain', TRUE),
			);

			$this->m_blt2020->tambah_blt2020($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
					Data BLT 2020 Berhasil Ditambahkan 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
			redirect('c_administrator/c_blt2020');
		}
	}

	public function rules()
	{
		$this->form_validation->set_rules('nama','nama','required',['required' => 'Nama wajib diisi']);
		$this->form_validation->set_rules('nik','nik','required',['required' => 'NIK wajib diisi']);
		$this->form_validation->set_rules('alamat','alamat','required',['required' => 'Alamat wajib diisi']);
	}

	public function update($id_blt2020)
	{
		$where = array('id_blt2020' => $id_blt2020);

		$data ['kbantuanlain'] = $this->m_kblain->tampil_kblain()->result();
		$data['blt2020'] = $this->m_blt2020->edit_blt2020($where, 'tb_blt2020')->result();

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('v_administrator/v_edit_blt2020', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function update_blt2020()
	{
		$id_blt2020 = $this->input->post('id_blt2020');	
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$alamat = $this->input->post('alamat');
		$id_kblain = $this->input->post('k_bantuanlain');
		$data = array(																
			'nama' => $nama,
			'nik' => $nik,
			'alamat' => $alamat,
			'id_kblain' => $k_bantuanlain,
		);

		$where = array(																
			'id_blt2020' => $id_blt2020
		);

		$this->m_blt2020->update_blt2020($where, $data, 'tb_blt2020');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
					Data BLT 2020 Berhasil Diupdate 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');		
		redirect('c_administrator/c_blt2020');									
	}

	public function delete($id_blt2020)
	{
		$where = array('id_blt2020' => $id_blt2020);
		$this->m_blt2020->hapus_blt2020($where, 'tb_blt2020');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
					Data BLT 2020 Berhasil Dihapus 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
		redirect('c_administrator/c_blt2020');	
	}

	// public function search(){
	// 	$keyword = $this->input->post('keyword');
	// 	$data['blt2020'] = $this->m_blt2020->get_keyword($keyword);
	// 	$this->load->view('templates_administrator/header');
	// 	$this->load->view('templates_administrator/sidebar');
	// 	$this->load->view('v_administrator/v_blt2020',$data);
	// 	$this->load->view('templates_administrator/footer');
	// }

}