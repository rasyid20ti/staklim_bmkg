<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
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
		$this->load->model('Instansi_model');
		$this->load->model('Survei_model');
		$this->load->model('Berita_model');
		$this->load->model('MediaDepan_model');
		$this->load->model('MenuTarif_model');
		$this->load->model('NolRupiah_model');
	}
	public function index()
	{
		$data['survei'] = $this->Survei_model->get();
		$data['nolrupiah'] = $this->NolRupiah_model->get();
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerLayanan');
		$this->load->view('pengajuan/vw_pengajuan', $data);
		$this->load->view('layout/footer', $data);
	}
	public function umum()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerLayanan');
		$this->load->view('pengajuan/form_umum');
		$this->load->view('layout/footer',$data);
	}
	public function mahasiswa()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerLayanan');
		$this->load->view('pengajuan/form_mahasiswa');
		$this->load->view('layout/footer', $data);
	}
	public function instansi()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['instansi'] = $this->Instansi_model->get();
		$this->load->view('layout/headerLayanan');
		$this->load->view('pengajuan/vw_layanan_instansi');
		$this->load->view('layout/footer', $data);
	}

	function tambah_instansi()
	{
		$this->load->helper('string');
		//$data['judul'] = "Halaman Edit Dosen";
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama  wajib disi']);
		$this->form_validation->set_rules('instansi', 'Instansi', 'required', ['required' => 'Instansi wajib disi']);
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|valid_email',
			[
				'required' => 'Email wajib disi',
				'valid_email' => 'Gunakan Email yang akurat'
			]
		);
		$this->form_validation->set_rules('hp', 'HP', 'required', [
			'required' => 'HP wajib disi'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat wajib disi']);
		$this->form_validation->set_rules('peruntukan_data', 'Peruntukan Data', 'required', ['required' => 'Peruntukan Data wajib disi']);
		$this->form_validation->set_rules('perolehan_data', 'Perolehan Data', 'required', ['required' => 'Perolehan Data wajib disi']);
		$this->form_validation->set_rules('bentuk', 'Bentuk', 'required', ['required' => 'Bentuk Informasi wajib disi']);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', ['required' => 'Keterangan wajib disi']);
		$this->form_validation->set_rules('surat_permohonan', 'Surat Permohonan', 'callback_file_check');
		$this->form_validation->set_rules('ktp', 'KTP', 'callback_file_check2');
		$this->form_validation->set_rules('survey', 'Survey', 'required', ['required' => 'Survey Wajib diisi dan di Screenshoot']);
		$this->form_validation->set_rules('unsur[]', 'Unsur', 'required', ['required' => 'Unsur wajib disi']);
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required', ['required' => 'Lokasi wajib disi']);
		$this->form_validation->set_rules('periode', 'Periode', 'required', ['required' => 'Waktu wajib disi']);
		$this->form_validation->set_rules('panjang', 'Panjang', 'required', ['required' => 'Panjang Waktu wajib disi']);
		$this->form_validation->set_rules('informasi[]', 'Informasi', 'required', ['required' => 'Informasi wajib disi']);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view("layout/headerLayanan");
			$this->load->view("pengajuan/vw_layanan_instansi");
			$this->load->view("layout/footer");
		} else {
			$data['instansi'] = $this->instansi_model->get();

			$upload_permohonan = $_FILES['surat_permohonan']['name'];
			if ($upload_permohonan) {
				$config['allowed_types'] = 'pdf|jpeg|jpg|png';
				//$config['max_size'] = '2048';
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
				$config['allowed_types'] = 'pdf|jpeg|jpg|png';
				//$config['max_size'] = '2048';
				$config['upload_path'] = './assets2/folder/ktp/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('ktp')) {
					$file_name2 = $this->upload->data('file_name2');
					$this->db->set('ktp', $file_name2);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$upload_survey = $_FILES['survey']['name'];
			if ($upload_survey) {
				$config['allowed_types'] = 'pdf|jpeg|jpg|png';
				//$config['max_size'] = '2048';
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
				'nama' => $this->input->post('nama'),
				'instansi' => $this->input->post('instansi'),
				'email' => $this->input->post('email'),
				'hp' => $this->input->post('hp'),
				'alamat' => $this->input->post('alamat'),
				'peruntukan_data' => $this->input->post('peruntukan_data'),
				'perolehan_data' => $this->input->post('perolehan_data'),
				'bentuk' => $this->input->post('bentuk'),
				'lokasi' => $this->input->post('lokasi'),
				'periode' => $this->input->post('periode'),
				'panjang' => $this->input->post('panjang'),
				'keterangan' => $this->input->post('keterangan'),
				'informasi' => $in_array,
				'unsur' => $in_array3,
				'token' => $token,
				'surat_permohonan' => $upload_permohonan,
				'ktp' => $upload_ktp,
				'survey' => $upload_survey
			];

			// print_r($data);
			// die;

			$data1 = [
				'status' => 'Belum Diproses',
				'token' => $token
			];

			$this->instansi_model->insert($data);
			$this->instansi_model->insert_detail_track($data1);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Data Berhasil Diajukan</br>
		Simpan Kode Berikut <b>' . $token . '</b> untuk mengecek status data di menu Search</div>');
			redirect('pengajuan');
		}
	}
	public function survey()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerLayanan');
		$this->load->view('pengajuan/vw_survey');
		$this->load->view('layout/footer', $data);
	}

	public function tarif()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['menuTarif'] = $this->MenuTarif_model->get();
		$this->load->view('layout/headerLayanan');
		$this->load->view('pengajuan/vw_tarif', $data);
		$this->load->view('layout/footer', $data);
	}
}
