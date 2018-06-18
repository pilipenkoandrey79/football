<?php

require_once "CountriesSeeder.php";
require_once "TeamsSeeder.php";

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesSeeder::class);
        $this->call(TeamsSeeder::class);
    }
}
