<tr>
    <td>
        <form action="<?php echo '/mahasiswa/update/' . $mahasiswa['id'] ?>" method="POST">
            <?= csrf_field() ?>
            <br>
            <div class="text-light bg-dark my-5 py-5">
                <h2 align="center" class="my-3">Edit Data Mahasiswa</h2>
                <table width="25%" border="0" align="center">
                    <tr>
                        <td>NIM</td>
                        <td><input type="text" name="Nim" value="<?php echo ($mahasiswa['Nim']) ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="Nama" value="<?php echo ($mahasiswa['Nama']) ?>"></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td><input type="number" name="Umur" value="<?php echo ($mahasiswa['Umur']) ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="simpan" value="Update Data"></td>
                    </tr>

                </table>
            </div>

        </form>
    </td>
</tr>
<a href="/mahasiswa" class="btn btn-primary my-3">Go to Data Mahasiswa !</a>