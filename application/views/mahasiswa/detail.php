<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                Detail Mahasiswa
            </div>
            <div class="card-body">
                <h5 class="card-title"><?=$mahasiswa['nama'];?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?=$mahasiswa['nrp']?></h6>
                <li class="list-group-item"><?=$mahasiswa['email']?></li>
                <li class="list-group-item" mb-2><?=$mahasiswa['jurusan']?></li>
                <a href="<?=base_url();?>mahasiswa" class="btn btn-primary">kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>