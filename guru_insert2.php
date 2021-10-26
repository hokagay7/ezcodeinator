<?php

include('menu_guru.php');
?>

<div class="kandungan">
    <h3 class="panjang">Tambah Guru Baru</h3>
    <form class="panjang" action="guru_insert.php" method="post">
        <table>
            <tr>
                <td>ID Guru</td>
                <td>
                    <input type="text" name="idguru" value="G01">
                </td>    
            </tr>
            <tr>
                <td>Nama Guru</td>
                <td><input type="text" name="namaguru"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" placeholder="max:8 char"></td>
            </tr>
        </table>
    <button class="tambah" type="submit">Tambah</button>
</form>
</div>


