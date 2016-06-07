<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
		Model::unguard();

		DB::table('users')->delete();
        DB::table('tbl_posts')->delete();
 
        $user1 = App\User::create(['name'=>'Ben Ayadie', 'email'=>'ben.ay@yahoo.com', 'password'=>'ben123']);

        $user2 = App\User::create(['name'=>'Awilo Langhibah', 'email'=>'awilo.langhibah@gmail.com', 'password'=>'1awil0']);

        $post1 = App\Post::create(['post_title'=>'More Work' ,'post_caption'=>'something' , 'post_description'=>'I am working more now and i like it!', 'user_id'=>$user1->id]);

        $post2 = App\Post::create(['post_title'=>'Less Sleep' ,'post_caption'=>'anything' , 'post_description'=>'I think i can change my sleep pattern too.', 'user_id'=>$user1->id]);

        $post3 = App\Post::create(['post_title'=>'Moderate Talk' ,'post_caption'=>'nothing' , 'post_description'=>'talk is cheap but i got it out for free', 'user_id'=>$user2->id]);

        $this->command->info('User table seeded!');
        $this->command->info('Post table seeded!');


		// $this->call('UserTableSeeder');
	}

}
