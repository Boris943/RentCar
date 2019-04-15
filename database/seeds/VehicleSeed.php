<?php

use Illuminate\Database\Seeder;

class VehicleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vehicle::class, 20)->create();
    }
}
