<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategorytwo>
 */
class SubCategorytwoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    { 
        $category_name = $this->faker->unique()->words($nb=2,$asText=true);
        return [
            'name' => $category_name,
            'sub_category_id' => random_int(1, 6)
            
        ];
    }
}
