<head>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<form class="my-5" align="center" action="<?= route_to('mahasiswa.search'); ?>" method="POST">
    <?= csrf_field(); ?>
    <input type="text" placeholder="Search.." name="Nama">
    <button class="btn btn-primary" type="submit">Search</button>
</form>
<div align="center" class="my-3">
    <a href="/mahasiswa/create">
        <button class="btn btn-primary">
            Tambah Data Mahasiswa
        </button>
    </a>
</div>

<table class="table table-striped table-dark text-center">
    <tr>
        <td>Foto</td>
        <td>NIM</td>
        <td>Nama</td>
        <td>Umur</td>
        <td>Aksi</td>
    </tr>
    <!-- Latihan 5 -->
    <?php
    foreach($mahasiswa as $mhs){
  ?>
    <tr>
        <td><?php  echo '<img src="'.base_url("img/$mhs[file_foto]").'" width="100">'; ?></td>
        <td><?= $mhs['Nim']; ?></td>
        <td><?= $mhs['Nama']; ?></td>
        <td><?= $mhs['Umur']; ?></td>
        <td>
            <a href="mahasiswa/viewDetail/<?= $mhs['id']; ?>"><button class="btn btn-info">View Detail</button>
                <a href="mahasiswa/edit/<?= $mhs['id']; ?>"><button class="btn btn-warning">Edit</button></a>
                <a href="mahasiswa/delete/<?= $mhs['id']; ?>" <button class="btn btn-danger">Delete</button></a>
        </td>
    </tr>

    <?php }?>
</table>
<a href="/main" class="btn btn-primary">Go to Main !</a>