<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Service extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->helper(['url']);
		$this->load->helper('url');
		$this->load->model('Alat_model');
		$this->load->model("Kecamatan_model");
		$this->load->model("Kabupaten_model");
		$this->load->model("CurahHujan_model");
		$this->load->model("Hth_model");
		$this->load->model("Analisis_model");
		$this->load->model("Narasi_model");
		$this->load->model("Berita_model");
		$this->load->model("MediaDepan_model");
	}
	public function detail($no)
	{
		$data['judul'] = ('Detail Alat');
		$data['alat'] = $this->Alat_model->getByNo($no);
		$data['berita'] = $this->Alat_model->getByNo($no);
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerLayanan');
		$this->load->view('poshujan/detail', $data);
		$this->load->view('layout/footer', $data);
	}
	public function cari()
	{
		$nama_pos = $this->input->get('nama_pos');
		$data['judul'] = ('Detail Alat');
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['alat'] = $this->Alat_model->getByNama($nama_pos);
		if ($data['alat'] == TRUE) {
			$this->load->view('layout/headerLayanan');
			$this->load->view('poshujan/detail', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$error['heading'] = ('Error');
			$error['message'] = ('Tidak Ada Hasil');
			$this->load->view('layout/headerLayanan');
			$this->load->view('errors/html/error_db', $error);
			$this->load->view('layout/footer', $data);
		}
	}
	function get_autocomplete(){
		$names = $this->Alat_model->search_alat($_GET['alatPos']);
		if (count($names) > 0) {
        	foreach ($names as $row)
                $arr_result[] = $row->nama_pos;
                echo json_encode($arr_result);
		}
	}
	public function service()
	{
		$data = $this->Alat_model->getAlat()->result();
		$hasil = array();
		foreach ($data as $a) {
			$hasil[] = array($a->nama_pos, $a->nomor_pos, $a->lintang, $a->bujur, $a->kode_pos);
		}
		$this->data = array(
			'daftar' => $data,
			'lokasi' => $hasil,
		);
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerLayanan');
		$this->load->view('poshujan/VAlat', $this->data);
		$this->load->view('layout/footer', $data);
	}
	public function maritim()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_maritim');
		$this->load->view('layout/footer');
	}
	public function energi()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_energi');
		$this->load->view('layout/footer');
	}
	public function hujansuhu()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_hujansuhu');
		$this->load->view('layout/footer');
	}
	public function tanaman()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_tanaman');
		$this->load->view('layout/footer');
	}
	public function banjir()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_banjir');
		$this->load->view('layout/footer');
	}
	public function iklim()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_iklim');
		$this->load->view('layout/footer');
	}
	public function lingkungan()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_lingkungan');
		$this->load->view('layout/footer');
	}
	public function violet()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_violet');
		$this->load->view('layout/footer');
	}

	public function aviation()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_aviation');
		$this->load->view('layout/footer');
	}

	// public function iklimriau()
	// {
	//     $data['kecamatan'] = $this->Kecamatan_model->get();
	//     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	//     $this->load->view('layout/header');
	// 	$this->load->view('service/vw_iklimriau');
	//     $this->load->view('layout/footer');
	// }

	public function iklimriau()
	{
		$data['title'] = "Halaman Curah Hujan Normal";
		$data['curahHujan'] = $this->CurahHujan_model->get();
		$data['kabupaten'] = $this->Kabupaten_model->get();
		// $data['graph'] = $this->CurahHujan_model->graph();
		// $data['kecamatan'] = $this->Kecamatan_model->getKec();
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_iklimriau', $data);
		$this->load->view('layout/footer');
	}

	public function curahhujan_chart($id)
	{
		$data['title'] = "Halaman Curah Hujan Normal";
		$data['curahHujan'] = $this->CurahHujan_model->get();
		$data['graph'] = $this->CurahHujan_model->graph($id);
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_iklimriaudetail', $data);
		$this->load->view('layout/footer');
	}

	public function dinamika()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_dinamika');
		$this->load->view('layout/footer');
	}

	public function pengindraan()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_pengindraan');
		$this->load->view('layout/footer');
	}

	public function infoiklim()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_infoiklim');
		$this->load->view('layout/footer');
	}
	public function hujan()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_hujan');
		$this->load->view('layout/footer');
	}
	public function hutan()
	{
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_kebakaran');
		$this->load->view('layout/footer');
	}

	public function dasarian()
	{
		$data['hth'] = $this->Hth_model->get();
		$data['analisis'] = $this->Analisis_model->get();
		$data['narasi'] = $this->Narasi_model->get();
		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_dasarian', $data);
		$this->load->view('layout/footer');
	}

	public function hthfile($id_periode)
	{
		$data['title'] = "Halaman Detail Hari Tanpa Hujan";
		$data['analisis'] = $this->db->get('analisis')->result_array();
		$data['hth'] = $this->Hth_model->getById($id_periode);
		$data['lokasi'] = $this->Hth_model->getById($this->uri->segment(3));
		$data['narasi'] = $this->Narasi_model->get();

		//MODEL CALL FOR DASARIAN
		$data['AnalisisCurahHujan'] = $this->Analisis_model->getAnalisisCurahHujan();
		$data['AnalisisSifatHujan'] = $this->Analisis_model->getAnalisisSifatHujan();
		$data['AnalisisCurahHujanDeterministik'] = $this->Analisis_model->getAnalisisCurahHujanDeterministik();
		$data['AnalisisSifatHujanDeterministik'] = $this->Analisis_model->getAnalisisSifatHujanDeterministik();
		$data['AnalisisCurahHujanProbabilistik'] = $this->Analisis_model->getAnalisisCurahHujanProbabilistik();
		$data['DaerahPotensiBanjir'] = $this->Analisis_model->getDaerahPotensiBanjir();

		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_dasarianhthdetail', $data);
		$this->load->view('layout/footer');
	}

	public function hthdetail()
	{
		$data['title'] = "Halaman Detail HTH";
		// $data['lokasi'] = $this->Hth_model->getById($this->uri->segment(5));
		$data['lokasi'] = $this->Hth_model->getById($this->uri->segment(3));
		$data['narasi'] = $this->Narasi_model->get();
		// $this->load->view('templates/header', $data);
		// $this->load->view('templates/sidebar', $data);
		// $this->load->view('templates/topbar', $data);
		// $this->load->view('admin/haritanpahujan_detail', $data);
		// $this->load->view('templates/footer');

		$this->load->view('layout/headerLayanan');
		$this->load->view('service/vw_dasarianhthmaps', $data);
		$this->load->view('layout/footer');
		// print_r($data); die;
	}


}
