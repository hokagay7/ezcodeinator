<?php
include('sambungan.php')
?>

<link rel="stylesheet" href="senarai.css">
<table>
<caption style="
    border-radius: 12px;
    background-image: linear-gradient(to right, lightblue , gray);
    margin: 12px auto;
    padding: 10px; 
    width: 25%;
    flex-wrap: wrap;
    overflow: hidden;">
        Senarai Soalan
    </caption>
<tr>
    <th>ID Soalan</th>
    <th>Nama Soalan</th>
    <th>Jawapan</th>
    <th>ID Guru</th>
</tr>

<?php
$sql='select * from soalan';
$result = mysqli_query($sambungan, $sql);
while($soalan=mysqli_fetch_array($result)){
    echo '<tr><td>'.$soalan["idsoalan"].'</td>
    <td>'.$soalan["namasoalan"].'</td>
    <td>'.$soalan["jawapan"].'</td>
    <td>'.$soalan["idguru"].'</td>
</tr>';
}
?>
</table>
