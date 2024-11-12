<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengurusJabatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengurus_jabatans')->updateOrInsert([
            'id' => '127',
        ], [
            'no_urut' => '11',
            'nama' => 'MINAT DAN BAKAT',
            'slug' => '2022-2023-minat-bakat',
            'foto' => '',
            'singkatan' => 'DEPT.MIKAT',
            'visi' => '<p></p>
',
            'misi' => '<p></p>
',
            'slogan' => '',
            'status' => '1',
            'role_id' => '2',
            'periode_id' => '',
            'parent_id' => '',
            'created_at' => '2023-11-02 21:02:30',
            'updated_at' => '2023-11-02 21:02:30',
        ]);
        DB::table('pengurus_jabatans')->updateOrInsert([
            'id' => '128',
        ], [
            'no_urut' => '4',
            'nama' => 'Sekertaris 2',
            'slug' => '2022-2023-sekertaris-2',
            'foto' => '',
            'singkatan' => '',
            'visi' => '<p></p>
',
            'misi' => '<p></p>
',
            'slogan' => '',
            'status' => '1',
            'role_id' => '',
            'periode_id' => '',
            'parent_id' => '',
            'created_at' => '2023-11-02 21:47:09',
            'updated_at' => '2023-11-02 21:47:09',
        ]);
        DB::table('pengurus_jabatans')->updateOrInsert([
            'id' => '129',
        ], [
            'no_urut' => '2',
            'nama' => 'runner up',
            'slug' => '2024-2025-runner-up',
            'foto' => 'iconrunner-up20240520212611.PNG',
            'singkatan' => 'runner up',
            'visi' => '<div>&lt;script&gt;
<div>document.getElementById("demo").innerHTML = "Hello JavaScript!";</div>
<div>&lt;/script&gt;</div>
</div>
',
            'misi' => '<p>Raya</p>
',
            'slogan' => 'slogan',
            'status' => '1',
            'role_id' => '2',
            'periode_id' => '4',
            'parent_id' => '',
            'created_at' => '2023-11-14 13:43:50',
            'updated_at' => '2024-05-20 21:26:11',
        ]);
        DB::table('pengurus_jabatans')->updateOrInsert([
            'id' => '131',
        ], [
            'no_urut' => '3',
            'nama' => '3rd place',
            'slug' => '2024-2025-3rd-place',
            'foto' => '',
            'singkatan' => '',
            'visi' => '<p>Penting nyatet</p>
',
            'misi' => '<p>Mbuh</p>
',
            'slogan' => '',
            'status' => '1',
            'role_id' => '2',
            'periode_id' => '4',
            'parent_id' => '',
            'created_at' => '2023-12-20 17:40:04',
            'updated_at' => '2024-05-15 15:11:36',
        ]);
        DB::table('pengurus_jabatans')->updateOrInsert([
            'id' => '133',
        ], [
            'no_urut' => '5',
            'nama' => 'Bendahara 1',
            'slug' => '2023-2024-bendahara-1',
            'foto' => '',
            'singkatan' => 'Duit',
            'visi' => '',
            'misi' => '',
            'slogan' => 'Ngepet',
            'status' => '1',
            'role_id' => '2',
            'periode_id' => '4',
            'parent_id' => '',
            'created_at' => '2023-12-20 17:43:06',
            'updated_at' => '2024-05-15 15:18:04',
        ]);
        DB::table('pengurus_jabatans')->updateOrInsert([
            'id' => '135',
        ], [
            'no_urut' => '1',
            'nama' => 'Master',
            'slug' => '2024-2025-master',
            'foto' => '',
            'singkatan' => '',
            'visi' => '<p>visi</p>
',
            'misi' => '<p>Master</p>
',
            'slogan' => '',
            'status' => '1',
            'role_id' => '2',
            'periode_id' => '4',
            'parent_id' => '',
            'created_at' => '2023-12-20 17:44:51',
            'updated_at' => '2024-05-20 21:18:53',
        ]);
    }
}
