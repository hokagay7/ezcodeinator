<?php
include('sambungan.php');

$idtopik=isset($_POST['idtopik'])? $_POST['idtopik']:'';
$namatopik=isset($_POST['namatopik'])? $_POST['namatopik']:'';

$sql="INSERT INTO topik values('$idtopik','$namatopik')";
$result=mysqli_query($sambungan,$sql);
?>

