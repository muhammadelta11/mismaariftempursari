<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateVisitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel visitors
        $visitors = DB::table('visitors')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass VisitorsTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($visitors as $visitor) {
            $escapedUserAgent = addslashes($visitor->user_agent);

            $seederContent .= "        DB::table('visitors')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$visitor->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'ip' => '{$visitor->ip}',\n";
            $seederContent .= "            'date' => '{$visitor->date}',\n";
            $seederContent .= "            'time' => '{$visitor->time}',\n";
            $seederContent .= "            'platform' => '{$visitor->platform}',\n";
            $seederContent .= "            'browser' => '{$visitor->browser}',\n";
            $seederContent .= "            'browser_version' => '{$visitor->browser_version}',\n";
            $seederContent .= "            'user_agent' => '{$escapedUserAgent}',\n";
            $seederContent .= "            'hits' => '{$visitor->hits}',\n";
            $seederContent .= "            'has_detail' => '{$visitor->has_detail}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/VisitorsTableSeeder.php'), $seederContent);
    }
}
