<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdatePendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel pendaftarans
        $pendaftaransData = DB::table('pendaftarans')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass PendaftaransTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($pendaftaransData as $data) {
            $escapedPengumuman = addslashes($data->pengumuman);

            $seederContent .= "        DB::table('pendaftarans')->updateOrInsert([\n"; 
            $seederContent .= "            'id' => '{$data->id}',\n";
            $seederContent .= "        ], [\n";
            $escapedNama    =               addslashes($anggota->nama);
            $seederContent .= "            'nama' => '{$escapedNama}',\n";
            $seederContent .= "            'deskripsi' => '{$data->deskripsi}',\n";
            $seederContent .= "            'pengumuman' => '{$escapedPengumuman}',\n";
            $seederContent .= "            'no_urut' => '{$data->no_urut}',\n";
            $seederContent .= "            'dari' => '{$data->dari}',\n";
            $seederContent .= "            'sampai' => '{$data->sampai}',\n";
            $seederContent .= "            'route' => '{$data->route}',\n";
            $seederContent .= "            'foto' => '{$data->foto}',\n";
            $seederContent .= "            'status' => '{$data->status}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/PendaftaransTableSeeder.php'), $seederContent);
    }
}
