<?php

class siswa_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('flasher');
	}
	public function id_siswa(){
		$nis = $this->input->post('datasiswa');
		$sql = "SELECT nis, nama_siswa FROM siswa where nis='$nis'";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}
	public function getdatasiswa()
	{

		$kelas = $this->input->post('kelas');
		$tingkatan = $this->input->post('tingkatan');
		$date = getdate();
		// $datenow = $date['year'] . '-' . $date['mon'] . '-' . $date['mday'];
		$datenow = 2023 . '-' . 5 . '-' . $date['mday'];
		// echo $datenow;
		$akt = date('Y', strtotime('-' . $tingkatan . ' year', strtotime($datenow)));
		// $akt = date('Y', strtotime('-'.$tingkatan.' year-06 month', strtotime($datenow)) );
		// echo $akt;
		$sql = "SELECT * FROM siswa where kelas='$kelas' AND angkatan=$akt";
		// echo $kelas;
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}
	public function getnohp()
	{

		$nis = $this->input->post('nis');
		$sql = "SELECT nama_siswa, nohp_ortu FROM siswa where nis='$nis'";
		// echo $kelas;
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}
	public function getTotalPoin()
	{

		$nis = $this->input->post('nis');
		$sql = "SELECT sum(poin) as poin FROM pelanggaran where nis='$nis'";
		// echo $kelas;
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		$data = $data[0]['poin'];
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}
	public function insertLaporan()
	{

		$nis = $this->input->post('nis');
		$pelanggaran = $_POST['pelanggaran'];

		// Split the selected value(s) using the delimiter '|'
		list($pelanggaran, $poin) = explode('|', $pelanggaran);


		$input1 = $this->input->post('input1');
		$input2 = $this->input->post('input2');

		if (empty($nis)) {
			$this->flasher->set_message('Siswa belum dipilih', 'danger', '/tassmanet');
		}
		if ($pelanggaran == 'lainnya') {
			if (empty($input1)) {
				$this->flasher->set_message('Pelanggaran Kosong, tolong diisi', 'danger', '/tassmanet');
			}
			if (empty($input2)) {
				$this->flasher->set_message('Poin Kosong, tolong diisi', 'danger', '/tassmanet');
			}
			if (!is_numeric($input2) || $input2 < 0) {
				$this->flasher->set_message('Poin tidak boleh negatif', 'danger', '/tassmanet');
			}
			if (!is_numeric($input2) || $input2 > 23) {
				$this->flasher->set_message('Poin tidak boleh dari 23', 'danger', '/tassmanet');
			}
		}


		$nip = $this->session->userdata['data_user']['0']['nip'];

		// $data1 = [
		// 	'pelanggaran' => $pelanggaran,
		// 	'poin' => $poin
		// ];

		if ($pelanggaran == 'lainnya') {
			$sql = "INSERT INTO pelanggaran (id_pelanggaran, nis, nip_guru, JenisPelanggaran, date, poin) VALUES (NULL, '$nis', '$nip', '$input1', now(), $input2 );";
			$this->db->query($sql);
			$pelanggaran = $input1;
			return $pelanggaran;
		} else {
			$sql = "INSERT INTO pelanggaran (id_pelanggaran, nis, nip_guru, JenisPelanggaran, date, poin) VALUES (NULL, '$nis', '$nip', '$pelanggaran', now(), $poin);";
			$this->db->query($sql);
			return $pelanggaran;
		}
	}
	public function hitungpelanggaran()
	{
		$sql = "SELECT Count(id_pelanggaran) as jumlah from pelanggaran";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}

	public function getAllPelanggaran()
	{
		$sql = "SELECT pelanggaran.id_pelanggaran, pelanggaran.nis, siswa.nama_siswa, pelanggaran.JenisPelanggaran as pelanggaran, pelanggaran.date
		FROM pelanggaran
		INNER JOIN siswa
		ON pelanggaran.nis = siswa.nis
		ORDER BY pelanggaran.date DESC;";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}

	//menghitung point setiap siswa untuk ditampilkan
	public function getPoinPelanggaran($limit, $ofset)
	{
		$sql = "SELECT pelanggaran.id_pelanggaran, pelanggaran.nis, siswa.nama_siswa, SUM(pelanggaran.poin) AS poin, pelanggaran.JenisPelanggaran AS pelanggaran
		FROM pelanggaran
		INNER JOIN siswa ON pelanggaran.nis = siswa.nis
		GROUP BY siswa.nama_siswa
		ORDER BY poin DESC LIMIT $ofset, $limit;";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}

	// Abaikan pagination jarang dipake untuk point tiap siswa
	public function getPoinPelanggaran1()
	{
		$sql = "SELECT pelanggaran.id_pelanggaran, pelanggaran.nis, siswa.nama_siswa,pelanggaran.poin, pelanggaran.JenisPelanggaran as pelanggaran, pelanggaran.date
		FROM pelanggaran
		INNER JOIN siswa
		ON pelanggaran.nis = siswa.nis
		ORDER BY pelanggaran.poin DESC;";
		$hasil = $this->db->query($sql);
		$data = $hasil->num_rows();
		return $data;
	}
	//pagination pelanggaran
	public function getPelanggaran($limit, $ofset)
	{
		$sql = "SELECT pelanggaran.id_pelanggaran, pelanggaran.nis, siswa.nama_siswa,pelanggaran.poin, pelanggaran.JenisPelanggaran as pelanggaran, pelanggaran.date
		FROM pelanggaran
		INNER JOIN siswa
		ON pelanggaran.nis = siswa.nis
		ORDER BY pelanggaran.poin DESC LIMIT $ofset, $limit;";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}
	//menghitung total pelanggaran untuk pagination
	public function getTotalPelanggaran()
	{
		$sql = "SELECT pelanggaran.id_pelanggaran, pelanggaran.nis, siswa.nama_siswa, pelanggaran.JenisPelanggaran as pelanggaran, pelanggaran.date
		FROM pelanggaran
		INNER JOIN siswa
		ON pelanggaran.nis = siswa.nis
		ORDER BY pelanggaran.date DESC;";
		$hasil = $this->db->query($sql);
		$data = $hasil->num_rows();
		return $data;
	}
	//pagination pelanggaran by guru
	public function getPelanggaranGuru($limit, $ofset)
	{
		$nip = $this->session->userdata['data_user']['0']['nip'];
		$sql = "SELECT pelanggaran.id_pelanggaran, pelanggaran.nis, siswa.nama_siswa,pelanggaran.poin, pelanggaran.JenisPelanggaran as pelanggaran, pelanggaran.date
		FROM pelanggaran
		INNER JOIN siswa
		ON pelanggaran.nis = siswa.nis
		WHERE nip_guru = '$nip'
		ORDER BY pelanggaran.poin DESC LIMIT $ofset, $limit;";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}
	//menghitung total pelanggaran untuk pagination by guru
	public function getTotalPelanggaranGuru()
	{
		$nip = $this->session->userdata['data_user']['0']['nip'];
		$sql = "SELECT pelanggaran.id_pelanggaran, pelanggaran.nis, siswa.nama_siswa, pelanggaran.JenisPelanggaran as pelanggaran, pelanggaran.date
		FROM pelanggaran
		INNER JOIN siswa
		ON pelanggaran.nis = siswa.nis
		WHERE nip_guru = '$nip'
		ORDER BY pelanggaran.date DESC;";
		$hasil = $this->db->query($sql);
		$data = $hasil->num_rows();
		return $data;
	}
	public function cari($searchInput)
	{
        $this->db->like('nama_siswa', $searchInput);
        $this->db->or_like('nis', $searchInput);
        $query = $this->db->get('siswa');
        return $query->result();
	}
}
