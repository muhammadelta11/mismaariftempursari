<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateSpkAhpKriteriaJenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel spk_ahp_kriteria_jenis
        $kriteriaJenis = DB::table('spk_ahp_kriteria_jenis')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass SpkAhpKriteriaJenisTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($kriteriaJenis as $jenis) {
            $seederContent .= "        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$jenis->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'nama' => '{$jenis->nama}',\n";
            $seederContent .= "            'kode' => '{$jenis->kode}',\n";
            $seederContent .= "            'prioritas' => '{$jenis->prioritas}',\n";
            $seederContent .= "            'total' => '{$jenis->total}',\n";
            $seederContent .= "            'eign_value' => '{$jenis->eign_value}',\n";
            $seederContent .= "            'kriteria_id' => '{$jenis->kriteria_id}',\n";
            $seederContent .= "            'created_at' => '{$jenis->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$jenis->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/SpkAhpKriteriaJenisTableSeeder.php'), $seederContent);
    }
}
