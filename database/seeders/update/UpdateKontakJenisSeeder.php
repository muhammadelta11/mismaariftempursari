<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateKontakJenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel anggota_kontak_jenis
        $anggotaKontakJenis = DB::table('anggota_kontak_jenis')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass AnggotaKontakJenisTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($anggotaKontakJenis as $kontakJenis) {
            $seederContent .= "        DB::table('anggota_kontak_jenis')->updateOrInsert([\n";
            // $seederContent .= "        DB::table('anggota_kontak_jenis')->insertOrIgnore([\n";
            $seederContent .= "            'id' => '{$kontakJenis->id}',\n";
            $seederContent .= "        ], [\n";
            $escapedNama    =               addslashes($kontakJenis->nama);
            $escapedIcon    =               addslashes($kontakJenis->icon);
            $escapedKeterangan =           addslashes($kontakJenis->keterangan);
            $seederContent .= "            'nama' => '{$escapedNama}',\n";
            $seederContent .= "            'icon' => '{$escapedIcon}',\n";
            $seederContent .= "            'keterangan' => '{$escapedKeterangan}',\n";
            $seederContent .= "            'status' => '{$kontakJenis->status}',\n";
            $seederContent .= "            'created_at' => '{$kontakJenis->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$kontakJenis->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/AnggotaKontakJenisTableSeeder.php'), $seederContent);
    }
}
