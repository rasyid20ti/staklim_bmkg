<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

require_once('vendor/autoload.php');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model("Berita_model");
        $this->load->model("Buletin_model");
        $this->load->model("Artikel_model");
        $this->load->model("Instansi_model");
        $this->load->model("Umum_model");
        $this->load->model("Mahasiswa_model");
        $this->load->model("SKeluar_model");
        $this->load->model("SMasuk_model");
        $this->load->model("Bukutamu_model");
        $this->load->model("Klasifikasi_model");
        $this->load->model("Hth_model");
        $this->load->model("Narasi_model");
        $this->load->model("Kecamatan_model");
        $this->load->model("Kabupaten_model");
        $this->load->model("CurahHujan_model");
        $this->load->model("Suhu_model");
        $this->load->model("Kelembapan_model");
        $this->load->model("Headline_model");
        $this->load->database();
        $this->load->model('Import_model');
        $this->load->model('ImportSuhu_model');
        $this->load->model('ImportKelembapan_model');
        $this->load->model("Alat_model");
        $this->load->model('Hujan_model');
        $this->load->model('Agm1a_model');
        $this->load->model('Agm1b_model');
        $this->load->model('FormIklim_model');
        $this->load->model('Pegawai_model');
        $this->load->model('Me48_model');
        $this->load->model('Survei_model');
        $this->load->model('MAlat');
        $this->load->model('Penguapan_model');
        $this->load->model('Penyinaran_model');
        $this->load->model('Slider_model');
        $this->load->model('MenuLayanan_model');
        $this->load->model('MenuTarif_model');
        $this->load->model('Infografis_model');
        $this->load->model('Visualisasi_model');
        $this->load->model('Dasarian_model');
        $this->load->model('MediaDepan_model');
        $this->load->model('NolRupiah_model');
    }

    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Halaman Edit Profil';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim', [
            'required' => 'Nama wajib diisi.'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $image = $this->input->post('image');

            $this->db->set('name', $name);
            $this->db->set('image', $image);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update Profil Berhasil!</div>');
            redirect('admin');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Halaman Ganti Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('admin/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('admin/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('admin/changepassword');
                }
            }
        }
    }

    public function tabel()
    {
        $this->load->model('Hth_model');
        $data = $this->Hth_model->getHTH()->result();
        $hasil = array();
        foreach ($data as $row) {
            $hasil[] = array($row->id_stasiun, $row->lintang, $row->longitude, $row->hth, $row->ket);
        }
        $this->data = array(
            'daftar'    => $data,
            'lokasi'    => $hasil,
        );
    }

    public function berita()
    {
        $data['title'] = 'Halaman Data Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->db->get('berita')->result_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('title', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/berita', $data);
        $this->load->view('templates/footer');
    }

    public function beritaAdd()
    {
        $data['title'] = 'Tambah Berita Baru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->db->get('berita')->result_array();

        $this->form_validation->set_rules('title', 'Judul Berita', 'required', ['required' => 'Judul Berita wajib di isi']);
        $this->form_validation->set_rules('sub', 'Sub Berita', 'required', ['required' => 'Sub Berita wajib di isi']);
        $this->form_validation->set_rules('isi', 'Badan Berita', 'required', ['required' => 'Badan Berita wajib di isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/berita_add', $data);
            $this->load->view('templates/footer');
        } else {
            $title = $this->input->post('title', TRUE);
            $sub = $this->input->post('sub', TRUE);
            $isi = $this->input->post('isi', TRUE);
            $foto = $this->input->post('foto', TRUE);
            $penulis = $this->input->post('penulis', TRUE);

            $data = array(
                'title' => $title,
                'sub' => $sub,
                'isi' => $isi,
                'date_created' => date('Y-m-d'),
                'foto' => $foto,
                'penulis' => $penulis
            );
            // $upload_image = $_FILES['foto']['name'];
            // // echo json_encode($upload_image);
            // // exit;
            // if ($upload_image) {
            //     $config['allowed_types'] = 'jpg|png|jpeg';
            //     $config['upload_path'] = './assets/img/berita/';
            //     $config['max_size'] = 4096;
            //     $config['max_width'] = 1024;
            //     $config['max_height'] = 768;
            //     $this->load->library('upload', $config);
            //     if ($this->upload->do_upload('foto')) {
            //         $new_image = $this->upload->data('file_name');
            //         $this->db->set('foto', $new_image);
            //     } else {
            //         echo $this->upload->display_errors();
            //     }
            // }
            $this->db->insert('berita', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berita Berhasil Ditambahkan</div>');
            redirect('admin/berita');
        }
    }

    public function beritaEdit($id)
    {
        $data['title'] = 'Edit Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->Berita_model->getEdit($id);
        $this->form_validation->set_rules('isi', 'Isi Berita', 'required', [
            'required' => 'Isi Berita Wajib diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/berita_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'sub' => $this->input->post('sub'),
                'isi' => $this->input->post('isi'),
                'foto' => $this->input->post('foto'),
            ];
            $id = $this->input->post('id');
            $this->Berita_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berita Berhasil Diubah!</div>');
            redirect('admin/berita');
        }
    }

    public function newsEditProcess($id)
    {
        $this->Berita_model->getById($id);
    }

    public function beritaDelete($id)
    {
        $this->Berita_model->delete($id);
        $error = $this->db->error();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berita Berhasil Dihapus!</div>');
        redirect('admin/berita');
    }

    //BULETIN

    public function buletin()
    {
        $data['title'] = 'Database Buletin BMKG';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buletin'] = $this->db->get('buletin')->result_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/buletin', $data);
        $this->load->view('templates/footer');
    }

    public function addBuletin()
    {
        $data['title'] = 'Tambah Buletin Baru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buletin'] = $this->db->get('buletin')->result_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('title', 'title', 'required', ['required' => 'Judul Buletin Wajib Diisi']);
        $this->form_validation->set_rules('image', 'image', 'required', ['required' => 'Gambar Wajib Diisi']);
        $this->form_validation->set_rules('link', 'link', 'required', ['required' => 'Link Wajib Diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/buletin_add', $data);
            $this->load->view('templates/footer');
        } else {
            // $config['upload_path']          = './assets/img/buletin/';
            // $config['allowed_types']        = 'pdf';
            // $config['max_size']             = 12800;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 1024;

            // $this->load->library('upload', $config);
            // $file = $this->upload->data();
            // $file = $file['file_name'];

            $data = [
                'title' => $this->input->post('title'),
                'image' => $this->input->post('image'),
                'link' => $this->input->post('link'),
                'author' => 'Administrator'
            ];
            $this->db->insert('buletin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Buletin Berhasil Ditambahkan</div>');
            redirect('admin/buletin');
        }
    }

    public function editBuletin($id_edit)
    {
        $data['title'] = 'Edit Buletin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buletin'] = $this->Buletin_model->getById($id_edit);
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('title', 'title', 'required', ['required' => 'Judul Buletin Wajib Diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/buletin_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'image' => $this->input->post('image'),
                'link' => $this->input->post('link'),
                'author' => 'Administrator'
            ];
            $id = $this->input->post('id');
            $this->Buletin_model->update(['id' => $id], $data, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Buletin Berhasil Diubah!</div>');
            redirect('admin/buletin');
        }
    }

    public function buletinDelete($id)
    {
        $this->db->delete('buletin', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Buletin Berhasil Dihapus</div>');
        redirect('admin/buletin');
    }

    // Artikel
    public function artikel()
    {
        $data['title'] = "Halaman Artikel";
        $data['artikel'] = $this->Artikel_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/artikel', $data);
        $this->load->view('templates/footer');
    }

    public function artikel_add()
    {
        $data['artikel'] = $this->db->get('artikel')->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Halaman Tambah Artikel"; 
        $this->form_validation->set_rules('judul', 'judul', 'required', ['required' => 'Judul Wajib diisi']);
        $this->form_validation->set_rules('sub', 'sub', 'required', ['required' => 'Kategori Wajib diisi']);
        $this->form_validation->set_rules('isi', 'isi', 'required', ['required' => 'Isi Wajib diisi']);
        $this->form_validation->set_rules('foto', 'foto', 'required', ['required' => 'Gambar Wajib diisi']);
        $this->form_validation->set_rules('penulis', 'penulis', 'required', ['required' => 'Penulis Media Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/artikel_add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'sub' => $this->input->post('sub'),
                'isi' => $this->input->post('isi'),
                'foto' => $this->input->post('foto'),
                'penulis' => $this->input->post('penulis'),
            ];
            $this->Artikel_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Artikel Berhasil Ditambah!</div>');
            redirect('admin/artikel');
        }
    }

    public function artikel_edit($id_edit)
    {
        $data['title'] = "Halaman Edit Artikel";
        $data['artikel'] = $this->Artikel_model->getEdit($id_edit);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('id_artikel', 'id_artikel', 'required', ['required' => 'Artikel Wajib diisi']);
        $this->form_validation->set_rules('judul', 'judul', 'required', ['required' => 'Judul Wajib diisi']);
        $this->form_validation->set_rules('sub', 'sub', 'required', ['required' => 'Kategori Wajib diisi']);
        $this->form_validation->set_rules('isi', 'isi', 'required', ['required' => 'Isi Wajib diisi']);
        $this->form_validation->set_rules('foto', 'foto', 'required', ['required' => 'Gambar Wajib diisi']);
        $this->form_validation->set_rules('penulis', 'penulis', 'required', ['required' => 'Penulis Media Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/artikel_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'sub' => $this->input->post('sub'),
                'isi' => $this->input->post('isi'),
                'foto' => $this->input->post('foto'),
                'penulis' => $this->input->post('penulis'),
            ];

            $id = $this->input->post('id_artikel');
            $this->Artikel_model->update(['id_artikel' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Media Depan Berhasil Diubah!</div>');
            redirect('admin/artikel');
        }
    }

    public function artikel_delete($id)
    {
        $this->Artikel_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Media Depan tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Media Depan Berhasil Dihapus!</div>');
        }
        redirect('admin/artikel');
    }

    // Infografis
    public function infografis()
    {
        $data['title'] = "Halaman Infografis";
        $data['infografis'] = $this->Infografis_model->getView();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/infografis', $data);
        $this->load->view('templates/footer');
    }

    public function infografis_add()
    {
        // $data['infografis'] = $this->Infografis_model->get();
        $data['menuLayanan'] = $this->MenuLayanan_model->getMenu();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Halaman Tambah Infografis";
        $this->form_validation->set_rules('menu', 'menu', 'required', ['required' => 'Menu wajib diisi']);
        $this->form_validation->set_rules('judul', 'judul', 'required', ['required' => 'Judul Wajib diisi']);
        $this->form_validation->set_rules('isi', 'isi', 'required', ['required' => 'Isi Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/infografis_add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'idMenu' => $this->input->post('menu'),
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'gambar1' => $this->input->post('gambar1'),
                'gambar2' => $this->input->post('gambar2'),
                'penulis' => $this->input->post('penulis'),
                'status'=> '1'
            ];
            $this->Infografis_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Infografis Berhasil Ditambah!</div>');
            redirect('admin/infografis');
        }
    }

    public function infografis_edit($id_infografis)
    {
        $data['title'] = "Halaman Edit Infografis";
        $data['infografis'] = $this->Infografis_model->getById($id_infografis);
        $data['menuLayanan'] = $this->MenuLayanan_model->getMenu();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('judul', 'judul', 'required', ['required' => 'Judul Wajib diisi']);
        $this->form_validation->set_rules('isi', 'isi', 'required', ['required' => 'Isi Wajib diisi']);
        $this->form_validation->set_rules('gambar1', 'gambar1', 'required', ['required' => 'Gambar 1 Wajib diisi']);
        $this->form_validation->set_rules('gambar2', 'gambar2', 'required', ['required' => 'Gambar 2 Wajib diisi']);
        $this->form_validation->set_rules('penulis', 'penulis', 'required', ['required' => 'Penulis Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/infografis_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'idMenu' => $this->input->post('menu'),
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'gambar1' => $this->input->post('gambar1'),
                'gambar2' => $this->input->post('gambar2'),
                'penulis' => $this->input->post('penulis'),
            ];

            $id = $this->input->post('idInfo');
            $this->Infografis_model->update(['idInfo' => $id], $data, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Infografis Berhasil Diubah!</div>');
            redirect('admin/infografis');
        }
    }

    public function infografis_delete($id)
    {
        $this->Infografis_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Infografis tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Infografis Berhasil Dihapus!</div>');
        }
        redirect('admin/infografis');
    }

    // Visualisasi
    public function visualisasi()
    {
        $data['title'] = "Halaman Visualisasi";
        $data['visualisasi'] = $this->Visualisasi_model->getView();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/visualisasi', $data);
        $this->load->view('templates/footer');
    }

    public function visualisasi_add()
    {
        // $data['visualisasi'] = $this->Visualisasi_model->get();
        $data['menuLayanan'] = $this->MenuLayanan_model->getMenu();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Halaman Tambah Visualisasi"; 
        $this->form_validation->set_rules('judul', 'judul', 'required', ['required' => 'Judul Wajib diisi']);
        $this->form_validation->set_rules('gambar', 'gambar', 'required', ['required' => 'Gambar Wajib diisi']);
        $this->form_validation->set_rules('script', 'script', 'required', ['required' => 'Script Wajib diisi']);
        $this->form_validation->set_rules('penjelasan', 'penjelasan', 'required', ['required' => 'Penjelasan Wajib diisi']);
        $this->form_validation->set_rules('penulis', 'penulis', 'required', ['required' => 'Penulis Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/visualisasi_add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'idMenu' => $this->input->post('menu'),
                'judul' => $this->input->post('judul'),
                'gambar' => $this->input->post('gambar'),
                'script' => $this->input->post('script'),
                'penjelasan' => $this->input->post('penjelasan'),
                'penulis' => $this->input->post('penulis'),
                'status'=> '1'
            ];
            $this->Visualisasi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Visualisasi Berhasil Ditambah!</div>');
            redirect('admin/visualisasi');
        }
    }

    public function visualisasi_edit($id_visualisasi)
    {
        $data['title'] = "Halaman Edit Visualisasi";
        $data['visualisasi'] = $this->Visualisasi_model->getById($id_visualisasi);
        $data['menuLayanan'] = $this->MenuLayanan_model->getMenu();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->form_validation->set_rules('idVisual', 'idVisual', 'required', ['required' => 'idVisual Wajib diisi']);
        $this->form_validation->set_rules('judul', 'judul', 'required', ['required' => 'Judul Wajib diisi']);
        $this->form_validation->set_rules('gambar', 'gambar', 'required', ['required' => 'Gambar Wajib diisi']);
        $this->form_validation->set_rules('script', 'script', 'required', ['required' => 'Script Wajib diisi']);
        $this->form_validation->set_rules('penjelasan', 'penjelasan', 'required', ['required' => 'Penjelasan Wajib diisi']);
        $this->form_validation->set_rules('penulis', 'penulis', 'required', ['required' => 'Penulis Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/visualisasi_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'idMenu' => $this->input->post('menu'),
                'judul' => $this->input->post('judul'),
                'gambar' => $this->input->post('gambar'),
                'script' => $this->input->post('script'),
                'penjelasan' => $this->input->post('penjelasan'),
                'penulis' => $this->input->post('penulis'),
                'status' => $this->input->post('status')
            ];

            $id = $this->input->post('idVisual');
            $this->Visualisasi_model->update(['idVisual' => $id], $data, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Visualisasi Berhasil Diubah!</div>');
            redirect('admin/visualisasi');
        }
    }

    public function visualisasi_delete($id)
    {
        $this->Visualisasi_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Visualisasi tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Visualisasi Berhasil Dihapus!</div>');
        }
        redirect('admin/visualisasi');
    }

    public function dasarian()
    {
        $data['title'] = "Halaman Informasi Iklim";
        $data['dasarian'] = $this->Dasarian_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dasarian', $data);
        $this->load->view('templates/footer');
    }

    public function dasarian_add()
    {
        $data['dasarian'] = $this->Dasarian_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Halaman Tambah Informasi Iklim"; 
        $this->form_validation->set_rules('judul', 'judul', 'required', ['required' => 'Judul Wajib diisi']);
        $this->form_validation->set_rules('kategori', 'kategori', 'required', ['required' => 'Judul Wajib diisi']);
        $this->form_validation->set_rules('gambar', 'gambar', 'required', ['required' => 'Gambar Wajib diisi']);
        $this->form_validation->set_rules('gambar_dalam', 'gambar_dalam', 'required', ['required' => 'Gambar Dalam Wajib diisi']);
        $this->form_validation->set_rules('penjelasan', 'penjelasan', 'required', ['required' => 'Penjelasan Wajib diisi']);
        $this->form_validation->set_rules('penulis', 'penulis', 'required', ['required' => 'Penulis Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/dasarian_add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'kategori' => $this->input->post('kategori'),
                'gambar' => $this->input->post('gambar'),
                'gambar_dalam' => $this->input->post('gambar_dalam'),
                'penjelasan' => $this->input->post('penjelasan'),
                'penulis' => $this->input->post('penulis'),
                'status'=> '1'
            ];
            $this->Dasarian_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Informasi Iklim Berhasil Ditambah!</div>');
            redirect('admin/dasarian');
        }
    }

    public function dasarian_edit($id_edit)
    {
        $data['title'] = "Halaman Edit Informasi Iklim";
        $data['dasarian'] = $this->Dasarian_model->getById($id_edit);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('judul', 'judul', 'required', ['required' => 'Judul Wajib diisi']);
        // $this->form_validation->set_rules('kategori', 'kategori', 'required', ['required' => 'Kategori Wajib diisi']);
        $this->form_validation->set_rules('gambar', 'gambar', 'required', ['required' => 'Gambar Wajib diisi']);
        $this->form_validation->set_rules('gambar_dalam', 'gambar_dalam', 'required', ['required' => 'Gambar Dalam Wajib diisi']);
        $this->form_validation->set_rules('penjelasan', 'penjelasan', 'required', ['required' => 'Penjelasan Wajib diisi']);
        $this->form_validation->set_rules('penulis', 'penulis', 'required', ['required' => 'Penulis Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/dasarian_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                // 'kategori' => $this->input->post('kategori'),
                'gambar' => $this->input->post('gambar'),
                'gambar_dalam' => $this->input->post('gambar_dalam'),
                'penjelasan' => $this->input->post('penjelasan'),
                'penulis' => $this->input->post('penulis'),
                'status'=> '1'
            ];

            $id = $this->input->post('id_dasarian');
            $this->Dasarian_model->update(['id_dasarian' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('admin/dasarian');
        }
    }

    public function dasarian_delete($id)
    {
        $this->Dasarian_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Visualisasi tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Visualisasi Berhasil Dihapus!</div>');
        }
        redirect('admin/dasarian');
    }

    // Media Beranda Depan

    public function mediaDepan()
    {
        $data['title'] = "Halaman Media Beranda";
        $data['media'] = $this->MediaDepan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/mediaDepan', $data);
        $this->load->view('templates/footer');
    }

    public function mediaDepan_add()
    {
        $data['media'] = $this->MediaDepan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Halaman Tambah Media Depan"; 
        $this->form_validation->set_rules('judul', 'judul', 'required', ['required' => 'Judul Wajib diisi']);
        $this->form_validation->set_rules('linkMedia', 'linkMedia', 'required', ['required' => 'Link Media Wajib diisi']);
        $this->form_validation->set_rules('embed', 'embed', 'required', ['required' => 'Link Media Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/mediaDepan_add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'linkMedia' => $this->input->post('linkMedia'),
                'embed' => $this->input->post('embed'),
            ];
            $this->MediaDepan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Media Berhasil Ditambah!</div>');
            redirect('admin/mediaDepan');
        }
    }

    public function mediaDepan_edit($id_edit)
    {
        $data['title'] = "Halaman Edit Media Depan Beranda";
        $data['media'] = $this->MediaDepan_model->getById($id_edit);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('idMedia', 'idMedia', 'required', ['required' => 'Media Depan Wajib diisi']);
        $this->form_validation->set_rules('judul', 'judul', 'required', ['required' => 'Judul Wajib diisi']);
        $this->form_validation->set_rules('linkMedia', 'linkMedia', 'required', ['required' => 'Link Media Wajib diisi']);
        $this->form_validation->set_rules('embed', 'embed', 'required', ['required' => 'Link Media Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/mediaDepan_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'linkMedia' => $this->input->post('linkMedia'),
                'embed' => $this->input->post('embed'),
            ];

            $id = $this->input->post('idMedia');
            $this->MediaDepan_model->update(['idMedia' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Media Depan Berhasil Diubah!</div>');
            redirect('admin/mediaDepan');
        }
    }

    public function mediaDepan_delete($id)
    {
        $this->MediaDepan_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Media Depan tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Media Depan Berhasil Dihapus!</div>');
        }
        redirect('admin/mediaDepan');
    }



    // Slider Header
    public function slider()
    {
        $data['title'] = "Halaman Slider";
        $data['slider'] = $this->Slider_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/slider', $data);
        $this->load->view('templates/footer');
    }

    public function slider_add()
    {
        $data['slider'] = $this->Slider_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Halaman Tambah Slider";
        $this->form_validation->set_rules('namaSlider', 'fotoSlider', 'required', ['required' => 'Nama Slider Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/slider_add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'namaSlider' => $this->input->post('namaSlider'),
                'fotoSlider' => $this->input->post('fotoSlider'),
                'statusSlider' => $this->input->post('statusSlider'),
            ];
            $this->Slider_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Slider Berhasil Ditambah!</div>');
            redirect('admin/slider');
        }
    }

    public function slider_edit($id)
    {
        $data['title'] = "Halaman Edit Slider";
        $data['slider'] = $this->Slider_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('namaSlider', 'fotoSlider', 'required', ['required' => 'Nama Slider Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/slider_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'namaSlider' => $this->input->post('namaSlider'),
                'fotoSlider' => $this->input->post('fotoSlider'),
                'statusSlider' => $this->input->post('statusSlider'),
            ];
            $id = $this->input->post('idSlider');
            $this->Slider_model->update(['idSlider' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Slider Berhasil Diubah!</div>');
            redirect('admin/slider');
        }
    }

    public function slider_delete($id)
    {
        $this->Slider_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Slider tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Slider Berhasil Dihapus!</div>');
        }
        redirect('admin/slider');
    }

    //PENGAJUAN INSTANSI
    public function instansi()
    {
        $data['title'] = 'Halaman Pengajuan Instansi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['instansi_ajuan'] = $this->db->get('instansi_ajuan')->result_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_pengajuan/instansi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_instansi()
    {
        //
    }
    public function instansiDetail($id)
    {
        $data['title'] = "Halaman Detail Pengajuan Instansi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['instansi_ajuan'] = $this->Instansi_model->getById($id);
        $data['pengurus'] = $this->Pegawai_model->get();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_pengajuan/instansi_detail', $data);
        $this->load->view('templates/footer');
    }

    function submitInstansi_detail($id)
    {

        $status = $this->input->post('status');
        $pesan = $this->input->post('pesan');
        $pengurus = $this->input->post('pengurus');
        $link = $this->input->post('link');
        $data['instansi_ajuan'] = $this->Instansi_model->getById($id);
        $token = $data['instansi_ajuan']['token'];
        $data1 = [
            'status' => $status,
            'pesan' => $pesan,
            'pengurus' => $pengurus,
            'link' => $link,
            'token' => $token
        ];
        // print_r($data1);die;
        $this->Instansi_model->updatestatus($status, $pesan, $pengurus, $link, $token);
        $this->Instansi_model->insert_detail_track($data1);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status berhasil diubah</div>');
        redirect('Admin/instansi');
    }


    public function instansiDelete($id)
    {
        $this->Instansi_model->delete($id);
        $error = $this->db->error();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengajuan Berhasil Dihapus!</div>');
        redirect('admin/instansi');
    }
    //NOTIFIKASI 
    public function instansiNotif()
    {
        $data['title'] = "Data Baru Pengajuan Instansi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $jlh_instansi = $this->Instansi_model->jumlah();
        $jlh_mahasiswa = $this->Mahasiswa_model->jumlah();
        $jlh_umum = $this->Umum_model->jumlah();
        $data['jlh'] = $jlh_instansi +  $jlh_mahasiswa + $jlh_umum;
        // $data['jlh_maha'] = $this->Mahasiswa_model->jumlahmaha();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_pengajuan/instansi_notif', $data);
        $this->load->view('templates/footer');
    }

    public function mahasiswaNotif()
    {
        $data['title'] = "Data Baru Pengajuan Pendidikan";
        $data['instansi_ajuan'] = $this->Instansi_ajuan_model->getNot();
        $data['mahasiswa_ajuan'] = $this->Mahasiswa_model->getNot();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_pengajuan/mahasiswa_notif', $data);
        $this->load->view('templates/footer');
    }
    public function umumNotif()
    {
        $data['title'] = "Data Baru Pengajuan";
        $data['instansi_ajuan'] = $this->Instansi_ajuan_model->getNot();
        $data['mahasiswa_ajuan'] = $this->Mahasiswa_model->getNot();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        //$data['all'] = $this->Instansi_model->getNotif();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_pengajuan/umum_notif', $data);
        $this->load->view('templates/footer');
    }

    //PENGAJUAN UMUM
    public function umum()
    {
        $data['title'] = "Halaman Pengajuan Umum";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['umum_ajuan'] = $this->Umum_model->get();
        //notif
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_pengajuan/umum', $data);
        $this->load->view('templates/footer');
    }

    function umum_detail($id)
    {
        $data['title'] = "Halaman Detail Pengajuan Umum";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['umum_ajuan'] = $this->Umum_model->getById($id);
        $data['pengurus'] = $this->Pegawai_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_pengajuan/umum_detail', $data);
        $this->load->view('templates/footer');
    }

    function submit_detail_umum($id)
    {
        $status = $this->input->post('status');
        $pesan = $this->input->post('pesan');
        $pengurus = $this->input->post('pengurus');
        $link = $this->input->post('link');
        $data['umum_ajuan'] = $this->Umum_model->getById($id);
        $token = $data['umum_ajuan']['token'];
        $data1 = [
            'status' => $status,
            'pesan' => $pesan,
            'pengurus' => $pengurus,
            'link' => $link,
            'token' => $token
        ];

        $this->Umum_model->updatestatus($status, $pesan, $pengurus, $link, $token);
        $this->Umum_model->insert_detail_track($data1);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status berhasil diubah</div>');
        redirect('admin/umum');
    }

    public function hapus_umum($id)
    {

        $this->Umum_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengajuan Berhasil Dihapus!</div>');
        redirect('admin/umum');
    }

    //PENGAJUAN MAHASISWA
    public function mahasiswa()
    {
        $data['title'] = 'Halaman Pengajuan Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa_ajuan'] = $this->db->get('mahasiswa_ajuan')->result_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_pengajuan/mahasiswa', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_mahasiswa()
    {
        $data['judul'] = "Halaman Tambah Mahasiswa Ajuan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa_ajuan'] = $this->Mahasiswa_model->get();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('universitas', 'Universitas', 'required', [
            'required' => 'Universitas Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('hp', 'HP', 'required', [
            'required' => 'HP Wajib di isi'
        ]);
        $this->form_validation->set_rules('informasi', 'Informasi', 'required', [
            'required' => 'Informasi Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required', [
            'required' => 'Lokasi Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('waktu', 'Waktu', 'required', [
            'required' => 'NO HP Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('panjang_data', 'Panjang Data', 'required', [
            'required' => 'Panjang Data Mahasiswa Wajib di isi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("pengajuan/tambah_mahasiswa", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'universitas' => $this->input->post('universitas'),
                'email' => $this->input->post('email'),
                'hp' => $this->input->post('hp'),
                'informasi' => $this->input->post('informasi'),
                'lokasi' => $this->input->post('lokasi'),
                'waktu' => $this->input->post('waktu'),
                'panjang_data' => $this->input->post('panjang_data'),
                'token' => $this->input->post('token'),
            ];
            $upload_permohonan = $_FILES['surat_permohonan']['name'];
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
            $upload_ktp = $_FILES['ktp']['name'];
            if ($upload_ktp) {
                $config['allowed_types'] = 'pdf|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets2/folder/ktp/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('ktp')) {
                    $file_name2 = $this->upload->data('file_name2');
                    $this->db->set('ktp', $file_name2);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $upload_surat0 = $_FILES['surat0']['name'];
            if ($upload_surat0) {
                $config['allowed_types'] = 'pdf|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets2/folder/surat0/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('surat0')) {
                    $file_name3 = $this->upload->data('file_name3');
                    $this->db->set('surat0', $file_name3);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $upload_proposal = $_FILES['proposal']['name'];
            if ($upload_proposal) {
                $config['allowed_types'] = 'pdf|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets2/folder/proposal/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('proposal')) {
                    $file_name4 = $this->upload->data('file_name4');
                    $this->db->set('proposal', $file_name4);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $upload_ktm = $_FILES['ktm']['name'];
            if ($upload_ktm) {
                $config['allowed_types'] = 'pdf|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets2/folder/ktm/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('ktm')) {
                    $file_name5 = $this->upload->data('file_name5');
                    $this->db->set('ktm', $file_name5);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $informasi = $this->input->post('informasi');
            $in_array = implode(",", $informasi);
            $this->Mahasiswa_ajuan_model->insert(
                $data,
                $upload_permohonan,
                $upload_surat0,
                $upload_ktp,
                $upload_ktm
            );
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Proses Pengajuan Berhasil</div>');
            redirect('home/mahasiswa');
        }
    }

    public function mahasiswaDetail($id)
    {
        $data['title'] = "Halaman Detail Pengajuan Mahasiswa";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa_ajuan'] = $this->Mahasiswa_model->getById($id);
        $data['pengurus'] = $this->Pegawai_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_pengajuan/mahasiswa_detail', $data);
        $this->load->view('templates/footer');
    }

    function submitMhs_detail($id)
    {
        $status = $this->input->post('status');
        $pesan = $this->input->post('pesan');
        $pengurus = $this->input->post('pengurus');
        $link = $this->input->post('link');
        $data['mahasiswa_ajuan'] = $this->Mahasiswa_model->getById($id);
        $token = $data['mahasiswa_ajuan']['token'];
        $data1 = [
            'status' => $status,
            'pesan' => $pesan,
            'pengurus' => $pengurus,
            'link' => $link,
            'token' => $token
        ];
        // print_r($data1);die;
        $this->Mahasiswa_model->updatestatus($status, $pesan, $pengurus, $link, $token);
        $this->Mahasiswa_model->insert_detail_track($data1);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Mahasiswa berhasil diubah</div>');
        redirect('admin/mahasiswa');
    }

    public function mahasiswaDelete($id)
    {
        $this->Mahasiswa_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Permintaan Mahasiswa Berhasil Dihapus!</div>');
        redirect('admin/mahasiswa');
    }

    //SURAT MASUK
    public function suratmasuk()
    {
        $data['title'] = "Halaman Surat Masuk";
        $data['surat_masuk'] = $this->SMasuk_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/suratmasuk', $data);
        $this->load->view('templates/footer');
    }

    public function suratmasuk_tambah()
    {
        $data['surat_masuk'] = $this->SMasuk_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $data['title'] = "Halaman Tambah Surat Masuk";
        $this->form_validation->set_rules('no_surat', 'No Surat', 'required', [
            'required' => 'No Surat Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_surat', 'Tanggal Surat', 'required', [
            'required' => 'Tanggal Surat Wajib di isi'
        ]);
        $this->form_validation->set_rules('perihal', 'Perihal', 'required', [
            'required' => 'Perihal Wajib di isi'
        ]);
        $this->form_validation->set_rules('dari', 'Dari', 'required', [
            'required' => 'Tujuan Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis', 'Jenis', 'required', [
            'required' => 'Jenis Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/suratmasuk_add', $data);
            $this->load->view('templates/footer');
        } else {
            $upload_image = str_replace(' ', '_', $_FILES['scanning']['name']);
            if ($upload_image) {
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets2/folder/surat0/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('scanning')) {

                    $file_name = $this->upload->data('file_name');
                    $this->db->set('scanning', $file_name);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = [
                'no_surat' => $this->input->post('no_surat'),
                'tanggal_surat' => $this->input->post('tanggal_surat'),
                'perihal' => $this->input->post('perihal'),
                'dari' => $this->input->post('dari'),
                'jenis' => $this->input->post('jenis'),
                'scanning' => $upload_image
                //'scanning' => $this->input->post('scanning')
            ];

            // print_r($data);
            // die;
            $this->SMasuk_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Surat Masuk Berhasil Ditambah!</div>');
            redirect('admin/suratmasuk');
        }
    }

    // public function suratmasuk_file($no_surat)
    // {
    //     $data['surat_masuk'] = $this->SMasuk_model->getById($no_surat);
    //     $this->load->view('admin/suratmasuk_file', $data);
    // }

    public function suratmasuk_edit($id)
    {
        $data['title'] = "Halaman Edit Surat Masuk";
        $data['surat_masuk'] = $this->SMasuk_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/suratmasuk_edit', $data);
        $this->load->view('templates/footer');
    }
    public function export_sm()
    {
        header("Content-type=application/vnd.ms.excel");
        header("Content-disposition: attachment; filename=Rekap Surat Masuk.xls");
        $data['result'] = $this->SMasuk_model->GetDataLaporan(0, 1000000);
        // $data['klasifikasi'] = $this->Klasifikasi_model->get();
        $this->load->view('admin/report_sm', $data);
    }
    function submitsuratmasuk_edit($id)
    {
        $upload_image = str_replace(' ', '_', $_FILES['scanning']['name']);
        if ($upload_image) {
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets2/folder/surat0/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('scanning')) {

                $file_name = $this->upload->data('file_name');
                $this->db->set('scanning', $file_name);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data = [
            'no_surat' => $this->input->post('no_surat'),
            'tanggal_surat' => $this->input->post('tanggal_surat'),
            'perihal' => $this->input->post('perihal'),
            'dari' => $this->input->post('dari'),
            'jenis' => $this->input->post('jenis'),
            'scanning' => $upload_image
            //'scanning' => $this->input->post('scanning')
        ];
        // print_r($data);
        // die;
        $id = $this->input->post('id');
        $this->SMasuk_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Surat Masuk Berhasil Diubah!</div>');
        redirect('admin/suratmasuk');
    }
    public function suratmasuk_delete($no_surat)
    {
        $this->SMasuk_model->delete($no_surat);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Dosen tidak dapat dihapus (sudah berelasi)!</div>');
        redirect('admin/suratmasuk');
    }
    public function suratkeluar_file($id)
    {
        $data['surat_keluar'] = $this->SKeluar_model->getById($id);
        $this->load->view('dokumen/surat/surat_keluar', $data);
    }
    public function suratmasuk_file($id)
    {
        $data['surat_masuk'] = $this->SMasuk_model->getById($id);
        $this->load->view('dokumen/surat/surat_masuk', $data);
    }

    //SURAT KELUAR
    public function suratkeluar()
    {
        $data['title'] = "Halaman Surat Keluar";
        $data['surat_keluar'] = $this->SKeluar_model->get();
        $data['klasifikasi'] = $this->Klasifikasi_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/suratkeluar', $data);
        $this->load->view('templates/footer');
    }
    public function export_sk()
    {
        header("Content-type=application/vnd.ms.excel");
        header("Content-disposition: attachment; filename=Rekap Surat Keluar.xls");
        $data['result'] = $this->SKeluar_model->get(0, 1000000);
        $data['klasifikasi'] = $this->Klasifikasi_model->get();
        $this->load->view('admin/report_sk', $data);
    }
    public function suratkeluar_tambah()
    {
        $data['title'] = "Tambah Data Surat Keluar";
        $data['surat_keluar'] = $this->SKeluar_model->get();
        $data['klasifikasi'] = $this->Klasifikasi_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Halaman Tambah Surat Keluar";
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/suratkeluar_add', $data);
        $this->load->view('templates/footer');
    }

    public function suratkeluar_submit()
    {
        $data = [
            'no_surat' => $this->input->post('no_surat'),
            'klasifikasi' => $this->input->post('klasifikasi'),
            'tanggal_surat' => $this->input->post('tanggal_surat'),
            'perihal' => $this->input->post('perihal'),
            'tujuan' => $this->input->post('tujuan'),
            'sifat' => $this->input->post('sifat'),
        ];

        $upload_image = $_FILES['scanning']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'pdf|jpg|png';
            $config['upload_path'] = './assets2/folder/surat0/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('scanning')) {
                $file_name = $this->upload->data('file_name');
                $this->db->set('scanning', $file_name);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->SKeluar_model->insert($data, $upload_image);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Surat Keluar Berhasil Ditambah!</div>');
        redirect('admin/suratkeluar');
    }

    // public function suratkeluar_file($no_surat)
    // {
    //     $data['surat_keluar'] = $this->SKeluar_model->getById($no_surat);
    //     $this->load->view('admin/suratkeluar_file', $data);
    // }

    public function suratkeluar_edit($id)
    {
        $data['title'] = "Halaman Edit Surat Keluar";
        $data['surat_keluar'] = $this->SKeluar_model->getById($id);
        $data['klasifikasi'] = $this->Klasifikasi_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/suratkeluar_edit', $data);
        $this->load->view('templates/footer');
    }
    function submitsuratkeluar_edit($id)
    {
        $data = [
            'no_surat' => $this->input->post('no_surat'),
            'klasifikasi' => $this->input->post('klasifikasi'),
            'tanggal_surat' => $this->input->post('tanggal_surat'),
            'perihal' => $this->input->post('perihal'),
            'tujuan' => $this->input->post('tujuan'),
            'sifat' => $this->input->post('sifat'),
            'scanning' => $this->input->post('scanning')
        ];

        // print_r($data);
        // die;
        $id = $this->input->post('id');
        $this->SKeluar_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('admin/suratkeluar');
    }
    public function suratkeluar_delete($no_surat)
    {
        $this->SKeluar_model->delete($no_surat);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dosen Berhasil Dihapus!</div>');
        redirect('admin/suratkeluar');
    }

    //SURVEI
    public function survei()
    {
        $data['title'] = 'Database Survei BMKG';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['survey'] = $this->db->get('survey')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/survei', $data);
        $this->load->view('templates/footer');
    }
    public function survey_edit($id)
    {
        $data['title'] = "Halaman Edit Surat Keluar";
        $data['survey'] = $this->Survei_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/survey_edit', $data);
        $this->load->view('templates/footer');
    }
    function submitsurvey_edit($id)
    {
        $data = [
            'link' => $this->input->post('link'),
        ];

        // print_r($data);
        // die;
        $id = $this->input->post('id');
        $this->Survei_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('admin/survei');
    }

    public function survey_tambah()
    {
        $data['title'] = "Halaman Edit Surat Masuk";
        $data['survey'] = $this->db->get('survey')->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/survey_tambah', $data);
        $this->load->view('templates/footer');
    }

    public function survey_submit()
    {
        $data = [
            'link' => $this->input->post('link'),
        ];
        // print_r($data);
        // die;
        $this->Survei_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Survey telah ditambah! Hapus data yang sebelumnya untuk
        mengaktifkan link survey di tampilan</div>');
        redirect('admin/survei');
    }
    public function survey_delete($id)
    {
        $this->Survei_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Survei Berhasil Dihapus!</div>');
        redirect('admin/survei');
    }

    // Nol Rupiah
    public function nolRupiah()
    {
        $data['title'] = 'Link Surat Nol Rupiah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nolRupiah'] = $this->db->get('nolrupiah')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/nolRupiah', $data);
        $this->load->view('templates/footer');
    }
    public function nolRupiah_edit($id)
    {
        $data['title'] = "Halaman Edit Link Surat Nol Rupiah";
        $data['nolRupiah'] = $this->NolRupiah_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/nolRupiah_edit', $data);
        $this->load->view('templates/footer');
    }
    function submitnolRupiah_edit($id)
    {
        $data = [
            'link' => $this->input->post('link'),
        ];

        // print_r($data);
        // die;
        $id = $this->input->post('id');
        $this->NolRupiah_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('admin/nolRupiah');
    }

    public function nolRupiah_tambah()
    {
        $data['title'] = "Halaman Tambah Link Nol Rupiah";
        $data['nolRupiah'] = $this->db->get('nolrupiah')->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/nolRupiah_tambah', $data);
        $this->load->view('templates/footer');
    }

    public function nolRupiah_submit()
    {
        $data = [
            'link' => $this->input->post('link'),
        ];
        // print_r($data);
        // die;
        $this->NolRupiah_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Link telah ditambah! Hapus data yang sebelumnya untuk
        mengaktifkan link di tampilan</div>');
        redirect('admin/nolRupiah');
    }
    public function nolRupiah_delete($id)
    {
        $this->NolRupiah_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Link Berhasil Dihapus!</div>');
        redirect('admin/nolRupiah');
    }

    //BUKU TAMU
    public function bukutamu()
    {
        $data['title'] = "Halaman Buku Tamu";
        $data['bukutamu'] = $this->Bukutamu_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/bukutamu', $data);
        $this->load->view('templates/footer');
    }


    public function export_bt()
    {
        header("Content-type=application/vnd.ms.excel");
        header("Content-disposition: attachment; filename=Rekap Buku Tamu.xls");
        $data['result'] = $this->Bukutamu_model->get(0, 1000000);
        // $data['klasifikasi'] = $this->Klasifikasi_model->get();
        $this->load->view('admin/report_bt', $data);
    }

    public function addtamu()
    {
        $data['title'] = 'Tambah Data Buku Tamu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tamu'] = $this->db->get('tamu')->result_array();

        $this->form_validation->set_rules('nama', 'Nama Tamu', 'required', ['required' => 'Nama tamu wajib di isi']);
        $this->form_validation->set_rules('asal', 'Asal Tamu', 'required', ['required' => 'Asal tamu wajib di isi']);
        $this->form_validation->set_rules('keperluan', 'Keperluan Tamu', 'required', ['required' => 'Keperluan tamu wajib di isi']);
        $this->form_validation->set_rules('hp', 'Nomor Handphone', 'required', ['required' => 'Nomor handphone wajib di isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/bukutamu_add', $data);
            $this->load->view('templates/footer');
        } else {
            $tanggal = $this->input->post('tanggal', TRUE);
            $nama = $this->input->post('nama', TRUE);
            $asal = $this->input->post('asal', TRUE);
            $keperluan = $this->input->post('keperluan', TRUE);
            $hp = $this->input->post('hp', TRUE);

            $data = array(
                'tanggal' => $tanggal,
                'nama' => $nama,
                'asal' => $asal,
                'keperluan' => $keperluan,
                'hp' => $hp,
                'status' => 'Masuk'
            );
            $this->db->insert('tamu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Tamu Berhasil Ditambahkan</div>');
            redirect('admin/bukutamu');
        }
    }

    public function tamustatus($id)
    {
        $data['title'] = 'Ubah Status Tamu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bukutamu'] = $this->Bukutamu_model->getById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/bukutamu_status', $data);
        $this->load->view('templates/footer');
    }

    function changestatustamu($id)
    {
        $data = [
            'status' => $this->input->post('status'),
        ];

        $id = $this->input->post('id');
        $this->Bukutamu_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buku Tamu Berhasil Diubah!</div>');
        redirect('admin/bukutamu');
    }

    //HARI TANPA HUJAN
    public function hth()
    {
        $data['title'] = "Halaman Hari Tanpa Hujan";
        $data['hth'] = $this->Hth_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/haritanpahujan', $data);
        $this->load->view('templates/footer');
    }

    public function narasihth()
    {
        $data['title'] = "Halaman Narasi HTH";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['narasi'] = $this->Narasi_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/haritanpahujan_narasi', $data);
        $this->load->view('templates/footer');
    }

    public function narasihthedit($idnarasi)
    {
        $data['title'] = "Halaman Edit Narasi";
        $data['analisa'] = $this->Narasi_model->getById($idnarasi);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required', [
            'required' => 'Deskripsi Wajib di isi'
        ]);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/haritanpahujaneditnarasi', $data);
        $this->load->view('templates/footer');
    }

    public function submiteditnarasi()
    {
        $data = [
            'juduldesk' => $this->input->post('juduldesk'),
            'deskripsi' => $this->input->post('deskripsi')
        ];

        $idnarasi = $this->input->post('idnarasi');
        $this->Narasi_model->update(['idnarasi' => $idnarasi], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Narasi Berhasil Diubah!</div>');
        redirect('admin/narasihth');
    }

    public function addnarasi($id)
    {
        $data['title'] = 'Ubah Narasi Peta';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['analisa'] = $this->Narasi_model->getById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/haritanpahujaneditnarasi', $data);
        $this->load->view('templates/footer');
    }

    public function submitnarasi($id)
    {
        $data = [
            'juduldesk' => $this->input->post('juduldesk'),
            'deskripsi' => $this->input->post('deskripsi'),
        ];
        $id = $this->input->post('idnarasi');
        $this->Narasi_model->update(['idnarasi' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Narasi Berhasil Diupdate</div>');
        redirect('admin/narasihth');
    }

    public function hth_add()
    {
        $data['hth'] = $this->Hth_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Halaman Tambah Hari Tanpa Hujan";
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/haritanpahujan_add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_hth' => $this->input->post('id_hth'),
                'id_periode' => $this->input->post('id_periode'),
                'id_stasiun' => $this->input->post('id_stasiun'),
                'hth' => $this->input->post('hth'),
                'ket' => $this->input->post('ket'),
            ];
            $this->Hth_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data HTH Berhasil Ditambah!</div>');
            redirect('admin/hth');
        }
    }

    public function hth_import()
    {
        $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

        $periode = $this->input->post('periode');
        if (isset($_FILES['upload_file']['name']) && in_array($_FILES['upload_file']['type'], $file_mimes)) {
            $arr_file = explode('.', $_FILES['upload_file']['name']);
            $extension = end($arr_file);
            if ('csv' == $extension) {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } elseif ('xls' == $extension) {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
            $sheetData = $spreadsheet->getActiveSheet()->toArray();

            $data = [
                'periode' => $periode,
                'file' => $_FILES['upload_file']['name']
            ];

            $periodeid = $this->Hth_model->tambahDataPeriode($data);
            if (!empty($sheetData)) {
                for ($i = 1; $i < count($sheetData); $i++) {
                    $datadetail = [
                        'id_periode' => $periodeid,
                        'id_stasiun' =>  $sheetData[$i][0],
                        'hth' => $sheetData[$i][3],
                        'ket' => $sheetData[$i][5],
                        'kriteria' => $sheetData[$i][4],

                    ];
                    $this->Hth_model->tambahhth($datadetail);
                }

                redirect('admin/hth');
            }
            redirect('admin/hth');
        }
    }

    public function hthfile($id_periode)
    {
        $data['title'] = "Halaman Detail Hari Tanpa Hujan";
        $data['hth'] = $this->Hth_model->getById($id_periode);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/haritanpahujan_file', $data);
        $this->load->view('templates/footer');
    }

    public function hthhapus($id_periode)
    {
        $this->Hth_model->delete($id_periode);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data HTH Berhasil Dihapus!</div>');
        redirect('admin/hth');
    }

    public function hthdetail()
    {
        $data['title'] = "Halaman Detail HTH";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lokasi'] = $this->Hth_model->getById($this->uri->segment(3));
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/haritanpahujan_detail', $data);
        $this->load->view('templates/footer');
    }

    public function hthnarasi($id_periode)
    {
        $data['title'] = "Halaman Detail Hari Tanpa Hujan";
        $data['hth'] = $this->Hth_model->getById($id_periode);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/haritanpahujan_narasi', $data);
        $this->load->view('templates/footer');
    }



    //GALERI UNTUK HEADER DEPAN (3 GAMBAR)
    public function headline()
    {
        $data['title'] = 'Halaman Headline';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['headline'] = $this->db->get('headline')->result_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('linkfoto', 'Alamat Foto', 'required', [
            'required' => 'Alamat Foto Wajib Diisi'
        ]);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/headline', $data);
        $this->load->view('templates/footer');
    }

    public function headlineEdit($id)
    {
        $data['title'] = 'Edit Headline';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['headline'] = $this->Headline_model->getById($id);
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('linkfoto', 'Alamat Foto', 'required', [
            'required' => 'Alamat Foto Wajib Diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/headline_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'linkfoto' => $this->input->post('linkfoto'),
            ];
            $id = $this->input->post('id');
            $this->Headline_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Headline Berhasil Diubah!</div>');
            redirect('admin/headline');
        }
    }

    // Menu untuk Layanan
    public function menuLayanan()
    {
        $data['title'] = 'Halaman Menu Layanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menuLayanan'] = $this->db->get('menu')->result_array();
        // $data['menuSubMenu'] = $this->MenuLayanan_model->getMenuSub();
        $this->form_validation->set_rules('linkfoto', 'Alamat Foto', 'required', [
            'required' => 'Alamat Foto Wajib Diisi'
        ]);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/menuLayanan', $data);
        $this->load->view('templates/footer');
    }
    public function menulayanan_add()
    {
        $data['menuLayanan'] = $this->MenuLayanan_model->getMenu();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Halaman Tambah Menu";
        $this->form_validation->set_rules('nama_menu', 'nama_menu', 'required', ['required' => 'Nama Menu Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/menulayanan_add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'namaMenu' => $this->input->post('nama_menu'),
                'status' => '1'
            ];
            $this->MenuLayanan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Berhasil Ditambah!</div>');
            redirect('admin/menulayanan');
        }
    }
    public function menulayanan_edit($id_layanan)
    {
        $data['title'] = 'Edit Menu Layanan';
        $data['menu'] = $this->MenuLayanan_model->getById($id_layanan);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('namaMenu', 'namaMenu', 'required', ['required' => 'Nama Menu wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/menulayanan_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'namaMenu' => $this->input->post('nama_menu'),
                'status' => '1'
            ];
            $id = $this->input->post('idMenu');
            $this->MenuLayanan_model->updateMenu(['idMenu' => $id], $data, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Layanan Berhasil Diubah!</div>');
            redirect('admin/menulayanan');
        }
    }
    public function deleteMenu($id)
    {
        $this->MenuLayanan_model->deleteMenu($id);
        $error = $this->db->error();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Layanan Berhasil Dihapus!</div>');
        redirect('admin/menulayanan');
    }


    //Menu Tarif
    public function menuTarif()
    {
        $data['title'] = 'Halaman Menu Tarif';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menuTarif'] = $this->MenuTarif_model->get();
        $this->form_validation->set_rules('linkfoto', 'Alamat Foto', 'required', [
            'required' => 'Alamat Foto Wajib Diisi'
        ]);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/menuTarif', $data);
        $this->load->view('templates/footer');
    }
    public function menutarif_add()
    {
        $data['menuTarif'] = $this->MenuTarif_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Halaman Tambah Tarif";
        $this->form_validation->set_rules('nama_tarif', 'nama_tarif', 'required', ['required' => 'Nama Tarif Wajib diisi']);
        $this->form_validation->set_rules('jenis_tarif', 'jenis_tarif', 'required', ['required' => 'Jenis Tarif Wajib diisi']);
        $this->form_validation->set_rules('satuan', 'satuan', 'required', ['required' => 'Satuan Tarif Wajib diisi']);
        $this->form_validation->set_rules('tarif', 'tarif', 'required', ['required' => 'Tarif Wajib diisi']);
        $this->form_validation->set_rules('waktu', 'waktu', 'required', ['required' => 'Waktu Tarif Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/menutarif_add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'namaTarif' => $this->input->post('nama_tarif'),
                'satuan' => $this->input->post('satuan'),
                'jenis' => $this->input->post('jenis_tarif'),
                'tarif' => $this->input->post('tarif'),
                'waktu' => $this->input->post('waktu'),
                'status' => '1'
            ];
            $this->MenuTarif_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Tarif Berhasil Ditambah!</div>');
            redirect('admin/menutarif');
        }
    }
    public function menutarif_edit($id_tarif)
    {
        $data['menuTarif'] = $this->MenuTarif_model->getById($id_tarif);
        $data['title'] = 'Edit Menu Tarif';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('idTarif', 'idTarif', 'required', ['required' => 'Id Tarif Wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/menutarif_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'namaTarif' => $this->input->post('nama_tarif'),
                'satuan' => $this->input->post('satuan'),
                'jenis' => $this->input->post('jenis_tarif'),
                'tarif' => $this->input->post('tarif'),
                'waktu' => $this->input->post('waktu'),
                'status' => '1'
            ];
            $id = $this->input->post('idTarif');
            $this->MenuTarif_model->update(['idTarif' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Tarif Berhasil Diubah!</div>');
            redirect('admin/menuTarif');
        }
    }

    public function tarifDelete($id)
    {
        $this->MenuTarif_model->delete($id);
        $error = $this->db->error();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Tarif Berhasil Dihapus!</div>');
        redirect('admin/menuTarif');
    }
    
    //ALAT
    public function alat()
    {
        $data['title'] = 'Halaman Data Alat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['alat'] = $this->db->get('alat')->result_array();
        $data['alat'] = $this->Alat_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/alat', $data);
        $this->load->view('templates/footer');
    }

    public function alatAdd()
    {
        $data['title'] = 'Tambah Alat Baru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['alat'] = $this->Alat_model->get();
        $this->db->get('alat')->result_array();
        $data['kab'] = $this->Kabupaten_model->get();
        $data['kec'] = $this->Kecamatan_model->get();
        $this->form_validation->set_rules('nama_pos', 'Nama Pos', 'required', ['required' => 'Nama Pos wajib diisi']);
        $this->form_validation->set_rules('jenis_alat', 'Jenis Alat', 'required', ['required' => 'Jenis Alat wajib diisi']);
        $this->form_validation->set_rules('nomor_pos', 'Nomor Pos', 'required', ['required' => 'Nomor Pos wajib diisi']);
        $this->form_validation->set_rules('lintang', 'Lintang', 'required|decimal', [
            'required' => 'Lintang wajib diisi',
            'decimal' => 'Masukkan data decimal degree (Cth. 0.123)'
        ]);
        $this->form_validation->set_rules('bujur', 'Bujur', 'required|decimal', [
            'required' => 'Bujur wajib diisi',
            'decimal' => 'Masukkan data decimal degree (Cth. 100.123)'
        ]);
        $this->form_validation->set_rules('elevasi', ' Elevasi (dpl)', 'required|integer', [
            'required' => 'Elevasi (dpl) wajib diisi',
            'integer' => 'Data berupa integer'
        ]);
        $this->form_validation->set_rules('desa', 'Desa', 'required', ['required' => 'Desa wajib diisi']);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', ['required' => 'Kecamatan wajib diisi']);
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', ['required' => 'Kabupaten wajib diisi']);
        $this->form_validation->set_rules('kondisi_alat', 'Kondsi Alat', 'required', ['required' => 'Kondsi Alat wajib diisi']);
        $this->form_validation->set_rules('kepemilikan_alat', 'Kepemilikan Alat', 'required', ['required' => 'Kepemilikan Alat wajib diisi']);
        $this->form_validation->set_rules('nama_penanggungjawab', 'Nama Pengamat', 'required', ['required' => 'Nama Pengamat wajib diisi']);
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required', ['required' => 'Jabatan wajib diisi']);
        $this->form_validation->set_rules('pengiriman_data', 'Status Pengiriman Data', 'required', ['required' => 'Status Pengiriman Data wajib diisi']);
        $this->form_validation->set_rules('ketersediaan_data', 'Ketersediaan Data', 'required', ['required' => 'Ketersediaan Data wajib diisi']);
        // $this->form_validation->set_rules('keterangan_alat', 'Keterangan Alat', 'required', ['required' => 'Keterangan Alat wajib diisi']);
        // $this->form_validation->set_rules('inspeksi', 'Terakhir Inspeksi', 'required', ['required' => 'Terakhir Inspeksi wajib diisi']);
        // $this->form_validation->set_rules('foto', 'Link Foto', 'required', ['required' => 'Link Foto wajib diisi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/alat_add', $data);
            $this->load->view('templates/footer');
        } else {
            $nama_pos = $this->input->post('nama_pos', TRUE);
            $jenis_alat = $this->input->post('jenis_alat', TRUE);
            $kode_pos = $this->input->post('kode_pos', TRUE);
            $nomor_pos = $this->input->post('nomor_pos', TRUE);
            $lintang = $this->input->post('lintang', TRUE);
            $bujur = $this->input->post('bujur', TRUE);
            $elevasi = $this->input->post('elevasi', TRUE);
            $desa = $this->input->post('desa', TRUE);
            $kecamatan = $this->input->post('kecamatan', TRUE);
            $kabupaten = $this->input->post('kabupaten', TRUE);
            $kondisi_alat = $this->input->post('kondisi_alat', TRUE);
            $kepemilikan_alat = $this->input->post('kepemilikan_alat', TRUE);
            $nama_penanggungjawab = $this->input->post('nama_penanggungjawab', TRUE);
            $jabatan = $this->input->post('jabatan', TRUE);
            $pengiriman_data = $this->input->post('pengiriman_data', TRUE);
            $ketersediaan_data = $this->input->post('ketersediaan_data', TRUE);
            $keterangan_alat = $this->input->post('keterangan_alat', TRUE);
            $inspeksi = $this->input->post('inspeksi', TRUE);
            $foto = $this->input->post('foto', TRUE);

            $data = array(
                'nama_pos' => $nama_pos,
                'jenis_alat' => $jenis_alat,
                'kode_pos' => $kode_pos,
                'nomor_pos' => $nomor_pos,
                'lintang' => $lintang,
                'bujur' => $bujur,
                'elevasi' => $elevasi,
                'desa' => $desa,
                'kecamatan' => $kecamatan,
                'kabupaten' => $kabupaten,
                'provinsi' => "1",
                'kondisi_alat' => $kondisi_alat,
                'kepemilikan_alat' => $kepemilikan_alat,
                'nama_penanggungjawab' => $nama_penanggungjawab,
                'jabatan' => $jabatan,
                'pengiriman_data' => $pengiriman_data,
                'ketersediaan_data' => $ketersediaan_data,
                'keterangan_alat' => $keterangan_alat,
                'inspeksi' => $inspeksi,
                'foto' => $foto
            );
            // print_r($data);
            // die;
            $this->db->insert('alat', $data);
            // $this->Alat_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Alat Berhasil Ditambahkan</div>');
            redirect('admin/alat');
        }
    }

    public function alatEdit($id)
    {
        $data['title'] = 'Edit Data Alat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['alat'] = $this->Alat_model->getById($id);
        $data['kab'] = $this->Kabupaten_model->get();
        $data['kec'] = $this->Kecamatan_model->get();
        $this->form_validation->set_rules('nama_pos', 'Nama Pos', 'required', ['required' => 'Nama Pos wajib diisi']);
        $this->form_validation->set_rules('jenis_alat', 'Jenis Alat', 'required', ['required' => 'Jenis Alat wajib diisi']);
        // $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required|integer', [
        //     'required' => 'Kode Pos wajib diisi',
        //     'integer' => 'Data berupa integer'
        // ]);
        // $this->form_validation->set_rules('nomor_pos', 'Nomor Pos', 'required', ['required' => 'Nomor Pos wajib diisi']);
        $this->form_validation->set_rules('lintang', 'Lintang', 'required|decimal', [
            'required' => 'Lintang wajib diisi',
            'decimal' => 'Masukkan data decimal degree (Cth. 0.123)'
        ]);
        $this->form_validation->set_rules('bujur', 'Bujur', 'required|decimal', [
            'required' => 'Bujur wajib diisi',
            'decimal' => 'Masukkan data decimal degree (Cth. 100.123)'
        ]);
        $this->form_validation->set_rules('elevasi', ' Elevasi (dpl)', 'required|integer', [
            'required' => 'Elevasi (dpl) wajib diisi',
            'integer' => 'Data berupa integer'
        ]);
        $this->form_validation->set_rules('desa', 'Desa', 'required', ['required' => 'Desa wajib diisi']);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', ['required' => 'Kecamatan wajib diisi']);
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', ['required' => 'Kabupaten wajib diisi']);
        $this->form_validation->set_rules('kondisi_alat', 'Kondsi Alat', 'required', ['required' => 'Kondsi Alat wajib diisi']);
        $this->form_validation->set_rules('kepemilikan_alat', 'Kepemilikan Alat', 'required', ['required' => 'Kepemilikan Alat wajib diisi']);
        $this->form_validation->set_rules('nama_penanggungjawab', 'Nama Pengamat', 'required', ['required' => 'Nama Pengamat wajib diisi']);
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required', ['required' => 'Jabatan wajib diisi']);
        $this->form_validation->set_rules('pengiriman_data', 'Status Pengiriman Data', 'required', ['required' => 'Status Pengiriman Data wajib diisi']);
        $this->form_validation->set_rules('ketersediaan_data', 'Ketersediaan Data', 'required', ['required' => 'Ketersediaan Data wajib diisi']);
        // $this->form_validation->set_rules('keterangan_alat', 'Keterangan Alat', 'required', ['required' => 'Keterangan Alat wajib diisi']);
        // $this->form_validation->set_rules('inspeksi', 'Terakhir Inspeksi', 'required', ['required' => 'Terakhir Inspeksi wajib diisi']);
        // $this->form_validation->set_rules('foto', 'Link Foto', 'required', ['required' => 'Link Foto wajib diisi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/alat_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_pos' => $this->input->post('nama_pos'),
                'jenis_alat' => $this->input->post('jenis_alat'),
                'kode_pos' => $this->input->post('kode_pos'),
                'lintang' => $this->input->post('lintang'),
                'bujur' => $this->input->post('bujur'),
                'elevasi' => $this->input->post('elevasi'),
                'desa' => $this->input->post('desa'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kabupaten' => $this->input->post('kabupaten'),
                'kondisi_alat' => $this->input->post('kondisi_alat'),
                'kepemilikan_alat' => $this->input->post('kepemilikan_alat'),
                'nama_penanggungjawab' => $this->input->post('nama_penanggungjawab'),
                'jabatan' => $this->input->post('jabatan'),
                'pengiriman_data' => $this->input->post('pengiriman_data'),
                'ketersediaan_data' => $this->input->post('ketersediaan_data'),
                'keterangan_alat' => $this->input->post('keterangan_alat'),
                'inspeksi' => $this->input->post('inspeksi'),
                'foto' => $this->input->post('foto'),

            ];
            $id = $this->input->post('nomor_pos');
            $this->Alat_model->update(['nomor_pos' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Alat Berhasil Diubah!</div>');
            redirect('admin/alat');
        }
    }

    public function alatUpdate($id)
    {
        $this->Alat_model->getById($id);
    }

    public function alatDelete($id)
    {
        $this->Alat_model->delete($id);
        $error = $this->db->error();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Alat Berhasil Dihapus!</div>');
        redirect('admin/alat');
    }

    // RATA-RATA CH
    public function rerata()
    {
        $data['title'] = 'Halaman Data Rata-Rata Curah Hujan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rerata'] = $this->db->get('rerata_ph')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/rerata', $data);
        $this->load->view('templates/footer');
    }

    public function rerataDelete($id)
    {
        $this->Import_model->delete($id);
        $error = $this->db->error();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('admin/rerata');
    }

    public function importRerata()
    {
        $data['title'] = ('Upload Data Rata-Rata Curah Hujan');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/upload_rerata', $data);
        $this->load->view('templates/footer');
        if (isset($_POST["submit1"])) {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0; //
            while (($filesop = fgetcsv($handle, 97687091, ',')) !== false) {
                $nama_pos = $filesop[0];
                $nomor_pos = $filesop[1];
                $januari = $filesop[2];
                $februari = $filesop[3];
                $maret = $filesop[4];
                $april = $filesop[5];
                $mei = $filesop[6];
                $juni = $filesop[7];
                $juli = $filesop[8];
                $agustus = $filesop[9];
                $september = $filesop[10];
                $oktober = $filesop[11];
                $november = $filesop[12];
                $desember = $filesop[13];

                if ($c <> 0) {                    /* SKIP THE FIRST ROW */
                    $this->Import_model->import(
                        $nama_pos,
                        $nomor_pos,
                        $januari,
                        $februari,
                        $maret,
                        $april,
                        $mei,
                        $juni,
                        $juli,
                        $agustus,
                        $september,
                        $oktober,
                        $november,
                        $desember
                    );
                }
                $c = $c + 1;
            }
            // $_SESSION["sukses"] = 'Data Berhasil Disimpan';
            redirect('admin/chNormal');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Curah Hujan Normal Berhasil Ditambah!</div>');
        } else if (isset($_POST["submit2"])) {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0; //
            while (($filesop = fgetcsv($handle, 97687091, ',')) !== false) {
                $nomor_pos = $filesop[0];
                $januari = $filesop[2];
                $februari = $filesop[3];
                $maret = $filesop[4];
                $april = $filesop[5];
                $mei = $filesop[6];
                $juni = $filesop[7];
                $juli = $filesop[8];
                $agustus = $filesop[9];
                $september = $filesop[10];
                $oktober = $filesop[11];
                $november = $filesop[12];
                $desember = $filesop[13];

                if ($c <> 0) {                    /* SKIP THE FIRST ROW */
                    $this->Import_model->update(
                        $nomor_pos,
                        $januari,
                        $februari,
                        $maret,
                        $april,
                        $mei,
                        $juni,
                        $juli,
                        $agustus,
                        $september,
                        $oktober,
                        $november,
                        $desember
                    );
                }
                $c = $c + 1;
            }
            // $_SESSION["sukses"] = 'Data Berhasil Disimpan';
            redirect('admin/chNormal');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Curah Hujan Normal Berhasil Diupdate!</div>');
        }
    }
    //Rata-rata Suhu
    public function dataSuhu()
    {
        $data['title'] = 'Halaman Data Rata-Rata Suhu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['suhu'] = $this->db->get('suhu')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dataSuhu', $data);
        $this->load->view('templates/footer');
    }

    public function dataSuhuDelete($id)
    {
        $this->ImportSuhu_model->delete($id);
        $error = $this->db->error();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('admin/dataSuhu');
    }

    public function importSuhu()
    {
        $data['title'] = ('Upload Data Rata-Rata Suhu');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/uploadDataSuhu', $data);
        $this->load->view('templates/footer');
        if (isset($_POST["submit1"])) {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0; //
            while (($filesop = fgetcsv($handle, 97687091, ',')) !== false) {
                $nama_pos = $filesop[0];
                $nomor_pos = $filesop[1];
                $januari = $filesop[2];
                $februari = $filesop[3];
                $maret = $filesop[4];
                $april = $filesop[5];
                $mei = $filesop[6];
                $juni = $filesop[7];
                $juli = $filesop[8];
                $agustus = $filesop[9];
                $september = $filesop[10];
                $oktober = $filesop[11];
                $november = $filesop[12];
                $desember = $filesop[13];

                if ($c <> 0) {                    /* SKIP THE FIRST ROW */
                    $this->ImportSuhu_model->import(
                        $nama_pos,
                        $nomor_pos,
                        $januari,
                        $februari,
                        $maret,
                        $april,
                        $mei,
                        $juni,
                        $juli,
                        $agustus,
                        $september,
                        $oktober,
                        $november,
                        $desember
                    );
                }
                $c = $c + 1;
            }
            // $_SESSION["sukses"] = 'Data Berhasil Disimpan';
            redirect('admin/suhu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Suhu Berhasil Ditambah!</div>');
        } else if (isset($_POST["submit2"])) {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0; //
            while (($filesop = fgetcsv($handle, 97687091, ',')) !== false) {
                $nomor_pos = $filesop[0];
                $januari = $filesop[2];
                $februari = $filesop[3];
                $maret = $filesop[4];
                $april = $filesop[5];
                $mei = $filesop[6];
                $juni = $filesop[7];
                $juli = $filesop[8];
                $agustus = $filesop[9];
                $september = $filesop[10];
                $oktober = $filesop[11];
                $november = $filesop[12];
                $desember = $filesop[13];

                if ($c <> 0) {                    /* SKIP THE FIRST ROW */
                    $this->ImportSuhu_model->update(
                        $nomor_pos,
                        $januari,
                        $februari,
                        $maret,
                        $april,
                        $mei,
                        $juni,
                        $juli,
                        $agustus,
                        $september,
                        $oktober,
                        $november,
                        $desember
                    );
                }
                $c = $c + 1;
            }
            // $_SESSION["sukses"] = 'Data Berhasil Disimpan';
            redirect('admin/suhu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Suhu Berhasil Diupdate!</div>');
        }
    }
    //Rata-rata Kelemababan
    public function dataKelembapan()
    {
        $data['title'] = 'Halaman Data Rata-Rata Kelembaban';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelembapan'] = $this->db->get('kelembapan')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dataKelembapan', $data);
        $this->load->view('templates/footer');
    }

    public function dataKelembapanDelete($id)
    {
        $this->ImportKelembapan_model->delete($id);
        $error = $this->db->error();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('admin/dataKelembapan');
    }

    public function importKelembapan()
    {
        $data['title'] = ('Upload Data Rata-Rata Kelembaban');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/uploadDataKelembapan', $data);
        $this->load->view('templates/footer');
        if (isset($_POST["submit1"])) {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0; //
            while (($filesop = fgetcsv($handle, 97687091, ',')) !== false) {
                $nama_pos = $filesop[0];
                $nomor_pos = $filesop[1];
                $januari = $filesop[2];
                $februari = $filesop[3];
                $maret = $filesop[4];
                $april = $filesop[5];
                $mei = $filesop[6];
                $juni = $filesop[7];
                $juli = $filesop[8];
                $agustus = $filesop[9];
                $september = $filesop[10];
                $oktober = $filesop[11];
                $november = $filesop[12];
                $desember = $filesop[13];

                if ($c <> 0) {                    /* SKIP THE FIRST ROW */
                    $this->ImportKelembapan_model->import(
                        $nama_pos,
                        $nomor_pos,
                        $januari,
                        $februari,
                        $maret,
                        $april,
                        $mei,
                        $juni,
                        $juli,
                        $agustus,
                        $september,
                        $oktober,
                        $november,
                        $desember
                    );
                }
                $c = $c + 1;
            }
            // $_SESSION["sukses"] = 'Data Berhasil Disimpan';
            redirect('admin/kelembapan');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Kelembaban Berhasil Ditambah!</div>');
        } else if (isset($_POST["submit2"])) {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0; //
            while (($filesop = fgetcsv($handle, 97687091, ',')) !== false) {
                $nomor_pos = $filesop[0];
                $januari = $filesop[2];
                $februari = $filesop[3];
                $maret = $filesop[4];
                $april = $filesop[5];
                $mei = $filesop[6];
                $juni = $filesop[7];
                $juli = $filesop[8];
                $agustus = $filesop[9];
                $september = $filesop[10];
                $oktober = $filesop[11];
                $november = $filesop[12];
                $desember = $filesop[13];

                if ($c <> 0) {                    /* SKIP THE FIRST ROW */
                    $this->ImportKelembapan_model->update(
                        $nomor_pos,
                        $januari,
                        $februari,
                        $maret,
                        $april,
                        $mei,
                        $juni,
                        $juli,
                        $agustus,
                        $september,
                        $oktober,
                        $november,
                        $desember
                    );
                }
                $c = $c + 1;
            }
            // $_SESSION["sukses"] = 'Data Berhasil Disimpan';
            redirect('admin/kelembapan');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Kelembaban Berhasil Diupdate!</div>');
        }
    }
    //CH Normal
    public function chNormal()
    {
        $data['title'] = "Halaman Curah Hujan Normal";
        $data['curahHujan'] = $this->CurahHujan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/curahhujan', $data);
        $this->load->view('templates/footer');
    }

    public function curahhujan_data($id)
    {
        $data['title'] = "Halaman Curah Hujan Normal";
        $data['curahHujan'] = $this->CurahHujan_model->get($id);
        $data['curahHujanid'] = $this->CurahHujan_model->getById($id);
        $data['graph'] = $this->CurahHujan_model->graph($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/curahhujan_data', $data);
        $this->load->view('templates/footer');
    }

    public function curahhujan_datalengkap()
    {
        $data['title'] = "Halaman Curah Hujan Normal";
        $data['rerata'] = $this->CurahHujan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/curahhujan_datalengkap', $data);
        $this->load->view('templates/footer');
    }

    public function curahhujan_chart($id)
    {
        $data['title'] = "Halaman Curah Hujan Normal";
        $data['curahHujan'] = $this->CurahHujan_model->get();
        $data['graph'] = $this->CurahHujan_model->graph($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/curahhujan_chart', $data);
        $this->load->view('templates/footer');
    }

    public function curahhujan_hapus($id)
    {
        $this->CurahHujan_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Curah Hujan tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Curah Hujan Berhasil Dihapus!</div>');
        }
        redirect('chNormal');
    }

    //Suhu
    public function suhu()
    {
        $data['title'] = "Halaman Suhu";
        $data['suhu'] = $this->Suhu_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/suhu', $data);
        $this->load->view('templates/footer');
    }

    public function suhu_data($id)
    {
        $data['title'] = "Halaman Suhu";
        $data['suhu'] = $this->Suhu_model->get($id);
        $data['suhuId'] = $this->Suhu_model->getById($id);
        $data['graph'] = $this->Suhu_model->graph($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/suhu_data', $data);
        $this->load->view('templates/footer');
    }

    public function suhu_datalengkap()
    {
        $data['title'] = "Halaman Suhu";
        $data['suhu'] = $this->Suhu_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/suhu_datalengkap', $data);
        $this->load->view('templates/footer');
    }

    public function suhu_chart($id)
    {
        $data['title'] = "Halaman Suhu";
        $data['suhu'] = $this->Suhu_model->get();
        $data['graph'] = $this->Suhu_model->graph($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/suhu_chart', $data);
        $this->load->view('templates/footer');
    }

    public function suhu_hapus($id)
    {
        $this->Suhu_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Suhu tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Suhu Berhasil Dihapus!</div>');
        }
        redirect('suhu');
    }

    //Kelembapan
    public function kelembapan()
    {
        $data['title'] = "Halaman Kelembaban";
        $data['kelembapan'] = $this->Kelembapan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kelembapan', $data);
        $this->load->view('templates/footer');
    }

    public function kelembapan_data($id)
    {
        $data['title'] = "Halaman Kelembaban";
        $data['kelembapan'] = $this->Kelembapan_model->get($id);
        $data['kelembapanId'] = $this->Kelembapan_model->getById($id);
        $data['graph'] = $this->Kelembapan_model->graph($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kelembapan_data', $data);
        $this->load->view('templates/footer');
    }

    public function kelembapan_datalengkap()
    {
        $data['title'] = "Halaman Kelembaban";
        $data['kelembapan'] = $this->Kelembapan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kelembapan_datalengkap', $data);
        $this->load->view('templates/footer');
    }

    public function kelembapan_chart($id)
    {
        $data['title'] = "Halaman Kelembaban";
        $data['kelembapan'] = $this->Kelembapan_model->get();
        $data['graph'] = $this->Kelembapan_model->graph($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kelembapan_chart', $data);
        $this->load->view('templates/footer');
    }

    public function kelembapan_hapus($id)
    {
        $this->Kelembapan_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Suhu tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Suhu Berhasil Dihapus!</div>');
        }
        redirect('kelembapan');
    }
    //Kecamatan
    public function kecamatan()
    {
        $data['title'] = "Halaman Kecamatan";
        $data['kecamatan'] = $this->Kecamatan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kecamatan', $data);
        $this->load->view('templates/footer');
    }

    public function kecamatan_add()
    {
        $data['kecamatan'] = $this->Kecamatan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Halaman Tambah Kecamatan";
        $this->form_validation->set_rules('nama_kecamatan', 'nama_kecamatan', 'required', [
            'required' => 'Nama Kecamatan Wajib diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/kecamatan_add', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_provinsi' => '1',
                'id_kabupaten' => $this->input->post('nama_kabupaten'),
                'nama_kecamatan' => $this->input->post('nama_kecamatan')
            ];
            $this->Kecamatan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kecamatan Berhasil Ditambah!</div>');
            redirect('admin/kecamatan');
        }
    }

    public function kecamatan_edit($id_kecamatan)
    {
        $data['title'] = "Halaman Edit Kecamatan";
        $data['kecamatan'] = $this->Kecamatan_model->getById($id_kecamatan);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_kabupaten', 'nama_kabupaten', 'required', [
            'required' => 'Nama Kabupaten Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/kecamatan_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_provinsi' => '1',
                'id_kabupaten' => $this->input->post('nama_kabupaten'),
                'nama_kecamatan' => $this->input->post('nama_kecamatan')
            ];

            $id = $this->input->post('id');
            $this->Kecamatan_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kecamatan Berhasil Diubah!</div>');
            redirect('admin/Kecamatan');
        }
    }

    public function kecamatan_delete($id_kecamatan)
    {
        $this->Kecamatan_model->delete($id_kecamatan);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Kecamatan tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Kecamatan Berhasil Dihapus!</div>');
        }
        redirect('admin/kecamatan');
    }

    // bagian form AGM1A,AGM1B,Pos Hujan 

    public function vw_agm1a()
    {
        $data['title'] = 'AGM1A';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['agm1a'] = $this->Agm1a_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vw_agm1a', $data);
        $this->load->view('templates/footer');
    }

    public function agm1a_hapus($id)
    {
        $this->Agm1a_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Buku tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Buku Berhasil Dihapus!</div>');
        }
        redirect('Admin/vw_agm1a');
    }

    function agm1a_edit($id)
    {
        $data['title'] = "Halaman Edit AGM1A";
        $data['agm1a'] = $this->Agm1a_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_agm1a', $data);
        $this->load->view('templates/footer');
    }

    function agm1a_submit_edit($id)
    {
        $data = [
            'bk1' => $this->input->post('bk1'),
            'bb1' => $this->input->post('bb1'),
            'bk2' => $this->input->post('bk2'),
            'bb2' => $this->input->post('bb2'),
            'bk3' => $this->input->post('bk3'),
            'bb3' => $this->input->post('bb3'),
            'minrumput' => $this->input->post('minrumput'),
            'min2' => $this->input->post('min2'),
            'max3' => $this->input->post('max3'),
            'lembabnisb1' => $this->input->post('lembabnisb1'),
            'lembabnisb2' => $this->input->post('lembabnisb2'),
            'lembabnisb3' => $this->input->post('lembabnisb3'),
            'kcpwaktu1' => $this->input->post('kcpwaktu1'),
            'kcpwaktu2' => $this->input->post('kcpwaktu2'),
            'arahwaktu1' => $this->input->post('arahwaktu1'),
            'arahwaktu2' => $this->input->post('arahwaktu2'),
            'arahwaktu3' => $this->input->post('arahwaktu3'),
            'kcpperamatan1' => $this->input->post('kcpperamatan1'),
            'kcpperamatan2' => $this->input->post('kcpperamatan2'),
            'kcpperamatan3' => $this->input->post('kcpperamatan3'),
            'sinarmht' => $this->input->post('sinarmht'),
            'hujan' => $this->input->post('hujan'),
            'ujibk2' => $this->input->post('ujibk2'),
            'ukimin2' => $this->input->post('ukimin2'),
            'ujibk3' => $this->input->post('ujibk3'),
            'ukimax3' => $this->input->post('ukimax3'),
            'jam7' => $this->input->post('jam7'),
            'jam2' => $this->input->post('jam2'),
            // 'phujan' => $this->input->post('phujan'),
            // 'salju' => $this->input->post('salju'),
            // 'pembekuan' => $this->input->post('pembekuan'),
            // 'embun' => $this->input->post('embun'),
            // 'kabut' => $this->input->post('kabut'),
            // 'udarab' => $this->input->post('udarab'),
            // 'rambun' => $this->input->post('rambun'),
            // 'kabutdebu' => $this->input->post('kabutdebu'),
            // 'badaidebu' => $this->input->post('badaidebu'),
            // 'anginribut' => $this->input->post('anginribut'),
            // 'catatan' => $this->input->post('catatan'),
        ];
        // print_r($data); die;

        $id = $this->input->post('id');
        $this->Agm1a_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('Admin/vw_agm1a');
    }

    public function vw_agm1b()
    {
        $data['title'] = 'AGM1B';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['agm1b'] = $this->Agm1b_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vw_agm1b', $data);
        $this->load->view('templates/footer');
    }

    public function agm1b_hapus($id)
    {
        $this->Agm1b_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Buku tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Buku Berhasil Dihapus!</div>');
        }
        redirect('Admin/vw_agm1b');
    }

    function agm1b_edit($id)
    {
        $data['title'] = "Halaman Edit AGM1B";
        $data['agm1b'] = $this->Agm1b_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_agm1b', $data);
        $this->load->view('templates/footer');
    }

    function agm1b_submit_edit($id)
    {
        $data = [
            'temg15' => $this->input->post('temg15'),
            'temg110' => $this->input->post('temg110'),
            'temg120' => $this->input->post('temg120'),
            'temg25' => $this->input->post('temg25'),
            'temg210' => $this->input->post('temg210'),
            'temg220' => $this->input->post('temg220'),
            'temg35' => $this->input->post('temg35'),
            'temg310' => $this->input->post('temg310'),
            'temg320' => $this->input->post('temg320'),
            'temg350' => $this->input->post('temg350'),
            'temg3100' => $this->input->post('temg3100'),
            'tempt15' => $this->input->post('tempt15'),
            'tempt110' => $this->input->post('tempt110'),
            'tempt120' => $this->input->post('tempt120'),
            'tempt25' => $this->input->post('tempt25'),
            'tempt210' => $this->input->post('tempt210'),
            'tempt220' => $this->input->post('tempt220'),
            'tempt35' => $this->input->post('tempt35'),
            'tempt310' => $this->input->post('tempt310'),
            'tempt320' => $this->input->post('tempt320'),
            'tempt350' => $this->input->post('tempt350'),
            'tempt3100' => $this->input->post('tempt3100'),
            // 'KeTanah' => $this->input->post('KeTanah'),
            // 'JaHujan' => $this->input->post('JaHujan'),
            'Ch1' => $this->input->post('Ch1'),
            'ke1Angin0' => $this->input->post('ke1Angin0'),
            'ke1Angin10' => $this->input->post('ke1Angin10'),
            'suhuUdara1' => $this->input->post('suhuUdara1'),
            'Rh1' => $this->input->post('Rh1'),
            'suhuAir1' => $this->input->post('suhuAir1'),
            'Eva1' => $this->input->post('Eva1'),
            'Ch2' => $this->input->post('Ch2'),
            'ke2Angin0' => $this->input->post('ke2Angin0'),
            'ke2Angin10' => $this->input->post('ke2Angin10'),
            'suhuUdara2' => $this->input->post('suhuUdara2'),
            'Rh2' => $this->input->post('Rh2'),
            'suhuAir2' => $this->input->post('suhuAir2'),
            'Eva2' => $this->input->post('Eva2'),
            'Ch3' => $this->input->post('Ch3'),
            'ke3Anign0' => $this->input->post('ke3Anign0'),
            'ke3Anign10' => $this->input->post('ke3Anign10'),
            'suhuUdara3' => $this->input->post('suhuUdara3'),
            'Rh3' => $this->input->post('Rh3'),
            'Eva3' => $this->input->post('Eva3'),
            'Ch4' => $this->input->post('Ch4'),
            'Eva4' => $this->input->post('Eva4'),
        ];
        // print_r($data); die;

        $id = $this->input->post('id');
        $this->Agm1b_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('Admin/vw_agm1b');
    }

    function hujan()
    {
        $data['title'] = 'Pos Hujan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hujan'] = $this->Hujan_model->get();
        $data['hasil'] = $this->Hujan_model->Kabupaten();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view("admin/hujan", $data);
        $this->load->view('templates/footer');
    }

    function get_kab()
    {
        $id_kabupaten = $this->input->post('id_kabupaten');
        $data = $this->Hujan_model->Kabupaten($id_kabupaten);
        echo json_encode($data);
    }

    function get_alat()
    {
        $kabupaten = $this->input->post('kabupaten');
        $data = $this->Hujan_model->Stasiun($kabupaten);
        echo json_encode($data);
    }

    public function form_hujan()
    {
        $data['title'] = 'Pos Hujan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/form_hujan', $data);
        $this->load->view('templates/footer');
    }

    public function vw_hujan()
    {
        $data['title'] = 'Pos Hujan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hujan'] = $this->Hujan_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vw_hujan', $data);
        $this->load->view('templates/footer');
    }
    function hujan_tambah()
    {
        $data['title'] = 'Pos Hujan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hujan'] = $this->Hujan_model->get();
        $data['provinsi'] = $this->Provinsi_model->get();
        $data['kabupaten'] = $this->Kabupaten_model->get();
        $data['kecematan'] = $this->Kecematan_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/form_hujan', $data);
        $this->load->view('templates/footer');
    }

    function hujan_input_tambah()
    {
        $date = $this->input->post('date');
        $data['Hujan'] = $this->Hujan_model->get();
        //$token = $this->input->post('token');

        $data = [
            'alat' => $this->input->post('alat'),
            'kabupaten' => $this->input->post('kabupaten'),
            'date' => $this->input->post('date'),
            'tgl_01' => $this->input->post('tgl_01'),
            'tgl_02' => $this->input->post('tgl_02'),
            'tgl_03' => $this->input->post('tgl_03'),
            'tgl_04' => $this->input->post('tgl_04'),
            'tgl_05' => $this->input->post('tgl_05'),
            'tgl_06' => $this->input->post('tgl_06'),
            'tgl_07' => $this->input->post('tgl_07'),
            'tgl_08' => $this->input->post('tgl_08'),
            'tgl_09' => $this->input->post('tgl_09'),
            'tgl_10' => $this->input->post('tgl_10'),
            'tgl_11' => $this->input->post('tgl_11'),
            'tgl_12' => $this->input->post('tgl_12'),
            'tgl_13' => $this->input->post('tgl_13'),
            'tgl_14' => $this->input->post('tgl_14'),
            'tgl_15' => $this->input->post('tgl_15'),
            'tgl_16' => $this->input->post('tgl_16'),
            'tgl_17' => $this->input->post('tgl_17'),
            'tgl_18' => $this->input->post('tgl_18'),
            'tgl_19' => $this->input->post('tgl_19'),
            'tgl_20' => $this->input->post('tgl_20'),
            'tgl_21' => $this->input->post('tgl_21'),
            'tgl_22' => $this->input->post('tgl_22'),
            'tgl_23' => $this->input->post('tgl_23'),
            'tgl_24' => $this->input->post('tgl_24'),
            'tgl_25' => $this->input->post('tgl_25'),
            'tgl_26' => $this->input->post('tgl_26'),
            'tgl_27' => $this->input->post('tgl_27'),
            'tgl_28' => $this->input->post('tgl_28'),
            'tgl_29' => $this->input->post('tgl_29'),
            'tgl_30' => $this->input->post('tgl_30'),
            'tgl_31' => $this->input->post('tgl_31')
        ];

        $this->Hujan_model->insert($data);
        $this->Hujan_model->update(['date' => $date], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Ditambah!</div>');
        redirect('Admin/hujan');
    }
    public function hujan_hapus($id)
    {
        $this->Hujan_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Buku tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Buku Berhasil Dihapus!</div>');
        }
        redirect('Admin/vw_hujan');
    }

    function hujan_edit($id)
    {
        $data['title'] = "Halaman Edit Pos Hujan";
        $data['hujan'] = $this->Hujan_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['hasil'] = $this->Hujan_model->Kabupaten();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_hujan', $data);
        $this->load->view('templates/footer');
    }

    function hujan_submit_edit($id)
    {
        $data = [
            'alat' => $this->input->post('alat'),
            'kabupaten' => $this->input->post('kabupaten'),
            'tgl_01' => $this->input->post('tgl_01'),
            'tgl_02' => $this->input->post('tgl_02'),
            'tgl_03' => $this->input->post('tgl_03'),
            'tgl_04' => $this->input->post('tgl_04'),
            'tgl_05' => $this->input->post('tgl_05'),
            'tgl_06' => $this->input->post('tgl_06'),
            'tgl_07' => $this->input->post('tgl_07'),
            'tgl_08' => $this->input->post('tgl_08'),
            'tgl_09' => $this->input->post('tgl_09'),
            'tgl_10' => $this->input->post('tgl_10'),
            'tgl_11' => $this->input->post('tgl_11'),
            'tgl_12' => $this->input->post('tgl_12'),
            'tgl_13' => $this->input->post('tgl_13'),
            'tgl_14' => $this->input->post('tgl_14'),
            'tgl_15' => $this->input->post('tgl_15'),
            'tgl_16' => $this->input->post('tgl_16'),
            'tgl_17' => $this->input->post('tgl_17'),
            'tgl_18' => $this->input->post('tgl_18'),
            'tgl_19' => $this->input->post('tgl_19'),
            'tgl_20' => $this->input->post('tgl_20'),
            'tgl_21' => $this->input->post('tgl_21'),
            'tgl_22' => $this->input->post('tgl_22'),
            'tgl_23' => $this->input->post('tgl_23'),
            'tgl_24' => $this->input->post('tgl_24'),
            'tgl_25' => $this->input->post('tgl_25'),
            'tgl_26' => $this->input->post('tgl_26'),
            'tgl_27' => $this->input->post('tgl_27'),
            'tgl_28' => $this->input->post('tgl_28'),
            'tgl_29' => $this->input->post('tgl_29'),
            'tgl_30' => $this->input->post('tgl_30'),
            'tgl_31' => $this->input->post('tgl_31')
        ];
        // print_r($data); die;

        $id = $this->input->post('id');
        $this->Hujan_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('admin/vw_hujan');
    }

    function form_iklim()
    {
        $data['title'] = "Form Iklim";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view("admin/form_iklim", $data);
        $this->load->view('templates/footer');
    }

    function vw_iklim()
    {
        $data['title'] = "Form Iklim";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view("admin/vw_iklim", $data);
        $this->load->view('templates/footer');
    }

    function iklim_tambah()
    {
        $data['title'] = 'Iklim';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vw_iklim', $data);
        $this->load->view('templates/footer');
    }

    function iklim_input_tambah()
    {
        $status = $this->input->post('status');
        $data1['formIklim'] = $this->Agm1a_model->get();
        $data2['formIklim'] = $this->Agm1b_model->get();
        $data1 = [
            'bk1' => $this->input->post('bk1_suhuUdara1'),
            'bb1' => $this->input->post('bb1'),
            'bk2' => $this->input->post('bk2'),
            'bb2' => $this->input->post('bb2'),
            'bk3' => $this->input->post('bk3_Rh3'),
            'bb3' => $this->input->post('bb3'),
            'minrumput' => $this->input->post('minrumput'),
            'min2' => $this->input->post('min2'),
            'max3' => $this->input->post('max3'),
            'lembabnisb1' => $this->input->post('lembabnisb1_Rh1'),
            'lembabnisb2' => $this->input->post('lembabnisb2'),
            'lembabnisb3' => $this->input->post('lembabnisb3'),
            'kcpwaktu1' => $this->input->post('kcpperamatan1_kcpwaktu1'),
            'kcpwaktu2' => $this->input->post('kcpperamatan1_kcpwaktu1'),
            'kcpwaktu3' => $this->input->post('kcpperamatan1_kcpwaktu1'),
            'arahwaktu1' => $this->input->post('arahwaktu1'),
            'arahwaktu2' => $this->input->post('arahwaktu2'),
            'arahwaktu3' => $this->input->post('arahwaktu3'),
            'kcpperamatan1' => $this->input->post('kcpperamatan1_kcpwaktu1'),
            'kcpperamatan2' => $this->input->post('kcpperamatan2'),
            'kcpperamatan3' => $this->input->post('kcpperamatan3'),
            'sinarmht' => $this->input->post('sinarmht'),
            'hujan' => $this->input->post('hujan'),
            'ujibk2' => $this->input->post('ujibk2'),
            'ukimin2' => $this->input->post('ukimin2'),
            'ujibk3' => $this->input->post('ujibk3'),
            'ukimax3' => $this->input->post('ukimax3'),
            'jam7' => $this->input->post('jam7'),
            'jam2' => $this->input->post('jam2'),
            'phujan' => $this->input->post('phujan_Ch1'),
            // 'salju' => $this->input->post('salju'),
            // 'pembekuan' => $this->input->post('pembekuan'),
            // 'embun' => $this->input->post('embun'),
            // 'kabut' => $this->input->post('kabut'),
            // 'udarab' => $this->input->post('udarab'),
            // 'rambun' => $this->input->post('rambun'),
            // 'kabutdebu' => $this->input->post('kabutdebu'),
            // 'badaidebu' => $this->input->post('badaidebu'),
            // 'anginribut' => $this->input->post('anginribut'),
            // 'catatan' => $this->input->post('catatan'),
            'date' => $this->input->post('date')
        ];


        $data2 = [
            'date' => $this->input->post('date'),
            'temg15' => $this->input->post('temg15'),
            'temg110' => $this->input->post('temg110'),
            'temg120' => $this->input->post('temg120'),
            'temg25' => $this->input->post('temg25'),
            'temg210' => $this->input->post('temg210'),
            'temg220' => $this->input->post('temg220'),
            'temg35' => $this->input->post('temg35'),
            'temg310' => $this->input->post('temg310'),
            'temg320' => $this->input->post('temg320'),
            'temg350' => $this->input->post('temg350'),
            'temg3100' => $this->input->post('temg3100'),
            'tempt15' => $this->input->post('tempt15'),
            'tempt110' => $this->input->post('tempt110'),
            'tempt120' => $this->input->post('tempt120'),
            'tempt25' => $this->input->post('tempt25'),
            'tempt210' => $this->input->post('tempt210'),
            'tempt220' => $this->input->post('tempt220'),
            'tempt35' => $this->input->post('tempt35'),
            'tempt310' => $this->input->post('tempt310'),
            'tempt320' => $this->input->post('tempt320'),
            'tempt350' => $this->input->post('tempt350'),
            'tempt3100' => $this->input->post('tempt3100'),
            // 'KeTanah' => $this->input->post('KeTanah'),
            // 'JaHujan' => $this->input->post('JaHujan'),
            'Ch1' => $this->input->post('phujan_Ch1'),
            'ke1Angin0' => $this->input->post('ke1Angin0'),
            'ke1Angin10' => $this->input->post('ke1Angin10'),
            'suhuUdara1' => $this->input->post('bk1_suhuUdara1'),
            'Rh1' => $this->input->post('lembabnisb1_Rh1'),
            'suhuAir1' => $this->input->post('suhuAir1'),
            'Eva1' => $this->input->post('Eva1'),
            'Ch2' => $this->input->post('Ch2'),
            'ke2Angin0' => $this->input->post('ke2Angin0'),
            'ke2Angin10' => $this->input->post('ke2Angin10'),
            'suhuUdara2' => $this->input->post('suhuUdara2'),
            'Rh2' => $this->input->post('Rh2'),
            'suhuAir2' => $this->input->post('suhuAir2'),
            'Eva2' => $this->input->post('Eva2'),
            'Ch3' => $this->input->post('Ch3'),
            'ke3Angin0' => $this->input->post('ke3Angin0'),
            'ke3Angin10' => $this->input->post('ke3Angin10'),
            'suhuUdara3' => $this->input->post('suhuUdara3'),
            'Rh3' => $this->input->post('bk3_Rh3'),
            'Eva3' => $this->input->post('Eva3'),
            'Ch4' => $this->input->post('Ch4'),
            'Eva4' => $this->input->post('Eva4')
        ];

        // $this->FormIklim_model->insert($data);
        $this->Agm1a_model->insert($data1);
        $this->Agm1b_model->insert($data2);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Ditambah!</div>');
        redirect('Admin/form_iklim');
    }


    function Tanggal($date)
    {
        $datetime = DateTime::createFromFormat('Y-m-d', $date);
        return $datetime->format('d-m-Y');
    }

    //Me48
    public function me48()
    {
        $data['title'] = 'ME-48';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['me48']  = $this->Me48_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/me48', $data);
        $this->load->view('templates/footer');
    }

    public function vwsingle48()
    {
        $data['title'] = 'Me48';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['me48'] = $this->Me48_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vwsingle48', $data);
        $this->load->view('templates/footer');
    }



    public function single48()
    {
        $data['title'] = 'ME-48';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['me48'] = $this->db->get_where('me48')->row_array();
        $data1['me48'] = $this->Me48_model->get();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/single48', $data);
        $this->load->view('templates/footer');
    }


    public function hapus($id)
    {
        $this->Me48_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Buku tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Buku Berhasil Dihapus!</div>');
        }
        redirect('admin/vwsingle48');
    }



    public function insertdata()
    {
        $data['title'] = 'ME-48';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['Me48'] = $this->Me48_model->get();
        $data1 = [
            'observation_hour' => $this->input->post('observation_hour'),
            'pengenal_angin' => $this->input->post('pengenal_angin'),
            'arah_angin' => $this->input->post('arah_angin'),
            'kecepatan_angin' => $this->input->post('kecepatan_angin'),
            'penglihatan_mendatar' => $this->input->post('penglihatan_mendatar'),
            'pengenal_cuaca' => $this->input->post('pengenal_cuaca'),
            'keadaan_cuaca_waktu_pengamatanww' => $this->input->post('keadaan_cuaca_waktu_pengamatanww'),
            'keadaan_cuaca_lalu1w1' => $this->input->post('keadaan_cuaca_lalu1w1'),
            'keadaan_cuaca_lalu2w2' => $this->input->post('keadaan_cuaca_lalu2w2'),
            'derajat_panas' => $this->input->post('derajat_panas'),
            'tekanan_dibacamb' => $this->input->post('tekanan_dibacamb'),
            'QFF' => $this->input->post('QFF'),
            'mbqff' => $this->input->post('mbqff'),
            'perubahan_tekanan3jam' => $this->input->post('perubahan_tekanan3jam'),
            'QFE' => $this->input->post('QFE'),
            'mbqfe' => $this->input->post('mbqfe'),
            'perubahan_tekanan24jam' => $this->input->post('perubahan_tekanan24jam'),
            'bola_kering' => $this->input->post('bola_kering'),
            'bola_basah' => $this->input->post('bola_basah'),
            'titik_embun' => $this->input->post('titik_embun'),
            'lembab_nisbi' => $this->input->post('lembab_nisbi'),
            'suhu_max' => $this->input->post('suhu_max'),
            'suhu_min' => $this->input->post('suhu_min'),
            'pengenal_hujan' => $this->input->post('pengenal_hujan'),
            'hujan_takaran_terakhir' => $this->input->post('hujan_takaran_terakhir'),
            'hujan_6jam_lalu' => $this->input->post('hujan_6jam_lalu'),
            'hujan_24jam_lalu' => $this->input->post('hujan_24jam_lalu'),
            'jenis_awan_rendah' => $this->input->post('jenis_awan_rendah'),
            'tinggi_dasar_cl1' => $this->input->post('tinggi_dasar_cl1'),
            'tinggi_puncak_cl1' => $this->input->post('tinggi_puncak_cl1'),
            'elevasi' => $this->input->post('elevasi'),
            'banyak_perawanan' => $this->input->post('banyak_perawanan'),
            'awanmenengahB/J' => $this->input->post('awanmenengahB/J'),
            'awantinggiB/J' => $this->input->post('awantinggiB/J'),
            'ad1' => $this->input->post('ad1'),
            't1' => $this->input->post('t1'),
            'ad2' => $this->input->post('ad2'),
            't2' => $this->input->post('t2'),
            'langit_tertutup_awan' => $this->input->post('langit_tertutup_awan'),
            'observation_date' => $this->input->post('observation_date'),
            'jenisawan1' => $this->input->post('jenisawan1'),
            'jenisawan2' => $this->input->post('jenisawan2'),
            'tawan1' => $this->input->post('tawan1'),
            'tawan2' => $this->input->post('tawan2'),
            'banyakawan1' => $this->input->post('banyakawan1'),
            'banyakawan2' => $this->input->post('banyakawan2'),
            'pengenal_alat_penguapan' => $this->input->post('pengenal_alat_penguapan'),
            'jumlahpenguapan' => $this->input->post('jumlahpenguapan'),
            'radiasi_24_jam' => $this->input->post('radiasi_24_jam'),
            'penyinaran_matahari' => $this->input->post('penyinaran_matahari'),
            'keadaan_tanah' => $this->input->post('keadaan_tanah'),
            'catatan' => $this->input->post('catatan'),
            'parah' => $this->input->post('parah'),
            'observer' => $this->input->post('observer')
        ];
        $this->Me48_model->insert($data1);
        redirect('admin/vwsingle48');
    }

    function editme48($id)
    {
        $data['title'] = "Halaman Edit Me48";
        $data['me48'] = $this->Me48_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/editme48', $data);
        $this->load->view('templates/footer');
    }

    function submit_edit($id)
    {
        $data1 = [
            'pengenal_angin' => $this->input->post('pengenal_angin'),
            'arah_angin' => $this->input->post('arah_angin'),
            'kecepatan_angin' => $this->input->post('kecepatan_angin'),
            'penglihatan_mendatar' => $this->input->post('penglihatan_mendatar'),
            'pengenal_cuaca' => $this->input->post('pengenal_cuaca'),
            'keadaan_cuaca_waktu_pengamatanww' => $this->input->post('keadaan_cuaca_waktu_pengamatanww'),
            'keadaan_cuaca_lalu1w1' => $this->input->post('keadaan_cuaca_lalu1w1'),
            'keadaan_cuaca_lalu2w2' => $this->input->post('keadaan_cuaca_lalu2w2'),
            'derajat_panas' => $this->input->post('derajat_panas'),
            'tekanan_dibacamb' => $this->input->post('tekanan_dibacamb'),
            'QFF' => $this->input->post('QFF'),
            'mbqff' => $this->input->post('mbqff'),
            'perubahan_tekanan3jam' => $this->input->post('perubahan_tekanan3jam'),
            'QFE' => $this->input->post('QFE'),
            'mbqfe' => $this->input->post('mbqfe'),
            'perubahan_tekanan24jam' => $this->input->post('perubahan_tekanan24jam'),
            'bola_kering' => $this->input->post('bola_kering'),
            'bola_basah' => $this->input->post('bola_basah'),
            'titik_embun' => $this->input->post('titik_embun'),
            'lembab_nisbi' => $this->input->post('lembab_nisbi'),
            'suhu_max' => $this->input->post('suhu_max'),
            'suhu_min' => $this->input->post('suhu_min'),
            'pengenal_hujan' => $this->input->post('pengenal_hujan'),
            'hujan_takaran_terakhir' => $this->input->post('hujan_takaran_terakhir'),
            'hujan_6jam_lalu' => $this->input->post('hujan_6jam_lalu'),
            'hujan_24jam_lalu' => $this->input->post('hujan_24jam_lalu'),
            'jenis_awan_rendah' => $this->input->post('jenis_awan_rendah'),
            'tinggi_dasar_cl1' => $this->input->post('tinggi_dasar_cl1'),
            'tinggi_puncak_cl1' => $this->input->post('tinggi_puncak_cl1'),
            'elevasi' => $this->input->post('elevasi'),
            'banyak_perawanan' => $this->input->post('banyak_perawanan'),
            'awanmenengahB/J' => $this->input->post('awanmenengahB/J'),
            'awantinggiB/J' => $this->input->post('awantinggiB/J'),
            'ad1' => $this->input->post('ad1'),
            't1' => $this->input->post('t1'),
            'ad2' => $this->input->post('ad2'),
            't2' => $this->input->post('t2'),
            'langit_tertutup_awan' => $this->input->post('langit_tertutup_awan'),
            'jenisawan1' => $this->input->post('jenisawan1'),
            'jenisawan2' => $this->input->post('jenisawan2'),
            'tawan1' => $this->input->post('tawan1'),
            'tawan2' => $this->input->post('tawan2'),
            'banyakawan1' => $this->input->post('banyakawan1'),
            'banyakawan2' => $this->input->post('banyakawan2'),
            'pengenal_alat_penguapan' => $this->input->post('pengenal_alat_penguapan'),
            'jumlahpenguapan' => $this->input->post('jumlahpenguapan'),
            'radiasi_24_jam' => $this->input->post('radiasi_24_jam'),
            'penyinaran_matahari' => $this->input->post('penyinaran_matahari'),
            'keadaan_tanah' => $this->input->post('keadaan_tanah'),
            'catatan' => $this->input->post('catatan'),
            'parah' => $this->input->post('parah'),
            'observer' => $this->input->post('observer')
        ];

        $id = $this->input->post('id');
        $this->Me48_model->update(['id' => $id], $data1);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('admin/vwsingle48');
    }

    //Laporan Me48
    public function laporan()
    {
        $data['title'] = 'Report Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporan', $data);
        $this->load->view('templates/footer');
    }

    public function vwsingle48laporan()
    {
        $data['title'] = 'Me48';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['me48'] = $this->Me48_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vwsingle48laporan', $data);
        $this->load->view('templates/footer');
    }

    public function vwwref()
    {
        $data['title'] = 'Me48';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['me48'] = $this->Me48_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vwwref', $data);
        $this->load->view('templates/footer');
    }





    public function vwfklim()
    {
        $data['title'] = 'Me48';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['me48'] = $this->Me48_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vwfklim', $data);
        $this->load->view('templates/footer');
    }


    public function vwharian()
    {
        $data['title'] = 'Me48';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['me48'] = $this->Me48_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vwharian', $data);
        $this->load->view('templates/footer');
    }

    public function vwme45()
    {
        $data['title'] = 'Me48';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['me48'] = $this->Me48_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vwme45', $data);
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
        $this->load->view("./agm1a/laporan_iklim1", $data);
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
        $this->load->view("./agm1b/laporan_iklim2", $data);
        $this->load->view('templates/footer');
    }
    function laporanme48()
    {
        $data['title'] = "Laporan Me48";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['me48'] = $this->Me48_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view("./me48/laporanme48", $data);
        $this->load->view('templates/footer');
    }
    //penguapan
    function laporanpenguapan()
    {
        $data['title'] = "Laporan Me48";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['me48'] = $this->Me48_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view("./penguapan/laporanpenguapan", $data);
        $this->load->view('templates/footer');
    }
    public function penguapan()
    {
        $data['title'] = 'Penguapan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['penguapan']  = $this->Penguapan_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/penguapan', $data);
        $this->load->view('templates/footer');
       
    }

	public function vwpenguapan()
    {
        $data['title'] = 'penguapan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['penguapan']  = $this->Penguapan_model->get();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vwpenguapan', $data);
        $this->load->view('templates/footer');
       
    }


    public function insertpenguapan()
    {
        $data['title'] = 'ME-48';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['Me48'] = $this->Penguapan_model->get();
        $data1 = [
            '1a' => $this->input->post('1'),
            '2a' => $this->input->post('2'),
            '3a' => $this->input->post('3'),
            '4a' => $this->input->post('4'),
            '5a' => $this->input->post('5'),
            '6a' => $this->input->post('6'),
            '7a' => $this->input->post('7'),
            '8a' => $this->input->post('8'),
            '9a' => $this->input->post('9'),
            '10a' => $this->input->post('10'),
            '11a' => $this->input->post('11'),
            '12a' => $this->input->post('12'),
            '13a' => $this->input->post('13'),
            '14a' => $this->input->post('14'),
            '15a' => $this->input->post('15'),
            '16a' => $this->input->post('16'),
            '17a' => $this->input->post('17'),
            '18a' => $this->input->post('18'),
            '19a' => $this->input->post('19'),
            '20a' => $this->input->post('20'),
            '21a' => $this->input->post('21'),
            '22a' => $this->input->post('22'),
            '23a' => $this->input->post('23'),
            '24a' => $this->input->post('24'),
            '25a' => $this->input->post('25'),
            '26a' => $this->input->post('26'),
            '27a' => $this->input->post('27'),
            '28a' => $this->input->post('28'),
            '29a' => $this->input->post('29'),
            '30a' => $this->input->post('30'),
            '31a' => $this->input->post('31'),
            '32a' => $this->input->post('32'),
            '33a' => $this->input->post('33'),
            '34a' => $this->input->post('34'),
            '35a' => $this->input->post('35'),
            '36a' => $this->input->post('36'),
            '37a' => $this->input->post('37'),
            '38a' => $this->input->post('38'),
            '39a' => $this->input->post('39'),
            '40a' => $this->input->post('40'),
            '41a' => $this->input->post('41'),
            '42a' => $this->input->post('42'),
            '43a' => $this->input->post('43'),
            '44a' => $this->input->post('44'),
            '45a' => $this->input->post('45'),
            '46a' => $this->input->post('46'),
            '47a' => $this->input->post('47'),
            '48a' => $this->input->post('48'),
            '49a' => $this->input->post('49'),
            '50a' => $this->input->post('50'),
            '51a' => $this->input->post('51'),
            '52a' => $this->input->post('52'),
            '53a' => $this->input->post('53'),
            '54a' => $this->input->post('54'),
            '55a' => $this->input->post('55'),
            '56a' => $this->input->post('56'),
            '57a' => $this->input->post('57'),
            '58a' => $this->input->post('58'),
            '59a' => $this->input->post('59'),
            '60a' => $this->input->post('60'),
            '61a' => $this->input->post('61'),
            '62a' => $this->input->post('62'),
            '63a' => $this->input->post('63'),
            '64a' => $this->input->post('64'),
            '65a' => $this->input->post('65'),
            '66a' => $this->input->post('66'),
            '67a' => $this->input->post('67'),
            '68a' => $this->input->post('68'),
            '69a' => $this->input->post('69'),
            '70a' => $this->input->post('70'),
            '71a' => $this->input->post('71'),
            '72a' => $this->input->post('72'),
            '73a' => $this->input->post('73'),
            '74a' => $this->input->post('74'),
            '75a' => $this->input->post('75'),
            '76a' => $this->input->post('76'),
            '77a' => $this->input->post('77'),
            '78a' => $this->input->post('78'),
            '79a' => $this->input->post('79'),
            '80a' => $this->input->post('80'),
            '81a' => $this->input->post('81'),
            '82a' => $this->input->post('82'),
            '83a' => $this->input->post('83'),
            '84a' => $this->input->post('84'),
            '85a' => $this->input->post('85'),
            '86a' => $this->input->post('86'),
            '87a' => $this->input->post('87'),
            '88a' => $this->input->post('88'),
            '89a' => $this->input->post('89'),
            '90a' => $this->input->post('90'),
            '91a' => $this->input->post('91'),
            '92a' => $this->input->post('92'),
            '93a' => $this->input->post('93'),
            '94a' => $this->input->post('94'),
            '95a' => $this->input->post('95'),
            '96a' => $this->input->post('96'),
            '97a' => $this->input->post('97'),
            '98a' => $this->input->post('98'),
            '99a' => $this->input->post('99'),
            '100a' => $this->input->post('100'),
            '101a' => $this->input->post('101'),
            '102a' => $this->input->post('102'),
            '103a' => $this->input->post('103'),
            '104a' => $this->input->post('104'),
            '105a' => $this->input->post('105'),
            '106a' => $this->input->post('106'),
            '107a' => $this->input->post('107'),
            '108a' => $this->input->post('108'),
            '109a' => $this->input->post('109'),
            '110a' => $this->input->post('110'),
            '111a' => $this->input->post('111'),
            '112a' => $this->input->post('112'),
            '113a' => $this->input->post('113'),
            '114a' => $this->input->post('114'),
            '115a' => $this->input->post('115'),
            '116a' => $this->input->post('116'),
            '117a' => $this->input->post('117'),
            '118a' => $this->input->post('118'),
            '119a' => $this->input->post('119'),
            '120a' => $this->input->post('120'),
            '121a' => $this->input->post('121'),
            '122a' => $this->input->post('122'),
            '123a' => $this->input->post('123'),
            '124a' => $this->input->post('124'),
            '125a' => $this->input->post('125'),
            '126a' => $this->input->post('126'),
            '127a' => $this->input->post('127'),
            '128a' => $this->input->post('128'),
            '129a' => $this->input->post('129'),
            '130a' => $this->input->post('130'),
            '131a' => $this->input->post('131'),
            '132a' => $this->input->post('132'),
            '133a' => $this->input->post('133'),
            '134a' => $this->input->post('134'),
            '135a' => $this->input->post('135'),
            '136a' => $this->input->post('136'),
            '137a' => $this->input->post('137'),
            '138a' => $this->input->post('138'),
            '139a' => $this->input->post('139'),
            '140a' => $this->input->post('140'),
            '141a' => $this->input->post('141'),
            '142a' => $this->input->post('142'),
            '143a' => $this->input->post('143'),
            '144a' => $this->input->post('144'),
            '145a' => $this->input->post('145'),
            '146a' => $this->input->post('146'),
            '147a' => $this->input->post('147'),
            '148a' => $this->input->post('148'),
            '149a' => $this->input->post('149'),
            '150a' => $this->input->post('150'),
            '151a' => $this->input->post('151'),
            '152a' => $this->input->post('152'),
            '153a' => $this->input->post('153'),
            '154a' => $this->input->post('154'),
            '155a' => $this->input->post('155'),
            '156a' => $this->input->post('156'),
            '157a' => $this->input->post('157'),
            '158a' => $this->input->post('158'),
            '159a' => $this->input->post('159'),
            '160a' => $this->input->post('160'),
            '161a' => $this->input->post('161'),
            '162a' => $this->input->post('162'),
            '163a' => $this->input->post('163'),
            '164a' => $this->input->post('164'),
            '165a' => $this->input->post('165'),
            '166a' => $this->input->post('166'),
            '167a' => $this->input->post('167'),
            '168a' => $this->input->post('168'),
            '169a' => $this->input->post('169'),
            '170a' => $this->input->post('170'),
            '171a' => $this->input->post('171'),
            '172a' => $this->input->post('172'),
            '173a' => $this->input->post('173'),
            '174a' => $this->input->post('174'),
            '175a' => $this->input->post('175'),
            '176a' => $this->input->post('176'),
            '177a' => $this->input->post('177'),
            '178a' => $this->input->post('178'),
            '179a' => $this->input->post('179'),
            '180a' => $this->input->post('180'),
            '181a' => $this->input->post('181'),
            '182a' => $this->input->post('182'),
            '183a' => $this->input->post('183'),
            '184a' => $this->input->post('184'),
            '185a' => $this->input->post('185'),
            '186a' => $this->input->post('186'),
            '187a' => $this->input->post('187'),
            '188a' => $this->input->post('188'),
            '189a' => $this->input->post('189'),
            '190a' => $this->input->post('190'),
            '191a' => $this->input->post('191'),
            '192a' => $this->input->post('192'),
            '193a' => $this->input->post('193'),
            '194a' => $this->input->post('194'),
            '195a' => $this->input->post('195'),
            '196a' => $this->input->post('196'),
            '197a' => $this->input->post('197'),
            '198a' => $this->input->post('198'),
            '199a' => $this->input->post('199'),
            '200a' => $this->input->post('200'),
            '201a' => $this->input->post('201'),
            '202a' => $this->input->post('202'),
            '203a' => $this->input->post('203'),
            '204a' => $this->input->post('204'),
            '205a' => $this->input->post('205'),
            '206a' => $this->input->post('206'),
            '207a' => $this->input->post('207'),
            '208a' => $this->input->post('208'),
            '209a' => $this->input->post('209'),
            '210a' => $this->input->post('210'),
            '211a' => $this->input->post('211'),
            '212a' => $this->input->post('212'),
            '213a' => $this->input->post('213'),
            '214a' => $this->input->post('214'),
            '215a' => $this->input->post('215'),
            '216a' => $this->input->post('216'),
            '217a' => $this->input->post('217'),
            '218a' => $this->input->post('218'),
            '219a' => $this->input->post('219'),
            '220a' => $this->input->post('220'),
            '221a' => $this->input->post('221'),
            '222a' => $this->input->post('222'),
            '223a' => $this->input->post('223'),
            '224a' => $this->input->post('224'),
            '225a' => $this->input->post('225'),
            '226a' => $this->input->post('226'),
            '227a' => $this->input->post('227'),
            '228a' => $this->input->post('228'),
            '229a' => $this->input->post('229'),
            '230a' => $this->input->post('230'),
            '231a' => $this->input->post('231'),
            '232a' => $this->input->post('232'),
            '233a' => $this->input->post('233'),
            '234a' => $this->input->post('234'),
            '235a' => $this->input->post('235'),
            '236a' => $this->input->post('236'),
            '237a' => $this->input->post('237'),
            '238a' => $this->input->post('238'),
            '239a' => $this->input->post('239'),
            '240a' => $this->input->post('240'),
            '241a' => $this->input->post('241'),
            '242a' => $this->input->post('242'),
            '243a' => $this->input->post('243'),
            '244a' => $this->input->post('244'),
            '245a' => $this->input->post('245'),
            '246a' => $this->input->post('246'),
            '247a' => $this->input->post('247'),
            '248a' => $this->input->post('248'),
            '249a' => $this->input->post('249'),
            '250a' => $this->input->post('250'),
            '251a' => $this->input->post('251'),
            '252a' => $this->input->post('252'),
            '253a' => $this->input->post('253'),
            '254a' => $this->input->post('254'),
            '255a' => $this->input->post('255'),
            '256a' => $this->input->post('256'),
            '257a' => $this->input->post('257'),
            '258a' => $this->input->post('258'),
            '259a' => $this->input->post('259'),
            '260a' => $this->input->post('260'),
            '261a' => $this->input->post('261'),
            '262a' => $this->input->post('262'),
            '263a' => $this->input->post('263'),
            '264a' => $this->input->post('264'),
            '265a' => $this->input->post('265'),
            '266a' => $this->input->post('266'),
            '267a' => $this->input->post('267'),
            '268a' => $this->input->post('268'),
            '269a' => $this->input->post('269'),
            '270a' => $this->input->post('270'),
            '271a' => $this->input->post('271'),
            '272a' => $this->input->post('272'),
            '273a' => $this->input->post('273'),
            '274a' => $this->input->post('274'),
            '275a' => $this->input->post('275'),
            '276a' => $this->input->post('276'),
            '277a' => $this->input->post('277'),
            '278a' => $this->input->post('278'),
            '279a' => $this->input->post('279'),
            '280a' => $this->input->post('280'),
            '281a' => $this->input->post('281'),
            '282a' => $this->input->post('282'),
            '283a' => $this->input->post('283'),
            '284a' => $this->input->post('284'),
            '285a' => $this->input->post('285'),
            '286a' => $this->input->post('286'),
            '287a' => $this->input->post('287'),
            '288a' => $this->input->post('288'),
            '289a' => $this->input->post('289'),
            '290a' => $this->input->post('290'),
            '291a' => $this->input->post('291'),
            '292a' => $this->input->post('292'),
            '293a' => $this->input->post('293'),
            '294a' => $this->input->post('294'),
            '295a' => $this->input->post('295'),
            '296a' => $this->input->post('296'),
            '297a' => $this->input->post('297'),
            '298a' => $this->input->post('298'),
            '299a' => $this->input->post('299'),
            '300a' => $this->input->post('300'),
            '301a' => $this->input->post('301'),
            '302a' => $this->input->post('302'),
            '303a' => $this->input->post('303'),
            '304a' => $this->input->post('304'),
            '305a' => $this->input->post('305'),
            '306a' => $this->input->post('306'),
            '307a' => $this->input->post('307'),
            '308a' => $this->input->post('308'),
            '309a' => $this->input->post('309'),
            '310a' => $this->input->post('310'),
            '311a' => $this->input->post('311'),
            '312a' => $this->input->post('312'),
            '313a' => $this->input->post('313'),
            '314a' => $this->input->post('314'),
            '315a' => $this->input->post('315'),
            '316a' => $this->input->post('316'),
            '317a' => $this->input->post('317'),
            '318a' => $this->input->post('318'),
            '319a' => $this->input->post('319'),
            '320a' => $this->input->post('320'),
            '321a' => $this->input->post('321'),
            '322a' => $this->input->post('322'),
            '323a' => $this->input->post('323'),
            '324a' => $this->input->post('324'),
            '325a' => $this->input->post('325'),
            '326a' => $this->input->post('326'),
            '327a' => $this->input->post('327'),
            '328a' => $this->input->post('328'),
            '329a' => $this->input->post('329'),
            '330a' => $this->input->post('330'),
            '331a' => $this->input->post('331'),
            '332a' => $this->input->post('332'),
            '333a' => $this->input->post('333'),
            '334a' => $this->input->post('334'),
            '335a' => $this->input->post('335'),
            '336a' => $this->input->post('336'),
            '337a' => $this->input->post('337'),
            '338a' => $this->input->post('338'),
            '339a' => $this->input->post('339'),
            '340a' => $this->input->post('340'),
            '341a' => $this->input->post('341'),
            '342a' => $this->input->post('342'),
            '343a' => $this->input->post('343'),
            '344a' => $this->input->post('344'),
            '345a' => $this->input->post('345'),
            '346a' => $this->input->post('346'),
            '347a' => $this->input->post('347'),
            '348a' => $this->input->post('348'),
            '349a' => $this->input->post('349'),
            '350a' => $this->input->post('350'),
            '351a' => $this->input->post('351'),
            '352a' => $this->input->post('352'),
            '353a' => $this->input->post('353'),
            '354a' => $this->input->post('354'),
            '355a' => $this->input->post('355'),
            '356a' => $this->input->post('356'),
            '357a' => $this->input->post('357'),
            '358a' => $this->input->post('358'),
            '359a' => $this->input->post('359'),
            '360a' => $this->input->post('360'),
            '361a' => $this->input->post('361'),
            '362a' => $this->input->post('362'),
            '363a' => $this->input->post('363'),
            '364a' => $this->input->post('364'),
            '365a' => $this->input->post('365'),
            '366a' => $this->input->post('366'),
            '367a' => $this->input->post('367'),
            '368a' => $this->input->post('368'),
            '369a' => $this->input->post('369'),
            '370a' => $this->input->post('370'),
            '371a' => $this->input->post('371'),
            '372a' => $this->input->post('372'),
            '373a' => $this->input->post('373'),
            '374a' => $this->input->post('374'),
            '375a' => $this->input->post('375'),
            '376a' => $this->input->post('376'),
            '377a' => $this->input->post('377'),
            '378a' => $this->input->post('378'),
            '379a' => $this->input->post('379'),
            '380a' => $this->input->post('380'),
            '381a' => $this->input->post('381'),
            '382a' => $this->input->post('382'),
            '383a' => $this->input->post('383'),
            '384a' => $this->input->post('384'),
            '385a' => $this->input->post('385'),
            '386a' => $this->input->post('386'),
            '387a' => $this->input->post('387'),
            '388a' => $this->input->post('388'),
            '389a' => $this->input->post('389'),
            '390a' => $this->input->post('390'),
            '391a' => $this->input->post('391'),
            '392a' => $this->input->post('392'),
            '393a' => $this->input->post('393'),
            '394a' => $this->input->post('394'),
            '395a' => $this->input->post('395'),
            '396a' => $this->input->post('396'),
            'bdaymonth' => $this->input->post('bdaymonth')
		];
        $this->Penguapan_model->insert($data1);
        redirect('admin/penguapan');
    }
   
//penyinaran
	public function penyinaran()
    {
        $data['title'] = 'Penyinaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['penyinaran']  = $this->Penyinaran_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/penyinaran', $data);
        $this->load->view('templates/footer');
       
    }

	public function vwpenyinaran()
    {
        $data['title'] = 'Penyinaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['penyinaran']  = $this->Penyinaran_model->get();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vwpenyinaran', $data);
        $this->load->view('templates/footer');
       
    }


    public function insertpenyinaran()
    {
        $data['title'] = 'ME-48';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['Me48'] = $this->Penyinaran_model->get();
        $data1 = [
'1a' => $this->input->post('1'),
'2a' => $this->input->post('2'),
'3a' => $this->input->post('3'),
'4a' => $this->input->post('4'),
'5a' => $this->input->post('5'),
'6a' => $this->input->post('6'),
'7a' => $this->input->post('7'),
'8a' => $this->input->post('8'),
'9a' => $this->input->post('9'),
'10a' => $this->input->post('10'),
'11a' => $this->input->post('11'),
'12a' => $this->input->post('12'),
'13a' => $this->input->post('13'),
'14a' => $this->input->post('14'),
'15a' => $this->input->post('15'),
'16a' => $this->input->post('16'),
'17a' => $this->input->post('17'),
'18a' => $this->input->post('18'),
'19a' => $this->input->post('19'),
'20a' => $this->input->post('20'),
'21a' => $this->input->post('21'),
'22a' => $this->input->post('22'),
'23a' => $this->input->post('23'),
'24a' => $this->input->post('24'),
'25a' => $this->input->post('25'),
'26a' => $this->input->post('26'),
'27a' => $this->input->post('27'),
'28a' => $this->input->post('28'),
'29a' => $this->input->post('29'),
'30a' => $this->input->post('30'),
'31a' => $this->input->post('31'),
'32a' => $this->input->post('32'),
'33a' => $this->input->post('33'),
'34a' => $this->input->post('34'),
'35a' => $this->input->post('35'),
'36a' => $this->input->post('36'),
'37a' => $this->input->post('37'),
'38a' => $this->input->post('38'),
'39a' => $this->input->post('39'),
'40a' => $this->input->post('40'),
'41a' => $this->input->post('41'),
'42a' => $this->input->post('42'),
'43a' => $this->input->post('43'),
'44a' => $this->input->post('44'),
'45a' => $this->input->post('45'),
'46a' => $this->input->post('46'),
'47a' => $this->input->post('47'),
'48a' => $this->input->post('48'),
'49a' => $this->input->post('49'),
'50a' => $this->input->post('50'),
'51a' => $this->input->post('51'),
'52a' => $this->input->post('52'),
'53a' => $this->input->post('53'),
'54a' => $this->input->post('54'),
'55a' => $this->input->post('55'),
'56a' => $this->input->post('56'),
'57a' => $this->input->post('57'),
'58a' => $this->input->post('58'),
'59a' => $this->input->post('59'),
'60a' => $this->input->post('60'),
'61a' => $this->input->post('61'),
'62a' => $this->input->post('62'),
'63a' => $this->input->post('63'),
'64a' => $this->input->post('64'),
'65a' => $this->input->post('65'),
'66a' => $this->input->post('66'),
'67a' => $this->input->post('67'),
'68a' => $this->input->post('68'),
'69a' => $this->input->post('69'),
'70a' => $this->input->post('70'),
'71a' => $this->input->post('71'),
'72a' => $this->input->post('72'),
'73a' => $this->input->post('73'),
'74a' => $this->input->post('74'),
'75a' => $this->input->post('75'),
'76a' => $this->input->post('76'),
'77a' => $this->input->post('77'),
'78a' => $this->input->post('78'),
'79a' => $this->input->post('79'),
'80a' => $this->input->post('80'),
'81a' => $this->input->post('81'),
'82a' => $this->input->post('82'),
'83a' => $this->input->post('83'),
'84a' => $this->input->post('84'),
'85a' => $this->input->post('85'),
'86a' => $this->input->post('86'),
'87a' => $this->input->post('87'),
'88a' => $this->input->post('88'),
'89a' => $this->input->post('89'),
'90a' => $this->input->post('90'),
'91a' => $this->input->post('91'),
'92a' => $this->input->post('92'),
'93a' => $this->input->post('93'),
'94a' => $this->input->post('94'),
'95a' => $this->input->post('95'),
'96a' => $this->input->post('96'),
'97a' => $this->input->post('97'),
'98a' => $this->input->post('98'),
'99a' => $this->input->post('99'),
'100a' => $this->input->post('100'),
'101a' => $this->input->post('101'),
'102a' => $this->input->post('102'),
'103a' => $this->input->post('103'),
'104a' => $this->input->post('104'),
'105a' => $this->input->post('105'),
'106a' => $this->input->post('106'),
'107a' => $this->input->post('107'),
'108a' => $this->input->post('108'),
'109a' => $this->input->post('109'),
'110a' => $this->input->post('110'),
'111a' => $this->input->post('111'),
'112a' => $this->input->post('112'),
'113a' => $this->input->post('113'),
'114a' => $this->input->post('114'),
'115a' => $this->input->post('115'),
'116a' => $this->input->post('116'),
'117a' => $this->input->post('117'),
'118a' => $this->input->post('118'),
'119a' => $this->input->post('119'),
'120a' => $this->input->post('120'),
'121a' => $this->input->post('121'),
'122a' => $this->input->post('122'),
'123a' => $this->input->post('123'),
'124a' => $this->input->post('124'),
'125a' => $this->input->post('125'),
'126a' => $this->input->post('126'),
'127a' => $this->input->post('127'),
'128a' => $this->input->post('128'),
'129a' => $this->input->post('129'),
'130a' => $this->input->post('130'),
'131a' => $this->input->post('131'),
'132a' => $this->input->post('132'),
'133a' => $this->input->post('133'),
'134a' => $this->input->post('134'),
'135a' => $this->input->post('135'),
'136a' => $this->input->post('136'),
'137a' => $this->input->post('137'),
'138a' => $this->input->post('138'),
'139a' => $this->input->post('139'),
'140a' => $this->input->post('140'),
'141a' => $this->input->post('141'),
'142a' => $this->input->post('142'),
'143a' => $this->input->post('143'),
'144a' => $this->input->post('144'),
'145a' => $this->input->post('145'),
'146a' => $this->input->post('146'),
'147a' => $this->input->post('147'),
'148a' => $this->input->post('148'),
'149a' => $this->input->post('149'),
'150a' => $this->input->post('150'),
'151a' => $this->input->post('151'),
'152a' => $this->input->post('152'),
'153a' => $this->input->post('153'),
'154a' => $this->input->post('154'),
'155a' => $this->input->post('155'),
'156a' => $this->input->post('156'),
'157a' => $this->input->post('157'),
'158a' => $this->input->post('158'),
'159a' => $this->input->post('159'),
'160a' => $this->input->post('160'),
'161a' => $this->input->post('161'),
'162a' => $this->input->post('162'),
'163a' => $this->input->post('163'),
'164a' => $this->input->post('164'),
'165a' => $this->input->post('165'),
'166a' => $this->input->post('166'),
'167a' => $this->input->post('167'),
'168a' => $this->input->post('168'),
'169a' => $this->input->post('169'),
'170a' => $this->input->post('170'),
'171a' => $this->input->post('171'),
'172a' => $this->input->post('172'),
'173a' => $this->input->post('173'),
'174a' => $this->input->post('174'),
'175a' => $this->input->post('175'),
'176a' => $this->input->post('176'),
'177a' => $this->input->post('177'),
'178a' => $this->input->post('178'),
'179a' => $this->input->post('179'),
'180a' => $this->input->post('180'),
'181a' => $this->input->post('181'),
'182a' => $this->input->post('182'),
'183a' => $this->input->post('183'),
'184a' => $this->input->post('184'),
'185a' => $this->input->post('185'),
'186a' => $this->input->post('186'),
'187a' => $this->input->post('187'),
'188a' => $this->input->post('188'),
'189a' => $this->input->post('189'),
'190a' => $this->input->post('190'),
'191a' => $this->input->post('191'),
'192a' => $this->input->post('192'),
'193a' => $this->input->post('193'),
'194a' => $this->input->post('194'),
'195a' => $this->input->post('195'),
'196a' => $this->input->post('196'),
'197a' => $this->input->post('197'),
'198a' => $this->input->post('198'),
'199a' => $this->input->post('199'),
'200a' => $this->input->post('200'),
'201a' => $this->input->post('201'),
'202a' => $this->input->post('202'),
'203a' => $this->input->post('203'),
'204a' => $this->input->post('204'),
'205a' => $this->input->post('205'),
'206a' => $this->input->post('206'),
'207a' => $this->input->post('207'),
'208a' => $this->input->post('208'),
'209a' => $this->input->post('209'),
'210a' => $this->input->post('210'),
'211a' => $this->input->post('211'),
'212a' => $this->input->post('212'),
'213a' => $this->input->post('213'),
'214a' => $this->input->post('214'),
'215a' => $this->input->post('215'),
'216a' => $this->input->post('216'),
'217a' => $this->input->post('217'),
'218a' => $this->input->post('218'),
'219a' => $this->input->post('219'),
'220a' => $this->input->post('220'),
'221a' => $this->input->post('221'),
'222a' => $this->input->post('222'),
'223a' => $this->input->post('223'),
'224a' => $this->input->post('224'),
'225a' => $this->input->post('225'),
'226a' => $this->input->post('226'),
'227a' => $this->input->post('227'),
'228a' => $this->input->post('228'),
'229a' => $this->input->post('229'),
'230a' => $this->input->post('230'),
'231a' => $this->input->post('231'),
'232a' => $this->input->post('232'),
'233a' => $this->input->post('233'),
'234a' => $this->input->post('234'),
'235a' => $this->input->post('235'),
'236a' => $this->input->post('236'),
'237a' => $this->input->post('237'),
'238a' => $this->input->post('238'),
'239a' => $this->input->post('239'),
'240a' => $this->input->post('240'),
'241a' => $this->input->post('241'),
'242a' => $this->input->post('242'),
'243a' => $this->input->post('243'),
'244a' => $this->input->post('244'),
'245a' => $this->input->post('245'),
'246a' => $this->input->post('246'),
'247a' => $this->input->post('247'),
'248a' => $this->input->post('248'),
'249a' => $this->input->post('249'),
'250a' => $this->input->post('250'),
'251a' => $this->input->post('251'),
'252a' => $this->input->post('252'),
'253a' => $this->input->post('253'),
'254a' => $this->input->post('254'),
'255a' => $this->input->post('255'),
'256a' => $this->input->post('256'),
'257a' => $this->input->post('257'),
'258a' => $this->input->post('258'),
'259a' => $this->input->post('259'),
'260a' => $this->input->post('260'),
'261a' => $this->input->post('261'),
'262a' => $this->input->post('262'),
'263a' => $this->input->post('263'),
'264a' => $this->input->post('264'),
'265a' => $this->input->post('265'),
'266a' => $this->input->post('266'),
'267a' => $this->input->post('267'),
'268a' => $this->input->post('268'),
'269a' => $this->input->post('269'),
'270a' => $this->input->post('270'),
'271a' => $this->input->post('271'),
'272a' => $this->input->post('272'),
'273a' => $this->input->post('273'),
'274a' => $this->input->post('274'),
'275a' => $this->input->post('275'),
'276a' => $this->input->post('276'),
'277a' => $this->input->post('277'),
'278a' => $this->input->post('278'),
'279a' => $this->input->post('279'),
'280a' => $this->input->post('280'),
'281a' => $this->input->post('281'),
'282a' => $this->input->post('282'),
'283a' => $this->input->post('283'),
'284a' => $this->input->post('284'),
'285a' => $this->input->post('285'),
'286a' => $this->input->post('286'),
'287a' => $this->input->post('287'),
'288a' => $this->input->post('288'),
'289a' => $this->input->post('289'),
'290a' => $this->input->post('290'),
'291a' => $this->input->post('291'),
'292a' => $this->input->post('292'),
'293a' => $this->input->post('293'),
'294a' => $this->input->post('294'),
'295a' => $this->input->post('295'),
'296a' => $this->input->post('296'),
'297a' => $this->input->post('297'),
'298a' => $this->input->post('298'),
'299a' => $this->input->post('299'),
'300a' => $this->input->post('300'),
'301a' => $this->input->post('301'),
'302a' => $this->input->post('302'),
'303a' => $this->input->post('303'),
'304a' => $this->input->post('304'),
'305a' => $this->input->post('305'),
'306a' => $this->input->post('306'),
'307a' => $this->input->post('307'),
'308a' => $this->input->post('308'),
'309a' => $this->input->post('309'),
'310a' => $this->input->post('310'),
'311a' => $this->input->post('311'),
'312a' => $this->input->post('312'),
'313a' => $this->input->post('313'),
'314a' => $this->input->post('314'),
'315a' => $this->input->post('315'),
'316a' => $this->input->post('316'),
'317a' => $this->input->post('317'),
'318a' => $this->input->post('318'),
'319a' => $this->input->post('319'),
'320a' => $this->input->post('320'),
'321a' => $this->input->post('321'),
'322a' => $this->input->post('322'),
'323a' => $this->input->post('323'),
'324a' => $this->input->post('324'),
'325a' => $this->input->post('325'),
'326a' => $this->input->post('326'),
'327a' => $this->input->post('327'),
'328a' => $this->input->post('328'),
'329a' => $this->input->post('329'),
'330a' => $this->input->post('330'),
'331a' => $this->input->post('331'),
'332a' => $this->input->post('332'),
'333a' => $this->input->post('333'),
'334a' => $this->input->post('334'),
'335a' => $this->input->post('335'),
'336a' => $this->input->post('336'),
'337a' => $this->input->post('337'),
'338a' => $this->input->post('338'),
'339a' => $this->input->post('339'),
'340a' => $this->input->post('340'),
'341a' => $this->input->post('341'),
'342a' => $this->input->post('342'),
'343a' => $this->input->post('343'),
'344a' => $this->input->post('344'),
'345a' => $this->input->post('345'),
'346a' => $this->input->post('346'),
'347a' => $this->input->post('347'),
'348a' => $this->input->post('348'),
'349a' => $this->input->post('349'),
'350a' => $this->input->post('350'),
'351a' => $this->input->post('351'),
'352a' => $this->input->post('352'),
'353a' => $this->input->post('353'),
'354a' => $this->input->post('354'),
'355a' => $this->input->post('355'),
'356a' => $this->input->post('356'),
'357a' => $this->input->post('357'),
'358a' => $this->input->post('358'),
'359a' => $this->input->post('359'),
'360a' => $this->input->post('360'),
'361a' => $this->input->post('361'),
'362a' => $this->input->post('362'),
'363a' => $this->input->post('363'),
'364a' => $this->input->post('364'),
'365a' => $this->input->post('365'),
'366a' => $this->input->post('366'),
'367a' => $this->input->post('367'),
'368a' => $this->input->post('368'),
'369a' => $this->input->post('369'),
'370a' => $this->input->post('370'),
'371a' => $this->input->post('371'),
'372a' => $this->input->post('372'),
'373a' => $this->input->post('373'),
'374a' => $this->input->post('374'),
'375a' => $this->input->post('375'),
'376a' => $this->input->post('376'),
'377a' => $this->input->post('377'),
'378a' => $this->input->post('378'),
'379a' => $this->input->post('379'),
'380a' => $this->input->post('380'),
'381a' => $this->input->post('381'),
'382a' => $this->input->post('382'),
'383a' => $this->input->post('383'),
'384a' => $this->input->post('384'),
'385a' => $this->input->post('385'),
'386a' => $this->input->post('386'),
'387a' => $this->input->post('387'),
'388a' => $this->input->post('388'),
'389a' => $this->input->post('389'),
'390a' => $this->input->post('390'),
'391a' => $this->input->post('391'),
'392a' => $this->input->post('392'),
'393a' => $this->input->post('393'),
'394a' => $this->input->post('394'),
'395a' => $this->input->post('395'),
'396a' => $this->input->post('396'),
'397a' => $this->input->post('397'),
'398a' => $this->input->post('398'),
'399a' => $this->input->post('399'),
'400a' => $this->input->post('400'),
'401a' => $this->input->post('401'),
'402a' => $this->input->post('402'),
'403a' => $this->input->post('403'),
'404a' => $this->input->post('404'),
'405a' => $this->input->post('405'),
'406a' => $this->input->post('406'),
'407a' => $this->input->post('407'),
'408a' => $this->input->post('408'),
'409a' => $this->input->post('409'),
'410a' => $this->input->post('410'),
'411a' => $this->input->post('411'),
'412a' => $this->input->post('412'),
'413a' => $this->input->post('413'),
'414a' => $this->input->post('414'),
'415a' => $this->input->post('415'),
'416a' => $this->input->post('416'),
'417a' => $this->input->post('417'),
'418a' => $this->input->post('418'),
'419a' => $this->input->post('419'),
'420a' => $this->input->post('420'),
'421a' => $this->input->post('421'),
'422a' => $this->input->post('422'),
'423a' => $this->input->post('423'),
'424a' => $this->input->post('424'),
'425a' => $this->input->post('425'),
'426a' => $this->input->post('426'),
'427a' => $this->input->post('427'),
'428a' => $this->input->post('428'),
'429a' => $this->input->post('429'),
'430a' => $this->input->post('430'),
'431a' => $this->input->post('431'),
'432a' => $this->input->post('432'),
'433a' => $this->input->post('433'),
'434a' => $this->input->post('434'),
'435a' => $this->input->post('435'),
'436a' => $this->input->post('436'),
'437a' => $this->input->post('437'),
'438a' => $this->input->post('438'),
'439a' => $this->input->post('439'),
'440a' => $this->input->post('440'),
'441a' => $this->input->post('441'),
'442a' => $this->input->post('442'),
'443a' => $this->input->post('443'),
'444a' => $this->input->post('444'),
'445a' => $this->input->post('445'),
'446a' => $this->input->post('446'),
'447a' => $this->input->post('447'),
'448a' => $this->input->post('448'),
'449a' => $this->input->post('449'),
'450a' => $this->input->post('450'),	
'451a' => $this->input->post('451'),
'452a' => $this->input->post('452'),
'453a' => $this->input->post('453'),
'454a' => $this->input->post('454'),
'455a' => $this->input->post('455'),
'456a' => $this->input->post('456'),
'457a' => $this->input->post('457'),
'458a' => $this->input->post('458'),
'459a' => $this->input->post('459'),
'460a' => $this->input->post('460'),
'461a' => $this->input->post('461'),
'462a' => $this->input->post('462'),
'463a' => $this->input->post('463'),
'464a' => $this->input->post('464'),
'465a' => $this->input->post('465'),	
'466a' => $this->input->post('466'),
'467a' => $this->input->post('467'),
'468a' => $this->input->post('468'),
'469a' => $this->input->post('469'),
'470a' => $this->input->post('470'),
'471a' => $this->input->post('471'),
'472a' => $this->input->post('472'),
'473a' => $this->input->post('473'),
'474a' => $this->input->post('474'),
'475a' => $this->input->post('475'),
'476a' => $this->input->post('476'),
'477a' => $this->input->post('477'),
'478a' => $this->input->post('478'),
'479a' => $this->input->post('479'),
'480a' => $this->input->post('480'),
'481a' => $this->input->post('481'),
'482a' => $this->input->post('482'),
'483a' => $this->input->post('483'),
'484a' => $this->input->post('484'),
'485a' => $this->input->post('485'),
'486a' => $this->input->post('486'),
'487a' => $this->input->post('487'),
'488a' => $this->input->post('488'),
'489a' => $this->input->post('489'),
'490a' => $this->input->post('490'),
'491a' => $this->input->post('491'),
'492a' => $this->input->post('492'),
'493a' => $this->input->post('493'),
'494a' => $this->input->post('494'),
'bdaymonth' => $this->input->post('bdaymonth'),
'495a' => $this->input->post('495')

		];
        $this->Penyinaran_model->insert($data1);
        redirect('admin/penyinaran');
    }


}

