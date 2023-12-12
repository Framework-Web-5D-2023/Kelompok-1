<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Products extends Migration{
	public function up(){
		$this->forge->addField([
			'id' => ['type'           => 'INT','constraint'     => 11,'unsigned'       => true,'auto_increment' => true],
			'title' => ['type'       => 'TEXT'],
			'price' => ['type'       => 'INT','constraint' => 11],
			'quantity' => ['type'       => 'INT','constraint' => 11,'null' => TRUE],
			'image' => ['type'       => 'TEXT','null' => TRUE],
			'category' => ['type'       => 'VARCHAR','constraint' => '255','null' => TRUE],
            'deleted_at' => ['type' => 'TIMESTAMP','null' => true],
            'created_at' => ['type' => 'TIMESTAMP','null' => TRUE],
            'updated_at' => ['type' => 'TIMESTAMP','null' => TRUE],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('products');
	}

	public function down(){
		$this->forge->dropTable('products');
	}
}
