<?php
Class m_pengeluaran extends CI_Model
{
	public function getAllpengeluaran(){
		$query = $this->db->get('pengeluaran');
		return $query->result_array();
	}

	public function insert($data)
	{
		return $this->db->insert('pengeluaran',$data);
	}
	public function getpengeluaran($id)
	{
		$this->db->where('id_pengeluaran',$id);
		$query = $this->db->get('pengeluaran');
		return $query->row_array();
	}
	public function update($id,$data)
	{
		$this->db->where('id_pengeluaran',$id);
		return $this->db->update('pengeluaran',$data);
	}
	public function delete($id)
	{
		$this->db->where('id_pengeluaran',$id);
		$this->db->delete('pengeluaran');
	}
}