<?php
class AddTable extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('migration_test', array('field1' => array('type' => 'string')));
    }

    public function down()
    {
        $this->dropTable('migration_test');
    }
}
?>
