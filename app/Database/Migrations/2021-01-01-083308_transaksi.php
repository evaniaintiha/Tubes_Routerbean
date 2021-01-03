<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
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
			'kode_buku'=>[
				'type'=>'VARCHAR',
				'constraint'=>20,
			],
			'tanggal_pinjam'=>[
				'type'=>'DATETIME',
				'current_time'=>TRUE
			],
			'tanggal_kembali'=>[
				'type'=>'DATETIME',
			],
			'status'=>[
				'type'=>'ENUM',
				'constraint'=>"'Dipinjam','Kembali'",
			],
			'denda'=>[
				'type'=>'FLOAT',
				'null'=>TRUE,
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('transaksi');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('transaksi');
	}
}
