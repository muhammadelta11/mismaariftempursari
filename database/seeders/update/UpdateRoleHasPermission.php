<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateRoleHasPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel p_role_has_permissions
        $roleHasPermissions = DB::table('p_role_has_permissions')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass PRoleHasPermissionsTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($roleHasPermissions as $permission) {
            $seederContent .= "        DB::table('p_role_has_permissions')->updateOrInsert([\n";
            $seederContent .= "            'permission_id' => '{$permission->permission_id}',\n";
            $seederContent .= "            'role_id' => '{$permission->role_id}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/PRoleHasPermissionsTableSeeder.php'), $seederContent);
    }
}
