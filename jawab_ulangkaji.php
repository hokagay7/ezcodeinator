<?php
include('sambungan.php');
if(session_status()==PHP_SESSION_NONE){
    session_start();
    $idtopik=isset($_GET['idtopik'])? $_GET['idtopik']:'';
}
?>
<link rel="stylesheet" href="senarai.css">
<table>
    <tr>
        <caption>SKEMA DAN KEPUTUSAN</caption>
        <th>Bil</th>
        <th>Soalan</th>
        <th>Keputusan</th>
</tr>
<?php
$jumlah=null;
$betul=null;
$idpelajar=$_SESSION['username'];
$sql="SELECT * FROM markah join soalan on markah.idsoalan= soalan.idsoalan join topik on soalan.idtopik=topik.idtopik where soalan.idtopik='".$idtopik."' and idpelajar='".$idpelajar."'";
$data=mysqli_query($sambungan,$sql);
$bil=1;
while($markah=mysqli_fetch_array($data)){
?>
<tr>
    <td class="bil"><?php echo $bil;?></td>
    <td class="soalan">
        <?php
        echo $markah['namasoalan']."<br>";
        echo "Benar.".$markah['pilihana']."<br>";
        echo "Salah.".$markah['pilihanb']."<br>";
        ?>
    </td>
    <td class="skema">
        <?php
        echo "Jawapannya: ".$markah['jawapan']."<br>";
        echo "Anda pilih: ".$markah['pilihan']."<br>";
        if($kuiz['pilih']==$kuiz['jawapan']){
            echo "<img src='gambar/betul.png'>";
            $betul=$betul+1;
            }
            else
            echo"<img src='gambar/salah.png'>";
            ?>
            </td>
        </tr>
        <?php
        $idsoalan[bil-1]=$markah['idsoalan'];
        $bil=$bil+1;
        $jumlah=$jumlah+1;
        $topik=$markah['namatopik'];
}
?>
</table>
<?php
$peratus=$betul/$jumlah*100;
$salah=$jumlah-$betul;
for ($i=0;$i<count($idsoalan);$i++){
    $sql="UPDATE markah SET peratus=$peratus where idsoalan='".$idsoalan[$i]."' and idpelajar='".$idpelajar."'";
    $data=mysqli_query($sambungan,$sql);
}
?>
<table>
<caption> Keputusan Prestasi Individu</caption>
<tr>
    <th>Topik</th>
    <th><?php echo $topik; ?></th>
</tr>
<tr>
    <td class="keputusan">Bilangan yang betul</td>
    <td class="keputusan"><?php echo $betul ?></td>
</tr>
<tr>
    <td class="keputusan">Bilangan yang salah</td>
    <td class="keputusan"><?php echo $salah ?></td>
</tr>
<tr>
    <td class="keputusan">Jumlah Soalan</td>
    <td class="keputusan"><?php echo $jumlah ?></td>
</tr>
<tr>
    <td class="keputusan">Keputusan</td>
    <td class="keputusan"><?php echo number_format($peratus,0)?> % </td>
</tr>
</table>
