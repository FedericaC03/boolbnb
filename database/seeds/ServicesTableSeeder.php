<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            "Wi-Fi",
            "Parcheggio",
            "Piscina",
            "Reception",
            "Sauna",
            "Vista mare"
        ];

        foreach ($services as $service) {
            $newService = new Service;
            $newService->name = $service;
            $newService->save();
        }
    }
}