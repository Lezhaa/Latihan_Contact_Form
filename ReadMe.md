# Contact Form

## Deskripsi

Ini adalah tugas sederhana membuat contact form menggunakan php. Dalam tugas ini pengguna dapat mengirimkan nama, email, dan pesan melalui form yang kemudian akan disimpan ke dalam basis data.

## Instalasi

1. Konfigurasi koneksi database pada file `config/database.php` di line 3 sampai 6:

    ```php
    <?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_DATABASE', 'contact_form');
    ?>
    ```

2. Jangan lupa di import database yang bernama `sql-database.sql` terlebih dahulu

3. Pastikan server web Anda mengarahkan ke direktori proyek ini.

## Penggunaan

1. Akses aplikasi melalui browser dengan mengunjungi URL yang mengarah ke direktori proyek ini.
2. Isi formulir kontak dengan nama, email, dan pesan Anda.
3. Klik tombol "Kirim" untuk mengirimkan formulir. Jika berhasil, pesan akan disimpan dalam database dan Anda akan menerima pesan konfirmasi.
