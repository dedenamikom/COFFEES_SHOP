-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2024 pada 22.04
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cooffeshop_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `Id_admin` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`Id_admin`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `idOrder` int(11) NOT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`idOrder`, `total`, `tanggal`) VALUES
(15, 1160000.00, '2024-06-21 17:33:23'),
(16, 250000.00, '2024-06-21 17:36:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detailtransaksi`
--

CREATE TABLE `tbl_detailtransaksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` int(12) NOT NULL,
  `jasaKirim` enum('JNE','TIKI','Pos Indonesia','GOJEK') NOT NULL,
  `bank` enum('BCA','BNI','BRI') NOT NULL,
  `namaProduk` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `totalHarga` int(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_detailtransaksi`
--

INSERT INTO `tbl_detailtransaksi` (`id`, `nama`, `alamat`, `telepon`, `jasaKirim`, `bank`, `namaProduk`, `foto`, `totalHarga`, `jumlah`, `tanggal`) VALUES
(15, 'andika saputra', 'sleman', 8738435, 'Pos Indonesia', 'BNI', 'N E R O', 'Picture11.png', 1160000, 0, '2024-06-21 12:33:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `idKategori` int(11) NOT NULL,
  `idKopi` int(11) DEFAULT NULL,
  `idMkn` int(11) DEFAULT NULL,
  `namaKategori` enum('makanan','minuman') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kopi`
--

CREATE TABLE `tbl_kopi` (
  `idKopi` int(11) NOT NULL,
  `namaKopi` varchar(25) NOT NULL,
  `harga` int(30) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kopi`
--

INSERT INTO `tbl_kopi` (`idKopi`, `namaKopi`, `harga`, `foto`) VALUES
(3, 'PURRBICA', 20000, '12.png'),
(4, 'EXBLCK GOLD', 250000, '21.png'),
(5, 'N E R O', 290000, '31.jpg'),
(6, 'ROAST BLEND', 200, '4.png'),
(7, 'VIEATNAM DRIP', 300, '5.png'),
(8, 'NESCGOLD PREM', 200, '6.png'),
(9, 'G A Y O', 200, '7.png'),
(10, 'PRESIDENTI', 200, '8.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_makanan`
--

CREATE TABLE `tbl_makanan` (
  `idMkn` int(11) NOT NULL,
  `namaMkn` varchar(25) NOT NULL,
  `harga` int(30) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_makanan`
--

INSERT INTO `tbl_makanan` (`idMkn`, `namaMkn`, `harga`, `foto`) VALUES
(2, 'Burger', 25000, 'burger1.jpg'),
(4, 'Spaghetti', 30000, 'spaghetti2.jpg'),
(5, 'French Fries', 15000, 'Frenchfries.jpg'),
(6, 'Pizza', 50000, 'pizza1.jpg'),
(7, 'Salad', 20000, 'salad11.jpg'),
(8, 'Fried Rice', 20000, 'friedrice1.jpg'),
(9, 'Rice Bowl', 30000, 'ricebowl1.jpg'),
(10, 'Ramen', 35000, 'Ramen1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `idTransaksi` int(5) NOT NULL,
  `idKopi` int(50) NOT NULL,
  `idOrder` int(11) DEFAULT NULL,
  `namaKopi` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `status_pembelian` enum('baru','ditolak','diterima','selesai') DEFAULT NULL,
  `status_pembayaran` enum('menunggu','lunas','gagal') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`idTransaksi`, `idKopi`, `idOrder`, `namaKopi`, `jumlah`, `harga`, `total`, `status_pembelian`, `status_pembayaran`) VALUES
(25, 5, 15, 'N E R O', 4, 290000, 1160000, 'baru', 'menunggu'),
(26, 4, 16, 'EXBLCK GOLD', 1, 250000, 250000, 'baru', 'menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `username`, `password`, `email`) VALUES
(10, 'DEDEN DARMAWANSYAH', '1', 'deden@gmail.com'),
(11, 'WILDAN ABRORI AZIZ', '2', 'wildan@gmail.com'),
(12, 'M. MAULUD SYAFRIZAL', '3', 'maulud@gmail.com'),
(13, 'ENGGAR OKTA PRADANA', '4', 'enggar@gmail.com'),
(14, 'M.ADITYA FARHAN', '5', 'adit@gmail.com'),
(15, 'komandan', 'komandan', 'hfvfv@gmail.com'),
(16, 'kikin', 'kikin', 'kikin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Indeks untuk tabel `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`idOrder`);

--
-- Indeks untuk tabel `tbl_detailtransaksi`
--
ALTER TABLE `tbl_detailtransaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`idKategori`),
  ADD KEY `idKopi` (`idKopi`),
  ADD KEY `idMkn` (`idMkn`);

--
-- Indeks untuk tabel `tbl_kopi`
--
ALTER TABLE `tbl_kopi`
  ADD PRIMARY KEY (`idKopi`);

--
-- Indeks untuk tabel `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  ADD PRIMARY KEY (`idMkn`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `idKopi` (`idKopi`),
  ADD KEY `idOrder` (`idOrder`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_detailtransaksi`
--
ALTER TABLE `tbl_detailtransaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kopi`
--
ALTER TABLE `tbl_kopi`
  MODIFY `idKopi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  MODIFY `idMkn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `idTransaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD CONSTRAINT `tbl_kategori_ibfk_1` FOREIGN KEY (`idKopi`) REFERENCES `tbl_kopi` (`idKopi`),
  ADD CONSTRAINT `tbl_kategori_ibfk_2` FOREIGN KEY (`idMkn`) REFERENCES `tbl_makanan` (`idMkn`);

--
-- Ketidakleluasaan untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`idKopi`) REFERENCES `tbl_kopi` (`idKopi`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`idOrder`) REFERENCES `tbl_checkout` (`idOrder`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
