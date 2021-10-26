<?php
include('keselamatan.php');
include('sambungan.php');

$idsoalan=isset($_POST['idsoalan'])? $_POST['idsoalan']:'';
$namasoalan=isset($_POST['namasoalan'])? $_POST['namasoalan']:'';
$pilihana=isset($_POST['pilihana'])? $_POST['pilihana']:'';
$pilihanb=isset($_POST['pilihanb'])? $_POST['pilihanb']:'';
$jawapan=isset($_POST['jawapan'])? $_POST['jawapan']:'';
$idguru=isset($_POST['idguru'])? $_POST['idguru']:'';

$sql="INSERT INTO soalan values('$idsoalan','$namasoalan','$pilihana','$pilihanb','$jawapan','$idguru')";
$result=mysqli_query($sambungan,$sql);
?>

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
echo "<script>document.getElementById('berjaya').style.display='block';</script>";
else
echo "<script>document.getElementById('tidak').style.display='block';</script>";
?>