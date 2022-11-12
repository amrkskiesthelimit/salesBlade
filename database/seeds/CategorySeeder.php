<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[

            [
                'Category'=> "custom",
                'description'=>'A custom motorcycle is a motorcycle with stylistic and/or structural changes .',
            ],
            [
                'Category'=> "military",
                'description'=>'The use of motorcycles in a military context is hardly new, German and Russian forces ',
            ],
            [
                'Category'=> "Concept",
                'description'=>'Concept motorcycles are known to display sleekness at their best.',
            ],
            [
                'Category'=> "sports",
                'description'=>'A sport bike (sports motorcycle, or sports bike) is a motorcycle designed and optimized for speed.',
            ],
            [
                'Category'=> " minibikes",
                'description'=>'Pocketbikes are small, two wheeled recreational vehicles.',
            ],
        ];
        foreach($data as $c){
            \App\Category::create($c);
        }
    }
}
