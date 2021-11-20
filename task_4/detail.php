<?php

  require_once('dbconfig.php');
  global $con;

  $id_artikel = $_GET['artikel'];

  if (isset($_FILES['gambar'])) {
    $target_dir = "assets/artikel/";
    $nama_image = str_replace(" ", "_", $_FILES["gambar"]["name"]);
    $target_file = $target_dir . basename($nama_image);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $query1 = "UPDATE artikel SET gambar='$nama_image' WHERE id_artikel='$id_artikel'";
      if (!$con->query($query1) === TRUE) {
        echo "Error updating record: " . $con->error;
      } 

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["gambar"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["gambar"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (!move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        echo "Sorry, there was an error uploading your file.";
      } 
    }
  }
  
  $query = $con->prepare("SELECT * FROM `artikel` WHERE id_artikel = '$id_artikel'");
  $query->execute();
  mysqli_stmt_bind_result($query,$id_artikel, $judul, $gambar, $isi);

  
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
    margin-left: 10%;
    margin-right: 10%;
    text-align: left;
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
  <?php while(mysqli_stmt_fetch($query)):?>
  <h1 style="text-align: center"><?= $judul;?></h1>
  <?php if(!$gambar == ""):?>
    <img src="assets/artikel/<?=$gambar;?>" alt="foto profil" style="display: block; margin-left: auto; margin-right: auto; width: 40%; margin-top: 1%; margin-bottom: 5%; border-radius: 10px; "/>
  <?php endif;?>
  <div class="artikel">
    <p><?= $isi;?></p>
    <hr>
  </div>
<?php if($gambar ==""):?>
  <form action="detail.php?artikel=<?=$id_artikel?>" method="post" enctype="multipart/form-data">
    <label for="gambar">Tambahkan gambar di artikel</label><br>
    <input type="file" id="gambar" name="gambar" style="width: 50%;"><br><br>
    <button type="submit">Input</button>
  </form>
<?php endif;?>
<?php endwhile;?>
  </div>
<footer style="text-align: center; background-color: #354d4b; color: #cadac9; padding: 10px">Copyright</footer>
</body>
</html>
