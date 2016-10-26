<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('load_data');
			$this->load->helper('url_helper');

	}

	public function index()
	{
		$data['news'] = $this->load_data->fetch_index();
		$this->db->limit(4, 0);
		$this->db->order_by('post_date', 'desc');
		$query_tuts = $this->db->get('tutorial');
		$data['tutorial'] = $query_tuts->result_array();

    $this->load->view('templates/home-header.php');
		$this->load->view('home/index.php', $data);
    $this->load->view('templates/home-footer.php');
	}

	public function pages_news($id = NULL)
	{
		// $data['article'] = $this->load_data->fetch_article();
		if(empty($id)){
			$id=0;
		}

		$jml = $this->db->get('news');

		$config['base_url'] = base_url().'news/pages/';
		$config['total_rows'] = $jml->num_rows();
	  $config['per_page'] = '9';
	  $config['next_page'] = '&laquo;';
	  $config['prev_page'] = '&raquo;';

	//inisialisasi config
	  $this->pagination->initialize($config);

	//buat pagination
	  $data['halaman'] = $this->pagination->create_links();

	//tamplikan data
	  $data['news'] = $this->load_data->fetch_news_pages($config['per_page'], $id);


		$data['title'] = "Contact Us";
		$this->load->view('templates/home-header.php', $data);
		$this->load->view('home/news.php', $data);
    $this->load->view('templates/home-footer.php');
	}

	public function news($slug = FALSE)
	{
		if($slug === FALSE)
		{
			$jml = $this->db->get('news');

			$config['base_url'] = base_url().'news/pages/';
			$config['total_rows'] = $jml->num_rows();
		  $config['per_page'] = '9';
		  $config['next_page'] = '&laquo;';
		  $config['prev_page'] = '&raquo;';

		  $this->pagination->initialize($config);

		  $data['halaman'] = $this->pagination->create_links();
		  $data['news'] = $this->load_data->fetch_news($slug);
			// $data['']

	    $this->load->view('templates/home-header.php');
			$this->load->view('home/news.php', $data);
	    $this->load->view('templates/home-footer.php');
		}else{
			$this->db->where('slug', $slug);
	 		$this->db->set('views', '`views`+1', FALSE);
 		 $this->db->update('news');

			$this->db->order_by('views', 'desc');
			$this->db->limit(0, 5);
			$top_articles = $this->db->get('news');
			$data['top'] = $top_articles->result_array();
		  $data['news'] = $this->load_data->fetch_news($slug);
			$data['title'] = "Contact Us";
			$this->load->view('templates/home-header.php', $data);
			$this->load->view('home/read.php', $data);
	    $this->load->view('templates/home-footer.php');
		}

	}

	public function pages_tutorial($id = NULL)
	{
		// $data['article'] = $this->load_data->fetch_article();
		if(empty($id)){
			$id=0;
		}

		$jml = $this->db->get('tutorial');

		$config['base_url'] = base_url().'tutorial/pages/';
		$config['total_rows'] = $jml->num_rows();
	  $config['per_page'] = '9';
	  $config['next_page'] = '&laquo;';
	  $config['prev_page'] = '&raquo;';

	//inisialisasi config
	  $this->pagination->initialize($config);

	//buat pagination
	  $data['halaman'] = $this->pagination->create_links();

	//tamplikan data
	  $data['tutorial'] = $this->load_data->fetch_tutorial_pages($config['per_page'], $id);


		$data['title'] = "Contact Us";
		$this->load->view('templates/home-header.php', $data);
		$this->load->view('home/tutorial.php', $data);
    $this->load->view('templates/home-footer.php');
	}

	public function tutorial($slug = FALSE)
	{
		if($slug === FALSE)
		{
			$jml = $this->db->get('tutorial');

			$config['base_url'] = base_url().'tutorial/pages/';
			$config['total_rows'] = $jml->num_rows();
		  $config['per_page'] = '9';
		  $config['next_page'] = '&laquo;';
		  $config['prev_page'] = '&raquo;';

		  $this->pagination->initialize($config);

		  $data['halaman'] = $this->pagination->create_links();
		  $data['tutorial'] = $this->load_data->fetch_tutorial($slug);
			// $data['']

			$data['title'] = "Contact Us";
			$this->load->view('templates/home-header.php', $data);
			$this->load->view('home/tutorial.php', $data);
	    $this->load->view('templates/home-footer.php');
		}else{
			$this->db->where('slug', $slug);
			$this->db->set('views', '`views`+1', FALSE);
			$this->db->update('tutorial');

			$this->db->order_by('views', 'desc');
			$this->db->limit(0, 5);
			$top_articles = $this->db->get('tutorial');
			$data['top'] = $top_articles->result_array();
		  $data['tutorial'] = $this->load_data->fetch_tutorial($slug);
			$data['title'] = "Contact Us";
			$this->load->view('templates/home-header.php', $data);
			$this->load->view('home/read_tutorial.php', $data);
	    $this->load->view('templates/home-footer.php');
		}

	}

	public function open_contact(){
		$data['title'] = "Contact Us";
		$this->load->view('templates/home-header.php', $data);
		$this->load->view('home/contact-us.php');
		$this->load->view('templates/home-footer.php');
	}

}
