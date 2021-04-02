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
<h2>Panduan PETUGAS</h2>
<table class="tg">
<thead>
<tr>
    <th class="tg-0pky">
	<center><b>PETUNJUK</b></center>
	</th>
  </tr>
  </thead>
  <tr>
    <th class="tg-0pky">1. Login terlebih dahulu sebagai petugas
	</th>
  </tr>
<tbody>
  <tr>
    <td class="tg-0pky">2. Petugas bisa mengakses data transaksi pembayaran saja
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">3. Bagian Dashboard petugas
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagian ini tidak berisi apa-apa, hanya halaman awal ketika anda berhasil login
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">4. Bagian Transaksi Pembayaran
	<br>    
	- Untuk melihat bagian siswa klik pada header yang bernama "Transaksi Pembayaran"
	<br>    
	- Tersedia kolom pencarian, tambah siswa, edit siswa, dan hapus siswa
	<br>    
	- Terdapat juga baris yang terdiri dari no, nama petugas, nisn, tanggal bayar, bulan bayar, tahun bayar, spp per bulan, jumlah bayar dan action
	<br>    
	- Ketikan nisn untuk mencari data transaksi pembayaran
	<br>    
	- Klik pada bagian "+ Siswa" untuk menambah data transaksi pembayaran
	<br>    
	- Dibagian ini isi kolom nama petugas, nisn, tanggal bayar, bulan bayar, tahun bayar, spp per bulan dan jumlah bayar jika sudah klik "Simpan TRANSAKSI"
	<br>    
	- Klik bagian "Edit" pada baris action untuk mengedit data transaksi pembayaran
	<br>    
	- Disini anda bisa mengedit data transaksi pembayaran seperti merubah tanggal bayar, bulan bayar dan jumlah bayar, untuk nama petugas, nisn tahun bayar dan spp per bulan saya disabled (tidak bisa dirubah) karna bersifat permanen
	<br>    
	- jika sudah klik "Simpan Perubahan"
	<br>    
	- Lalu untuk menghapus data klik "Hapus" pada kolom action maka akan ada peringatan "anda yakin akan menghapus data ini?" Jika ya maka klik "Ok" tapi jika tidak klik "Cancel" saja
	</td>
  </tr>
   <tr>
    <td class="tg-0pky">5. Bagian Logout
	<br>    
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jika anda mengklik logout yang ada pada header maka anda akan kembali ke halaman login
	</td>
  </tr>
  <tr>
 <tr>
    <th class="tg-0pky">
	<center><b>PENJELASAN</b></center>
	</th>
  </tr>  
  <tr>
    <td class="tg-0pky">
	<span style="font-weight:bold">HEADER</span>
	<br>       
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Header adalah variabel yang memiliki data yang didapat dari database untuk disimpan kedalam session PHP, di web ini ditunjukan dengan bar atas seperti dashboard petugas, transaksi pembayaran dan logout
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