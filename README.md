# Laravel JWT Authentication API

## Tentang
Projek ini adalah implementasi dari JSON Web Tokens (JWT) untuk autentikasi dalam Laravel. Fitur utamanya adalah API CRUD untuk 'Posts' yang dapat diakses oleh pengguna yang telah diotentikasi.

## Bagaimana Menjalankan Projek
Untuk menjalankan projek ini, ikuti langkah-langkah berikut:

1. Clone repository ini menggunakan git:

   ```bash
   git clone https://github.com/widada-id/laravel-restapi-and-jwt.git
   ```

2. Buka direktori projek:

   ```bash
   cd laravel-restapi-and-jwt
   ```

3. Install dependencies dengan composer:

   ```bash
   composer install
   ```

4. Salin file `.env.example` dan ubah nama menjadi `.env`, lalu sesuaikan pengaturannya dengan environment Anda.

5. Jalankan perintah:

   ```bash
   php artisan migrate
   php artisan jwt:secret
   php artisan key:generate
   ```

6. Jalankan server:

   ```bash
   php artisan serve
   ```

## Database Design
Database ini terdiri dari dua tabel utama yaitu `users` dan `posts`.

- `users` - menyimpan informasi tentang pengguna, termasuk nama, email, dan password (di-hash).
- `posts` - menyimpan informasi tentang post, termasuk judul dan isi dari post itu sendiri.

## List API Design

Berikut adalah daftar API yang ada dalam projek ini:

1. `/register` - POST: mendaftarkan pengguna baru.
2. `/login` - POST: log in pengguna.
3. `/logout` - POST: log out pengguna.
4. `/refresh` - POST: memperbarui token JWT.
5. `/me` - GET: mengambil informasi pengguna yang saat ini diotentikasi.
6. `/posts` - GET: mengambil semua post.
7. `/posts` - POST: membuat post baru.
8. `/posts/{id}` - GET: mengambil detail post berdasarkan id.
9. `/posts/{id}` - PUT: memperbarui post berdasarkan id.
10. `/posts/{id}` - DELETE: menghapus post berdasarkan id.

Harap baca dokumentasi lebih lanjut untuk informasi lebih detail tentang cara menggunakan API ini.
