<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distributor_model extends CI_Model {

    private $db2;

    public function __construct() {
        parent::__construct();
        // Connect ke database distributor yang berbeda
        $this->db2 = $this->load->database('distributor', TRUE);
    }

    // ===== PRODUK =====
    function get_all_produk() {
        return $this->db2->get('produk');
    }
    function get_produk_by_id($id) {
        $this->db2->where('id', $id);
        return $this->db2->get('produk');
    }
    function cek_kode_produk($kode, $exclude_id = null) {
        $this->db2->where('kode_produk', $kode);
        if ($exclude_id) $this->db2->where('id !=', $exclude_id);
        return $this->db2->get('produk')->num_rows();
    }
    function simpan_produk($data) {
        return $this->db2->insert('produk', $data);
    }
    function update_produk($id, $data) {
        $this->db2->where('id', $id);
        return $this->db2->update('produk', $data);
    }
    function hapus_produk($id) {
        $this->db2->where('id', $id);
        return $this->db2->delete('produk');
    }

    // ===== VENDOR =====
    function get_all_vendor() {
        return $this->db2->get('vendor');
    }
    function get_vendor_by_id($id) {
        $this->db2->where('id', $id);
        return $this->db2->get('vendor');
    }
    function simpan_vendor($data) {
        return $this->db2->insert('vendor', $data);
    }
    function update_vendor($id, $data) {
        $this->db2->where('id', $id);
        return $this->db2->update('vendor', $data);
    }
    function hapus_vendor($id) {
        $this->db2->where('id', $id);
        return $this->db2->delete('vendor');
    }

    // ===== BARANG MASUK =====
    function get_all_barangmasuk() {
        $this->db2->select('barangmasuk.*, vendor.nama_vendor, produk.nama_produk, produk.kode_produk');
        $this->db2->from('barangmasuk');
        $this->db2->join('vendor', 'vendor.id = barangmasuk.id_vendor', 'left');
        $this->db2->join('produk', 'produk.id = barangmasuk.id_barang', 'left');
        $this->db2->order_by('barangmasuk.id', 'DESC');
        return $this->db2->get();
    }
    function simpan_barangmasuk($data) {
        return $this->db2->insert('barangmasuk', $data);
    }
}
