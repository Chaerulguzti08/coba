<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class latihan3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('latihan3')->insert([
                'id' => $faker->randomdigit,
    			'gender' => $faker->randomElement($array = array('pria', 'wanita')),
    			'tempat_lahir' => $faker->address,
    		]);
        }
    }
}
