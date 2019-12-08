<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['page'] = 'Work';

    $this->load->view('templates/header', $data);
    $this->load->view('work/index');
    $this->load->view('templates/footer');
  }

}
