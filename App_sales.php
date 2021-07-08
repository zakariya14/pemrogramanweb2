<?php
defined('BASEPATH') or exit('No direct script access allowed');
class App_sales extends CI_Model
{
  public function DataLogin($usr, $psw)
  {
    $cek = $this->db->get_where('tabel_user', array('username_user' => $usr, 'password_user' => $psw));
    if (count($cek->result()) > 0) {
      $sess_data['log'] = 'okAkuLogin';
      $sess_data['namaUser'] = $cek->nama_user;
      $this->session->set_userdata($sess_data);
      redirect('dashboard');
    } else {
      $this->session->set_flashdata('kesalahan_login', 'Username atau Password yang anda masukkan salah!');
      redirect('login');
    }
  }
}
