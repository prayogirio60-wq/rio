<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vendor extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Distributor_model');
        $this->load->helper('url');
    }
    public function index() {
        $data['vendor'] = $this->Distributor_model->get_all_vendor()->result();
        $this->load->view('tamplate/head');
        $this->load->view('tamplate/navbar');
        $this->load->view('tamplate/sidebar');
        $this->load->view('vendor/index', $data);
        $this->load->view('tamplate/footbar');
    }
    public function tambah() {
        $this->load->view('tamplate/head');
        $this->load->view('tamplate/navbar');
        $this->load->view('tamplate/sidebar');
        $this->load->view('vendor/tambah');
        $this->load->view('tamplate/footbar');
    }
    public function simpan() {
        $data = array(
            'kode_vendor'  => $this->input->post('kode_vendor'),
            'nama_vendor'  => $this->input->post('nama_vendor'),
            'alamat'       => $this->input->post('alamat'),
            'kota'         => $this->input->post('kota'),
            'created_at'   => date('Y-m-d H:i:s'),
            'created_by'   => 'admin'
        );
        $this->Distributor_model->simpan_vendor($data);
        $this->session->set_flashdata('success', 'Vendor berhasil ditambahkan!');
        redirect('vendor');
    }
    public function edit($id) {
        $data['vendor'] = $this->Distributor_model->get_vendor_by_id($id)->row();
        $this->load->view('tamplate/head');
        $this->load->view('tamplate/navbar');
        $this->load->view('tamplate/sidebar');
        $this->load->view('vendor/edit', $data);
        $this->load->view('tamplate/footbar');
    }
    public function update() {
        $id   = $this->input->post('id');
        $data = array(
            'kode_vendor' => $this->input->post('kode_vendor'),
            'nama_vendor' => $this->input->post('nama_vendor'),
            'alamat'      => $this->input->post('alamat'),
            'kota'        => $this->input->post('kota'),
        );
        $this->Distributor_model->update_vendor($id, $data);
        $this->session->set_flashdata('success', 'Vendor berhasil diupdate!');
        redirect('vendor');
    }
    public function hapus($id) {
        $this->Distributor_model->hapus_vendor($id);
        $this->session->set_flashdata('success', 'Vendor berhasil dihapus!');
        redirect('vendor');
    }
}
