<?php

class m_blt2020 extends CI_Model{

	public function tampil_blt2020()
	{
		$this->db->select('*');
		$this->db->from('tb_blt2020');
	    $this->db->join('tb_kbantuanlain', 'tb_kbantuanlain.id_kblain = tb_blt2020.id_kblain');
		$query = $this->db->get();
		return $query->result_array();
		// $query = $this->db->get('tb_blt2020', $limit, $start);
		// return $query;
		//return $this->db->get('tb_blt2020', $limit, $start);
	}

	public function tambah_blt2020($data)				
	{
		$this->db->insert('tb_blt2020', $data);										
	}	

	public function edit_blt2020($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_blt2020($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

		public function hapus_blt2020($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// public function get_keyword($keyword){
	// 	$this->db->select('*');
	// 	$this->db->from('tb_blt2020');
	// 	$this->db->like('nama', $keyword);
	// 	$this->db->or_like('nik', $keyword);
	// 	$this->db->or_like('alamat', $keyword);
	// 	$this->db->or_like('bantuan_lain', $keyword);
	// 	$this->db->or_like('keluarga_sakit', $keyword);
	// $this->db->or_like('lantai', $keyword);
	// $this->db->or_like('dinding', $keyword);
	// 	return $this->db->get()->result();
	// }
}