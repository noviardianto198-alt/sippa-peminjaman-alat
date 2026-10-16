
# ANALISIS KEBUTUHAN SISTEM SIPPA

## 1. Identitas Sistem

Nama: Sistem Informasi Peminjaman dan Pengembalian Alat (SIPPA)

Jenis: Aplikasi berbasis web

## 2. Identifikasi Stakeholder

1. Administrator: mengelola akun dan hak akses.
2. Petugas alat: mengelola data alat dan transaksi.
3. Peminjam: melihat alat dan mengajukan peminjaman.
4. Penanggung jawab: memantau stok dan riwayat transaksi.

Catatan: daftar stakeholder merupakan rancangan awal
yang perlu dikonfirmasi kepada calon pengguna.

## 3. Kebutuhan Fungsional

FR-01: Pengguna dapat masuk sesuai akun dan hak akses.
FR-02: Administrator dapat mengelola akun pengguna.
FR-03: Petugas dapat mengelola data alat.
FR-04: Pengguna dapat melihat ketersediaan alat.
FR-05: Peminjam dapat mengajukan peminjaman.
FR-06: Petugas dapat menyetujui atau menolak pengajuan.
FR-07: Sistem mencatat tanggal peminjaman dan rencana pengembalian.
FR-08: Petugas dapat mencatat pengembalian dan kondisi alat.
FR-09: Sistem memperbarui stok berdasarkan transaksi yang sah.
FR-10: Pengguna berwenang dapat melihat riwayat transaksi.

## 4. Kebutuhan Nonfungsional

NFR-01: Akses fitur dibatasi sesuai hak akses.
NFR-02: Formulir mudah dipahami dan memiliki pesan kesalahan.
NFR-03: Stok tidak boleh menjadi negatif.
NFR-04: Target waktu tampil halaman daftar alat maksimal 3 detik
pada kondisi pengujian yang ditetapkan.
NFR-05: Antarmuka mendukung browser modern pada komputer dan ponsel.
NFR-06: Kode dikelola menggunakan Git.

## 5. Kriteria Penerimaan

AC-01: Login valid mengarahkan pengguna sesuai hak akses.
AC-02: Stok tersedia ditampilkan sesuai data.
AC-03: Pengajuan peminjaman tersimpan dengan status menunggu.
AC-04: Persetujuan peminjaman memperbarui status dan stok.
AC-05: Pengembalian tercatat dan stok diperbarui.
AC-06: Pengguna tanpa izin tidak dapat mengakses fitur administrator.

## 6. Metode Elisitasi yang Direncanakan

1. Wawancara dengan calon peminjam dan petugas.
2. Observasi proses peminjaman dan pengembalian.
3. Pemeriksaan formulir atau dokumen pencatatan yang digunakan.

Hasil wawancara dan observasi harus diisi berdasarkan
data nyata, bukan dibuat seolah-olah sudah dilakukan.

## 7. Catatan Validasi

Dokumen ini merupakan rancangan awal kebutuhan sistem.
Kebutuhan perlu dikonfirmasi kepada stakeholder sebelum
dijadikan dasar implementasi.
