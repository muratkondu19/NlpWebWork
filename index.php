<?php include "header.php";
include "baglan.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Belge Yükleme</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Ana Sayfa</a></li>
                        <li class="breadcrumb-item active">Belge Yükleme</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <section class="col-lg-5 connectedSortable">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Dosya Yükleme </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="islem.php" method="post" enctype="multipart/form-data">
                            <div class="card-body">


                                <div class="form-group">
                                    <label for="exampleInputFile">Dosya Seçiniz.</label>
                                    <div class="input-group">
                                        <span class="btn btn-dark col fileinput-button">

                                            <input type="file" name="dosya" class="form-control-file" id="exampleFormControlFile1">
                                        </span>
                                    </div>
                                    <br>

                                    <button type="submit" name="dosyakaydet" class="btn btn-primary btn-block ">Dosyayı Gönder</button>

                                </div>

                        </form>
                    </div>
                </section>


                <section class="col-lg-7 connectedSortable">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Yüklenen Resim</h4>
                        </div>
                        <?php if ($_GET["durum"] == "ok") { ?>
                            <script>swal("Başarılı!", "Dosyanız kayıt edildi.", "success");</script>
                            <div class="card-body">
                                <?php
                                $dosyasor = $db->prepare("SELECT * FROM dosya ORDER BY dosya_id DESC LIMIT 1 ");
                                $dosyasor->execute();
                                $dosyacek = $dosyasor->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div align="center">
                                    <div class="col-sm-12">
                                        <?php
                                        if ($dosyacek["dosya_yol"] == "") { ?>
                                            <div class="alert alert-danger" role="alert">
                                                Lütfen bir resim dosyası yükleyiniz...
                                            </div>
                                        <?php } else {

                                        ?>
                                            <img style="width: 600px; height:750px" src="dosyalar/<?php echo $dosyacek["dosya_yol"] ?>" />
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="card-body">

                                <div align="center">
                                    <div class="col-sm-12">

                                        <div class="alert alert-danger" role="alert">
                                            Lütfen bir resim dosyası yükleyiniz...
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                </section>

            </div>

        </div>

    </section>

</div>
<?php include "footer.php" ?>