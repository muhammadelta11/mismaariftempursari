<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelTagItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel_tag_item')->updateOrInsert([
            'id' => '88',
        ], [
            'artikel_id' => '47',
            'tag_id' => '7',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_tag_item')->updateOrInsert([
            'id' => '89',
        ], [
            'artikel_id' => '49',
            'tag_id' => '9',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_tag_item')->updateOrInsert([
            'id' => '90',
        ], [
            'artikel_id' => '51',
            'tag_id' => '10',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_tag_item')->updateOrInsert([
            'id' => '91',
        ], [
            'artikel_id' => '51',
            'tag_id' => '9',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_tag_item')->updateOrInsert([
            'id' => '93',
        ], [
            'artikel_id' => '52',
            'tag_id' => '6',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_tag_item')->updateOrInsert([
            'id' => '94',
        ], [
            'artikel_id' => '53',
            'tag_id' => '5',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_tag_item')->updateOrInsert([
            'id' => '95',
        ], [
            'artikel_id' => '54',
            'tag_id' => '5',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_tag_item')->updateOrInsert([
            'id' => '96',
        ], [
            'artikel_id' => '55',
            'tag_id' => '6',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_tag_item')->updateOrInsert([
            'id' => '97',
        ], [
            'artikel_id' => '56',
            'tag_id' => '8',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_tag_item')->updateOrInsert([
            'id' => '98',
        ], [
            'artikel_id' => '57',
            'tag_id' => '7',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_tag_item')->updateOrInsert([
            'id' => '99',
        ], [
            'artikel_id' => '58',
            'tag_id' => '7',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_tag_item')->updateOrInsert([
            'id' => '101',
        ], [
            'artikel_id' => '59',
            'tag_id' => '5',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
    }
}
