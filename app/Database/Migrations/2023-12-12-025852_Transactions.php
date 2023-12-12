<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transactions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'			=> ['type' => 'INT', 'constraint' => 11,'unsigned'       => true, 'auto_increment' => true],
            'customers_id'  => ['type' => 'INT', 'constraint' => 11,'unsigned'       => true],
            'products_id'	=> ['type' => 'INT', 'constraint' => 11,'unsigned'       => true],
            'totalQuantity'	=> ['type' => 'INT', 'constraint' => 11],
            'totalPrice'	=> ['type' => 'INT', 'constraint' => 11],
			'address'		=>['type'=>'TEXT'],
			'shipping'		=>['type'=>'INT'],
			'status'		=>['type'=>'INT','constraint'=>1],
            'deleted_at'	=> ['type' => 'TIMESTAMP', 'null' => true],
            'created_at'	=> ['type' => 'TIMESTAMP','null' => TRUE],
            'updated_at'	=> ['type' => 'TIMESTAMP','null' => TRUE],
        ]);

        $this->forge->addKey('id', true);
		$this->forge->addForeignKey('customers_id','customers','id');
		$this->forge->addForeignKey('products_id','products','id');
        $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
