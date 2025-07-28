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

        <section id="kritik">

            <div class="input">
                <h2>Kritik & Saran</h2>
                <p>Jika anda memiliki kritik serta saran bisa mengirim dibawah ini</p>
                <form action="" method="post">
            <table>
            <div width="150" class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_ngirim">
            </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Isi Kritik Saran</label>
                <textarea id="content" name="text" class="form-control"></textarea>
                

                </div>
                <tr>
                <td></td>
                <td length="150"><input type="submit" class="btn btn-primary" value="Kirim" name="proses"></td>
                </tr>
            </table>
          </form>
</section>

          <?php 
          include "koneksi.php";

          if(isset($_POST['proses'])){
            mysqli_query($koneksi, "insert into db_krtkmember set
            nama_ngirim = '$_POST[nama_ngirim]',
            text = '$_POST[text]'");

            echo "Terima kasih atas kritik dan sarannya";
          }
          
          ?>

        <?php include "footer.php" ?>
    </div>
</body>

</html>
