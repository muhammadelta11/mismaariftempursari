<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateSocialMedia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel social_media
        $socialMedia = DB::table('social_media')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass SocialMediaTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($socialMedia as $media) {
            $seederContent .= "        DB::table('social_media')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$media->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'nama' => '{$media->nama}',\n";
            $seederContent .= "            'icon' => '{$media->icon}',\n";
            $seederContent .= "            'url' => '{$media->url}',\n";
            $seederContent .= "            'order' => '{$media->order}',\n";
            $seederContent .= "            'keterangan' => '{$media->keterangan}',\n";
            $seederContent .= "            'status' => '{$media->status}',\n";
            $seederContent .= "            'created_at' => '{$media->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$media->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/SocialMediaTableSeeder.php'), $seederContent);
    }
}
