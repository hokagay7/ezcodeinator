<?php
include("sambungan.php");
session_start();
$IDMurid = $_POST['IDMurid'];
$sql="delete from kuiz where IDMurid = '$IDMurid'";
$result=mysqli_query($sambungan,$sql);
if($result == true)
echo "Berjaya padam rekod";
else
echo "Tidak berjaya padam";
?>
