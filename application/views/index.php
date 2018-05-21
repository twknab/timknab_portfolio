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

<div class="main">
  <h1 class="high-impact text-center">Howdy!</h1>
  <p>My name is Tim Knab and I'm a remote freelancer full stack web application developer and graphic designer for hire.</p>
  <p>I have a background in environmental work and web development, and a lot of interests. I strive to use creativity, problem-solving and modern technologies when approaching solutions.</p>
  <p>Check out the rest of this website for my blog, examples of my work, and how to contact me if you're interested in working together.</p>
  <p>Thanks for your time and for exploring my site!</p>
  <p>-Tim Knab</p>
</div> 

<?php 
// Load footer:
$this->load->view('includes/footer');
?>