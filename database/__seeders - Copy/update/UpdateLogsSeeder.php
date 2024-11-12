<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateLogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel logs
        $logsData = DB::table('logs')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass LogsTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($logsData as $data) {
            $escapedData = addslashes($data->data);

            $seederContent .= "        DB::table('logs')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$data->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'user_id' => '{$data->user_id}',\n";
            $seederContent .= "            'log_date' => '{$data->log_date}',\n";
            $seederContent .= "            'table_name' => '{$data->table_name}',\n";
            $seederContent .= "            'log_type' => '{$data->log_type}',\n";
            $seederContent .= "            'data' => '{$escapedData}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/LogsTableSeeder.php'), $seederContent);
    }
}
