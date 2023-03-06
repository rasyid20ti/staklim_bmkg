<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Checkin_model');
    }
}
