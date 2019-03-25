<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'name'=>'Curso Angular',        	
        	'price'=>'499.99',
        	]);
        DB::table('products')->insert([
        	'name'=>'Curso Android',        	
        	'price'=>'449.99',
        	]);
        DB::table('products')->insert([
        	'name'=>'Curso C#',        	
        	'price'=>'349.99',
        	]);
        DB::table('products')->insert([
        	'name'=>'Curso MySql',        	
        	'price'=>'349.99',
        	]);
        DB::table('products')->insert([
        	'name'=>'Curso PHP',        	
        	'price'=>'499.99',
        	]);
        DB::table('products')->insert([
        	'name'=>'Curso NodeJS',        	
        	'price'=>'549.99',
        	]);
        DB::table('products')->insert([
        	'name'=>'Curso Ionic',        	
        	'price'=>'549.99',
        	]);
    }
}
