<?php
namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdatePPermissionsSeeder extends Seeder{
    public function run()
    {
        // Ambil data yang ada di tabel
        $permissions = DB::table('p_permissions')->get();

        // Mulai membangun konten seeder
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass PPermissionsTableSeeder extends Seeder\n{\n    public function run()\n    {\n";

        foreach ($permissions as $permission) {
            $seederContent .= "        DB::table('p_permissions')->updateOrInsert([\n";
            // $seederContent .= "        DB::table('p_permissions')->insertOrIgnore([\n";
            $seederContent .= "            'id' => '{$permission->id}',\n";
            $seederContent .= "            'name' => " . json_encode($permission->name) . ",\n";
            $seederContent .= "            'guard_name' => " . json_encode($permission->guard_name) . ",\n";
            $seederContent .= "            'created_at' => " . ($permission->created_at ? json_encode($permission->created_at) : 'NULL') . ",\n";
            $seederContent .= "            'updated_at' => " . ($permission->updated_at ? json_encode($permission->updated_at) : 'NULL') . ",\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis konten seeder ke file
        File::put(database_path('seeders/PPermissionsTableSeeder.php'), $seederContent);
    }
}
