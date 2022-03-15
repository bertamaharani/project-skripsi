-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2021 pada 12.03
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbberta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hasil`
--

CREATE TABLE `tbl_hasil` (
  `Periode` int(11) NOT NULL,
  `Tegangan` double NOT NULL,
  `Arus` int(11) NOT NULL,
  `Daya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_hasil`
--

INSERT INTO `tbl_hasil` (`Periode`, `Tegangan`, `Arus`, `Daya`) VALUES
(2021, 21, 122, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`Username`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyediaan`
--

CREATE TABLE `tbl_penyediaan` (
  `IdPenyediaan` varchar(25) NOT NULL,
  `Periode` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Tegangan` double NOT NULL,
  `Arus` int(11) NOT NULL,
  `Daya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penyediaan`
--

INSERT INTO `tbl_penyediaan` (`IdPenyediaan`, `Periode`, `Tanggal`, `Tegangan`, `Arus`, `Daya`) VALUES
('1', 2017, '2017-06-20', 20.9, 118, 3631),
('10', 2018, '2018-03-20', 20.9, 116, 3569),
('11', 2018, '2018-04-20', 20.6, 118, 3579),
('12', 2018, '2018-05-20', 20.5, 109, 3290),
('13', 2018, '2018-06-20', 20.9, 116, 3569),
('14', 2018, '2018-07-20', 20.8, 114, 3491),
('15', 2018, '2018-08-20', 20.9, 114, 3508),
('16', 2018, '2018-09-20', 20.8, 117, 3583),
('17', 2018, '2018-10-20', 20.8, 117, 3583),
('18', 2018, '2018-11-20', 20.7, 115, 3505),
('19', 2018, '2018-12-20', 20.8, 116, 3552),
('2', 2017, '2017-07-20', 20.9, 122, 3754),
('20', 2019, '2019-01-20', 20.9, 121, 3723),
('21', 2019, '2019-02-20', 20.9, 116, 3569),
('22', 2019, '2019-03-20', 20.9, 172, 5293),
('23', 2019, '2019-04-20', 20.9, 120, 3692),
('24', 2019, '2019-05-20', 20.9, 117, 3600),
('25', 2019, '2019-06-20', 20.9, 122, 3754),
('26', 2019, '2019-07-20', 20.9, 119, 3662),
('27', 2019, '2019-08-20', 20.8, 113, 3460),
('28', 2019, '2019-09-20', 20.7, 115, 3505),
('29', 2019, '2019-10-20', 20.7, 122, 3718),
('3', 2017, '2017-08-20', 20.9, 112, 3446),
('30', 2019, '2019-11-20', 21, 117, 3617),
('31', 2019, '2019-12-20', 20.9, 113, 3477),
('32', 2020, '2020-01-20', 20.9, 120, 3692),
('33', 2020, '2020-02-20', 20.8, 112, 3430),
('34', 2020, '2020-03-20', 20.9, 119, 3662),
('35', 2020, '2020-04-20', 21.1, 119, 3697),
('36', 2020, '2020-05-20', 21, 112, 3463),
('4', 2017, '2017-09-20', 20.5, 114, 3441),
('5', 2017, '2017-10-20', 20.6, 121, 3670),
('6', 2017, '2017-11-20', 20.7, 114, 3474),
('7', 2017, '2017-12-20', 20.7, 119, 3627),
('8', 2018, '2018-01-20', 20.6, 120, 3639),
('9', 2018, '2018-02-20', 20.9, 111, 3416);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_penyediaan`
--
ALTER TABLE `tbl_penyediaan`
  ADD PRIMARY KEY (`IdPenyediaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
