<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateAnggotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel anggotas
        $anggotas = DB::table('anggotas')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass AnggotasTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($anggotas as $anggota) {
            $seederContent .= "        DB::table('anggotas')->updateOrInsert([\n";
            // $seederContent .= "        DB::table('anggotas')->insertOrIgnore([\n";
            $seederContent .= "            'id' => '{$anggota->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'nomor_anggota' => '{$anggota->nomor_anggota}',\n";
            $escapedNama    =               addslashes($anggota->nama);
            $seederContent .= "            'nama' => '{$escapedNama}',\n";
            $seederContent .= "            'tanggal_lahir' => '{$anggota->tanggal_lahir}',\n";
            $seederContent .= "            'jenis_kelamin' => '{$anggota->jenis_kelamin}',\n";
            $seederContent .= "            'angkatan' => '{$anggota->angkatan}',\n";
            $seederContent .= "            'province_id' => '{$anggota->province_id}',\n";
            $seederContent .= "            'regency_id' => '{$anggota->regency_id}',\n";
            $seederContent .= "            'district_id' => '{$anggota->district_id}',\n";
            $seederContent .= "            'village_id' => '{$anggota->village_id}',\n";
            $seederContent .= "            'alamat_lengkap' => '{$anggota->alamat_lengkap}',\n";
            $seederContent .= "            'bio' => '{$anggota->bio}',\n";
            $seederContent .= "            'profesi' => '{$anggota->profesi}',\n";
            $seederContent .= "            'foto' => '{$anggota->foto}',\n";
            $seederContent .= "            'telepon' => '{$anggota->telepon}',\n";
            $seederContent .= "            'whatsapp' => '{$anggota->whatsapp}',\n";
            $seederContent .= "            'status' => '{$anggota->status}',\n";
            $seederContent .= "            'user_id' => '{$anggota->user_id}',\n";
            $seederContent .= "            'created_at' => '{$anggota->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$anggota->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/AnggotasTableSeeder.php'), $seederContent);

   
    }
}
