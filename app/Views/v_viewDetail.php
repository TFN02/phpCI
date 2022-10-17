<head>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

</head>

<div class="card my-5 py-5 text-light bg-dark">
    <h3 align="center" class="my-3">View detail Profil <?php echo $mahasiswa['Nama'];?></h3>
    <table align="center" class="my-3">
        <tr>
            <td>NIM :</td>
            <td><?= $mahasiswa['Nim']; ?></td>
        </tr>
        <tr>
            <td>Nama :</td>
            <td><?= $mahasiswa['Nama']; ?></td>
        </tr>
        <tr>
            <td>Umur :</td>
            <td><?= $mahasiswa['Umur']; ?></td>
        </tr>

    </table>
</div>

<a href="/mahasiswa" class="btn btn-primary">Go to Data Mahasiswa !</a>