<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nameAndSlug = $this->faker->word();
        return [
            'category_id' => rand(1, 50), // Replace with the maximum category id
            'subcategory_name' => $nameAndSlug,
            'subcategory_slug' => $nameAndSlug,
        ];
    }
}
