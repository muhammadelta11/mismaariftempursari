<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateSpkAhpAlternatifKriteriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel spk_ahp_alternatif_kriteria
        $alternatifKriteria = DB::table('spk_ahp_alternatif_kriteria')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass SpkAhpAlternatifKriteriaTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($alternatifKriteria as $item) {
            $seederContent .= "        DB::table('spk_ahp_alternatif_kriteria')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$item->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'alternatif_id' => '{$item->alternatif_id}',\n";
            $seederContent .= "            'kriteria_id' => '{$item->kriteria_id}',\n";
            $seederContent .= "            'kriteria_jenis_id' => '{$item->kriteria_jenis_id}',\n";
            $seederContent .= "            'created_at' => '{$item->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$item->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/SpkAhpAlternatifKriteriaTableSeeder.php'), $seederContent);
    }
}
