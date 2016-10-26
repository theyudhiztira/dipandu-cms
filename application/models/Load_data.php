<?php

/**
 * Class untuk load data
 */
class Load_data extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function fetch_index()
  {
    $this->db->limit(3, 0);
    $this->db->order_by('post_date', 'desc');
    $query_news = $this->db->get('news');
    return $query_news->result_array();
  }

  public function fetch_news($slug = FALSE)
  {
    $this->db->order_by('post_date', 'desc');
    if($slug === FALSE)
    {
      $this->db->limit(9, 0);
    }else{
      $this->db->where('slug', $slug);
    }

    $query_news = $this->db->get('news');
    return $query_news->result_array();
  }

  public function fetch_news_pages($num, $offset)
  {
    $this->db->order_by('post_date', 'desc');
    $query_news = $this->db->get('news', $num, $offset);
    return $query_news->result_array();
  }

  public function fetch_index_tutorial()
  {
    $this->db->limit(3, 0);
    $this->db->order_by('post_date', 'desc');
    $query_tutorial = $this->db->get('tutorial');
    return $query_tutorial->result_array();
  }

  public function fetch_tutorial($slug = FALSE)
  {
    $this->db->order_by('post_date', 'desc');
    if($slug === FALSE)
    {
      $this->db->limit(9, 0);
    }else{
      $this->db->where('slug', $slug);
    }

    $query_tutorial = $this->db->get('tutorial');
    return $query_tutorial->result_array();
  }

  public function fetch_tutorial_pages($num, $offset)
  {
    $this->db->order_by('post_date', 'desc');
    $query_tutorial = $this->db->get('tutorial', $num, $offset);
    return $query_tutorial->result_array();

  }
}

?>
