<?php
defined('BASEPATH') or exit('No direct script access allowed');
class laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Me48_model');
	}
	
	public function laporan()
    {
        $data['title'] = 'Laporan';
        $data['user'] = $this->db->get_where('user')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporan', $data);
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

    public function vwpenyinaran()
    {
        $data['title'] = 'Me48';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['me48'] = $this->Me48_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vwpenyinaran', $data);
        $this->load->view('templates/footer');
    }

    public function vwpenguapan()
    {
        $data['title'] = 'Me48';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['me48'] = $this->Me48_model->get();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/vwpenguapan', $data);
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




}
