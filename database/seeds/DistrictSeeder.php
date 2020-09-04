<?php

use Illuminate\Database\Seeder;
use App\District;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::truncate();

        District::create(['name' => 'Ampara']);
        District::create(['name' => 'Anuradhapura']);
        District::create(['name' => 'Badulla']);
        District::create(['name' => 'Batticaloa']);
        District::create(['name' => 'Colombo']);
        District::create(['name' => 'Galle']);
        District::create(['name' => 'Gampaha']);
        District::create(['name' => 'Hambantota']);
        District::create(['name' => 'Jaffna']);
        District::create(['name' => 'Kalutara']);
        District::create(['name' => 'Kandy']);
        District::create(['name' => 'Kegalle']);
        District::create(['name' => 'Kurunegala']);
        District::create(['name' => 'Matale']);
        District::create(['name' => 'Matara']);
        District::create(['name' => 'Monaragala']);
        District::create(['name' => 'Nuwara Eliya']);
        District::create(['name' => 'Polonnaruwa']);
        District::create(['name' => 'Puttalam']);
        District::create(['name' => 'Ratnapura']);
        District::create(['name' => 'Trincomalee']);
        District::create(['name' => 'Vanni']);
    }
}
