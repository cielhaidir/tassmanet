<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function cek_login(){

		$uname = $this->input->post('username');
		$passwd = $this->input->post('password');
		$length = strlen($uname);

		$sql = "SELECT nip,nama_guru,foto FROM guru where nip='$uname' and password='$passwd'";
		$hasil = $this->db->query($sql);

		if($hasil->num_rows() == 1){
			// successfully
			$data = $hasil->result_array();

		}else{
			//failed
			$data = 'Gagal';
		}
		return $data;
	}
















	private $_table = "user";
	const SESSION_KEY = 'user_id';

	public function login()
	{
		$uname = $_POST['username'];
		$passwd = $_POST['password'];
		$length = strlen($uname);
		if ($length > 8) {
			$sql = "SELECT * FROM guru where nip='$uname' and password='$passwd'";
			$hasil = $this->db->query($sql);

		} else {
			$sql = "SELECT * FROM siswa where nis='$uname' and password='$passwd'";
			$hasil = $this->db->query($sql);
		}

		$user = $hasil->row();

		if (!$user) {
			redirect('home');
		}

		// foreach ($user as $row) {
		// 	$sess = array(
		// 		'nis' => $row->nis,
		// 		'passwd' => $row->password
		// 	);
		// }

		// bikin session
		$this->session->get_userdata($user);
		redirect('admin');
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id' => $user_id]);
		return $query->row();
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

	private function _update_last_login($id)
	{
		$data = [
			'last_login' => date("Y-m-d H:i:s"),
		];

		return $this->db->update($this->_table, $data, ['id' => $id]);
	}
}
