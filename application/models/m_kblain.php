<?php

class m_kblain extends CI_Model{

	public function tampil_kblain()
	{
		return $this->db->get('tb_kbantuanlain');
	}
}
