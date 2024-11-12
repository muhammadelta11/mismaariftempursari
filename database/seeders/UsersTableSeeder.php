<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->updateOrInsert([
            'id' => '1',
        ], [
            'name' => "MUHAMMAD MAS'UD",
            'email' => "muhammadsmas998@gmail.com",
            'foto' => "muhammadmasud20231027224600.jpeg",
            'username' => "muhammadmasud",
            'email_verified_at' => NULL,
            'password' => '$2y$10$GklAy8RqHEn4MOpCsM.Qy.ajTNpVtPc6hThaTjF9miYx1xF85zvYi',
            'active' => '1',
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'two_factor_confirmed_at' => NULL,
            'current_team_id' => NULL,
            'profile_photo_path' => NULL,
            'remember_token' => "wMPv1kZxseGYIKB3P19sdxNdU7BD5VGvlp2p5pK3FFKGLIMsmMZrqqRYc7vZ",
            'created_at' => NULL,
            'updated_at' => "2023-10-31 15:49:25",
        ]);
        DB::table('users')->updateOrInsert([
            'id' => '332',
        ], [
            'name' => "Guru 1",
            'email' => "guru1@gmail.com",
            'foto' => "nur-kumala2023103017222620240515150554.png",
            'username' => "ahmadnurazis",
            'email_verified_at' => NULL,
            'password' => '$2y$10$mBFR5DyNZEqrrC4KohC5/.FxsKVc.VwkcCN46.sD1KxeX7iRQBipe',
            'active' => '1',
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'two_factor_confirmed_at' => NULL,
            'current_team_id' => NULL,
            'profile_photo_path' => NULL,
            'remember_token' => null,
            'created_at' => "2023-10-30 17:22:26",
            'updated_at' => "2024-09-27 10:14:06",
        ]);
        DB::table('users')->updateOrInsert([
            'id' => '335',
        ], [
            'name' => "admin media",
            'email' => "guru2@gmail.com",
            'foto' => "fithrotinnaimulfarida20241102142305.PNG",
            'username' => "fithrotinnaimulfarida",
            'email_verified_at' => NULL,
            'password' => '$2y$10$j6XRw9hz6hF5kqp5Z4rT/uvsv/OMSAj66R0qzJqGfHGu0/2ifc1Oe',
            'active' => '1',
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'two_factor_confirmed_at' => NULL,
            'current_team_id' => NULL,
            'profile_photo_path' => NULL,
            'remember_token' => null,
            'created_at' => "2023-10-30 17:30:20",
            'updated_at' => "2024-11-02 14:23:05",
        ]);
        DB::table('users')->updateOrInsert([
            'id' => '339',
        ], [
            'name' => "Dosen 1",
            'email' => "dosen@gmail.com",
            'foto' => "dosen120240518083421.jpg",
            'username' => "dosen1",
            'email_verified_at' => NULL,
            'password' => '$2y$10$UTFVQcWWezW/DXoIVnFyeuy5J1jhxpIXY8jyydtJL41fPJHsiEEwW',
            'active' => '1',
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'two_factor_confirmed_at' => NULL,
            'current_team_id' => NULL,
            'profile_photo_path' => NULL,
            'remember_token' => null,
            'created_at' => "2023-10-31 12:05:39",
            'updated_at' => "2024-05-18 11:55:28",
        ]);
        DB::table('users')->updateOrInsert([
            'id' => '376',
        ], [
            'name' => "guru  3",
            'email' => "guru3@gmail.com",
            'foto' => null,
            'username' => "ahmad20240518123423",
            'email_verified_at' => NULL,
            'password' => '$2y$10$b45R3Mw0u/5Jdegq5SOFsukNewMckFu04hJZDnp4pxNAv.vIUb8VS',
            'active' => '1',
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'two_factor_confirmed_at' => NULL,
            'current_team_id' => NULL,
            'profile_photo_path' => NULL,
            'remember_token' => null,
            'created_at' => "2024-05-18 12:34:23",
            'updated_at' => "2024-11-04 17:43:33",
        ]);
        DB::table('users')->updateOrInsert([
            'id' => '381',
        ], [
            'name' => "muhammad mas'udin",
            'email' => "smas998@gmail.com",
            'foto' => null,
            'username' => "muhammad-mas-udin20240518130407",
            'email_verified_at' => NULL,
            'password' => '$2y$10$7IqDm9T6R6PgbX73NuIAQO4p4CPN79m1hrVki5hqxAVPM35oGqvTe',
            'active' => '1',
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'two_factor_confirmed_at' => NULL,
            'current_team_id' => NULL,
            'profile_photo_path' => NULL,
            'remember_token' => null,
            'created_at' => "2024-05-18 13:04:07",
            'updated_at' => "2024-05-18 13:04:07",
        ]);
        DB::table('users')->updateOrInsert([
            'id' => '386',
        ], [
            'name' => "Keaktifan sangat bagus",
            'email' => "fansntki@gmail.com",
            'foto' => null,
            'username' => "keaktifan-sangat-bagus20240525220700",
            'email_verified_at' => NULL,
            'password' => '$2y$10$nZYEQ/wwsRKu/V0npaBJZePQSzkhGegjOpuS6I6tppY3Wlo0bUMwe',
            'active' => '1',
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'two_factor_confirmed_at' => NULL,
            'current_team_id' => NULL,
            'profile_photo_path' => NULL,
            'remember_token' => null,
            'created_at' => "2024-05-25 22:07:00",
            'updated_at' => "2024-05-25 22:07:00",
        ]);
    }
}
