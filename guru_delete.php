<?php
include('keselamatan.php');
include('menu_guru.php');
include('sambungan.php');

$idguru=$_POST["idguru"];
$sql="DELETE FROM guru where idguru='idguru'";
$result=mysqli_query($sambungan,$sql);
?>

<div class="kandungan">
    <div class="kandungan">
        <div id="berjaya" style="display:none;">
        <h3 class="panjang">Mesej</h3>
        <h2 class="mesej">Berjaya Padam</h2>
</div>
<div id="tidak" style="display:none;">
<h3 class="panjang">Mesej</h3>
<h2 class="mesej">Tidak Berjaya Padam</h2>
</div>
</div>
<?php
if(mysqli_affected_rows($sambungan)>0)
    echo "<script>document.getElementById('berjaya').style.display='block';</script>";
else
    echo "<script>document.getElementById('tidak').style.display='block';</script>";
?>