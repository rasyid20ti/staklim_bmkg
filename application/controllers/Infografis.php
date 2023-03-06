<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infografis extends CI_Controller {

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
		$this->load->model('Infografis_model');
		$this->load->model('Berita_model');
		$this->load->model('MediaDepan_model');
		$this->load->model('MenuLayanan_model');
        
    }
	public function index()
	{
		// $this->load->library('pagination');

		// $config['base_url'] = site_url('/infografis');
		// $config['page_query_string'] = TRUE;
		// $config['total_rows'] = $this->Infografis_model->get_published_count();
		// $config['per_page'] = 2;

		// $this->pagination->initialize($config);
		// $limit = $config['per_page'];
		// $offset = html_escape($this->input->get('per_page'));

		// $data['infografis'] = $this->Infografis_model->get_published($limit, $offset);

		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		// $data = [
		// 	'infografis' => $this->Infografis_model->paginate(10),
		// 	'pager' => $this->Infografis_model->pager
		// ];
		// $data['infografis'] = $this->Infografis_model->getView();
		$data['infografis'] = $this->Infografis_model->getView();
		$data['menuLayanan'] = $this->MenuLayanan_model->getMenuInfografis();
		// $data['pager'] = $this->Infografis_model->pager;
        $this->load->view('layout/headerInfografis');
		$this->load->view('infografis/vw_infografis', $data);
        $this->load->view('layout/footer', $data);
	}
	public function detail($id)
	{
		$idDecrypt = decrypt_url($id);
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['infografis'] = $this->Infografis_model->getID($idDecrypt);
		if($idDecrypt == 46) {
			$data['angin'] = $this->Infografis_model->getArahAngin();
			$this->load->view('layout/headerInfografis');
			$this->load->view('infografis/vw_arah-angin', $data);
			$this->load->view('layout/footer', $data);
		} elseif($idDecrypt == 47) {
			$this->load->view('layout/headerInfografis');
			$this->load->view('infografis/vw_detail-berakhlak');
			$this->load->view('layout/footer', $data);
		} elseif($idDecrypt == 48) {
			$this->load->view('layout/headerInfografis');
			$this->load->view('infografis/vw_detail-alat');
			$this->load->view('layout/footer', $data);
		} else {
			$this->load->view('layout/headerInfografis');
			$this->load->view('infografis/infografis_detail', $data);
			$this->load->view('layout/footer', $data);
		}
	}

	public function search(){
		// Ambil data NIS yang dikirim via ajax post
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$keyword = $this->input->post('keyword');
		$topik = $this->input->post('topik');
		$data['infografis'] = $this->Infografis_model->get_keyword($keyword, $topik);
		$data['menuLayanan'] = $this->MenuLayanan_model->getMenuInfografis();
		$this->load->view('layout/headerInfografis');
		$this->load->view('infografis/vw_infografis', $data);
        $this->load->view('layout/footer', $data);
	}
}
