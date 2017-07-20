<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 30;

        for ($i=0; $i < $limit; $i++) { 
        	DB::table('blogs')->insert([ //,
        		'blog_title' => $faker->realText($maxNbChars=50, $indexSize = 1),
        		'blog_content' => $faker->realText($maxNbChars = 500, $indexSize = 1),
        	
        	]);	
    	}
	}
}