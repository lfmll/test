<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
        	'name'=>'Bruce Banner',
        	'nit'=>'243713',
        	'email'=>'bb@marvel.com',
        	'address'=>'B/10 de Agosto C/Bolivia #324',
        	]);
        DB::table('clients')->insert([
        	'name'=>'Susan Storm',
        	'nit'=>'324244',
        	'email'=>'ss@marvel.com',
        	'address'=>'B/24 de Septiembre C/Santa Cruz #212',
        	]);
        DB::table('clients')->insert([
        	'name'=>'Matt Murdoc',
        	'nit'=>'434124',
        	'email'=>'mm@marvel.com',
        	'address'=>'B/23 de Marzo C/Avaroa #772',
        	]);
        DB::table('clients')->insert([
        	'name'=>'Pepper Potts',
        	'nit'=>'532132',
        	'email'=>'pp@marvel.com',
        	'address'=>'B/27 de Mayo C/Maria #124',
        	]);
        DB::table('clients')->insert([
        	'name'=>'Steven Strange',
        	'nit'=>'386109',
        	'email'=>'ss@marvel.com',
        	'address'=>'B/14 de Septiembre C/Cochabamba #932',
        	]);
        DB::table('clients')->insert([
        	'name'=>'Reed Richards',
        	'nit'=>'284949',
        	'email'=>'rr@marvel.com',
        	'address'=>'B/25 de Diciembre C/Navidad #213',
        	]);
        DB::table('clients')->insert([
        	'name'=>'Warren Worthington',
        	'nit'=>'384713',
        	'email'=>'ww@marvel.com',
        	'address'=>'B/21 de Septiembre C/Primavera #328',
        	]);
    }
}
