<?php
include('sambungan.php');
session_start();

if(isset($_POST['userid'])){
    $userid=$_POST['userid'];
    $password=$_POST['password'];

    $sql="SELECT * FROM murid";
    $result=mysqli_query($sambungan,$sql);
    $jumpa=FALSE;
    while($murid=mysqli_fetch_array($result)){
        if($murid['idpelajar']==$userid && $murid["password"]==$password){
            $jumpa=TRUE;
            $_SESSION['username']= $murid['idpelajar'];
            $_SESSION['nama']=$murid['namapelajar'];
            $_SESSION['status']='pelajar';
            break;
        }
    }
    if ($jumpa==FALSE){
        $sql="SELECT * FROM guru";
        $result = mysqli_query($sambungan, $sql);
        while($guru=mysqli_fetch_array($result)){
        while($guru['idguru']==$userid&&$guru["password"]==$password){
            $jumpa=TRUE;
            $_SESSION['username']=$guru['idguru'];
            $_SESSION['nama']=$guru['namaguru'];
            $_SESSION['status']='guru';
            break;
        }
    }
}
if ($jumpa==TRUE){
    header("Location:utama.html");
}
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
<h3 class="pendek"> Sign In </h3>
<form class="pendek" action=login.php method=post class="login">
<table>
<tr>
<td><input type="text" name="userid" placeholder="ID Pengguna"></td>
<tr>
<tr>
<td><input type="password" name="password" placeholder="Password"></td>
</tr>
</table>
<button class="login" type="submit">Login</button>
<button class="signup" type="button" onclick="window.location='signup.php'">Sign Up</button>
</form>
</body>