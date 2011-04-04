<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {
  public function index() {
    parent::header_content();
    $this->load->view('slider_begin');
    $this->load->view('slider_item');
    $this->load->view('slider_item');
    $this->load->view('slider_end');

    $this->load->view('begin_main');
    $this->load->view('news_begin');
    $this->load->view('news_item');
    $this->load->view('news_end');
    $this->load->view('pagination');
    $this->load->view('end_main');

    $this->load->view('sidebar_begin');

    $this->load->view('reviews_begin');
    $this->load->view('side_panel_begin');
    $this->load->view('side_panel_item');
    $this->load->view('side_panel_end');
    $this->load->view('reviews_end');

    $this->load->view('side_bar_ad');

    $this->load->view('sidepanel_item_begin');
    $this->load->view('side_panel_simple_item');
    $this->load->view('sidepanel_item_end');

    $this->load->view('sidepanel_item_begin');
    $this->load->view('side_panel_media_item');
    $this->load->view('sidepanel_item_end');

    $this->load->view('sidebar_end');
    $this->load->view('end_main');

    parent::footer_content();
  }

  public function create() {    
    $u = new User();
    $u->username = 'yuser';
    $u->password = 'ypass';
    $u->referer_id = -1;
    $u->save(); 
  }

  public function get($user) {
  }

  public function update($user) {
  }

  public function remove($user) {
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
