<?php
namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateMenuSeeder extends Seeder{
    public function run()
    {
        // Ambil data yang ada di tabel 
        $menus = DB::table('p_menu')->get();

        // Mulai membangun konten seeder
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass PMenuTableSeeder extends Seeder\n{\n    public function run()\n    {\n";

        foreach ($menus as $menu) {
            $seederContent .= "        DB::table('p_menu')->updateOrInsert([\n";
            // $seederContent .= "        DB::table('p_menu')->insertOrIgnore([\n";
            $seederContent .= "            'id' => '{$menu->id}',\n";
            $seederContent .= "            'parent_id' => " . ($menu->parent_id ? json_encode($menu->parent_id) : 'NULL') . ",\n";
            $seederContent .= "            'title' => " . json_encode($menu->title) . ",\n";
            $seederContent .= "            'icon' => " . json_encode($menu->icon) . ",\n";
            $seederContent .= "            'route' => " . json_encode($menu->route) . ",\n";
            $seederContent .= "            'sequence' => '{$menu->sequence}',\n";
            $seederContent .= "            'active' => '{$menu->active}',\n";
            $seederContent .= "            'type' => '{$menu->type}',\n";
            $seederContent .= "            'created_at' => " . ($menu->created_at ? json_encode($menu->created_at) : 'NULL') . ",\n";
            $seederContent .= "            'updated_at' => " . ($menu->updated_at ? json_encode($menu->updated_at) : 'NULL') . ",\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis konten seeder ke file
        File::put(database_path('seeders/PMenuTableSeeder.php'), $seederContent);
    }
}
