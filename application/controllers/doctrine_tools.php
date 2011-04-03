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

}
?>
