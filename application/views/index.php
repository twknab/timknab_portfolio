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
<h1>Welcome,</h1>
<p>Thank you for your visit and may you enjoy your stay.</p>
<p>Explore my <a href="#">web projects</a>, <a href="#">graphic designs</a> or <a href="#">writings</a>. The latest and greatest is released via the <a href="#">blog</a>.</p>
<p>Please <a href="#">contact</a> me if you require my services, or if you have a suggestion for improving this website or any project.</p>
<p>Thank you and enjoy your visit,</p>
<p>Tim Knab</p>
<?php 
// Load footer:
$this->load->view('includes/footer');
?>