<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'unit_type'=> "standard",
                'description'=>'A standard combines an upright seating position with the handlebar ',
            ],
            [
                'unit_type'=> "cruiser",
                'description'=>'A cruiser motorcycle is a motorcycle in the style of American machines',
            ],
            [
                'unit_type'=> "touring",
                'description'=>'Touring motorcycles commonly have large displacement fairings and windshields .',
            ],
            [
                'unit_type'=> "sports",
                'description'=>'A sport bike (sports motorcycle, or sports bike) is a motorcycle designed and optimized for speed',
            ],
            [
                'unit_type'=> " off-road",
                'description'=>'Off-road motorcycles, also known as · dirt bikes or · scramblers',
            ],
        ];
        foreach($data as $u){
            \App\Unit::create($u);
        }
    }
}