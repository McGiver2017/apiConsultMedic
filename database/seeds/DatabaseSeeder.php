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
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');   
        $this->call(DirectionTableSeeder::class); 
        $this->call(SpecialtyTableSeeder::class);        
        $this->call(ProfessionalTableSeeder::class);  
        $this->call(ProcedureTableSeeder::class);  
        $this->call(ScheduleTableSeeder::class);         
        $this->call(HourTableSeeder::class);
    }
}
