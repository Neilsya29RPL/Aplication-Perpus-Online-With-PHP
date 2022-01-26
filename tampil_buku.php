<?php
include "header.php";
?>

<style>
    body{
        background-color: #4b4276;
    }
</style>

<nav class="navbar navbar-expand-lg" style="margin-top: 40px" >
    <h3>Data Buku</h3>
</nav >
<table class="table table-bordered border-secondary" >
    <thead style="background-color: #cccdcc" align="center">
        <tr>
            <th>NO</th><th>NAMA BUKU</th><th>DESKRIPSI</th><th>FOTO PRODUK</th><th>AKSI</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
        include "koneksi.php";
        $qry_buku=mysqli_query($conn,"select * from buku");
        $no=0;
        while($data_buku=mysqli_fetch_array($qry_buku)){
            $no++;?>
            <tr>
            <td><?=$no?></td><td><?=$data_buku['nama_buku']?></td>
            <td><?=$data_buku['deskripsi']?></td>
            <td width="200" height="100"><img src="assets/foto_produk/<?=$data_buku['foto']?>"></td>
            <td><a href="ubah_buku.php?id_buku=<?=$data_buku['id_buku']?>" class="btn btn-success">Ubah</a> 
            <a href="hapus_buku.php?id_buku=<?=$data_buku['id_buku']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
        <?php
        }
        ?>

        <?php
        ?>
    </tbody>
</table>
<td><a href="tambah_buku.php?id_buku=<?=$data_buku['id_buku']?>" class="btn btn-success">Tambah Buku</a></td>
<a href="buku.php" class="btn btn-primary" type="submit" value="KEMBALI">Kembali</a>
<hr>
<script src=<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
