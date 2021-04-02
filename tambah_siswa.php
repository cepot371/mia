<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: gray;
      }
	  h2 {
        text-transform: uppercase;
        color: gray;
      }
	  h3 {
        text-transform: uppercase;
        color: gray;
      }
	  h5 {
        text-transform: uppercase;
        color:#999999;
      }
    button {
          background-color: gray;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: gray;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
	  a {
          background-color: gray;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
<body>
  <?php
  include ('header.php');
?>



      <center>
        <h2>Tambah SISWA</h2>
      <center>
      <form method="POST" action="proses_tambahsiswa.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>NISN</label>
          <input type="text" name="nisn" autofocus="" required="" />
        </div>
        <div>
          <label>NIS</label>
         <input type="text" name="nis" required=""/>
        </div>
		<div>
          <label>Nama</label>
         <input type="text" name="nama" required=""/>
        </div>
      <div>
          <label>Kelas</label>
          <select name="id_kelas" style="width: 357px;">
 <option value="not_option"> Silahkan Pilih Kelas</option>
  <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
      $query = "SELECT * FROM kelas ORDER BY nama_kelas ASC";
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
 <option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>
 <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
 </select>
        
	    </div>
</div>
		<div>
          <label>Alamat</label>
         <input type="text" name="alamat" required=""/>
        </div>
		<div>
          <label>No Telp</label>
         <input type="text" name="no_telp" required=""/>
        </div>
        <div>
		<label>Tahun</label>
          <select name="id_spp" style="width: 357px;">
 <option value="not_option"> Silahkan Pilih Tahun</option>
  <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
      $query = "SELECT * FROM spp ORDER BY tahun ASC";
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
 <option value="<?php echo $row['id_spp']; ?>"><?php echo $row['tahun']; ?></option>
 <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
 </select>
        </div>

        <div>
         <button type="submit">Simpan SISWA</button>
        </div>
        </section>
      </form>
</body>
</html>
