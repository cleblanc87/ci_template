<?php

class Signup extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->helper(array('form'));
		$this->load->library('form_validation');
	}

	public function index() {
		$this->load->view('signup_form');
	}

	public function submit() {

		if ($this->_submit_validate() === FALSE) {
			$this->index();
			return;
		}
                $u = new Users();
		$u->username = $this->input->post('username');
		$u->password = $this->input->post('password');
		$u->email = $this->input->post('email'); 
                $u->save();

		$this->load->view('signup_success');

	}

	private function _submit_validate() {

		// validation rules
		$this->form_validation->set_rules('username', 'Username',
			'required|alpha_numeric|min_length[6]|max_length[12]');

		$this->form_validation->set_rules('password', 'Password',
			'required|min_length[6]|max_length[12]');

		$this->form_validation->set_rules('passconf', 'Confirm Password',
			'required|matches[password]');

		$this->form_validation->set_rules('email', 'E-mail',
			'required|valid_email');

		return $this->form_validation->run();

	}
}
?>
