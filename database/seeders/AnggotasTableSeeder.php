<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggotas')->updateOrInsert([
            'id' => '1',
        ], [
            'nomor_anggota' => '',
            'nama' => 'MUHAMMAD MAS\'UD',
            'tanggal_lahir' => '2003-11-19',
            'jenis_kelamin' => 'laki-laki',
            'angkatan' => '2022',
            'province_id' => '35',
            'regency_id' => '3521',
            'district_id' => '3521160',
            'village_id' => '3521160001',
            'alamat_lengkap' => 'RT 03/ RW 04 Tempursari Barat',
            'bio' => 'https://masudeltamamy.000webhostapp.com/

terus berbuat baikk',
            'profesi' => 'Web-Deb',
            'foto' => 'muhammadmasud20231027224600.jpeg',
            'telepon' => '081225850639',
            'whatsapp' => '85647121046',
            'status' => 'ANGGOTA BIASA',
            'user_id' => '1',
            'created_at' => '2023-02-11 00:40:11',
            'updated_at' => '2024-05-20 22:04:17',
        ]);
        DB::table('anggotas')->updateOrInsert([
            'id' => '307',
        ], [
            'nomor_anggota' => null,
            'nama' => 'Guru 1',
            'tanggal_lahir' => '2003-10-05',
            'jenis_kelamin' => 'perempuan',
            'angkatan' => '2016',
            'province_id' => '33',
            'regency_id' => '3329',
            'district_id' => '3329080',
            'village_id' => '3329080005',
            'alamat_lengkap' => '',
            'bio' => '',
            'profesi' => 'Pelajar/Mahasiswa',
            'foto' => 'nur-kumala2023103017222620240515150554.png',
            'telepon' => '',
            'whatsapp' => '',
            'status' => '',
            'user_id' => '332',
            'created_at' => '2023-10-30 17:22:26',
            'updated_at' => '2024-09-27 10:14:06',
        ]);
        DB::table('anggotas')->updateOrInsert([
            'id' => '310',
        ], [
            'nomor_anggota' => null,
            'nama' => 'admin media',
            'tanggal_lahir' => '2001-01-16',
            'jenis_kelamin' => 'perempuan',
            'angkatan' => '2022',
            'province_id' => '33',
            'regency_id' => '3315',
            'district_id' => '3315030',
            'village_id' => '3315030011',
            'alamat_lengkap' => 'Jl. Mojo Agung, RT01/RW03, Dsn. Bendungan',
            'bio' => '',
            'profesi' => 'Pelajar/Mahasiswa',
            'foto' => 'fithrotinnaimulfarida20241102142305.PNG',
            'telepon' => '081295231588',
            'whatsapp' => '081295231588',
            'status' => '',
            'user_id' => '335',
            'created_at' => '2023-10-30 17:30:20',
            'updated_at' => '2024-11-02 14:23:05',
        ]);
        DB::table('anggotas')->updateOrInsert([
            'id' => '314',
        ], [
            'nomor_anggota' => null,
            'nama' => 'Dosen 1',
            'tanggal_lahir' => '2004-02-10',
            'jenis_kelamin' => 'laki-laki',
            'angkatan' => '2022',
            'province_id' => '33',
            'regency_id' => '3374',
            'district_id' => '3374010',
            'village_id' => '3374010008',
            'alamat_lengkap' => 'Perum Mijen Harmony Blok C-5',
            'bio' => 'Hidup mengikuti alur',
            'profesi' => '',
            'foto' => 'dosen120240518083421.jpg',
            'telepon' => '082136732580',
            'whatsapp' => '82136732586',
            'status' => '',
            'user_id' => '339',
            'created_at' => '2023-10-31 12:05:39',
            'updated_at' => '2024-05-18 08:34:21',
        ]);
        DB::table('anggotas')->updateOrInsert([
            'id' => '350',
        ], [
            'nomor_anggota' => null,
            'nama' => 'guru  3',
            'tanggal_lahir' => '2024-02-13',
            'jenis_kelamin' => '',
            'angkatan' => '2021',
            'province_id' => '33',
            'regency_id' => '3374',
            'district_id' => '3374010',
            'village_id' => '3374010008',
            'alamat_lengkap' => '',
            'bio' => '',
            'profesi' => '',
            'foto' => '',
            'telepon' => '081225850639',
            'whatsapp' => '2323242545',
            'status' => '',
            'user_id' => '376',
            'created_at' => '2024-05-18 12:34:23',
            'updated_at' => '2024-09-27 10:18:20',
        ]);
        DB::table('anggotas')->updateOrInsert([
            'id' => '351',
        ], [
            'nomor_anggota' => null,
            'nama' => 'muhammad mas\'udin',
            'tanggal_lahir' => '2024-02-13',
            'jenis_kelamin' => '',
            'angkatan' => '2021',
            'province_id' => '33',
            'regency_id' => '3374',
            'district_id' => '3374010',
            'village_id' => '3374010008',
            'alamat_lengkap' => '',
            'bio' => '',
            'profesi' => '',
            'foto' => '',
            'telepon' => '081225850639',
            'whatsapp' => '085532342547',
            'status' => '',
            'user_id' => '381',
            'created_at' => '2024-05-18 13:04:08',
            'updated_at' => '2024-05-18 13:04:08',
        ]);
        DB::table('anggotas')->updateOrInsert([
            'id' => '352',
        ], [
            'nomor_anggota' => null,
            'nama' => 'Keaktifan sangat bagus',
            'tanggal_lahir' => '2024-02-13',
            'jenis_kelamin' => '',
            'angkatan' => '2021',
            'province_id' => '33',
            'regency_id' => '3374',
            'district_id' => '3374010',
            'village_id' => '3374010008',
            'alamat_lengkap' => '',
            'bio' => '',
            'profesi' => '',
            'foto' => '',
            'telepon' => '0852673889',
            'whatsapp' => '085232434343',
            'status' => '',
            'user_id' => '386',
            'created_at' => '2024-05-25 22:07:00',
            'updated_at' => '2024-05-25 22:07:00',
        ]);
    }
}
