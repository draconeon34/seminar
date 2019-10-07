
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
    <link rel="stylesheet" href="assets/css/Google-Style-Text-Input.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/login-full-page-bs4.css">
    <link rel="stylesheet" href="assets/css/Sidebar-right-opening.css">
    <link rel="stylesheet" href="assets/css/Social-Icon-Circle.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
</head>

<body>
    <!-- Start: Lista Productos Canito -->
    <div><div class="modal-header">
    <h4 class="modal-title" style="color: rgba(33,37,41,0);">SDN ASMI</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-4 offset-xl-0" style="padding: 12px;"><img src="assets/img/output-onlinepngtools.png" style="height: 153px;"></div>
                <div class="col-xl-7 offset-xl-2 mx-auto">
                    <h2 class="text-center d-xl-flex align-items-end" style="width: 343px;padding: 36px;"><br>Nilai Murid SDN Asmi 033 Bandung</h2>
                </div>
            </div>
            <div>
            <form method="POST">
            <i
                        class="fas fa-search d-xl-flex justify-content-xl-center align-items-xl-center" style="color: rgb(255,255,255);">
                        </i>
                        <input class="border rounded d-xl-flex justify-content-xl-center align-items-xl-center search-field" type="search" id="search-field" style="background-color: #eaeaea;width: 100%;height: 31px;padding: 0px;margin: 5px;margin-left: 0px;"
                        name="search" placeholder="  Pencarian " >
            </div>
            </form>
            <div class="row">
                <div class="col-md-12">
                    <!-- Start: Data Table --><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Mata Pelajaran</th>
                <th>Kelas</th>
                <th>Semester</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Rata - Rata</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        if (isset($_POST['search'])) {
            $cari=$_POST['search'];
            $sql= "select * from nilai inner join mata_pelajaran on nilai.Mata_Pelajaran = mata_pelajaran.Kode where Nama_Siswa LIKE '%$cari%'"; 
        }else {
            $sql = "select * from nilai inner join mata_pelajaran on nilai.Mata_Pelajaran = mata_pelajaran.Kode";
        }
            $result = $conn->query($sql);
            $No=1;
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
                <tbody> 
            <tr>
                <td><?php echo $No++;?></td>
                <td><?php echo $row['NIS'];?></td>
                <td><?php echo $row['Nama_Siswa'];?></td>
                <td><?php echo $row['MaPel'];?></td>
                <td><?php echo $row['Kelas'];?></td>
                <td><?php echo $row['Semester'];?></td>
                <td><?php echo $row['UTS'];?></td>
                <td><?php echo $row['UAS'];?></td>
                <td><?php echo ($row['UTS'] + $row['UAS'])/2;?></td>
            </tr>
        </tbody>
        <?php } 
        $conn->close();
        }
        ?>
    </table>
                    <!-- End: Data Table -->
                </div>
            </div>
        </div>
    </div>
    <!-- End: Lista Productos Canito -->
    <div class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Title</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>The content of your modal.</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
            </div>
        </div>
    </div><a href="Home.php" style="margin: 1260px;font-size: 21px;font-family: Courgette, cursive;">KEMBALI</a>
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
