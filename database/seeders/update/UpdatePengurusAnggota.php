<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdatePengurusAnggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel pengurus_anggotas
        $pengurusAnggotasData = DB::table('pengurus_anggotas')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass PengurusAnggotasTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($pengurusAnggotasData as $data) {
            $seederContent .= "        DB::table('pengurus_anggotas')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$data->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'jabatan_id' => '{$data->jabatan_id}',\n";
            $seederContent .= "            'anggota_id' => '{$data->anggota_id}',\n";
            $seederContent .= "            'created_at' => '{$data->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$data->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/PengurusAnggotasTableSeeder.php'), $seederContent);
    }
}
