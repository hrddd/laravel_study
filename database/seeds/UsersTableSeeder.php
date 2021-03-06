<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') -> delete();

        for($i = 0; $i < 10; $i++)
        {
            $faker = Faker\Factory::create('ja_JP');
            User::create([
                'name' => $faker -> userName(),
                'email' => $faker -> email(),
                'password' => bcrypt('secret')
            ]);
        }
    }
}
