<?php
class AddCategoriesTable extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('categories', array(
                             'id' => array(
                               'type' => 'integer',
                               'unsigned' => 1,
                               'notnull' => 1,
                               'default' => 0,
                               'primary' => 1,
                               'autoincrement' => 1
                            ),
                            'name' => array(
                              'type' => 'string',
                              'length' => '20'
                            )
                          ));
    }

    public function down()
    {
        $this->dropTable('subcategories');
    }
}
?>
