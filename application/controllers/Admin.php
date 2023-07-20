<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');

		if(empty($this->session->userdata['data_user'])){
			redirect('/home');
		}
		$this->load->model('siswa_model');
		$this->load->library('pagination');
	}
	public function index()
	{
		$config['base_url'] = 'http://localhost/Sismanet/Admin/index';

		$config['total_rows'] = $this->siswa_model->getTotalPelanggaranGuru();

		$config['per_page'] = 6;
		// $config['uri_segment'] = 0;

		$config['full_tag_open'] = '<nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" style="position: relative; z-index: 1;"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
	
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';


		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</a></li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$limit = $config['per_page'];
		// $offset = $config['uri_segment'];
		$offset = $this->uri->segment(3, 0);

		$data['start'] = $offset;

		$this->load->model('siswa_model');
		$data['pelanggaran'] = $this->siswa_model->getPelanggaranGuru($limit, $offset);
		$this->load->view('Dashboard', $data);
	}
	public function agenda()
	{
		$data['bg2'] = 'active';
		$data['bg1'] = '';
		$data['bg3'] = '';
		$data['bg4'] = '';
		$this->load->model('agenda_model');
		$data['agenda'] = $this->agenda_model->getagenda();
		$this->load->view('admin/navbar', $data);
		$this->load->view('informasi/agenda');	
		$this->load->view('admin/footer');
	}
	public function tambah_agenda()
	{
		$data['bg2'] = 'active';
		$data['bg1'] = '';
		$data['bg3'] = '';
		$data['bg4'] = '';
		$this->load->view('admin/navbar', $data);
		$this->load->view('informasi/agenda_tambah');	
		$this->load->view('admin/footer');
	}
	public function post_agenda()
	{
		$this->load->model('agenda_model');
		$this->agenda_model->tambahagenda();
		redirect('admin/agenda');
	}
	public function edit_agenda()
	{
		$this->load->model('agenda_model');
		$data['agenda'] = $this->agenda_model->getidagenda();
		$this->load->view('admin/navbar', $data);
		$this->load->view('informasi/agenda_edit');
		$this->load->view('admin/footer');
	}
	public function ngedit_agenda()
	{
		$this->load->model('agenda_model');
		$this->agenda_model->editagenda();
		redirect('admin/agenda');
		
	}
	public function hapus_agenda()
	{
		$this->load->model('agenda_model');
		$this->agenda_model->hapusagenda();
		redirect('admin/agenda');
	}
	public function berita()
	{
		$data['bg3'] = 'active';
		$data['bg2'] = '';
		$data['bg4'] = '';
		$data['bg1'] = '';
		$this->load->model('berita_model');
		$data['berita'] = $this->berita_model->getberita();
		$this->load->view('admin/navbar', $data);
		$this->load->view('informasi/berita');	
		$this->load->view('admin/footer');
		
	}
	public function tambah_berita()
	{
		$data['bg3'] = 'active';
		$data['bg2'] = '';
		$data['bg4'] = '';
		$data['bg1'] = '';
		$this->load->view('admin/navbar', $data);
		$this->load->view('informasi/berita_tambah');	
		$this->load->view('admin/footer');
	}
	public function post_berita()
	{
		$this->load->model('berita_model');
		$this->berita_model->tambahberita();
		redirect('admin/berita');
	}
	public function edit_berita()
	{
		$data['bg3'] = 'active';
		$data['bg2'] = '';
		$data['bg4'] = '';
		$data['bg1'] = '';
		$this->load->model('berita_model');
		$data['berita'] = $this->berita_model->getidberita();
		$this->load->view('admin/navbar', $data);
		$this->load->view('informasi/berita_edit', $data);
		$this->load->view('admin/footer');
		
	}
	public function ngedit_berita()
	{
		$this->load->model('berita_model');
		$this->berita_model->editberita();
		redirect('admin/berita');
		
	}
	public function hapus_berita()
	{
		$this->load->model('berita_model');
		$this->berita_model->hapusberita();
		redirect('admin/berita');
	}
	public function pelanggaran()
	{
		$this->load->model('siswa_model');
		$data['pelanggaran'] = $this->siswa_model->getpelanggaran();
		$data['bg4'] = 'active';
		$data['bg3'] = '';
		$data['bg2'] = '';
		$data['bg1'] = '';
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/pelanggaran', $data);	
		$this->load->view('admin/footer');
		
	}
}
