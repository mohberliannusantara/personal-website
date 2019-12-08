<?php
class My404 extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->output->set_status_header('404');
    $this->load->view('err404');
  }

}
