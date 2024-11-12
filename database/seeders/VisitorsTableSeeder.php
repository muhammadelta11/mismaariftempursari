<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visitors')->updateOrInsert([
            'id' => '25261',
        ], [
            'ip' => '::1',
            'date' => '2024-07-11',
            'time' => '22:29:04',
            'platform' => 'Windows',
            'browser' => 'Edge',
            'browser_version' => '126.0.0.0',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0',
            'hits' => '3',
            'has_detail' => '1',
        ]);
    }
}
