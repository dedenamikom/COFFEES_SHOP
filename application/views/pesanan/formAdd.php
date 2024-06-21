<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tambah Data Minuman</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Minuman</li>
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
                        <form name="sentMessage" method="post" action="<?php echo site_url('minuman/save'); ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="namaMobil" class="col-sm-3 col-form-label">Nama Kopi</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="namaKopi" class="form-control" id="namaKopi" placeholder="Nama Kopi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-sm-3 col-form-label">Foto Kopi</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="foto" class="form-control" id="foto">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" id="sendMessageButton" class="btn btn-info float-right">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
