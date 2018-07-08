<?php

use Illuminate\Database\Seeder;
use App\Partner;

class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Partner::class, 100)->create();
    }
}
