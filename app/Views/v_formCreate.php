<div class="container">
    <div class="row text-light bg-dark my-5 py-5">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Mahasiswa</h2>

            <form action="/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="foto" id="foto">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Nim" id="Nim">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" Name="Nama" id="Nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Umur" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" Name="Umur" id="Umur">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data Mahasiswa</button>
            </form>
        </div>
    </div>
</div>