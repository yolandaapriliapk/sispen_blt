<?php

class c_kriteria extends CI_Controller{

	public function index()
	{
		$config['base_url'] 	= site_url('c_administrator/c_kriteria/index');
		$config['total_rows'] 	= $this->db->count_all('tb_kriteria');
		$config['per_page'] 	= 5;
		$config['uri_segment'] 	= 4;
		$choice 				= $config["total_rows"] / $config['per_page'];
		$config["num_links"] 	= floor($choice);

		$config['first_link'] 		= 'First';
		$config['last_link'] 		= 'Last';
		$config['next_link'] 		= 'Next';
		$config['prev_link'] 		= 'Prev';
		$config['full_tag_open'] 	= '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] 	= '</ul></nav></div>';
		$config['num_tag_open'] 	= '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']	= '</span></li>';
		$config['cur_tag_open']		= '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']	= '</span></li>';
		$config['next_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']	= '<span aria-hidden="true">&raquo</span></span></li>';
		$config['prev_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']	= '</span>Next</li>';
		$config['first_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close']	= '</span></li>';
		$config['last_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']	= '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) :0;

		$data['kriteria'] = $this->m_kriteria->tampil_kriteria($config["per_page"], $data['page'])->result();
		$data ['pagination'] = $this->pagination->create_links();

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('v_administrator/v_kriteria',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_kriteria()
	{
		$data = array(
			'kriteria' => set_value('kriteria'),
			'kategori' => set_value('kategori'),
		);
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('v_administrator/v_tambah_kriteria',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function simpan_kriteria()
	{
		$this->rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_kriteria();
		} else {
			$data = array(
				'kriteria' => $this->input->post('kriteria', TRUE),
				'kategori' => $this->input->post('kategori', TRUE),
			);

			$this->m_kriteria->tambah_kriteria($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
					Data Kriteria Berhasil Ditambahkan 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
			redirect('c_administrator/c_kriteria');
		}
	}

	public function rules()
	{
		$this->form_validation->set_rules('kriteria','kriteria','required',['required' => 'Kriteria wajib diisi']);
		$this->form_validation->set_rules('kategori','kategori','required',['required' => 'Kategori wajib diisi']);
	}

	public function update($no)
	{
		$where = array('no' => $no);
		$data['kriteria'] = $this->m_kriteria->edit_kriteria($where, 'tb_kriteria')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('v_administrator/v_edit_kriteria', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function update_kriteria()
	{
		$no = $this->input->post('no');								
		$kriteria = $this->input->post('kriteria');
		$kategori = $this->input->post('kategori');

		$data = array(																
			'kriteria' => $kriteria,
			'kategori' => $kategori,
		);

		$where = array(																
			'no' => $no
		);

		$this->m_kriteria->update_kriteria($where, $data, 'tb_kriteria');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
					Data Kriteria 2020 Berhasil Diupdate 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');		
		redirect('c_administrator/c_kriteria');														
	}

	public function delete($no)
	{
		$where = array('no' => $no);
		$this->m_kriteria->hapus_kriteria($where, 'tb_kriteria');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
					Data Kriteria 2020 Berhasil Dihapus 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
		redirect('c_administrator/c_kriteria');	
	}

}