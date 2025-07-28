<?php
    // Include koneksi database
    include 'koneksi.php';

    if (isset($_POST['proses'])) {
        $file_name = $_FILES['tmb_gmbr']['name'];
        $tempname = $_FILES['tmb_gmbr']['tmp_name'];
        $folder = 'thumbnail/'.$file_name;
        $jdl = $koneksi->real_escape_string($_POST['jdl_info']);
        $isi = $koneksi->real_escape_string($_POST['text_info']);
        

        $query = mysqli_query($koneksi, "insert into db_info(jdl_info, text_info, tmb_gmbr) values ('$jdl', '$isi', '$file_name')");

        if(move_uploaded_file($tempname, $folder)){
            header("location: datainformasi.php");
        }
    }
?>