<?php

namespace Database\Seeders\Update;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UpdateSocialAccounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil data terbaru dari tabel social_accounts
        $socialAccounts = DB::table('social_accounts')->get();

        // Format data sebagai array PHP
        $seederContent = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass SocialAccountsTableSeeder extends Seeder\n{\n    /**\n     * Run the database seeds.\n     *\n     * @return void\n     */\n    public function run()\n    {\n";

        foreach ($socialAccounts as $account) {
            $seederContent .= "        DB::table('social_accounts')->updateOrInsert([\n";
            $seederContent .= "            'id' => '{$account->id}',\n";
            $seederContent .= "        ], [\n";
            $seederContent .= "            'user_id' => '{$account->user_id}',\n";
            $seederContent .= "            'provider_id' => '{$account->provider_id}',\n";
            $seederContent .= "            'provider_name' => '{$account->provider_name}',\n";
            $escapedProviderData = addslashes($account->provider_data);
            $seederContent .= "            'provider_data' => '{$escapedProviderData}',\n";
            $seederContent .= "            'created_at' => '{$account->created_at}',\n";
            $seederContent .= "            'updated_at' => '{$account->updated_at}',\n";
            $seederContent .= "        ]);\n";
        }

        $seederContent .= "    }\n}\n";

        // Tulis data terbaru ke file seeder
        File::put(database_path('seeders/SocialAccountsTableSeeder.php'), $seederContent);
    }
}
