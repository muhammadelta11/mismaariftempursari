<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateHobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel anggota_hobis
        $anggotaHobis = DB::table('anggota_hobis')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass AnggotaHobisTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($anggotaHobis as $anggotaHobi) {
            $seederContent .= "        DB::table('anggota_hobis')->updateOrInsert([\n";
            // $seederContent .= "        DB::table('anggota_hobis')->insertOrIgnore([\n";
            $seederContent .= "            'id' => '{$anggotaHobi->id}',\n";
            $seederContent .= "        ], [\n";
            $escapedNama    =               addslashes($anggotaHobi->nama);
            $seederContent .= "            'nama' => '{$escapedNama}',\n";
            $seederContent .= "            'anggota_id' => '{$anggotaHobi->anggota_id}',\n";
            $seederContent .= "            'created_at' => '{$anggotaHobi->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$anggotaHobi->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/AnggotaHobisTableSeeder.php'), $seederContent);
    }
}
