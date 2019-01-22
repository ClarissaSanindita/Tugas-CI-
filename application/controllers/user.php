<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller{

  public function index()
  {
    $data['konten']="home";
    $this->load->view('index', $data);
  }
  public function chart()
  {
    $data['konten']="chart";
    $this->load->view('index', $data);
  }
  public function elements()
  {
    $data['konten']="elements";
    $this->load->view('index', $data);
  }
  public function tables()
  {
    $data['konten']="tables";
    $this->load->view('index', $data);
  }
}

 ?>
