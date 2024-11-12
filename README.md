![mi-maarif-tempursari](public/assets/templates/admin/logo-hd.png "mi-maarif-tempursari")

Aplikasi Sistem Informasi Sekolah (ASIS) sekolah Madrasah Ibtidaiyah Swasta Ma'arif Tempursari Mantingan ngawi(mi-maarif-tempursari)

## Fitur

Fitur pada Aplikasi ini meliputi:

1. Akun Login
   - Login dengan akun User
   - Login dengan google
   - Lupa password
2. Manajemen User
   - Profil User
   - Data tambahan profil
   - Manajemen Alamat
   - User frontend
3. Manajemen Kepengurusan
   - Periode Kepengurusan
   - Kepengurusan jabatan
   - Kepengurusan frontend
4. Manajemen Artikel
   - Daftar Artikel
   - Editor Artikel
   - Artikel Frontend
5. Pengaturan halaman
   - Halaman utama
   - Halaman sejarah
   - Halaman Admin
   - Halaman Depan
6. Pendaftaran
   - Google Forms
   - Sensus User
7. Manajemen Kontak
   - Instagram
   - Galeri
   - Kontak
   - FAQ
8. Menu manajemen
   - Dynamic menu
   - Menu By Role
9. Manajemen Alumni
10. Utility
    - Notifikasi admin
    - Notifikasi depan
    - Hari besar nasional
    - Ulang tahun User

## Screenshot

### Admin


## Instalasi

### Spesifikasi
- PHP ^8.1
- Laravel 10.x
- Database MariaDB

### Cara Install

1. Clone atau download source code
    - Para terminal, clone repo `git clone git@github.com:muhammmadelta11/mi-maarif-tempursari.git`
    - atau `git clone https://github.com/muhammmadelta11/mi-maarif-tempursari.git`
    - Jika tidak menggunakan Git, silakan **Download Zip** dan *extract* pada direktori web server (misal: xampp/htdocs)
2. `cd mi-maarif-tempursari`
3. `composer install`
4. `cp .env.example .env`
    - Jika tidak menggunakan Git, bisa rename file `.env.example` menjadi `.env`
5. Pada terminal `php artisan key:generate`
6. Buat **database pada mysql** untuk aplikasi ini
7. **Setting database** pada file `.env`
8. `php artisan migrate --seed`
9. `php artisan serve`
10. Selesai
