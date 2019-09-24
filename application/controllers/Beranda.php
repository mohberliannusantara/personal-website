<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
        $this->load->view('tempaltes/header');
        $this->load->view('beranda/index');
        $this->load->view('tempaltes/footer');
	}
}
