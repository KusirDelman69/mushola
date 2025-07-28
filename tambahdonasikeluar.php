<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php include "sidebar.php" ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Donasi Keluar Mushola Fathul Insani</h1>
          </div>
        </div>

          <form action="" method="post">
            <table>
                <tr>
                    <td>Tanggal</td>
                    <td><input type="date" name="tanggal"></td>
                </tr>
                <tr>
                    <td>Jumlah Pengeluaran</td>
                    <td><input type="text" name="nilai"></td>
                </tr>
                <tr>
                    <td>Keterangan Pengeluaran</td>
                    <td><input type="text" name="ket"></td>
                </tr>
                <tr>

                <td></td>
                <td><input type="submit" class="btn btn-primary" value="Simpan data" name="proses"></td>
                </tr>
            </table>
          </form>

          <?php 
          include "koneksi.php";

          if(isset($_POST['proses'])){
            mysqli_query($koneksi, "insert into db_donasikeluar set
            tanggal = '$_POST[tanggal]',
            nilai = '$_POST[nilai]',
            ket = '$_POST[ket]'");
            
            echo "Data Pengeluaran Sudah Tersimpan";
          }
          
          ?>