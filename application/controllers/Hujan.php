<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hujan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hujan_model');
		$this->load->model('Alat_model');
	}
	function index()
	{		
		$data['title'] = 'Pos Hujan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['hujan'] = $this->Hujan_model->get();
		$data['hasil'] = $this->Hujan_model->Kabupaten();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view("./admin/hujan/hujan", $data);
		$this->load->view('templates/footer');
	}

	function get_kab()
    {
        $id_kabupaten=$this->input->post('id_kabupaten');
        $data=$this->Hujan_model->Kabupaten($id_kabupaten);
        echo json_encode($data);
    }

	function get_alat()
    {
        $kabupaten=$this->input->post('kabupaten');
        $data=$this->Hujan_model->Stasiun($kabupaten);
        echo json_encode($data);
    }

	public function form_hujan()
    {
        $data['title'] = 'Pos Hujan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('hujan/form_hujan', $data);
        $this->load->view('templates/footer');
    }

	public function vw_hujan()
    {
        $data['title'] = 'Pos Hujan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['curahhujan'] = $this->Hujan_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('hujan/vw_hujan', $data);
        $this->load->view('templates/footer');
    }
	function tambah()
	{
		$data['title'] = 'Pos Hujan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['hujan'] = $this->Hujan_model->get();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('hujan/form_hujan', $data);
        $this->load->view('templates/footer');
	}

	function input_tambah()
	{
		$date = $this->input->post('date');
		$data['Hujan'] = $this->Hujan_model->get();
		//$token = $this->input->post('token');

		$data = [
			'alat' => $this->input->post('alat'),
			'kabupaten' => $this->input->post('kabupaten'),
			'date' => $this->input->post('date'),
			'tgl_01' => $this->input->post('tgl_01'),
			'tgl_02' => $this->input->post('tgl_02'),
			'tgl_03' => $this->input->post('tgl_03'),
			'tgl_04' => $this->input->post('tgl_04'),
			'tgl_05' => $this->input->post('tgl_05'),
			'tgl_06' => $this->input->post('tgl_06'),
			'tgl_07' => $this->input->post('tgl_07'),
			'tgl_08' => $this->input->post('tgl_08'),
			'tgl_09' => $this->input->post('tgl_09'),
			'tgl_10' => $this->input->post('tgl_10'),
			'tgl_11' => $this->input->post('tgl_11'),
			'tgl_12' => $this->input->post('tgl_12'),
			'tgl_13' => $this->input->post('tgl_13'),
			'tgl_14' => $this->input->post('tgl_14'),
			'tgl_15' => $this->input->post('tgl_15'),
			'tgl_16' => $this->input->post('tgl_16'),
			'tgl_17' => $this->input->post('tgl_17'),
			'tgl_18' => $this->input->post('tgl_18'),
			'tgl_19' => $this->input->post('tgl_19'),
			'tgl_20' => $this->input->post('tgl_20'),
			'tgl_21' => $this->input->post('tgl_21'),
			'tgl_22' => $this->input->post('tgl_22'),
			'tgl_23' => $this->input->post('tgl_23'),
			'tgl_24' => $this->input->post('tgl_24'),
			'tgl_25' => $this->input->post('tgl_25'),
			'tgl_26' => $this->input->post('tgl_26'),
			'tgl_27' => $this->input->post('tgl_27'),
			'tgl_28' => $this->input->post('tgl_28'),
			'tgl_29' => $this->input->post('tgl_29'),
			'tgl_30' => $this->input->post('tgl_30'),
			'tgl_31' => $this->input->post('tgl_31')
		];

		$this->Hujan_model->insert($data);
		$this->Hujan_model->update(['date' => $date], $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Ditambah!</div>');
		redirect('hujan/hujan');
	}
	public function hapus($id)
	{
		$this->Agm1a_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Buku tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Buku Berhasil Dihapus!</div>');
		}
		redirect('hujan/vw_hujan');
	}

	function edit($id)
	{
		$data['title'] = "Halaman Edit Pos Hujan";
		$data['hujan'] = $this->Hujan_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['hasil'] = $this->Hujan_model->Kabupaten();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('hujan/edit_hujan', $data);
		$this->load->view('templates/footer');
	}

	function submit_edit($id)
	{
		$data = [
			'alat' => $this->input->post('alat'),
			'kabupaten' => $this->input->post('kabupaten'),
			'tgl_01' => $this->input->post('tgl_01'),
			'tgl_02' => $this->input->post('tgl_02'),
			'tgl_03' => $this->input->post('tgl_03'),
			'tgl_04' => $this->input->post('tgl_04'),
			'tgl_05' => $this->input->post('tgl_05'),
			'tgl_06' => $this->input->post('tgl_06'),
			'tgl_07' => $this->input->post('tgl_07'),
			'tgl_08' => $this->input->post('tgl_08'),
			'tgl_09' => $this->input->post('tgl_09'),
			'tgl_10' => $this->input->post('tgl_10'),
			'tgl_11' => $this->input->post('tgl_11'),
			'tgl_12' => $this->input->post('tgl_12'),
			'tgl_13' => $this->input->post('tgl_13'),
			'tgl_14' => $this->input->post('tgl_14'),
			'tgl_15' => $this->input->post('tgl_15'),
			'tgl_16' => $this->input->post('tgl_16'),
			'tgl_17' => $this->input->post('tgl_17'),
			'tgl_18' => $this->input->post('tgl_18'),
			'tgl_19' => $this->input->post('tgl_19'),
			'tgl_20' => $this->input->post('tgl_20'),
			'tgl_21' => $this->input->post('tgl_21'),
			'tgl_22' => $this->input->post('tgl_22'),
			'tgl_23' => $this->input->post('tgl_23'),
			'tgl_24' => $this->input->post('tgl_24'),
			'tgl_25' => $this->input->post('tgl_25'),
			'tgl_26' => $this->input->post('tgl_26'),
			'tgl_27' => $this->input->post('tgl_27'),
			'tgl_28' => $this->input->post('tgl_28'),
			'tgl_29' => $this->input->post('tgl_29'),
			'tgl_30' => $this->input->post('tgl_30'),
			'tgl_31' => $this->input->post('tgl_31')
		];
		// print_r($data); die;

		$id = $this->input->post('id');
		$this->Hujan_model->update(['id' => $id], $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
		redirect('Hujan/vw_hujan');
	}
}
