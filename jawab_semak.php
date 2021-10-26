<?php
include('sambungan.php');
session_start();
$idpelajar=$_SESSION['username'];
$idtopik=$_POST['idtopik'];
date_default_timezone_get("Asia?Kuala_Lumpur");
$tarikh=date('d/m/Y');
$sql="SELECT * from soalan where idtopik='".$idtopik."' order by idsoalan ASC";
$data=mysqli_query($sambungan,$sql);
while($soalan=mysqli_fetch_array($data)){
    $idsoalan=$soalan['idsoalan'];
    $jawapan=$_POST['$idsoalan'];
    $sql="INSERT INTO markah VALUES('$idpelajar','$idsoalan','$tarikh','$tarikh','$jawapan',0)";
    $datakuiz=mysqli_query($sambungan,$sql);
}
header("Location: jawab_ulangkaji.php?idtopik=$idtopik");
?>