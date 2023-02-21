<?php

namespace Database\Seeders;

use App\Models\NewsPost;
use Database\Factories\NewsPostFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsPost::factory()
        ->times(5)
        ->create();
    }
}
