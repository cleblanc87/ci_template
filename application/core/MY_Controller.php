<?php

include "/home/ubuntu/public_html/application/models/current_user.php";

class MY_Controller extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  function header_content() {
    $this->load->view('head');
    $this->load->view('header_start');
    $this->load->view('header_content');
    $this->load->view('header_end');
  }

  function footer_content() {
    $this->load->view('footer_top_begin');
    $this->load->view('footer_navigation');
    $this->load->view('footer_top_end');

    $this->load->view('begin_footer');
    $this->load->view('footer');
    $this->load->view('end_footer');
  }
}

?>
