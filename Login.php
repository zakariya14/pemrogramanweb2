<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
  public function index()
  {
    $this->load->view('login');
  }

  public function log_in()
  {
    $u = $this->input->post('user');
    $p = md5($this->input->post('pass'));
    $this->app_sales->DataLogin($u, $p);
  }
}
