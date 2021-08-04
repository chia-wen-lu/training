<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
	public function up()
	{
		$this->forge->addField([  //table的內容
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'title'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
					'null'           => true 
			],
			'content'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '200',
					'null'           => true
			],
			
		]);
	$this->forge->addKey('id', TRUE);
	$this->forge->createTable('posts'); //table的名字叫posts
	}

	public function down()
	{
		$this->forge->dropTable('posts');//table的名字叫posts
	}
}