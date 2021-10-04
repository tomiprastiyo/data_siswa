<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SISWA extends Migration
{
    public function up()
    {
		$this->forge->addField([
			'NIS'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'NAMA'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'ALAMAT'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			]
		]);
		$this->forge->addPrimaryKey('NIS');
		$this->forge->createTable('SISWA');
    }

    public function down()
    {
		$this->forge->dropTable('SISWA');
    }
}
