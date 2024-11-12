<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateContactListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel contact_list
        $contactList = DB::table('contact_list')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass ContactListTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($contactList as $contact) {
            $escapedKeterangan = addslashes($contact->keterangan);

            $seederContent .= "        DB::table('contact_list')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$contact->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'nama' => '{$contact->nama}',\n";
            $seederContent .= "            'icon' => '{$contact->icon}',\n";
            $seederContent .= "            'url' => '{$contact->url}',\n";
            $seederContent .= "            'order' => '{$contact->order}',\n";
            $seederContent .= "            'keterangan' => '{$escapedKeterangan}',\n";
            $seederContent .= "            'status' => '{$contact->status}',\n";
            $seederContent .= "            'created_at' => '{$contact->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$contact->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/ContactListTableSeeder.php'), $seederContent);
    }
}
