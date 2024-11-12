<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdatePengalamanOrganisasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel anggota_pengalaman_organisasis
        $pengalamanOrganisasi = DB::table('anggota_pengalaman_organisasis')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass AnggotaPengalamanOrganisasiTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($pengalamanOrganisasi as $pengalaman) {
            $seederContent .= "        DB::table('anggota_pengalaman_organisasis')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$pengalaman->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'nama' => '{$pengalaman->nama}',\n";
            $seederContent .= "            'dari' => '{$pengalaman->dari}',\n";
            $seederContent .= "            'sampai' => '{$pengalaman->sampai}',\n";
            $seederContent .= "            'jabatan' => '{$pengalaman->jabatan}',\n";
            $seederContent .= "            'keterangan' => " . ($pengalaman->keterangan ? "'{$pengalaman->keterangan}'" : "NULL") . ",\n";
            $seederContent .= "            'anggota_id' => '{$pengalaman->anggota_id}',\n";
            $seederContent .= "            'created_at' => '{$pengalaman->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$pengalaman->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/AnggotaPengalamanOrganisasiTableSeeder.php'), $seederContent);
    }
}
