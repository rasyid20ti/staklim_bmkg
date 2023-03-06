<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bayar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Umum_model');
        $this->load->model('Instansi_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('instansi_model');
        $this->load->model('Search_instan_model');
    }
    public function index()
    {
        $data['search'] = $this->Search_instan_model->get();
        $this->load->view('layout/header');
        $this->load->view('pengajuan/vw_bayar');
        $this->load->view('layout/footer');
    }
    public function cari()
    {
        $data['token'] = $this->input->post('token');
        $instansi = $this->Instansi_model->getByToken($data['token']);
        $umum = $this->Umum_model->getByToken($data['token']);
        $mahasiswa = $this->Mahasiswa_model->getByToken($data['token']);
        if (empty($instansi) && empty($umum)) {
            $data['ajuan'] = $mahasiswa;
        } else if (empty($mahasiswa) && empty($instansi)) {
            $data['ajuan'] = $umum;
        } else {
            $data['ajuan'] = $instansi;
        };
        // print_r($data['ajuan']);
        // die;
        // $hasil_ins = $this->Instansi_model->cari($data['token']);
        // $hasil_mh = $this->Mahasiswa_model->cari($data['token']);
        // $hasil_um = $this->Umum_model->cari($data['token']);
        // if (empty($hasil_ins) && empty($hasil_um)) {
        //     $data['search_result'] = $hasil_mh;
        // } else if (empty($hasil_ins) && empty($hasil_mh)) {
        //     $data['search_result'] = $hasil_um;
        // } else {
        //     $data['search_result'] = $hasil_ins;
        // }
        $this->load->view('layout/header', $data);
        $this->load->view('pengajuan/vw_hasil_basyar', $data);
        $this->load->view('layout/footer');
    }
    // public function upload($keyword)
    // {
    //     $this->load->helper('form');
    //     $keyword = $this->input->post('token');
    //     $data['umum'] = $this->Umum_model->getByToken($keyword);
    //     // // $mahasiswa = $this->Mahasiswa_model->getByToken($data['keyword']);
    //     // if (empty($instansi)) {
    //     //     $data['ajuan'] = $mahasiswa;
    //     // } else {
    //     //     $data['ajuan'] = $instansi;
    //     // }

    //     $bayar = $_FILES['bayar']['name'];
    //     if ($bayar) {
    //         $config['allowed_types'] = 'pdf|png|jpg|jpeg';
    //         $config['max_size'] = '2048';
    //         $config['upload_path'] = './assets2/folder/';
    //         $this->load->library('upload', $config);
    //         if ($this->upload->do_upload('bayar')) {
    //             $file_name5 = $this->upload->data('file_name5');
    //             $this->db->set('bayar', $file_name5);
    //         } else {
    //             echo $this->upload->display_errors();
    //         }
    //     }

    //     $survey = $_FILES['survey']['name'];
    //     if ($survey) {
    //         $config['allowed_types'] = 'pdf|png|jpg|jpeg';
    //         $config['max_size'] = '2048';
    //         $config['upload_path'] = './assets/folder/';
    //         $this->load->library('upload', $config);
    //         if ($this->upload->do_upload('survey')) {
    //             $file_name2 = $this->upload->data('file_name2');
    //             $this->db->set('survey', $file_name2);
    //         } else {
    //             echo $this->upload->display_errors();
    //         }
    //     }


    //     $data1 = [
    //         'bayar' => $bayar,
    //         'survey' => $survey
    //     ];
    //     print_r($keyword);
    //     die;

    //     $this->Umum_model->bayar(['token' => $keyword], $data1);

    //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima kasih telah melakukan
    //     pembayaran dan survey. Kami akan memproses pengajuan Anda</div>');
    //     redirect('home/bayar');
    // }
    function upload()
    {
        $data['token'] = $this->input->post('token');
        $data['umum'] = $this->Umum_model->getByToken($data['token']);

        $bayar =  str_replace(' ', '_', $_FILES['bayar']['name']);
        if ($bayar) {
            $config['allowed_types'] = 'pdf|png|jpg|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets2/folder/bayar';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('bayar')) {
                $file_name5 = $this->upload->data('file_name5');
                $this->db->set('bayar', $file_name5);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $survey = str_replace(' ', '_', $_FILES['survey']['name']);
        if ($survey) {
            $config['allowed_types'] = 'pdf|png|jpg|jpeg';
            $config['max_size'] = '2048'; //satuan KB
            $config['upload_path'] = './assets2/folder/bayar';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('survey')) {
                $file_name2 = $this->upload->data('file_name2');
                $this->db->set('survey', $file_name2);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $token = $this->input->post('token');
        $data['umum'] = $this->Umum_model->getByToken($data['token']);
        $token = $data['token'];

        $data1 = [
            'bayar' => $bayar,
            'survey' => $survey,
            'token' => $token
        ];
        // print_r($data1);
        // die;

        $this->Umum_model->bayar($bayar, $survey, $token);
        //$this->Instansi_ajuan_model->insert_detail_track($data1);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima Kasih telah melakukan pembayaran. Permintaaan Anda akan diproses</div>');
        redirect('home/bayar');
    }
}
