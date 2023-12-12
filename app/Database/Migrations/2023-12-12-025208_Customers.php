<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Customers extends Migration{
	public function up(){
		$this->forge->addField([
			'id' => ['type'           => 'INT','constraint'     => 11,'unsigned'       => true,'auto_increment' => true],
			'email' => ['type'       => 'VARCHAR','constraint' => '255'],
			'password' => ['type'       => 'TEXT'],
			'image' => ['type'       => 'TEXT','null' => TRUE],
			'name' => ['type'       => 'VARCHAR','constraint' => '255'],
			'username' => ['type'       => 'VARCHAR','constraint' => '255'],
			'phoneNumber' => ['type'       => 'VARCHAR','constraint' => '255','null' => TRUE],
			'address' => ['type'       => 'TEXT'],
            'deleted_at' => ['type' => 'TIMESTAMP','null' => true],
            'created_at' => ['type' => 'TIMESTAMP','null' => TRUE],
            'updated_at' => ['type' => 'TIMESTAMP','null' => TRUE],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('customers');
	}

	public function down(){
		$this->forge->dropTable('customers');
	}
}
