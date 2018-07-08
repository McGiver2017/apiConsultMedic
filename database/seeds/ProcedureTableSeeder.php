<?php

use Illuminate\Database\Seeder;
use App\Procedure;

class ProcedureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Procedure::class, 25)->create();
    }
}
