-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Mei 2015 pada 09.00
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `IDOBAT` int(11) NOT NULL AUTO_INCREMENT,
  `KODEOBAT` varchar(144) DEFAULT NULL,
  `NAMAOBAT` varchar(144) DEFAULT NULL,
  `JENIS` varchar(50) DEFAULT NULL,
  `FKOBAT` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDOBAT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`IDOBAT`, `KODEOBAT`, `NAMAOBAT`, `JENIS`, `FKOBAT`) VALUES
(1, '12345', 'Cream Whitening Pagi 1', 'Cream', 0),
(2, '12323', 'Cream Whitening Pagi 2', 'Cream', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `IDPASIEN` int(11) NOT NULL AUTO_INCREMENT,
  `NAMAPASIEN` varchar(144) DEFAULT NULL,
  `JENISKELAMIN` varchar(4) NOT NULL,
  `ALAMATPASIEN` varchar(144) DEFAULT NULL,
  `KOTAPASIEN` varchar(50) DEFAULT NULL,
  `PROPINSIPASIEN` varchar(50) DEFAULT NULL,
  `TEMPATLAHIR` varchar(50) DEFAULT NULL,
  `TANGGALLAHIR` date DEFAULT NULL,
  `HPPASIEN` varchar(15) DEFAULT NULL,
  `BBMPASIEN` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`IDPASIEN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`IDPASIEN`, `NAMAPASIEN`, `JENISKELAMIN`, `ALAMATPASIEN`, `KOTAPASIEN`, `PROPINSIPASIEN`, `TEMPATLAHIR`, `TANGGALLAHIR`, `HPPASIEN`, `BBMPASIEN`) VALUES
(1, 'Budi Sudarsono', 'L', 'Jl. Demak Timur No.21', 'Surabaya', 'Gorontalo', 'Semarang', '1989-02-08', '+6285230134241', 'AF5DDC'),
(2, 'Ayu Ashari', 'P', 'Jl. Keputih Tegal Timur No.44', 'Surabaya', 'Jawa Timur', 'Bojonegoro', '1993-04-02', '+62908989999', NULL),
(3, 'Jamal Abdul Naser', 'L', 'Jl. Batu Bulan No.76', 'Malang', 'Jawa Timur', 'Soroako', '2000-07-13', '085732211432', NULL),
(4, 'Bunga Citra Lestari', 'P', 'Jl. Nias No.32', 'Jakarta', 'DKI Jakarta', 'Jakarta', '1999-05-17', '085731321145', NULL),
(5, 'Dani Nurwannto', 'L', 'Jl. Rangkah Timur No.22', 'Medan', 'Sumatera Utara', 'Medan', '2015-03-16', '080965443526', NULL),
(6, 'Bejo Sukipo Ningrat', '', 'Jl. Malioboro No.33', 'Yogyakarta', 'Yogyakarta', 'Sleman', '2003-10-29', '085230134244', NULL),
(8, 'Burhanudin Harahap', 'L', 'Jl. Raya Ngambon', 'Bojonegoro', 'Jawa Timur', 'Bojonegoro', '1993-04-02', '085730134241', '57CFD4'),
(9, 'Siti Munawaroh', 'P', 'RT:006/RW:002, Desa. Ngrejeng, Kec. Purwosari', 'Bojonegoro', 'Jawa Timur', 'Bojonegoro', '1993-03-18', '085730134244', 'A45C75');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekammedis`
--

CREATE TABLE IF NOT EXISTS `rekammedis` (
  `IDREKAM` int(11) NOT NULL,
  `IDPASIEN` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDREKAM`),
  KEY `FK_DETAIL` (`IDPASIEN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekammedis`
--

INSERT INTO `rekammedis` (`IDREKAM`, `IDPASIEN`) VALUES
(2, 1),
(1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `treatment`
--

CREATE TABLE IF NOT EXISTS `treatment` (
  `IDTREATMENT` int(11) NOT NULL AUTO_INCREMENT,
  `NAMATREATMENT` varchar(144) DEFAULT NULL,
  `KATEGORITREATMENT` varchar(144) DEFAULT NULL,
  PRIMARY KEY (`IDTREATMENT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `treatment`
--

INSERT INTO `treatment` (`IDTREATMENT`, `NAMATREATMENT`, `KATEGORITREATMENT`) VALUES
(1, 'Comedo Peeling', 'Face Treatment'),
(2, 'Full Body Massage', 'Body Treatment');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `IDUSER` varchar(128) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `LEVEL` int(11) DEFAULT NULL,
  `LASTLOGIN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`IDUSER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`IDUSER`, `USERNAME`, `PASSWORD`, `LEVEL`, `LASTLOGIN`) VALUES
('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2015-03-27 13:39:17');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD CONSTRAINT `FK_DETAIL` FOREIGN KEY (`IDPASIEN`) REFERENCES `pasien` (`IDPASIEN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
