<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_list')->updateOrInsert([
            'id' => '1',
        ], [
            'nama' => 'Location',
            'icon' => 'fas fa-map-marker-alt',
            'url' => 'https://goo.gl/maps/5r4WzKbNY89GSHHe6',
            'order' => '1',
            'keterangan' => 'Semarang<br> Jawa Tengah 50221, Indonesia.',
            'status' => '1',
            'created_at' => '2022-08-21 08:34:56',
            'updated_at' => '2023-10-30 17:24:24',
        ]);
        DB::table('contact_list')->updateOrInsert([
            'id' => '2',
        ], [
            'nama' => 'Telepon',
            'icon' => 'fas fa-phone',
            'url' => 'https://wa.me/+6285647121046',
            'order' => '2',
            'keterangan' => '085647121046',
            'status' => '1',
            'created_at' => '2022-08-21 08:35:23',
            'updated_at' => '2023-11-17 14:33:12',
        ]);
        DB::table('contact_list')->updateOrInsert([
            'id' => '3',
        ], [
            'nama' => 'Email',
            'icon' => 'fas fa-envelope',
            'url' => 'mailto:help@hmjtiunwahas.site',
            'order' => '3',
            'keterangan' => 'help@hmjtiunwahas.site',
            'status' => '1',
            'created_at' => '2022-08-21 08:35:47',
            'updated_at' => '2023-10-31 13:02:47',
        ]);
    }
}
