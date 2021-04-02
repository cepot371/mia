<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>
  <head><link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title></title>

  </head>
<body>

	<?php

  include ('header.php');
?>


    <h2>Data Pengguna</h2>
    <a class="btn btn-primary" href="tambah_petugas.php" role="button">+ &nbsp;Tambah Pengguna</a>
    <br/>
    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Username</th>
		<th scope="col">Password</th>
        <th scope="col">Nama Pengguna</th>
		<th scope="col">Level</th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
      $query = "SELECT * FROM petugas ORDER BY id_petugas ASC";
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
          <td><?php echo $row['username']; ?></td>
		  <td><value="<?php echo $row['password']; ?>" hidden></td>
          <td><?php echo substr($row['nama_petugas'], 0, 20); ?></td>
		  <td><?php echo $row['level']; ?></td>
          <td>
              <a href="edit_petugas.php?id=<?php echo $row['id_petugas']; ?>">Edit</a> |
              <a href="proses_hapuspetugas.php?id=<?php echo $row['id_petugas']; ?>" onClick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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
