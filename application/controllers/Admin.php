<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('login_function');
			$this->load->model('admin_function');
			$this->load->helper('url_helper');
			$this->load->library('session');
	}

	public function index()
	{
		$userSession = $this->session->all_userdata();
		if(empty($userSession['username'])){
			$this->load->view('templates/admin-header-login.php');
			$this->load->view('admin/login.php');
	    $this->load->view('templates/admin-footer-login.php');
		}else{
			$userSession_get = $this->session->userdata();
			redirect(base_url('dp-admin/dashboard'));
		}

	}

	public function login()
	{
		$details = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		$data = array('status' => $this->login_function->check_login($details) );


		if($data['status'] < 1){
			$userSession = $this->session->all_userdata();
			if(empty($userSession['username'])){
				$data['status'] = 0;

				$this->load->view('templates/admin-header-login.php');
				$this->load->view('admin/login.php', $data);
		    $this->load->view('templates/admin-footer-login.php');
			}else{
				$userSession = $this->session->userdata();
				if($userSession['level'] == 1){
					$level_display = "su_dashboard";
				}elseif ($userSession['level'] == 2) {
					$level_display = "ad_dashboard";
				}elseif ($userSession['level'] == 3) {
					$level_display = "md_dashboard";
				}else{
					$level_display = "wr_dashboard";
				}

				redirect(base_url('dp-admin/'.$level_display.'.php'));
			}
		}else{
			$session_data = $this->login_function->set_userSession($details['username']);
			$this->session->set_userdata($session_data);
			$this->db->where("username = '".$details['username']."'");
			$setTo = array(
				'last_login' => date("Y-m-d H:i:s")
			);

			$this->db->update('user', $setTo);
			$userSession = $this->session->userdata();
			if($userSession['level'] == 1){
				$level_display = "su_dashboard";
			}elseif ($userSession['level'] == 2) {
				$level_display = "ad_dashboard";
			}elseif ($userSession['level'] == 3) {
				$level_display = "md_dashboard";
			}else{
				$level_display = "wr_dashboard";
			}

			redirect(base_url('dp-admin/dashboard'));
		}
	}

	public function dashboard(){
		$userSession = $this->session->userdata();
		if(empty($userSession['username'])){
			redirect(base_url('dp-admin/'));
		}else{
			$userSession['allowedNews'] = $this->admin_function->get_item_row($userSession['userid'], "news", "1");
			$userSession['allowedTutorial'] = $this->admin_function->get_item_row($userSession['userid'], "tutorial", "1");
			$userSession['pendingNews'] = $this->admin_function->get_item_row($userSession['userid'], "news", "0");
			$userSession['pendingTutorial'] = $this->admin_function->get_item_row($userSession['userid'], "tutorial", "0");
			$userSession['rejectedNews'] = $this->admin_function->get_item_row($userSession['userid'], "news", "2");
			$userSession['rejectedTutorial'] = $this->admin_function->get_item_row($userSession['userid'], "tutorial", "2");
			$userSession['allNews'] = $userSession['allowedNews'].$userSession['pendingNews'];
			$this->load->view('templates/admin-header.php');

			if($userSession['level'] == 1){
				$level_display = "su_dashboard";
			}elseif ($userSession['level'] == 2) {
				$level_display = "ad_dashboard";
			}elseif ($userSession['level'] == 3) {
				$level_display = "md_dashboard";
			}else{
				$level_display = "wr_dashboard";
			}

			$this->load->view('admin/'.$level_display.'.php', $userSession);
			$this->load->view('templates/admin-footer.php');
		}
	}

	public function logOut(){
		$this->session->sess_destroy();
		redirect(base_url('dp-admin/'));
	}

	public function news(){
		$userSession = $this->session->userdata();
		$userSession['allNews'] = $this->admin_function->get_item_by_user($userSession['userid'], "news", "order by post_date asc");

		// echo print_r($userSession['allNews']);

		if($userSession['level'] == 1){
			$level_display = "su_news";
		}elseif ($userSession['level'] == 2) {
			$level_display = "ad_news";
		}elseif ($userSession['level'] == 3) {
			$level_display = "md_news";
		}else{
			$level_display = "wr_news";
		}

		$this->load->view('templates/admin-header.php');
		$this->load->view('admin/'.$level_display.'.php', $userSession);
		$this->load->view('templates/admin-footer.php');
	}

}
