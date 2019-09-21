<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class wisata extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_wisata');
        $this->load->helper('url','form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('header');
        $data['wisata'] = $this->model_wisata->tampil_data()->result();
        $this->load->view('wisata/view_wisata',$data);
        $this->load->view('wisata/footer');
    }

    public function data_server()
    {
        $this->load->library('Datatables');
        $this->load->view('header');
        $this->load->view('wisata/footer');
        $this->datatables->select('wisata.idwisata, wisata.nama_wisata, wisata.informasi');
        $this->datatables ->select('idwisata,nama_wisata,informasi') ->from('wisata');
        
        echo $this->datatables->generate();
    }

    public function create()
    {
        
        $this->form_validation->set_rules('nama_wisata', 'nama_wisata', 'trim|required');
        $this->form_validation->set_rules('informasi', 'informasi', 'trim|required');


        if ($this->form_validation->run()==FALSE) {
            $this->load->view('header');
            $this->load->view('wisata/create_wisata', $data);
            $this->load->view('wisata/footer');
        }
        else{
            $this->model_wisata->insertData();
            redirect('wisata','refresh');
            $this->load->view('header');
        $this->load->view('wisata/footer');
        }
    }

    public function update($id)
    {
        $this->form_validation->set_rules('nama_wisata', 'nama_wisata', 'trim|required');
        $this->form_validation->set_rules('informasi', 'informasi', 'trim|required');
    
        $data['wisata'] = $this->model_wisata->getwisataId($id);


        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('header');
            $this->load->view('wisata/edit_wisata', $data);
            $this->load->view('wisata/footer');

        }

        else{

            $this->model_wisata->UpdateById($id);
            $data['wisata'] = $this->model_wisata->tampil_data()->result();
            redirect('wisata','refresh');
            $this->load->view('wisata/footer');
            $this->load->view('header');
        $this->load->view('wisata/footer');

        }
            
    }

    public function delete($id)
    {
        $this->model_wisata->delete($id);
        redirect('wisata','refresh');
        $this->load->view('wisata/footer');
        $this->load->view('header');
    }

    public function getUpdate($id)
    {

        $this->db->select('wisata.idwisata, wisata.nama_wisata, wisata.informasi');
            $this->db->from('wisata');
            $this->db->where('idwisata',$id);
            $query = $this->db->get();
            return $query->result();
            $this->load->view('wisata/footer');
            $this->load->view('header');
    }

}

?>
