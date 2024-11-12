<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel faq
        $faqs = DB::table('faq')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass FaqTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($faqs as $faq) {
            $seederContent .= "        DB::table('faq')->updateOrInsert([\n";
            // $seederContent .= "        DB::table('faq')->insertOrIgnore([\n";
            $seederContent .= "            'id' => '{$faq->id}',\n";
            $seederContent .= "        ], [\n";
            $escapedNama    =               addslashes($faq->nama);
            $escapedLink    =               addslashes($faq->link);
            $escapedJawaban =               addslashes($faq->jawaban);
            $seederContent .= "            'nama' => '{$escapedNama}',\n";
            $seederContent .= "            'link' => '{$escapedLink}',\n";
            $seederContent .= "            'jawaban' => '{$escapedJawaban}',\n";
            $seederContent .= "            'type' => '{$faq->type}',\n";
            $seederContent .= "            'status' => '{$faq->status}',\n";
            $seederContent .= "            'created_at' => '{$faq->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$faq->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/FaqTableSeeder.php'), $seederContent);
    }
}
