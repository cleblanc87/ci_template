<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {
  public function index() {
    parent::header_content();
    $this->load->view('admin/index');
    parent::footer_content();
  }

  public function categories($mode = 'none', $id = 0) { 
    parent::header_content();

    switch(mode) {
      case 'new':
      break;
      case 'delete':
      break;
      case 'update':
      break;
      case 'show':
      break;
      default:
      break;
    }
    parent::footer_content();
  }
}
