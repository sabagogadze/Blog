<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	foreach (range(1,20) as $index) {
	        DB::table('posts')->insert([
	            'title'=>$faker-> sentence(rand(1, 3)),
        		'body'=>$faker->text(rand(500, 1000)),
                'slug'=>$faker->word(10,5),
                'created_at'=>$faker->date(),
                'updated_at'=>$faker->date()
	        ]);

    	// DB::statement('SET FOREIGN_KEY_CHECKS=0');
     //    DB::table('posts')->truncate();
     //    $posts =[];
     //    $faker = Factory::create();
     //    for ($i=0; $i < 100 ; $i++)
     //    { 
     //    	$date = date("Y-m-d H:i:s", strtotime("2001-07-18 08:00:00 +{$i} days"));
     //    	$posts[] = [
     //    		'title'=>$faker-> sentence(rand(8, 12)),
     //    		'body'=>$faker->text(rand(100, 300)),
     //    		'created_at'=>$date,
     //    		'updated_at'=>$date,
     //    	];
     //    }
    }
}
}
