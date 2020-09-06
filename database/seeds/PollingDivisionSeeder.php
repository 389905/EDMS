<?php

use Illuminate\Database\Seeder;
use App\PollingDivision;
use App\District;

class PollingDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      PollingDivision::truncate();

      $nuwaraEliya = District::where('name', 'Nuwara Eliya')->first();

      PollingDivision::create(['name' => 'Walapane', 'district_id' => $nuwaraEliya->id ]);
      PollingDivision::create(['name' => 'Kotmale', 'district_id' => $nuwaraEliya->id ]);
      PollingDivision::create(['name' => 'Hanguranketha', 'district_id' => $nuwaraEliya->id ]);
      PollingDivision::create(['name' => 'Nuwara Eliya - Maskeliya', 'district_id' => $nuwaraEliya->id ]);
    }
}
