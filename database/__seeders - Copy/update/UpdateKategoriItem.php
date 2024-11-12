<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateKategoriItem extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel artikel_kategori_item
        $kategoriItems = DB::table('artikel_kategori_item')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass ArtikelKategoriItemTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($kategoriItems as $item) {
            $seederContent .= "        DB::table('artikel_kategori_item')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$item->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'artikel_id' => '{$item->artikel_id}',\n";
            $seederContent .= "            'kategori_id' => '{$item->kategori_id}',\n";
            $seederContent .= "            'created_at' => " . ($item->created_at ? "'{$item->created_at}'" : "NULL") . ",\n";
            $seederContent .= "            'updated_at' => " . ($item->updated_at ? "'{$item->updated_at}'" : "NULL") . ",\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/ArtikelKategoriItemTableSeeder.php'), $seederContent);
    }
}
