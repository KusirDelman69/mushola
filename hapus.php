<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM db_info WHERE id_info = '$id'";

if($koneksi->query($query)) {
    header("location: datainformasi.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
