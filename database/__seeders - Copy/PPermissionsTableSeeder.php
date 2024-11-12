<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PPermissionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('p_permissions')->updateOrInsert([
            'id' => '1',
            'name' => "admin.dashboard",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '2',
            'name' => "admin.user",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '3',
            'name' => "admin.user.excel",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '4',
            'name' => "admin.user.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-06 16:14:59",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '5',
            'name' => "admin.user.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '6',
            'name' => "admin.user.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '7',
            'name' => "admin.address.province",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '9',
            'name' => "admin.address.province.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-06 23:52:49",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '10',
            'name' => "admin.address.province.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '11',
            'name' => "admin.address.province.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '12',
            'name' => "admin.address.regencie",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '14',
            'name' => "admin.address.regencie.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-06 23:53:26",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '15',
            'name' => "admin.address.regencie.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '16',
            'name' => "admin.address.regencie.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '17',
            'name' => "admin.address.district",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2023-10-21 22:32:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '19',
            'name' => "admin.address.district.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-06 23:53:54",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '20',
            'name' => "admin.address.district.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-06 23:53:49",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '21',
            'name' => "admin.address.district.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '22',
            'name' => "admin.address.village",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '24',
            'name' => "admin.address.village.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-06 23:54:04",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '25',
            'name' => "admin.address.village.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '26',
            'name' => "admin.address.village.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '27',
            'name' => "admin.artikel.data",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '30',
            'name' => "admin.artikel.data.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '31',
            'name' => "admin.artikel.data.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '32',
            'name' => "admin.artikel.data.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '33',
            'name' => "admin.artikel.kategori",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '35',
            'name' => "admin.artikel.kategori.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '36',
            'name' => "admin.artikel.kategori.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '37',
            'name' => "admin.artikel.kategori.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '38',
            'name' => "admin.artikel.tag",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '40',
            'name' => "admin.artikel.tag.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '41',
            'name' => "admin.artikel.tag.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '42',
            'name' => "admin.artikel.tag.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '43',
            'name' => "admin.pengurus.periode",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '46',
            'name' => "admin.pengurus.periode.active",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '47',
            'name' => "admin.pengurus.periode.member",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '48',
            'name' => "admin.pengurus.periode.detail",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '49',
            'name' => "admin.pengurus.periode.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '50',
            'name' => "admin.pengurus.periode.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '51',
            'name' => "admin.pengurus.periode.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '54',
            'name' => "admin.pengurus.jabatan.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '55',
            'name' => "admin.pengurus.jabatan",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '56',
            'name' => "admin.pengurus.jabatan.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '57',
            'name' => "admin.pengurus.jabatan.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '59',
            'name' => "admin.pengurus.jabatan.member",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:42",
            'updated_at' => "2022-08-04 16:05:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '60',
            'name' => "admin.pengurus.jabatan.member.save",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-06 21:31:08",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '61',
            'name' => "admin.galeri",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '63',
            'name' => "admin.galeri.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '64',
            'name' => "admin.galeri.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '65',
            'name' => "admin.galeri.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '66',
            'name' => "admin.social_media",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '67',
            'name' => "admin.social_media.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '68',
            'name' => "admin.social_media.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '69',
            'name' => "admin.social_media.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '70',
            'name' => "admin.contact",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '71',
            'name' => "admin.contact.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '72',
            'name' => "admin.contact.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '73',
            'name' => "admin.contact.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '74',
            'name' => "admin.footer_instagram",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '75',
            'name' => "admin.footer_instagram.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '76',
            'name' => "admin.footer_instagram.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '77',
            'name' => "admin.footer_instagram.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '78',
            'name' => "admin.profile.pendidikan_jenis",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '79',
            'name' => "admin.profile.pendidikan_jenis.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '80',
            'name' => "admin.profile.pendidikan_jenis.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '81',
            'name' => "admin.profile.pendidikan_jenis.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '82',
            'name' => "admin.profile.kontak_tipe",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '83',
            'name' => "admin.profile.kontak_tipe.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '84',
            'name' => "admin.profile.kontak_tipe.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '85',
            'name' => "admin.profile.kontak_tipe.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '86',
            'name' => "admin.username_validation",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '87',
            'name' => "admin.username_validation.select2",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '88',
            'name' => "admin.username_validation.save",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '89',
            'name' => "admin.pendaftaran",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '90',
            'name' => "admin.pendaftaran.get_one",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '91',
            'name' => "admin.pendaftaran.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '92',
            'name' => "admin.pendaftaran.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '93',
            'name' => "admin.pendaftaran.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '94',
            'name' => "admin.pendaftaran.sensus",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '95',
            'name' => "admin.pendaftaran.sensus.excel",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:43",
            'updated_at' => "2022-08-04 16:05:43",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '96',
            'name' => "admin.pendaftaran.sensus.status",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:44",
            'updated_at' => "2022-08-04 16:05:44",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '97',
            'name' => "admin.user_access.permission",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:44",
            'updated_at' => "2022-08-04 16:05:44",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '99',
            'name' => "admin.user_access.permission.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:44",
            'updated_at' => "2022-08-07 15:43:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '100',
            'name' => "admin.user_access.permission.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:44",
            'updated_at' => "2022-08-04 16:05:44",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '101',
            'name' => "admin.user_access.permission.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:44",
            'updated_at' => "2022-08-04 16:05:44",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '102',
            'name' => "admin.user_access.role",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:44",
            'updated_at' => "2022-08-04 16:05:44",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '103',
            'name' => "admin.user_access.role.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:44",
            'updated_at' => "2022-08-07 15:37:35",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '107',
            'name' => "admin.user_access.role.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:44",
            'updated_at' => "2022-08-04 16:05:44",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '108',
            'name' => "admin.user_access.role.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:44",
            'updated_at' => "2022-08-04 16:05:44",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '109',
            'name' => "member.dashboard",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:44",
            'updated_at' => "2022-08-04 16:05:44",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '110',
            'name' => "member.profile",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:44",
            'updated_at' => "2022-08-04 16:05:44",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '135',
            'name' => "member.password",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:45",
            'updated_at' => "2022-08-04 16:05:45",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '136',
            'name' => "member.password.save",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:45",
            'updated_at' => "2022-08-04 16:05:45",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '137',
            'name' => "admin.menu.admin",
            'guard_name' => "web",
            'created_at' => "2022-08-05 00:27:17",
            'updated_at' => "2022-08-20 14:13:15",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '139',
            'name' => "admin.menu.admin.update",
            'guard_name' => "web",
            'created_at' => "2022-08-05 19:03:54",
            'updated_at' => "2022-08-20 14:13:37",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '140',
            'name' => "admin.menu.admin.save",
            'guard_name' => "web",
            'created_at' => "2022-08-05 21:03:40",
            'updated_at' => "2022-08-20 14:13:32",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '141',
            'name' => "admin.menu.admin.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-05 21:03:46",
            'updated_at' => "2022-08-20 14:13:26",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '143',
            'name' => "admin.menu.admin.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-05 23:07:03",
            'updated_at' => "2022-08-20 14:13:21",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '145',
            'name' => "admin.profile.save_another",
            'guard_name' => "web",
            'created_at' => "2022-08-06 14:48:58",
            'updated_at' => "2022-08-06 14:48:58",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '146',
            'name' => "admin.pengurus.periode.set_role",
            'guard_name' => "web",
            'created_at' => "2022-08-08 21:06:58",
            'updated_at' => "2022-08-08 21:06:58",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '147',
            'name' => "admin.pendaftaran.gform",
            'guard_name' => "web",
            'created_at' => "2022-08-08 21:07:44",
            'updated_at' => "2022-08-08 21:07:44",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '148',
            'name' => "admin.pendaftaran.gform.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-08 21:08:04",
            'updated_at' => "2022-08-08 21:08:04",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '149',
            'name' => "admin.pendaftaran.gform.update",
            'guard_name' => "web",
            'created_at' => "2022-08-08 21:08:12",
            'updated_at' => "2022-08-08 21:08:12",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '150',
            'name' => "admin.pendaftaran.gform.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-08 21:08:18",
            'updated_at' => "2022-08-08 21:08:18",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '151',
            'name' => "admin.kata_alumni",
            'guard_name' => "web",
            'created_at' => "2022-08-09 15:19:19",
            'updated_at' => "2022-08-09 15:19:19",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '152',
            'name' => "admin.kata_alumni.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-09 15:19:25",
            'updated_at' => "2022-08-09 15:19:25",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '153',
            'name' => "admin.kata_alumni.update",
            'guard_name' => "web",
            'created_at' => "2022-08-09 15:19:30",
            'updated_at' => "2022-08-09 15:19:30",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '154',
            'name' => "admin.kata_alumni.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-09 15:19:35",
            'updated_at' => "2022-08-09 15:19:35",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '155',
            'name' => "member.kata_alumni",
            'guard_name' => "web",
            'created_at' => "2022-08-09 15:22:56",
            'updated_at' => "2022-08-09 15:22:56",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '156',
            'name' => "admin.kontak.faq",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '157',
            'name' => "admin.kontak.faq.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '158',
            'name' => "admin.kontak.faq.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '159',
            'name' => "admin.kontak.faq.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '160',
            'name' => "admin.kontak.faq.setting",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '161',
            'name' => "admin.kontak.list",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '162',
            'name' => "admin.kontak.list.insert",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '163',
            'name' => "admin.kontak.list.update",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '164',
            'name' => "admin.kontak.list.delete",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '165',
            'name' => "admin.kontak.list.setting",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '166',
            'name' => "admin.kontak.message",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '167',
            'name' => "admin.kontak.message.setting",
            'guard_name' => "web",
            'created_at' => "2022-08-04 16:05:41",
            'updated_at' => "2022-08-04 16:05:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '168',
            'name' => "debugbar.openhandler",
            'guard_name' => "web",
            'created_at' => "2022-09-01 18:19:49",
            'updated_at' => "2022-09-01 18:19:49",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '169',
            'name' => "admin.instagram",
            'guard_name' => "web",
            'created_at' => "2022-09-01 18:27:59",
            'updated_at' => "2022-09-01 18:27:59",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '170',
            'name' => "admin.menu.frontend",
            'guard_name' => "web",
            'created_at' => "2022-09-01 18:46:05",
            'updated_at' => "2022-09-01 18:46:05",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '171',
            'name' => "admin.anggota.list",
            'guard_name' => "web",
            'created_at' => "2023-02-18 00:24:06",
            'updated_at' => "2023-11-11 17:32:49",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '172',
            'name' => "admin.kepengurusan.periode",
            'guard_name' => "web",
            'created_at' => "2023-02-18 21:46:15",
            'updated_at' => "2023-02-18 21:46:15",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '173',
            'name' => "admin.setting.sejarah",
            'guard_name' => "web",
            'created_at' => "2023-02-19 16:41:50",
            'updated_at' => "2023-02-19 16:41:50",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '174',
            'name' => "admin.setting.front",
            'guard_name' => "web",
            'created_at' => "2023-02-19 22:19:56",
            'updated_at' => "2023-02-19 22:19:56",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '175',
            'name' => "admin.setting.home",
            'guard_name' => "web",
            'created_at' => "2023-02-19 22:20:12",
            'updated_at' => "2023-02-19 22:20:12",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '176',
            'name' => "admin.setting.admin",
            'guard_name' => "web",
            'created_at' => "2023-02-19 22:20:30",
            'updated_at' => "2023-02-19 22:20:30",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '177',
            'name' => "admin.kepengurusan.periode.detail",
            'guard_name' => "web",
            'created_at' => "2023-03-08 13:04:42",
            'updated_at' => "2023-03-08 13:04:42",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '178',
            'name' => "admin.utility.hari_besar_nasional",
            'guard_name' => "web",
            'created_at' => "2023-03-08 14:03:27",
            'updated_at' => "2023-03-08 14:03:27",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '180',
            'name' => "admin.password",
            'guard_name' => "web",
            'created_at' => "2023-10-30 11:26:54",
            'updated_at' => "2023-10-30 11:26:54",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '181',
            'name' => "pages.admin.change_password",
            'guard_name' => "web",
            'created_at' => "2023-10-30 12:35:12",
            'updated_at' => "2023-10-30 12:35:12",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '182',
            'name' => "admin.menu_management",
            'guard_name' => "web",
            'created_at' => "2023-10-30 14:41:28",
            'updated_at' => "2023-10-30 14:41:28",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '183',
            'name' => "admin.menu.frontend.update",
            'guard_name' => "web",
            'created_at' => "2023-10-30 15:15:25",
            'updated_at' => "2023-10-30 15:15:25",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '184',
            'name' => "admin.menu.frontend.delete",
            'guard_name' => "web",
            'created_at' => "2023-10-30 15:15:56",
            'updated_at' => "2023-10-30 15:15:56",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '185',
            'name' => "admin.menu.frontend.insert",
            'guard_name' => "web",
            'created_at' => "2023-10-30 15:16:14",
            'updated_at' => "2023-10-30 15:16:14",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '186',
            'name' => "admin.menu.frontend.save",
            'guard_name' => "web",
            'created_at' => "2023-10-30 15:16:25",
            'updated_at' => "2023-10-30 15:16:25",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '187',
            'name' => "admin.lapooran.anggota",
            'guard_name' => "web",
            'created_at' => "2023-10-30 15:23:45",
            'updated_at' => "2023-10-30 15:23:45",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '188',
            'name' => "pages.admin.change_password.save",
            'guard_name' => "web",
            'created_at' => "2023-10-31 15:30:07",
            'updated_at' => "2023-10-31 15:30:07",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '189',
            'name' => "pages.admin.change_password.update",
            'guard_name' => "web",
            'created_at' => "2023-10-31 15:30:18",
            'updated_at' => "2023-10-31 15:30:18",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '190',
            'name' => "member.password.update",
            'guard_name' => "web",
            'created_at' => "2023-10-31 15:42:55",
            'updated_at' => "2023-10-31 15:42:55",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '191',
            'name' => "admin.password.save",
            'guard_name' => "web",
            'created_at' => "2023-10-31 15:52:00",
            'updated_at' => "2023-10-31 15:52:00",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '192',
            'name' => "admin.dashboard.page",
            'guard_name' => "web",
            'created_at' => "2024-05-12 16:08:17",
            'updated_at' => "2024-05-12 16:08:17",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '193',
            'name' => "pages.admin.SPK.AHP.perhitungan",
            'guard_name' => "web",
            'created_at' => "2024-06-14 20:19:41",
            'updated_at' => "2024-06-14 20:19:41",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '194',
            'name' => "admin.spk.ahp.perhitungan",
            'guard_name' => "web",
            'created_at' => "2024-06-14 20:23:05",
            'updated_at' => "2024-06-14 20:23:05",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '195',
            'name' => "admin.utility.notif_depan_atas | page",
            'guard_name' => "web",
            'created_at' => "2024-06-14 22:19:28",
            'updated_at' => "2024-06-14 22:25:48",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '196',
            'name' => "admin.utility.notif_admin_atas | page",
            'guard_name' => "web",
            'created_at' => "2024-06-14 22:20:10",
            'updated_at' => "2024-06-14 22:25:20",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '197',
            'name' => "pages.admin.utility.notif_depan_atas",
            'guard_name' => "web",
            'created_at' => "2024-06-14 22:32:58",
            'updated_at' => "2024-06-14 22:32:58",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '198',
            'name' => "admin.kepengurusan.jabatan",
            'guard_name' => "web",
            'created_at' => "2024-11-04 21:28:15",
            'updated_at' => "2024-11-04 21:28:15",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '199',
            'name' => "admin.kepengurusan.periode.update",
            'guard_name' => "web",
            'created_at' => "2024-11-04 21:29:22",
            'updated_at' => "2024-11-04 21:32:07",
        ]);
        DB::table('p_permissions')->updateOrInsert([
            'id' => '200',
            'name' => "admin.kepengurusan.periode.delete",
            'guard_name' => "web",
            'created_at' => "2024-11-04 21:32:16",
            'updated_at' => "2024-11-04 21:32:16",
        ]);
    }
}
