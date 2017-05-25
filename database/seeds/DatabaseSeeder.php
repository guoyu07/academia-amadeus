<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(UserTableSeeder::class);

    	$this->call(EstudianteTableSeeder::class);
    	$this->call(RepresentanteTableSeeder::class);
    	$this->call(EstudianteRepresentanteTableSeeder::class);
    }
}
