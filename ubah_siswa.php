<!DOCTYPE html>
<html>
    <head>
    <title>Ubah Siswa</title>
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
    <div class ="module form-module" style="margin-top: 50px">
      <div class ="form"></div>
      <div class="form">
        <?php
            include "koneksi.php";
            $qry_get_siswa=mysqli_query($conn,"select * from siswa where id_siswa = '".$_GET['id_siswa']."'");
            $dt_siswa=mysqli_fetch_array($qry_get_siswa);
        ?>
        <h2><b>Ubah Data Siswa<b></h2>
        <form action="proses_ubah_siswa.php" method="post">
            <input type="hidden" name="id_siswa" value= "<?=$dt_siswa['id_siswa']?>">
            Nama Siswa :

           <input type="text" name="nama_siswa" value= "<?=$dt_siswa['nama_siswa']?>" class="form-control">

            Tanggal Lahir :

            <input type="date" name="tanggal_lahir" value= "<?=$dt_siswa['tanggal_lahir']?>" class="form-control">
        
            Gender :
            <?php
                $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
            ?>
            <select name="gender" class="form-control">
                <option></option>
                <?php foreach ($arr_gender as $key_gender => $val_gender):
                    if($key_gender==$dt_siswa['gender']){
                        $selek="selected";
                    } else {
                        $selek="";
                    }
                ?>

                <option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
                <?php endforeach ?>
            </select>
            <br>
             Alamat : 
            <input type="text" name="alamat" value= "<?=$dt_siswa['alamat']?>" class="form-control">
            
            Kelas :
             <select name="id_kelas" class="form-control">
                <option></option>
                <?php
                    include "koneksi.php";
                    $qry_kelas=mysqli_query($conn,"select * from kelas");
                    while($data_kelas=mysqli_fetch_array($qry_kelas)){
                    if($data_kelas['id_kelas']==$dt_siswa['id_kelas']){
                    $selek="selected";
                    } else {
                    $selek="";
                    }

                    echo '<option value="'.$data_kelas['id_kelas'].'"
                    '.$selek.'>'.$data_kelas['nama_kelas'].'</option>';

                    }
                ?>
            </select>
            <br>
            Username :
            <input type="text" name="username" value= "<?=$dt_siswa['username']?>" class="form-control">

            Password :
            <input type="password" name="password" value="" class="form-control">
         
            <br>
            <input type="submit" style="background-color: #A9A9A9" name="simpan" value="Ubah Siswa" class="btn btn-primary">
        </div>
        </form>
      <div class ="cta">Perpus Online</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
</body>
</html>