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


<!-- Form -->
<?php 
$hidden = array('user_id' => 1);
$my_thing = "Tim";
echo form_fieldset('Your Name');
echo form_open('/form', 'method="GET"', $hidden);
echo form_input(array('name' => 'first_name', 'id' => 'first_name', 'type' => 'text', 'placeholder' => 'First Name', 'value' => set_value('first_name', $my_thing)));
echo form_input(array('name' => 'last_name', 'id' => 'last_name', 'type' => 'text', 'placeholder' => 'Last Name'));
echo form_input(array('name' => 'email', 'id' => 'email', 'type' => 'email', 'placeholder' => 'Email Address'));
echo form_input(array('name' => 'age', 'id' => 'age', 'type' => 'number', 'placeholder' => 'Your Age'));
echo form_textarea(array('name' => 'description', 'id' => 'description', 'placeholder' => 'Enter your description.'));
echo form_submit('submit_form', 'Submit');
echo form_close();
echo form_fieldset_close();
echo set_value('first_name', $my_thing);
?>

<?php 
// Load footer:
$this->load->view('includes/footer');
?>