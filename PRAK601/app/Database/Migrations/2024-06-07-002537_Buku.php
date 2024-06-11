<?php namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'BIGINT',
				'constraint'     => 8,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'judul'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 255
			],
			'penulis'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100
			],
            'penerbit'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100
			],
			'tahun_terbit' => [
				'type'           => 'YEAR',
                'null'           => false,
			],
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('buku', TRUE);
        $this->db->query('ALTER TABLE buku ADD CONSTRAINT chk_year CHECK (tahun_terbit > 1800 AND tahun_terbit < 2024)');
	}

	public function down()
	{
        $this->db->query('ALTER TABLE buku DROP CONSTRAINT chk_year');
		$this->forge->dropTable('buku');
	}
}