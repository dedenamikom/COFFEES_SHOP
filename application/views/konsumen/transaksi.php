<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu List</title>

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-image: url('<?php echo base_url('assets/img/kopi/hahaha.png'); ?>');
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            min-height: 0;
        }

        .container {
            width: 80%;
            margin-top: 0;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            flex-wrap: wrap;
        }

        .table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background-color: #333;
            color: #fff;
        }

        .table thead th {
            padding: 10px;
            text-align: left;
        }

        .table tbody tr {
            background-color: #f2f2f2;
            transition: background-color 0.3s;
        }

        .table tbody tr:nth-child(even) {
            background-color: #e6e6e6;
        }

        .table tbody tr:hover {
            background-color: #dcdcdc;
        }

        .table tbody td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table .btn-group a {
            padding: 5px 10px;
            margin-right: 5px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .table .btn-warning {
            background-color: #ffc107;
        }

        .table .btn-warning:hover {
            background-color: #e0a800;
        }

        .table .btn-danger {
            background-color: #dc3545;
        }

        .table .btn-danger:hover {
            background-color: #c82333;
        }

        .card-footer {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            text-align: center;
        }

        .pagination {
            display: inline-flex;
            list-style: none;
            padding: 0;
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .pagination .page-link {
            display: block;
            padding: 5px 10px;
            color: #333;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .pagination .page-link:hover {
            background-color: #e9ecef;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-custom {
            color: #fff;
            background-color: #007bff;
            /* Blue color for "Lanjutkan Belanja" */
            border-color: #007bff;
        }

        .btn-custom:hover {
            color: #fff;
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-checkout {
            color: #fff;
            background-color: #28a745;
            /* Green color for "Checkout" */
            border-color: #28a745;
        }

        .btn-checkout:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kopi</th>
                    <th>jumlah</th>
                    <th>Harga</th>
                    <th>total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($this->cart->contents() as $items) :
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $items['name'] ?></td>
                        <td><?php echo $items['qty'] ?></td>
                        <td><?php echo number_format($items['price'], 0, ',', '.') ?></td>
                        <td><?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4" style="text-align: left;">Total</td>
                    <td style="text-align: left;">
                        Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?>
                    </td>
                </tr>
            </tbody>

        </table>
        <div>
            <a href="<?php echo site_url('shopmenu/hapus_keranjang'); ?>" class="btn btn-sm btn-danger">Hapus Keranjang</a>
            <a href="<?php echo site_url('shopmenu/index'); ?>" class="btn btn-sm btn-custom">Lanjutkan Belanja</a>
            <a href="<?php echo site_url('shopmenu/proses_checkout'); ?>" class="btn btn-sm btn-checkout">Checkout</a>
        </div>
    </div>
</body>

</html>
