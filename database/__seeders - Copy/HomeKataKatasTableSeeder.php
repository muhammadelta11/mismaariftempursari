<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeKataKatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '1',
        ], [
            'nama' => 'Imam Al Ghazali',
            'sebagai' => 'Ulama',
            'kata_kata' => 'Untuk mendapatkan apa yang Anda suka, pertama Anda harus bersabar dengan apa yang Anda benci.',
            'tampilkan' => 'Tidak',
            'created_at' => '2023-03-26 14:18:55',
            'updated_at' => '2023-03-26 14:46:29',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '2',
        ], [
            'nama' => 'Jalaluddin Rumi',
            'sebagai' => 'Penyair Sufi',
            'kata_kata' => 'Saat aku tidak mengungkapkan kecantikanmu dengan kata-kata, aku menyimpan cintaMu di hatiku.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '3',
        ], [
            'nama' => 'Ali Bin Abi Thalib',
            'sebagai' => 'Sahabat Nabi',
            'kata_kata' => 'Ketahuilah yang sebenarnya, maka Anda akan mengenal orang yang tepat. Benar Tidak diukur oleh umatnya, tetapi manusia diukur dengan kebenaran.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '4',
        ], [
            'nama' => 'Abu Bakar Sibli ',
            'sebagai' => 'Mistikus islam',
            'kata_kata' => 'Hidup seperti pohon yang berbuah; tinggal di pinggir jalan dan dilempari batu, tetapi dibayar dengan buah.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '5',
        ], [
            'nama' => 'Umar bin Khattab',
            'sebagai' => 'Sahabat Nabi',
            'kata_kata' => 'Manusia yang rasional adalah manusia yang suka menerima dan meminta nasehat.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '6',
        ], [
            'nama' => 'Jalaluddin Rumi',
            'sebagai' => 'Penyair Sufi',
            'kata_kata' => 'Jangan bersedih hati. Apa pun yang hilang dari Anda akan dikembalikan dalam bentuk lain.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '7',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Rahasia kebahagiaan ada dalam 3 hal: Kesabaran, Syukur dan Ketulusan.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '8',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Jika kita berpikir tentang ketidakpercayaan, akan banyak hal yang harus kita keluhkan. Tetapi jika kita berpikir tentang rasa syukur, sungguh tak terhitung banyaknya nikmat yang telah kita terima.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '9',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Terkadang kehidupan yang Anda keluhkan adalah kehidupan yang didambakan banyak orang.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '10',
        ], [
            'nama' => 'Ali Bin Abi Thalib',
            'sebagai' => 'Sahabat Nabi',
            'kata_kata' => 'Ada dua macam kesabaran: kesabaran untuk sesuatu yang tidak Anda inginkan dan kesabaran untuk menahan diri dari sesuatu yang Anda inginkan',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '11',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Hidup adalah pilihan, apapun yang membuatmu sedih, pergilah. Dan apapun yang membuatmu tersenyum, jangan lepaskan.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '12',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Saat perjalanan hidup terasa membosankan. Maka Tuhan menyuruh kita untuk sangat bersyukur.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '13',
        ], [
            'nama' => 'Ali bin Abi Taolib',
            'sebagai' => 'Sahabat Nabi',
            'kata_kata' => 'Takutlah akan dosa-dosamu ketika kamu sendirian, ketika saksimu juga menjadi hakimmu.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '14',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Dalam konteks kesabaran, hinaan dan hujatan adalah prosesi pencairan dosa manusia oleh Yang Maha Penyayang.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '15',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Seandainya tidak ada kehidupan setelah kematian, maka yang miskin, yang bodoh dan yang teraniaya akan kalah! Robb, betapa adilnya dirimu.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '16',
        ], [
            'nama' => 'Aa Gym. ',
            'sebagai' => 'Pendakwah',
            'kata_kata' => 'Hati menjadi gelisah dan gelisah ketika kita terbiasa berspekulasi dalam menghadapi pertanyaan-pertanyaan kehidupan.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '17',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Sabar dan mampu memurnikan sesuatu yang telah hilang adalah salah satu cara untuk menemukan kebahagiaan.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '18',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Kebanyakan dari kita tidak bersyukur atas apa yang telah kita miliki, tetapi kita menyesali apa yang belum kita capai.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '19',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Mereka yang sangat terluka karena meninggalkan cinta kepada Allah dan Rasul-Nya terlalu jauh.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '20',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Iman membuat seseorang mencintai kematian. Ketidakpercayaan membuat seseorang takut akan kematian.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '21',
        ], [
            'nama' => 'HR. Ahmad',
            'sebagai' => 'Hadis',
            'kata_kata' => 'Barangsiapa tidak bersyukur sedikit, maka dia tidak akan bisa bersyukur untuk banyak.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '22',
        ], [
            'nama' => 'Mufti Menk',
            'sebagai' => 'Mufti dari Zimbabwe',
            'kata_kata' => 'Lebih baik kehilangan sesuatu demi Tuhan. Dari pada kehilangan Tuhan karena sesuatu.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '23',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Tuhan tidak pernah berkata bahwa jalan hidup akan mudah.Tapi, Dia berkata Ã¢â‚¬ËœAku akan bersama mereka yang sabar.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '24',
        ], [
            'nama' => 'Ibn Qayyim',
            'sebagai' => 'imam suni, cendekiawan, dan ahli fikih',
            'kata_kata' => 'Kesabaran adalah saat hati tidak merasa marah pada apa yang sudah ditakdirkan dan mulut tidak mengeluh.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '25',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Dua hal yang bisa mendeskripsikan Anda, yaitu kesabaran Anda saat tidak memiliki apa-apa dan sikap Anda saat Anda memiliki segalanya.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '26',
        ], [
            'nama' => 'Ali bin Abu Thalib ',
            'sebagai' => 'Sahabat Nabi',
            'kata_kata' => 'Jika kamu bisa bersabar sejenak saat marah, maka itu bisa menyelamatkanmu dari ribuan penyesalan di masa depan.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '27',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Kesabaran adalah kunci dari semua kesenangan abadi.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '28',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Setiap pekerjaan ada resikonya, setiap kesuksesan juga ada resikonya. kesabaran dan keikhlasan bisa merubah resiko menjadi lebih indah.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '29',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Setiap malapetaka mengandung permata yang berharga, tetapi hanya mereka yang bersabar yang berhak mendapatkannya.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '30',
        ], [
            'nama' => 'HR. Tirmidzi',
            'sebagai' => 'Hadis',
            'kata_kata' => 'Dan ketahuilah, sesungguhnya kemenangan itu beriringan dengan kesabaran. Jalan keluar beriringan dengan kesukaran. Dan sesudah kesulitan pasti akan datang kemudahan.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '31',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Kesabaran adalah ilmu tingkat tinggi. Ia dipelajari setiap hari, dipraktekkan sepanjang waktu, ujiannya sering kali tiba-tiba, pendidikannya berlangsung seumur hidup.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '32',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Bencana itu seperti air keruh, makin banyak diaduk makin keruh. Bersabarlah karena sebentar lagi akan jelas.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '33',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Bukan kesabaran jika masih ada batasnya dan bukan keikhlasan jika masih terasa sakit.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '34',
        ], [
            'nama' => 'Hasan Al-Bashri',
            'sebagai' => 'ulama dan cendekiawan muslim',
            'kata_kata' => 'Kami tidak melihat sesuatu yang lebih bermanfaat untuk menyembuhkan segalanya daripada kesabaran.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '35',
        ], [
            'nama' => 'Ibn Qayyim',
            'sebagai' => 'imam suni, cendekiawan, dan ahli fikih',
            'kata_kata' => 'Minumlah kesabaran. Jika kesabaran membunuh Anda maka dia membunuh Anda dalam keadaan mati syahid. Dan jika kesabaran itu membuat Anda tetap hidup maka Dia membuat Anda tetap hidup dalam keadaan yang mulia.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '36',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Banyak orang telah meninggal, tetapi nama baik mereka tetap ada. Dan banyak orang yang masih hidup, tetapi seolah-olah mereka adalah orang mati yang tidak berguna',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '37',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Sabar bukan berarti tidak bergerak saat bencana melanda. Tapi kesabaran secara aktif bergerak mencari kebaikan saat bencana melanda.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '38',
        ], [
            'nama' => 'Seseorang',
            'sebagai' => 'kutipan',
            'kata_kata' => 'Tuhan tidak melihat penampilan dan harta benda Anda, tetapi Dia melihat hati dan perbuatan Anda.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
        DB::table('home_kata_katas')->updateOrInsert([
            'id' => '39',
        ], [
            'nama' => 'Imam SyafiÃ¢â‚¬â„¢i',
            'sebagai' => 'pendiri mazhab Syafi\'i',
            'kata_kata' => 'Jangan hanya bersyukur kepada Tuhan ketika semuanya berjalan dengan baik, bersyukurlah bahkan ketika segala sesuatunya terasa sulit.',
            'tampilkan' => 'Ya',
            'created_at' => '2023-03-26 14:21:22',
            'updated_at' => '2023-03-26 14:21:22',
        ]);
    }
}
