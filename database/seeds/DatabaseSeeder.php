<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(TransportTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(AdminRoleTableSeeder::class);
    }
}
