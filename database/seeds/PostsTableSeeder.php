<?php
/**
 * Created by PhpStorm.
 * User: QuyenAnh
 * Date: 4/19/17
 * Time: 2:19 PM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Post;

 class PostsTableSeeder extends Seeder {
	public function run() {
		$faker = Faker\Factory::create();
		for($i = 0; $i < 10; ++$i){
			DB::table('posts')->insert([
				'title' => $faker->sentence,
				'body' => implode('', $faker->sentences(4))
			]);
		}
	}
}