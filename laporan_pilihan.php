<html>
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="borang.css">
<body>
    <h3 class="panjang">Pilihan Jenis Laporan</h3>
    <form class="panjang" action="laporan_cetak.php" method="post">
        <select id='pilihan' name='pilihan' onchange='papar_pilihan()'>
        <option value=1>Semua Kelas dan Peratus</option>
        <option value=2>Mengikut Kelas</option>
        <option value=3>Mengikut Peratus</option>
        <option value=4>Mengikut Kelas dan Peratus</option>
</select><br>
<div id="kelas">
    <select name="idkelas">
        <?php
        include('sambungan.php');
        $sql="SELECT * FROM kelas";
        $data=mysqli_query($sambungan,$sql);
        while($kelas=mysqli_fetch_array($data)){
            echo "<option value='$kelas[idkelas]'>$kelas[namakelas]</option>";
        }
    ?>
    </select>
    </div>
    <div id="peratus">
        <select name="peratus">
            <option value=80>Lebih 80</option>
            <option value=5>Lebih 50</option>
            <option value=0>Kurang 50</option>
    </select>
    </div>
    <button class="papar" type="submit">Papar</button>
    </form>