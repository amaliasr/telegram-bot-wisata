<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_wisata2 extends CI_Model {

	public function getDataWisata()
	{
		$get="select * from wisata";
		$query = $this->db->query($get);
		return $query->result();
	}
	
	public function getData()
	{
		$query = $this->db->get('wisata');
		return $query->result();
	}

	public function getWisataId($id)
	{
		$this->db->where('idwisata',$id);
		$query = $this->db->get('wisata');
		return $query->result();
	}

	public function insertData()
	{
		$object = array
		(
			'nama_wisata' =>$this->input->post('nama_wisata'),
			'informasi' =>$this->input->post('informasi'),
		);
		
		$this->db->insert('wisata',$object);
	}

	public function UpdateById($id)
	{
		$data = array
		(
			'nama_wisata' 	=>$this->input->post('nama_wisata'),
			'informasi' 	=>$this->input->post('informasi'),
		);
		$this->db->where('idwisata', $id);
		$this->db->update('wisata', $data);
	}

	public function delete ($id)
	{
		$this->db->where('idwisata',$id);
		$this->db->delete('wisata');
	}
}