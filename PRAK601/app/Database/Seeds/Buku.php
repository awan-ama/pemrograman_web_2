<?php

namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;

class Buku extends Seeder
{
	public function run()
	{
		// membuat data
		$data_buku = [
			[
				'judul'  => 'Don Quixote',
				'penulis' => 'Miguel Cervantes',
                'penerbit' => 'Penguin Classics',
                'tahun_terbit' => '2003'
			],
			[
				'judul'  => 'Test',
				'penulis' => 'Tesster',
                'penerbit' => 'Tessting',
                'tahun_terbit' => '2002'
			]
		];

		foreach($data_buku as $data){
			$this->db->table('buku')->insert($data);
		}
	}
}