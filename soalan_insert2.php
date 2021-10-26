<?php
include('keselamatan.php');
include('sambungan.php');
?>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="kandungan">
    <h3 class="panjang">Tambah Soalan Baru</h3>
    <form class="panjang" action="soalan_insert.php" method="post">
        <table>
            <tr>
                <td>ID Soalan</td>
                <td><input type="text" name="idsoalan" value="S001"></td>
            </tr>
            <tr>
                <td>Soalan</td>
                <td><input type="text" name="namasoalan"></td>
            </tr>
            <tr>
                <td>Pilihan A</td>
                <td><input type="text" name="pilihana"></td>
            </tr>
            <tr>
                <td>Pilihan B</B></td>
                <td><input type="text" name="pilihanb"></td>
            </tr>
            <tr>
                <td>Jawapan</td>
                <td><input type="text" name="jawapan" placeholder="masukkan jawapan"></td>
            </tr>
            <tr>
                <td>Guru</td>
                <td>
                    <select name="idguru">
                        <?php
                        $sql="SELECT * FROM guru";
                        $data=mysqli_query($sambungan,$sql);
                        while($guru=mysqli_fetch_array($data)){
                            echo "<option value='$guru[idguru]'>$guru[namaguru]</option>";
                        }
                        ?>
                        </select>
                    </td>
                    </tr>
                    <tr>
                        <td>Topik</td>
                        <td>
                            <select name="idtopik">
                                <?php
                                $sql="SELECT * FROM topik";
                                $data=mysqli_query($sambungan,$sql);
                                while($topik=mysqli_fetch_array($data)){
                                    echo "<option value='$topik[idtopik]'>$topik[namatopik]</option>";
                                }
                                ?>
                                </select>
                            </td>
                            </tr>
                            </table>
                            <button class="tambah" type="submit">Tambah</button>
                            </form>
                            </div>