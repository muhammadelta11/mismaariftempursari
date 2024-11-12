<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateKataAlumni extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel kata_alumnis
        $kataAlumniData = DB::table('kata_alumnis')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass KataAlumnisTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($kataAlumniData as $data) {
            $escapedDeskripsi = addslashes($data->deskripsi);
            
            $seederContent .= "        DB::table('kata_alumnis')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$data->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'user_id' => '{$data->user_id}',\n";
            $seederContent .= "            'sebagai' => '{$data->sebagai}',\n";
            $seederContent .= "            'deskripsi' => '{$escapedDeskripsi}',\n";
            $seederContent .= "            'sequence' => '{$data->sequence}',\n";
            $seederContent .= "            'profesi' => '{$data->profesi}',\n";
            $seederContent .= "            'status' => '{$data->status}',\n";
            $seederContent .= "            'created_at' => '{$data->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$data->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/KataAlumnisTableSeeder.php'), $seederContent);
    }
}
