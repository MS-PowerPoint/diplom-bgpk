<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schoolboy>
 */
class SchoolboyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    $schoolIDs = DB::table('schools')->select('id')->get()->toArray();
    $schoolID=[];
    $imgs=[];
    $imgs=['space3_01.JPG',
    'space3_02.JPG',
    'space3_03.JPG',
    'space3_04.JPG',
    'space3_05.JPG',
    'space3_06.JPG',
    'space3_07.JPG',
    'space3_08.JPG',
    'space3_09.JPG',
    'space3_10.JPG',
    'space3_11.JPG',
    'space3_12.JPG',
    'space3_13.JPG',
    'space3_14.JPG',
    'space3_15.JPG',
    'space3_16.JPG',
    'space3_17.JPG',
    'space3_18.JPG',
    'space3_19.JPG',
    'space3_20.JPG',
    'space3_21.JPG',
    'space3_22.JPG',
    'space3_23.JPG',
    'space3_24.JPG',
    'space3_25.JPG',
    'space3_26.JPG',
    'space3_27.JPG',
    'space3_28.JPG',
    'space3_29.JPG',
    'space3_30.JPG'];
    foreach($schoolIDs as $schools)
    {
        $schoolID[]=$schools->id;
    }
        return [
            'name'=>fake()->firstName($gender = null),
            'surname'=>fake()->lastName(),
            'patronymic'=>fake()->firstName($gender = null),
            'class'=>fake()->numberBetween($min = 1, $max = 11),
            'estimation'=>fake()->randomElement($array = array ('5','4','3')),
            'school_id'=>fake()->randomElement($schoolID),
            'img'=>fake()->randomElement($imgs),
        ];
    }
}
