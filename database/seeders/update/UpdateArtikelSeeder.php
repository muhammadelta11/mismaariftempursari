<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel artikel
        $artikels = DB::table('artikel')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass ArtikelTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($artikels as $artikel) {
            $seederContent .= "        DB::table('artikel')->updateOrInsert([\n";
            // $seederContent .= "        DB::table('artikel')->insertOrIgnore([\n";
            $seederContent .= "            'id' => '{$artikel->id}',\n";
            $seederContent .= "        ], [\n";
            $escapedNama    =               addslashes($artikel->nama);
            $escapedSlug    =               addslashes($artikel->slug);
            $escapedFoto    =               addslashes($artikel->foto);
            $escapedDetail  =               addslashes($artikel->detail);
            $escapedExcerpt =               addslashes($artikel->excerpt);
            $seederContent .= "            'nama' => '{$escapedNama}',\n";
            $seederContent .= "            'slug' => '{$escapedSlug}',\n";
            $seederContent .= "            'foto' => '{$escapedFoto}',\n";
            $seederContent .= "            'detail' => '{$escapedDetail}',\n";
            $seederContent .= "            'excerpt' => '{$escapedExcerpt}',\n";
            $seederContent .= "            'counter' => '{$artikel->counter}',\n";
            $seederContent .= "            'date' => '{$artikel->date}',\n";
            $seederContent .= "            'status' => '{$artikel->status}',\n";
            $seederContent .= "            'created_at' => '{$artikel->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$artikel->updated_at}',\n";
            $seederContent .= "            'user_id' => '{$artikel->user_id}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/ArtikelTableSeeder.php'), $seederContent);
    }
}
