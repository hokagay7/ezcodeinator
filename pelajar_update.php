<?php
include('sambungan.php');

$idpelajar=$_POST['idpelajar'];
$namapelajar=$_POST['namapelajar'];
$idkelas=$_POST['idkelas'];
$password=$_POST['password'];
$sql="update pelajar set namapelajar='$idpelajar', '$namapelajar', '$idkelas', '$password'";

$result=mysqli_query($sambungan, $sql);
if ($result==true)
    echo "Berjaya update";
else
    echo "Tidak berjaya update";
?>