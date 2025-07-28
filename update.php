<?php
//include koneksi database
include('koneksi.php');

//get data dari form
$id_info     = $_POST['id_info'];
$jdlinfo     = $_POST['jdl_info'];
$textinfo    = $_POST['text_info'];
//query update data ke dalam database berdasarkan ID
$query = "UPDATE db_info SET jdl_info = '$jdlinfo', text_info = '$textinfo' WHERE id_info = '$id_info'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman index.php 
    header("location: datainformasi.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupdate!";
}

?>