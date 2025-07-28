<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <body class="hold-transition sidebar-mini">
            <div class="wrapper">
                <!-- Navbar -->

                <!-- Left navbar links -->


                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->


                    <!-- Messages Dropdown Menu -->

                    <!-- Notifications Dropdown Menu -->


                </ul>

                <!-- /.navbar -->

                <?php include "sidebar.php" ?>

                <?php
                include('koneksi.php');
                $id = $_GET['id'];
                $query = "SELECT * FROM db_info WHERE id_info = $id LIMIT 1";
                $result = mysqli_query($koneksi, $query);
                $row = mysqli_fetch_array($result);
                ?>
                <!-- Main content -->

                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>Edit Data Artikel Musholla Fathul Insani</h1>
                                </div>

                            </div>
                        </div><!-- /.container-fluid -->
                    </section>
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <form action="update.php" method="POST">
                                            <label><strong>Judul Artikel</strong></label>
                                            <input type="hidden" name="id_info" value="<?php echo $row['id_info'] ?>">
                                            <input type="text" name="jdl_info" class="form-control" value="<?php echo $row['jdl_info'] ?>">
                                    </div>
                                    <div class="md-3">
                                        <label><strong>Isi Artikel</strong></label>
                                        <input type="text" name="text_info" class="form-control" value="<?php echo $row ['text_info']; ?>">
                                    </div>
                                    <div>
                                        <label>Thumbnail Gambar</label>
                                        <img src="thumbnail/<?php echo $row['tmb_gmbr']; ?>" width="100">
                                        <input type="file" name="tmb_gmbr" class="form-control">
                                        <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar</i>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">UPDATE</button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
             <!-- -->
        
        </body>

</html>