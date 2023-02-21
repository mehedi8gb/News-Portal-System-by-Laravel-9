<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LiveTvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('live_tvs')->insert([
            'live_image' => 'frontend/assets/images/livetv.png',
            'live_url' => 'https://www.youtube.com/live/OU4GiCEb_LI?feature=share',
            'post_date' => Carbon::now()
        ]);
    }
}
