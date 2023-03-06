<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Mahasiswa extends CI_Controller
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
        // $this->load->model('pengajuan_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Survei_model');
    }
    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get();
        $this->load->view('layout/header');
        $this->load->view('pengajuan/form_mahasiswa');
        $this->load->view('layout/footer');
    }
    // function tambah_mahasiswa()
    // {
    //     $this->load->helper('string');
    //     $upload_permohonan = $_FILES['surat_permohonan']['name'];
    //     if ($upload_permohonan) {
    //         $config['allowed_types'] = 'pdf|jpeg|jpg|png';
    //         //$config['max_size'] = '2048';
    //         $config['upload_path'] = './assets2/folder/surat_permohonan/';
    //         $this->load->library('upload', $config);
    //         if ($this->upload->do_upload('surat_permohonan')) {
    //             $file_name = $this->upload->data('file_name');
    //             $this->db->set('surat_permohonan', $file_name);
    //         } else {
    //             echo $this->upload->display_errors();
    //         }
    //     }
    //     $upload_surat0 = $_FILES['surat0']['name'];
    //     if ($upload_surat0) {
    //         $config['allowed_types'] = 'pdf|jpeg|jpg|png';
    //         //$config['max_size'] = '2048';
    //         $config['upload_path'] = './assets2/folder/surat0/';
    //         $this->load->library('upload', $config);
    //         if ($this->upload->do_upload('surat0')) {
    //             $file_name1 = $this->upload->data('file_name1');
    //             $this->db->set('surat0', $file_name1);
    //         } else {
    //             echo $this->upload->display_errors();
    //         }
    //     }
    //     $upload_proposal = $_FILES['proposal']['name'];
    //     if ($upload_proposal) {
    //         $config['allowed_types'] = 'pdf|jpeg|jpg|png';
    //         //$config['max_size'] = '2048';
    //         $config['upload_path'] = './assets2/folder/proposal/';
    //         $this->load->library('upload', $config);
    //         if ($this->upload->do_upload('proposal')) {
    //             $file_name3 = $this->upload->data('file_name3');
    //             $this->db->set('proposal', $file_name3);
    //         } else {
    //             echo $this->upload->display_errors();
    //         }
    //     }
    //     $upload_ktp = $_FILES['ktp']['name'];
    //     if ($upload_ktp) {
    //         $config['allowed_types'] = 'pdf|jpg|png|jpeg';
    //         //$config['max_size'] = '2048';
    //         $config['upload_path'] = './assets2/folder/ktp/';
    //         $this->load->library('upload', $config);
    //         if ($this->upload->do_upload('ktp')) {
    //             $file_name4 = $this->upload->data('file_name4');
    //             $this->db->set('ktp', $file_name4);
    //         } else {
    //             echo $this->upload->display_errors();
    //         }
    //     }
    //     $upload_ktm = $_FILES['ktm']['name'];
    //     if ($upload_ktm) {
    //         $config['allowed_types'] = 'pdf|jpg|png|jpeg';
    //         //$config['max_size'] = '2048';
    //         $config['upload_path'] = './assets2/folder/ktm/';
    //         $this->load->library('upload', $config);
    //         if ($this->upload->do_upload('ktm')) {
    //             $file_name5 = $this->upload->data('file_name5');
    //             $this->db->set('ktm', $file_name5);
    //         } else {
    //             echo $this->upload->display_errors();
    //         }
    //     }

    //     $upload_survey = $_FILES['survey']['name'];
    //     if ($upload_survey) {
    //         $config['allowed_types'] = 'pdf|jpeg|jpg|png';
    //         //$config['max_size'] = '2048';
    //         $config['upload_path'] = './assets2/folder/survey/';
    //         $this->load->library('upload', $config);
    //         if ($this->upload->do_upload('survey')) {
    //             $file_name6 = $this->upload->data('file_name6');
    //             $this->db->set('survey', $file_name6);
    //         } else {
    //             echo $this->upload->display_errors();
    //         }
    //     }

    //     $informasi = $this->input->post('informasi');
    //     $in_array = implode(",", $informasi);

    //     $unsur = $this->input->post('unsur');
    //     $in_array3 = implode(",", $unsur);

    //     $token = random_string('alpha', 20);

    //     $data = [
    //         'nama' => $this->input->post('nama'),
    //         'universitas' => $this->input->post('universitas'),
    //         'email' => $this->input->post('email'),
    //         'hp' => $this->input->post('hp'),
    //         'alamat' => $this->input->post('alamat'),
    //         'peruntukan_data' => $this->input->post('peruntukan_data'),
    //         'perolehan_data' => $this->input->post('perolehan_data'),
    //         'bentuk' => $this->input->post('bentuk'),
    //         'lokasi' => $this->input->post('lokasi'),
    //         'waktu' => $this->input->post('waktu'),
    //         'panjang_data' => $this->input->post('panjang_data'),
    //         'keterangan' => $this->input->post('keterangan'),
    //         'informasi' => $in_array,
    //         'unsur' => $in_array3,
    //         'token' => $token,
    //         'ktp' => $upload_ktp,
    //         'surat_permohonan' => $upload_permohonan,
    //         'surat0' => $upload_surat0,
    //         'proposal' => $upload_proposal,
    //         'ktp' => $upload_ktp,
    //         'ktm' => $upload_ktm,
    //         'survey' => $upload_survey,
    //     ];

    //     print_r($data);
    //     die;

    //     $data1 = [
    //         'status' => 'Belum Diproses',
    //         'token' => $token
    //     ];

    //     $this->Mahasiswa_model->insert($data);
    //     $this->Mahasiswa_model->insert_detail_track($data1);
    //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Data Berhasil Diajukan</br>
    // 	Simpan Kode Berikut <b>' . $token . '</b> untuk mengecek status data di menu Search</div>');
    //     redirect('Mahasiswa');
    // }



    function tambah_mahasiswa()
    {
        $this->load->helper('string');
        //$data['judul'] = "Halaman Edit Dosen";
        // $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama  wajib disi']);
        // $this->form_validation->set_rules('universitas', 'Universitas', 'required', ['required' => 'Universitas wajib disi']);
        // $this->form_validation->set_rules(
        //     'email',
        //     'Email',
        //     'required|valid_email',
        //     [
        //         'required' => 'Email wajib disi',
        //         'valid_email' => 'Gunakan Email yang akurat'
        //     ]
        // );
        // $this->form_validation->set_rules('hp', 'HP', 'required|regex_match[/^[0-9]{10}$/]', [
        //     'required' => 'HP wajib disi',
        //     'regex_match' => 'Nomor HP Harus akurat'
        // ]);
        // $this->form_validation->set_rules('hp', 'HP', 'required', ['required' => 'HP wajib disi']);
        // $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat wajib disi']);
        // $this->form_validation->set_rules('peruntukan_data', 'Peruntukan Data', 'required', ['required' => 'Peruntukan Data wajib disi']);
        // $this->form_validation->set_rules('perolehan_data', 'Perolehan Data', 'required', ['required' => 'Perolehan Data wajib disi']);
        // $this->form_validation->set_rules('bentuk', 'Bentuk', 'required', ['required' => 'Bentuk Informasi wajib disi']);
        // $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', ['required' => 'Keterangan wajib disi']);
        // $this->form_validation->set_rules('unsur[]', 'Unsur', 'required', ['required' => 'Unsur wajib disi']);
        // $this->form_validation->set_rules('surat_permohonan', 'Surat Permohonan', 'callback_file_check');
        // $this->form_validation->set_rules('surat0', 'Surat 0 Rupiah', 'callback_file_check1');
        // $this->form_validation->set_rules('proposal', 'Proposal', 'callback_file_check2');
        // $this->form_validation->set_rules('ktp', 'KTP', 'callback_file_check3');
        // $this->form_validation->set_rules('ktm', 'KTM', 'callback_file_check4');
        // $this->form_validation->set_rules('lokasi', 'Lokasi', 'required', ['required' => 'Lokasi wajib disi']);
        // $this->form_validation->set_rules('waktu', 'Waktu', 'required', ['required' => 'Waktu wajib disi']);
        // $this->form_validation->set_rules('panjang_data', 'Panjang Data', 'required', ['required' => 'Panjang Waktu wajib disi']);
        // $this->form_validation->set_rules('informasi[]', 'Informasi', 'required', ['required' => 'Informasi wajib disi']);

        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view("layout/header");
        //     $this->load->view("home/form_mahasiswa");
        //     $this->load->view("layout/footer");
        // } else {
        //     $data['mahasiswa'] = $this->Mahasiswa_model->get();

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
        $upload_surat0 = str_replace(' ', '_', $_FILES['surat0']['name']);
        if ($upload_surat0) {
            $config['allowed_types'] = 'pdf|jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets2/folder/surat0/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('surat0')) {
                $file_name1 = $this->upload->data('file_name1');
                $this->db->set('surat0', $file_name1);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $upload_proposal = str_replace(' ', '_', $_FILES['proposal']['name']);
        if ($upload_proposal) {
            $config['allowed_types'] = 'pdf|jpeg|jpg|png';
            //$config['max_size'] = '2048';
            $config['upload_path'] = './assets2/folder/proposal/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('proposal')) {
                $file_name3 = $this->upload->data('file_name3');
                $this->db->set('proposal', $file_name3);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $upload_ktp = str_replace(' ', '_', $_FILES['ktp']['name']);
        if ($upload_ktp) {
            $config['allowed_types'] = 'pdf|jpg|png|jpeg';
            //$config['max_size'] = '2048';
            $config['upload_path'] = './assets2/folder/ktp/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('ktp')) {
                $file_name4 = $this->upload->data('file_name4');
                $this->db->set('ktp', $file_name4);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $upload_ktm = str_replace(' ', '_', $_FILES['ktm']['name']);
        if ($upload_ktm) {
            $config['allowed_types'] = 'pdf|jpg|png|jpeg';
            //$config['max_size'] = '2048';
            $config['upload_path'] = './assets2/folder/ktm/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('ktm')) {
                $file_name5 = $this->upload->data('file_name5');
                $this->db->set('ktm', $file_name5);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $upload_survey = str_replace(' ', '_', $_FILES['survey']['name']);
        if ($upload_survey) {
            $config['allowed_types'] = 'pdf|jpeg|jpg|png';
            //$config['max_size'] = '2048';
            $config['upload_path'] = './assets2/folder/survey/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('survey')) {
                $file_name6 = $this->upload->data('file_name6');
                $this->db->set('survey', $file_name6);
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
            'nama' => $this->input->post('nama'),
            'universitas' => $this->input->post('universitas'),
            'email' => $this->input->post('email'),
            'hp' => $this->input->post('hp'),
            'alamat' => $this->input->post('alamat'),
            'peruntukan_data' => $this->input->post('peruntukan_data'),
            'perolehan_data' => $this->input->post('perolehan_data'),
            'bentuk' => $this->input->post('bentuk'),
            'lokasi' => $this->input->post('lokasi'),
            'waktu' => $this->input->post('waktu'),
            'panjang_data' => $this->input->post('panjang_data'),
            'keterangan' => $this->input->post('keterangan'),
            'informasi' => $in_array,
            'unsur' => $in_array3,
            'token' => $token,
            'ktp' => $upload_ktp,
            'ktm' => $upload_ktm,
            'surat_permohonan' => $upload_permohonan,
            'surat0' => $upload_surat0,
            'proposal' => $upload_proposal,
            'survey' => $upload_survey,
        ];

        // print_r($data);
        // die;

        $data1 = [
            'status' => 'Belum Diproses',
            'token' => $token
        ];

        // $this->Mahasiswa_model->insert($data);
        // $this->Mahasiswa_model->insert_detail_track($data1);
        // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Data Berhasil Diajukan</br>
    	// Simpan Kode Berikut <b>' . $token . '</b> untuk mengecek status data di menu Search</div>');

        $hasilInsert = $this->Mahasiswa_model->insert($data);
        $hasilInsertToken = $this->Mahasiswa_model->insert_detail_track($data1);
        if($hasilInsert == 'Berhasil') {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Data Berhasil Diajukan</br>
            // Simpan Kode Berikut <b>' . $token . '</b> untuk mengecek status data di menu Search</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><b>Pengajuan Data Gagal Dilakukan.</b></br>
         	Silahkan periksa kembali data anda, pastikan data yang anda ajukan lengkap.</div>');
        }

        redirect('Mahasiswa');
    }
    //}

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
    //         $this->form_validation->set_message('file_check', 'Surat Permohonan Rupiah Wajib Diisi');
    //         return false;
    //     }
    // }
    // public function file_check1($str)
    // {
    //     $allowed_mime_type_arr = array('application/pdf');
    //     $mime = get_mime_by_extension($_FILES['surat0']['name']);
    //     if (isset($_FILES['surat0']['name']) && $_FILES['surat0']['name'] != "") {
    //         if (in_array($mime, $allowed_mime_type_arr)) {
    //             return true;
    //         } else {
    //             $this->form_validation->set_message('file_check1', 'Hanya bisa menggunakan ekstensi PDF');
    //             return false;
    //         }
    //     } else {
    //         $this->form_validation->set_message('file_check1', 'Surat 0 Rupiah Wajib Diisi');
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

    // public function file_check3($str)
    // {
    //     $allowed_mime_type_arr = array('application/pdf');
    //     $mime = get_mime_by_extension($_FILES['surat0']['name']);
    //     if (isset($_FILES['surat0']['name']) && $_FILES['surat0']['name'] != "") {
    //         if (in_array($mime, $allowed_mime_type_arr)) {
    //             return true;
    //         } else {
    //             $this->form_validation->set_message('file_check3', 'Hanya bisa menggunakan ekstensi PDF');
    //             return false;
    //         }
    //     } else {
    //         $this->form_validation->set_message('file_check3', 'Surat Permohonan Wajib Diisi');
    //         return false;
    //     }
    // }
    // public function file_check4($str)
    // {
    //     $allowed_mime_type_arr = array('application/pdf');
    //     $mime = get_mime_by_extension($_FILES['proposal']['name']);
    //     if (isset($_FILES['proposal']['name']) && $_FILES['proposal']['name'] != "") {
    //         if (in_array($mime, $allowed_mime_type_arr)) {
    //             return true;
    //         } else {
    //             $this->form_validation->set_message('file_check4', 'Hanya bisa menggunakan ekstensi PDF');
    //             return false;
    //         }
    //     } else {
    //         $this->form_validation->set_message('file_check4', 'KTP Wajib Diisi');
    //         return false;
    //     }
    // }
    public function export()
    {
        header("Content-type=application/vnd.ms.excel");
        header("Content-disposition: attachment; filename=Laporan Permintaan Data Pendidikan.xls");
        $data['result'] = $this->Mahasiswa_model->GetDataLaporan(0, 1000000);
        $this->load->view('admin_pengajuan/report_mh', $data);
    }
    public function fileproposal($id)
    {
        $data['title'] = "Tambah Data Surat Keluar";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa_ajuan'] = $this->Mahasiswa_model->getById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dokumen/pp_maha', $data);
        $this->load->view('dokumen/ktm_maha', $data);
        $this->load->view('dokumen/ktp_maha', $data);
        $this->load->view('templates/footer');
    }
    public function filektm($id)
    {
        $data['mahasiswa_ajuan'] = $this->Mahasiswa_model->getById($id);
        $this->load->view('dokumen/ktm_maha', $data);
    }
    public function filektp($id)
    {
        $data['mahasiswa_ajuan'] = $this->Mahasiswa_model->getById($id);
        $this->load->view('dokumen/ktp_maha', $data);
    }
    public function filesurvey($id)
    {
        $data['mahasiswa_ajuan'] = $this->Mahasiswa_model->getById($id);
        $this->load->view('dokumen/survey_maha', $data);
    }
    public function filesurat0($id)
    {
        $data['mahasiswa_ajuan'] = $this->Mahasiswa_model->getById($id);
        $this->load->view('dokumen/surat0_maha', $data);
    }
    public function filepermohonan($id)
    {
        $data['mahasiswa_ajuan'] = $this->Mahasiswa_model->getById($id);
        $this->load->view('dokumen/permohonan_maha', $data);
    }
}
