# DockerLaravel

## Build app

Kita mempunyai 3 images didalam file docker-compose.yml yaitu :
- app (Aplikasi)
- mysql:5.7 (Database)
- nginx:alpine (Webserver)

maka kita menggunakan perintah <b>docker-compose build app</b> untuk menjalankan semua image atau container secara bersamaan.

![alt text](https://github.com/nangStywn/DockerLaravel/blob/master/Screenshot/1.png?raw=true)

## Jalankan Environment dibelakang layar

Agar Container berjalan dibelakang layar kita gunakan perintah <b>docker-compose up -d</b>

![alt text](https://github.com/nangStywn/DockerLaravel/blob/master/Screenshot/2.png?raw=true)

## Melihat Service yang sedang berjalan

Kita gunakan perintah <b>docker-compose ps</b>

![alt text](https://github.com/nangStywn/DockerLaravel/blob/master/Screenshot/3.png?raw=true)


