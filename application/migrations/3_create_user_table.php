<?php
class CreateUserTable extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('users', array(
                             'id' => array(
                               'type' => 'integer',
                               'unsigned' => 1,
                               'notnull' => 1,
                               'default' => 0,
                               'primary' => 1,
                               'autoincrement' => 1
                            ),
                            'username' => array(
                              'type' => 'string',
                              'length' => '40',
                              'unique' => 1
                            ),
                            'password' => array(
                              'type' => 'string',
                              'length' => '40'
                            ),
                            'email' => array(
                              'type' => 'string',
                              'length' => '40',
                              'unique' => 1
                            ),
                            'created_at' => array(
                              'type' => 'datetime'
                            ),
                            'updated_at' => array(
                              'type' => 'datetime'
                            )
                          ));
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
?>
