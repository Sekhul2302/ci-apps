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
                    <!-- <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?=validation_errors();?> 
                    </div> 
                    <?php endif;?> -->
                    
                    <form action="" method='post'>
                        <input type="tdxt" name='id' value='<?=$mahasiswa['id']?>'>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name='nama' value='<?=$mahasiswa['nama']?>' id="nama" placeholder="Masukan Nama">
                            <small class="form-text text-danger"><?=form_error('nama')?></small>
                        </div>
                        <div class="form-group">
                            <label for="NRP">NRP</label>
                            <input type="text" class="form-control" name='nrp' value='<?=$mahasiswa['nrp']?>' id="nrp" placeholder="Masukan NRP">
                            <small class="form-text text-danger"><?=form_error('nrp')?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name='email' value='<?=$mahasiswa['email']?>' id="email" placeholder="Masukan email">
                            <small class="form-text text-danger"><?=form_error('email')?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Pilih Jurusan</label>
                            <select class="form-control" id="jurusan" name='jurusan'>
                                <?php foreach($jurusan as $j) : ?>
                                    <?php if($j == $mahasiswa['jurusan']):?>
                                        <option value="<?=$j?>" selected><?=$j?></option>
                                    <?php else :?>
                                        <option value="<?=$j?>"><?=$j?></option>    
                                    <?php endif;?>
                                <?php endforeach; ?>;
                            </select>
                        </div>
                        <button type='submit' name='tambah' class='btn btn-primary float-right'>Ubah</button>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>