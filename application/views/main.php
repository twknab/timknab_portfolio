<?php
// Ensure no script access:
defined('BASEPATH') OR exit('No direct script access allowed');
// Set title, keywords and description below:
$data["title"] = "Web Application Development, Web Development, Web and Graphic Design | Seattle, WA | timknab.com";
$data["keywords"] = "Web developer, web application development, web design, graphic design.";
$data["description"] = "Remote Web application and web development services based out of Seattle, Washington, USA.";
// Load header:
$this->load->view('includes/header', $data);
?>
<!-- Begin Body Content  -->
<div id="logo">
  <img src="https://placehold.it/500x500" alt=""/>
</div>
<div class="main">
  <h1 class="high-impact text-center">Howdy!</h1>
  <p>My name is Tim Knab and I'm a remote freelancer full stack web application developer and graphic designer for hire.</p>

</div> 


<!-- Contact Form -->

<!-- Footer -->
<?php 
$this->load->view('includes/footer');
?>