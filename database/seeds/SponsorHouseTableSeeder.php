<?php

use Illuminate\Database\Seeder;
use App\House;
use App\Sponsor;
use Faker\Generator as Faker;
use Carbon\Carbon;

class SponsorHouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $houses = House::all();
        // $house = House::find(2);
        // dd($houses);

        foreach($houses as $house) {
            $rand = rand(0,1);

            if ($rand == 1) {                
                $randomSponsor = Sponsor::inRandomOrder()->first()->toArray();
        
                $now = Carbon::now();
                $end = Carbon::now()->addDays($randomSponsor["duration"]);

                $house->sponsors()->sync([$randomSponsor["id"] => ["start_date" => $now, "end_date" => $end]]);
            }
        }
    }
}