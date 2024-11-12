<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel p_roles
        $roles = DB::table('p_roles')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass PRolesTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($roles as $role) {
            $seederContent .= "        DB::table('p_roles')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$role->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'name' => '{$role->name}',\n";
            $seederContent .= "            'guard_name' => '{$role->guard_name}',\n";
            $seederContent .= "            'created_at' => '{$role->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$role->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/PRolesTableSeeder.php'), $seederContent);
    }
}
