<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->insert([
      'name' => 'Amr Fatouh',
      'email' => 'mr.wanderer14@gmail.com',
      'password' => Hash::make('123'),
    ]);
  }
}
