<?php 
namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdatePRoleHasMenuSeeder extends Seeder{
    public function run()
    {
        // Ambil data yang ada di tabel
        $roleHasMenu = DB::table('p_role_has_menu')->get();

        // Mulai membangun konten seeder
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass PRoleHasMenuTableSeeder extends Seeder\n{\n    public function run()\n    {\n";

        foreach ($roleHasMenu as $item) {
            $seederContent .= "        DB::table('p_role_has_menu')->updateOrInsert([\n";
            // $seederContent .= "        DB::table('p_role_has_menu')->insertOrIgnore([\n";
            $seederContent .= "            'id' => '{$item->id}',\n";
            $seederContent .= "            'role_id' => '{$item->role_id}',\n";
            $seederContent .= "            'menu_id' => '{$item->menu_id}',\n";
            $seederContent .= "            'created_at' => " . ($item->created_at ? json_encode($item->created_at) : 'NULL') . ",\n";
            $seederContent .= "            'updated_at' => " . ($item->updated_at ? json_encode($item->updated_at) : 'NULL') . ",\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis konten seeder ke file
        File::put(database_path('seeders/PRoleHasMenuTableSeeder.php'), $seederContent);
    }
}
