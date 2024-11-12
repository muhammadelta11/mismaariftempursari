<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactMessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_messages')->updateOrInsert([
            'id' => '6',
        ], [
            'nama' => 'telo',
            'email' => 'azis@gmail.com',
            'message' => 'pye kabare',
            'status' => NULL,
            'created_at' => '2024-06-14 18:47:51',
            'updated_at' => '2024-06-14 18:47:51',
        ]);
        DB::table('contact_messages')->updateOrInsert([
            'id' => '7',
        ], [
            'nama' => 'Muhammad Mas'ud',
            'email' => 'muhammadsmas998@gmail.com',
            'message' => 'es teh 1',
            'status' => NULL,
            'created_at' => '2024-06-14 19:23:39',
            'updated_at' => '2024-06-14 19:23:39',
        ]);
    }
}
