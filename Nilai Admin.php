<!DOCTYPE php>
<php>

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

<body class="text-white" style="background-repeat: round;background-position: left;background-color: #ffffff;">
    <!-- Start: 2 Rows 1+1 Columns -->
    <div></div>
    <!-- End: 2 Rows 1+1 Columns -->
    <!-- Start: Lista Productos Canito -->
    <div style="margin: 39px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-xl-4">
                    <h4 style="width: 343px;color: #000000;"><strong>Data Nilai Pegangan Pengajar</strong></h4>
                </div>
                <div class="col-md-4 d-flex justify-content-end align-self-start"><a class="btn btn-success bg-info border rounded-0 border-primary shadow d-flex align-items-center align-self-center" role="button" style="height: 40px;background-color: #214a80;width: 112px;" href="pilihan.php"><i class="fa fa-user"></i>&nbsp;Kembali</a>
                <form method="POST">
                    <i
                        class="fas fa-search d-xl-flex justify-content-xl-center align-items-xl-center" style="color: rgb(255,255,255);"></i><input class="border rounded d-xl-flex justify-content-xl-center align-items-xl-center search-field" type="search" id="search-field" style="background-color: #eaeaea;width: 150%;height: 31px;padding: 0px;margin: 10px;margin-left: 17px;"
                            name="search" placeholder="  Pencarian " >
                </div>
                </form>
                <div class="col-md-4 d-flex justify-content-center align-items-center"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> + Tambah Data</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
          <div class="form-group">
            <input type="text" class="form-control" id="NIS" name="NIS" placeholder="NIS">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="nama-siswa" name="nama-siswa" placeholder="Nama Siswa">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="UTS" name="UTS" placeholder="UTS">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="UAS" name="UAS" placeholder="UAS">
          </div>
          <div class="form-group">
            <select class="form-control" name="Mata_Pelajaran">
                <option value="BI01">Bhs Indonesia</option>
                <option value="BI02">Pendidikan Agama</option>
                <option value="BI03">PPKn</option>
                <option value="BI04">Matematika</option>
                <option value="BI05">Kesenian</option>
                <option value="BI06">Pendidikan Jasmani dan Olahraga Kesehatan</option>
                <option value="BI07">Pengetahuan Umum</option>
            </select>
            </div>
                <div class="form-group">
            <select class="form-control" name="Kelas">
                <option value="1 A">Kelas 1 A</option>
                <option value="1 B">Kelas 1 B</option>
                <option value="1 C">Kelas 1 C</option>
                <option value="1 D">Kelas 1 D</option>
                <option value="1 E">Kelas 1 E</option>
                <option value="1 F">Kelas 1 F</option>
                <option value="1 G">Kelas 1 G</option>
            </select>
            </div>
            <div class="form-group">
            <select class="form-control" name="Semester">
                <option value="Genap">Semester Genap</option>
                <option value="Ganjil">Semester Ganjil</option>
            </select>
            </div>
        <div class="form-group">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
                  </form>
            
            </div>
          </div>
        </div>
        </div>
        </div>
            <?php
            include 'koneksi.php';
            if (isset($_POST['NIS']) && isset($_POST['nama-siswa'])) {
            $nis=$_POST['NIS'];
            $nama=$_POST['nama-siswa'];
            $uts=$_POST['UTS'];
            $uas=$_POST['UAS'];
            $mapel=$_POST['Mata_Pelajaran'];
            $kelas=$_POST['Kelas'];
            $semester=$_POST['Semester'];

            $sql = "insert into nilai (NIS, Nama_Siswa, UTS, UAS, Mata_Pelajaran, Kelas, Semester)VALUES ($nis, '$nama', $uts, $uas, '$mapel', '$kelas', '$semester')";
            if ($conn->query($sql) === TRUE){

            }else{
                echo "Error : " . $sql . "<br>" . $conn->error;
            }
             $conn->close();
             } 
            ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                <div class="col"><a href="Admin%20Home.php" style="margin: 1420px;font-size: 21px;font-family: Courgette, cursive;">Home</a></div>
            </div>
            <?php  
            include 'koneksi.php';
            if (isset($_POST['search'])) {
            $cari=$_POST['search'];
            $sql1= "select * from nilai inner join mata_pelajaran on nilai.Mata_Pelajaran = mata_pelajaran.Kode where Nama_Siswa LIKE '%$cari%'"; 
            }else {
            $sql1 = "select*from nilai inner join mata_pelajaran on nilai.Mata_Pelajaran = mata_pelajaran.kode";}
            $result = $conn->query($sql1);
            $no = 1  
            ?>
            <div class="row">
                <div class="col-md-12">
                    <!-- Start: Data Table -->
            <?php if($result->num_rows > 0) : ?>
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                <th>Action</th>
            </tr>
        </thead>
        <?php while ($nilai = $result -> fetch_assoc()) :
        ?>
        <tbody> 
            <tr>
                <td><?= $no++?></td>
                <td><?= $nilai['NIS']?></td>
                <td><?= $nilai['Nama_Siswa']?></td>
                <td><?= $nilai['MaPel']?></td>
                <td><?= $nilai['Kelas']?></td>
                <td><?= $nilai['Semester']?></td>
                <td><?= $nilai['UTS']?></td>
                <td><?= $nilai['UAS']?></td>
                <td><?= ($nilai['UTS'] + $nilai['UAS'])/2; ?></td>
                <td>
                    <button type="button" class="btn btn-dodgerblue"><a href="deletenilai.php?id=<?php echo $nilai['NIS'] ?>"><i class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></a>
                    </button>
                <button type="button" class="btn btn-dodgerblue"><a href="Update.php?id=<?php echo $nilai['NIS'] ?>"><i class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></button>
                </td>
            </tr>
        </tbody>
    <?php endwhile;
     ?>
    </table>
    <?php endif; 
     ?>
                    <!-- End: Data Table -->
                </div>
            </div>
        </div>
    </div>
    <!-- End: Lista Productos Canito -->
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

</php>