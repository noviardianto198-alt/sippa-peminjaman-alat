
# PERANCANGAN SISTEM SIPPA

## 1. Tujuan Perancangan

Merancang sistem informasi berbasis web untuk mengelola
data alat, peminjaman, pengembalian, dan riwayat transaksi.

## 2. Alur Proses

1. Peminjam melihat daftar dan ketersediaan alat.
2. Peminjam mengajukan peminjaman.
3. Petugas memeriksa permintaan.
4. Petugas menyetujui atau menolak permintaan.
5. Jika disetujui, penyerahan alat dicatat.
6. Petugas mencatat pengembalian dan kondisi alat.
7. Sistem memperbarui stok dan riwayat transaksi.

## 3. Diagram Konteks

Entitas eksternal:
- Administrator
- Petugas alat
- Peminjam

Sistem utama:
- SIPPA

Data masuk berupa data akun, data alat, permintaan peminjaman,
keputusan petugas, dan data pengembalian.

Data keluar berupa informasi stok, status pengajuan,
dan riwayat transaksi sesuai hak akses.

## 4. Entitas Basis Data

1. USERS: menyimpan akun dan peran pengguna.
2. TOOLS: menyimpan data alat dan stok total.
3. LOANS: menyimpan transaksi peminjaman.
4. LOAN_DETAILS: menyimpan rincian alat dalam transaksi.

## 5. Relasi

- USERS memiliki relasi dengan LOANS sebagai peminjam.
- USERS memiliki relasi dengan LOANS sebagai petugas pemroses.
- LOANS memiliki satu atau lebih LOAN_DETAILS.
- TOOLS dapat tercatat pada banyak LOAN_DETAILS.

## 6. Aturan Data

- ID setiap tabel menjadi primary key.
- Foreign key menjaga hubungan antarentitas.
- Kode alat dan username harus unik.
- Jumlah peminjaman harus lebih besar dari nol.
- Jumlah pengembalian tidak boleh melebihi jumlah peminjaman.
- Stok tersedia tidak boleh bernilai negatif.
- Kata sandi disimpan sebagai hash, bukan teks biasa.

## 7. Catatan

Diagram dan struktur tabel merupakan rancangan awal.
Detail tipe data, aturan stok, dan status transaksi harus
divalidasi sebelum implementasi basis data.
