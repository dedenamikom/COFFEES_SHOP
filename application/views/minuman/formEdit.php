<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Data Minuman</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data Minuman</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Data Minuman</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo site_url('minuman/edit'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="idKopi" value="<?php echo $minuman->idKopi; ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="namaMobil" class="col-sm-3 col-form-label">Nama Kopi</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="namaKopi" value="<?php echo $minuman->namaKopi; ?>"
                                            class="form-control" id="namaKopi" placeholder="Nama Kopi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-sm-3 col-form-label">Foto Kopi</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="foto" class="form-control" id="foto" placeholder="Foto Mobil">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="harga" value="<?php echo $minuman->harga;?>" class="form-control" id="harga" placeholder="Harga">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info float-right">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
