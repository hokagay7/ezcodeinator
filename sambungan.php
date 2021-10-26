<?php
    $host='localhost';
    $user='root';
    $password='';
    $database='ezcodeinator';
    $sambungan=mysqli_connect($host, $user, $password, $database) or die("sambungan gagal");
    echo "<script>
    function()
    window.alert('sambungan berjaya')
    </script>";
?>