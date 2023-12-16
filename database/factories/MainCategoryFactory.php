<?php

namespace Database\Factories;
use App\Models\MainCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MainCategory>
 */
class MainCategoryFactory extends Factory
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
            'name' => $category_name
            
        ];
    }
}
