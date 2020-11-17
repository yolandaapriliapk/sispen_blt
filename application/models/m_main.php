<?php

class m_main extends CI_Model
{
	function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('tb_admin');

		if ($query->row_array() > 0) {
			return true;
		} else {
			return false;
		}
	}

	// public function get_keyword($keyword){
	// 	$this->db->select('*');
	// 	$this->db->from('tb_blt2020','tb_kriteria');
	// 	$this->db->like('nama', $keyword);
	// 	$this->db->like('nik', $keyword);
	// 	$this->db->like('alamat', $keyword);
	// 	$this->db->like('bantuan_lain', $keyword);
	// 	$this->db->like('keluarga_sakit', $keyword);
	// 	$this->db->like('kriteria', $keyword);
	// 	$this->db->like('kategori', $keyword);
	// 	return $this->db->get()->result();
	// }
}
