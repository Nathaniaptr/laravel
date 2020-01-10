<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$posts = [
    		['title' =>'Membuat Website dengan Laravel',
    		'content' =>'Belajar Laravel 6'],
    		['title' =>'Belajar Tajwid',
    		'content' =>'Belajar laravel 6']
    	];
    	DB::table('post')->insert($posts);

    }
}
