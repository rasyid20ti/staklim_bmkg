<?php

use Dompdf\Dompdf;

class Agm1a extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agm1a_model');
    }

    public function index()
    {
        $data['title'] = 'AGM1A';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['agm1a'] = $this->Agm1a_model->get();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('agm1a/laporan_iklim1', $data);
		$this->load->view('templates/footer');
    }

	function laporan_iklim1()
    {
        $data['title'] = "Laporan Iklim";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['agm1a'] = $this->Agm1a_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view("agm1a/laporan_iklim1", $data);
        $this->load->view('templates/footer');
    }

    public function export()
    {
        $dompdf = new Dompdf();
		$this->data['all_agm1a'] = $this->Agm1a_model->get();
		$this->data['title'] = 'Laporan Data AGM1A';
		$this->data['no'] = 1;
		$dompdf->setPaper('A3', 'Landscape');
		$html = $this->load->view('agm1a/report', $this->data, true);
        $dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data Penjualan Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
}
