<?php
include('sambungan.php');
if(isset($_POST['idpelajar'])){
    $idpelajar=isset($_POST['idpelajar'])? $_POST['idpelajar']:'';
    $namapelajar=isset($_POST['namapelajar'])? $_POST['namapelajar']:'';
    $idkelas=isset($_POST['idkelas'])? $_POST['idkelas']:'';
    $password=isset($_POST['password'])? $_POST['password']:'';
    $sql="insert into murid values('$idpelajar','$namapelajar','$idkelas','$password')";
    $result=mysqli_query($sambungan,$sql);
    
    if($result)
    echo "<script>alert('Berjaya signup')</script>";
    else
    echo "<script>alert('Tidak berjaya signup')</script>";
}
?>


<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<body style="background-image:url('gambar/wallpaper buku.jpg');
background-repeat: repeat;">
<img src=gambar/title.png style="
  display: block;
  margin-left: auto;
  margin-right: auto;">
<h3 class="panjang">Sign Up</h3>
<form class="panjang" action="signup.php" method="post">
    <table>
        <tr>
            <td>ID Pelajar</td>
             <td><input type="text" name="idpelajar" placeholder="nea001"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="namapelajar"></td>
</tr>
<tr>
    <td>Kelas</td>
    <td>
        <select name="idkelas">
            <?php
            $sql="SELECT * FROM kelas";
            $data=mysqli_query($sambungan,$sql);
            while($kelas = mysqli_fetch_array($data)){
                echo "<option value='$kelas[idkelas]'>$kelas[namakelas]</option>";
            }
            ?>
            </select>
        </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password"></td>
        </tr>
        </table>
        <button class="tambah" type="submit">Daftar</button>
<button class="padam" type="button" onclick="window.location='login.php'">Login</button>
</form>
</body>

