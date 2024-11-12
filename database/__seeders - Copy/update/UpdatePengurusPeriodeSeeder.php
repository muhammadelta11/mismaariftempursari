<?php
namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdatePengurusPeriodeSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data yang ada di tabel
        $pengurusPeriodes = DB::table('pengurus_periodes')->get();

        // Mulai membangun konten seeder
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass PengurusPeriodesTableSeeder extends Seeder\n{\n    public function run()\n    {\n";
        $seederContent .= "        DB::table('pengurus_periodes')->delete();\n";
        $seederContent .= "        DB::table('pengurus_periodes')->insert(array (\n";

        foreach ($pengurusPeriodes as $pengurus) {
            $seederContent .= "            array (\n";
            $seederContent .= "                'id' => '{$pengurus->id}',\n";
            $seederContent .= "                'nama' => " . json_encode($pengurus->nama) . ",\n";
            $seederContent .= "                'foto' => " . json_encode($pengurus->foto) . ",\n";
            $seederContent .= "                'dari' => '{$pengurus->dari}',\n";
            $seederContent .= "                'sampai' => '{$pengurus->sampai}',\n";
            $seederContent .= "                'slug' => " . json_encode($pengurus->slug) . ",\n";
            $seederContent .= "                'slogan' => " . json_encode($pengurus->slogan) . ",\n";
            $seederContent .= "                'visi' => " . json_encode($pengurus->visi) . ",\n";
            $seederContent .= "                'misi' => " . json_encode($pengurus->misi) . ",\n";
            $seederContent .= "                'filosofi_logo' => " . json_encode($pengurus->filosofi_logo) . ",\n";
            $seederContent .= "                'status' => '{$pengurus->status}',\n";
            $seederContent .= "                'created_at' => " . ($pengurus->created_at ? json_encode($pengurus->created_at) : 'NULL') . ",\n";
            $seederContent .= "                'updated_at' => " . ($pengurus->updated_at ? json_encode($pengurus->updated_at) : 'NULL') . ",\n";
            $seederContent .= "            ),\n";
        }

        $seederContent .= "        ));\n";
        $seederContent .= "    }\n}\n";

        // Tulis konten seeder ke file
        File::put(database_path('seeders/PengurusPeriodesTableSeeder.php'), $seederContent);
    }
}
