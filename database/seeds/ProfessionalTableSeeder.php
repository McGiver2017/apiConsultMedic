<?php

use Illuminate\Database\Seeder;
use App\Professional;

class ProfessionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Professional::class, 100)->create();
    }
}
