<div class="card m-5">
    <div class="card-header d-flex justify-content-between">
        <h3>Ubah Data Mahasiswa</h3>
        <a href="<?= base_url(); ?>mahasiswa" type="button" class="btn btn-warning"><i
                class="fa-solid fa-chevron-left"></i> Kembali</a>
    </div>
    <div class="card-body">
        <?php
        if (validation_errors()) {
            ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php
        }
        ?>
        <form action="" method="POST">
            <input type="hidden" name="nim" value="<?= $mahasiswa['nim']; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mahasiswa['jurusan']; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="notelp" class="form-label">Nomor Telepon</label>
                <input type="number" class="form-control" id="notelp" name="notelp" value="<?= $mahasiswa['nomor_telepon']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>