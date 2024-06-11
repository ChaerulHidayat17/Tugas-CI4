Persiapan
Sebelum memulai menggunakan Framework CodeIgniter, perlu dilakukan konfigurasi pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan CodeIgniter 4.

Berikut beberapa ekstensi yang perlu diaktifkan:

php-json: ekstensi untuk bekerja dengan JSON;
php-mysqlnd: native driver untuk MySQL;
php-xml: ekstensi untuk bekerja dengan XML;
php-intl: ekstensi untuk membuat aplikasi multibahasa;
libcurl (opsional), jika ingin pakai Curl.
Untuk mengaktifkan ekstensi tersebut, melalu XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini.

Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

Instalasi CodeIgniter 4
Untuk melakukan instalasi CodeIgniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual.

Unduh CodeIgniter dari website https://codeigniter.com/download
Extrak file zip CodeIgniter ke direktori htdocs/lab11_ci.
Ubah nama direktory framework-4.x.xx menjadi ci4.
Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/.
Menjalankan CLI (Command Line Interface)
CodeIgniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt.
Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (xampp/htdocs/lab11_ci/ci4/). Perintah yang dapat dijalankan untuk memanggil CLI CodeIgniter adalah:

Salin kode
php spark
Mengaktifkan Mode Debugging
CodeIgniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.
Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan. Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRINMENT menjadi development.

Struktur Direktori
Untuk lebih memahami Framework CodeIgniter 4 perlu mengetahui struktur direktori dan file yang ada. Terdapat beberapa direktori dan file yang perlu dipahami fungsi dan kegunaannya.

.github: folder ini kita butuhkan untuk konfigurasi repo github, seperti konfigurasi untuk build dengan github action;
app: folder ini akan berisi kode dari aplikasi yang kita kembangkan;
public: folder ini berisi file yang bisa diakses oleh publik, seperti file index.php, robots.txt, favicon.ico, ads.txt, dll;
tests: folder ini berisi kode untuk melakukan testing dengan PHPunit;
vendor: folder ini berisi library yang dibutuhkan oleh aplikasi, isinya juga termasuk kode core dari system CI.
writable: folder ini berisi file yang ditulis oleh aplikasi. Nantinya, kita bisa pakai untuk menyimpan file yang di-upload, logs, session, dll.
Memahami Konsep MVC
CodeIgniter menggunakan konsep MVC. MVC merupakan singkatan dari Model-View-Controller. MVC adalah konsep arsitektur yang umum digunakan dalam pengembangan aplikasi. Konsep MVC adalah memisahkan kode program berdasarkan logic proses, data, dan tampilan.

Routing dan Controller
Routing merupakan proses yang mengatur arah atau rute dari request untuk menentukan fungsi/bagian mana yang akan memproses request tersebut. Pada framework CI4, routing bertujuan untuk menentukan Controller mana yang harus merespon sebuah request. Controller adalah class atau script yang bertanggung jawab merespon sebuah request.

Membuat Controller
Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut:

php
Salin kode
<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "Ini halaman About";
    }

    public function contact()
    {
        echo "Ini halaman Contact";
    }

    public function faqs()
    {
        echo "Ini halaman FAQ";
    }
}
Auto Routing
Secara default fitur autoroute pada CodeIgniter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false.

Membuat View
Selanjutnya adalah membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya seperti berikut:

html
Salin kode
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <h1><?= $title; ?></h1>
    <hr>
    <p><?= $content; ?></p>
</body>
</html>
Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan CSS dapat diimplementasikan dengan mudah pada CodeIgniter. Yang perlu diketahui adalah, pada CodeIgniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public.

Buat Folder Template dan File Header/Footer
Buat folder template pada direktori view, lalu buat file header.php dan footer.php. Ubah method about pada class Controller Page seperti berikut:

php
Salin kode
public function about()
{
    return view('about', [
        'title' => 'Halaman About',
        'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
    ]);
}
Refresh tampilan pada alamat http://localhost:8080/about.
