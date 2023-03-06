<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
    }
    public function index()
    {
        $data['title'] = 'Kepegawaian Staklim Riau';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pegawai'] = $this->db->get('pegawai')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/pegawai', $data);
        $this->load->view('templates/footer');
    }

    public function pegawaiAdd()
    {
        $data['title'] = 'Tambah Pegawai Baru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Pegawai', 'required', ['required' => 'Nama Pegawai wajib di isi']);
        $this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required', ['required' => 'Tempat Tanggal Lahir wajib di isi']);
        $this->form_validation->set_rules('nip', 'NIP', 'required', ['required' => 'NIP wajib di isi']);
        $this->form_validation->set_rules('golongan', 'Golongan Pegawai', 'required', ['required' => 'Golongan Pegawai wajib di isi']);
        $this->form_validation->set_rules('jabatan', 'Jabatan Pegawai', 'required', ['required' => 'Jabatan Pegawai wajib di isi']);
        $this->form_validation->set_rules('kompetensi', 'Kompetensi Pegawai', 'required', ['required' => 'Kompetensi Pegawai wajib di isi']);
        $this->form_validation->set_rules('email', 'Alamat Surel', 'required', ['required' => 'Alamat Surel wajib di isi']);
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required', ['required' => 'Pendidikan wajib di isi']);
        $this->form_validation->set_rules('publikasi', 'Publikasi', 'required', ['required' => 'publikasi wajib di isi']);
        $this->form_validation->set_rules('foto', 'Badan Berita', 'required', ['required' => 'Foto wajib di isi. Apabila tidak memiliki foto, hubungi IT untuk proses pengambilan foto pegawai']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pegawai/tambah_pegawai', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $ttl = $this->input->post('ttl');
            $nip = $this->input->post('nip');
            $golongan = $this->input->post('golongan');
            $jabatan = $this->input->post('jabatan');
            $kompetensi = $this->input->post('kompetensi');
            $email = $this->input->post('email');
            $pendidikan = $this->input->post('pendidikan');
            $publikasi = $this->input->post('publikasi');
            $foto = $this->input->post('foto');

            $data = array(
                'nama' => $nama,
                'ttl' => $ttl,
                'nip' => $nip,
                'golongan' => $golongan,
                'jabatan' => $jabatan,
                'kompetensi' => $kompetensi,
                'email' => $email,
                'pendidikan' => $pendidikan,
                'publikasi' => $publikasi,
                'foto' => $foto
            );
            $this->db->insert('pegawai', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kepegawaian Ditambahkan</div>');
            redirect('pegawai/');
        }
    }
    public function pegawaiEdit($id)
    {
        $data['title'] = 'Ubah Data Pegawai';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pegawai'] = $this->Pegawai_model->getById($id);
        $this->form_validation->set_rules('nama', 'Nama Pegawai', 'required', ['required' => 'Nama Pegawai wajib di isi']);
        $this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required', ['required' => 'Tempat Tanggal Lahir wajib di isi']);
        $this->form_validation->set_rules('nip', 'NIP', 'required', ['required' => 'NIP wajib di isi']);
        $this->form_validation->set_rules('golongan', 'Golongan Pegawai', 'required', ['required' => 'Golongan Pegawai wajib di isi']);
        $this->form_validation->set_rules('jabatan', 'Jabatan Pegawai', 'required', ['required' => 'Jabatan Pegawai wajib di isi']);
        $this->form_validation->set_rules('kompetensi', 'Kompetensi Pegawai', 'required', ['required' => 'Kompetensi Pegawai wajib di isi']);
        $this->form_validation->set_rules('email', 'Alamat Surel', 'required', ['required' => 'Alamat Surel wajib di isi']);
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required', ['required' => 'Pendidikan wajib di isi']);
        $this->form_validation->set_rules('publikasi', 'Publikasi', 'required', ['required' => 'Publikasi wajib di isi']);
        $this->form_validation->set_rules('foto', 'Badan Berita', 'required', ['required' => 'Foto wajib di isi. Apabila tidak memiliki foto, hubungi IT untuk proses pengambilan foto pegawai']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pegawai/edit_pegawai', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'ttl' => $this->input->post('ttl'),
                'nip' => $this->input->post('nip'),
                'golongan' => $this->input->post('golongan'),
                'jabatan' => $this->input->post('jabatan'),
                'kompetensi' => $this->input->post('kompetensi'),
                'email' => $this->input->post('email'),
                'pendidikan' => $this->input->post('pendidikan'),
                'publikasi' => $this->input->post('publikasi'),
                'foto' => $this->input->post('foto'),
            ];
            $id = $this->input->post('id');
            $this->Pegawai_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kepegawaian Berhasil Diubah!</div>');
            redirect('pegawai/');
        }
    }
    public function pegawaiDelete($id)
    {
        $this->Pegawai_model->delete($id);
        $error = $this->db->error();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kepegawaian Berhasil Dihapus!</div>');
        redirect('pegawai');
    }
}
