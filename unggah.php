<?php
    // Include koneksi database
    include 'koneksi.php';
    

    if (isset($_POST['proses'])) {
        $file_name = $_FILES['bukti']['name'];
        $tempname = $_FILES['bukti']['tmp_name'];
        $folder = 'uploads/'.$file_name;
        $nama = $koneksi->real_escape_string($_POST['nama']);
        

        $query = mysqli_query($koneksi, "insert into db_bukti(nama, bukti) values ('$nama', '$file_name')");

        if(move_uploaded_file($tempname, $folder)){
            $_SESSION['status'] = "TERIMA KASIH SUDAH BERDONASI";
            $_SESSION['status_code'] = "success";
            header("location: donasi.php");
        }
    }
    ?>