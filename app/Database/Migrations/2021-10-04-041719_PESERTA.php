<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PESERTA extends Migration
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
			'PESERTA'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			]
		]);
		$this->forge->addPrimaryKey('ID_UJIAN');
        $this->forge->addForeignKey('ID_UJIAN', 'UJIAN', 'ID_UJIAN');
        $this->forge->addForeignKey('PESERTA', 'SISWA', 'NIS');
		$this->forge->createTable('PESERTA');
    }

    public function down()
    {
		$this->forge->dropTable('PESERTA');
    }
}
