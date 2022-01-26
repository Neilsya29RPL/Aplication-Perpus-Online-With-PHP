<!DOCTYPE html>
<html>
    <head>
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
    <div class ="module form-module" style="margin-top: 20px">
      <div class ="form"></div>
      <div class="form">
        <h2><b>Pengisian Data Siswa<b></h2>
         <form action="proses_tambah_siswa.php" method="post">
            <input type ="text" name="nama_siswa" class="form-control" placeholder ="Nama Siswa" /> 
            Tanggal Lahir : 
            <input type="date" name="tanggal_lahir" value="" class="form-control">
            Gender :
            <select name="gender" class="form-control">
                <option></option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            <br>
           <input type ="text" name="alamat" class="form-control" placeholder ="Alamat" />
            Kelas :
            <select name="id_kelas" class="form-control">
                <option></option>
                <?php
                    include "koneksi.php";
                    $qry_kelas=mysqli_query($conn,"select * from kelas");
                    while($data_kelas=mysqli_fetch_array($qry_kelas)){
                    echo '<option
                    value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
                    }
                ?>
            </select>
            <br>
            <input type="text" name="username" value="" class="form-control" placeholder ="Username">
            <input type="password" name="password" value="" class="form-control" placeholder ="Password">
           
            <input type="submit" style="background-color: #A9A9A9" name="simpan" value="Tambah Siswa" class="btn btn-primary">
      </div>
        </form>
      <div class ="cta">Perpus Online</div>
    </div>
</body>
</html>
<br>