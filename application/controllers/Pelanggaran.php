<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pelanggaran extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');

		$this->load->helper('url');
		if(empty($this->session->userdata['data_user'])){
			redirect('/home');
		}

		$this->load->model('siswa_model');
		$this->load->library('pagination');
	}
	public function index()
	{
		$config['base_url'] = 'http://localhost/Sismanet/Pelanggaran/index';

		$config['total_rows'] = $this->siswa_model->getPoinPelanggaran1();

		$config['per_page'] = 10;
		// $config['uri_segment'] = 0;

		$config['full_tag_open'] = '<nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="position: relative; z-index: 1;"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item" style="position: relative; z-index: 1;">';
		$config['first_tag_close'] = '</li>';
	
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item" style="position: relative; z-index: 1;">';
		$config['last_tag_close'] = '</li>';


		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item" style="position: relative; z-index: 1;">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item" style="position: relative; z-index: 1;">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active" style="position: relative; z-index: 1;"><a class="page-link" href="#" style="position: relative; z-index: 1;">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item" style="position: relative; z-index: 1;">';
		$config['num_tag_close'] = '</a></li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$limit = $config['per_page'];
		// $offset = $config['uri_segment'];
		$offset = $this->uri->segment(3, 0);

		$data['start'] = $offset;

		$data['bg'] = 'bg-smanet';
		$data['pelanggaran'] = $this->siswa_model->getPoinPelanggaran($limit, $offset);
		// $data['pagination_links'] = $this->pagination->create_links();
		$this->load->view('pelanggaran', $data);
		$this->load->view('admin/footer');
	}
}
