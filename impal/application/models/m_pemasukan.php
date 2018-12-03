<?php
Class m_pemasukan extends CI_Model
{
	public function getAllpemasukan(){
		$query = $this->db->get('pemasukan');
		return $query->result_array();
	}

	public function insert($data)
	{
		return $this->db->insert('pemasukan',$data);
	}
	public function getpemasukan($id)
	{
		$this->db->where('id_pemasukan',$id);
		$query = $this->db->get('pemasukan');
		return $query->row_array();
	}
	public function update($id,$data)
	{
		$this->db->where('id_pemasukan',$id);
		return $this->db->update('pemasukan',$data);
	}
	public function delete($id)
	{
		$this->db->where('id_pemasukan',$id);
		$this->db->delete('pemasukan');
	}
}