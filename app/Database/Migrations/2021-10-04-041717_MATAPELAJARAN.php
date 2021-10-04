<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MATAPELAJARAN extends Migration
{
    public function up()
    {
		$this->forge->addField([
			'ID_MATPEL'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'NAMA_MATPEL'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			]
		]);
		$this->forge->addPrimaryKey('ID_MATPEL');
		$this->forge->createTable('MATAPELAJARAN');
    }

    public function down()
    {
		$this->forge->dropTable('MATAPELAJARAN');
    }
}
