<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      $data['page'] = 'About';

      $this->load->view('templates/header', $data);
      $this->load->view('about/index');
      $this->load->view('templates/footer');    
  }

}
