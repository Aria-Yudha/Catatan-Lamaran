# 📝 Catatan Lamaran

Sebuah aplikasi web sederhana yang dibangun menggunakan framework Laravel untuk membantu melacak dan mengelola semua proses lamaran kerja Anda di satu tempat.

---

## 🚀 Fitur Utama

* **Manajemen Lamaran (CRUD):** Tambah, lihat, edit, dan hapus data lamaran kerja.
* **Pelacakan Status:** Pantau status setiap lamaran (misalnya: *Terkirim*, *Review*, *Interview*, *Diterima*, *Ditolak*).
* **Pencatatan Detail:** Simpan informasi penting seperti nama perusahaan, posisi yang dilamar, tanggal melamar, dan catatan khusus.
* **Dashboard Sederhana:** Lihat ringkasan cepat dari semua lamaran Anda.
* **[Fitur Lainnya]:** (Autentikasi user).

---

## 🛠️ Teknologi yang Digunakan

Proyek ini dibangun menggunakan tumpukan teknologi (stack) berikut:

* **Backend:** [PHP 8.x](https://www.php.net/)
* **Framework:** [Laravel 11.x](https://laravel.com/)
* **Database:** [MySQL](https://www.mysql.com/) (atau [PostgreSQL](https://www.postgresql.org/) - *sesuaikan dengan proyek Anda*)
* **Frontend:** Blade Templates, [Tailwind CSS](https://tailwindcss.com/) (atau [Bootstrap](https://getbootstrap.com/) - *sesuaikan dengan proyek Anda*)
* **Server Lokal:** Laravel Sail / Laragon / XAMPP (*sesuaikan dengan preferensi Anda*)

---

## ⚙️ Instalasi & Konfigurasi Lokal

Berikut adalah langkah-langkah untuk menjalankan proyek ini di lingkungan lokal Anda.

### 1. Prasyarat

Pastikan Anda telah menginstal perangkat lunak berikut di mesin Anda:
* PHP (versi `^8.2` atau lebih tinggi)
* Composer
* Node.js & NPM (Opsional, untuk kompilasi aset frontend)
* Database (MySQL/PostgreSQL)

### 2. Langkah Instalasi

1.  **Clone repositori:**
    ```bash
    git clone [https://github.com/Aria-Yudha/Catatan-Lamaran.git](https://github.com/Aria-Yudha/Catatan-Lamaran.git)
    cd Catatan-Lamaran
    ```

2.  **Instal dependensi PHP:**
    ```bash
    composer install
    ```

3.  **Buat file `.env`:**
    Salin file `.env.example` menjadi `.env`.
    ```bash
    cp .env.example .env
    ```

4.  **Hasilkan *Application Key*:**
    ```bash
    php artisan key:generate
    ```

5.  **Konfigurasi Database:**
    Buka file `.env` dan atur koneksi database Anda (terutama `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=db_catatan_lamaran
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    *Pastikan Anda sudah membuat database `db_catatan_lamaran` (atau nama lain) di MySQL Anda.*

6.  **Jalankan Migrasi Database:**
    Perintah ini akan membuat semua tabel yang diperlukan di database Anda.
    ```bash
    php artisan migrate
    ```
    
    *(Opsional) Jika Anda memiliki Seeder untuk data dummy, jalankan:*
    ```bash
    php artisan db:seed
    ```

7.  **(Opsional) Instal dependensi NPM:**
    Jika proyek Anda menggunakan aset frontend yang perlu di-compile (seperti Tailwind/Vue/React).
    ```bash
    npm install
    npm run dev
    ```

8.  **Jalankan server lokal:**
    ```bash
    php artisan serve
    ```

    Aplikasi Anda sekarang seharusnya berjalan di `http://127.0.0.1:8000`.

---

## 📄 Lisensi

Proyek ini dilisensikan di bawah **MIT License**. Lihat file `LICENSE` untuk detail lebih lanjut.

---

## 🧑‍💻 Kontak

Aria Yudha - [aria.yudha.pratama21@gmail.com](mailto:aria.yudha.pratama21@gmail.com)

Link Proyek: [https://github.com/Aria-Yudha/Catatan-Lamaran](https://github.com/Aria-Yudha/Catatan-Lamaran)
