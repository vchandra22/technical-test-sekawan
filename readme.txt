username admin = vincentchaandra@gmail.com
password admin = 123123123

username verifikator = reza.darmawan12@gmail.com
password verifikator = 123123123
username verifikator = putrimustika.24@gmail.com
password verifikator = 123123123

--PHP Version--
PHP 8.2.8 (cli) (built: Jul  8 2023 07:10:21) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.2.8, Copyright (c) Zend Technologies
with Zend OPcache v8.2.8, Copyright (c), by Zend Technologies

--Database Version--
8.0.33-0ubuntu0.22.04.4

--etc--
Composer version 2.5.5
npm version 9.5.1
node version 18.16.0

--Framework--
Laravel Framework 10.15.0
TailwindCSS v3.3.3
Flowbite (Component UI)

--OS Pengembangan--
Linux Ubuntu 22.04.2 LTS
VS Code (Text Editor)

--Panduan Penggunaan Aplikasi--
1. Pengguna dapat melakukan register kemudian dapat login menggunakan akun yang telah dibuat
2. Pengguna baru akan di assign sebagai "admin"
3. Grafik penggunaan kendaraan dapat dilihat di menu "Dashboard"
4. Pengguna dengan role "admin" dapat melakukan CRUD kendaraan, export data kendaraan, dan menambahkan data peminjaman kendaraan (pilih kendaraan dengan status "tersedia", driver,  dan memilih "verifikator")
5. Pengguna dengan role "verifikator" dapat melihat kendaraan yang telah diajukan oleh "admin"
5. Pengguna dengan role "verifikator" dapat mengubah status kendaraan / melakukan approve
6. Pengguna yang berhasil login dapat melihat log aktivitas pada menu "Log Aktivitas"
7. Pengguna dapat mengubah profil dan password pada menu "Profile"

!PENTING pengguna dengan role "verifikator" hanya dapat melihat kendaraan dan menyetujui status kendaraan yang telah di ajukan oleh "admin"

--Panduan Konfigurasi--
1. Clone project dari repository github ( https://github.com/vchandra22/technical-test-sekawan.git )
2. Jalankan XAMPP/LAMPP
3. Import database mySQL dari file "laravel.sql" atau direktori (./laravel.sql)
4. Buka folder yang telah diclone dari repository github menggunakan Text Editor
5. Buka command (*pastikan direktori folder sesuai) dan jalankan perintah "composer install && npm install"
6. cp .env.example -> .env lalu edit dan sesuaikan bagian database di file .env
7. Jalankan perintah "php artisan key:generate, lalu "php artisan serve"
8. Jakukan perintah "npm run build" di terminal baru
9. Aplikasi berhasil dibuka di server lokal anda


