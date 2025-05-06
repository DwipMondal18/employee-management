<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Login_model');
    $this->load->library('session');
  }

  public function index() {
    $this->load->view('login_view');
  }

  public function login() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $name     = $this->input->post('name');
  
    $user = $this->Login_model->check_login($username, $password, $name);
    if ($user) {
      $this->session->set_userdata('user_id', $user->id);
      $this->session->set_userdata('user_name', $user->name);
      redirect('employee');
    } else {
      $this->session->set_flashdata('error', 'Invalid credentials');
      redirect('auth');
    }
  }
  

  public function logout() {
    $this->session->sess_destroy();
    redirect('auth');
  }



}
