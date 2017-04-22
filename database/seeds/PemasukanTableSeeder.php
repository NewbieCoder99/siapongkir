<?php

use Illuminate\Database\Seeder;

class PemasukanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$data = 	[
						[ 
				            'id' 				=> "2",
				            'keterangan' 		=> 'Scan Dokumen',
				            'tgl' 				=> '2017-04-04',
				            'jumlah_pemasukan' 	=> 50000,
				        ],
						[ 
				            'id' 				=> "2",
				            'keterangan' 		=> 'Print Dokumen',
				            'tgl' 				=> '2017-04-04',
				            'jumlah_pemasukan' 	=> 15000,
				        ],
						[ 
				            'id' 				=> "2",
				            'keterangan' 		=> 'Print Dokumen',
				            'tgl' 				=> '2017-04-04',
				            'jumlah_pemasukan' 	=> 5000,
				        ],
						[ 
				            'id' 				=> "2",
				            'keterangan' 		=> 'Print Dokumen',
				            'tgl' 				=> '2017-04-06',
				            'jumlah_pemasukan' 	=> 30000,
				        ]
				    ];

        DB::table('pemasukan')->insert($data);
    }
}
