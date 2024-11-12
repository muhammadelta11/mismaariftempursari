<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateSpkAhpAlternatifTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel spk_ahp_alternatif
        $alternatifs = DB::table('spk_ahp_alternatif')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass SpkAhpAlternatifTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($alternatifs as $alternatif) {
            $seederContent .= "        DB::table('spk_ahp_alternatif')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$alternatif->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'anggota_id' => '{$alternatif->anggota_id}',\n";
            $seederContent .= "            'created_at' => '{$alternatif->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$alternatif->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/SpkAhpAlternatifTableSeeder.php'), $seederContent);
    }
}
