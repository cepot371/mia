<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
$data = mysqli_query($koneksi,"SELECT * from siswa join kelas on siswa.id_kelas = kelas.id_kelas JOIN spp on siswa.id_spp = spp.id_spp");
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>

  </head>
<body>

	<?php

  include ('header.php');
?>


    <h2>Data SISWA</h2>
    <a class="btn btn-primary" href="tambah_siswa.php" role="button">+ &nbsp;Tambah Siswa</a>
    <br/>
    <table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">NISN</th>
          <th scope="col">NIS</th>
		  <th scope="col">Nama Siswa</th>
		  <th scope="col">Kelas</th>
		  <th scope="col">Alamat</th>
		  <th scope="col">No Telpon</th>
		  <th scope="col">Tahun Masuk</th>
		  <th scope="col">SPP per bulan</th>

          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
      $query = "SELECT * from siswa join kelas on siswa.id_kelas = kelas.id_kelas JOIN spp on siswa.id_spp = spp.id_spp ORDER BY nisn ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nisn']; ?></td>
		  <td><?php echo $row['nis']; ?></td>
		  <td><?php echo $row['nama']; ?></td>
		  <td><?php echo $row['nama_kelas']; ?></td>
		  <td><?php echo $row['alamat']; ?></td>
		  <td><?php echo $row['no_telp']; ?></td>
		  <td><?php echo $row['tahun']; ?></td>
          <td><?php echo substr($row['nominal'], 0, 20); ?></td>
          <td>
              <a href="edit_siswa.php?id=<?php echo $row['nisn']; ?>">Edit</a> |
              <a href="proses_hapussiswa.php?id=<?php echo $row['nisn']; ?>" onClick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>

      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
</body>
</html>
