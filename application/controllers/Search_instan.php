<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search_instan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('instansi_model');
        $this->load->model('Umum_model');
        $this->load->model('Search_instan_model');
    }
    public function index()
    {
        $data['search'] = $this->Search_instan_model->get();
        $this->load->view('layout\header');
        $this->load->view('pengajuan\vw_search_ins');
        $this->load->view('layout\footer');
    }
    public function cari()
    {
        $this->form_validation->set_rules('token', 'Keyword', 'required', ['required' => 'Token  wajib disi']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header");
            $this->load->view("home/cari_status");
            $this->load->view("layout/footer");
        } else {
            $data['keyword'] = $this->input->post('keyword');
            $instansi = $this->instansi_model->getByToken($data['keyword']);
            $umum = $this->Umum_model->getByToken($data['keyword']);
            $mahasiswa = $this->Mahasiswa_model->getByToken($data['keyword']);
            if (empty($instansi) && empty($umum)) {
                $data['ajuan'] = $mahasiswa;
            } else if (empty($mahasiswa) && empty($instansi)) {
                $data['ajuan'] = $umum;
            } else {
                $data['ajuan'] = $instansi;
            }
            $hasil_ins = $this->instansi_model->cari($data['keyword']);
            $hasil_mh = $this->Mahasiswa_model->cari($data['keyword']);
            $hasil_um = $this->Umum_model->cari($data['keyword']);
            if (empty($hasil_ins) && empty($hasil_um)) {
                $data['search_result'] = $hasil_mh;
            } else if (empty($hasil_ins) && empty($hasil_mh)) {
                $data['search_result'] = $hasil_um;
            } else {
                $data['search_result'] = $hasil_ins;
            }
            $this->load->view('layout\header', $data);
            $this->load->view('pengajuan\vw_hasil_ins', $data);
            $this->load->view('layout\footer');
        }
    }
}
