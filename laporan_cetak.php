<html>
    <link rel="stylesheet" href="senarai.css">
    <link rel="stylesheet" href="borang.css">
    <body>
        <table>
            <tr>
                <th>Bil</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Tarikh</th>
                <th>Peratus</th>
</tr>

<?php
include('sambungan.php');
$pilihan=isset($_POST['pilihan'])? $_POST['pilihan']:'';
$idkelas=isset($_POST['idkelas'])? $_POST['idkelas']:'';
$peratus=isset($_POST['peratus'])? $_POST['peratus']:'';
$sql="SELECT * FROM markah JOIN murid on markah.idpelajar=murid.idpelajar JOIN kelas on murid.idkelas=kelas.idkelas GROUP BY markah.idpelajar ";
switch($pilihan){
    case 1 :$syarat="";
        $tajuk="Pencapaian Keseluruhan";break;
    case 2 :$syarat="having kelas.idkelas='$idkelas'";
        $tajuk="Pencapaian Mengikut Kelas";break;
    case 3:
        if($peratus==80){
            $syarat="having peratus >=80";
            $tajuk="Pencapaian Lebih Dari 80%";
        }
        else if($peratus==50){
            $syarat="having peratus >=50";
            $tajuk="Pencapaian Lebih Dari 50%";
        }
        else if($peratus==0){
            $syarat="having peratus <50";
            $tajuk="Pencapaian Kurang Dari 50%";
        }
        break;
    case 4:
        if($peratus==80){
            $syarat="having peratus >=80 and kelas.idkelas='".$idkelas."'";
            $tajuk="Pencapaian Mengikut Kelas Dan Lebih Dari 80%";
        }
        else if($peratus==50){
            $syarat="having peratus >=50 and kelas.idkelas='".$idkelas."'";
            $tajuk="Pencapaian Mengikut Kelas Dan Lebih Dari 50%";
        }
        else if($peratus==0){
            $syarat="having peratus <50 and kelas.idkelas='".$idkelas."'";
            $tajuk="Pencapaian Kurang Dari 50%";
        }
        break;
}
$bil=1;
$sql=$sql.$syarat;
$data=mysqli_query($sambungan,$sql);
while($markah=mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $bil; ?></td>
        <td><?php echo $kuiz['namapelajar']; ?></td>
        <td><?php echo $kuiz['namakelas']; ?></td>
        <td><?php echo $kuiz['tarikh']; ?></td>
        <td><?php echo $kuiz['namatopik']; ?></td>
        <td><?php echo $kuiz['peratus']; ?></td>
</tr>
<?php
$bil=$bil+1;
}
?>
<link rel="stylesheet" href="button.css">
<caption style="  border-radius: 12px;
  background-image: linear-gradient(to right, lightblue , gray);
  margin: 12px auto;
  padding: 10px; 
  width: 25%;
  flex-wrap: wrap;
  overflow: hidden;
}">
<?php echo $tajuk;?></caption>
</table>
<center>
<button clas="cetak" onclick="window.print()">Cetak</button>
</center>
</div>