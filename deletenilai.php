<?php  
require_once("koneksi.php");

if ( isset($_GET['id']) ){

	$id = $_GET['id'];
	$sql = "delete FROM nilai WHERE nilai . NIS=$id";
	$result = $conn->query($sql);
	$no=1;
	if ($conn->query($sql)===TRUE ){
		header('Location: Nilai Admin.php');
	}else {
		die("delete failed");
	}

} else {
	die("Acces failed");
}
?>