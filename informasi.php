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
  <div class="wrapper">
  <div class="container mt-5">
  <div class="row">
    <?php 
    include "koneksi.php"; 
    $info = "Select * from db_info";
    $hasil = mysqli_query($koneksi, $info);
    

    $jmlinfo = mysqli_num_rows($hasil);
    if ($jmlinfo > 0) {
      while ($ulang = mysqli_fetch_assoc($hasil)) {
        //menentukan jumlah ringkasan
        $wordlimit = 25;
        //pisah kata-kata menjadi array
        $words = explode(" ",$ulang["text_info"]);
        //gabungin kembali
        $artikel = implode(" ",array_slice($words,0,$wordlimit));
    ?> 
<div class="card g-3 row-cols-1" style="width: 31rem;" >
      <h5 class="card-title"> <?= $ulang["jdl_info"];  ?> </h5>
      <img src="thumbnail/<?php echo $ulang ['tmb_gmbr']; ?>" class="card-img-top" alt="..."></img>
      <p>
        <?php 
        $id = $ulang["id_info"];
        //panggi artikel
        echo $artikel; 
        if (count($words) > $wordlimit) {
          echo '
          <br><a href="bacainfo.php?id_info='.$id.'">Baca Selengkapnya</a>';
        }
        ?>
        </p>
        
    </div>
    <?php 
      }
  } ?>
  </div>
</div>
  </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
    <?php include "footer.php" ?>