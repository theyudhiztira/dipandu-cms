<?php

class Login_function extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function check_login($details = FALSE)
  {
    $this->db->where("username = '".$details['username']."' and password = '".sha1($details['password'])."'");
    $query = $this->db->get('user');
    return $query->num_rows();
  }

  public function get_user_data($username = FALSE)
  {
    $this->db->where("username = '".$username."'");
    $query = $this->db->get('user');

   foreach ($query->row() as $key) {
      $uData[]=$key;
    }

    return $uData;
  }

  public function set_userSession($username = FALSE){
    $userData = $this->get_user_data($username);

    $session_data = array(
      'userid' => $userData[0],
      'username' => $userData[1],
      'fName' => $userData[8],
      'lName' => $userData[9],
      'email' => $userData[2],
      'level' => $userData[7],
      'userIP' => $this->input->ip_address(),
      'lastLogin' => $userData[5]
    );
    $this->session->set_userdata($session_data);
  }

}

?>
