<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => "huyhuhy",
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }


        }
}
