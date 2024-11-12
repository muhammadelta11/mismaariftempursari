<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateGaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel galeri
        $galeris = DB::table('galeri')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass GaleriTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($galeris as $galeri) {
            $seederContent .= "        DB::table('galeri')->updateOrInsert([\n";
            // $seederContent .= "        DB::table('galeri')->insertOrIgnore([\n";
            $seederContent .= "            'id' => '{$galeri->id}',\n";
            $seederContent .= "        ], [\n";
            $escapedNama         = addslashes($galeri->nama);
            $escapedFoto         = addslashes($galeri->foto);
            $escapedFotoIdGdrive = addslashes($galeri->foto_id_gdrive);
            $escapedIdGdrive     = addslashes($galeri->id_gdrive);
            $escapedSlug         = addslashes($galeri->slug);
            $escapedLokasi       = addslashes($galeri->lokasi);
            $escapedKeterangan   = addslashes($galeri->keterangan);
            $seederContent .= "            'nama' => '{$escapedNama}',\n";
            $seederContent .= "            'foto' => '{$escapedFoto}',\n";
            $seederContent .= "            'foto_id_gdrive' => '{$escapedFotoIdGdrive}',\n";
            $seederContent .= "            'id_gdrive' => '{$escapedIdGdrive}',\n";
            $seederContent .= "            'slug' => '{$escapedSlug}',\n";
            $seederContent .= "            'tanggal' => '{$galeri->tanggal}',\n";
            $seederContent .= "            'lokasi' => '{$escapedLokasi}',\n";
            $seederContent .= "            'keterangan' => '{$escapedKeterangan}',\n";
            $seederContent .= "            'status' => '{$galeri->status}',\n";
            $seederContent .= "            'created_at' => '{$galeri->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$galeri->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/GaleriTableSeeder.php'), $seederContent);
    }
}
