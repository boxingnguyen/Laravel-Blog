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
		\App\Post::unguard();
	    $this->call(PostsTableSeeder::class);
	    \App\Post::reguard();
        // $this->call(UsersTableSeeder::class);
    }
}
