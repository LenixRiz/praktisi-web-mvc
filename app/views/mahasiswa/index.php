<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            <h3 class="mt-3">Daftar Mahasiswa Berprestasi</h3>
            <ul class="list-group mt-3">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama']?>
                        <div>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']?>" class="badge text-bg-primary ms-2">detail</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']?>" class="badge text-bg-danger ms-2" onclick="return confirm('Yakin?')">hapus</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">

                    <!-- nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
                    </div>

                    <!-- nim -->
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim" placeholder="22520000">
                    </div>

                    <!-- email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="nama@email.com">
                    </div>

                    <!-- jurusan -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="jurusan">Jurusan</label>
                        <select class="form-select" id="jurusan" name="jurusan">
                            <option selected>Pilih...</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Manajemen Informasi">Manajemen Informasi</option>
                        </select>
                    </div>

                    <!-- prestasi -->
                    <div class="mb-3">
                        <label for="prestasi" class="form-label">Prestasi</label>
                        <input type="text" class="form-control" id="prestasi" name="prestasi" placeholder="Kompetisi Hacknation 20xx">
                    </div>

                    <!-- tahun -->
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="20xx">
                    </div>

                    <!-- tingkat -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="tingkat">Tingkat</label>
                        <select class="form-select" id="tingkat" name="tingkat">
                            <option selected>Pilih...</option>
                            <option value="Kota/Kabupaten">Kota/Kabupaten</option>
                            <option value="Provinsi">Provinsi</option>
                            <option value="Nasional">Nasional</option>
                            <option value="Internasional">Internasional</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>