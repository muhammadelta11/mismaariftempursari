<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdatePengurusJabatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel pengurus_jabatans
        $pengurusJabatansData = DB::table('pengurus_jabatans')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass PengurusJabatansTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($pengurusJabatansData as $data) {
            $seederContent .= "        DB::table('pengurus_jabatans')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$data->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'no_urut' => '{$data->no_urut}',\n";
            $seederContent .= "            'nama' => '{$data->nama}',\n";
            $seederContent .= "            'slug' => '{$data->slug}',\n";
            $seederContent .= "            'foto' => '{$data->foto}',\n";
            $seederContent .= "            'singkatan' => '{$data->singkatan}',\n";
                $visi             = $data->visi ? "'{$data->visi}'" : "NULL";
                $misi             = $data->misi ? "'{$data->misi}'" : "NULL";
                $role_id          = $data->role_id ? "'{$data->role_id}'" : "NULL";
                $parent_id        = $data->parent_id ? "'{$data->parent_id}'" : "NULL";
            $seederContent .= "            'visi' => '{$data->visi}',\n";
            $seederContent .= "            'misi' => '{$data->misi}',\n";
            $seederContent .= "            'slogan' => '{$data->slogan}',\n";
            $seederContent .= "            'status' => '{$data->status}',\n";
            $seederContent .= "            'role_id' => '{$data->role_id}',\n";
            $seederContent .= "            'periode_id' => '{$data->periode_id}',\n";
            $seederContent .= "            'parent_id' => '{$data->parent_id}',\n";
            $seederContent .= "            'created_at' => '{$data->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$data->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/PengurusJabatansTableSeeder.php'), $seederContent);
    }
}
