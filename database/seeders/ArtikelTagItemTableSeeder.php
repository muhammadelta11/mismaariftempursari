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
            'id' => '97',
        ], [
            'artikel_id' => '56',
            'tag_id' => '8',
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
