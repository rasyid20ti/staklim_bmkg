-=<?php
defined('BASEPATH') or exit('No direct script access allowed');
class FormIklim extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Agm1b_model');
		$this->load->model('Agm1a_model');
		$this->load->model('FormIklim_model');
	}
	function form_iklim()
	{
		$data['title'] = "Form Iklim";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// $data['formIklim'] = $this->FormIklim_model->get();
        
        $this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view("iklim/form_iklim", $data);
		$this->load->view('templates/footer');		
	}

	function vw_iklim()
	{
		$data['title'] = "Form Iklim";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$data['formIklim'] = $this->FormIklim_model->get();
		$this->load->view("iklim/vw_iklim", $data);
		$this->load->view('templates/footer');
	}

	function iklim_tambah()
	{
		$data['title'] = 'Iklim';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['formIklim'] = $this->FormIklim_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('iklim/vw_iklim', $data);
        $this->load->view('templates/footer');
	}

	function iklim_input_tambah ()
	{
		$status = $this->input->post('status');
		// $data['formIklim'] = $this->FormIklim_model->get();
		$data1['formIklim'] = $this->Agm1a_model->get();
		$data2['formIklim'] = $this->Agm1b_model->get();
		//$token = $this->input->post('token');
		$data1 = [
			'bk1' => $this->input->post('bk1_suhuUdara1'),
			'bb1' => $this->input->post('bb1'),
			'bk2' => $this->input->post('bk2'),
			'bb2' => $this->input->post('bb2'),
			'bk3' => $this->input->post('bk3_Rh3'),
			'bb3' => $this->input->post('bb3'),
			'minrumput' => $this->input->post('minrumput'),
			'min2' => $this->input->post('min2'),
			'max3' => $this->input->post('max3'),
			'lembabnisb1' => $this->input->post('lembabnisb1_Rh1'),
			'lembabnisb2' => $this->input->post('lembabnisb2'),
			'lembabnisb3' => $this->input->post('lembabnisb3'),
			'kcpwaktu1' => $this->input->post('kcpperamatan1_kcpwaktu1'),
			'kcpwaktu2' => $this->input->post('kcpperamatan1_kcpwaktu1'),
			'kcpwaktu3' => $this->input->post('kcpperamatan1_kcpwaktu1'),
			'arahwaktu1' => $this->input->post('arahwaktu1'),
			'arahwaktu2' => $this->input->post('arahwaktu2'),
			'arahwaktu3' => $this->input->post('arahwaktu3'),
			'kcpperamatan1' => $this->input->post('kcpperamatan1_kcpwaktu1'),
			'kcpperamatan2' => $this->input->post('kcpperamatan2'),
			'kcpperamatan3' => $this->input->post('kcpperamatan3'),
			'sinarmht' => $this->input->post('sinarmht'),
			'hujan' => $this->input->post('hujan'),
			'ujibk2' => $this->input->post('ujibk2'),
			'ukimin2' => $this->input->post('ukimin2'),
			'ujibk3' => $this->input->post('ujibk3'),
			'ukimax3' => $this->input->post('ukimax3'),
			'jam7' => $this->input->post('jam7'),
			'jam2' => $this->input->post('jam2'),
			'phujan' => $this->input->post('phujan_Ch1'),
			// 'salju' => $this->input->post('salju'),
			// 'pembekuan' => $this->input->post('pembekuan'),
			// 'embun' => $this->input->post('embun'),
			// 'kabut' => $this->input->post('kabut'),
			// 'udarab' => $this->input->post('udarab'),
			// 'rambun' => $this->input->post('rambun'),
			// 'kabutdebu' => $this->input->post('kabutdebu'),
			// 'badaidebu' => $this->input->post('badaidebu'),
			// 'anginribut' => $this->input->post('anginribut'),
			// 'catatan' => $this->input->post('catatan'),
			'date' => $this->input->post('date')
		];

				
		$data2 = [
			'date' => $this->input->post('date'),
			'temg15' => $this->input->post('temg15'),
			'temg110' => $this->input->post('temg110'),
			'temg120' => $this->input->post('temg120'),
			'temg25' => $this->input->post('temg25'),
			'temg210' => $this->input->post('temg210'),
			'temg220' => $this->input->post('temg220'),
			'temg35' => $this->input->post('temg35'),
			'temg310' => $this->input->post('temg310'),
			'temg320' => $this->input->post('temg320'),
			'temg350' => $this->input->post('temg350'),	
			'temg3100' => $this->input->post('temg3100'),
			'tempt15' => $this->input->post('tempt15'),
			'tempt110' => $this->input->post('tempt110'),
			'tempt120' => $this->input->post('tempt120'),
			'tempt25' => $this->input->post('tempt25'),
			'tempt210' => $this->input->post('tempt210'),
			'tempt220' => $this->input->post('tempt220'),
			'tempt35' => $this->input->post('tempt35'),
			'tempt310' => $this->input->post('tempt310'),
			'tempt320' => $this->input->post('tempt320'),
			'tempt350' => $this->input->post('tempt350'),
			'tempt3100' => $this->input->post('tempt3100'),
			// 'KeTanah' => $this->input->post('KeTanah'),
			// 'JaHujan' => $this->input->post('JaHujan'),
			'Ch1' => $this->input->post('phujan_Ch1'),
			'ke1Angin0' => $this->input->post('ke1Angin0'),
			'ke1Angin10' => $this->input->post('ke1Angin10'),
			'suhuUdara1' => $this->input->post('bk1_suhuUdara1'),
			'Rh1' => $this->input->post('lembabnisb1_Rh1'),
			'suhuAir1' => $this->input->post('suhuAir1'),
			'Eva1' => $this->input->post('Eva1'),
			'Ch2' => $this->input->post('Ch2'),
			'ke2Angin0' => $this->input->post('ke2Angin0'),
			'ke2Angin10' => $this->input->post('ke2Angin10'),
			'suhuUdara2' => $this->input->post('suhuUdara2'),
			'Rh2' => $this->input->post('Rh2'),
			'suhuAir2' => $this->input->post('suhuAir2'),
			'Eva2' => $this->input->post('Eva2'),
			'Ch3' => $this->input->post('Ch3'),
			'ke3Angin0' => $this->input->post('ke3Angin0'),
			'ke3Angin10' => $this->input->post('ke3Angin10'),
			'suhuUdara3' => $this->input->post('suhuUdara3'),
			'Rh3' => $this->input->post('bk3_Rh3'),
			'Eva3' => $this->input->post('Eva3'),
			'Ch4' => $this->input->post('Ch4'),
			'Eva4' => $this->input->post('Eva4')
		];

		// $this->FormIklim_model->insert($data);
		$this->Agm1a_model->insert($data1);
		$this->Agm1b_model->insert($data2);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Ditambah!</div>');
		redirect('formiklim/form_iklim');
	}
	

	function Tanggal($date)
	{
		$datetime = DateTime::createFromFormat('Y-m-d', $date);
		return $datetime->format('d-m-Y');
	}

	function laporan ()
	{
		$data['title'] = "Laporan Iklim";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['formIklim'] = $this->FormIklim_model->get();
		$data['formIklim'] = $this->Agm1a_model->get();
		$data['formIklim'] = $this->Agm1b_model->get();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view("iklim/laporan", $data);
		$this->load->view('templates/footer');
	}
}
