<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_users extends CI_Migration {

	// runs a migration
	public function up() {
		
		$this->dbforge->add_field(array(
					'id' => array(
							'type' => 'INT',
							'constraint' => 11,
							'unsigned' => TRUE,
							'auto_increment' => TRUE
						),
					'email' => array(
							'type' => 'VARCHAR',
							'constraint' => '100'
						),
					'password' => array(
							'type' => 'VARCHAR',
							'constraint' => '128'	
						),
					'name' => array(
							'type' => 'VARCHAR',
							'constraint' => '100'	
						),
					'group_memeber' => array(
							'type' => 'INT'
						)
				));
		
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('user');
	}

	// Role backs a migration
	public function down() {
		$this->dbforge->drop_table('user');	
	}

}

/* End of file 001_create_users.php */
/* Location: ./application/migration/001_create_users.php */