<?php
include "header.php";
?>

<style>
    body{
        background-color: #4b4276;
    }
</style>

<nav class="navbar navbar-expand-lg" style="margin-top: 40px" >
    <h3>Siswa</h3>
</nav >
<table class="table table-bordered border-secondary" >
    <thead style="background-color: #cccdcc" align="center">
        <tr>
            <th>NO</th><th>NAMA SISWA</th><th>TANGGAL LAHIR</th>
            <th>ALAMAT</th><th>GENDER</th>
            <th>USERNAME</th><th>KELAS</th><th>KELOMPOK</th><th>AKSI</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
        include "koneksi.php";
        $qry_siswa=mysqli_query($conn,"select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
        $no=0;
        while($data_siswa=mysqli_fetch_array($qry_siswa)){
            $no++;?>
            <tr>
            <td><?=$no?></td><td><?=$data_siswa['nama_siswa']?></td>
            <td><?=$data_siswa['tanggal_lahir']?></td>
            <td><?=$data_siswa['alamat']?></td>
            <td><?=$data_siswa['gender']?></td> 
            <td><?=$data_siswa['username']?></td>
            <td><?=$data_siswa['nama_kelas']?></td> 
            <td><?=$data_siswa['kelompok']?></td>
            <td><a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" class="btn btn-success">Ubah</a> 
            <a href="hapus.php?id_siswa=<?=$data_siswa['id_siswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
        <?php
        }
        ?>

        <?php
        ?>
    </tbody>
</table>
<td><a href="tambah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" class="btn btn-success">Tambah Siswa</a></td>
<a href="home.php" class="btn btn-primary" type="submit" value="KEMBALI">Kembali</a>
<hr>
<script src=<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
