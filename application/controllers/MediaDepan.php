<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

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
		$this->load->model('Media_model');
		// $this->load->model('Berita_model');
        
    }
	public function index()
	{
		// $data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->Media_model->getView();
        // $this->load->view('layout/headerMedia');
		// $this->load->view('media/vw_media', $data);
        $this->load->view('layout/footer', $data);
	}
	public function detail($id)
	{
		$idDecrypt = decrypt_url($id);
		// $data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->Media_model->getID($idDecrypt);
        // $this->load->view('layout/headerMedia');
		// $this->load->view('media/media_detail', $data);
        $this->load->view('layout/footer', $data);
	}
	public function visual()
	{
		// $idDecrypt = decrypt_url($id);
		// $data['dasarian'] = $this->Dasarian_model->getID($idDecrypt);
		$data['media'] = $this->Media_model->getDuaMedia();
        // $this->load->view('layout/headerMedia');
		// $this->load->view('dasarian/dasarian_visual');
        $this->load->view('layout/footer', $data);
	}
}
