<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Wisata2 extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_wisata2');
        $this->load->helper('url','form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('Batu/header');
        $data['wisata']=$this->model_wisata2->getDataWisata();
        $this->load->view('Batu/home',$data);
        $this->load->view('Batu/footer');

    }
    public function data_server()
    {
        $this->load->library('Datatables');
        $this->datatables
            ->select('idwisata, nama_wisata, informasi')
            ->from('wisata');
        echo $this->datatables->generate();
    }

    public function create()
    {
        $this->form_validation->set_rules('nama_wisata', 'nama_wisata', 'trim|required');
        $this->form_validation->set_rules('informasi', 'informasi', 'trim|required');

        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('Batu/header');
            $this->load->view('Batu/create_wisata');
            $this->load->view('Batu/footer');
        }
        else{
            $this->model_wisata2->insertData();
            redirect('Wisata2','refresh');
        }
    }

    public function edit($id_wisata)
    {
        $this->form_validation->set_rules('nama_wisata', 'nama_wisata', 'trim|required');
        $this->form_validation->set_rules('informasi', 'informasi', 'trim|required');

         $data['Wisata2'] = $this->model_wisata2->getWisataId($id_wisata);

        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('Batu/header');
            $this->load->view('Batu/edit_wisata', $data);
            $this->load->view('Batu/footer');
        }
        else{

            $this->model_wisata2->UpdateById($id_wisata);
            redirect('Wisata2','refresh');
        }       
    }

    public function delete($id)
    {
        $this->model_wisata2->delete($id);
        redirect('Wisata2','refresh');
    }

}
