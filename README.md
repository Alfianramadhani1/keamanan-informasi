**Disusun Oleh:** Alfian Ramadhani 20230801217

# 📘 Fakultas App

Aplikasi manajemen data fakultas berbasis Laravel 12 dan Filament v3.

## 🚀 Fitur Utama

- CRUD data fakultas (kode, nama, dekan, email)
- Tampilan admin menggunakan **Filament v3**
- Validasi input
- Pencarian dan sortir data
- Upload-ready ke GitHub

## 📂 Struktur Data

**Tabel: `faculties`**
| Kolom         | Tipe Data   | Keterangan           |
|---------------|-------------|----------------------|
| id            | BIGINT      | Primary key          |
| kode_fakultas | VARCHAR(10) | Kode unik fakultas   |
| nama_fakultas | VARCHAR     | Nama lengkap         |
| dekan         | VARCHAR     | Nama dekan fakultas  |
| kontak_email  | VARCHAR     | Email kontak fakultas|
| created_at    | TIMESTAMP   | Otomatis Laravel     |
| updated_at    | TIMESTAMP   | Otomatis Laravel     |

## 🛠️ Instalasi

### 1. Clone Repositori
```bash
git clone https://github.com/Alfianramadhani1/keamanan-informasi
cd keamanan-informasi
```

### 2. Install Dependency
```bash
composer install
npm install && npm run dev
```

### 3. Salin dan Atur File .env
```bash
cp .env.example .env
php artisan key:generate
```
Edit `.env` sesuai konfigurasi database-mu:
```env
DB_DATABASE=fakultas_db
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Migrasi Database
```bash
php artisan migrate
```

### 5. Jalankan Server
```bash
php artisan serve
```

## 🔐 Keamanan

- Pastikan `.env`:
  ```env
  APP_ENV=production
  APP_DEBUG=false
  ```
- Middleware tambahan disarankan:
  - `spatie/laravel-csp`
  - `laravel/sanctum` atau `laravel/breeze`

## 👨‍💻 Developer Tools

### Generate Resource
```bash
php artisan make:model Faculty -m
php artisan make:filament-resource Faculty
```

### Autentikasi Laravel Breeze
```bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
php artisan migrate
```
### File Tambahan :
-`jawaban_essay.pdf` : berisi jawaban pertanyaan essay


## 📄 Lisensi

Aplikasi ini menggunakan lisensi open-source [MIT](https://opensource.org/licenses/MIT).
