<?php include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query($conn, "select * from login where Username='$username' and Password='$password'");
$cek = mysqli_num_rows($query);
if ($cek) {
	header("location: Admin Home.php");
} else {
	echo '<script type="text/javascript">'; 
	echo 'alert("Username Atau Password Salah");'; 
	echo 'window.location.href = "Login.php";';
	echo '</script>';

}

?>