<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['id' => 1, 'name' => 'Moderator'],
            ['id' => 2, 'name' => 'Administrator'],
            ['id' => 3, 'name' => 'Publisher']
        ];

        DB::table('roles')->insert($roles);
    }
}
