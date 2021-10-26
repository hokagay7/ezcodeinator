<?php
include('sambungan.php');

$idkelas=$_POST['idkelas'];
$sql="delete from kelas where idkelas='$idkelas'";

$result=mysqli_query($sambungan, $sql);
if ($result==true)
    echo "<br>Berjaya padam";
else
    echo "Tidak berjaya padam";
?>