<?php
class Users extends Doctrine_Record
{
  public function setTableDefinition() {
    $this->hasColumn('username', 'string', 40);
    $this->hasColumn('password', 'string', 40);
    $this->hasColumn('email', 'string', 255, array('email' => true));
  }

  public function setUp() {
    $this->actAs('Timestampable');
  }

  public function md5Password($value) {
    $this->_set('password', md5($value));
  }

}
?>
