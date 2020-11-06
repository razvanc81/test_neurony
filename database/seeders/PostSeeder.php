<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        for ($i = 1; $i<=50; $i++ ) {
        	$data = [
        		'name' => "PostName_limit_{$i}",
        		'content' => "Lorem ipsum content for post {$i}",
        		'active' => 1
        	];
    		Post::create($data);
    	}
    }
}
