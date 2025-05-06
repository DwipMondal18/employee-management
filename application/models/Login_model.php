<?php
class Login_model extends CI_Model {

  public function check_login($username, $password, $name) {
    $this->db->where('user_name', $username);
    $this->db->where('name', $name);
    $query = $this->db->get('login_details');
  
    $user = $query->row();
    if ($user && password_verify($password, $user->password)) {
      return $user;
    }
    return false;
  }
  
  


}
