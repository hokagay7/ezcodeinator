<?php
include('keselamatan.php');
include('menu_guru.php');
?>

<div class="kandungan">
    <h3 class="panjang">Padam Guru</h3>
    <form class="panjang" cation="guru_delete.php" method="post">
        <table>
            <tr>
                <td>IDGuru</td>
                <td>
                    <input type="text" name="idguru">
</td>
</tr>
</table>
<button class="padam" type="submit">Padam</button>
</form>
</div>