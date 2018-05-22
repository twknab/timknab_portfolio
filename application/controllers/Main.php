<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
  public function index()
  {
    $data = [];
    // $this->load->helper('url');
    // Load Index Page:
    $this->load->view("index", $data);
  }
  public function form()
  {
    $data = [];
    // $this->load->helper('url');
    $form = $this->input->post();

    var_dump($form);
    
    // Load Index Page:
    $this->load->view("index", $data);
  }

}
