<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateSpkAhpKriteriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel spk_ahp_kriteria
        $kriterias = DB::table('spk_ahp_kriteria')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass SpkAhpKriteriaTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($kriterias as $kriteria) {
            $seederContent .= "        DB::table('spk_ahp_kriteria')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$kriteria->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'nama' => '{$kriteria->nama}',\n";
            $seederContent .= "            'slug' => '{$kriteria->slug}',\n";
            $seederContent .= "            'kode' => '{$kriteria->kode}',\n";
            $seederContent .= "            'ci' => '{$kriteria->ci}',\n";
            $seederContent .= "            'ri' => '{$kriteria->ri}',\n";
            $seederContent .= "            'cr' => '{$kriteria->cr}',\n";
            $seederContent .= "            'prioritas' => '{$kriteria->prioritas}',\n";
            $seederContent .= "            'total' => '{$kriteria->total}',\n";
            $seederContent .= "            'eign_value' => '{$kriteria->eign_value}',\n";
            $seederContent .= "            'created_at' => '{$kriteria->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$kriteria->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/SpkAhpKriteriaTableSeeder.php'), $seederContent);
    }
}
