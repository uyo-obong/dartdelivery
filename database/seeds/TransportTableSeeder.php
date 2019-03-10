<?php

use App\Transport;
use Illuminate\Database\Seeder;

class TransportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $transport =  [
        	['id' => 1, 'name' => 'Road'],
        	['id' => 2, 'name' => 'Sea'],
        	['id' => 3, 'name' => 'Air'],
        	['id' => 4, 'name' => 'Train'],
        ];

        Transport::insert($transport);
    }
}
