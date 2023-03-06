<?php

use Dompdf\Dompdf;

class testa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Me48_model');
    }

    public function index()
    {
        $data['title'] = 'me48';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['me48'] = $this->Me48_model->get();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('testa/laporanme48', $data);
		$this->load->view('templates/footer');
    }

	function laporanme48()
    {
        $data['title'] = "Laporan Iklim";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['me48'] = $this->Me48_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view("testa/laporanme48", $data);
        $this->load->view('templates/footer');
    }

    public function export()
    {
        $dompdf = new Dompdf();
		$this->data['all_me48'] = $this->Me48_model->get();
		$this->data['title'] = 'Laporan Data AGM1A';
		$this->data['no'] = 1;
		$dompdf->setPaper('A3', 'Landscape');
		$html = $this->load->view('testa/report', $this->data, true);
        $dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data Penjualan Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
}
