<div class="card m-5">
    <?php if ($this->session->flashdata('flash')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data mahasiswa <strong>berhasil</strong>
            <?= $this->session->flashdata('flash'); ?>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="card-header d-flex justify-content-between">
        <h3 class="col">Data Mahasiswa</h3>
        <a href="<?= base_url(); ?>mahasiswa/tambah" type="button" class="btn btn-primary inline ms-auto"><i
                class="fa-solid fa-circle-plus"></i> Tambah data</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($mahasiswa as $mhs): ?>
                    <tr>
                        <th scope="row">
                            <?= $i++; ?>
                        </th>
                        <td>
                            <?= $mhs['nim']; ?>
                        </td>
                        <td>
                            <?= $mhs['nama']; ?>
                        </td>
                        <td>
                            <?= $mhs['jurusan']; ?>
                        </td>
                        <td>
                            <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['nim']; ?>" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                            <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['nim']; ?>" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['nim']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>