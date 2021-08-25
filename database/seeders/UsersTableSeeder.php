<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
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
    		DB::table('latihan2')->insert([
    			'nama' => $faker->name,
    			'nama_depan' => $faker->name,
    			'umur' => $faker->numberBetween(25,40),
    			'alamat' => $faker->address,
                'telepon' => $faker->numberBetween(1,10000000000),
    		]);
        }
    }
}
