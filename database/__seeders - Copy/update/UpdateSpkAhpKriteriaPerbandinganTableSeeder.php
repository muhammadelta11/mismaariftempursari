<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateSpkAhpKriteriaPerbandinganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel spk_ahp_kriteria_perbandingan
        $perbandingans = DB::table('spk_ahp_kriteria_perbandingan')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass SpkAhpKriteriaPerbandinganTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($perbandingans as $perbandingan) {
            $seederContent .= "        DB::table('spk_ahp_kriteria_perbandingan')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$perbandingan->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'nilai' => '{$perbandingan->nilai}',\n";
            $seederContent .= "            'kriteria_x_id' => '{$perbandingan->kriteria_x_id}',\n";
            $seederContent .= "            'kriteria_y_id' => '{$perbandingan->kriteria_y_id}',\n";
            $seederContent .= "            'created_at' => '{$perbandingan->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$perbandingan->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/SpkAhpKriteriaPerbandinganTableSeeder.php'), $seederContent);
    }
}
