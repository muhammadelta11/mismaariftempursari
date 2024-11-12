<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PModelHasRolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '1',
            'model_type' => "App\\Models\\User",
            'model_id' => '1',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '36',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '6',
            'model_type' => "App\\Models\\User",
            'model_id' => '81',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '1',
            'model_type' => "App\\Models\\User",
            'model_id' => '89',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '113',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '286',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '287',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '292',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '293',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '294',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '295',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '296',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '316',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '318',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '319',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '1',
            'model_type' => "App\\Models\\User",
            'model_id' => '332',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '6',
            'model_type' => "App\\Models\\User",
            'model_id' => '335',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '6',
            'model_type' => "App\\Models\\User",
            'model_id' => '339',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '376',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '1',
            'model_type' => "App\\Models\\User",
            'model_id' => '381',
        ]);
        DB::table('p_model_has_roles')->updateOrInsert([
            'role_id' => '2',
            'model_type' => "App\\Models\\User",
            'model_id' => '386',
        ]);
    }
}
