<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Analisis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Analisis_model');
    }
    public function index()
    {
        $data['title'] = "Data Analisis Normal Iklim Dasarian Riau";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['analisis'] = $this->Analisis_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('analisis/analisis', $data);
        $this->load->view('templates/footer');
    }

    public function titleadd()
    {
        $data['title'] = 'Tambah Analisis Baru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('analisis/addtitle', $data);
        $this->load->view('templates/footer');
    }

    public function addanalisis($id)
    {
        $data['title'] = 'Input Data Analisis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['analisis'] = $this->Analisis_model->getById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('analisis/addanalisis', $data);
        $this->load->view('templates/footer');
    }

    public function titleprocess()
    {
        $data = [
            'title' => $this->input->post('title'),
        ];
        $this->Analisis_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Judul Analisis Berhasil Ditambah</div>');
        redirect('analisis/');
    }

    public function submitanalisis($id)
    {
        $data = [
            'title' => $this->input->post('title'),
            'created_at' => time(),
            'analisisch' => $this->input->post('analisisch'),
            'keterangan_ch' => $this->input->post('keterangan_ch'),
            'analisissh' => $this->input->post('analisissh'),
            'keterangan_sh' => $this->input->post('keterangan_sh'),
            'prakiraan_chd' => $this->input->post('prakiraan_chd'),
            'keterangan_chd' => $this->input->post('keterangan_chd'),
            'prakiraan_shd' => $this->input->post('prakiraan_shd'),
            'keterangan_shd' => $this->input->post('keterangan_shd'),
            'prakiraan_chp' => $this->input->post('prakiraan_chp'),
            'keterangan_chp' => $this->input->post('keterangan_chp'),
            'prakiraan_dpb' => $this->input->post('prakiraan_dpb'),
            'keterangan_dpb' => $this->input->post('keterangan_dpb'),
        ];
        $id = $this->input->post('id');
        $this->Analisis_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Analisis Berhasil Diupdate</div>');
        redirect('analisis/');
    }
}
