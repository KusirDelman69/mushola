<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Musholla Fathul Insani</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <?php include "header.php"; ?>
  <section id="home">
  <div class="wrapper">
  <div class="container mt-5">
  <div class="row">
    <?php 
    include "koneksi.php"; 
    if (isset($_GET["id_info"])) {
        $id = $_GET["id_info"];
    } else {
        $id = 0;
    }
    $info = "Select * from db_info where id_info=$id";
    $hasil = mysqli_query($koneksi, $info);
    $jmlinfo = mysqli_num_rows($hasil);
    if ($jmlinfo > 0) {
      while ($ulang = mysqli_fetch_assoc($hasil)) {
        
    ?> 
    <div class="col-sm-12">
      <h3><?= $ulang["jdl_info"];  ?></h3>
      <img src="thumbnail/<?php echo $ulang ['tmb_gmbr']; ?>" width="550"></img>
      <div class="kolom">
      <p>
        <?php 
        echo $ulang["text_info"];
        ?>
        </p>
        
    </div>
    <?php 
      }
  } ?>
  </div>
</div>
<a href="informasi.php"  class="btn btn-primary">Kembali</a>
  </div>
  </div>
</body>
</section>
</html>
    <?php include "footer.php" ?>