<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateKategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel artikel_kategori
        $kategoriArtikel = DB::table('artikel_kategori')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass ArtikelKategoriTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($kategoriArtikel as $kategori) {
            $seederContent .= "        DB::table('artikel_kategori')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$kategori->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'nama' => '{$kategori->nama}',\n";
            $seederContent .= "            'slug' => '{$kategori->slug}',\n";
            $seederContent .= "            'foto' => " . ($kategori->foto ? "'{$kategori->foto}'" : "NULL") . ",\n";
            $seederContent .= "            'status' => '{$kategori->status}',\n";
            $seederContent .= "            'created_at' => '{$kategori->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$kategori->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/ArtikelKategoriTableSeeder.php'), $seederContent);
    }
}
