<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdatePendSensusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel pend_sensus
        $pendSensusData = DB::table('pend_sensus')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass PendSensusTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($pendSensusData as $data) {
            $seederContent .= "        DB::table('pend_sensus')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$data->id}',\n";
            $seederContent .= "        ], [\n";
            $escapedNama    =               addslashes($data->nama);
            $seederContent .= "            'nama' => '{$escapedNama}',\n";
            $seederContent .= "            'angkatan' => '{$data->angkatan}',\n";
            $seederContent .= "            'email' => '{$data->email}',\n";
            $seederContent .= "            'whatsapp' => '{$data->whatsapp}',\n";
            $seederContent .= "            'telepon' => '{$data->telepon}',\n";
            $seederContent .= "            'keterangan' => " . ($data->keterangan ? "'{$data->keterangan}'" : "NULL") . ",\n";
            $seederContent .= "            'status' => '{$data->status}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/PendSensusTableSeeder.php'), $seederContent);
    }
}
