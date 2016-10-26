<?php

class Admin_function extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function get_item_row($userId, $table, $status){
    $this->db->where("user = '".$userId."' and status = '".$status."'");
    $query = $this->db->get($table);
    return $query->num_rows();
  }

  public function get_item_by_user($userId, $table, $otherStatement){
    $this->db->where("user = '".$userId."' ");
    $query = $this->db->get($table);
    return $query->result_array();
  }

}

?>
