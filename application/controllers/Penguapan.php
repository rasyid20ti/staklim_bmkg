<?php

use Dompdf\Dompdf;

class me48 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penguapan_Model');
    }

    public function index()
    {
        $data['title'] = 'me48';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['me48'] = $this->Penguapan_Model->get();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('penguapan/laporanpenguapan', $data);
		$this->load->view('templates/footer');
    }

	function laporanpenguapan()
    {
        $data['title'] = "Laporan Iklim";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['me48'] = $this->Penguapan_Model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view("penguapan/laporanpenguapan", $data);
        $this->load->view('templates/footer');
    }

    public function export()
    {
        $dompdf = new Dompdf();
		$this->data['all_penguapan'] = $this->Penguapan_Model->get();
		$this->data['title'] = 'Laporan Data AGM1A';
		$this->data['no'] = 1;
		$dompdf->setPaper('A3', 'Landscape');
		$html = $this->load->view('penguapan/report', $this->data, true);
        $dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data Penjualan Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
}
