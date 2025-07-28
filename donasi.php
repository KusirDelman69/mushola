
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musholla Fathul Insani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <?php include "header.php"; ?>

    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <div class="kolom">
                <h2>Donasi Musholla Fathul Insani</h2>
                <p>Kami sangat berterimakasih kepada bapak ibu yang sudah menyisihkan sedikit rejekinya.</p>
                <img src="gambar/bca.png" width="80">
                <b>6860162065 Fachrul Djamal</b>
            </img>
            <p><img src="gambar/bsi.png" width="80">
                <b><align="center">711-6181-872 Yayasan Fathul Insani</b></p>
                <p><img src = "gambar/wa.png" width="80">Jika ingin Mengonfirmasi bisa menghubungi 081399056309 atau mengklik <a href="https://wa.me/6281399056309">tautan ini</a></p>
            </div>
        </section>
        <section id="donasi">
            <div class="input">
                <form action="unggah.php" method="POST" enctype="multipart/form-data">
            <table>
            <div width="150" class="mb-3">
            <label>Nama</label>
                    <input type="text" class="form-control" name="nama">
            </div>
                <div class="mb-3">
                <label>Upload Bukti Pembayaran</label>
                <input type="file" name="bukti" class="form-control">
                </div>
                <tr>
                <td></td>
                <td length="150"><input type="submit" class="btn btn-primary" value="Kirim" name="proses"></td>
                </tr>
            </table>
          </form>
</section>
        </div>
    </div>
</body>
    <?php include "footer.php" ?>
</html>