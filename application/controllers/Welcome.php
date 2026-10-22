<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct(){
        parent::__construct();
        // Memuat model m_rental secara otomatis
        $this->load->model('m_rental');
    }

    public function index(){
        $this->load->view('login');
    }

    function login(){
        // Menangkap data dari form input
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        // Aturan validasi form
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() != false){
            // Membuat array kondisi untuk query ke database
            $where = [
                'admin_username' => $username, 
                'admin_password' => md5($password) // Enkripsi MD5 sesuai database
            ];
            
            // Mencari data ke tabel admin melalui model m_rental
            $data = $this->m_rental->edit_data($where, 'admin');
            $cek = $data->num_rows();
            
            if($cek > 0){
                $res = $data->row();
                
                // Menyusun data session
                $session = [
                    'id' => $res->admin_id, 
                    'nama' => $res->admin_nama, 
                    'status' => 'login'
                ];
                $this->session->set_userdata($session);
                
                // Redirect ke halaman dashboard admin jika sukses
                redirect(base_url().'admin');
            } else {
                // Jika data tidak cocok, kembali ke login dengan pesan gagal
                redirect(base_url().'welcome?pesan=gagal');
            }
        } else {
            // Jika validasi form gagal, kembali tampilkan halaman login
            $this->load->view('login');
        }
    }
}