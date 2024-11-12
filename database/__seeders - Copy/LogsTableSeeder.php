<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logs')->updateOrInsert([
            'id' => '3850',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:13:51',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/126.0.0.0 Safari\\/537.36 Edg\\/126.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3851',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:17:10',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":11,\"key\":\"setting.front.meta.author\",\"value\":\"AKMI\",\"created_at\":\"2023-10-21 17:34:15\",\"updated_at\":\"2024-05-12 22:27:35\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3852',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:17:10',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":12,\"key\":\"setting.front.meta.keyword\",\"value\":\"AKMI,unwahas,teknik informatika\",\"created_at\":\"2023-10-21 17:34:15\",\"updated_at\":\"2024-05-12 22:27:35\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3853',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:17:10',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":13,\"key\":\"setting.front.meta.description\",\"value\":\"Aplikasi  Kreatifitas Mahasiswa Informatika Universitas Wahid Hasyim\",\"created_at\":\"2023-10-21 17:34:15\",\"updated_at\":\"2024-05-13 08:27:38\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3854',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:17:13',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":14,\"key\":\"setting.front.app.title\",\"value\":\"AKMI UWH\",\"created_at\":\"2023-10-21 21:31:02\",\"updated_at\":\"2024-05-12 22:26:50\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3855',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:17:13',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":15,\"key\":\"setting.front.app.copyright\",\"value\":\"<div>\\u00c2\\u00a9  2024 AKMI v1.0.0 <\\/div> <div> Persembahan Dari <a href=\\\"\\\" class=\\\"fw-bold\\\">AKMI UWH<\\/a> SEMARANG<\\/div>\",\"created_at\":\"2023-10-21 21:31:02\",\"updated_at\":\"2024-05-12 22:26:50\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3856',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:20:50',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":23,\"key\":\"setting.front.app.foto_dark_landscape_mode\",\"value\":\"assets\\/setting\\/front\\/logo\\/foto_dark_landscape_mode20240513082757.png\",\"created_at\":\"2024-05-13 08:27:03\",\"updated_at\":\"2024-05-13 08:27:57\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3857',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:20:51',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":24,\"key\":\"setting.front.app.foto_light_landscape_mode\",\"value\":\"assets\\/setting\\/front\\/logo\\/foto_light_landscape_mode20240513082757.png\",\"created_at\":\"2024-05-13 08:27:04\",\"updated_at\":\"2024-05-13 08:27:57\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3858',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:20:51',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":25,\"key\":\"setting.front.app.foto_dark_mode\",\"value\":\"assets\\/setting\\/front\\/logo\\/foto_dark_mode20240513082757.png\",\"created_at\":\"2024-05-13 08:27:04\",\"updated_at\":\"2024-05-13 08:27:57\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3859',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:20:51',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":26,\"key\":\"setting.front.app.foto_light_mode\",\"value\":\"assets\\/setting\\/front\\/logo\\/foto_light_mode20240513082758.png\",\"created_at\":\"2024-05-13 08:27:04\",\"updated_at\":\"2024-05-13 08:27:58\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3860',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:23:08',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":1,\"key\":\"setting.admin.app.title\",\"value\":\"AKMI UWH\",\"created_at\":\"2023-10-21 15:16:48\",\"updated_at\":\"2024-05-12 22:25:22\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3861',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:23:08',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":2,\"key\":\"setting.admin.app.copyright\",\"value\":\"<div>\\u00c2\\u00a9  2024 AKMI v1.0.0<\\/div> <div> Persembahan Dari <a href=\\\"\\\" class=\\\"fw-bold\\\">AKMI UWH<\\/a> SEMARANG <\\/div>\",\"created_at\":\"2023-10-21 15:16:48\",\"updated_at\":\"2024-05-12 22:38:55\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3862',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:23:08',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":4,\"key\":\"setting.admin.app.foto_dark_landscape_mode\",\"value\":\"assets\\/setting\\/admin\\/logo\\/foto_dark_landscape_mode20240513082505.png\",\"created_at\":\"2023-10-21 15:16:49\",\"updated_at\":\"2024-05-13 08:25:05\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3863',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:23:08',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":5,\"key\":\"setting.admin.app.foto_light_landscape_mode\",\"value\":\"assets\\/setting\\/admin\\/logo\\/foto_light_landscape_mode20240513082505.png\",\"created_at\":\"2023-10-21 15:16:49\",\"updated_at\":\"2024-05-13 08:25:05\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3864',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:23:08',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":6,\"key\":\"setting.admin.app.foto_dark_mode\",\"value\":\"assets\\/setting\\/admin\\/logo\\/foto_dark_mode20240513082505.png\",\"created_at\":\"2023-10-21 15:16:49\",\"updated_at\":\"2024-05-13 08:25:05\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3865',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:23:08',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":7,\"key\":\"setting.admin.app.foto_light_mode\",\"value\":\"assets\\/setting\\/admin\\/logo\\/foto_light_mode20240513082505.png\",\"created_at\":\"2023-10-21 15:16:49\",\"updated_at\":\"2024-05-13 08:25:05\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3866',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:23:26',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":9,\"key\":\"setting.admin.meta.keyword\",\"value\":\"AKMI,unwahas,teknik informatika\",\"created_at\":\"2023-10-21 15:16:52\",\"updated_at\":\"2024-05-12 22:25:18\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3867',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:23:26',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":10,\"key\":\"setting.admin.meta.description\",\"value\":\"AKMI - Aplikasi Kompetensi Mahasiswa Informatika\",\"created_at\":\"2023-10-21 15:16:52\",\"updated_at\":\"2024-05-12 22:25:18\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3868',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:23:58',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":1,\"name\":\"MUHAMMAD MAS\'UD\",\"email\":\"muhammadsmas998@gmail.com\",\"foto\":\"muhammadmasud20231027224600.jpeg\",\"username\":\"muhammadmasud\",\"email_verified_at\":null,\"password\":\"$2y$10$GklAy8RqHEn4MOpCsM.Qy.ajTNpVtPc6hThaTjF9miYx1xF85zvYi\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":\"sebMTpxQzHYxkfrGt70p6Lg2fJ0vnYccTryWSQOiggC01g0RVRu7Aqux5J4P\",\"skor\":\"0000000000\",\"created_at\":null,\"updated_at\":\"2023-10-31 15:49:25\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3869',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:24:57',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/126.0.0.0 Safari\\/537.36 Edg\\/126.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3870',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:30:07',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":24,\"key\":\"setting.front.app.foto_light_landscape_mode\",\"value\":\"assets\\/setting\\/front\\/logo\\/foto_light_landscape_mode20240714092051.png\",\"created_at\":\"2024-05-13 08:27:04\",\"updated_at\":\"2024-07-14 21:20:51\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3871',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:30:07',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":26,\"key\":\"setting.front.app.foto_light_mode\",\"value\":\"assets\\/setting\\/front\\/logo\\/foto_light_mode20240714092051.png\",\"created_at\":\"2024-05-13 08:27:04\",\"updated_at\":\"2024-07-14 21:20:51\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3872',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-14 21:47:57',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":1,\"name\":\"MUHAMMAD MAS\'UD\",\"email\":\"muhammadsmas998@gmail.com\",\"foto\":\"muhammadmasud20231027224600.jpeg\",\"username\":\"muhammadmasud\",\"email_verified_at\":null,\"password\":\"$2y$10$GklAy8RqHEn4MOpCsM.Qy.ajTNpVtPc6hThaTjF9miYx1xF85zvYi\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":\"c1cvuliSTaatlLxha3XVPk9y6ABMxfxfUewZwjpoWzRtAXB25Ehx5kihH7Dj\",\"skor\":\"0000000000\",\"created_at\":null,\"updated_at\":\"2023-10-31 15:49:25\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3873',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-16 22:27:14',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/126.0.0.0 Safari\\/537.36\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3874',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-16 22:31:57',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":1,\"name\":\"MUHAMMAD MAS\'UD\",\"email\":\"muhammadsmas998@gmail.com\",\"foto\":\"muhammadmasud20231027224600.jpeg\",\"username\":\"muhammadmasud\",\"email_verified_at\":null,\"password\":\"$2y$10$GklAy8RqHEn4MOpCsM.Qy.ajTNpVtPc6hThaTjF9miYx1xF85zvYi\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":\"0pIYJLnmr36B7jYR6wFUxfVUHMgGzJPDNvspDUI6RD5P7MHBmrqj3uyMqeCf\",\"skor\":\"0000000000\",\"created_at\":null,\"updated_at\":\"2023-10-31 15:49:25\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3875',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-16 22:32:50',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/126.0.0.0 Safari\\/537.36\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3876',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-16 22:33:04',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":1,\"name\":\"MUHAMMAD MAS\'UD\",\"email\":\"muhammadsmas998@gmail.com\",\"foto\":\"muhammadmasud20231027224600.jpeg\",\"username\":\"muhammadmasud\",\"email_verified_at\":null,\"password\":\"$2y$10$GklAy8RqHEn4MOpCsM.Qy.ajTNpVtPc6hThaTjF9miYx1xF85zvYi\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":\"KkTbBJ6KqF1BzowaajI7GuyvFtsVmcnFltqDztKHNR7ZumNNCnmHVWAjMsz8\",\"skor\":\"0000000000\",\"created_at\":null,\"updated_at\":\"2023-10-31 15:49:25\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3877',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 09:59:45',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/126.0.0.0 Safari\\/537.36 Edg\\/126.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3878',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 10:47:49',
            'table_name' => 'notif_admin_atas',
            'log_type' => 'delete',
            'data' => '{\"id\":4,\"nama\":\"upload\",\"deskripsi\":\"untuk segala jenis upload gambar, gambar akan muncul ketika admin menyetujui ditampilkan\",\"dari\":\"2023-12-18\",\"sampai\":\"2024-12-18\",\"link\":null,\"link_nama\":\"admin\",\"created_at\":\"2023-12-18 13:07:02\",\"updated_at\":\"2023-12-18 13:07:02\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3879',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 10:47:55',
            'table_name' => 'notif_admin_atas',
            'log_type' => 'delete',
            'data' => '{\"id\":3,\"nama\":\"admin\",\"deskripsi\":\"jika terjadi kendala hubungi admin\",\"dari\":\"2023-12-17\",\"sampai\":\"2024-11-18\",\"link\":null,\"link_nama\":null,\"created_at\":\"2023-12-18 13:02:32\",\"updated_at\":\"2023-12-18 13:02:32\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3880',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:10:38',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/126.0.0.0 Safari\\/537.36 Edg\\/126.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3881',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:12:30',
            'table_name' => 'social_media',
            'log_type' => 'edit',
            'data' => '{\"id\":2,\"nama\":\"Youtube\",\"icon\":\"fab fa-youtube\",\"url\":\"https:\\/\\/www.youtube.com\\/@hmjtiunwahas974\",\"order\":1,\"keterangan\":\"Youtube Utama\",\"status\":1,\"created_at\":\"2022-04-18 06:59:57\",\"updated_at\":\"2023-10-28 19:54:50\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3882',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:13:13',
            'table_name' => 'social_media',
            'log_type' => 'edit',
            'data' => '{\"id\":4,\"nama\":\"Instagram\",\"icon\":\"fab fa-instagram\",\"url\":\"https:\\/\\/www.instagram.com\\/hmjti_uwh\",\"order\":2,\"keterangan\":\"Instagram Utama\",\"status\":1,\"created_at\":\"2022-04-18 07:02:06\",\"updated_at\":\"2023-10-28 19:55:19\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3883',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:14:13',
            'table_name' => 'social_media',
            'log_type' => 'edit',
            'data' => '{\"id\":3,\"nama\":\"Whatsapp\",\"icon\":\"fab fa-whatsapp\",\"url\":\"https:\\/\\/api.whatsapp.com\\/send?phone=+6283838383948&amp;text=Assalamualaikum wr wb.\",\"order\":3,\"keterangan\":\"Whatsapp Utama\",\"status\":1,\"created_at\":\"2022-04-18 07:00:40\",\"updated_at\":\"2023-11-06 10:48:59\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3884',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:15:28',
            'table_name' => 'social_media',
            'log_type' => 'edit',
            'data' => '{\"id\":1,\"nama\":\"Facebook\",\"icon\":\"fab fa-facebook-f\",\"url\":\"https:\\/\\/www.facebook.com\\/hmjti_uwh\",\"order\":4,\"keterangan\":\"Facebook Utama\",\"status\":1,\"created_at\":\"2022-04-18 06:56:15\",\"updated_at\":\"2023-10-28 19:54:08\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3885',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:16:12',
            'table_name' => 'social_media',
            'log_type' => 'edit',
            'data' => '{\"id\":5,\"nama\":\"website\",\"icon\":\"fas fa-image\",\"url\":\"https:\\/\\/raidforums.co\\/\",\"order\":5,\"keterangan\":\"Kreatifitas\",\"status\":1,\"created_at\":\"2024-05-16 12:20:19\",\"updated_at\":\"2024-05-16 12:20:19\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3886',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:18:17',
            'table_name' => 'anggotas',
            'log_type' => 'edit',
            'data' => '{\"id\":307,\"nomor_anggota\":null,\"nama\":\"AHMAD NUR AZIS\",\"tanggal_lahir\":\"2003-10-05\",\"jenis_kelamin\":\"perempuan\",\"angkatan\":\"2022\",\"province_id\":\"33\",\"regency_id\":\"3329\",\"district_id\":\"3329080\",\"village_id\":\"3329080005\",\"alamat_lengkap\":null,\"bio\":null,\"profesi\":\"Pelajar\\/Mahasiswa\",\"foto\":\"nur-kumala2023103017222620240515150554.png\",\"telepon\":null,\"whatsapp\":null,\"status\":null,\"user_id\":332,\"created_at\":\"2023-10-30 17:22:26\",\"updated_at\":\"2024-05-15 15:05:54\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3887',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:26:34',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":1,\"name\":\"MUHAMMAD MAS\'UD\",\"email\":\"muhammadsmas998@gmail.com\",\"foto\":\"muhammadmasud20231027224600.jpeg\",\"username\":\"muhammadmasud\",\"email_verified_at\":null,\"password\":\"$2y$10$GklAy8RqHEn4MOpCsM.Qy.ajTNpVtPc6hThaTjF9miYx1xF85zvYi\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":\"5cAxoO5K3KTJI4uRkY9YPqtaW4IkY6oLOn7WEGfZ1oP6uPW3iw5BWiQGITVj\",\"skor\":\"0000000000\",\"created_at\":null,\"updated_at\":\"2023-10-31 15:49:25\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3888',
        ], [
            'user_id' => '332',
            'log_date' => '2024-07-19 23:26:53',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/126.0.0.0 Safari\\/537.36 Edg\\/126.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3889',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:31:33',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/126.0.0.0 Safari\\/537.36 Edg\\/126.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3890',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:36:38',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":3,\"parent_id\":2,\"title\":\"Tentang AKMI\",\"icon\":null,\"route\":\"tentang.sejarah\",\"sequence\":3,\"active\":0,\"type\":1,\"created_at\":\"2022-08-20 14:30:59\",\"updated_at\":\"2024-06-14 13:03:52\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3891',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:37:07',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":4,\"parent_id\":2,\"title\":\"PERIODE RANK\",\"icon\":null,\"route\":\"tentang.kepengurusan.struktur\",\"sequence\":5,\"active\":1,\"type\":1,\"created_at\":\"2022-08-20 14:31:18\",\"updated_at\":\"2024-06-03 11:00:15\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3892',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:37:39',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":6,\"parent_id\":2,\"title\":\"Anggaran Dasar Anggaran Rumah Tangga\",\"icon\":null,\"route\":\"__file_shared__\\/add_art_dan_ghbo_karmapack.pdf\",\"sequence\":6,\"active\":1,\"type\":1,\"created_at\":\"2022-08-20 14:31:46\",\"updated_at\":\"2024-05-13 11:58:47\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3893',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:38:05',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":4,\"parent_id\":2,\"title\":\"Struktur Organisasi\",\"icon\":null,\"route\":\"tentang.kepengurusan.struktur\",\"sequence\":5,\"active\":1,\"type\":1,\"created_at\":\"2022-08-20 14:31:18\",\"updated_at\":\"2024-07-19 23:37:07\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3894',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:38:24',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":6,\"parent_id\":2,\"title\":\"Anggaran Dasar Anggaran Rumah Tangga\",\"icon\":null,\"route\":\"__file_shared__\\/add_art_dan_ghbo_karmapack.pdf\",\"sequence\":6,\"active\":0,\"type\":1,\"created_at\":\"2022-08-20 14:31:46\",\"updated_at\":\"2024-07-19 23:37:39\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3895',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:39:26',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":2,\"parent_id\":null,\"title\":\"Tentang Kami\",\"icon\":null,\"route\":\"tentang\\/sejarah\",\"sequence\":2,\"active\":0,\"type\":1,\"created_at\":\"2022-08-20 14:30:39\",\"updated_at\":\"2024-06-01 10:49:46\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3896',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:41:25',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":23,\"parent_id\":21,\"title\":\"Kontak\",\"icon\":null,\"route\":\"kontak\",\"sequence\":16,\"active\":0,\"type\":1,\"created_at\":\"2024-05-25 21:12:19\",\"updated_at\":\"2024-05-25 21:16:32\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3897',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:41:25',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":24,\"parent_id\":21,\"title\":\"Registrasi\",\"icon\":null,\"route\":\"pendaftaran.registrasi\",\"sequence\":17,\"active\":0,\"type\":1,\"created_at\":\"2024-05-25 21:15:47\",\"updated_at\":\"2024-05-25 21:16:32\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3898',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:41:25',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":21,\"parent_id\":null,\"title\":\"More\",\"icon\":null,\"route\":\"#\",\"sequence\":15,\"active\":0,\"type\":1,\"created_at\":\"2023-11-17 14:37:51\",\"updated_at\":\"2024-05-25 21:16:32\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3899',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:41:32',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":21,\"parent_id\":null,\"title\":\"More\",\"icon\":null,\"route\":\"#\",\"sequence\":17,\"active\":0,\"type\":1,\"created_at\":\"2023-11-17 14:37:51\",\"updated_at\":\"2024-07-19 23:41:25\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3900',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-19 23:41:50',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":15,\"parent_id\":null,\"title\":\"Peserta\",\"icon\":null,\"route\":\"anggota\",\"sequence\":13,\"active\":0,\"type\":1,\"created_at\":\"2022-08-20 14:46:42\",\"updated_at\":\"2024-05-25 21:16:32\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3901',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-21 19:23:05',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/126.0.0.0 Safari\\/537.36 Edg\\/126.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3902',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-21 19:40:11',
            'table_name' => 'pengurus_periodes',
            'log_type' => 'edit',
            'data' => '{\"id\":4,\"nama\":\"Periode 2024\",\"foto\":\"iconperiode-2020240513093221.png\",\"dari\":\"2024\",\"sampai\":\"2025\",\"slug\":\"periode-2024\",\"slogan\":\"Go To Up Level\",\"visi\":\"<p>Meningkatkan Kualitas Kreatifitas Mahasiswa Teknik Informatika<\\/p>\\n\",\"misi\":\"<ol>\\r\\n<li>Memberikan Ruang Bagi Mahasiswa Untuk Mengembangkan Soft sklil dan Hard skill<\\/li>\\r\\n<li>Meningkatkan Daya persaingan(kompetisi)<\\/li>\\r\\n<\\/ol>\\n\",\"filosofi_logo\":\"<p>Otak Yang dikelilingi Lingkaran Dunia Teknologi<\\/p>\\n\",\"status\":1,\"created_at\":\"2023-11-14 13:40:53\",\"updated_at\":\"2024-05-13 09:32:21\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3903',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-21 21:12:30',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":24,\"parent_id\":null,\"title\":\"Registrasi\",\"icon\":null,\"route\":\"pendaftaran.registrasi\",\"sequence\":16,\"active\":0,\"type\":1,\"created_at\":\"2024-05-25 21:15:47\",\"updated_at\":\"2024-07-19 23:41:25\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3904',
        ], [
            'user_id' => '1',
            'log_date' => '2024-07-21 21:14:16',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":24,\"parent_id\":null,\"title\":\"Registrasi\",\"icon\":null,\"route\":\"pendaftaran.sesus\",\"sequence\":16,\"active\":0,\"type\":1,\"created_at\":\"2024-05-25 21:15:47\",\"updated_at\":\"2024-07-21 21:12:30\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3905',
        ], [
            'user_id' => '1',
            'log_date' => '2024-08-20 12:37:12',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36 Edg\\/127.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3906',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-08 20:30:54',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/128.0.0.0 Safari\\/537.36 Edg\\/128.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3907',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-08 20:34:21',
            'table_name' => 'artikel',
            'log_type' => 'edit',
            'data' => '{\"id\":59,\"nama\":\"sdwew\",\"slug\":\"sdwew\",\"foto\":null,\"detail\":\"<p>sdsfsf<\\/p>\\n\",\"excerpt\":\"sdfwewefwef\",\"counter\":0,\"date\":\"2024-06-03\",\"status\":1,\"created_at\":\"2024-06-03 11:35:49\",\"updated_at\":\"2024-06-03 11:35:49\",\"user_id\":1}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3908',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-17 12:32:08',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/128.0.0.0 Safari\\/537.36 Edg\\/128.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3909',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-17 12:32:22',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":1,\"name\":\"MUHAMMAD MAS\'UD\",\"email\":\"muhammadsmas998@gmail.com\",\"foto\":\"muhammadmasud20231027224600.jpeg\",\"username\":\"muhammadmasud\",\"email_verified_at\":null,\"password\":\"$2y$10$GklAy8RqHEn4MOpCsM.Qy.ajTNpVtPc6hThaTjF9miYx1xF85zvYi\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":\"9lQL26wb1DTrKbsDZpi7xnc0zWUpvxRWWvZtyj9jbLSD6KzkXXMcKnfjCwO0\",\"skor\":\"0000000000\",\"created_at\":null,\"updated_at\":\"2023-10-31 15:49:25\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3910',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-19 14:57:56',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/128.0.0.0 Safari\\/537.36 Edg\\/128.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3911',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-19 15:04:03',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":21,\"parent_id\":null,\"title\":\"More\",\"icon\":null,\"route\":\"#\",\"sequence\":17,\"active\":1,\"type\":1,\"created_at\":\"2023-11-17 14:37:51\",\"updated_at\":\"2024-07-19 23:41:32\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3912',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-19 15:04:35',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":21,\"parent_id\":null,\"title\":\"Galeri\",\"icon\":null,\"route\":\"galeri\",\"sequence\":17,\"active\":1,\"type\":1,\"created_at\":\"2023-11-17 14:37:51\",\"updated_at\":\"2024-09-19 15:04:03\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3913',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-19 15:04:58',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":21,\"parent_id\":null,\"title\":\"Galeri\",\"icon\":null,\"route\":\"galeri\",\"sequence\":17,\"active\":0,\"type\":1,\"created_at\":\"2023-11-17 14:37:51\",\"updated_at\":\"2024-09-19 15:04:35\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3914',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-19 15:04:58',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":19,\"parent_id\":null,\"title\":\"Artikel\",\"icon\":null,\"route\":\"artikel\",\"sequence\":14,\"active\":0,\"type\":1,\"created_at\":\"2022-09-02 01:03:02\",\"updated_at\":\"2024-05-25 21:16:32\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3915',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-19 15:04:58',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":23,\"parent_id\":null,\"title\":\"Kontak\",\"icon\":null,\"route\":\"kontak\",\"sequence\":15,\"active\":0,\"type\":1,\"created_at\":\"2024-05-25 21:12:19\",\"updated_at\":\"2024-07-19 23:41:25\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3916',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-19 15:04:58',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":24,\"parent_id\":null,\"title\":\"Registrasi\",\"icon\":null,\"route\":\"pendaftaran.sensus\",\"sequence\":16,\"active\":0,\"type\":1,\"created_at\":\"2024-05-25 21:15:47\",\"updated_at\":\"2024-07-21 21:14:16\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3917',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-26 20:32:23',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/129.0.0.0 Safari\\/537.36 Edg\\/129.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3918',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-26 21:05:01',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":3,\"parent_id\":2,\"title\":\"Tentang Kami\",\"icon\":null,\"route\":\"tentang.sejarah\",\"sequence\":3,\"active\":0,\"type\":1,\"created_at\":\"2022-08-20 14:30:59\",\"updated_at\":\"2024-07-19 23:36:38\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3919',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-26 21:51:12',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":3,\"parent_id\":2,\"title\":\"Tentang Kami\",\"icon\":null,\"route\":\"tentang.sejarah\",\"sequence\":3,\"active\":1,\"type\":1,\"created_at\":\"2022-08-20 14:30:59\",\"updated_at\":\"2024-09-26 21:05:01\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3920',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-26 21:52:11',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":3,\"parent_id\":2,\"title\":\"Tentang Kami\",\"icon\":null,\"route\":\"tentang.sejarah\",\"sequence\":3,\"active\":0,\"type\":1,\"created_at\":\"2022-08-20 14:30:59\",\"updated_at\":\"2024-09-26 21:51:12\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3921',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-26 21:52:17',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":2,\"parent_id\":null,\"title\":\"Tentang Kami\",\"icon\":null,\"route\":\"#\",\"sequence\":2,\"active\":0,\"type\":1,\"created_at\":\"2022-08-20 14:30:39\",\"updated_at\":\"2024-07-19 23:39:26\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3922',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-26 21:52:57',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":5,\"parent_id\":2,\"title\":\"Periode Tahunan\",\"icon\":null,\"route\":\"tentang.kepengurusan.periode\",\"sequence\":4,\"active\":1,\"type\":1,\"created_at\":\"2022-08-20 14:31:35\",\"updated_at\":\"2024-05-25 19:08:33\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3923',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-26 21:53:52',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":2,\"parent_id\":null,\"title\":\"Tentang Kami\",\"icon\":null,\"route\":\"tentang.sejarah\",\"sequence\":2,\"active\":0,\"type\":1,\"created_at\":\"2022-08-20 14:30:39\",\"updated_at\":\"2024-09-26 21:52:17\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3924',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-26 21:54:09',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":3,\"parent_id\":2,\"title\":\"Tentang Kami\",\"icon\":null,\"route\":\"tentang.sejarah\",\"sequence\":3,\"active\":1,\"type\":1,\"created_at\":\"2022-08-20 14:30:59\",\"updated_at\":\"2024-09-26 21:52:11\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3925',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 08:59:20',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/129.0.0.0 Safari\\/537.36 Edg\\/129.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3926',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 09:12:07',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":7,\"parent_id\":null,\"title\":\"Bidang\",\"icon\":null,\"route\":\"bidang\",\"sequence\":7,\"active\":1,\"type\":1,\"created_at\":\"2022-08-20 14:32:07\",\"updated_at\":\"2024-05-09 00:53:13\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3927',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 10:14:06',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":332,\"name\":\"AHMAD NUR AZIS\",\"email\":\"azis@gmail.com\",\"foto\":\"nur-kumala2023103017222620240515150554.png\",\"username\":\"ahmadnurazis\",\"email_verified_at\":null,\"password\":\"$2y$10$mBFR5DyNZEqrrC4KohC5\\/.FxsKVc.VwkcCN46.sD1KxeX7iRQBipe\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2023-10-30 17:22:26\",\"updated_at\":\"2024-05-18 08:30:19\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3928',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 10:14:06',
            'table_name' => 'anggotas',
            'log_type' => 'edit',
            'data' => '{\"id\":307,\"nomor_anggota\":null,\"nama\":\"AHMAD NUR AZIS\",\"tanggal_lahir\":\"2003-10-05\",\"jenis_kelamin\":\"perempuan\",\"angkatan\":\"2016\",\"province_id\":\"33\",\"regency_id\":\"3329\",\"district_id\":\"3329080\",\"village_id\":\"3329080005\",\"alamat_lengkap\":null,\"bio\":null,\"profesi\":\"Pelajar\\/Mahasiswa\",\"foto\":\"nur-kumala2023103017222620240515150554.png\",\"telepon\":null,\"whatsapp\":null,\"status\":null,\"user_id\":332,\"created_at\":\"2023-10-30 17:22:26\",\"updated_at\":\"2024-07-19 23:18:17\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3929',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 10:14:53',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":335,\"name\":\"Fithrotin Na\'imul Farida\",\"email\":\"okeseep01@gmail.com\",\"foto\":\"fithrotin-na-imul-farida2023103017302020231030174731.jpeg\",\"username\":\"fithrotinnaimulfarida\",\"email_verified_at\":null,\"password\":\"$2y$10$6JbhAirBgu4BjgMuJ4\\/koO3Lihp81plRPVPOA9EPc5IcJBDECEEdm\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2023-10-30 17:30:20\",\"updated_at\":\"2024-05-18 11:21:14\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3930',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 10:14:53',
            'table_name' => 'anggotas',
            'log_type' => 'edit',
            'data' => '{\"id\":310,\"nomor_anggota\":null,\"nama\":\"Fithrotin Na\'imul Farida\",\"tanggal_lahir\":\"2001-01-16\",\"jenis_kelamin\":\"perempuan\",\"angkatan\":\"2022\",\"province_id\":\"33\",\"regency_id\":\"3315\",\"district_id\":\"3315030\",\"village_id\":\"3315030011\",\"alamat_lengkap\":\"Jl. Mojo Agung, RT01\\/RW03, Dsn. Bendungan\",\"bio\":null,\"profesi\":\"Pelajar\\/Mahasiswa\",\"foto\":\"fithrotin-na-imul-farida2023103017302020231030174731.jpeg\",\"telepon\":\"081295231588\",\"whatsapp\":\"081295231588\",\"status\":null,\"user_id\":335,\"created_at\":\"2023-10-30 17:30:20\",\"updated_at\":\"2023-10-30 17:47:31\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3931',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 10:18:20',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":376,\"name\":\"ahmad\",\"email\":\"ahmad@gmail.com\",\"foto\":null,\"username\":\"ahmad20240518123423\",\"email_verified_at\":null,\"password\":\"$2y$10$xBgFMJWU0Es4Q9jM5WunzuyJHhfC4XmyTxzD1bxCwaVi4Q0ZXdhnK\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2024-05-18 12:34:23\",\"updated_at\":\"2024-05-18 12:34:23\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3932',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 10:18:20',
            'table_name' => 'anggotas',
            'log_type' => 'edit',
            'data' => '{\"id\":350,\"nomor_anggota\":null,\"nama\":\"ahmad\",\"tanggal_lahir\":null,\"jenis_kelamin\":null,\"angkatan\":\"2021\",\"province_id\":null,\"regency_id\":null,\"district_id\":null,\"village_id\":null,\"alamat_lengkap\":null,\"bio\":null,\"profesi\":null,\"foto\":null,\"telepon\":\"081225850639\",\"whatsapp\":\"2323242545\",\"status\":null,\"user_id\":376,\"created_at\":\"2024-05-18 12:34:23\",\"updated_at\":\"2024-05-18 12:34:23\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3933',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 11:13:30',
            'table_name' => 'p_menu',
            'log_type' => 'create',
            'data' => '{\"sequence\":\"57\",\"parent_id\":null,\"active\":\"1\",\"title\":\"Program Belajar\",\"icon\":\"fas fa-share-alt\",\"route\":\"admin.home.program_pembelajaran\",\"type\":\"1\",\"updated_at\":\"2024-09-27T04:13:30.000000Z\",\"created_at\":\"2024-09-27T04:13:30.000000Z\",\"id\":417}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3934',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 11:13:30',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":417,\"updated_at\":\"2024-09-27T04:13:30.000000Z\",\"created_at\":\"2024-09-27T04:13:30.000000Z\",\"id\":1387}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3935',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 11:13:59',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":417,\"parent_id\":null,\"title\":\"Program Belajar\",\"icon\":\"fas fa-share-alt\",\"route\":\"admin.home.program_pembelajaran\",\"sequence\":57,\"active\":1,\"type\":1,\"created_at\":\"2024-09-27 11:13:30\",\"updated_at\":\"2024-09-27 11:13:30\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3936',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 11:13:59',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":417,\"updated_at\":\"2024-09-27T04:13:59.000000Z\",\"created_at\":\"2024-09-27T04:13:59.000000Z\",\"id\":1388}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3937',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 11:14:35',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":417,\"parent_id\":null,\"title\":\"Program Belajar\",\"icon\":\"fas fa-share-alt\",\"route\":\"admin.home.program_pembelajaran\",\"sequence\":57,\"active\":0,\"type\":1,\"created_at\":\"2024-09-27 11:13:30\",\"updated_at\":\"2024-09-27 11:13:59\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3938',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 11:14:35',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":417,\"updated_at\":\"2024-09-27T04:14:35.000000Z\",\"created_at\":\"2024-09-27T04:14:35.000000Z\",\"id\":1389}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3939',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 11:14:45',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":417,\"parent_id\":null,\"title\":\"Program Belajar\",\"icon\":\"fas fa-share-alt\",\"route\":\"admin.home.program_pembelajaran\",\"sequence\":57,\"active\":1,\"type\":1,\"created_at\":\"2024-09-27 11:13:30\",\"updated_at\":\"2024-09-27 11:14:35\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3940',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 11:14:45',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":389,\"parent_id\":null,\"title\":\"Menu kata Motivasi\",\"icon\":null,\"route\":null,\"sequence\":54,\"active\":1,\"type\":1,\"created_at\":\"2022-08-06 14:06:05\",\"updated_at\":\"2024-05-12 23:14:06\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3941',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 11:14:45',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":396,\"parent_id\":null,\"title\":\"Kata-kata Dosen\",\"icon\":\"fas fa-user-edit\",\"route\":\"member.kata_alumni\",\"sequence\":55,\"active\":1,\"type\":1,\"created_at\":\"2022-08-09 15:23:52\",\"updated_at\":\"2024-05-12 23:14:06\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3942',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 11:14:45',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":373,\"parent_id\":null,\"title\":\"Ganti Password\",\"icon\":\"fas fa-key\",\"route\":\"member.password\",\"sequence\":56,\"active\":1,\"type\":1,\"created_at\":\"2022-08-05 23:50:28\",\"updated_at\":\"2024-05-12 23:14:06\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3943',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 11:14:45',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":386,\"parent_id\":null,\"title\":\"Logout\",\"icon\":\"fas fa-sign-out-alt\",\"route\":\"logout\",\"sequence\":57,\"active\":1,\"type\":1,\"created_at\":\"2022-08-05 23:54:09\",\"updated_at\":\"2024-05-12 23:14:06\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3944',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 11:16:09',
            'table_name' => 'p_menu',
            'log_type' => 'create',
            'data' => '{\"sequence\":\"58\",\"parent_id\":null,\"active\":\"1\",\"title\":\"Testimoni\",\"icon\":null,\"route\":\"admin.home.testimonial\",\"type\":\"1\",\"updated_at\":\"2024-09-27T04:16:09.000000Z\",\"created_at\":\"2024-09-27T04:16:09.000000Z\",\"id\":418}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3945',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 11:16:09',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":418,\"updated_at\":\"2024-09-27T04:16:09.000000Z\",\"created_at\":\"2024-09-27T04:16:09.000000Z\",\"id\":1390}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3946',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:03:35',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":2,\"key\":\"setting.admin.app.copyright\",\"value\":\"<div>\\u00a9  2023 HMJTI v3.2.0<\\/div> <div> Persembahan Dari <a href=\\\"https:\\/\\/www.instagram.com\\/hmjti_uwh\\/\\\" class=\\\"fw-bold\\\">MIS Ma\'arif Tempursari<\\/a> NGAWI <\\/div>\",\"created_at\":\"2023-10-21 15:16:48\",\"updated_at\":\"2024-07-14 21:23:08\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3947',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:03:57',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":2,\"key\":\"setting.admin.app.copyright\",\"value\":\"<div>\\u00a9  2023 HMJTI v3.2.0<\\/div> <div> Persembahan Dari <a href=\\\"https:\\/\\/www.instagram.com\\/\\\" class=\\\"fw-bold\\\">MIS Ma\'arif Tempursari<\\/a> NGAWI <\\/div>\",\"created_at\":\"2023-10-21 15:16:48\",\"updated_at\":\"2024-09-27 17:03:35\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3948',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:13:56',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":351,\"parent_id\":null,\"title\":\"Artikel \\/ Blog\",\"icon\":\"fas fa-file-alt\",\"route\":null,\"sequence\":10,\"active\":1,\"type\":1,\"created_at\":\"2022-08-05 23:50:28\",\"updated_at\":\"2024-05-12 23:14:06\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3949',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:13:56',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":351,\"updated_at\":\"2024-09-27T10:13:56.000000Z\",\"created_at\":\"2024-09-27T10:13:56.000000Z\",\"id\":1391}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3950',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:13:56',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":2,\"menu_id\":351,\"updated_at\":\"2024-09-27T10:13:56.000000Z\",\"created_at\":\"2024-09-27T10:13:56.000000Z\",\"id\":1392}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3951',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:13:56',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":6,\"menu_id\":351,\"updated_at\":\"2024-09-27T10:13:56.000000Z\",\"created_at\":\"2024-09-27T10:13:56.000000Z\",\"id\":1393}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3952',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:15:29',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":346,\"parent_id\":null,\"title\":\"Anggota\",\"icon\":\"fas fa-users\",\"route\":\"admin.anggota\",\"sequence\":27,\"active\":1,\"type\":1,\"created_at\":\"2022-08-05 23:50:28\",\"updated_at\":\"2024-05-12 23:14:06\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3953',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:15:29',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":346,\"updated_at\":\"2024-09-27T10:15:29.000000Z\",\"created_at\":\"2024-09-27T10:15:29.000000Z\",\"id\":1394}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3954',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:19:49',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":395,\"parent_id\":null,\"title\":\"Kata-kata Dosen\",\"icon\":\"fas fa-user-edit\",\"route\":\"admin.kata_alumni\",\"sequence\":50,\"active\":1,\"type\":1,\"created_at\":\"2022-08-09 15:20:36\",\"updated_at\":\"2024-05-12 23:14:06\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3955',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:19:49',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":395,\"updated_at\":\"2024-09-27T10:19:49.000000Z\",\"created_at\":\"2024-09-27T10:19:49.000000Z\",\"id\":1395}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3956',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:19:49',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":6,\"menu_id\":395,\"updated_at\":\"2024-09-27T10:19:49.000000Z\",\"created_at\":\"2024-09-27T10:19:49.000000Z\",\"id\":1396}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3957',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:20:14',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":396,\"parent_id\":null,\"title\":\"Kata-kata Dosen\",\"icon\":\"fas fa-user-edit\",\"route\":\"member.kata_alumni\",\"sequence\":56,\"active\":1,\"type\":1,\"created_at\":\"2022-08-09 15:23:52\",\"updated_at\":\"2024-09-27 11:14:45\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3958',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:20:14',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":396,\"updated_at\":\"2024-09-27T10:20:14.000000Z\",\"created_at\":\"2024-09-27T10:20:14.000000Z\",\"id\":1397}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3959',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-27 17:20:14',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":6,\"menu_id\":396,\"updated_at\":\"2024-09-27T10:20:14.000000Z\",\"created_at\":\"2024-09-27T10:20:14.000000Z\",\"id\":1398}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3960',
        ], [
            'user_id' => '1',
            'log_date' => '2024-09-29 15:10:42',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/129.0.0.0 Safari\\/537.36 Edg\\/129.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3961',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:00:58',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/129.0.0.0 Safari\\/537.36 Edg\\/129.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3962',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:02:50',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/129.0.0.0 Safari\\/537.36 Edg\\/129.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3963',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:03:50',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":350,\"parent_id\":null,\"title\":\"Rank\",\"icon\":\"fas fa-sitemap\",\"route\":\"admin.kepengurusan.periode\",\"sequence\":26,\"active\":1,\"type\":1,\"created_at\":\"2022-08-05 23:50:28\",\"updated_at\":\"2024-05-12 23:14:06\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3964',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:03:50',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":350,\"updated_at\":\"2024-10-19T15:03:50.000000Z\",\"created_at\":\"2024-10-19T15:03:50.000000Z\",\"id\":1399}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3965',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:03:50',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":2,\"menu_id\":350,\"updated_at\":\"2024-10-19T15:03:50.000000Z\",\"created_at\":\"2024-10-19T15:03:50.000000Z\",\"id\":1400}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3966',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:03:50',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":6,\"menu_id\":350,\"updated_at\":\"2024-10-19T15:03:50.000000Z\",\"created_at\":\"2024-10-19T15:03:50.000000Z\",\"id\":1401}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3967',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:04:18',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":350,\"parent_id\":null,\"title\":\"Struktur\",\"icon\":\"fas fa-sitemap\",\"route\":\"admin.kepengurusan.periode\",\"sequence\":26,\"active\":1,\"type\":1,\"created_at\":\"2022-08-05 23:50:28\",\"updated_at\":\"2024-10-19 22:03:50\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3968',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:04:18',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":350,\"updated_at\":\"2024-10-19T15:04:18.000000Z\",\"created_at\":\"2024-10-19T15:04:18.000000Z\",\"id\":1402}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3969',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:04:18',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":2,\"menu_id\":350,\"updated_at\":\"2024-10-19T15:04:18.000000Z\",\"created_at\":\"2024-10-19T15:04:18.000000Z\",\"id\":1403}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3970',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:04:18',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":6,\"menu_id\":350,\"updated_at\":\"2024-10-19T15:04:18.000000Z\",\"created_at\":\"2024-10-19T15:04:18.000000Z\",\"id\":1404}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3971',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:05:10',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":370,\"parent_id\":null,\"title\":\"Anggota\",\"icon\":null,\"route\":null,\"sequence\":53,\"active\":0,\"type\":1,\"created_at\":\"2022-08-05 23:50:28\",\"updated_at\":\"2024-05-12 23:14:06\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3972',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:05:10',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":370,\"updated_at\":\"2024-10-19T15:05:10.000000Z\",\"created_at\":\"2024-10-19T15:05:10.000000Z\",\"id\":1405}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3973',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:05:10',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":2,\"menu_id\":370,\"updated_at\":\"2024-10-19T15:05:10.000000Z\",\"created_at\":\"2024-10-19T15:05:10.000000Z\",\"id\":1406}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3974',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:05:10',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":6,\"menu_id\":370,\"updated_at\":\"2024-10-19T15:05:10.000000Z\",\"created_at\":\"2024-10-19T15:05:10.000000Z\",\"id\":1407}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3975',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:06:24',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":2,\"key\":\"setting.admin.app.copyright\",\"value\":\"<div>\\u00a9  2023 UPT TIK UNWAHAS v3.2.0<\\/div> <div> Persembahan Dari <a href=\\\"https:\\/\\/www.instagram.com\\/\\\" class=\\\"fw-bold\\\">MIS Ma\'arif Tempursari<\\/a> NGAWI <\\/div>\",\"created_at\":\"2023-10-21 15:16:48\",\"updated_at\":\"2024-09-27 17:03:57\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3976',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:07:43',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":13,\"key\":\"setting.front.meta.description\",\"value\":\"Himpunan Mahasiswa Jurusan Teknik Informatika\",\"created_at\":\"2023-10-21 17:34:15\",\"updated_at\":\"2024-07-14 21:17:10\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3977',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:08:48',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":15,\"key\":\"setting.front.app.copyright\",\"value\":\"<div>\\u00a9  2023 HMJTI v3.2.0 <\\/div> <div> Persembahan Dari <a href=\\\"https:\\/\\/www.instagram.com\\/hmjti_uwh\\/\\\" class=\\\"fw-bold\\\">HMJTI UNWAHAS<\\/a> SEMARANG<\\/div>\",\"created_at\":\"2023-10-21 21:31:02\",\"updated_at\":\"2024-07-14 21:17:13\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3978',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:10:13',
            'table_name' => 'setting_activities',
            'log_type' => 'edit',
            'data' => '{\"id\":15,\"key\":\"setting.front.app.copyright\",\"value\":\"<div>\\u00a9  2024 UPT TIK UNWAHAS v3.2.0 <\\/div> <div> Persembahan Dari <a href=\\\"https:\\/\\/www.instagram.com\\/mismaariftempursari\\/\\\" class=\\\"fw-bold\\\"><\\/a> SEMARANG<\\/div>\",\"created_at\":\"2023-10-21 21:31:02\",\"updated_at\":\"2024-10-19 22:08:48\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3979',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:17:47',
            'table_name' => 'artikel',
            'log_type' => 'edit',
            'data' => '{\"id\":52,\"nama\":\"cara membuat api wa\",\"slug\":\"cara-membuat-api-wa\",\"foto\":\"\\/assets\\/artikel\\/cara-membu17165439100.png\",\"detail\":\"<div class=\\\"featured-image  page-header-image-single \\\">&nbsp;<img alt=\\\"\\\" width=\\\"198\\\" height=\\\"328\\\" src=\\\"\\/assets\\/artikel\\/cara-membu17165439100.png\\\"><header class=\\\"entry-header\\\">\\r\\n<h1 class=\\\"entry-title\\\" itemprop=\\\"headline\\\">Cara mengirim pesan whatsapp dengan PHP (API)<\\/h1>\\r\\n<\\/header>\\r\\n<div class=\\\"entry-content\\\" itemprop=\\\"text\\\">\\r\\n<div class=\\\"post-views content-post post-996 entry-meta\\\">&nbsp;<span class=\\\"post-views-label\\\">Post Views:<\\/span>&nbsp;<span class=\\\"post-views-count\\\">15,579<\\/span><\\/div>\\r\\n<p>Mengirimkan pesan whatsapp dengan kode PHP untuk bisa digunakan secara otomatis sekarang bisa dilakukan dengan mudah.<\\/p>\\r\\n<p>Sebelumnya untuk mengirimkan invoice, notifikasi, konfirmasi dan lain-lain biasanya dilakukan melalui email.<\\/p>\\r\\n<p>Sekarang, mengirimkan pesan whatsapp bisa dilakukan dengan menggunakan API.<\\/p>\\r\\n<p>Fonnte menyediakan API yang sangat mudah digunakan untuk mengirimkan pesan whatsapp melalui API.<\\/p>\\r\\n<p>Dalam tutorial ini, akan ditunjukkan bagaimana cara mengirimkan pesan whatsapp dengan PHP melalui API fonnte.<\\/p>\\r\\n<div class=\\\"wp-block-group quote\\\">\\r\\n<div class=\\\"wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained\\\">\\r\\n<p><em>Tutorial ini memerlukan pemahaman dasar tentang bahasa pemrograman PHP. Kalau kamu belum memiliki pengalaman menuliskan kode atau tidak tahu harus melakukan apa, sebaiknya pertimbangkan untuk menggunakan jasa developer.<\\/em><\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<figure class=\\\"wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio\\\">\\r\\n<div class=\\\"wp-block-embed__wrapper\\\">&nbsp;<\\/div>\\r\\n<\\/figure>\\r\\n<h2 class=\\\"wp-block-heading\\\">Prasyarat<\\/h2>\\r\\n<p>Sebelum menggunakan API ini, kamu harus&nbsp;<a href=\\\"https:\\/\\/md.fonnte.com\\/new\\/register.php\\\">mendaftar<\\/a>&nbsp;kalau belum punya akun, kemudian login dan tambah device.<\\/p>\\r\\n<p>Copy&nbsp;<a href=\\\"https:\\/\\/docs.fonnte.com\\/token-api-key\\/\\\" data-type=\\\"post\\\" data-id=\\\"131\\\">token<\\/a>&nbsp;(API key) yang ada di menu device untuk digunakan sebagai authorization saat mengirimkan API.<\\/p>\\r\\n<p>Lalu,&nbsp;<a href=\\\"https:\\/\\/docs.fonnte.com\\/how-to-connect\\/\\\" data-type=\\\"post\\\" data-id=\\\"433\\\">konekkan device<\\/a>&nbsp;sebelum mulai mengirimkan pesan.<\\/p>\\r\\n<p>Gunakan libcurl terbaru dengan versi PHP diatas 7.1 sebagaimana diperlukan dalam sebagai&nbsp;<a href=\\\"https:\\/\\/www.php.net\\/manual\\/en\\/curl.requirements.php\\\">requirement<\\/a>&nbsp;oleh PHP.<\\/p>\\r\\n<p>Referensi API lengkap ada di halaman&nbsp;<a href=\\\"https:\\/\\/docs.fonnte.com\\/api-send-message\\/\\\" data-type=\\\"post\\\" data-id=\\\"21\\\">dokumentasi fonnte<\\/a>&nbsp;dan&nbsp;<a href=\\\"https:\\/\\/documenter.getpostman.com\\/view\\/14730548\\/2s83zpJLnW#23e6b274-e1ae-4082-82fc-133dc84b481e\\\" target=\\\"_blank\\\" rel=\\\"noreferrer noopener\\\">postman<\\/a>.<\\/p>\\r\\n<ul>\\r\\n<li><a href=\\\"https:\\/\\/fonnte.com\\/tutorial\\/mengirim-pesan-whatsapp-php-api\\/#single\\\" data-type=\\\"internal\\\" data-id=\\\"#single\\\">Satu nomor<\\/a><\\/li>\\r\\n<li><a href=\\\"https:\\/\\/fonnte.com\\/tutorial\\/mengirim-pesan-whatsapp-php-api\\/#bulk\\\">Banyak nomor\\/broadcast<\\/a><\\/li>\\r\\n<li><a href=\\\"https:\\/\\/fonnte.com\\/tutorial\\/mengirim-pesan-whatsapp-php-api\\/#schedule\\\">Pesan schedule<\\/a><\\/li>\\r\\n<li><a href=\\\"https:\\/\\/fonnte.com\\/tutorial\\/mengirim-pesan-whatsapp-php-api\\/#dynamic\\\" data-type=\\\"internal\\\" data-id=\\\"#dynamic\\\">Pesan dinamis<\\/a><\\/li>\\r\\n<li><a href=\\\"https:\\/\\/fonnte.com\\/tutorial\\/mengirim-pesan-whatsapp-php-api\\/#media\\\">Pesan media<\\/a>\\r\\n<ul>\\r\\n<li><a href=\\\"https:\\/\\/fonnte.com\\/tutorial\\/mengirim-pesan-whatsapp-php-api\\/#url\\\">URL<\\/a><\\/li>\\r\\n<li><a href=\\\"https:\\/\\/fonnte.com\\/tutorial\\/mengirim-pesan-whatsapp-php-api\\/#local\\\">File lokal<\\/a><\\/li>\\r\\n<li><a href=\\\"https:\\/\\/fonnte.com\\/tutorial\\/mengirim-pesan-whatsapp-php-api\\/#form\\\">Upload<\\/a><\\/li>\\r\\n<\\/ul>\\r\\n<\\/li>\\r\\n<li><a href=\\\"https:\\/\\/fonnte.com\\/tutorial\\/mengirim-pesan-whatsapp-php-api\\/#button\\\">Pesan button<\\/a><\\/li>\\r\\n<li><a href=\\\"https:\\/\\/fonnte.com\\/tutorial\\/mengirim-pesan-whatsapp-php-api\\/#template\\\">Pesan template<\\/a><\\/li>\\r\\n<li><a href=\\\"https:\\/\\/fonnte.com\\/tutorial\\/mengirim-pesan-whatsapp-php-api\\/#list\\\" data-type=\\\"internal\\\" data-id=\\\"#list\\\">Pesan list<\\/a><\\/li>\\r\\n<li><a href=\\\"https:\\/\\/fonnte.com\\/tutorial\\/mengirim-pesan-whatsapp-php-api\\/#lokasi\\\" data-type=\\\"internal\\\" data-id=\\\"#list\\\">Pesan lokasi<\\/a><\\/li>\\r\\n<\\/ul>\\r\\n<h2 id=\\\"single\\\" class=\\\"wp-block-heading\\\">Satu nomor<\\/h2>\\r\\n<figure class=\\\"wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-4-3 wp-has-aspect-ratio\\\">\\r\\n<div class=\\\"wp-block-embed__wrapper\\\">&nbsp;<\\/div>\\r\\n<\\/figure>\\r\\n<p>Untuk menggunakan API fonnte, cukup copy kode dibawah ini.<\\/p>\\r\\n<p>Buat 1 file, misalkan send.php di localhost maupun di server (localhost dengan xampp sebagai contoh).<\\/p>\\r\\n<p>Lalu paste kode dibawah ini<\\/p>\\r\\n<\\/div>\\r\\n<\\/div>\\n\",\"excerpt\":\"Mengirimkan pesan whatsapp dengan kode PHP untuk bisa digunakan secara otomatis sekarang bisa dilakukan dengan mudah.\",\"counter\":2,\"date\":\"2024-05-24\",\"status\":1,\"created_at\":\"2024-05-24 16:42:35\",\"updated_at\":\"2024-09-17 14:42:13\",\"user_id\":332}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3980',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:26:19',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":3,\"parent_id\":2,\"title\":\"Tentang Kami\",\"icon\":null,\"route\":\"tentang.sejarah\",\"sequence\":3,\"active\":0,\"type\":1,\"created_at\":\"2022-08-20 14:30:59\",\"updated_at\":\"2024-09-26 21:54:09\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3981',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-19 22:47:41',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":7,\"parent_id\":null,\"title\":\"Bidang\",\"icon\":null,\"route\":\"bidang\",\"sequence\":7,\"active\":0,\"type\":1,\"created_at\":\"2022-08-20 14:32:07\",\"updated_at\":\"2024-09-27 09:12:07\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3982',
        ], [
            'user_id' => '1',
            'log_date' => '2024-10-27 22:37:58',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36 Edg\\/130.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3983',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-02 14:11:35',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36 Edg\\/130.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3984',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-02 14:17:35',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":1,\"name\":\"MUHAMMAD MAS\'UD\",\"email\":\"muhammadsmas998@gmail.com\",\"foto\":\"muhammadmasud20231027224600.jpeg\",\"username\":\"muhammadmasud\",\"email_verified_at\":null,\"password\":\"$2y$10$GklAy8RqHEn4MOpCsM.Qy.ajTNpVtPc6hThaTjF9miYx1xF85zvYi\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":\"WzWAXjFx2MVAZEuM5XdroFufGLno68V3nos7VzL1oNDUsvtNatYnY1RRDmM2\",\"skor\":\"0000000000\",\"created_at\":null,\"updated_at\":\"2023-10-31 15:49:25\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3985',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-02 14:17:48',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36 Edg\\/130.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3986',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-02 14:22:45',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":335,\"name\":\"guru 2\",\"email\":\"guru2@gmail.com\",\"foto\":\"fithrotin-na-imul-farida2023103017302020231030174731.jpeg\",\"username\":\"fithrotinnaimulfarida\",\"email_verified_at\":null,\"password\":\"$2y$10$6JbhAirBgu4BjgMuJ4\\/koO3Lihp81plRPVPOA9EPc5IcJBDECEEdm\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2023-10-30 17:30:20\",\"updated_at\":\"2024-09-27 10:14:52\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3987',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-02 14:22:45',
            'table_name' => 'anggotas',
            'log_type' => 'edit',
            'data' => '{\"id\":310,\"nomor_anggota\":null,\"nama\":\"guru 2\",\"tanggal_lahir\":\"2001-01-16\",\"jenis_kelamin\":\"perempuan\",\"angkatan\":\"2022\",\"province_id\":\"33\",\"regency_id\":\"3315\",\"district_id\":\"3315030\",\"village_id\":\"3315030011\",\"alamat_lengkap\":\"Jl. Mojo Agung, RT01\\/RW03, Dsn. Bendungan\",\"bio\":null,\"profesi\":\"Pelajar\\/Mahasiswa\",\"foto\":\"fithrotin-na-imul-farida2023103017302020231030174731.jpeg\",\"telepon\":\"081295231588\",\"whatsapp\":\"081295231588\",\"status\":null,\"user_id\":335,\"created_at\":\"2023-10-30 17:30:20\",\"updated_at\":\"2024-09-27 10:14:53\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3988',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-02 14:23:05',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":335,\"name\":\"admin media\",\"email\":\"guru2@gmail.com\",\"foto\":\"fithrotin-na-imul-farida2023103017302020231030174731.jpeg\",\"username\":\"fithrotinnaimulfarida\",\"email_verified_at\":null,\"password\":\"$2y$10$j6XRw9hz6hF5kqp5Z4rT\\/uvsv\\/OMSAj66R0qzJqGfHGu0\\/2ifc1Oe\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2023-10-30 17:30:20\",\"updated_at\":\"2024-11-02 14:22:45\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3989',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-02 14:23:05',
            'table_name' => 'anggotas',
            'log_type' => 'edit',
            'data' => '{\"id\":310,\"nomor_anggota\":null,\"nama\":\"admin media\",\"tanggal_lahir\":\"2001-01-16\",\"jenis_kelamin\":\"perempuan\",\"angkatan\":\"2022\",\"province_id\":\"33\",\"regency_id\":\"3315\",\"district_id\":\"3315030\",\"village_id\":\"3315030011\",\"alamat_lengkap\":\"Jl. Mojo Agung, RT01\\/RW03, Dsn. Bendungan\",\"bio\":null,\"profesi\":\"Pelajar\\/Mahasiswa\",\"foto\":\"fithrotin-na-imul-farida2023103017302020231030174731.jpeg\",\"telepon\":\"081295231588\",\"whatsapp\":\"081295231588\",\"status\":null,\"user_id\":335,\"created_at\":\"2023-10-30 17:30:20\",\"updated_at\":\"2024-11-02 14:22:45\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3990',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-02 14:25:36',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":1,\"name\":\"MUHAMMAD MAS\'UD\",\"email\":\"muhammadsmas998@gmail.com\",\"foto\":\"muhammadmasud20231027224600.jpeg\",\"username\":\"muhammadmasud\",\"email_verified_at\":null,\"password\":\"$2y$10$GklAy8RqHEn4MOpCsM.Qy.ajTNpVtPc6hThaTjF9miYx1xF85zvYi\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":\"IntFCK8rz3msI1Qh05JTkt3iQmINjDRTTjLdDUDlqqsLoPdv0UEiXgGjzyUC\",\"skor\":\"0000000000\",\"created_at\":null,\"updated_at\":\"2023-10-31 15:49:25\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3991',
        ], [
            'user_id' => '335',
            'log_date' => '2024-11-02 14:25:49',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36 Edg\\/130.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3992',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-02 14:28:00',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36 Edg\\/130.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3993',
        ], [
            'user_id' => '335',
            'log_date' => '2024-11-02 14:28:56',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36 Edg\\/130.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3994',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-02 14:39:44',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36 Edg\\/130.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3995',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-02 14:47:12',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":1,\"name\":\"MUHAMMAD MAS\'UD\",\"email\":\"muhammadsmas998@gmail.com\",\"foto\":\"muhammadmasud20231027224600.jpeg\",\"username\":\"muhammadmasud\",\"email_verified_at\":null,\"password\":\"$2y$10$GklAy8RqHEn4MOpCsM.Qy.ajTNpVtPc6hThaTjF9miYx1xF85zvYi\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":\"7n8fammIF4tYsP1lJVwXlOci3FOClAYeRvUcnjHms8Q5HZuB8Tcmv6j7KJ7Q\",\"skor\":\"0000000000\",\"created_at\":null,\"updated_at\":\"2023-10-31 15:49:25\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3996',
        ], [
            'user_id' => '335',
            'log_date' => '2024-11-02 14:47:30',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36 Edg\\/130.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3997',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-04 17:10:19',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36 Edg\\/130.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3998',
        ], [
            'user_id' => '335',
            'log_date' => '2024-11-04 17:27:46',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '3999',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-04 17:29:34',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":345,\"updated_at\":\"2024-11-04T10:29:34.000000Z\",\"created_at\":\"2024-11-04T10:29:34.000000Z\",\"id\":1408}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4000',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-04 17:31:03',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":363,\"updated_at\":\"2024-11-04T10:31:03.000000Z\",\"created_at\":\"2024-11-04T10:31:03.000000Z\",\"id\":1409}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4001',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-04 17:31:03',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":6,\"menu_id\":363,\"updated_at\":\"2024-11-04T10:31:03.000000Z\",\"created_at\":\"2024-11-04T10:31:03.000000Z\",\"id\":1410}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4002',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-04 17:32:00',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":413,\"updated_at\":\"2024-11-04T10:32:00.000000Z\",\"created_at\":\"2024-11-04T10:32:00.000000Z\",\"id\":1411}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4003',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-04 17:32:55',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":389,\"updated_at\":\"2024-11-04T10:32:55.000000Z\",\"created_at\":\"2024-11-04T10:32:55.000000Z\",\"id\":1412}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4004',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-04 17:43:33',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":376,\"name\":\"guru  3\",\"email\":\"guru3@gmail.com\",\"foto\":null,\"username\":\"ahmad20240518123423\",\"email_verified_at\":null,\"password\":\"$2y$10$xBgFMJWU0Es4Q9jM5WunzuyJHhfC4XmyTxzD1bxCwaVi4Q0ZXdhnK\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2024-05-18 12:34:23\",\"updated_at\":\"2024-09-27 10:18:20\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4005',
        ], [
            'user_id' => '376',
            'log_date' => '2024-11-04 17:43:40',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4006',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-04 17:45:59',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":393,\"updated_at\":\"2024-11-04T10:45:59.000000Z\",\"created_at\":\"2024-11-04T10:45:59.000000Z\",\"id\":1413}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4007',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-04 17:45:59',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":6,\"menu_id\":393,\"updated_at\":\"2024-11-04T10:45:59.000000Z\",\"created_at\":\"2024-11-04T10:45:59.000000Z\",\"id\":1414}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4008',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-04 19:41:00',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":417,\"parent_id\":null,\"title\":\"Program Belajar\",\"icon\":\"fas fa-share-alt\",\"route\":\"admin.home.program_pembelajaran\",\"sequence\":54,\"active\":1,\"type\":1,\"created_at\":\"2024-09-27 11:13:30\",\"updated_at\":\"2024-09-27 11:14:45\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4009',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-04 19:41:00',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":417,\"updated_at\":\"2024-11-04T12:41:00.000000Z\",\"created_at\":\"2024-11-04T12:41:00.000000Z\",\"id\":1415}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4010',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-04 19:41:24',
            'table_name' => 'p_menu',
            'log_type' => 'edit',
            'data' => '{\"id\":389,\"parent_id\":null,\"title\":\"Menu kata Motivasi\",\"icon\":null,\"route\":null,\"sequence\":55,\"active\":1,\"type\":1,\"created_at\":\"2022-08-06 14:06:05\",\"updated_at\":\"2024-09-27 11:14:45\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4011',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-04 19:41:24',
            'table_name' => 'p_role_has_menu',
            'log_type' => 'create',
            'data' => '{\"role_id\":1,\"menu_id\":389,\"updated_at\":\"2024-11-04T12:41:24.000000Z\",\"created_at\":\"2024-11-04T12:41:24.000000Z\",\"id\":1416}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4012',
        ], [
            'user_id' => '335',
            'log_date' => '2024-11-04 19:42:55',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4013',
        ], [
            'user_id' => '335',
            'log_date' => '2024-11-04 20:15:09',
            'table_name' => 'social_media',
            'log_type' => 'edit',
            'data' => '{\"id\":5,\"nama\":\"website\",\"icon\":\"website\",\"url\":\"https:\\/\\/mimaariftempursari.my.id\",\"order\":5,\"keterangan\":\"website\",\"status\":1,\"created_at\":\"2024-05-16 12:20:19\",\"updated_at\":\"2024-07-19 23:16:12\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4014',
        ], [
            'user_id' => '335',
            'log_date' => '2024-11-04 20:20:09',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4015',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 12:49:55',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36 Edg\\/130.0.0.0\"}',
        ]);
    }
}
