# Web Aplikasi Pelayanan Keluhan Boox

Layanan keluhan pelanggan Boox berbasis web. Pelanggan Boox dapat memberikan keluhan mereka terkait Boox, dan juga melacak status keluhan yang telah mereka laporkan dengan mencantumkan ID Complaint (ID Keluhan). Selain itu, disisi Admin Boox juga dapat melihat semua keluhan yang tersedia, melakukan pencarian keluhan, dan mengubah status keluhan pelanggan.

# Instalasi

1. 	Buka localhost/phpmyadmin
2. 	Buat database dengan nama 'boox_customer_service'
3. 	Pastikan username dan password DB Anda adalah.
	Username DB : root
	Password DB : 
	*Jika Anda tidak mengubah konfigurasi default phpMyAdmin, maka pengaturan ini tidak diperlukan.
	**Jika Username dan Password phpMyAdmin telah dikonfigurasi / diubah, Anda perlu mengubah file 'boox_customer_service/application/database.php'
	Kemudian ubah pada kolom 'username' dan 'password' sesuai dengan username dan password pada phpMyAdmin.
4. 	Export database 'boox_customer_service' ke dalam database phpMyAdmin yang telah dibuat.
5. 	Copy - Paste folder 'boox_customer_service' ke dalam folder 'C:/xampp/htdocs'
	*Jika Anda mendapatkan file project dari Github, Anda perlu membuat folder 'boox_customer_service' terlebih dahulu pada folder 'C:/xampp/htdocs'
6. 	Buka localhost/boox_customer_service melalui web browser Anda.

# Username & Password Admin

Pada database yang telah disediakan di Github dan file project ini, terdapat akun admin yang dapat Anda gunakan untuk login ke sistem aplikasi web.
Username : admin
Password : admin