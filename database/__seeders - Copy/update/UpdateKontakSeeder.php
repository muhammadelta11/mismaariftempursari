<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateKontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel anggota_kontaks
        $anggotaKontaks = DB::table('anggota_kontaks')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass AnggotaKontakTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($anggotaKontaks as $kontak) {
            $seederContent .= "        DB::table('anggota_kontaks')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$kontak->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'jenis_id' => '{$kontak->jenis_id}',\n";
            $seederContent .= "            'anggota_id' => '{$kontak->anggota_id}',\n";
            $seederContent .= "            'nilai' => '{$kontak->nilai}',\n";
            $seederContent .= "            'created_at' => '{$kontak->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$kontak->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/AnggotaKontakTableSeeder.php'), $seederContent);
    }
}
