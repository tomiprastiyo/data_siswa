<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UJIAN extends Migration
{
    public function up()
    {
		$this->forge->addField([
			'ID_UJIAN'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'NAMA_UJIAN'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'ID_MATPEL'       => [
				'type'           => 'INT',
				'constraint'     => 11,
            ],
			'TANGGAL'       => [
				'type'           => 'DATETIME',
			]
		]);
		$this->forge->addPrimaryKey('ID_UJIAN');
        $this->forge->addForeignKey('ID_MATPEL', 'MATAPELAJARAN', 'ID_MATPEL');
		$this->forge->createTable('UJIAN');
    }

    public function down()
    {
		$this->forge->dropTable('UJIAN');
    }
}
