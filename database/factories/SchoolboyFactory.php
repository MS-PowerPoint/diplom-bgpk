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
        ];
    }
}
