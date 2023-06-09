<div class="container">
    <div class="jumbotron mt-3">
        <h1 class="display-4 mb-3">Selamat Datang <?= $data['nama'] ?></h1>
        <!-- <a type="button" class="mb-2" data-bs-toggle="modal" data-bs-target="#homeModal">
                ubah nama
        </a> -->
        <p class="lead">Ini adalah website untuk melakukan pendataan pada mahasiswa berprestasi.</p>
        <hr class="my-4">
        <p>Silahkan menghubungi kami bila ada pertanyaan lebih lanjut.</p>
        <p class="lead mt-4">
            <a class="btn btn-primary" href="<?= BASEURL; ?>/contact" role="button">Contact</a>
            <a class="btn btn-primary" href="<?= BASEURL; ?>/mahasiswa" role="button">Mulai Pendataan</a>
        </p>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="homeModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Ubah Nama Anda</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    
            <form action="<?= BASEURL; ?>/contact/set" method="post">
                <!-- user -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
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