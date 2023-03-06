<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instansi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Instansi_model');
    }
    public function index()
    {
        $data['instansi'] = $this->Instansi_model->get();
        $this->load->view('layout/header');
        $this->load->view('pengajuan/vw_layanan_instansi');
        $this->load->view('layout/footer');
    }
    public function export()
    {
        header("Content-type=application/vnd.ms.excel");
        header("Content-disposition: attachment; filename=Laporan Layanan Data Instansi.xls");
        $data['result'] = $this->Instansi_model->GetDataLaporan(0, 1000000);
        //$data['klasifikasi'] = $this->Klasifikasi_model->get();
        $this->load->view('admin_pengajuan/report_in', $data);
    }
    function tambah_instansi()
    {
        $this->load->helper('string');
        $upload_permohonan =  str_replace(' ', '_', $_FILES['surat_permohonan']['name']);
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
        $upload_proposal =  str_replace(' ', '_', $_FILES['proposal']['name']);
        if ($upload_proposal) {
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets2/folder/proposal/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('proposal')) {
                $file_name = $this->upload->data('file_name');
                $this->db->set('proposal', $file_name);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $upload_ktp =  str_replace(' ', '_', $_FILES['ktp']['name']);
        if ($upload_ktp) {
            $config['allowed_types'] = 'pdf|jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets2/folder/ktp/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('ktp')) {
                $file_name1 = $this->upload->data('file_name1');
                $this->db->set('ktp', $file_name1);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $upload_survey = str_replace(' ', '_', $_FILES['survey']['name']);
        if ($upload_ktp) {
            $config['allowed_types'] = 'pdf|jpeg|jpg|png';
            $config['max_size'] = '5048';
            $config['upload_path'] = './assets2/folder/survey/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('survey')) {
                $file_name3 = $this->upload->data('file_name3');
                $this->db->set('survey', $file_name3);
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
            'keterangan' => htmlentities($this->input->post('keterangan')),
            'informasi' => $in_array,
            'unsur' => $in_array3,
            'token' => $token,
            'surat_permohonan' => $upload_permohonan,
            'proposal' => $upload_proposal,
            'ktp' => $upload_ktp,
            'survey' => $upload_survey,
        ];

        // print_r($data);
        // die;

        $data1 = [
            'status' => 'Belum Diproses',
            'token' => $token
        ];

    //     $this->Instansi_model->insert($data);
    //     $this->Instansi_model->insert_detail_track($data1);
    //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Data Berhasil Diajukan</br>
    // Simpan Kode Berikut <b>' . $token . '</b> untuk mengecek status data di menu Search</div>');

        $hasilInsert = $this->Instansi_model->insert($data);
        $hasilInsertToken = $this->Instansi_model->insert_detail_track($data1);
        if($hasilInsert == 'Berhasil') {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Data Berhasil Diajukan</br>
            // Simpan Kode Berikut <b>' . $token . '</b> untuk mengecek status data di menu Search</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><b>Pengajuan Data Gagal Dilakukan.</b></br>
         	Silahkan periksa kembali data anda, pastikan data yang anda ajukan lengkap.</div>');
        }
        redirect('Instansi');
    }

    // function tambah_instansi()
    // {
    //     $this->load->helper('string');
    //     //$data['judul'] = "Halaman Edit Dosen";
    //     $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama  wajib disi']);
    //     $this->form_validation->set_rules('instansi', 'Instansi', 'required', ['required' => 'Instansi wajib disi']);
    //     $this->form_validation->set_rules(
    //         'email',
    //         'Email',
    //         'required|valid_email',
    //         [
    //             'required' => 'Email wajib disi',
    //             'valid_email' => 'Gunakan Email yang akurat'
    //         ]
    //     );
    //     $this->form_validation->set_rules('hp', 'HP', 'required|regex_match[/^[0-9]{12}$/]', [
    //         'required' => 'HP wajib disi',
    //         'regex_match' => 'Nomor HP Harus akurat'
    //     ]);
    //     $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat wajib disi']);
    //     $this->form_validation->set_rules('peruntukan_data', 'Peruntukan Data', 'required', ['required' => 'Peruntukan Data wajib disi']);
    //     $this->form_validation->set_rules('perolehan_data', 'Perolehan Data', 'required', ['required' => 'Perolehan Data wajib disi']);
    //     $this->form_validation->set_rules('bentuk', 'Bentuk', 'required', ['required' => 'Bentuk Informasi wajib disi']);
    //     $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', ['required' => 'Keterangan wajib disi']);
    //     // $this->form_validation->set_rules('surat_permohonan', 'Surat Permohonan', 'callback_file_check');
    //     // $this->form_validation->set_rules('ktp', 'KTP', 'callback_file_check2');
    //     $this->form_validation->set_rules('unsur[]', 'Unsur', 'required', ['required' => 'Unsur wajib disi']);
    //     $this->form_validation->set_rules('lokasi', 'Lokasi', 'required', ['required' => 'Lokasi wajib disi']);
    //     $this->form_validation->set_rules('periode', 'Periode', 'required', ['required' => 'Waktu wajib disi']);
    //     $this->form_validation->set_rules('panjang', 'Panjang', 'required', ['required' => 'Panjang Waktu wajib disi']);
    //     $this->form_validation->set_rules('informasi[]', 'Informasi', 'required', ['required' => 'Informasi wajib disi']);

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view("layout/header");
    //         $this->load->view("pengajuan/vw_layanan_instansi");
    //         $this->load->view("layout/footer");
    //     } else {
    //         $data['instansi'] = $this->Instansi_model->get();

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
    //             $config['max_size'] = '2048';
    //             $config['upload_path'] = './assets2/folder/ktp/';
    //             $this->load->library('upload', $config);
    //             if ($this->upload->do_upload('ktp')) {
    //                 $file_name1 = $this->upload->data('file_name1');
    //                 $this->db->set('ktp', $file_name1);
    //             } else {
    //                 echo $this->upload->display_errors();
    //             }
    //         }
    //         $upload_survey = $_FILES['survey']['name'];
    //         if ($upload_ktp) {
    //             $config['allowed_types'] = 'pdf|jpeg|jpg|png';
    //             $config['max_size'] = '5048';
    //             $config['upload_path'] = './assets2/folder/survey/';
    //             $this->load->library('upload', $config);
    //             if ($this->upload->do_upload('survey')) {
    //                 $file_name3 = $this->upload->data('file_name3');
    //                 $this->db->set('survey', $file_name3);
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
    //             'keterangan' => $this->input->post('keterangan'),
    //             'informasi' => $in_array,
    //             'unsur' => $in_array3,
    //             'token' => $token,
    //             'surat_permohonan' => $upload_permohonan,
    //             'ktp' => $upload_ktp,
    //             'survey' => $upload_survey,
    //         ];

    //         print_r($data);
    //         die;

    //         $data1 = [
    //             'status' => 'Belum Diproses',
    //             'token' => $token
    //         ];

    //         $this->Instansi_model->insert($data);
    //         $this->Instansi_model->insert_detail_track($data1);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Data Berhasil Diajukan</br>
    // 	Simpan Kode Berikut <b>' . $token . '</b> untuk mengecek status data di menu Search</div>');
    //         redirect('Instansi');
    //     }
    // }


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
    public function filektp($id)
    {
        $data['instansi'] = $this->Instansi_model->getById($id);
        $this->load->view('dokumen/instansi/ktp_instan', $data);
    }
    public function filesurvey($id)
    {
        $data['instansi'] = $this->Instansi_model->getById($id);
        $this->load->view('dokumen/instansi/survey_instan', $data);
    }
    // public function filebayar($id)
    // {
    //     $data['umum'] = $this->Umum_model->getById($id);
    //     $this->load->view('dokumen/umum/bayar_umum', $data);
    // }
    public function filepermohonan($id)
    {
        $data['instansi'] = $this->Instansi_model->getById($id);
        $this->load->view('dokumen/instansi/permohonan_instan', $data);
    }
    public function fileproposal($id)
    {
        $data['instansi'] = $this->Instansi_model->getById($id);
        $this->load->view('dokumen/instansi/proposal_instan', $data);
    }
}
