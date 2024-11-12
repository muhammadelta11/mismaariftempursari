<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateHariBesarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel hari_besar_nasionals
        $hari_besar_nasionals = DB::table('hari_besar_nasionals')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass HariBesarNasionalsTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

            foreach ($hari_besar_nasionals as $hariBesar) {
                $seederContent .= "        DB::table('hari_besar_nasionals')->updateOrInsert([\n";
                $seederContent .= "            'id' => '{$hariBesar->id}',\n";
                $seederContent .= "        ], [\n";
                $escapedNama       = addslashes($hariBesar->nama);
                $escapedKeterangan = addslashes($hariBesar->keterangan);
                $tahun             = $hariBesar->tahun ? "'{$hariBesar->tahun}'" : "NULL";
                $createdAt         = $hariBesar->created_at ? "'{$hariBesar->created_at}'" : "NULL";
                $updatedAt         = $hariBesar->updated_at ? "'{$hariBesar->updated_at}'" : "NULL";
                
                $seederContent .= "            'type' => '{$hariBesar->type}',\n";
                $seederContent .= "            'hari' => '{$hariBesar->hari}',\n";
                $seederContent .= "            'bulan' => '{$hariBesar->bulan}',\n";
                $seederContent .= "            'tahun' => {$tahun},\n";
                $seederContent .= "            'nama' => '{$escapedNama}',\n";
                $seederContent .= "            'keterangan' => '{$escapedKeterangan}',\n";
                $seederContent .= "            'created_at' => {$createdAt},\n";
                $seederContent .= "            'updated_at' => {$updatedAt},\n";
                $seederContent .= "        ]);\n";
            }
            
        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/HariBesarNasionalsTableSeeder.php'), $seederContent);
    }
}
