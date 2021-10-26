<?php
include('menu_guru.php');
include('sambungan.php');

$idguru=isset($_POST['idguru'])? $_POST['idguru']:'';
$namaguru=isset($_POST['namaguru'])? $_POST['namaguru']:'';
$password=isset($_POST['password'])? $_POST['password']:'';

$sql="INSERT INTO guru VALUES('$idguru','$namaguru','$password')";
$result=mysqli_query($sambungan,$sql);
?>

<link rel="stylesheet" href="borang.css">
<div class="kandungan">
    <div id="berjaya" style="display:none;">
    <h3 class="panjang">Mesej</h3>
    <h2 class="mesej">Berjaya Tambah</h2>
</div>

<div id="tidak" style="display:none;">
<h3 class="panjang">Mesej</h3>
<h2 class="mesej">Tidak berjaya tambah</h2>
</div>
</div>

<?php
if($result==true)
echo "<script>documen.getElementById('berjaya').style.display='block';</script>";
else
echo "<script>documen.getElementById('tidak').style.display='block';</script>";
?>
