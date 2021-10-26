<?php
include("sambungan.php");

$idpelajar=isset($_POST['idpelajar'])? $_POST['idpelajar']:'';
$namapelajar=isset($_POST['namapelajar'])? $_POST['namapelajar']:'';
$idkelas=isset($_POST['idkelas'])? $_POST['idkelas']:'';
$password=isset($_POST['password'])? $_POST['password']:'';

$sql="INSERT INTO murid VALUES ('$idpelajar','$namapelajar','$idkelas','$password')";
$result=mysqli_query($sambungan, $sql);
if ($result==true)
    echo "<br>Berjaya tambah";
else
    echo "<br>Tidak berjaya tambah";

?>