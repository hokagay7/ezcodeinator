<?php
include('sambungan.php')
?>

<link rel="stylesheet" href="senarai.css">
<center>
<body style="background-image:url('gambar/wallpaper buku.jpg');
background-repeat: repeat;">
<table>
    <caption style="
    border-radius: 12px;
    background-image: linear-gradient(to right, lightblue , gray);
    margin: 12px auto;
    padding: 10px; 
    width: 25%;
    flex-wrap: wrap;
    overflow: hidden;">
        Senarai Nama Pelajar
    </caption>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Kelas ID</th>
    <th>Password</th>
</tr>

<?php
$sql='select * from murid';
$result = mysqli_query($sambungan, $sql);
while($murid=mysqli_fetch_array($result)){
    echo '<tr><td>'.$murid["idpelajar"].'</td>
    <td>'.$murid["namapelajar"].'</td>
    <td>'.$murid["idkelas"].'</td>
    <td>'.$murid["password"].'</td>
</tr>';
}
?>
</table>
</body>
</center>
