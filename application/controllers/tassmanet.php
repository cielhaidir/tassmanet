<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tassmanet extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		if (!($this->session->userdata['data_user']['0']['nip'])) {
			redirect('/home');
		}
		$this->load->library('flasher');
	}
	public function index()
	{
		$data['bg'] = 'bg-smanet';
		$this->load->view('tassmanet');
	}
	public function pilih()
	{
		$this->load->model('siswa_model');
		$data['siswa'] = $this->siswa_model->getdatasiswa();
		if(empty($data['siswa'])){
			$this->flasher->set_message('Data Siswa belum ada', 'danger', '/tassmanet');
		}
		$data['bg'] = 'bg-smanet';
		$this->load->view('tassmanet2', $data);
	}
	public function pilih2()
	{
		$this->load->model('siswa_model');
		$data['siswa'] = $this->siswa_model->id_siswa();
		$this->load->view('tassmanet2', $data);
	}

	public function cari(){
		$searchInput = $this->input->post('searchInput');
		$this->load->model('siswa_model');
        $results = $this->siswa_model->cari($searchInput);
        echo json_encode($results);
	}
	public function lapor()
	{
		$this->load->model('siswa_model');
		$this->load->library('flasher');
		$pelanggaran = $this->siswa_model->insertLaporan();
		
		$dta = $this->siswa_model->getnohp();
		$poin = $this->siswa_model->getTotalPoin();
		$hp1 = $dta['0']['nohp_ortu'];
		$nama = $dta['0']['nama_siswa'];
		$password = 'lbwyBzfgzUIvXZFShJuikaWvLJhIVq36';
		$hp = $this->load->encrypt($hp1, $password);
		$pln = $this->load->encrypt($pelanggaran, $password);
		
		// var_dump($pelanggaran);
		// var_dump($poin);
		// die;
		header('Location: http://localhost:3000/Sismanet/api?tujuan='.urlencode($hp).'&nama='.urldecode($nama).'&pesan='.urlencode($pln).'&poin='.urlencode($poin));
		// header('Location: http://localhost:3000/Sismanet/api?tujuan='.urlencode($nohp['0']['nohp_ortu']).'&pesan='.urlencode($pelanggaran));
	}

}
