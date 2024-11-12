<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdatePPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel anggota_pendidikans
        $pendidikans = DB::table('anggota_pendidikans')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass AnggotaPendidikanTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($pendidikans as $pendidikan) {
            $seederContent .= "        DB::table('anggota_pendidikans')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$pendidikan->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'jenis_id' => '{$pendidikan->jenis_id}',\n";
            $seederContent .= "            'anggota_id' => '{$pendidikan->anggota_id}',\n";
            $seederContent .= "            'dari' => '{$pendidikan->dari}',\n";
            $seederContent .= "            'sampai' => '{$pendidikan->sampai}',\n";
            $seederContent .= "            'instansi' => '{$pendidikan->instansi}',\n";
            $seederContent .= "            'jurusan' => " . ($pendidikan->jurusan ? "'{$pendidikan->jurusan}'" : "NULL") . ",\n";
            $seederContent .= "            'keterangan' => " . ($pendidikan->keterangan ? "'{$pendidikan->keterangan}'" : "NULL") . ",\n";
            $seederContent .= "            'created_at' => '{$pendidikan->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$pendidikan->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/AnggotaPendidikanTableSeeder.php'), $seederContent);
    }
}
