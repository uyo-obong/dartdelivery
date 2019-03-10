<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
        	'id' => 1,
        	'name' => 'dartdelivery',
        	'email' => 'dartdelivery@gmail.com',
        	'password' => bcrypt(123456)
        ]);
    }
}
