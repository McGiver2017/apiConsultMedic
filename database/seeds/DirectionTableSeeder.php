<?php

use Illuminate\Database\Seeder;
use App\Direction;

class DirectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Direction::class, 100)->create();
    }
}
