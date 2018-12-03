<?php


class Akun_M extends CI_Model
{
    public function daftar_akun($data)
    {
        $param = array(
            "name"=>$data['name'],
            "email"=>$data['email'],
            "username"=>$data['username'],
            "password"=>$data['password']
        );
        $insert = $this->db->insert('user', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function login_akun($data){
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);

        $result = $this->db->get('user');
        if($result->num_rows()==1){
            return $result->row(0);
        }else{
            return false;
        }
    }
}