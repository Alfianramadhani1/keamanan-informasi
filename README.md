
# CIE406 - Keamanan Informasi
## Studi Kasus: Data Fakultas

Project ini merupakan simulasi sistem informasi untuk pengelolaan data fakultas dan entitas terkait menggunakan Laravel 12 dan Filament v3.

### Struktur Tabel & Relasi:
1. **Fakultas**
   - `id`, `nama`, `kode`

2. **Program Studi**
   - Relasi: belongsTo Fakultas
   - `id`, `fakultas_id`, `nama`, `jenjang`

3. **Dosen**
   - Relasi: belongsTo Program Studi
   - `id`, `prodi_id`, `nama`, `nip`, `email`, `alamat`

4. **Mahasiswa**
   - Relasi: belongsTo Program Studi
   - `id`, `prodi_id`, `nama`, `nim`, `email`, `angkatan`

### Ringkasan Relasi:
- Fakultas → hasMany Prodi
- Prodi → hasMany Dosen & Mahasiswa
- Mahasiswa & Dosen → belongsTo Prodi → belongsTo Fakultas

### Fitur Keamanan:
- Enkripsi data sensitif (NIP, NIM)
- Validasi input
- Role-based access control

**Disusun Oleh:** Alfian Ramadhani