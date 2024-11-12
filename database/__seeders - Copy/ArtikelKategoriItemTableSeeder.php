<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelKategoriItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel_kategori_item')->updateOrInsert([
            'id' => '93',
        ], [
            'artikel_id' => '49',
            'kategori_id' => '7',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_kategori_item')->updateOrInsert([
            'id' => '94',
        ], [
            'artikel_id' => '51',
            'kategori_id' => '4',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_kategori_item')->updateOrInsert([
            'id' => '96',
        ], [
            'artikel_id' => '52',
            'kategori_id' => '16',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_kategori_item')->updateOrInsert([
            'id' => '97',
        ], [
            'artikel_id' => '53',
            'kategori_id' => '7',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_kategori_item')->updateOrInsert([
            'id' => '98',
        ], [
            'artikel_id' => '54',
            'kategori_id' => '4',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_kategori_item')->updateOrInsert([
            'id' => '99',
        ], [
            'artikel_id' => '55',
            'kategori_id' => '9',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_kategori_item')->updateOrInsert([
            'id' => '100',
        ], [
            'artikel_id' => '56',
            'kategori_id' => '3',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_kategori_item')->updateOrInsert([
            'id' => '101',
        ], [
            'artikel_id' => '57',
            'kategori_id' => '9',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_kategori_item')->updateOrInsert([
            'id' => '102',
        ], [
            'artikel_id' => '58',
            'kategori_id' => '12',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('artikel_kategori_item')->updateOrInsert([
            'id' => '104',
        ], [
            'artikel_id' => '59',
            'kategori_id' => '9',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
    }
}
