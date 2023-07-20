<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		
		
	}
	
	public function index()
	{ 	
		if (!empty($this->session->userdata['data_user'])) {
			redirect('/home/landing');
		}
		$this->load->library('flasher');
		$this->load->view('LoginScreen');
	}
	public function landing()
	{
		if (empty($this->session->userdata['data_user'])) {
			redirect('/home');
		}
		$this->load->view('LandingPage');
	}
}
