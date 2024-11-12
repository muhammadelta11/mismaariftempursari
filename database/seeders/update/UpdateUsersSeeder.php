<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Ambil data yang ada di tabel
       $users = DB::table('users')->get();

       // Mulai membangun konten seeder
       $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass UsersTableSeeder extends Seeder\n{\n    public function run()\n    {\n";

       foreach ($users as $user) {
           $seederContent .= "        DB::table('users')->updateOrInsert([\n";
        //    $seederContent .= "        DB::table('users')->insertOrIgnore([\n";
           $seederContent .= "            'id' => '{$user->id}',\n";
           $seederContent .= "        ], [\n";
           $seederContent .= "            'name' => " . json_encode($user->name) . ",\n";
           $seederContent .= "            'email' => " . json_encode($user->email) . ",\n";
           $seederContent .= "            'foto' => " . json_encode($user->foto) . ",\n";
           $seederContent .= "            'username' => " . json_encode($user->username) . ",\n";
           $seederContent .= "            'email_verified_at' => " . ($user->email_verified_at ? json_encode($user->email_verified_at) : 'NULL') . ",\n";
           $seederContent .= "            'password' => '" . $user->password . "',\n";
           $seederContent .= "            'active' => '{$user->active}',\n";
           $seederContent .= "            'two_factor_secret' => " . ($user->two_factor_secret ? json_encode($user->two_factor_secret) : 'NULL') . ",\n";
           $seederContent .= "            'two_factor_recovery_codes' => " . ($user->two_factor_recovery_codes ? json_encode($user->two_factor_recovery_codes) : 'NULL') . ",\n";
           $seederContent .= "            'two_factor_confirmed_at' => " . ($user->two_factor_confirmed_at ? json_encode($user->two_factor_confirmed_at) : 'NULL') . ",\n";
           $seederContent .= "            'current_team_id' => " . ($user->current_team_id ? json_encode($user->current_team_id) : 'NULL') . ",\n";
           $seederContent .= "            'profile_photo_path' => " . ($user->profile_photo_path ? json_encode($user->profile_photo_path) : 'NULL') . ",\n";
           $seederContent .= "            'remember_token' => " . json_encode($user->remember_token) . ",\n";
           $seederContent .= "            'created_at' => " . ($user->created_at ? json_encode($user->created_at) : 'NULL') . ",\n";
           $seederContent .= "            'updated_at' => " . ($user->updated_at ? json_encode($user->updated_at) : 'NULL') . ",\n";
           $seederContent .= "        ]);\n";
       }

       $seederContent .= "    }\n}\n";

       // Tulis konten seeder ke file
       File::put(database_path('seeders/UsersTableSeeder.php'), $seederContent);
   
    }
}
