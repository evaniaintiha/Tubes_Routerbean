<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjam extends Migration
{
	public function up()
	{
			$this->forge->addField([
			'id'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE
			],
			'nama_peminjam'=>[
				'type'=>'VARCHAR',
				'constraint'=>100,
			],
			'judul'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],
			'gambar'=>[
				'type'=>'TEXT',
			],
			'alamat'=>[
				'type'=>'TEXT',
			],
			'no_hp'=>[
				'type'=>'VARCHAR',
				'constraint'=>20,
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('peminjam');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('peminjam');
	}
}
