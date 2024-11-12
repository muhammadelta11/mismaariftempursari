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
        DB::table('logs')->updateOrInsert([
            'id' => '4016',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:39:30',
            'table_name' => '',
            'log_type' => 'login',
            'data' => '{\"ip\":\"127.0.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/130.0.0.0 Safari\\/537.36 Edg\\/130.0.0.0\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4017',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:40:30',
            'table_name' => 'contact_messages',
            'log_type' => 'delete',
            'data' => '{\"id\":7,\"nama\":\"Muhammad Mas\'ud\",\"email\":\"muhammadsmas998@gmail.com\",\"message\":\"es teh 1\",\"status\":null,\"created_at\":\"2024-06-14 19:23:39\",\"updated_at\":\"2024-06-14 19:23:39\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4018',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:40:35',
            'table_name' => 'contact_messages',
            'log_type' => 'delete',
            'data' => '{\"id\":6,\"nama\":\"telo\",\"email\":\"azis@gmail.com\",\"message\":\"pye kabare\",\"status\":null,\"created_at\":\"2024-06-14 18:47:51\",\"updated_at\":\"2024-06-14 18:47:51\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4019',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:45:57',
            'table_name' => 'anggotas',
            'log_type' => 'delete',
            'data' => '{\"id\":352,\"nomor_anggota\":null,\"nama\":\"Keaktifan sangat bagus\",\"tanggal_lahir\":null,\"jenis_kelamin\":null,\"angkatan\":\"2021\",\"province_id\":null,\"regency_id\":null,\"district_id\":null,\"village_id\":null,\"alamat_lengkap\":null,\"bio\":null,\"profesi\":null,\"foto\":null,\"telepon\":\"0852673889\",\"whatsapp\":\"085232434343\",\"status\":null,\"user_id\":386,\"created_at\":\"2024-05-25 22:07:00\",\"updated_at\":\"2024-05-25 22:07:00\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4020',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:45:57',
            'table_name' => 'users',
            'log_type' => 'delete',
            'data' => '{\"id\":386,\"name\":\"Keaktifan sangat bagus\",\"email\":\"fansntki@gmail.com\",\"foto\":null,\"username\":\"keaktifan-sangat-bagus20240525220700\",\"email_verified_at\":null,\"password\":\"$2y$10$nZYEQ\\/wwsRKu\\/V0npaBJZePQSzkhGegjOpuS6I6tppY3Wlo0bUMwe\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2024-05-25 22:07:00\",\"updated_at\":\"2024-05-25 22:07:00\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4021',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:46:08',
            'table_name' => 'anggotas',
            'log_type' => 'delete',
            'data' => '{\"id\":351,\"nomor_anggota\":null,\"nama\":\"muhammad mas\'udin\",\"tanggal_lahir\":null,\"jenis_kelamin\":null,\"angkatan\":\"2021\",\"province_id\":null,\"regency_id\":null,\"district_id\":null,\"village_id\":null,\"alamat_lengkap\":null,\"bio\":null,\"profesi\":null,\"foto\":null,\"telepon\":\"081225850639\",\"whatsapp\":\"085532342547\",\"status\":null,\"user_id\":381,\"created_at\":\"2024-05-18 13:04:08\",\"updated_at\":\"2024-05-18 13:04:08\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4022',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:46:08',
            'table_name' => 'users',
            'log_type' => 'delete',
            'data' => '{\"id\":381,\"name\":\"muhammad mas\'udin\",\"email\":\"smas998@gmail.com\",\"foto\":null,\"username\":\"muhammad-mas-udin20240518130407\",\"email_verified_at\":null,\"password\":\"$2y$10$7IqDm9T6R6PgbX73NuIAQO4p4CPN79m1hrVki5hqxAVPM35oGqvTe\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2024-05-18 13:04:07\",\"updated_at\":\"2024-05-18 13:04:07\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4023',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:46:13',
            'table_name' => 'anggotas',
            'log_type' => 'delete',
            'data' => '{\"id\":307,\"nomor_anggota\":null,\"nama\":\"Guru 1\",\"tanggal_lahir\":\"2003-10-05\",\"jenis_kelamin\":\"perempuan\",\"angkatan\":\"2016\",\"province_id\":\"33\",\"regency_id\":\"3329\",\"district_id\":\"3329080\",\"village_id\":\"3329080005\",\"alamat_lengkap\":null,\"bio\":null,\"profesi\":\"Pelajar\\/Mahasiswa\",\"foto\":\"nur-kumala2023103017222620240515150554.png\",\"telepon\":null,\"whatsapp\":null,\"status\":null,\"user_id\":332,\"created_at\":\"2023-10-30 17:22:26\",\"updated_at\":\"2024-09-27 10:14:06\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4024',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:46:13',
            'table_name' => 'users',
            'log_type' => 'delete',
            'data' => '{\"id\":332,\"name\":\"Guru 1\",\"email\":\"guru1@gmail.com\",\"foto\":\"nur-kumala2023103017222620240515150554.png\",\"username\":\"ahmadnurazis\",\"email_verified_at\":null,\"password\":\"$2y$10$mBFR5DyNZEqrrC4KohC5\\/.FxsKVc.VwkcCN46.sD1KxeX7iRQBipe\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2023-10-30 17:22:26\",\"updated_at\":\"2024-09-27 10:14:06\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4025',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:46:19',
            'table_name' => 'anggotas',
            'log_type' => 'delete',
            'data' => '{\"id\":350,\"nomor_anggota\":null,\"nama\":\"guru  3\",\"tanggal_lahir\":\"2024-02-13\",\"jenis_kelamin\":null,\"angkatan\":\"2021\",\"province_id\":null,\"regency_id\":null,\"district_id\":null,\"village_id\":null,\"alamat_lengkap\":null,\"bio\":null,\"profesi\":null,\"foto\":null,\"telepon\":\"081225850639\",\"whatsapp\":\"2323242545\",\"status\":null,\"user_id\":376,\"created_at\":\"2024-05-18 12:34:23\",\"updated_at\":\"2024-09-27 10:18:20\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4026',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:46:19',
            'table_name' => 'users',
            'log_type' => 'delete',
            'data' => '{\"id\":376,\"name\":\"guru  3\",\"email\":\"guru3@gmail.com\",\"foto\":null,\"username\":\"ahmad20240518123423\",\"email_verified_at\":null,\"password\":\"$2y$10$b45R3Mw0u\\/5Jdegq5SOFsukNewMckFu04hJZDnp4pxNAv.vIUb8VS\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2024-05-18 12:34:23\",\"updated_at\":\"2024-11-04 17:43:33\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4027',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:47:08',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":335,\"name\":\"admin media\",\"email\":\"guru2@gmail.com\",\"foto\":\"fithrotinnaimulfarida20241102142305.PNG\",\"username\":\"fithrotinnaimulfarida\",\"email_verified_at\":null,\"password\":\"$2y$10$j6XRw9hz6hF5kqp5Z4rT\\/uvsv\\/OMSAj66R0qzJqGfHGu0\\/2ifc1Oe\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2023-10-30 17:30:20\",\"updated_at\":\"2024-11-02 14:23:05\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4028',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:47:20',
            'table_name' => 'anggota_kontaks',
            'log_type' => 'edit',
            'data' => '{\"id\":141,\"jenis_id\":5,\"anggota_id\":310,\"nilai\":\"@neit_am7\",\"created_at\":\"2023-10-30 17:37:15\",\"updated_at\":\"2023-10-30 17:37:15\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4029',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:47:29',
            'table_name' => 'anggota_pengalaman_organisasis',
            'log_type' => 'delete',
            'data' => '{\"id\":59,\"nama\":\"HMJTI\",\"dari\":\"2022\",\"sampai\":\"2023\",\"jabatan\":\"Bendahara II\",\"keterangan\":null,\"anggota_id\":310,\"created_at\":\"2023-10-30 17:40:22\",\"updated_at\":\"2023-10-30 17:40:22\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4030',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:48:00',
            'table_name' => 'anggotas',
            'log_type' => 'edit',
            'data' => '{\"id\":310,\"nomor_anggota\":null,\"nama\":\"admin media\",\"tanggal_lahir\":\"2001-01-16\",\"jenis_kelamin\":\"perempuan\",\"angkatan\":\"2022\",\"province_id\":\"33\",\"regency_id\":\"3315\",\"district_id\":\"3315030\",\"village_id\":\"3315030011\",\"alamat_lengkap\":\"Jl. Mojo Agung, RT01\\/RW03, Dsn. Bendungan\",\"bio\":null,\"profesi\":\"Pelajar\\/Mahasiswa\",\"foto\":\"fithrotinnaimulfarida20241102142305.PNG\",\"telepon\":\"081295231588\",\"whatsapp\":\"081295231588\",\"status\":null,\"user_id\":335,\"created_at\":\"2023-10-30 17:30:20\",\"updated_at\":\"2024-11-02 14:23:05\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4031',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:48:19',
            'table_name' => 'anggotas',
            'log_type' => 'edit',
            'data' => '{\"id\":310,\"nomor_anggota\":null,\"nama\":\"admin media\",\"tanggal_lahir\":\"2001-01-16\",\"jenis_kelamin\":\"perempuan\",\"angkatan\":\"2022\",\"province_id\":\"33\",\"regency_id\":\"3315\",\"district_id\":\"3315030\",\"village_id\":\"3315030011\",\"alamat_lengkap\":\"Jl. Mojo Agung, RT01\\/RW03, Dsn. Bendungan\",\"bio\":null,\"profesi\":\"admin\",\"foto\":\"fithrotinnaimulfarida20241102142305.PNG\",\"telepon\":\"081295231588\",\"whatsapp\":\"081295231588\",\"status\":null,\"user_id\":335,\"created_at\":\"2023-10-30 17:30:20\",\"updated_at\":\"2024-11-11 20:48:00\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4032',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:48:35',
            'table_name' => 'anggotas',
            'log_type' => 'edit',
            'data' => '{\"id\":310,\"nomor_anggota\":null,\"nama\":\"admin media\",\"tanggal_lahir\":\"2001-01-16\",\"jenis_kelamin\":\"perempuan\",\"angkatan\":\"2022\",\"province_id\":\"33\",\"regency_id\":\"3315\",\"district_id\":\"3315030\",\"village_id\":\"3315030011\",\"alamat_lengkap\":\"Jl. Mojo Agung, RT01\\/RW03, Dsn. Bendungan\",\"bio\":null,\"profesi\":\"Web-Deb\",\"foto\":\"fithrotinnaimulfarida20241102142305.PNG\",\"telepon\":\"081295231588\",\"whatsapp\":\"081295231588\",\"status\":null,\"user_id\":335,\"created_at\":\"2023-10-30 17:30:20\",\"updated_at\":\"2024-11-11 20:48:19\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4033',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 20:55:34',
            'table_name' => 'pengurus_periodes',
            'log_type' => 'edit',
            'data' => '{\"id\":4,\"nama\":\"Periode 2024\",\"foto\":\"iconperiode-2020240513093221.png\",\"dari\":\"2024\",\"sampai\":\"2025\",\"slug\":\"periode-2024\",\"slogan\":\"Go To Up Level\",\"visi\":\"<div>\\r\\n<div>Madrasah Kami memiliki visi untuk mewujudkan generasi robbani, berprestasi dan berwawasan lingkungan. Melalui visi terebut, segenap elemen madrasah berusaha sekuat tenaga untuk ambil bagian dalam membangun generasi bangsa saat ini supaya memiliki keterampilan abad 21 (citical thingking, creative, inovative, and communicative) dengan fondasi keimanan dan ketaqwaan kepada Allah SWT.<\\/div>\\r\\n<\\/div>\\n\",\"misi\":\"<ol>\\r\\n<li>Dengan penuh kesadaran bahwa sepuluh hingga dua puluh tahun ke depan, para pemimpin bangsa ditentukan dari generasi saat ini, maka MA ULUMUL QUR\'AN KOTA SERANG diharapkan selalu melahirkan generasi berkarakter Islami yang kuat, berwawasan luas, terampil dan memiliki kepedulian yang tinggi terhadap kelestarian lingkungan..<\\/li>\\r\\n<\\/ol>\\n\",\"filosofi_logo\":\"<p>Lingkaran Dunia Teknologi<\\/p>\\n\",\"status\":1,\"created_at\":\"2023-11-14 13:40:53\",\"updated_at\":\"2024-07-21 19:40:11\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4034',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:12:04',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":3,\"parent_id\":2,\"title\":\"Tentang Kami\",\"icon\":null,\"route\":\"tentang.sejarah\",\"sequence\":3,\"active\":1,\"type\":1,\"created_at\":\"2022-08-20 14:30:59\",\"updated_at\":\"2024-10-19 22:26:19\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4035',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:13:25',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":11,\"parent_id\":7,\"title\":\"Pengembangan Aparatur Organisasi\",\"icon\":null,\"route\":\"__base_url__\\/tentang\\/kepengurusan\\/bidang\\/2022-2023-pengembangan-aparatur-organisasi\",\"sequence\":11,\"active\":0,\"type\":1,\"created_at\":\"2022-08-20 14:34:52\",\"updated_at\":\"2023-02-18 06:37:57\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4036',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:13:43',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":12,\"parent_id\":7,\"title\":\"Pengembangan Kode Etik dan Akhlakul Karimah\",\"icon\":null,\"route\":\"__base_url__\\/tentang\\/kepengurusan\\/bidang\\/2022-2023-pengembangan-kode-etik-dan-akhlakul-karimah\",\"sequence\":12,\"active\":1,\"type\":1,\"created_at\":\"2022-08-20 14:34:52\",\"updated_at\":\"2023-10-30 16:38:06\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4037',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:13:43',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":11,\"parent_id\":7,\"title\":\"Pengembangan Aparatur Organisasi\",\"icon\":null,\"route\":\"__base_url__\\/tentang\\/kepengurusan\\/bidang\\/2022-2023-pengembangan-aparatur-organisasi\",\"sequence\":11,\"active\":0,\"type\":0,\"created_at\":\"2022-08-20 14:34:52\",\"updated_at\":\"2024-11-11 21:13:25\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4038',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:14:21',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":11,\"parent_id\":null,\"title\":\"Pengembangan Aparatur Organisasi\",\"icon\":null,\"route\":\"__base_url__\\/tentang\\/kepengurusan\\/bidang\\/2022-2023-pengembangan-aparatur-organisasi\",\"sequence\":12,\"active\":0,\"type\":0,\"created_at\":\"2022-08-20 14:34:52\",\"updated_at\":\"2024-11-11 21:13:43\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4039',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:14:41',
            'table_name' => 'p_menu_frontends',
            'log_type' => 'edit',
            'data' => '{\"id\":11,\"parent_id\":null,\"title\":\"Pengembangan Aparatur Organisasi\",\"icon\":null,\"route\":\"__base_url__\\/tentang\\/kepengurusan\\/bidang\\/2022-2023-pengembangan-aparatur-organisasi\",\"sequence\":12,\"active\":0,\"type\":1,\"created_at\":\"2022-08-20 14:34:52\",\"updated_at\":\"2024-11-11 21:14:21\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4040',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:19:39',
            'table_name' => 'pengurus_anggotas',
            'log_type' => 'delete',
            'data' => '{\"id\":258,\"jabatan_id\":135,\"anggota_id\":1,\"created_at\":\"2024-05-15 15:13:27\",\"updated_at\":\"2024-05-15 15:13:27\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4041',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:19:39',
            'table_name' => 'pengurus_anggotas',
            'log_type' => 'create',
            'data' => '{\"anggota_id\":\"314\",\"jabatan_id\":\"135\",\"updated_at\":\"2024-11-11T14:19:39.000000Z\",\"created_at\":\"2024-11-11T14:19:39.000000Z\",\"id\":267}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4042',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:19:59',
            'table_name' => 'pengurus_anggotas',
            'log_type' => 'delete',
            'data' => '{\"id\":267,\"jabatan_id\":135,\"anggota_id\":314,\"created_at\":\"2024-11-11 21:19:39\",\"updated_at\":\"2024-11-11 21:19:39\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4043',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:19:59',
            'table_name' => 'pengurus_anggotas',
            'log_type' => 'create',
            'data' => '{\"anggota_id\":\"314\",\"jabatan_id\":\"135\",\"updated_at\":\"2024-11-11T14:19:59.000000Z\",\"created_at\":\"2024-11-11T14:19:59.000000Z\",\"id\":268}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4044',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:22:09',
            'table_name' => 'pengurus_jabatans',
            'log_type' => 'edit',
            'data' => '{\"id\":135,\"no_urut\":1,\"nama\":\"Master\",\"slug\":\"2024-2025-master\",\"foto\":\"\",\"singkatan\":null,\"visi\":\"<p>visi<\\/p>\\n\",\"misi\":\"<p>Master<\\/p>\\n\",\"slogan\":null,\"status\":1,\"role_id\":2,\"periode_id\":4,\"parent_id\":null,\"created_at\":\"2023-12-20 17:44:51\",\"updated_at\":\"2024-05-20 21:18:53\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4045',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:23:58',
            'table_name' => 'pengurus_jabatans',
            'log_type' => 'edit',
            'data' => '{\"id\":129,\"no_urut\":2,\"nama\":\"runner up\",\"slug\":\"2024-2025-runner-up\",\"foto\":\"iconrunner-up20240520212611.PNG\",\"singkatan\":\"runner up\",\"visi\":\"<div>&lt;script&gt;\\r\\n<div>document.getElementById(\\\"demo\\\").innerHTML = \\\"Hello JavaScript!\\\";<\\/div>\\r\\n<div>&lt;\\/script&gt;<\\/div>\\r\\n<\\/div>\\n\",\"misi\":\"<p>Raya<\\/p>\\n\",\"slogan\":\"slogan\",\"status\":1,\"role_id\":2,\"periode_id\":4,\"parent_id\":null,\"created_at\":\"2023-11-14 13:43:50\",\"updated_at\":\"2024-05-20 21:26:11\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4046',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:24:45',
            'table_name' => 'pengurus_jabatans',
            'log_type' => 'edit',
            'data' => '{\"id\":131,\"no_urut\":3,\"nama\":\"3rd place\",\"slug\":\"2024-2025-3rd-place\",\"foto\":\"\",\"singkatan\":null,\"visi\":\"<p>Penting nyatet<\\/p>\\n\",\"misi\":\"<p>Mbuh<\\/p>\\n\",\"slogan\":null,\"status\":1,\"role_id\":2,\"periode_id\":4,\"parent_id\":null,\"created_at\":\"2023-12-20 17:40:04\",\"updated_at\":\"2024-05-15 15:11:36\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4047',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:25:26',
            'table_name' => 'pengurus_jabatans',
            'log_type' => 'edit',
            'data' => '{\"id\":133,\"no_urut\":5,\"nama\":\"Bendahara 1\",\"slug\":\"2023-2024-bendahara-1\",\"foto\":\"\",\"singkatan\":\"Duit\",\"visi\":\"\",\"misi\":\"\",\"slogan\":\"Ngepet\",\"status\":1,\"role_id\":2,\"periode_id\":4,\"parent_id\":null,\"created_at\":\"2023-12-20 17:43:06\",\"updated_at\":\"2024-05-15 15:18:04\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4048',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:26:14',
            'table_name' => 'pengurus_jabatans',
            'log_type' => 'create',
            'data' => '{\"parent_id\":null,\"nama\":\"administrator\",\"slug\":\"2024-2025-administrator\",\"status\":\"1\",\"no_urut\":\"9\",\"visi\":\"<p><\\/p>\\n\",\"misi\":\"<p><\\/p>\\n\",\"slogan\":\"smart\",\"singkatan\":\"admin\",\"foto\":\"\",\"periode_id\":\"4\",\"role_id\":\"2\",\"updated_at\":\"2024-11-11T14:26:14.000000Z\",\"created_at\":\"2024-11-11T14:26:14.000000Z\",\"id\":136}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4049',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:26:27',
            'table_name' => 'pengurus_jabatans',
            'log_type' => 'edit',
            'data' => '{\"id\":136,\"no_urut\":9,\"nama\":\"administrator\",\"slug\":\"2024-2025-administrator\",\"foto\":\"\",\"singkatan\":\"admin\",\"visi\":\"<p><\\/p>\\n\",\"misi\":\"<p><\\/p>\\n\",\"slogan\":\"smart\",\"status\":1,\"role_id\":2,\"periode_id\":4,\"parent_id\":null,\"created_at\":\"2024-11-11 21:26:14\",\"updated_at\":\"2024-11-11 21:26:14\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4050',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:27:22',
            'table_name' => 'users',
            'log_type' => 'edit',
            'data' => '{\"id\":339,\"name\":\"Dosen 1\",\"email\":\"dosen@gmail.com\",\"foto\":\"dosen120240518083421.jpg\",\"username\":\"dosen1\",\"email_verified_at\":null,\"password\":\"$2y$10$UTFVQcWWezW\\/DXoIVnFyeuy5J1jhxpIXY8jyydtJL41fPJHsiEEwW\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2023-10-31 12:05:39\",\"updated_at\":\"2024-05-18 11:55:28\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4051',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:27:22',
            'table_name' => 'anggotas',
            'log_type' => 'edit',
            'data' => '{\"id\":314,\"nomor_anggota\":null,\"nama\":\"Dosen 1\",\"tanggal_lahir\":\"2004-02-10\",\"jenis_kelamin\":\"laki-laki\",\"angkatan\":\"2022\",\"province_id\":\"33\",\"regency_id\":\"3374\",\"district_id\":\"3374010\",\"village_id\":\"3374010008\",\"alamat_lengkap\":\"Perum Mijen Harmony Blok C-5\",\"bio\":\"Hidup mengikuti alur\",\"profesi\":null,\"foto\":\"dosen120240518083421.jpg\",\"telepon\":\"082136732580\",\"whatsapp\":\"82136732586\",\"status\":null,\"user_id\":339,\"created_at\":\"2023-10-31 12:05:39\",\"updated_at\":\"2024-05-18 08:34:21\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4052',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:28:20',
            'table_name' => 'anggotas',
            'log_type' => 'edit',
            'data' => '{\"id\":1,\"nomor_anggota\":null,\"nama\":\"MUHAMMAD MAS\'UD\",\"tanggal_lahir\":\"2003-11-19\",\"jenis_kelamin\":\"laki-laki\",\"angkatan\":\"2022\",\"province_id\":\"35\",\"regency_id\":\"3521\",\"district_id\":\"3521160\",\"village_id\":\"3521160001\",\"alamat_lengkap\":\"RT 03\\/ RW 04 Tempursari Barat\",\"bio\":\"https:\\/\\/masudeltamamy.000webhostapp.com\\/\\r\\n\\r\\nterus berbuat baikk\",\"profesi\":\"Web-Deb\",\"foto\":\"muhammadmasud20231027224600.jpeg\",\"telepon\":\"081225850639\",\"whatsapp\":\"85647121046\",\"status\":\"ANGGOTA BIASA\",\"user_id\":1,\"created_at\":\"2023-02-11 00:40:11\",\"updated_at\":\"2024-05-20 22:04:17\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4053',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:30:53',
            'table_name' => 'notif_depan_atas',
            'log_type' => 'create',
            'data' => '{\"nama\":\"pendataan guru\",\"deskripsi\":\"Untuk pendataan awal sistem informasi sekolah\",\"dari\":\"2024-11-11\",\"sampai\":\"2024-12-16\",\"link\":\"http:\\/\\/mimaariftempursari.test\\/pendaftaran\\/sensus\",\"link_nama\":\"pendataan guru\",\"updated_at\":\"2024-11-11T14:30:53.000000Z\",\"created_at\":\"2024-11-11T14:30:53.000000Z\",\"id\":4}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4054',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 21:53:22',
            'table_name' => 'notif_depan_atas',
            'log_type' => 'edit',
            'data' => '{\"id\":4,\"nama\":\"pendataan guru\",\"deskripsi\":\"Untuk pendataan awal sistem informasi sekolah\",\"dari\":\"2024-11-11\",\"sampai\":\"2024-12-16\",\"link\":\"http:\\/\\/mimaariftempursari.test\\/pendaftaran\\/sensus\",\"link_nama\":\"pendataan guru\",\"created_at\":\"2024-11-11 21:30:53\",\"updated_at\":\"2024-11-11 21:30:53\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4055',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 22:20:36',
            'table_name' => 'anggotas',
            'log_type' => 'delete',
            'data' => '{\"id\":314,\"nomor_anggota\":null,\"nama\":\"Guru 1\",\"tanggal_lahir\":\"2004-02-10\",\"jenis_kelamin\":\"laki-laki\",\"angkatan\":\"2022\",\"province_id\":\"33\",\"regency_id\":\"3374\",\"district_id\":\"3374010\",\"village_id\":\"3374010008\",\"alamat_lengkap\":\"Perum Mijen Harmony Blok C-5\",\"bio\":\"Hidup mengikuti alur\",\"profesi\":null,\"foto\":\"dosen120240518083421.jpg\",\"telepon\":\"082136732580\",\"whatsapp\":\"82136732586\",\"status\":null,\"user_id\":339,\"created_at\":\"2023-10-31 12:05:39\",\"updated_at\":\"2024-11-11 21:27:22\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4056',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 22:20:36',
            'table_name' => 'users',
            'log_type' => 'delete',
            'data' => '{\"id\":339,\"name\":\"Guru 1\",\"email\":\"guru@gmail.com\",\"foto\":\"dosen120240518083421.jpg\",\"username\":\"dosen1\",\"email_verified_at\":null,\"password\":\"$2y$10$UTFVQcWWezW\\/DXoIVnFyeuy5J1jhxpIXY8jyydtJL41fPJHsiEEwW\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2023-10-31 12:05:39\",\"updated_at\":\"2024-11-11 21:27:22\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4057',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 22:20:47',
            'table_name' => 'anggotas',
            'log_type' => 'delete',
            'data' => '{\"id\":310,\"nomor_anggota\":null,\"nama\":\"admin media\",\"tanggal_lahir\":\"2001-01-16\",\"jenis_kelamin\":\"perempuan\",\"angkatan\":\"2022\",\"province_id\":\"33\",\"regency_id\":\"3315\",\"district_id\":\"3315030\",\"village_id\":\"3315030011\",\"alamat_lengkap\":\"Jl. Mojo Agung, RT01\\/RW03, Dsn. Bendungan\",\"bio\":null,\"profesi\":\"guru\",\"foto\":\"fithrotinnaimulfarida20241102142305.PNG\",\"telepon\":\"081295231588\",\"whatsapp\":\"081295231588\",\"status\":null,\"user_id\":335,\"created_at\":\"2023-10-30 17:30:20\",\"updated_at\":\"2024-11-11 20:48:35\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4058',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 22:20:47',
            'table_name' => 'users',
            'log_type' => 'delete',
            'data' => '{\"id\":335,\"name\":\"admin media\",\"email\":\"guru2@gmail.com\",\"foto\":\"fithrotinnaimulfarida20241102142305.PNG\",\"username\":\"adminmedia\",\"email_verified_at\":null,\"password\":\"$2y$10$j6XRw9hz6hF5kqp5Z4rT\\/uvsv\\/OMSAj66R0qzJqGfHGu0\\/2ifc1Oe\",\"active\":1,\"two_factor_secret\":null,\"two_factor_recovery_codes\":null,\"two_factor_confirmed_at\":null,\"current_team_id\":null,\"profile_photo_path\":null,\"remember_token\":null,\"skor\":\"0000000000\",\"created_at\":\"2023-10-30 17:30:20\",\"updated_at\":\"2024-11-11 20:47:08\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4059',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 22:57:41',
            'table_name' => 'pengurus_anggotas',
            'log_type' => 'create',
            'data' => '{\"anggota_id\":\"1\",\"jabatan_id\":\"135\",\"updated_at\":\"2024-11-11T15:57:41.000000Z\",\"created_at\":\"2024-11-11T15:57:41.000000Z\",\"id\":269}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4060',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 23:05:34',
            'table_name' => 'artikel',
            'log_type' => 'delete',
            'data' => '{\"id\":49,\"nama\":\"Cara aktivasi Windows 10 100% Permanen\",\"slug\":\"cara-aktivasi-windows-10-100-permanen\",\"foto\":\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-0.png\",\"detail\":\"<header class=\\\"entry-header\\\" aria-label=\\\"Konten\\\">\\r\\n<h1 class=\\\"entry-title\\\">Cara Aktivasi Windows 10 Pro Tanpa Software (100%% Permanen)<\\/h1>\\r\\n<div class=\\\"entry-content\\\">\\r\\n<p>Seperti yang kita ketahui bahwa windows 10 merupakan sistem operasi desktop yang paling populer saat ini, bahkan sudah melangkahi pendahulunya yakni Windows 7 dan 8. Bahkan popularitas Windows 10 sudah menggait 50% pengguna PC di Amerika Serikat, sisanya diisi dengan sistem operasi lain seperti Linux, MacOS dan lain sebagainya.<\\/p>\\r\\n<p>Windows 10 merupakan sistem operasi berbayar dimana anda terlebih dahulu harus membeli lisensinya jika ingin menggunakannya secara maksimal. Maksimal disini, berarti anda bisa menikmati semua fitur-fitur yang ada di Windows 10.<\\/p>\\r\\n<p>Salah satu hal yang cukup menjadi pertimbangan dari Windows 10 adalah dari segi kompatibilitasnya, dimana banyak aplikasi yang ada di Windows 10 ini harus bisa dijalankan pada berbagai jenis perangkat. Jadi tidak hanya dapat&nbsp;<em>running<\\/em>&nbsp;di komputer dan laptop saja, melainkan juga bisa dijalankan di smartphone dan tablet.<\\/p>\\r\\n<p>Hal ini tentu menuntut para pengembang aplikasi harus membuat aplikasi yang responsif dan bisa beradaptasi dengan berbagai macam perangkat yang tentunya memiliki ukuran layar yang berbeda-beda pula. Tidak hanya itu, Systems Requirements untuk menginstall Windows 10 juga tidak terlalu tinggi, minimal laptop atau komputer dengan CPU minimal 1Ghz dan RAM minimal 2GB sudah bisa menjalankan sistem operasi ini.<\\/p>\\r\\n<h2><strong>Cara Aktivasi Windows 10 Tanpa Software<\\/strong><\\/h2>\\r\\n<p>berbeda dengan tutorial kali ini, disini saya akan berbagi cara aktivasi Windows 10 tanpa software. Sebelum itu pastikan anda terhubung dengan internet ya, karena proses aktivasi dilakukan secara online.<\\/p>\\r\\n<div class=\\\"code-block code-block-3\\\">\\r\\n<div class=\\\"adfullwrap\\\"><ins class=\\\"adsbygoogle\\\" data-ad-client=\\\"ca-pub-9775189403999799\\\" data-ad-slot=\\\"5679695412\\\" data-ad-format=\\\"auto\\\" data-full-width-responsive=\\\"true\\\" data-adsbygoogle-status=\\\"done\\\" data-ad-status=\\\"unfilled\\\">\\r\\n<div id=\\\"aswift_2_host\\\" tabindex=\\\"0\\\" title=\\\"Advertisement\\\" aria-label=\\\"Advertisement\\\"><\\/div>\\r\\n<\\/ins><\\/div>\\r\\n<\\/div>\\r\\n<p>1. Klik&nbsp;<strong>tombol Windows<\\/strong>&nbsp;pada keyboard kemudian ketikkan&nbsp;<strong>activation<\\/strong>&nbsp;dan pilih&nbsp;<strong>Activation settings<\\/strong>.<\\/p>\\r\\n<p><img class=\\\"aligncenter wp-image-108344 size-full\\\" src=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-0.png\\\" sizes=\\\"(max-width: 1024px) 100vw, 1024px\\\" srcset=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-0.png 1024w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-0-300x225.png 300w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-0-768x576.png 768w\\\" alt=\\\"Cara Aktivasi Windows 10 Tanpa Software\\\" width=\\\"589\\\" height=\\\"442\\\"><\\/p>\\r\\n<p>2. Setelah itu pilih Activation. Disana akan tertulis Windows is not activated yang berarti bahwa Windows 10 anda belum diaktivasi.<\\/p>\\r\\n<p><img class=\\\"aligncenter wp-image-108345 size-full\\\" src=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-1.png\\\" sizes=\\\"(max-width: 1024px) 100vw, 1024px\\\" srcset=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-1.png 1024w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-1-300x225.png 300w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-1-768x576.png 768w\\\" alt=\\\"Cara Aktivasi Windows 10 Pro Permanen\\\" width=\\\"546\\\" height=\\\"409\\\"><\\/p>\\r\\n<p>3. Selanjutnya klik tombol Windows pada keyboard kemudian ketikkan cmd lalu pilih Run as administrator pada Command Prompt.<\\/p>\\r\\n<p><img class=\\\"aligncenter size-full wp-image-108346\\\" src=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-2.png\\\" sizes=\\\"(max-width: 1024px) 100vw, 1024px\\\" srcset=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-2.png 1024w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-2-300x225.png 300w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-2-768x576.png 768w\\\" alt=\\\"aktivasi windows 10 - Nesabamedia 2\\\" width=\\\"425\\\" height=\\\"319\\\" loading=\\\"lazy\\\"><\\/p>\\r\\n<p>4. Jika muncul jendela notifikasi seperti ini, tinggal pilih Yes.<\\/p>\\r\\n<p><img class=\\\"aligncenter size-full wp-image-108347\\\" src=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-3.png\\\" sizes=\\\"(max-width: 1024px) 100vw, 1024px\\\" srcset=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-3.png 1024w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-3-300x225.png 300w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-3-768x576.png 768w\\\" alt=\\\"aktivasi windows 10 - Nesabamedia 3\\\" width=\\\"487\\\" height=\\\"365\\\" loading=\\\"lazy\\\"><\\/p>\\r\\n<p>5. Kemudian copy-paste &ldquo;slmgr \\/skms kms8.msguides.com&rdquo; kemudian tekan&nbsp;<strong>Enter<\\/strong>.<\\/p>\\r\\n<p><img class=\\\"aligncenter wp-image-108348 size-full\\\" src=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-4.png\\\" sizes=\\\"(max-width: 1024px) 100vw, 1024px\\\" srcset=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-4.png 1024w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-4-300x225.png 300w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-4-768x576.png 768w\\\" alt=\\\"Cara Aktivasi Windows 10 Tanpa Software\\\" width=\\\"617\\\" height=\\\"463\\\" loading=\\\"lazy\\\"><\\/p>\\r\\n<p>6. Nanti akan muncul notifikasi seperti ini, tinggal pilih OK saja.<\\/p>\\r\\n<p><img class=\\\"aligncenter size-full wp-image-108349\\\" src=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-5.png\\\" sizes=\\\"(max-width: 1024px) 100vw, 1024px\\\" srcset=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-5.png 1024w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-5-300x225.png 300w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-5-768x576.png 768w\\\" alt=\\\"aktivasi windows 10 - Nesabamedia 5\\\" width=\\\"540\\\" height=\\\"405\\\" loading=\\\"lazy\\\"><\\/p>\\r\\n<p>7. Kembali ke jendela Activation tadi, kemudian pilih Change product key.<\\/p>\\r\\n<p><img class=\\\"aligncenter size-full wp-image-108350\\\" src=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-6.png\\\" sizes=\\\"(max-width: 1024px) 100vw, 1024px\\\" srcset=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-6.png 1024w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-6-300x225.png 300w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-6-768x576.png 768w\\\" alt=\\\"aktivasi windows 10 - Nesabamedia 6\\\" width=\\\"454\\\" height=\\\"341\\\" loading=\\\"lazy\\\"><\\/p>\\r\\n<div class=\\\"code-block code-block-11\\\">\\r\\n<div class=\\\"adfullwrap\\\"><ins class=\\\"adsbygoogle\\\" data-ad-client=\\\"ca-pub-9775189403999799\\\" data-ad-slot=\\\"7833956517\\\" data-ad-format=\\\"auto\\\" data-full-width-responsive=\\\"true\\\" data-adsbygoogle-status=\\\"done\\\" data-ad-status=\\\"unfilled\\\">\\r\\n<div id=\\\"aswift_3_host\\\" tabindex=\\\"0\\\" title=\\\"Advertisement\\\" aria-label=\\\"Advertisement\\\"><\\/div>\\r\\n<\\/ins><\\/div>\\r\\n<\\/div>\\r\\n<p>8. Kemudian masukkan product key sesuai versi Windows 10 yang digunakan. Pada tutorial ini, saya menggunakan&nbsp;<strong>Windows 10 Pro<\\/strong>. Selanjutnya pilih&nbsp;<strong>Next<\\/strong>.<\\/p>\\r\\n<div class=\\\"nesabanote\\\"><strong>Home:<\\/strong>&nbsp;TX9XD-98N7V-6WMQ6-BX7FG-H8Q99<br><strong>Home N:<\\/strong>&nbsp;3KHY7-WNT83-DGQKR-F7HPR-844BM<br><strong>Home Single Language:<\\/strong>&nbsp;7HNRX-D7KGG-3K4RQ-4WPJ4-YTDFH<br><strong>Home Country Specific:<\\/strong>&nbsp;PVMJN-6DFY6-9CCP6-7BKTT-D3WVR<br><strong>Professional:<\\/strong>&nbsp;W269N-WFGWX-YVC9B-4J6C9-T83GX<br><strong>Professional N:<\\/strong>&nbsp;MH37W-N47XK-V7XM9-C7227-GCQG9<br><strong>Education:<\\/strong>&nbsp;NW6C2-QMPVW-D7KKK-3GKT6-VCFB2<br><strong>Education N:<\\/strong>&nbsp;2WH4N-8QGBV-H22JP-CT43Q-MDWWJ<br><strong>Enterprise:<\\/strong>&nbsp;NPPR9-FWDCX-D2C8J-H872K-2YT43<br><strong>Enterprise N:<\\/strong>&nbsp;DPH2V-TTNVB-4X9Q3-TJR4H-KHJW4<\\/div>\\r\\n<p><img class=\\\"aligncenter size-full wp-image-108351\\\" src=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-7.png\\\" sizes=\\\"(max-width: 1024px) 100vw, 1024px\\\" srcset=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-7.png 1024w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-7-300x225.png 300w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-7-768x576.png 768w\\\" alt=\\\"aktivasi windows 10 - Nesabamedia 7\\\" width=\\\"557\\\" height=\\\"417\\\" loading=\\\"lazy\\\"><\\/p>\\r\\n<p>9. Sekali lagi pastikan anda terhubung di internet ya. Langkah selanjutnya tinggal pilih Activate.<\\/p>\\r\\n<p><img class=\\\"aligncenter size-full wp-image-108352\\\" src=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-8.png\\\" sizes=\\\"(max-width: 1024px) 100vw, 1024px\\\" srcset=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-8.png 1024w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-8-300x225.png 300w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-8-768x576.png 768w\\\" alt=\\\"aktivasi windows 10 - Nesabamedia 8\\\" width=\\\"538\\\" height=\\\"404\\\" loading=\\\"lazy\\\"><\\/p>\\r\\n<p>10. Selamat, Windows 10 anda sudah berhasil diaktivasi. Pada jendela Activation nanti akan muncul tulisan Windows is activated seperti gambar dibawah ini.<\\/p>\\r\\n<p><img class=\\\"aligncenter size-full wp-image-108343\\\" src=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-9.png\\\" sizes=\\\"(max-width: 1024px) 100vw, 1024px\\\" srcset=\\\"https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-9.png 1024w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-9-300x225.png 300w, https:\\/\\/www.nesabamedia.com\\/wp-content\\/uploads\\/2021\\/06\\/aktivasi-windows-10-Nesabamedia-9-768x576.png 768w\\\" alt=\\\"aktivasi windows 10 - Nesabamedia 9\\\" width=\\\"537\\\" height=\\\"403\\\" loading=\\\"lazy\\\"><\\/p>\\r\\n<div class=\\\"nesabanote\\\">\\r\\n<h2><strong>FAQ Seputar Aktivasi Windows 10<\\/strong><\\/h2>\\r\\n<p><em>Mas, saya dapat error 0xC004F074 | Mas, saya gagal aktivasi Windows 10. Apa yang harus dilakukan?<\\/em><\\/p>\\r\\n<p>Error tersebut muncul karena koneksi internet anda tidak stabil atau server sedang sibuk. Untuk mengatasi kegagalan saat aktivasi, bisa dilakukan dengan cara berikut ini:<\\/p>\\r\\n<p>Ulangi langkah&nbsp;<strong>nomor 5<\\/strong>&nbsp;namun perintahnya ubah sedikit menjadi:<\\/p>\\r\\n<p>slmgr \\/skms s9.us.to<\\/p>\\r\\n<p>Kemudian lanjut ke langkah berikutnya. &eth;&Yuml;&trade;&sbquo;<\\/p>\\r\\n<\\/div>\\r\\n<p>Seperti itulah cara aktivasi Windows 10 tanpa software, cukup dengan terhubung koneksi internet, maka Windows 10 anda sudah bisa diaktivasi.<\\/p>\\r\\n<div class=\\\"code-block code-block-4\\\">\\r\\n<div class=\\\"adfullwrap\\\"><ins class=\\\"adsbygoogle\\\" data-ad-client=\\\"ca-pub-9775189403999799\\\" data-ad-slot=\\\"8075846702\\\" data-ad-format=\\\"auto\\\" data-full-width-responsive=\\\"true\\\" data-adsbygoogle-status=\\\"done\\\" data-ad-status=\\\"unfilled\\\">\\r\\n<div id=\\\"aswift_4_host\\\" tabindex=\\\"0\\\" title=\\\"Advertisement\\\" aria-label=\\\"Advertisement\\\"><\\/div>\\r\\n<\\/ins><\\/div>\\r\\n<\\/div>\\r\\n<p>Barangkali anda menemui masalah ketika mempraktekkan cara diatas, jangan lupa untuk bertanya melalui kotak komentar yang telah disediakan. Kalau lagi free, pasti saya akan balas kok. Selamat mencoba!!<\\/p>\\r\\n<\\/div>\\r\\n<\\/header>\\n\",\"excerpt\":\"berikut langkah-langkah aktivasi windows 10\",\"counter\":78,\"date\":\"2024-02-26\",\"status\":1,\"created_at\":\"2024-02-27 20:26:10\",\"updated_at\":\"2024-09-29 15:09:30\",\"user_id\":1}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4061',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 23:05:40',
            'table_name' => 'artikel',
            'log_type' => 'delete',
            'data' => '{\"id\":47,\"nama\":\"Pelantikan Ormawa Universitas wahid Hasyim\",\"slug\":\"pelantikan-ormawa-universitas-wahid-hasyim\",\"foto\":\"\\/assets\\/artikel\\/pelantikan17155211530.png\",\"detail\":\"<p><span style=\\\"vertical-align: inherit;\\\"><span style=\\\"vertical-align: inherit;\\\">Resmi - tanggal 24 Januari 2024 pelantikan Ormawa Fakultas Teknik<\\/span><\\/span><p><strong><span style=\\\"vertical-align: inherit; font-size: 24pt;\\\"><span style=\\\"vertical-align: inherit;\\\">apapun itu yang penting heppy<\\/span><\\/span><\\/strong><\\/p><p><img src=\\\"\\/assets\\/artikel\\/pelantikan17155211530.png\\\" alt=\\\"\\\" width=\\\"288\\\" height=\\\"323\\\"><\\/p><p><span style=\\\"vertical-align: inherit;\\\"><span style=\\\"vertical-align: inherit;\\\">Semarang &ndash; rabu ( 24\\/01 ) Kemarin telah di adakan aca pelantik dan serah terima jabatan Organisasi Mahasiswa Fakultas Teknik ( ORMAWA FT ) UNWAHAS 2022. ORMAWA FT itu sendiri meliputi Dewan Perwakilan Mahasiswa ( DPM FT ), Badan Eksekutif Mahasiswa ( BEM ), Himpunan MahasiswaTeknik Mesin ( HMTM ), Himpunan Mahasiswa, Himpunan Mahasiswa Jurusan Teknik Informatika ( HMJTI ). Dengan di adakan nya aca tercebut Maka berakhirlah Masa jabatan ORMAWA FT 2021 dan memulai masa kepengurusan yang baru untuk ORMAWA FT 2024<\\/span><\\/span><span style=\\\"vertical-align: inherit;\\\"><span style=\\\"vertical-align: inherit;\\\">.<\\/span><\\/span><\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><p>&nbsp;<\\/p><\\/p>\\n\",\"excerpt\":\"Resmi - tanggal 24 Januari 2024 pelantikan Ormawa baru\",\"counter\":72,\"date\":\"2024-01-24\",\"status\":1,\"created_at\":\"2024-01-26 21:01:19\",\"updated_at\":\"2024-05-16 11:04:15\",\"user_id\":1}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4062',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 23:05:43',
            'table_name' => 'artikel',
            'log_type' => 'delete',
            'data' => '{\"id\":55,\"nama\":\"vxcv vxdcdfv\",\"slug\":\"vxcv-vxdcdfv\",\"foto\":null,\"detail\":\"<p>czczdcvxvdvd<\\/p>\\n\",\"excerpt\":\"dfsdsvdfhdxcaewehdfsx\",\"counter\":0,\"date\":\"2024-05-15\",\"status\":1,\"created_at\":\"2024-05-24 16:48:00\",\"updated_at\":\"2024-05-24 16:48:00\",\"user_id\":null}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4063',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 23:05:49',
            'table_name' => 'artikel',
            'log_type' => 'delete',
            'data' => '{\"id\":51,\"nama\":\"coba 1\",\"slug\":\"coba-1\",\"foto\":null,\"detail\":\"<header>\\r\\n<h1>Cara Menampilkan PHP di HTML dan JavaScript<\\/h1>\\r\\n<p>Saat kita membuat situs web menggunakan PHP, kita akan sering menulis kode PHP diantara kode HTML untuk membuat bagian-bagian tertentu di situs web menjadi dinamis.<\\/p><p>Oleh karena itu kita perlu mengetahui bagaimana interpreter PHP mengevaluasi kode PHP kita dan bagaimana kode PHP dikirim ke browser.<\\/p><p>Dengan mengikuti panduan ini, kita diharapkan dapat menulis kode PHP di file HTML atau sebaliknya, ataupun memanggil variabel PHP ke JavaScript untuk diolah di browser, entah itu variabel dengan tipe data sederhana seperti string atau angka maupun yang kompleks seperti array.<\\/p><p>Berikut beberapa topik yang akan kita bahas.<\\/p><ol>\\r\\n<li><a href=\\\"https:\\/\\/kodealgo.com\\/php\\/php-di-html\\/#cara-menyisipkan-kode-php-diantara-html-file-php\\\">Cara Menyisipkan Kode PHP Diantara HTML (file PHP)<\\/a><\\/li>\\r\\n<li><a href=\\\"https:\\/\\/kodealgo.com\\/php\\/php-di-html\\/#cara-menyisipkan-kode-php-di-file-html\\\">Cara Menyisipkan Kode PHP di File HTML<\\/a><\\/li>\\r\\n<li><a href=\\\"https:\\/\\/kodealgo.com\\/php\\/php-di-html\\/#cara-memanggil-variabel-php-di-javascript\\\">Cara Memanggil Variabel PHP di JavaScript<\\/a><\\/li>\\r\\n<\\/ol><h2 id=\\\"cara-menyisipkan-kode-php-diantara-html-file-php\\\">Cara Menyisipkan Kode PHP Diantara HTML (file PHP)<\\/h2><p>Untuk menyisipkan kode PHP diantara kode HTML di dalam file PHP, kita hanya perlu menggunakan tag pembuka (<code>&lt;?php<\\/code>) dan penutup (<code>?&gt;<\\/code>) PHP untuk memberitahu interpreter bahwa kode tersebut adalah kode PHP dan perlu dievaluasi di server.<\\/p><p>Mari kita buat file&nbsp;<code>index.php<\\/code>, setelah itu salin kode di bawah ini dan jalankan menggunakan web server.<\\/p><pre class=\\\"language-php\\\"><code>&lt;!DOCTYPE html&gt;\\r\\n&lt;html &gt;\\r\\n&lt;head&gt;\\r\\n  &lt;title&gt;Belajar PHP&lt;\\/title&gt;\\r\\n&lt;\\/head&gt;\\r\\n&lt;body&gt;\\r\\n  &lt;h1&gt;\\r\\n    &lt;?php echo \\\"Hello World \\\", 1 + 1; ?&gt;\\r\\n  &lt;\\/h1&gt;\\r\\n&lt;\\/body&gt;\\r\\n&lt;\\/html&gt;\\r\\n<\\/code><\\/pre><p>Setelah web server berjalan silakan lihat di browser, kemudian tekan&nbsp;<strong>Ctr<\\/strong>&nbsp;+&nbsp;<strong>U<\\/strong>&nbsp;untuk melihat kode HTML yang dikirim dari server. Kurang lebih akan terlihat seperti berikut.<\\/p><pre class=\\\"language-text\\\"><code>&lt;!DOCTYPE html&gt;\\r\\n&lt;html&gt;\\r\\n  &lt;head&gt;\\r\\n    &lt;title&gt;Belajar PHP&lt;\\/title&gt;\\r\\n  &lt;\\/head&gt;\\r\\n  &lt;body&gt;\\r\\n    &lt;h1&gt;Hello World 2&lt;\\/h1&gt;\\r\\n  &lt;\\/body&gt;\\r\\n&lt;\\/html&gt;\\r\\n<\\/code><\\/pre><p>Perhatikan teks di baris 7 yang berada tepat diantara tag&nbsp;<code>h1<\\/code>, dari&nbsp;<code>&lt;?php echo \\\"Hello World \\\", 1 + 1; ?&gt;<\\/code>&nbsp;berubah menjadi&nbsp;<code>Hello World 2<\\/code>.<\\/p><p>Mengapa bisa begitu? Karena kita telah memberitahu interpreter bahwa kode tersebut adalah kode PHP dengan menambahkan tag pembuka dan penutup diantara kode PHP, sehingga interpreter mengevaluasi kode tersebut.<\\/p><p>Setelah itu browser akan memparsing hasilnya sehingga ditmapilkan dengan benar kepada pengguna situs web kita, karena teks tersebut berada diantara tag&nbsp;<code>h1<\\/code> maka akan terlihat besar karena itu adalah gaya default yang diberikan browser.<\\/p><\\/header>\\n\",\"excerpt\":\"artikel saya\",\"counter\":1,\"date\":\"2024-05-20\",\"status\":1,\"created_at\":\"2024-05-20 12:07:50\",\"updated_at\":\"2024-05-20 12:08:46\",\"user_id\":null}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4064',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 23:05:53',
            'table_name' => 'artikel',
            'log_type' => 'delete',
            'data' => '{\"id\":58,\"nama\":\"gdfghdfg\",\"slug\":\"gdfghdfg\",\"foto\":null,\"detail\":\"<p>sdrfgysedr<\\/p>\\n\",\"excerpt\":\"gdfghdfs\",\"counter\":0,\"date\":\"2024-05-23\",\"status\":1,\"created_at\":\"2024-05-24 16:51:18\",\"updated_at\":\"2024-05-24 16:51:18\",\"user_id\":null}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4065',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-11 23:06:07',
            'table_name' => 'artikel',
            'log_type' => 'delete',
            'data' => '{\"id\":57,\"nama\":\"dfgdfgdg\",\"slug\":\"dfgdfgdg\",\"foto\":null,\"detail\":\"<p>zsdfvxsdfsx<\\/p>\\n\",\"excerpt\":\"fgdfsg\",\"counter\":87,\"date\":\"2024-05-24\",\"status\":1,\"created_at\":\"2024-05-24 16:50:52\",\"updated_at\":\"2024-11-11 20:38:45\",\"user_id\":null}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4066',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-12 00:03:02',
            'table_name' => 'users',
            'log_type' => 'create',
            'data' => '{\"name\":\"Risa Rosyidah\",\"email\":\"risarosyidah@gmail.com\",\"username\":\"risa-rosyidah20241112000302\",\"active\":1,\"updated_at\":\"2024-11-11T17:03:02.000000Z\",\"created_at\":\"2024-11-11T17:03:02.000000Z\",\"id\":387,\"profile_photo_url\":\"https:\\/\\/ui-avatars.com\\/api\\/?name=R+R&color=7F9CF5&background=EBF4FF\"}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4067',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-12 00:03:03',
            'table_name' => 'anggotas',
            'log_type' => 'create',
            'data' => '{\"nama\":\"Risa Rosyidah\",\"angkatan\":\"2010\",\"telepon\":\"081257273977\",\"whatsapp\":\"08453423345\",\"user_id\":387,\"updated_at\":\"2024-11-11T17:03:03.000000Z\",\"created_at\":\"2024-11-11T17:03:03.000000Z\",\"id\":353}',
        ]);
        DB::table('logs')->updateOrInsert([
            'id' => '4068',
        ], [
            'user_id' => '1',
            'log_date' => '2024-11-12 00:03:03',
            'table_name' => 'pend_sensus',
            'log_type' => 'create',
            'data' => '{\"nama\":\"Risa Rosyidah\",\"angkatan\":\"2010\",\"email\":\"risarosyidah@gmail.com\",\"whatsapp\":\"08453423345\",\"telepon\":\"081257273977\",\"status\":2,\"keterangan\":\"Sudah dijadikan pengguna dengan email: risarosyidah@gmail.com dan password: 1223816388\",\"updated_at\":\"2024-11-11T17:03:03.000000Z\",\"created_at\":\"2024-11-11T17:03:03.000000Z\",\"id\":8}',
        ]);
    }
}
