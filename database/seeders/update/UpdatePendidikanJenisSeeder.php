<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdatePendidikanJenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel anggota_pendidikan_jenis
        $pendidikanJenis = DB::table('anggota_pendidikan_jenis')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass AnggotaPendidikanJenisTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($pendidikanJenis as $jenis) {
            $seederContent .= "        DB::table('anggota_pendidikan_jenis')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$jenis->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'nama' => '{$jenis->nama}',\n";
            $seederContent .= "            'keterangan' => '{$jenis->keterangan}',\n";
            $seederContent .= "            'status' => '{$jenis->status}',\n";
            $seederContent .= "            'created_at' => '{$jenis->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$jenis->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/AnggotaPendidikanJenisTableSeeder.php'), $seederContent);
    }
}
