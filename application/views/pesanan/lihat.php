<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pesanan</li>
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
                            <h3 class="card-title">Data Pesanan</h3>
                        </div>
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nama Pemesan</th>
                                        <th>Nama Produk</th>
                                        <th>Total Harga</th>
                                        <th>Jasa Kirim</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($pesanan as $val) { ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $val->nama; ?></td>
                                        <td><?php echo $val->namaProduk; ?></td>
                                        <td><?php echo $val->totalHarga; ?></td>
                                        <td><?php echo $val->jasaKirim; ?></td>
                                        <td><img src="<?php echo base_url('./assets/img/pembayaran/'. $val->foto);?>" width="150" height="110"></td>
                                        <td>
                                        <div class="btn-group">
                                                <a href="<?php echo site_url('pesanan/delete/' . $val->id); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $no++; } ?>
                                </tbody>
                            </table>
                            <div class="card-footer clearfix">
                            <a href="<?php echo site_url('pesanan'); ?>" class="btn btn-sm btn-info float-left">Kembali</a>
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
