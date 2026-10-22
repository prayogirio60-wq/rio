<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Produk extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Distributor_model');
        $this->load->helper('url');
    }
    public function index() {
        $data['produk'] = $this->Distributor_model->get_all_produk()->result();
        $this->load->view('tamplate/head');
        $this->load->view('tamplate/navbar');
        $this->load->view('tamplate/sidebar');
        $this->load->view('produk_dist/index', $data);
        $this->load->view('tamplate/footbar');
    }
    public function tambah() {
        $this->load->view('tamplate/head');
        $this->load->view('tamplate/navbar');
        $this->load->view('tamplate/sidebar');
        $this->load->view('produk_dist/tambah');
        $this->load->view('tamplate/footbar');
    }
    public function simpan() {
        // Validasi kode produk unik
        $kode = $this->input->post('kode_produk');
        if ($this->Distributor_model->cek_kode_produk($kode) > 0) {
            $this->session->set_flashdata('error', 'Kode produk sudah ada! Gunakan kode lain.');
            redirect('produk_dist/tambah');
            return;
        }
        $data = array(
            'kode_produk'  => $kode,
            'nama_produk'  => $this->input->post('nama_produk'),
            'stok'         => $this->input->post('stok'),
            'harga'        => $this->input->post('harga'),
            'created_at'   => date('Y-m-d H:i:s'),
            'created_by'   => 'admin'
        );
        $this->Distributor_model->simpan_produk($data);
        $this->session->set_flashdata('success', 'Produk berhasil ditambahkan!');
        redirect('produk');
    }
    public function edit($id) {
        $data['produk'] = $this->Distributor_model->get_produk_by_id($id)->row();
        $this->load->view('tamplate/head');
        $this->load->view('tamplate/navbar');
        $this->load->view('tamplate/sidebar');
        $this->load->view('produk_dist/edit', $data);
        $this->load->view('tamplate/footbar');
    }
    public function update() {
        $id   = $this->input->post('id');
        $kode = $this->input->post('kode_produk');
        // Cek kode unik (kecuali milik sendiri)
        if ($this->Distributor_model->cek_kode_produk($kode, $id) > 0) {
            $this->session->set_flashdata('error', 'Kode produk sudah digunakan produk lain!');
            redirect('produk/edit/' . $id);
            return;
        }
        $data = array(
            'kode_produk' => $kode,
            'nama_produk' => $this->input->post('nama_produk'),
            'stok'        => $this->input->post('stok'),
            'harga'       => $this->input->post('harga'),
        );
        $this->Distributor_model->update_produk($id, $data);
        $this->session->set_flashdata('success', 'Produk berhasil diupdate!');
        redirect('produk');
    }
    public function hapus($id) {
        $this->Distributor_model->hapus_produk($id);
        $this->session->set_flashdata('success', 'Produk berhasil dihapus!');
        redirect('produk');
    }
}
