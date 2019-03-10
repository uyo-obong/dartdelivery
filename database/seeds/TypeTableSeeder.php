<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = [
        	['id' => 1, 'name' => 'Document'],
        	['id' => 2, 'name' => 'Package'],
        	['id' => 3, 'name' => 'Electronic'],
        ];

        Type::insert($type);
    }
}
