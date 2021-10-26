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
        Senarai Nama Kelas
    </caption>
<tr>
    <th>ID Kelas</th>
    <th>Nama Kelas</th>
    <th>ID Guru</th>
    <th>Nama Guru</th>
</tr>

<?php
$sql='SELECT * from kelas';
$result = mysqli_query($sambungan, $sql);
while($kelas=mysqli_fetch_array($result)){
    echo '<tr><td>'.$kelas["idkelas"].'</td>
    <td>'.$kelas["namakelas"].'</td>
    <td>'.$kelas["idguru"].'</td>
    <td>'.$kelas["namaguru"].'</td>
</tr>';
}
?>
</table>
