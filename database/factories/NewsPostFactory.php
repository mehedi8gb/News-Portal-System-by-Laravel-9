<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NewsPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();

        return [
            'category_id' => rand(1, 20), // Replace with the maximum category id
            'subcategory_id' => rand(1, 50), // Replace with the maximum category id
            'user_id' => $user->id,
            'view_count' => rand(100, 100000),
            'news_title' => $this->faker->sentence(5),
            'news_title_slug' => Str::slug($this->faker->sentence(5)),
            'image' => fake()->image('public/upload/news/', 640, 480,'animal',false),
            'news_details' => $this->faker->paragraphs(3, true),
            'tags' => $this->faker->words(5, true),
            'breaking_news' => $this->faker->numberBetween(0, 1),
            'top_slider' => $this->faker->numberBetween(0, 1),
            'first_section_three' => $this->faker->numberBetween(0, 1),
            'first_section_nine' => $this->faker->numberBetween(0, 1),
            'post_date' => $this->faker->date(),
            'post_month' => $this->faker->monthName(),
            'status' => 1,
        ];
    }
}
