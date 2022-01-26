<?php
    session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Home</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
        font-family: 'Josefin Sans', sans-serif;
        }

        body{
        background-color: #f3f5f9;
        }
        .wrapper{
        display: flex;
        position: relative;
        }

        .wrapper .sidebar{
        width: 200px;
        height: 100%;
        background: #4b4276;
        padding: 30px 0px;
        position: fixed;
        }

        .wrapper .sidebar h2{
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 30px;
        }

        .wrapper .sidebar ul li{
        padding: 15px;
        border-bottom: 1px solid #bdb8d7;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        border-top: 1px solid rgba(255,255,255,0.05);
        }    

        .wrapper .sidebar ul li a{
        color: #bdb8d7;
        display: block;
        }

        .wrapper .sidebar ul li a .fas{
        width: 25px;
        }
            
        .wrapper .sidebar ul li:hover a{
        color: #fff;
        }

        .wrapper .main_content{
        width: 100%;
        margin-left: 200px;
        }

        .wrapper .main_content .header{
        padding: 20px;
        background: #fff;
        color: #717171;
        border-bottom: 1px solid #e0e4e8;
        }

        .wrapper .main_content .info{
        margin: 20px;
        color: #717171;
        line-height: 25px;
        }

        .wrapper .main_content .info div{
        margin-bottom: 20px;
        }

        /* Dropdown login*/
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
        display: block;
        }

        .dropdown:hover .dropbtn {
        background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>PERPUS</h2>
            <ul>
                <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="buku.php"><i class="fas fa-book-open"></i>Buku</a></li>
                <li><a href="tampil_siswa.php"><i class="fas fa-user-graduate"></i></i>Siswa</a></li>
                <li><a href="tambah_kelas.php"><i class="fas fa-school"></i> Kelas</a></li>
                <li><a href="histori_peminjaman.php"><i class="fas fa-address-card"></i>Transaksi</a></li>
                <li><a href="logout.php"><i class='fas fa-sign-out-alt'></i>Logout</a></li>
            </ul> 
        </div>
        <div class="main_content">
            <div class="header" align ="center">
                <h2>Selamat Datang <?=$_SESSION['nama_siswa']?> Di Website Perpus Online.</h2>
            </div>  
            <div class="info">
                <div  align="center"><img src="home.png" width="900px" height="440px"/></div>
            </div>
        </div>
    </div>
</body>
</html>
