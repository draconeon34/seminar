<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SDN ASMI</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou">
    <link rel="stylesheet" href="assets/css/3D_CSS_PROGRESS_BAR_BY_REDSTAPLER-1.css">
    <link rel="stylesheet" href="assets/css/3D_CSS_PROGRESS_BAR_BY_REDSTAPLER.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider-1.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider.css">
    <link rel="stylesheet" href="assets/css/ensign-form-1.css">
    <link rel="stylesheet" href="assets/css/ensign-form.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Text-Input.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/login-full-page-bs4.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form-1.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="assets/css/Sidebar-right-opening.css">
    <link rel="stylesheet" href="assets/css/Social-Icon-Circle.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
</head>

<body>
    <?php 
    include 'koneksi.php';
    $id=$_GET['id'];
     $sql="select * from nilai WHERE NIS=$id";
     $result=mysqli_query($conn,$sql);
     ?>

    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form action="prosesnilai.php" method="POST" class="custom-form">
                <h1>Ubah Data Siswa</h1>
                <?php while ($data=mysqli_fetch_array($result)) { ?>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="NIS">NIS</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" id="NIS" readonly name="NIS" value="<?php echo $data['NIS']?>"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="nama-siswa">Nama</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" id="nama-siswa" name="nama-siswa" value="<?php echo $data['Nama_Siswa']?>"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="UTS">UTS</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" id="UTS" name="UTS" value="<?php echo $data['UTS']?>"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="UAS">UAS</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="UAS" id="UAS" value="<?php echo $data['UAS']?>"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="Kelas">Kelas</label></div>
                    <div class="col-sm-4 input-column">
                        <select name="Kelas" class="btn btn-light">
                            <option value="1 A">Kelas 1 A</option>
                            <option value="1 B">Kelas 1 B</option>
                            <option value="1 C">Kelas 1 C</option>
                            <option value="1 D">Kelas 1 D</option>
                            <option value="1 E">Kelas 1 E</option>
                            <option value="1 F">Kelas 1 F</option>
                            <option value="1 G">Kelas 1 G</option>
                        </select>
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="Semester">Semester</label></div>
                    <div class="col-sm-4 input-column">
                        <select name="Semester" class="btn btn-light">
                            <option value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
                        </select>
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="Mata_Pelajaran">Mata Pelajaran</label></div>
                    <div class="col-sm-4 input-column">
                       <select name="Mata_Pelajaran" class="btn btn-light">
                            <option value="BI01">Bhs Indonesia</option>
                            <option value="BI02">Pendidikan Agama</option>
                            <option value="BI03">PPKn</option>
                            <option value="BI04">Matematika</option>
                            <option value="BI05">Kesenian</option>
                            <option value="BI06">Pendidikan Jasmani dan Olahraga Kesehatan</option>
                            <option value="BI07">Pengetahuan Umum</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-light submit-button" type="submit">Submit Form</button>
                </div>
            <?php } ?>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/login-full-page-bs4.js"></script>
    <script src="assets/js/login-full-page-bs4-1.js"></script>
    <script src="assets/js/3D_CSS_PROGRESS_BAR_BY_REDSTAPLER.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/Sidebar-right-opening.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>