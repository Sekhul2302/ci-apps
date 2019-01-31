<div class="container">
    <?php if($this->session->flashdata('flash')):?>
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa<strong>berhasil</strong><?=$this->session->flashdata('flash');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        </div>
    </div>
    <?php endif ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">  
                    <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?=validation_errors();?> 
                    </div> 
                    <?php endif;?>
                    
                    <form action="" method='post'>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name='nama' id="nama" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group">
                            <label for="NRP">NRP</label>
                            <input type="text" class="form-control" name='nrp' id="nrp" placeholder="Masukan NRP">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name='email' id="email" placeholder="Masukan email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Pilih Jurusan</label>
                            <select class="form-control" id="jurusan" name='jurusan'>
                                <option value='Teknik Informatika'>Teknik Informatika</option>
                                <option value='Teknik Industri'>Teknik Industri</option>
                                <option value='Teknik Pangan'>Teknik Pangan</option>
                                <option value='Teknik Mesin'>Teknik Mesin</option>
                                <option value='Teknik Arsitektur'>Teknik Arsitektur</option>
                            </select>
                        </div>
                        <button type='submit' name='tambah' class='btn btn-primary float-right'>Tambah</button>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>