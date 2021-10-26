<?php
include("sambungan.php");

$idpelajar=isset($_POST['idpelajar'])? $_POST['idpelajar']:'';
$idkelas=isset($_POST["idkelas"])? $_POST['idkelas']:'';
$namakelas=isset($_POST["namakelas"])? $_POST['namakelas']:'';
$sql="INSERT INTO kelas VALUES('$idkelas', '$namakelas')";

$result=mysqli_query($sambungan, $sql);
if ($result==true)
    echo "<br>Berjaya tambah";
else
    echo "Tidak berjaya tambah";
?>