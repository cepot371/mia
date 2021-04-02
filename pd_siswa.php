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
<h2>Panduan SISWA</h2>
<table class="tg">
<thead>
<tr>
    <th class="tg-0pky">
	<center><b>PETUNJUK</b></center>
	</th>
  </tr>
  </thead>
  <tr>
    <th class="tg-0pky">1. Bagian Halaman Login
	<br>Terdapat form untuk login dan variabel yang memiliki data bertuliskan "Beralih ke siswa" jika anda siswa maka klik "Beralih ke siswa"
	</th>
  </tr>
<tbody>
  <tr>
    <td class="tg-0pky">2. Bagian Dashboard Siswa
	<br>Tidak terdapat apa-apa hanya halaman awal saja dan bisa dijadikan untuk "kembali" jika anda sudah melihat data history transaksi pembayaran anda
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">3. Bagian Kembali ke Login
	<br>Untuk mengembalikan ke halaman login
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">4. Siswa ini hanya bisa melihat history transaksi pembayaran saja dengan cara memasukan nisn
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">5. Masukan NISN anda jika data anda terdaftar di sekolah ini, jika nisn yang anda masukkan tidak menampilkan apa-apa berarti anda bukan siswa dari sekolah ini
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">6. Jika sudah memasukan NISN anda dengan benar dan mengklik "Cari" maka akan menampilkan history pembayaran anda
	</td>
  </tr>
  <tr>
    <td class="tg-0pky">7. Jika ingin mengembalikan/tidak memperlihatkan data anda maka klik saja "Dashboard Siswa" atau "Kembali ke login" yang ada pada header
	</td>
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
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Header adalah variabel yang memiliki data yang didapat dari database untuk disimpan kedalam session PHP, di web ini ditunjukan dengan bar atas seperti dashboard siswa dan kembali ke login
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
</tbody>
</table>
</body>
</html>