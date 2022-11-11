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
        $data = [
            [
                'category'=>'Table',
                'description'=>'Table Description sample'
            ],
            [
                'category'=>'Lamp',
                'description'=>'Lamp Description sample'
            ],
            [
                'category'=>'Desc',
                'description'=>'Desc Description sample'
            ],
        ];

        foreach($data as $categories) {
            \App\Category::create($categories);
        }
    }
}
