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
    DB::table('posts')->insert([
      'title' => 'Post 1',
      'body' => 'body of post 1 body of post 1 body of post 1 body of post 1 ',
      'user_id' => 1,
    ]);
    DB::table('posts')->insert([
      'title' => 'Post 2',
      'body' => 'body of post 2 body of post 2 body of post 2 body of post 2 ',
      'user_id' => 1,
    ]);
    DB::table('posts')->insert([
      'title' => 'Post 3',
      'body' => 'body of post 1 body of post 1 body of post 1 body of post 1 ',
      'user_id' => 1,
    ]);
    DB::table('posts')->insert([
      'title' => 'Post 4',
      'body' => 'body of post 1 body of post 1 body of post 1 body of post 1 ',
      'user_id' => 1,
    ]);
  }
}
