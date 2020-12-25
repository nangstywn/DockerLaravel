# DockerLaravel

Disini saya akan mendemokan build aplikasi web <b>Laravel</b> dengan database dan webserver yang akan dijalankan melalui <b>Docker</b> 

## Build app

Kita mempunyai 3 images didalam file <b>docker-compose.yml</b> yaitu :
- app (Aplikasi)
- mysql:5.7 (Database)
- nginx:alpine (Webserver)

Kita menggunakan perintah <b>docker-compose build app</b> untuk menjalankan semua image atau container secara bersamaan.

![alt text](https://github.com/nangStywn/DockerLaravel/blob/master/Screenshot/1.png?raw=true)

## Jalankan Environment dibelakang layar

Agar Container berjalan dibelakang layar kita gunakan perintah <b>docker-compose up -d</b>

![alt text](https://github.com/nangStywn/DockerLaravel/blob/master/Screenshot/2.png?raw=true)

## Melihat Service yang sedang berjalan

Kita gunakan perintah <b>docker-compose ps</b>

![alt text](https://github.com/nangStywn/DockerLaravel/blob/master/Screenshot/3.png?raw=true)

## Eksekusi perintah dalam Container

<b>docker-compose exec app ls -l</b>

Kita dapat menggunakan perintah <b>docker-compose exec</b> untuk mengeksekusi perintah didalam container.  kemudian dapat kita tambahkan <b>ls -l</b> untuk menampilkan informasi detail tentang file di direktori aplikasi

![alt text](https://github.com/nangStywn/DockerLaravel/blob/master/Screenshot/4.png?raw=true)

## Composer Install

<b>docker-compose exec app composer install</b>

<b>Composer install</b> digunakan untuk menginstal dependensi aplikasi. Digunakan oleh developer saat membuat web dengan Laravel

![alt text](https://github.com/nangStywn/DockerLaravel/blob/master/Screenshot/5.png?raw=true)

## Membuat Key

<b>docker-compose exec app php artisan key:generated</b>
Pada Laravel, Key di generated untuk enkripsi session pengguna dan data sensitif


