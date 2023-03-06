<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Config\Services;


class Umum extends CI_Controller
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
        //$this->load->model('pengajuan_model');
        $this->load->model('Umum_model');
    }
    public function index()
    {
        $data['umum'] = $this->Umum_model->get();
        $this->load->view('layout\header');
        $this->load->view('pengajuan\vw_layanan_umum');
        $this->load->view('layout\footer');
    }

    function tambah_umum()
    {
        $this->load->helper('string');
        $upload_permohonan = str_replace(' ', '_', $_FILES['surat_permohonan']['name']);
        if ($upload_permohonan) {
            $config['allowed_types'] = 'pdf|jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets2/folder/surat_permohonan/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('surat_permohonan')) {
                $file_name = $this->upload->data('file_name');
                $this->db->set('surat_permohonan', $file_name);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $upload_ktp = str_replace(' ', '_', $_FILES['ktp']['name']);
        if ($upload_ktp) {
            $config['allowed_types'] = 'pdf|jpeg|jpg|png';
            //$config['max_size'] = '2048';
            $config['upload_path'] = './assets2/folder/ktp/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('ktp')) {
                $file_name1 = $this->upload->data('file_name1');
                $this->db->set('ktp', $file_name1);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $informasi = $this->input->post('informasi');
        $in_array = implode(",", $informasi);

        $unsur = $this->input->post('unsur');
        $in_array3 = implode(",", $unsur);

        $token = random_string('alpha', 20);

        $data = [
            'nama' => htmlentities($this->input->post('nama')),
            'instansi' => htmlentities($this->input->post('instansi')),
            'email' => htmlentities($this->input->post('email')),
            'hp' => htmlentities($this->input->post('hp')),
            'alamat' => htmlentities($this->input->post('alamat')),
            'peruntukan_data' => htmlentities($this->input->post('peruntukan_data')),
            'perolehan_data' => htmlentities($this->input->post('perolehan_data')),
            'bentuk' => htmlentities($this->input->post('bentuk')),
            'lokasi' => htmlentities($this->input->post('lokasi')),
            'periode' => htmlentities($this->input->post('periode')),
            'panjang' => htmlentities($this->input->post('panjang')),
            'informasi' => $in_array,
            'unsur' => $in_array3,
            'token' => $token,
            'keterangan' => htmlentities($this->input->post('keterangan')),
            'ktp' => $upload_ktp,
            'surat_permohonan' => $upload_permohonan,
            // 'ktp' => $this->input->post('ktp'),
            //'surat_permohonan' => $this->input->post('surat_permohonan'),
        ];

        // print_r($data);
        // die;

        $data1 = [
            'status' => 'Belum Diproses',
            'token' => $token
        ];

        // Script aslinya
        // $this->Umum_model->insert($data);
        // $this->Umum_model->insert_detail_track($data1);
        // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Data Berhasil Diajukan.</br>
        // 	Simpan Kode Berikut <b>' . $token . '</b> untuk mengecek status data di menu Search dan lakukan pembayaran ke
        //     <b> Nomor Rekening : 1323521747 (BNI) <b> dan input bukti pembayarannya ke Menu Pembayaran</div>');

        // Script yang sedang diubah.
        $hasilInsert = $this->Umum_model->insert($data);
        $hasilInsertToken = $this->Umum_model->insert_detail_track($data1);
        if($hasilInsert == 'Berhasil') {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Data Berhasil Diajukan.</br>
         	Simpan Kode Berikut <b>' . $token . '</b> untuk mengecek status data di menu Search dan lakukan pembayaran ke
            <b> Nomor Rekening : 1323521747 (BNI) <b> dan input bukti pembayarannya ke Menu Pembayaran</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><b>Pengajuan Data Gagal Dilakukan.</b></br>
         	Silahkan periksa kembali data anda, pastikan data yang anda ajukan lengkap.</div>');
        }
        redirect('pengajuan\vw_layanan_umum');
    }


    public function file_check($str)
    {
        $allowed_mime_type_arr = array('application/pdf');
        $mime = get_mime_by_extension($_FILES['surat_permohonan']['name']);
        if (isset($_FILES['surat_permohonan']['name']) && $_FILES['surat_permohonan']['name'] != "") {
            if (in_array($mime, $allowed_mime_type_arr)) {
                return true;
            } else {
                $this->form_validation->set_message('file_check', 'Hanya bisa menggunakan ekstensi PDF');
                return false;
            }
        } else {
            $this->form_validation->set_message('file_check', 'Surat Permohonan Wajib Diisi');
            return false;
        }
    }
    public function file_check2($str)
    {
        $allowed_mime_type_arr = array('application/pdf');
        $mime = get_mime_by_extension($_FILES['ktp']['name']);
        if (isset($_FILES['ktp']['name']) && $_FILES['ktp']['name'] != "") {
            if (in_array($mime, $allowed_mime_type_arr)) {
                return true;
            } else {
                $this->form_validation->set_message('file_check2', 'Hanya bisa menggunakan ekstensi PDF');
                return false;
            }
        } else {
            $this->form_validation->set_message('file_check2', 'KTP Wajib Diisi');
            return false;
        }
    }
    // function tambah_umum()
    // {
    //     $this->load->helper('string');
    //     //$data['judul'] = "Halaman Edit Dosen";
    //     $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama  wajib disi']);
    //     $this->form_validation->set_rules('instansi', 'Instansi', 'required', ['required' => 'Universitas wajib disi']);
    //     $this->form_validation->set_rules(
    //         'email',
    //         'Email',
    //         'required|valid_email',
    //         [
    //             'required' => 'Email wajib disi',
    //             'valid_email' => 'Gunakan Email yang akurat'
    //         ]
    //     );
    //     $this->form_validation->set_rules('hp', 'HP', 'required|regex_match[/^[0-9]{10}$/]', [
    //         'required' => 'HP wajib disi',
    //         'regex_match' => 'Nomor HP Harus akurat'
    //     ]);
    //     $this->form_validation->set_rules('hp', 'HP', 'required', ['required' => 'HP wajib disi']);
    //     $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat wajib disi']);
    //     $this->form_validation->set_rules('peruntukan_data', 'Peruntukan Data', 'required', ['required' => 'Peruntukan Data wajib disi']);
    //     $this->form_validation->set_rules('perolehan_data', 'Perolehan Data', 'required', ['required' => 'Perolehan Data wajib disi']);
    //     $this->form_validation->set_rules('bentuk', 'Bentuk', 'required', ['required' => 'Bentuk Informasi wajib disi']);
    //     // $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', ['required' => 'Keterangan wajib disi']);
    //     $this->form_validation->set_rules('unsur[]', 'Unsur', 'required', ['required' => 'Unsur wajib disi']);
    //     $this->form_validation->set_rules('surat_permohonan', 'Surat Permohonan', 'callback_file_check');
    //     $this->form_validation->set_rules('ktp', 'KTP', 'callback_file_check3');
    //     // $this->form_validation->set_rules('ktm', 'KTM', 'callback_file_check4');
    //     // $this->form_validation->set_rules('survey', 'Survey', 'required', ['required' => 'Survey Wajib diisi dan di Screenshoot']);
    //     $this->form_validation->set_rules('lokasi', 'Lokasi', 'required', ['required' => 'Lokasi wajib disi']);
    //     $this->form_validation->set_rules('periode', 'Waktu', 'required', ['required' => 'Waktu wajib disi']);
    //     $this->form_validation->set_rules('panjang', 'Panjang Data', 'required', ['required' => 'Panjang Waktu wajib disi']);
    //     $this->form_validation->set_rules('informasi[]', 'Informasi', 'required', ['required' => 'Informasi wajib disi']);

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view("layout/header");
    //         $this->load->view("home/form_umum");
    //         $this->load->view("layout/footer");
    //     } else {
    //         $data['umum'] = $this->Umum_model->get();

    //         $upload_permohonan = $_FILES['surat_permohonan']['name'];
    //         if ($upload_permohonan) {
    //             $config['allowed_types'] = 'pdf|jpeg|jpg|png';
    //             $config['max_size'] = '2048';
    //             $config['upload_path'] = './assets2/folder/surat_permohonan/';
    //             $this->load->library('upload', $config);
    //             if ($this->upload->do_upload('surat_permohonan')) {
    //                 $file_name = $this->upload->data('file_name');
    //                 $this->db->set('surat_permohonan', $file_name);
    //             } else {
    //                 echo $this->upload->display_errors();
    //             }
    //         }

    //         $upload_ktp = $_FILES['ktp']['name'];
    //         if ($upload_ktp) {
    //             $config['allowed_types'] = 'pdf|jpeg|jpg|png';
    //             //$config['max_size'] = '2048';
    //             $config['upload_path'] = './assets2/folder/ktp/';
    //             $this->load->library('upload', $config);
    //             if ($this->upload->do_upload('ktp')) {
    //                 $file_name1 = $this->upload->data('file_name1');
    //                 $this->db->set('ktp', $file_name1);
    //             } else {
    //                 echo $this->upload->display_errors();
    //             }
    //         }

    //         $informasi = $this->input->post('informasi');
    //         $in_array = implode(",", $informasi);

    //         $unsur = $this->input->post('unsur');
    //         $in_array3 = implode(",", $unsur);

    //         $token = random_string('alpha', 20);

    //         $data = [
    //             'nama' => $this->input->post('nama'),
    //             'instansi' => $this->input->post('instansi'),
    //             'email' => $this->input->post('email'),
    //             'hp' => $this->input->post('hp'),
    //             'alamat' => $this->input->post('alamat'),
    //             'peruntukan_data' => $this->input->post('peruntukan_data'),
    //             'perolehan_data' => $this->input->post('perolehan_data'),
    //             'bentuk' => $this->input->post('bentuk'),
    //             'lokasi' => $this->input->post('lokasi'),
    //             'periode' => $this->input->post('periode'),
    //             'panjang' => $this->input->post('panjang'),
    //             'informasi' => $in_array,
    //             'unsur' => $in_array3,
    //             'token' => $token,
    //             'keterangan' => $this->input->post('keterangan'),
    //             'ktp' => $upload_ktp,
    //             'surat_permohonan' => $upload_permohonan,
    //             'ktp' => $this->input->post('ktp'),
    //             'surat_permohonan' => $this->input->post('surat_permohonan'),
    //         ];

    //         print_r($data);
    //         die;

    //         $data1 = [
    //             'status' => 'Belum Diproses',
    //             'token' => $token
    //         ];

    //         $this->Umum_model->insert($data);
    //         $this->Umum_model->insert_detail_track($data1);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Data Berhasil Diajukan</br>
    // 	Simpan Kode Berikut <b>' . $token . '</b> untuk mengecek status data di menu Search</div>');
    //         redirect('home/umum');
    //     }
    // }

    // public function file_check($str)
    // {
    //     $allowed_mime_type_arr = array('application/pdf');
    //     $mime = get_mime_by_extension($_FILES['surat_permohonan']['name']);
    //     if (isset($_FILES['surat_permohonan']['name']) && $_FILES['surat_permohonan']['name'] != "") {
    //         if (in_array($mime, $allowed_mime_type_arr)) {
    //             return true;
    //         } else {
    //             $this->form_validation->set_message('file_check', 'Hanya bisa menggunakan ekstensi PDF');
    //             return false;
    //         }
    //     } else {
    //         $this->form_validation->set_message('file_check', 'Surat Permohonan Wajib Diisi');
    //         return false;
    //     }
    // }
    // public function file_check2($str)
    // {
    //     $allowed_mime_type_arr = array('application/pdf');
    //     $mime = get_mime_by_extension($_FILES['ktp']['name']);
    //     if (isset($_FILES['ktp']['name']) && $_FILES['ktp']['name'] != "") {
    //         if (in_array($mime, $allowed_mime_type_arr)) {
    //             return true;
    //         } else {
    //             $this->form_validation->set_message('file_check2', 'Hanya bisa menggunakan ekstensi PDF');
    //             return false;
    //         }
    //     } else {
    //         $this->form_validation->set_message('file_check2', 'KTP Wajib Diisi');
    //         return false;
    //     }
    // }
    // FILE SEMUA DI FOLDER SURAT PERMOHONAN UNTUK UNTUK KTP
    // SURVEY DAN BAYAR DI FOLDER SEMUA!!
    public function filektp($id)
    {
        $data['umum'] = $this->Umum_model->getById($id);
        $this->load->view('dokumen/umum/ktp_umum', $data);
    }
    public function filesurvey($id)
    {
        $data['umum'] = $this->Umum_model->getById($id);
        $this->load->view('dokumen/umum/survey_umum', $data);
    }
    public function filebayar($id)
    {
        $data['umum'] = $this->Umum_model->getById($id);
        $this->load->view('dokumen/umum/bayar_umum', $data);
    }
    public function filepermohonan($id)
    {
        $data['umum'] = $this->Umum_model->getById($id);
        $this->load->view('dokumen/umum/permohonan_umum', $data);
    }
}
