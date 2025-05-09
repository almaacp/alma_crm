# **CRM PT Smart**

Selamat datang di **CRM PT Smart**, aplikasi berbasis web yang dirancang untuk membantu tim Sales dan Manager dalam mengelola calon pelanggan (leads), proyek, produk, serta proses persetujuan (approval) secara terintegrasi.

Aplikasi ini dibangun menggunakan Laravel dan PostgreSQL, didesain dengan antarmuka yang ringan namun fungsional untuk mendukung efisiensi kerja tim.

---

## ✅ **Prasyarat Sistem**

Sebelum memulai instalasi, pastikan Anda telah menyiapkan:

* **PHP** (versi 8 atau lebih baru)
* **Composer**
* **Laravel 10.x**
* **PostgreSQL** (versi terbaru)
* **pgAdmin** (untuk pengelolaan database PostgreSQL secara grafis)

---

## 🚀 **Langkah-langkah Instalasi & Konfigurasi**

### 1. **Kloning Repositori**

```bash
git clone https://github.com/username/crm-pt-smart.git
cd crm-pt-smart
```

### 2. **Instal Dependensi**

```bash
composer install
```

### 3. **Buat dan Setup Database Baru**

#### Cara Membuat Database di pgAdmin:
1. Buka **pgAdmin**, login ke server PostgreSQL Anda.
2. Klik kanan pada **Databases** → **Create** → **Database**
3. Beri nama database (contoh: `crm_pt_smart_new`)
4. Klik **Save** untuk membuat database baru

### 4. **Migrasi dan Seeding Database**
```bash
php artisan migrate
php artisan db:seed --class=UserSeeder
```

### 5. **Konfigurasi `.env`**
Pastikan nama database di `.env` sesuai dengan yang baru dibuat:

```ini
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=crm_pt_smart_new  # Sesuaikan dengan nama database baru
DB_USERNAME=[your_username]
DB_PASSWORD=[your_password]
```

### 6. **Generate Key (Jika Diperlukan)**

```bash
php artisan key:generate
```

### 7. **Jalankan Aplikasi**

```bash
php artisan serve
```

Akses aplikasi di [http://127.0.0.1:8000/](http://127.0.0.1:8000/)

---

## 🔐 **Login Akun Demo**

| Role    | Email                    | Password   |
| ------- | ------------------------ | ---------- |
| Sales   | `user-sales@ptcrm.com`   | `12345678` |
| Manager | `user-manager@ptcrm.com` | `12345678` |

---

## 📌 **Fitur Utama**

### Untuk **Sales**:

* Login & logout
* Lihat dan tambahkan calon customer (leads)
* Melihat list customer

### Untuk **Manager**:

* Login & logout
* Menyetujui/menolak proyek dari leads
* Mengelola data produk

---

## 🧩 **Diagram Use Case**

Untuk memahami alur fungsional aplikasi, silakan lihat **Use Case Diagram** berikut:

🔗 [Lihat Use Case Diagram (draw.io)](https://viewer.diagrams.net/?tags=%7B%7D&lightbox=1&highlight=0000ff&edit=_blank&layers=1&nav=1&title=Use%20Case%20Diagram%20CRM%20PT.%20Smart.drawio&dark=auto#R%3Cmxfile%3E%3Cdiagram%20name%3D%22Page-1%22%20id%3D%22B6BeEDAqxDx5YN3n8M2i%22%3E7ZpdU6MwFIZ%2FTS%2FdKZ8tl7Xa3ZnVGWe6O6uXKUSIBsKkwbb%2B%2Bg0lfCXUVrZC3Xqj5BAOyZsnycmhA2Marr9TEAe3xIN4oA%2B99cC4Gui6o1v8b2rYZAbbNjODT5GXmbTSMEevUBiHwpogDy5rFRkhmKG4bnRJFEGX1WyAUrKqV3skuP7WGPhQMcxdgFXrH%2BSxILOOrWFp%2FwGRH%2BRv1obiTgjyysKwDIBHVhWTcT0wppQQll2F6ynEqXa5Ltlzsx13i4ZRGLFDHrBmyfD1Mb6ILy9Gz4u583vyNLsQXl4ATkSH57zrS9Fitsll4I2P08skxBOXETowLl8gZYgLdQMWEN%2BRJWKIRLzKgjBGwkqFCUZ%2BeoORmFsDFmJe0PglSRhGEZwWQzfkRtEg%2Fixc7%2BypVujHuYMkhIxueJX8AUNILpjT8zFZlSOYVwkqg2cLGxDM%2BIXnUlZ%2BIZR9h8q6ovItiDg59HPrbGsnprOh6HxDfBQpKnNXfP3ghctVgBicx8BN76z4ClZX7ggiGVZdpJGq0bhBI%2FOjNDIVjX6BcAECbsMQeOrU71Is3bTqRGmqWpreIJf1UXJZilw%2FISYYpN2ixEv4fOpTMFM7NcFsdQ6iALAUL7RM%2F7nJkq9bDWtfp7NS2iJMp2%2FdRm%2BC9gR7Bk0WzDD7FmysCKYKFHmTNAbkpYhEsC4KJUnkQU9sh1wGurmvFh7SwjcrL16tqzevNrVtFHpKFCkJy9tFEurC%2FbEYA9SH7I16RvNAVQbCemMcKMSAoZd6c5sGR7zhjqCIVWIrZwcHuYusm%2BKpajgqOSp2uHzlciRHmQ6Koy0rRbfb4%2BOcKz5mr%2FjIo25ILg7Fx7DrjopzV0f45Pvs%2BfFj98qPFE3zAKjl8jOWAgDL6pYf9eR9FH603vjRP8X29d%2BsP%2BpZ90z4sfrkx3ZkfvR2%2FJhmz%2FyoeYAz4Wd0Wvw47fixxrKjjvcvNTFyJvz0Gv8o%2FJh2y%2FXHls9xHfOj5okGug3CNHOB2XZkqyUUuTjxYGH0a1VEScKvApucIi9y5zhNql8C99nf8jglOM2557hWACYxjDLLDKU93dLngWWwRbgB6DVi9yXCvPRQuVPSnBY28iSoHQK07qaAeeAU2B%2FCafZxeJdWuSLD9K%2FZBsXRR%2BOupve%2BcG9c8zvE3To53A35eCJHhQcfT6R9QtM65r0pO%2FvFu1jey7CmY%2BJHBxK%2FP0d4NOJ3fUN%2BN%2FEjXSLe7Jb4poTybuLhmnHYPhHwLeFtM1GOCLx9IPD7D4XHAl4b1YE35Q9kBwMvf8KUHbUGnhfLnyVl1cvfdhnXfwE%3D%3C%2Fdiagram%3E%3C%2Fmxfile%3E)

---

## 📅 **Catatan Pengerjaan**

* **Tanggal mulai**: 5 Mei 2025
* **Tanggal selesai**: 7 Mei 2025

---

## 🤝 **Kontribusi & Dukungan**

Jika Anda tertarik mengembangkan atau menyempurnakan proyek ini:

* Silakan fork, buat pull request, atau ajukan issue baru.
* Sangat terbuka terhadap saran dan kolaborasi pengembangan lanjutan!

---

Semoga panduan ini mempermudah Anda dalam memahami dan menjalankan sistem **CRM PT Smart**.
