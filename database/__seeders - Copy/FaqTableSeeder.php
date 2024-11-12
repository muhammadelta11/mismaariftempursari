<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faq')->updateOrInsert([
            'id' => '1',
        ], [
            'nama' => 'Do you offer discounts for students?',
            'link' => '',
            'jawaban' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
            'type' => '1',
            'status' => '1',
            'created_at' => '2022-08-21 04:32:06',
            'updated_at' => '2022-08-21 04:38:31',
        ]);
        DB::table('faq')->updateOrInsert([
            'id' => '2',
        ], [
            'nama' => 'Do you offer special pricing for big teams?',
            'link' => '',
            'jawaban' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
            'type' => '1',
            'status' => '1',
            'created_at' => '2022-08-21 04:38:42',
            'updated_at' => '2022-08-21 04:38:42',
        ]);
        DB::table('faq')->updateOrInsert([
            'id' => '3',
        ], [
            'nama' => 'What is the course refund policy?',
            'link' => '',
            'jawaban' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
            'type' => '1',
            'status' => '1',
            'created_at' => '2022-08-21 04:39:30',
            'updated_at' => '2022-08-21 04:39:30',
        ]);
        DB::table('faq')->updateOrInsert([
            'id' => '4',
        ], [
            'nama' => 'Do you offer discounts for non-profits?',
            'link' => '',
            'jawaban' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
            'type' => '1',
            'status' => '1',
            'created_at' => '2022-08-21 04:39:39',
            'updated_at' => '2022-08-21 04:39:39',
        ]);
        DB::table('faq')->updateOrInsert([
            'id' => '5',
        ], [
            'nama' => 'Link',
            'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSdau6VwXEPJ_fiKm1SZAZf4tZ7UCZFGpejVbmfbHevdQcmA5Q/viewform',
            'jawaban' => '',
            'type' => '2',
            'status' => '1',
            'created_at' => '2022-08-21 07:17:56',
            'updated_at' => '2022-08-21 07:17:56',
        ]);
    }
}
