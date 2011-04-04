<?php
class Doctrine_Tools extends CI_Controller {
  function create_tables() {
    echo 'Reminder: Make sure the tables do not exist already.<br />
          <form action="" method="POST">
          <input type="submit" name="action" value="Create Tables"><br /><br />';
    if ($this->input->post('action')) {
      Doctrine::createTablesFromModels();
      echo "Done!";
    }
  }
  function run_migrations() {
    echo 'Reminder: Migrate Time.<br />
          <form action="" method="POST">
          <label>Migrate to</label>
          <input name="version" type="text"></input>
          <input type="submit" name="action" value="Run Migration"><br /><br />';
    if ($this->input->post('action')) {
      $migration = new Doctrine_Migration('/home/ubuntu/public_html/application//migrations');
      $migration->migrate($this->input->post('version'));
    }

  }
}
?>
