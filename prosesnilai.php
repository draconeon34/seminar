<?php
require_once 'koneksi.php';
if (isset($_POST['NIS'])) {
$nis=$_POST['NIS'];
$nama=$_POST['nama-siswa'];
$uts=$_POST['UTS'];
$uas=$_POST['UAS'];
$mapel=$_POST['Mata_Pelajaran'];
$kelas=$_POST['Kelas'];
$semester=$_POST['Semester'];

$sql = "update nilai set Nama_Siswa='$nama', UTS=$uts, UAS=$uas, Mata_Pelajaran='$mapel', Kelas='$kelas', Semester='$semester' where NIS=$nis" ;
if ($conn->query($sql) === TRUE){
    header("location: Nilai Admin.php");
}else{
    echo "Error : " . $sql . "<br>" . $conn->error;
}
 $conn->close();
 } 
?>