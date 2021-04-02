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
        <h2>Tambah KELAS</h2>
      <center>
      <form method="POST" action="proses_tambahkelas.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Kelas</label>
          <input type="text" name="nama_kelas" autofocus="" required="" />
        </div>
        <div>
          <label>Kompetensi Keahlian</label>
         <input type="text" name="kompetensi_keahlian" required=""/>
        </div>

        <div>
         <button type="submit">Simpan KELAS</button>
        </div>
        </section>
      </form>
</body>
</html>
