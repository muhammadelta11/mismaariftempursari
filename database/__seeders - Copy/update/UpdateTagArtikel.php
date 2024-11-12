<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateTagArtikel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel artikel_tag
        $artikelTags = DB::table('artikel_tag')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass ArtikelTagTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($artikelTags as $tag) {
            $seederContent .= "        DB::table('artikel_tag')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$tag->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'nama' => '{$tag->nama}',\n";
            $seederContent .= "            'slug' => '{$tag->slug}',\n";
            $seederContent .= "            'status' => '{$tag->status}',\n";
            $seederContent .= "            'created_at' => '{$tag->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$tag->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/ArtikelTagTableSeeder.php'), $seederContent);
    }
}
