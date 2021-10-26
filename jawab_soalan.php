<?php
include('sambungan.php');

$idtopik=$_GET['idtopik'];
?>

<html>
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="senarai.css">
<body>
<form action="jawab_semak.php" method="post">
<table>
    <h1>Soalan Kuiz Online</h1>
    <tr>
        <th>Bil</th>
        <th>Soalan</th>
</tr>
<?php
$sql="SELECT * FROM soalan where idtopik='idtopik' order by idsoalan ASC";

$data=mysqli_query($sambungan,$sql);
$bil=1;
while($soalan=mysqli_fetch_array($data)){
?>
<tr>
<td class="bil"><?php echo $bil; ?></td>
<td class="soalan">
    <?php echo $soalan['namasoalan'];?><br>
    <input type="radio" name="<?php echo $soalan['idsoalan'];?>" value="benar">
    <?php echo "Benar.".$soalan['pilihana'];?><br>
    <?php echo $soalan['namasoalan'];?><br>
    <input type="radio" name="<?php echo $soalan['idsoalan'];?>" value="Salah">
    <?php echo "Salah.".$soalan['pilihanb'];?><br>
    <input type="hidden" name="idtopik" value="<?php echo $idtopik; ?>">
</td>
</tr>
<?php $bil=$bil+1;}?>
</table>
<button class="semak" type="submit">Semak</button>
</form>
</body>