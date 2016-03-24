# Web Aplikasi Pelayanan Keluhan Boox

Layanan keluhan pelanggan Boox berbasis web. Pelanggan Boox dapat memberikan keluhan mereka terkait Boox, dan juga melacak status keluhan yang telah mereka laporkan dengan mencantumkan ID Complaint (ID Keluhan). Selain itu, disisi Admin Boox juga dapat melihat semua keluhan yang tersedia, melakukan pencarian keluhan, dan mengubah status keluhan pelanggan.
#####Aplikasi web ini dibangun dengan menggunakan Framework PHP Code Igniter versi 3 dan DBMS MySQL.

### Instalasi

1. Buka localhost/phpmyadmin
2. Buat database dengan nama 'boox_customer_service'
3. Pastikan username dan password DB Anda adalah.
	```
 	Username DB : root
	Password DB : 
	```
	*Jika Anda tidak mengubah konfigurasi default phpMyAdmin pengaturan ini tidak diperlukan.
	
	**Jika Anda username dan Password phpMyAdmin telah dikonfigurasi / diubah, Anda perlu mengubah file boox_customer_service/application/database.php
	Kemudian ubah pada kolom 'username' dan 'password' sesuai dengan username dan password pada phpMyAdmin.
4. Export database 'boox_customer_service' ke dalam database phpMyAdmin yang telah dibuat.
5. Copy - Paste folder 'boox_customer_service' yang telah Anda dapatkan dari Github ini ke dalam folder C:/xampp/htdocs
6. Buka localhost/boox_customer_service melalui web browser Anda.

### Username & Password Admin

Pada database yang telah disediakan di Github ini, terdapat akun admin yang dapat Anda gunakan untuk login ke sistem aplikasi web.
```
Username : admin
```
```
Password : admin
```
