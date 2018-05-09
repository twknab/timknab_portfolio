<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
  public function index()
  {
    $data = [];
    $this->load->helper('url');
    // Load Index Page:
    $this->load->view("index", $data);
  }

}
