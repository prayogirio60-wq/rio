<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Toko_model extends CI_Model
{
    function lihat_data()
    {
        return $this->db->get('produk'); 
    }
    function get_by_id($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        return $this->db->get('produk');
    }
    function simpan_data($data)
    {
        $ins = $this->db->insert('produk', $data);
        return $ins;
    }
    function hapus_data($idproduk)
    {
        $this->db->where('id_produk', $idproduk);
        $this->db->delete('produk');
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
