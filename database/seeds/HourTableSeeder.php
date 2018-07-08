<?php

use Illuminate\Database\Seeder;
use App\Hour;

class HourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hour::class, 2000)->create();
    }
}
