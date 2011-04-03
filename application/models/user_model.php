<?php
class User extends Doctrine_Record
{
  public function setTableDefinition() {
    $this->hasColumn('username', 'string', 255);
    $this->hasColumn('password', 'string', 255);
    $this->hasColumn('email', 'string', 255, array('email' => true));
    $this->hasColumn('status', 'enum', null,
		    array('values' => array('unverified', 'verified', 'disabled')));
    $this->hasColumn('referer_id', 'integer', 4);
  }

  public function setUp() {
    $this->actAs('Timestampable');
  }

  public function md5Password($value) {
    $this->_set('password', md5($value));
  }

}
?>
