<?php

use Illuminate\Database\Seeder;

class SucursalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subsidiaries')->insert([
        	'name'=>'Principal',        	
        	'address'=>'B/Chiquitos C/Ocoro #321',
        	]);
        DB::table('subsidiaries')->insert([
        	'name'=>'Secundario',        	
        	'address'=>'B/Cordillera C/Guapuru #424',
        	]);
        DB::table('subsidiaries')->insert([
        	'name'=>'Terceario',        	
        	'address'=>'B/Warnes C/Cupesi #432',
        	]);
        DB::table('subsidiaries')->insert([
        	'name'=>'Cuaternario',        	
        	'address'=>'B/Ichilo C/Motoyoe #521',
        	]);
    }
}
