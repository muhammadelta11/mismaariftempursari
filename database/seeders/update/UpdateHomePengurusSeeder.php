<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateHomePengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel home_pengurus
        $home_pengurus = DB::table('home_pengurus')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass HomePengurusTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($home_pengurus as $pengurus) {
            $seederContent .= "        DB::table('home_pengurus')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$pengurus->id}',\n";
            $seederContent .= "        ], [\n";
            $escapedNama = addslashes($pengurus->nama);
            $escapedSebagai = addslashes($pengurus->sebagai);
            $seederContent .= "            'urutan' => '{$pengurus->urutan}',\n";
            $seederContent .= "            'nama' => '{$escapedNama}',\n";
            $seederContent .= "            'sebagai' => '{$escapedSebagai}',\n";
            $seederContent .= "            'foto' => '{$pengurus->foto}',\n";
            $seederContent .= "            'no_whatsapp' => '{$pengurus->no_whatsapp}',\n";
            $seederContent .= "            'no_telepon' => '{$pengurus->no_telepon}',\n";
            $seederContent .= "            'facebook' => '{$pengurus->facebook}',\n";
            $seederContent .= "            'twitter' => '{$pengurus->twitter}',\n";
            $seederContent .= "            'instagram' => '{$pengurus->instagram}',\n";
            $seederContent .= "            'tampilkan' => '{$pengurus->tampilkan}',\n";
            $seederContent .= "            'created_at' => '{$pengurus->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$pengurus->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/HomePengurusTableSeeder.php'), $seederContent);
    }
}
