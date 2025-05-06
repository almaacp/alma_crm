# **CRM PT Smart - Project Management & CRM System**

Selamat datang di proyek **CRM PT Smart**, aplikasi manajemen project yang dirancang untuk memudahkan pengelolaan lead, produk, dan proses approval. Aplikasi ini dibangun menggunakan Laravel dan PostgreSQL, menawarkan antarmuka yang ramah pengguna untuk Sales dan Manager. Berikut adalah panduan lengkap untuk menjalankan aplikasi ini dari awal hingga siap digunakan!

---

## **Prasyarat Sistem**

Sebelum memulai, pastikan Anda telah menginstal perangkat lunak berikut di komputer Anda:

* **PHP** (Versi 8 ke atas)
* **Composer** (untuk mengelola dependensi)
* **Laravel 10.x** (framework PHP yang digunakan untuk aplikasi ini)
* **PostgreSQL** (versi terbaru) sebagai database backend
* **pgAdmin** (untuk mengelola database PostgreSQL secara grafis)

---

## **Langkah-langkah Instalasi**

Ikuti langkah-langkah berikut untuk memulai proyek ini.

### **1. Kloning Repositori**

Kloning repositori ini dari GitHub ke mesin lokal Anda:

```
git clone https://github.com/username/crm-pt-smart.git
cd crm-pt-smart
```

### **2. Instalasi Dependensi**

Pastikan Anda sudah menginstal **Composer** untuk mengelola dependensi PHP. Jalankan perintah berikut untuk menginstal dependensi aplikasi:

```
composer install
```

### **3. Konfigurasi Database**

1. **Unduh Database**

   * Database untuk aplikasi ini dapat diunduh dari [tautan Google Drive ini](https://drive.google.com/drive/folders/1a5hptpBRGVJRERax1JUD18U20WzFiVrN?usp=sharing).
   * Setelah file `.sql` diunduh, lanjutkan ke langkah berikut.

2. **Impor Database ke PostgreSQL dengan pgAdmin**

   * Buka **pgAdmin** dan login ke server PostgreSQL Anda.
   * Klik kanan pada "Databases" di panel kiri dan pilih "Create" > "Database".
   * Beri nama database sesuai dengan nama yang terdapat di file `.sql` yang Anda ekstrak, misalnya `crm_pt_smart`.
   * Setelah database terbentuk, klik kanan pada database tersebut dan pilih "Restore".
   * Pilih file `.sql` yang sudah diunduh dan klik "Restore".

   **Database sudah siap digunakan!**

### **4. Konfigurasi .env**

Salin file `.env.example` ke file `.env` dan sesuaikan pengaturan database seperti berikut:

```
cp .env.example .env
```

Sesuaikan konfigurasi database di file `.env`:

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=crm_pt_smart
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### **5. Generate Key dan Migrasi Database**

Jalankan perintah berikut untuk menghasilkan aplikasi key dan migrasi database:

```
php artisan key:generate
php artisan migrate
```

### **6. Menjalankan Aplikasi**

Sekarang Anda dapat menjalankan aplikasi Laravel menggunakan perintah artisan berikut:

```
php artisan serve
```

Aplikasi akan berjalan di [http://127.0.0.1:8000/](http://127.0.0.1:8000/).

---

## **Login Pengguna**

Setelah berhasil mengakses aplikasi, Anda dapat masuk sebagai Sales atau Manager dengan akun berikut:

* **Sales**

  * Email: `user-sales@ptcrm.com`
  * Password: `12345678`

* **Manager**

  * Email: `user-manager@ptcrm.com`
  * Password: `12345678`

---

## **Fitur Utama**

* **Sales**:

  * Menambahkan dan mengelola calon customer (lead)
  * Melihat list customer
* **Manager**:

  * Menyetujui atau menolak proyek dari sales
  * Mengatur layanan yang akan digunakan oleh customer

---

## **Kontribusi**

Jika Anda ingin berkontribusi pada proyek ini, silakan buka issue atau buat pull request. Kami sangat menghargai setiap kontribusi!

---

Semoga panduan ini membantu Anda dalam menyiapkan dan menjalankan aplikasi **CRM PT Smart**. Jika ada pertanyaan atau masalah, jangan ragu untuk membuka issue atau menghubungi kami!
