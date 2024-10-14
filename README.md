# Kursus Online

Selamat datang di repositori Kursus Online! Proyek ini adalah sebuah platform kursus online yang dibangun menggunakan framework Laravel.

## Deskripsi Proyek

Kursus Online adalah sebuah aplikasi web yang memungkinkan pengguna untuk mengakses dan mengelola kursus-kursus secara online. Aplikasi ini didesain untuk memfasilitasi pembelajaran jarak jauh dan menyediakan antarmuka yang user-friendly bagi peserta kursus maupun instruktur.

## Teknologi yang Digunakan

- Laravel - Framework PHP untuk pengembangan web
- Tailwind CSS - Framework CSS untuk desain responsif
- Vite - Build tool dan dev server
- MySQL - Database management system

## Fitur Utama

- Manajemen kursus
- Pendaftaran dan autentikasi pengguna
- Dashboard untuk peserta dan instruktur
- Integrasi materi pembelajaran

## Instalasi

1. Clone repositori ini:
   ```
   git clone https://github.com/prabusemar/kursus-online.git
   ```

2. Pindah ke direktori proyek:
   ```
   cd kursus-online
   ```

3. Install dependensi PHP menggunakan Composer:
   ```
   composer install
   ```

4. Install dependensi JavaScript menggunakan npm:
   ```
   npm install
   ```

5. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database:
   ```
   cp .env.example .env
   ```

6. Generate application key:
   ```
   php artisan key:generate
   ```

7. Jalankan migrasi database:
   ```
   php artisan migrate
   ```

8. Compile assets:
   ```
   npm run dev
   ```

9. Jalankan server development:
   ```
   php artisan serve
   ```

## Penggunaan

Setelah instalasi selesai, Anda dapat mengakses aplikasi melalui browser dengan mengunjungi `http://localhost:8000`.

## Kontribusi

Kontribusi selalu diterima dengan senang hati. Jika Anda ingin berkontribusi pada proyek ini, silakan buat pull request atau buka issue untuk diskusi fitur baru atau perbaikan bug.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

## Kontak

Jika Anda memiliki pertanyaan atau saran, silakan hubungi [prabusemar](https://github.com/prabusemar) melalui GitHub.

---

Terima kasih telah menggunakan atau berkontribusi pada proyek Kursus Online!
