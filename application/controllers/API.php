<?php
defined('BASEPATH') or exit('No direct script access allowed');

class API extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->model('Search_maha_model');
		$this->load->model('Search_instan_model');
		$this->load->model('Umum_model');
		$this->load->model('Instansi_model');
		$this->load->model('Survei_model');
		$this->load->model('Checkin_model');
		$this->load->model('Hth_model');
		$this->load->model('Analisis_model');
		$this->load->model('Slider_model');
		$this->load->model('Berita_model');
		$this->load->model('MenuTarif_model');
		$this->load->model('Dasarian_model');
		$this->load->model('MediaDepan_model');
	}
	
	public function cuaca()
	{
		$this->load->view('api/cuaca.json');
	}

	public function peringatandini()
	{
		$this->load->view('api/peringatanDini.json');
	}
	public function partikulat()
	{
		header("Content-type: text/xml");
		$xml_file = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/application/views/api/pm25_pk2.xml");
   		echo $xml_file;
	}
	public function getAll()
	{
		$this->load->view('api/cuaca.php');
		$this->load->view('api/peringatandini.php');
	}

	
	
}
