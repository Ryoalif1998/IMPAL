<?php

class Akun_C extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Akun_M');
    }
    public function index()
    {
        $this->load->view('login');
    }

    public function daftar_view()
    {
        $this->load->view('register');
    }

    public function daftar_akun()
    {
//        lanjutkan fungsi ini untuk menghubungkan ke model Akun_M
        $data = $this->input->post(null,TRUE);
        $insert = $this->Akun_M->daftar_akun($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_daftar');
            //isi dengan flash data disini
            redirect('Akun_C/index');
        }else{
            echo "<script>alert('Gagal Daftar');</script>";
            //echo javascript alert disini untuk penanda kalo gagal
        }

    }

    public function cek_login()
    {
        $data = $this->input->post(null,TRUE);
        $login= $this->Akun_M->login_akun($data);
        if($login){
            $sess_data = array(
                'logged_in' => "Sudah Login",
                'username' => $login->username,
                'level' => "Admin"
            );
//            isi dengan session data , terus di set sessionnya
            $this->session->set_userdata($sess_data);
            redirect('Cberanda');
        }else{
            //isi dengan flash data disini untuk memberi tau alert ke View
            $this->session->set_flashdata('alert', 'gagal_login');
            redirect('Akun_C');

        }

    }

    public function logout(){
        //isi dengan sess_destroy
        $this->session->sess_destroy();
        redirect(site_url('Akun_C/index'));
    }
}