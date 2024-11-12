<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateKataKataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel home_kata_katas
        $home_kata_katas = DB::table('home_kata_katas')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass HomeKataKatasTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($home_kata_katas as $kataKata) {
            $seederContent .= "        DB::table('home_kata_katas')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$kataKata->id}',\n";
            $seederContent .= "        ], [\n";
            $escapedNama = addslashes($kataKata->nama);
            $escapedSebagai = addslashes($kataKata->sebagai);
            $escapedKataKata = addslashes($kataKata->kata_kata);
            $seederContent .= "            'nama' => '{$escapedNama}',\n";
            $seederContent .= "            'sebagai' => '{$escapedSebagai}',\n";
            $seederContent .= "            'kata_kata' => '{$escapedKataKata}',\n";
            $seederContent .= "            'tampilkan' => '{$kataKata->tampilkan}',\n";
            $seederContent .= "            'created_at' => '{$kataKata->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$kataKata->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/HomeKataKatasTableSeeder.php'), $seederContent);
    }
}
