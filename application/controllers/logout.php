<?php
  class Logout extends MY_Controller {
    function index() {
      Current_User::logout();
    }
  }
?>
