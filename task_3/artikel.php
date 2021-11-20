<?php

  require_once('dbconfig.php');
  global $con;

  if (isset($_POST['submit'])) {
    $id_artikel = null;
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $gambar = null;
    // if ($_POST['gambar'] != NULL) {
    //   $gambar = $_POST['gambar'];
    // }else{
    //   $gambar = null;
    // }

    if(!empty($judul) && !empty($isi))
    {
      $query = "INSERT into artikel (id_artikel,judul,gambar,isi) VALUES ('$id_artikel','$judul','$gambar','$isi')";
      mysqli_query($con,$query);
    }
  }

  if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = $con->prepare("SELECT id_artikel,judul,isi FROM `artikel` WHERE judul LIKE '%$search%'");
    $query->execute();
    mysqli_stmt_bind_result($query,$id_artikel, $judul, $isi);
  }else{
    $query = $con->prepare("SELECT id_artikel,judul,isi FROM `artikel`");
    $query->execute();
    mysqli_stmt_bind_result($query,$id_artikel, $judul, $isi);
  }

  
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <title>Curiculum Vitae Yafi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
          font-family: "Poppins" , sans-serif;
        }
        body{
          background-color: #dfe4e3;
        }
    * {
      box-sizing: border-box;
    }

  body {
    margin: 0;
  }

  .header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
  }

  .topnav {
    overflow: hidden;
    background-color: #333;
  }

  .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  a.active{
    background-color: #ddd;
    color: black;
  }

  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }

  .container{
    padding: 5%;
  }

  .artikel{
    width: 80%;
    margin-left: auto;
    margin-right: auto;
  }

  form{
    margin-left: 25%;
    margin-right: 25%;
    text-align: center;
  }
  

  @media screen and (max-width: 600px) {
    .column.side, .column.middle {
      width: 100%;
    }
  }
  </style>
</head>
<body>

<div class="header" style="color: #21302f;">
  <h1>Curiculum Vitae</h1>
</div>

<div class="topnav" style="background-color: #21302f;">
  <a href="index.php">Beranda</a>
  <a href="isiartikel.php">Isi Artikel</a>
  <a class="active" href="artikel.php">Artikel</a> 
  <a href="https://www.instagram.com/myafifahmii/" target="https://www.instagram.com/myafifahmii/">Instagram</a>
  <a href="https://github.com/yafiyangasli" target="https://github.com/yafiyangasli">Github</a>
</div>

<div class="container" style="color: #21302f; min-height: calc(100vh - 40px);">
  <h1 style="text-align: center">Artikel</h1>
  <form action="artikel.php" method="get">
    <label for="search">Cari Judul Artikel</label><br>
    <input type="text" id="search" name="search" style="width: 50%;">
    <button type="submit">Cari</button>
  </form>
  <br><hr>
  <?php
    while(mysqli_stmt_fetch($query)):?>
  <div class="artikel">
    <h2><?= $judul;?></h2>
    <?php 
      $kalimat = substr($isi, 0, 200);
    ?>
    <p><?= $kalimat;?> <a href="detail.php?artikel=<?=$id_artikel?>" style="text-decoration: none;">Read More...</a></p>
    <hr>
  </div>
<?php endwhile;?>
  </div>
<footer style="text-align: center; background-color: #354d4b; color: #cadac9; padding: 10px">Copyright</footer>
</body>
</html>
