<?php

class m_kriteria extends CI_Model{

	public function tampil_kriteria($limit, $start)
	{
		$query = $this->db->get('tb_kriteria', $limit, $start);
		return $query;
		//return $this->db->get('tb_blt2020', $limit, $start);
	}

	public function tambah_kriteria($data)				
	{
		$this->db->insert('tb_kriteria', $data);										
	}	

	public function edit_kriteria($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_kriteria($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

		public function hapus_kriteria($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}