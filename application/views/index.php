<?php
// Ensure no script access:
defined('BASEPATH') OR exit('No direct script access allowed');
// Set title, keywords and description below:
$data["title"] = "This is a test.";
$data["keywords"] = "One, two, three.";
$data["description"] = "This is my website description.";
// Load header:
$this->load->view('includes/header', $data);
?>
<!-- Begin Body Content  -->
<h1>This is a test.</h1>
<?php 
// Load footer:
$this->load->view('includes/footer');
?>