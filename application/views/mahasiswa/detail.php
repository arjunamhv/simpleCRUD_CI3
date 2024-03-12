<div class="card m-5">
    <div class="card-header d-flex justify-content-between">
        <h3 class="col">Detail Data Mahasiswa</h3>
        <a href="<?= base_url(); ?>mahasiswa" type="button" class="btn btn-warning inline ms-auto"><i
                class="fa-solid fa-chevron-left"></i> Kembali</a>
    </div>
    <div class="card-body">
    <div class="card">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Nama: <?= $mahasiswa['nama']; ?></li>
    <li class="list-group-item">NIM: <?= $mahasiswa['nim']; ?></li>
    <li class="list-group-item">Jurusan: <?= $mahasiswa['jurusan']; ?></li>
    <li class="list-group-item">Email: <?= $mahasiswa['email']; ?></li>
    <li class="list-group-item">Nomor Telepon: <?= $mahasiswa['nomor_telepon']; ?></li>
  </ul>
</div>
    </div>
</div>