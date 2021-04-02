<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.tg  {
	border-collapse:collapse;
	border-spacing:0;
	}
.tg td{
	border-color:black;
	border-style:solid;
	border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;
  }
.tg th{
	border-color:black;
	border-style:solid;
	border-width:1px;
	font-family:Arial, sans-serif;
	font-size:14px;
  font-weight:normal;
  overflow:hidden;
  padding:10px 5px;
  word-break:normal;
  }
.tg 
.tg-0pky{
	border-color:inherit;
	text-align:left;
	vertical-align:
	top
	}
</style>
</head>
<body>
<?php
  include('head_panduan.php');
  
?>
<center>
<h2>Panduan ADMIN</h2>
<table class="tg">
<tbody>
<thead>
<tr>
    <th class="tg-0pky">
	<center><b>PETUNJUK</b></center>
	</th>
  </tr>
  <thead>
   <tr>
    <th class="tg-0pky">1. Login terlebih dahulu sebagai admin
	</th>
  </tr>
  <tr>
    <td class="tg-0pky">2. Admin bisa mengakses semua yang ada pada website spp, sepertI membuat, menambah, mengedit dan menghapus
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">3. Bagian Dashboard Admin
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagian ini tidak berisi apa-apa, hanya halaman awal ketika anda berhasil login
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">4. Bagian SPP
	<br>- Untuk melihat bagian SPP klik pada header yang bernama "SPP"
	<br>- Tersedia kolom pencarian, tambah spp, edit spp, dan hapus spp
	<br>- Terdapat juga baris yang terdiri dari no, tahun, nominal dan action
	<br>- Ketikan tahun berapa untuk mencari data spp pada tahun tersebut
	<br>- Klik pada bagian "+ SPP" untuk menambah data spp
	<br>- Dibagian ini isi kolom tahun dan nominal jika sudah klik "Simpan SPP"
	<br>- Klik bagian "Edit" pada baris action untuk mengedit data spp
	<br>- Disini anda bisa mengedit data spp namun di spp ini hanya bisa mengedit nominal nya saja tidak dengan tahun
	<br>- jika sudah klik "Simpan Perubahan"
	<br>- Lalu untuk menghapus data klik "Hapus" pada baris action maka akan ada peringatan "anda yakin akan menghapus data ini?" Jika ya maka klik "Ok" tapi jika tidak klik "Cancel" saja
	</td>
  </tr>
    <tr>
    <td class="tg-0pky">5. Bagian Kelas
	<br>- Untuk melihat bagian kelas klik pada header yang bernama "Kelas"
	<br>- Tersedia kolom pencarian, tambah kelas, edit kelas, dan hapus kelas
	<br>- Terdapat juga baris yang terdiri dari no, nama kelas, kompetensi keahlian dan action
	<br>- Ketikan kelas  apa/berapa untuk mencari data kelas 
	<br>- Klik pada bagian "+ Kelas" untuk menambah data kelas
	<br>- Dibagian ini isi kolom nama kelas dan kompetensi keahlian jika sudah klik "Simpan KELAS"
	<br>- Klik bagian "Edit" pada baris action untuk mengedit data kelas
	<br>- Disini anda bisa mengedit data kelas seperti merubah nama kelas dan kompetensi keahlian
	<br>- jika sudah klik "Simpan Perubahan"
	<br>- Lalu untuk menghapus data klik "Hapus" pada baris action maka akan ada peringatan "anda yakin akan menghapus data ini?" Jika ya maka klik "Ok" tapi jika tidak klik "Cancel" saja
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">6. Bagian Pengguna
	<br>- Untuk melihat bagian pengguna klik pada header yang bernama "Pengguna"
	<br>- Tersedia kolom pencarian, tambah pengguna, edit pengguna, dan hapus pengguna
	<br>- Terdapat juga baris yang terdiri dari no, username, password, nama pengguna dan action, disini password saya hidden (disembunyikan) karna bersifat privasi walaupun admin bisa mengakses nya
	<br>- Ketikan username untuk mencari data penguna
	<br>- Klik pada bagian "+ Pengguna" untuk menambah data pengguna
	<br>- Dibagian ini isi kolom username, password, nama pengguna dan pilih level jika sudahklik "Simpan PENGGUNA"
	<br>- Klik bagian "Edit" pada baris action untuk mengedit data pengguna
	<br>- Disini anda bisa mengedit data pengguna seperti merubah username, password, nama pengguna dan level
	<br>- jika sudah klik "Simpan Perubahan"
	<br>- Lalu untuk menghapus data klik "Hapus" pada baris action maka akan ada peringatan "anda yakin akan menghapus data ini?" Jika ya maka klik "Ok" tapi jika tidak klik "Cancel" saja
	</td>
  </tr>
    <tr>
    <td class="tg-0pky">7. Bagian Siswa
	<br>- Untuk melihat bagian siswa klik pada header yang bernama "Siswa"
	<br>- Tersedia kolom pencarian, tambah siswa, edit siswa, dan hapus siswa
	<br>- Terdapat juga baris yang terdiri dari no, nisn, nis, nama siswa, kelas, alamat, no telepon, tahun masuk dan action
	<br>- Ketikan nis untuk mencari data siswa
	<br>- Klik pada bagian "+ Siswa" untuk menambah data siswa
	<br>- Dibagian ini isi kolom nisn, nis, nama siswa, kelas, alamat, no telepon dan tahun masuk jika sudah klik "Simpan SISWA"
	<br>- Klik bagian "Edit" pada baris action untuk mengedit data siswa
	<br>- Disini anda bisa mengedit data siswa seperti merubah nama siswa, kelas, alamat dan no telepon, untuk nisn, nis dan tahun masuk saya disabled (tidak bisa dirubah) karna bersifat permanen
	<br>- jika sudah klik "Simpan Perubahan"
	<br>- Lalu untuk menghapus data klik "Hapus" pada baris action maka akan ada peringatan "anda yakin akan menghapus data ini?" Jika ya maka klik "Ok" tapi jika tidak klik "Cancel" saja
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">8. Bagian Transaksi Pembayaran
	<br>    
	- Untuk melihat bagian transaksi pembayaran klik pada header yang bernama "Transaksi Pembayaran"
	<br>    
	- Tersedia kolom pencarian, tambah siswa, edit siswa, dan hapus siswa
	<br>    
	- Terdapat juga baris yang terdiri dari no, nama petugas, nisn, tanggal bayar, bulan bayar, tahun bayar, spp per bulan, jumlah bayar dan action
	<br>    
	- Ketikan nisn untuk mencari data transaksi pembayaran
	<br>    
	- Klik pada bagian "+ Transaksi" untuk menambah data transaksi pembayaran
	<br>    
	- Dibagian ini isi kolom nama petugas, nisn, tanggal bayar, bulan bayar, tahun bayar, spp per bulan dan jumlah bayar jika sudah klik "Simpan TRANSAKSI"
	<br>    
	- Klik bagian "Edit" pada baris action untuk mengedit data transaksi pembayaran
	<br>    
	- Disini anda bisa mengedit data transaksi pembayaran seperti merubah tanggal bayar, bulan bayar dan jumlah bayar, untuk nama petugas, nisn tahun bayar dan spp per bulan saya disabled (tidak bisa dirubah) karna bersifat permanen
	<br>    
	- jika sudah klik "Simpan Perubahan"
	<br>    
	- Lalu untuk menghapus data klik "Hapus" pada baris action maka akan ada peringatan "anda yakin akan menghapus data ini?" Jika ya maka klik "Ok" tapi jika tidak klik "Cancel" saja
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">9. Bagian Laporan
	<br>- Berisi dua form yaitu "Laporan Transaksi" dan "Laporan Data Siswa"
	<br>- Jika mengklik laporan transaksi maka anda akan diperintahkan untuk mengisi data tanggal/bulan/tahun untuk mengetahui siswa yang sudah membayar spp pada tanggal/bulan/tahun tersebut
	<br>- Jika sudah mengisinya klik "Export ke Word" maka akan otomatis terdownload dalam bentuk file "data-transaksi.word" dan menampilkan data pembayaran spp sesuai dengan tanggal/bulan/tahun yang dimasukkan
	<br>- Jika mengklik "Laporan Data Siswa" maka akan diperintahkan untuk mengisi data kelas dan tahun untuk mengetahui data siswa dari kelas tersebut dan pada tahun tersebut
	<br>- Jika sudah mengisinya klik "Export ke Excel: maka akan otomatis terdownload dalam bentuk file "data-siswa.xls" dan menampilkan data siswa pada kelas dan tahun sesuai yang diisikan
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">10. Bagian Logout
	<br>    
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jika anda mengklik logout yang ada pada header maka anda akan kembali ke halaman login atau keluar dari halaman
	</td>
  </tr>
  <tr>
  </tr>
<tr>
    <th class="tg-0pky">
	<center><b>PENJELASAN</b></center>
	</th>
  </tr>  
  <tr>
    <td class="tg-0pky">
	<span style="font-weight:bold">HEADER</span>
	<br>       
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Header adalah variabel yang memiliki data yang didapat dari database untuk disimpan kedalam session PHP, di web ini ditunjukan dengan bar atas seperti dashboard admin, spp, kelas, pengguna, siswa, transaksi pembayaran, laporan dan logout
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">
	<span style="font-weight:bold">KOLOM PENCARIAN</span>
	<br>
	<span style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	<span style="font-weight:normal">Kolom pencarian berfungsi untuk mencari data tertentu sesuai dengan yang anda perintahkan	</span>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">
	<span style="font-weight:bold">+ TAMBAH (NAMA TABEL/DATA)</span>
	<br>
	<span style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	<span style="font-weight:normal">Tools ini berfungsi untuk menambah data</span>
	</td>
  </tr>
  <tr>
    <td class="tg-fymr">
	<span style="font-weight:bold">ACTION</span>
	<br>
	<span style="font-weight:bold">       </span>
	<span style="font-weight:normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tindakan untuk memperbaiki/menghapus data</span>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">
	<span style="font-weight:bold">EDIT</span>
	<br>
	<span style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	<span style="font-weight:normal">Termasuk kedalam baris action yang fungsinya untuk mengedit data</span>
	</td>
  </tr>
  <tr>
    <td class="tg-fymr">
	<span style="font-weight:bold">HAPUS</span>
	<br>
	<span style="font-weight:bold">       </span>
	<span style="font-weight:normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Termasuk kedalam baris action yang fungsinya untuk menghapus data</span>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">
	<span style="font-weight:bold">TAHUN DAN NOMINAL</span>
	<br>
	<span style="font-weight:normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tahun ini untuk menandai siswa tahun berapakah siswa ini masuk sedangkan nominal untuk mengetahui pembayaran spp pada tahun ketika siswa itu masuk, kedua data ini berfungsi untuk inputan data pada siswa dan transaksi</span>
	<br>
	</td>
  </tr>
  <tr>
    <td class="tg-fymr">
	<span style="font-weight:bold">NAMA KELAS DAN KOMPETENSI KEAHLIAN</span>
	<br>
	<span style="font-weight:400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kedua data ini untuk menandai siswa karna berfungsi untuk inputan data siswa</span>
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">
	<span style="font-weight:bold">USERNAME, PASSWORD, NAMA PENGGUNA DAN LEVEL</span>
	<br>
	<span style="font-weight:normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semua data ini memiliki peran yang sangat penting, karna :</span>
	<br>
	<span style="font-weight:normal">- Username : Untuk nama ketika pengguna login</span>
	<br>
	<span style="font-weight:normal">- Password : Kata sandi/kunci yang harus dimasukan agar bisa mengakses halaman yang dituju</span>
	<br>
	<span style="font-weight:normal">- Nama pengguna : Untuk mengetahui nama asli dari pengguna</span>
	<br>
	<span style="font-weight:normal">- Level : Menentukan anda ketika login, misalnya jika anda admin maka halaman yang anda tuju adalah halaman admin yang bisa mengakses semua data, jika level anda petugas maka halaman yang anda tuju adalah halaman petugas yang tidak mengakses semua data</span>
	</td>
  </tr>
  <tr>
    <th class="tg-0pky">
	<span style="font-weight:bold">NISN, NIS, NAMA, KELAS, ALAMAT, NO TELEPON, TAHUN MASUK, SPP PER BULAN</span>
	<br>
	<span style="font-weight:normal"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Semua data ini adalah inputan untnuk menambahkan siswa</span>
	<br>
	<span style="font-weight:normal">- NISN : Berfungsi agar siswa memliki identitas sebagai siswa nasional</span>
	<br>
	<span style="font-weight:normal">- NIS : Berfungsi agar siswa memiliki identitas sebagai siswa di sekolah </span>
	<br>
	<span style="font-weight:normal">- Nama : Berfungsi untuk mengetahui nama siswa</span>
	<br>
	<span style="font-weight:normal">- Kelas : Berfungsi untuk mengetahui kelas yang akan ditempati oleh siswa dan kelas ini mengambil inputan dari tabel/data kelas yang sudah diisi</span>
	<br>
	<span style="font-weight:normal">- Alamat : Berfungsi agar mengetahui tempat tinggal siswa </span>
	<br>
	<span style="font-weight:normal">- No Telepon : Berfungsi untuk mengetahui nomor telepon siswa agar jika ada sesuatu dengan sekolah, pihak sekolah bisa menghubungi siswa lewat telepon</span>
	<br>- Tahun Masuk : Berfungsi untuk mengetahui sekaligus menandai tahun berapa siswa itu masuk, dan tahun masuk ini inputan dari tabel/data spp yang sudah diisi
	<br>- SPP Per Bulan : Berfungsi untuk mengetahui pembayaran spp pada tahun siswa itu masuk, dan spp per bulan ini juga adalah inputan dari tabel/data spp yang sudah diisi, dan akan terisi otomatis ketika menginputkan tahun masuk di tabel/data siswa
	</th>
  </tr>
    <tr>
    <th class="tg-0pky">
	<span style="font-weight:bold">NAMA PETUGAS, NISN, TANGGAL BAYAR, BULAN BAYAR, TAHUN BAYAR, SPP PER BULAN DAN JUMLAH BAYAR</span>
	<br>- Nama Petugas : Berfungsi agar mengetahui nama petugas yang melayani ketika siswa membayar spp 
	<br>
	<span style="font-weight:normal">- NISN : Berfungsi agar siswa memliki identitas sebagai siswa nasional</span>
	<br>
	<span style="font-weight:normal">- Tanggal Bayar: Berfungsi untuk menandai tanggal berapa saat siswa membayar spp</span>
	<br>
	<span style="font-weight:normal">- Bulan Bayar : Berfungsi untuk menandai bulan apa saat siswa membayar spp</span>
	<br>
	<span style="font-weight:normal">- Tahun Bayar : Berfungsi untuk menandai tahun berapa saat siswa membayar spp</span>
	<br>
	<span style="font-weight:normal">- SPP Per Bulan : Berfungsi agar petugas dan siswa mengetahui besarnya nominal yang harus dibayar oleh siswa setiap bulannya</span>
	<br>
	<span style="font-weight:normal">- Jumlah Bayar : Berfungsi untuk mengetahui jumlah yang dibayar oleh siswa apakah sesuai dengan nominal spp per bulan apakah tidak, jika sesuai berarti lunas jika siswa membayar dibawah nominal spp per bulan berarti belum</span>
	</th>
  </tr>
  <tr>
    <td class="tg-0pky">
	<span style="font-weight:bold">LAPORAN TRANSAKSI DAN LAPORAN DATA SISWA</span>
	<br>- Laporan Transaksi
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laporan yang berfungsi untuk mengetahui pembayaran spp yang sudah masuk pada tanggal/bulan/tahun yang dipilih
	<br>- Laporan Data Siswa
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laporan yang berfungsi untuk mengetahui data siswa pada kelas tertentu dan pada tahun tertentu
	</td>
  </tr>
  <tr>
    <td> 
	<span style="font-weight:bold">PANDUAN ADMIN, PANDUAN PETUGAS DAN PANDUAN SISWA</span>
	<br>
	<span style="font-weight:normal">- Panduan admin</span>
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-weight:normal">Berisi panduan/petunjuk untuk admin</span>
	<br>
	<span style="font-weight:normal">- Panduan Petugas</span>
	<br>
	<span style="font-weight:normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berisi panduan/petunjuk untuk petugas</span>
	<br>
	<span style="font-weight:normal">- Panduan Siswa</span>
	<br>
	<span style="font-weight:normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berisi panduan/petunjuk untuk siswa</span>
	</td>
  </tr>
</tbody>
</table>
</center>
</body>
</html>