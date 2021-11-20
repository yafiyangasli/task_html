<!DOCTYPE html>
<html lang="id">
<head>
  <title>Isi Data Diri CV</title>
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

  form{
    margin-left: 25%;
    margin-right: 25%;
    text-align: left;
  }

  button {
  	display: block;
  	margin-left: auto;
  	margin-right: auto;
  	margin-bottom: 5%;
  	padding: 5px;
  	width: 10%;
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
  <a class="active" href="isiartikel.php">Isi Artikel</a>
  <a href="artikel.php">Artikel</a> 
  <a href="https://www.instagram.com/myafifahmii/" target="https://www.instagram.com/myafifahmii/">Instagram</a>
  <a href="https://github.com/yafiyangasli" target="https://github.com/yafiyangasli">Github</a>
</div>

<div class="container" style="color: #21302f; min-height: calc(100vh - 40px);">
  <h1 style="text-align: center">Buat Artikel</h1>
  <form action="artikel.php" method="post">
	  <label for="judul">Judul Artikel :</label><br>
	  <input type="text" id="judul" name="judul" style="width: 50%;"><br><br>
	  <label for="isi">Isi :</label><br>
	  <textarea id="isi" name="isi" style="width: 100%;" rows="4"></textarea><br><br>
    <button type="submit" name="submit">Input</button>
  </form>
  </div>
</div>
<footer style="text-align: center; background-color: #354d4b; color: #cadac9; padding: 10px">Copyright</footer>
</body>
</html>
