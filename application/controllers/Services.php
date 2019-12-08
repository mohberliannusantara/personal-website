<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      $data['page'] = 'Services';

      $this->load->view('templates/header', $data);
      $this->load->view('service/index');
      $this->load->view('templates/footer');
  }

}
