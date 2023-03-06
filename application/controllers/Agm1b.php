<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Agm1b extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agm1b_model');
    }
    public function index()
    {
        $data['title'] = 'AGM1B';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['agm1b'] = $this->Agm1b_model->get();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('agm1b/vw_agm1b', $data);
		$this->load->view('templates/footer');
    }

	function laporan_iklim2()
    {
        $data['title'] = "Laporan Iklim";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['agm1b'] = $this->Agm1b_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view("agm1b/laporan_iklim2", $data);
        $this->load->view('templates/footer');
    }

    public function export()
    {
        $dompdf = new Dompdf();
		$this->data['all_agm1b'] = $this->Agm1b_model->get();
		$this->data['title'] = 'Laporan Data AGM1B';
		$this->data['no'] = 1;
		$dompdf->setPaper('A3', 'Landscape');
		$html = $this->load->view('agm1b/report', $this->data, true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data Penjualan Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
   
}
