username admin = vincentchaandra@gmail.com
password admin = 123123123

username verifikator = reza.darmawan12@gmail.com
password verifikator = 123123123

--PHP Version--
PHP 8.2.8 (cli) (built: Jul  8 2023 07:10:21) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.2.8, Copyright (c) Zend Technologies
with Zend OPcache v8.2.8, Copyright (c), by Zend Technologies

--Database Version--
8.0.33-0ubuntu0.22.04.4

--Framework--
Laravel Framework 10.15.0
TailwindCSS v3.3.3
Flowbite (Component UI)

--Panduan Penggunaan Aplikasi--
1. Pengguna dapat melakukan register kemudian dapat login menggunakan akun yang telah dibuat
2. Pengguna baru akan di assign sebagai "admin"
3. Grafik penggunaan kendaraan dapat dilihat di menu "Dashboard"
4. Pengguna dengan role "admin" dapat melakukan CRUD kendaraan dan menambahkan peminjaman kendaraan, pengguna dengan role "verifikator" hanya dapat melihat kendaraan yang ingin mendapatkan persetujuan
5. Pengguna dengan role "verifikator" dapat mengubah status kendaraan / melakukan approve
6. Pengguna dapat melihat log aktivitas pada menu "Log Aktivitas"
7. Pengguna dapat mengubah profil dan password pada menu "Profile"

!PENTING pengguna dengan role "verifikator" hanya dapat melihat dan menyetujui status kendaraan yang telah di ajukan oleh "admin"

--Panduan Konfigurasi--
1. Clone project dari repository github ( https://github.com/vchandra22/technical-test-sekawan.git )
2. Import database pada folder "Import DB" (laravel.sql)
3. Buka folder yang telah di unduh dari repository github ke Text Editor
4. Buka command dan jalankan perintah "composer install && npm install"
5. copy .env.example .env lalu edit dan sesuaikan bagian database di file .env
6. Jalankan perintah "php artisan key:generate, lalu "php artisan serve"


