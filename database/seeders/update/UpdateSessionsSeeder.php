<?php
namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateSessionsSeeder extends Seeder{
    public function run()
    {
        // Ambil data yang ada di tabel
        $sessions = DB::table('sessions')->get();

        // Mulai membangun konten seeder
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass SessionsTableSeeder extends Seeder\n{\n    public function run()\n    {\n";

        foreach ($sessions as $session) {
            $seederContent .= "        DB::table('sessions')->updateOrInsert([\n";
            // $seederContent .= "        DB::table('sessions')->insertOrIgnore([\n";
            $seederContent .= "            'id' => '{$session->id}',\n";
            $seederContent .= "            'user_id' => " . ($session->user_id ? json_encode($session->user_id) : 'NULL') . ",\n";
            $seederContent .= "            'ip_address' => " . json_encode($session->ip_address) . ",\n";
            $seederContent .= "            'user_agent' => " . json_encode($session->user_agent) . ",\n";
            $seederContent .= "            'payload' => " . json_encode($session->payload) . ",\n";
            $seederContent .= "            'last_activity' => '{$session->last_activity}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis konten seeder ke file 
        File::put(database_path('seeders/SessionsTableSeeder.php'), $seederContent);
    }
}
