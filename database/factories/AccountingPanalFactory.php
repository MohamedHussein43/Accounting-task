<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AccountingPanal>
 */
class AccountingPanalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'owner_name' => $this->faker->name,
            'service_name' => $this->faker->word,
            'initial_price' => $initial_price = $this->faker->randomFloat(2, 10, 1000),
            'tax_type' => $tax_type = $this->faker->randomElement([0, 1]),
            'tax' => $tax = $this->faker->randomFloat(2, 0, 100),
            'admin_tax_type' => $admin_tax_type = $this->faker->randomElement([0, 1]),
            'admin_tax' => $admin_tax = $this->faker->randomFloat(2, 0, 100),
            'total_admin_revenue' => $total_admin_revenue = $admin_tax_type == 0 ? $admin_tax : $initial_price * ($admin_tax / 100),
            'total_owner_revenue' => $initial_price - $total_admin_revenue - ($tax_type == 0 ? $tax : ($initial_price * ($tax /100 )) ),

            /*'owner_name' => $this->faker->name,
            'service_name' => $this->faker->word,
            $initial_price = $this->faker->randomFloat(2, 10, 1000),
            'initial_price' => $initial_price,
            $tax_type = $this->faker->randomElement([0, 1]),
            'tax_type' => $tax_type,
            $tax = this->faker->randomFloat(2, 0, 100),
            'tax' => $tax,
            $admin_tax_type = $this->faker->randomElement([0, 1]),
            'admin_tax_type' => $admin_tax_type,
            $admin_tax = $this->faker->randomFloat(2, 0, 100),
            'admin_tax' => $admin_tax,
            'total_owner_revenue' => $this->faker->randomFloat(2, 0, 1000),
            $total_admin_revenue = "",
            if($admin_tax_type == 0) {$total_admin_revenue = $admin_tax}, else {$total_admin_revenue = $initial_price * ($admin_tax/100)},
            'total_admin_revenue' => $total_admin_revenue,*/
           
                /*'owner_name' => 'Owner2',
                'service_name' => 'Service2',
                'initial_price' => 200.00,
                'tax_type' => 0,
                'tax' => 10,
                'admin_tax_type' => 0,
                'admin_tax' => 120.00,
                'total_owner_revenue' => 170.00,
                'total_admin_revenue' => 20.00,*/
            
        ];
    }
}
