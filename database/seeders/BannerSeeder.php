<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'home_one' => 'frontend/assets/images/banner.jpg',
            'home_two' => 'frontend/assets/images/banner.jpg',
            'home_three' => 'frontend/assets/images/banner.jpg',
            'home_four' => 'frontend/assets/images/banner.jpg',
            'news_category_one' => 'frontend/assets/images/biggapon-1.gif',
            'news_details_one' => 'frontend/assets/images/biggapon-1.gif',
            'created_at' => Carbon::now(),
        ]);
    }
}
