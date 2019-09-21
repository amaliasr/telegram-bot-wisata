<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_wisata extends CI_Model {

	/*wisata*/
	
	public function tampil_data()
	{
		return $this->db->get('wisata');
	}

	public function getwisataId($id)
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
			'nama_wisata' =>$this->input->post('nama_wisata'),
			'informasi' =>$this->input->post('informasi'),

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
