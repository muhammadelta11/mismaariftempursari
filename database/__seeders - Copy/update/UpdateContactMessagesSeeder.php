<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateContactMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel contact_messages
        $contactMessages = DB::table('contact_messages')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass ContactMessagesTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($contactMessages as $message) {
            $escapedMessage = addslashes($message->message);

            $seederContent .= "        DB::table('contact_messages')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$message->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'nama' => '{$message->nama}',\n";
            $seederContent .= "            'email' => '{$message->email}',\n";
            $seederContent .= "            'message' => '{$escapedMessage}',\n";
            $seederContent .= "            'status' => " . ($message->status ? "'{$message->status}'" : "NULL") . ",\n";
            $seederContent .= "            'created_at' => '{$message->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$message->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/ContactMessagesTableSeeder.php'), $seederContent);
    }
}
