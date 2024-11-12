<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdatePengalamanLain extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel anggota_pengalaman_lains
        $pengalamanLains = DB::table('anggota_pengalaman_lains')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass AnggotaPengalamanLainTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($pengalamanLains as $pengalaman) {
            $escapedPengalaman = addslashes($pengalaman->pengalaman);

            $seederContent .= "        DB::table('anggota_pengalaman_lains')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$pengalaman->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'pengalaman' => '{$escapedPengalaman}',\n";
            $seederContent .= "            'keterangan' => " . ($pengalaman->keterangan ? "'{$pengalaman->keterangan}'" : "NULL") . ",\n";
            $seederContent .= "            'anggota_id' => '{$pengalaman->anggota_id}',\n";
            $seederContent .= "            'created_at' => '{$pengalaman->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$pengalaman->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/AnggotaPengalamanLainTableSeeder.php'), $seederContent);
    }
}
