<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manajemen Pesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Manajemen Pesanan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Pesanan</h3>
                        </div>
                        <div class="card-body">
                            <!-- Alert -->
                            <?php if ($this->session->flashdata('success_message')) { ?>
                                <div class="alert alert-success alert-transparent" role="alert">
                                    <?php echo $this->session->flashdata('success_message'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-success alert-transparent" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            <!-- End of Alert -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nama Produk</th>
                                        <th>Jumlah Produk</th>
                                        <th>Harga Satuan</th>
                                        <th>Total Harga</th>
                                        <th>Status Pembelian</th>
                                        <th>Status Pembayaran</th>
                                        <th style="width: 150px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($pesanan as $val) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $val->namaKopi; ?></td>
                                            <td><?php echo $val->jumlah; ?></td>
                                            <td><?php echo $val->harga; ?></td>
                                            <td><?php echo $val->total; ?></td>
                                            <td>
                                                <form action="<?php echo site_url('pesanan/update_status_pembelian'); ?>" method="post">
                                                    <input type="hidden" name="idTransaksi" value="<?php echo $val->idTransaksi; ?>">
                                                    <select name="status_pembelian" class="form-control" onchange="this.form.submit()">
                                                        <option value="baru" <?php if ($val->status_pembelian == 'baru')
                                                                                    echo 'selected'; ?>>Baru</option>
                                                        <option value="ditolak" <?php if ($val->status_pembelian == 'ditolak')
                                                                                    echo 'selected'; ?>>
                                                            Ditolak</option>
                                                        <option value="diterima" <?php if ($val->status_pembelian == 'diterima')
                                                                                        echo 'selected'; ?>>
                                                            Diterima</option>
                                                        <option value="selesai" <?php if ($val->status_pembelian == 'selesai')
                                                                                    echo 'selected'; ?>>
                                                            Selesai</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="<?php echo site_url('pesanan/update_status_pembayaran'); ?>" method="post">
                                                    <input type="hidden" name="idTransaksi" value="<?php echo $val->idTransaksi; ?>">
                                                    <select name="status_pembayaran" class="form-control" onchange="this.form.submit()">
                                                        <option value="menunggu" <?php if ($val->status_pembayaran == 'menunggu')
                                                                                        echo 'selected'; ?>>
                                                            Menunggu</option>
                                                        <option value="lunas" <?php if ($val->status_pembayaran == 'lunas')
                                                                                    echo 'selected'; ?>>Lunas
                                                        </option>
                                                        <option value="gagal" <?php if ($val->status_pembayaran == 'gagal')
                                                                                    echo 'selected'; ?>>Gagal
                                                        </option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo site_url('pesanan/lihat'); ?>" class="btn btn-warning">Lihat</a>
                                                    <a href="<?php echo site_url('pesanan/deleteTransaksi/' . $val->idTransaksi); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.col -->
            </div>
        </div>
        <!--/.container-fluid -->
    </section>
    <!--/.content -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('.alert-transparent').fadeOut(300);
        }, 3000);
    });
</script>