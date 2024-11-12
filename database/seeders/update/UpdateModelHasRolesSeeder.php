<?php
namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateModelHasRolesSeeder extends Seeder{
    public function run()
    {
        // Ambil data yang ada di tabel
        $modelHasRoles = DB::table('p_model_has_roles')->get();

        // Mulai membangun konten seeder
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass PModelHasRolesTableSeeder extends Seeder\n{\n    public function run()\n    {\n";

        foreach ($modelHasRoles as $role) {
            $seederContent .= "        DB::table('p_model_has_roles')->updateOrInsert([\n";
            // $seederContent .= "        DB::table('p_model_has_roles')->insertOrIgnore([\n";
            $seederContent .= "            'role_id' => '{$role->role_id}',\n";
            $seederContent .= "            'model_type' => " . json_encode($role->model_type) . ",\n";
            $seederContent .= "            'model_id' => '{$role->model_id}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis konten seeder ke file
        File::put(database_path('seeders/PModelHasRolesTableSeeder.php'), $seederContent);
    }
}
