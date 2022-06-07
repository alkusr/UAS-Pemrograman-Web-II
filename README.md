# UAS-Pemrograman-Web-II

Project akhir mata kuliah PEMROGRAMAN WEB 2

(Kebun Binatang)
- 2010817210019	Ahmad Dany Adrian	
- 2010817210008	Muhammad Alkausar
- 2010817310003	M. Firda Ryanifar

## Installation

Sebelum melakukan instalasi, pastikan sudah menginstal PHP versi =>8.0 dan Composer.

1. Clone repository. Download sebagai zip atau dengan menjalankan perintah

    ```bash
    git clone https://github.com/alkusr/UAS-Pemrograman-Web-II.git
    ```

2. Buka terminal atau CMD dan pindah ke foder dimana hasil projek di download.

    ```bash
    cd C:/tujuan/projek/anda

    # Contoh

    cd c:/xampp/htdocs/zoo
    ```

    Jalankan perintah composer install pada terminal

    ```bash
    composer install
    ```

3. Buat file `.env` untuk konfigurasi dan generater `APP_KEY`.

    ```
    cp .env.example .env
    php artisan key:generate
    ```

4. Konfigurasi database pada file `.env`, sesuaikan perintah dibawah dengan database yang dibuat.

    ```env
    DB_HOST=127.0.0.1 # ganti dengan url anda atau biarkan default
    DB_PORT=3306 # ganti dengan port atau biarkan default
    DB_DATABASE=zoo # ganti dengan nama database yang telah dibuat atau buat database baru dengan nama zoo
    DB_USERNAME=root # sesuaikan dengan username database. biarkan default jika menggunakan database lokal
    DB_PASSWORD= # sesuaikan dengan password database. biarkan default jika menggunakan     database lokal
    ```

5. Migrasi tabel lalu lakukan import pada phpmyadmin untuk mengisi data pada database

    ```composer
    php artisan migrate:fresh 
    ```
    setelah migrate maka import zoo.sql lewat phpmyadmin

6. Aplikasi siap dijalankan dengan perintah

    ```composer
     php artisan serve
    ```

<p align="center">Apabila memerlukan database sqldump, file bernama zoo.sql</p>



Credit to

 - https://laravel.com/
 - https://getbootstrap.com/