# Aplikasi Pendaftaran-App

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Aplikasi Pendaftaran-App Merupakan Aplikasi Pendaftaran User yang menggunakan email sebagai verifikasi login dan di lengkapi dengan form pendaftaran data pribadi.

- Type some Markdown on the left
- See HTML in the right
- ✨Magic ✨

## Features

- Login
- Register
- Verify
- PHP Mailer
- Sweet Alert
- Home
- Profil
- Edit
- Reset password


## Tech

Aplikasi ini di bangun menggunakan:

- [Laragon](https://laragon.org/download/index.html) - digunakan sebagai web server dalam pembuatan aplikasi berbasis web 
- [Laravel versi 8](https://laravel.com/docs/8.x) - Laravel adalah framework (kerangka kerja) berbasis bahasa pemrograman PHP yang bisa digunakan untuk membantu proses pengembangan sebuah website agar lebih maksimal. 
- [Visual Studio Code](https://code.visualstudio.com/download) - adalah kode editor sumber yang dikembangkan oleh Microsoft untuk Windows, Linux dan macOS. Ini termasuk dukungan untuk debugging, kontrol git yang tertanam dan GitHub, penyorotan sintaksis, penyelesaian kode cerdas, snippet, dan refactoring kode.
- [Bahasa Pemrograman PHP](https://www.php.net/) -Hypertext Preprocessor atau PHP adalah bahasa penulisan skrip open-source yang banyak digunakan dalam pemrograman atau pengembangan website (web development). Bahasa ini umumnya dijalankan dalam komunikasi sisi server, dan saat ini didukung oleh hampir semua sistem.
- [MYSQl](https://mariadb.org/) - adalah sebuah sistem manajemen database relasional (RDBMS). Sebagai sebuah RDBMS, MySQL dapat membantu Anda mengelola database yang cukup kompleks dengan berbagai keterkaitan antara data yang digunakan.
- [Composer](https://getcomposer.org/) - adalah aplikasi manajer paket untuk bahasa pemrograman PHP yang menyediakan format standar untuk mengelola dependensi PHP dan pustaka-pustaka yang diperlukan
- [Gulp] - the streaming build system
- [Bootstrap](https://getbootstrap.com/) - adalah kerangka kerja CSS yang sumber terbuka dan bebas untuk merancang situs web dan aplikasi web. Kerangka kerja ini berisi templat desain berbasis HTML dan CSS untuk tipografi, formulir, tombol, navigasi, dan komponen antarmuka lainnya, serta juga ekstensi opsional JavaScript.
to Markdown converter
- [Sweet Alert](https://realrashid.github.io/sweet-alert/) - merupakan library JavaScript yang menyediakan berbagai pilihan bagi kita untuk membuat berbagai jenis pop-up alert seperti alert biasa, alert error, alert success, alert konfirmasi, dan sebagainya. Penulisan kode SweetAlert sangatlah singkat seperti menulis menggunakan fungsi bawaan JavaScript.
## Requiremen
- PHP 7.4.19
- Laragon 5.0
- Bootstrap 
- Laravel 8.75
And of course Dillinger itself is open source with a [public repository][dill]
 on GitHub.

## Installation

cara  Menginstall Aplikasi Pendaftaran-App [Laravel](https://laravel.com/docs/8.x)  to run.
Install the dependencies and devDependencies and start the server.

Pertama-tama kita meng-Clone project dari github ke Komputer (local) kita,dengan menggunakan Git Bash atau Cmd pada Laragon.lalu bukalah direktori sesuai di bawah ini.
 C:\laragon\www\ (tempat kita melakukan Cloning)
```sh
git clone https://github.com/chandrakarim/Aplikasi-Pendaftaran-App.git
```
Anda dapat langsung membuka terminal dan masuk ke direktori project  Pendaftaran-App. Lalu, jalankan perintah :
```sh
composer install
```
Setelah berhasil melakukan instalasi composer, Anda harus membuat file .env pada direktori root project  Pendaftaran-App. Untuk membuat file .env, Anda dapat menjalankan perintah sebagai berikut pada terminal.
```sh
Mengubah file : .env.example
menjadi : .env
lalu buka file .env

dan seseuaikanlah :
DB_DATABASE= (Nama DB anda)
DB_USERNAME= (Username anda)
DB_PASSWORD= (Password anda)
```
setelah itu buka Database anda di Chrome : localhost/phpmyadmin
lalu,buatlah nama DB anda,sesuaikan dengan DB_DATABASE di .env 

Setiap kali melakukan perubahan pada file .env, Anda dianjurkan untuk menjalankan perintah :
```sh
php artisan config:cache
```
Kemudian, jalankan perintah di bawah ini untuk melakukan generate key.
```sh
php artisan key:generate
```
setelah itu menginstall package  Intervention/Image

```sh
composer require intervention/image
```
Setelah key berhasil di set, lakukan migrasi database dengan menjalankan perintah berikut ini.
```sh
php artisan db:seed
atau
php artisan migrate:fresh --seed
```
dan jalankan Aplikasinya :
```sh
php artisan serve
```
## Credit
> CHANDRA KARIM https://github.com/chandrakarim
