<!DOCTYPE html>
<html>
    <head>
    <title>Ubah BUKU</title>
    <style>
    body {
    background: #4b4276;
    color: #666666;
    font-family: "RobotoDraft", "Roboto", sans-serif;
    font-size: 14px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
    /* Form Module */
    .form-module {
    position: relative;
    background: #ffffff;
    max-width: 700px;
    width: 100%;
    border-top: 15px solid #bebdb8;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    }
    .form-module .form {
    display: none;
    padding: 40px;
    }
    .form-module .form:nth-child(2) {
    display: block;
    }
    .form-module h2 {
    margin: 0 0 20px;
    color:#4b4276;
    font-size: 18px;
    font-weight: 400;
    line-height: 1;
    }
    .form-module input {
    outline: none;
    display: block;
    width: 100%;
    border: 1px solid #d9d9d9;
    margin: 0 0 20px;
    padding: 10px 15px;
    box-sizing: border-box;
    font-wieght: 400;
    transition: 0.3s ease;
    }
    .form-module input:focus {
    border: 1px solid #4b4276;
    color: #333333;
    }
    .form-module button {
    cursor: pointer;
    background: #4b4276;
    width: 100%;
    border: 0;
    padding: 10px 15px;
    color: #ffffff;
    transition: 0.3s ease;
    }
    .form-module .cta {
    background: #f2f2f2;
    width: 100%;
    padding: 15px 40px;
    box-sizing: border-box;
    color: #666666;
    font-size: 12px;
    text-align: center;
    }
    .form-module .cta a {
    color: #333333;
    text-decoration: none;
    }
    </style>
    </head>
    <body>
    <div class ="module form-module" style="margin-top: 50px">
      <div class ="form"></div>
      <div class="form">
        <?php
            include "koneksi.php";
            $qry_get_buku=mysqli_query($conn,"select * from buku where id_buku = '".$_GET['id_buku']."'");
            $dt_buku=mysqli_fetch_array($qry_get_buku);
        ?>
        <h2><b>Ubah Data Buku<b></h2>
        <form action="proses_ubah_buku.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_buku" value= "<?=$dt_buku['id_buku']?>">
            Nama Buku :

            <input type="text" name="nama_buku" value= "<?=$dt_buku['nama_buku']?>" class="form-control">

            Deskripsi :

            <input type="text" name="deskripsi" value= "<?=$dt_buku['deskripsi']?>" class="form-control">
        
            Foto Produk :
            <input type="file" name="file" value= "<?=$dt_buku['foto']?>" class="form-control">
            <br>
            <input type="submit" style="background-color: #bebdb8" name="simpan" value="Ubah Buku" class="btn btn-primary">
        </div>
        </form>
      <div class ="cta">Perpus Online</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>