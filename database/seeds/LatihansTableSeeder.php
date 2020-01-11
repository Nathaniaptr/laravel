<?php

use Illuminate\Database\Seeder;

class LatihansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
        	['nama' => 'Nathania' , 'jabatan' => 'manager' , 'jk' => 'Perempuan', 
        	'alamat' => 'Rancamanyar' , 'agama' => 'Islam' , 'total_gaji' => '5000.000'],
        	['nama' => 'Mita' , 'jabatan' => 'staff' , 'jk' => 'Perempuan',
        	 'alamat' => 'Cianjur' , 'agama' => 'Islam' , 'total_gaji' => '5000.000'],
        	['nama' => 'Siva' , 'jabatan' => 'staff' , 'jk' => 'Perempuan', 
        	'alamat' => 'Parunghalang' , 'agama' => 'Islam' , 'total_gaji' => '5000.000'],
        	['nama' => 'Renasya' , 'jabatan' => 'staff' , 'jk' => 'Perempuan',
        	 'alamat' => 'Rancamanyar' , 'agama' => 'Islam' , 'total_gaji' => '5000.000'],
        	['nama' => 'Siti' , 'jabatan' => 'staff' , 'jk' => 'Perempuan',
        	 'alamat' => 'Tarate' , 'agama' => 'kristen' , 'total_gaji' => '5000.000']

        ];

        DB::table('latihans')->insert($a);
    }
}
