<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateGformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel g_forms
        $g_forms = DB::table('g_forms')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass GFormsTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($g_forms as $form) {
            $seederContent .= "        DB::table('g_forms')->updateOrInsert([\n";
            // $seederContent .= "        DB::table('g_forms')->insertOrIgnore([\n";
            $seederContent .= "            'id' => '{$form->id}',\n";
            $seederContent .= "        ], [\n";
            $escapedNama      = addslashes($form->nama);
            $escapedSlug      = addslashes($form->slug);
            $escapedDeskripsi = addslashes($form->deskripsi);
            $escapedLink      = addslashes($form->link);
            $escapedFoto      = addslashes($form->foto);
            $seederContent .= "            'user_id' => '{$form->user_id}',\n";
            $seederContent .= "            'nama' => '{$escapedNama}',\n";
            $seederContent .= "            'slug' => '{$escapedSlug}',\n";
            $seederContent .= "            'deskripsi' => '{$escapedDeskripsi}',\n";
            $seederContent .= "            'no_urut' => '{$form->no_urut}',\n";
            $seederContent .= "            'dari' => '{$form->dari}',\n";
            $seederContent .= "            'sampai' => '{$form->sampai}',\n";
            $seederContent .= "            'link' => '{$escapedLink}',\n";
            $seederContent .= "            'foto' => '{$escapedFoto}',\n";
            $seederContent .= "            'tampilkan' => '{$form->tampilkan}',\n";
            $seederContent .= "            'status' => '{$form->status}',\n";
            $seederContent .= "            'created_at' => '{$form->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$form->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/GFormsTableSeeder.php'), $seederContent);
    }
}

