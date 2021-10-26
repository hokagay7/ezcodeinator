<?php
include('sambungan.php');

$idpelajar=$_POST['idpelajar'];
$sql="delete from murid where idpelajar='$idpelajar'";

$result=mysqli_query($sambungan, $sql);
if ($result==true)
    echo "<br>Berjaya padam";
else
    echo "Tidak berjaya padam";
?>