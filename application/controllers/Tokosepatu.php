<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Tokosepatu extends CI_Controller
{   
    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Model_tokosepatu');
    }
    public function index()
    {
        $this->load->view('tokosepatu/v_input');
    }
    public function cetak()
    {
        $data=[
            'nama' => $this->input->post('nama'),
            'telp' => $this->input->post('telp'),
            'merk' => $this->input->post('merk'),
            'uk' => $this->input->post('uk'),
            'harga' => $this->Model_tokosepatu->proses($this->input->post('merk'))
            ];

        $this->load->view('tokosepatu/v_output', $data);
    }
}