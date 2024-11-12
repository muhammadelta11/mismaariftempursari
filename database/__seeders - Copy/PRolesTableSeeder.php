<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('p_roles')->updateOrInsert([
            'id' => '1',
        ], [
            'name' => 'Administrator',
            'guard_name' => 'web',
            'created_at' => '2022-08-04 16:05:41',
            'updated_at' => '2022-08-06 14:36:10',
        ]);
        DB::table('p_roles')->updateOrInsert([
            'id' => '2',
        ], [
            'name' => 'Guru',
            'guard_name' => 'web',
            'created_at' => '2022-08-04 16:05:41',
            'updated_at' => '2024-11-04 17:23:35',
        ]);
        DB::table('p_roles')->updateOrInsert([
            'id' => '6',
        ], [
            'name' => 'Admin MI',
            'guard_name' => 'web',
            'created_at' => '2022-08-06 01:25:58',
            'updated_at' => '2024-07-19 23:20:14',
        ]);
    }
}
