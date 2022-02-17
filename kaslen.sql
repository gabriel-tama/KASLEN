-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 06:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaslen`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tipe` int(1) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `user_id`, `tanggal`, `tipe`, `jumlah`, `deskripsi`) VALUES
(1, 7, '2020-09-12', 1, 10000, 'Setor'),
(2, 10, '2018-06-19', 2, 15000, 'Kebutuhan UMKM'),
(3, 14, '2018-05-18', 1, 10000, 'Setor'),
(4, 8, '2019-01-07', 1, 10000, 'Setor'),
(5, 10, '2020-04-21', 1, 10000, 'Setor'),
(6, 8, '2018-08-20', 2, 5000, 'Kebutuhan UMKM'),
(7, 13, '2018-01-11', 1, 10000, 'Setor'),
(8, 12, '2018-06-05', 2, 3000, 'Kebutuhan UMKM'),
(9, 9, '2018-04-26', 2, 2000, 'Kebutuhan UMKM'),
(10, 7, '2020-08-31', 1, 10000, 'Setor'),
(11, 11, '2020-10-01', 1, 10000, 'Setor'),
(12, 17, '2019-06-02', 1, 10000, 'Setor'),
(13, 10, '2017-12-16', 2, 5000, 'Kebutuhan UMKM'),
(14, 9, '2018-01-24', 2, 3000, 'Kebutuhan UMKM'),
(15, 6, '2020-09-20', 1, 10000, 'Setor'),
(16, 13, '2017-12-21', 2, 1000, 'Kebutuhan UMKM'),
(17, 17, '2020-03-23', 1, 10000, 'Setor'),
(18, 11, '2019-09-25', 2, 6000, 'Kebutuhan UMKM'),
(19, 11, '2020-01-22', 1, 10000, 'Setor'),
(20, 8, '2018-08-28', 2, 15000, 'Kebutuhan UMKM'),
(21, 7, '2018-10-19', 1, 10000, 'Setor'),
(22, 22, '2020-09-12', 1, 10000, 'Setor'),
(23, 22, '2021-12-01', 1, 10000, 'Setor'),
(34, 6, '2021-12-01', 1, 10000, 'Setor'),
(35, 6, '2020-06-09', 2, 2000, 'Beli Lampu'),
(36, 6, '2020-06-09', 2, 2000, 'Beli Lampu'),
(37, 22, '2020-01-02', 2, 3000, 'Test'),
(38, 22, '2020-02-04', 2, 1000, 'Beli Jajan'),
(39, 18, '2017-10-23', 1, 10000, 'Setor'),
(40, 9, '2017-09-23', 1, 10000, 'Setor'),
(41, 9, '2017-01-03', 1, 10000, 'Setor'),
(42, 10, '2017-01-13', 1, 10000, 'Setor'),
(43, 14, '2017-01-13', 1, 10000, 'Setor'),
(44, 17, '2021-08-17', 2, 15000, 'Keperluan 17-an'),
(45, 13, '2018-11-11', 1, 10000, 'Setor'),
(46, 19, '2018-10-11', 1, 10000, 'Setor'),
(47, 24, '2021-12-24', 2, 5000, 'Beli Keperluan Toko'),
(48, 26, '2021-12-29', 1, 10000, 'Setor'),
(49, 26, '2021-12-29', 2, 2000, 'Membeli Keperluan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomorhp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `nama`, `alamat`, `nomorhp`) VALUES
(2, 'admin', 'admin', 'admin', 'ADMIN', '085982310'),
(3, 'superuser', '$2y$10$dK6rWt5acVeFj1AMg.hNpeABNTeiYMYDmRb/.t8.xN4uhf/.wDCK2', 'Gabriel', 'Solo', '085219321'),
(4, 'user', '$2y$10$568Kp4e.Yox4Ke5bseS8jeObr5sJf0EXaxzSyXB7qbvqxdFbsdilO', 'abc', 'askdla', '0082183921'),
(5, 'abc', '$2y$10$VcYLaL.lX6mTb.uq8xsup.sB4M/wG/EFhht4Hyp0mjIxPz0uEm8dy', 'abc', 'acb', 'acb'),
(6, 'su', '$2y$10$Cf8GoAz62/1ooLC2TFDaSO1CZnW.Ge8Rj2D4EQTK08KrdKp.HImk.', 'asdsja', ';asljd', 'kasjd'),
(7, '1142DEE3-CD33-E98B-A95F-15A4ACF4B514', 'IUW84MSC0CM', 'Hollee Roberts', '358-5185 Ut St.', '085-264-4497'),
(8, '442B014A-579C-16E9-27E8-51E8306E2C41', 'LFP13WGU6PB', 'Gloria Delacruz', '173-4885 Eget, Road', '085-725-5806'),
(9, 'FE6C37FC-F784-1C28-ED1F-59219899452A', 'CNS23EFO1TF', 'Kerry Adams', '1158 Eget, Ave', '085-941-6512'),
(10, 'B70C52FD-5A15-EC8E-9376-2E295A15C333', 'SAK38GNB4LU', 'Dacey Sexton', '841-2385 Penatibus Ave', '085-973-9662'),
(11, 'A48DE886-E038-4B3E-9135-F9EAEA675C8C', 'JNE26XNT6CB', 'Marcia Lindsay', '361-2965 Libero. Road', '085-516-2782'),
(12, 'B673D8D1-EAE1-4DC4-1128-7365551D9419', 'SGU62WBI6YR', 'Victor Neal', '3383 Egestas Rd.', '085-453-6439'),
(13, 'F17FAB37-8082-C25F-EA49-C4420C09C022', 'JEZ63LWA9OH', 'Thomas Wallace', '399-2618 Dictum St.', '085-524-3182'),
(14, '9976D563-3CEB-E883-2B89-AE18C1DAA4E7', 'DAJ34KIG1SB', 'Charles Vaughn', 'Ap #533-7000 Et Avenue', '085-673-0135'),
(15, '1E52CBB4-4CEA-5871-6503-87CD3B32C692', 'UUT85LLJ4CE', 'Ulric Hester', '2724 Rhoncus Avenue', '085-843-5667'),
(16, '7AC5778D-D7B5-644A-AA5C-C4DA6177C0DA', 'NKS95XCP3RA', 'Maisie Henson', '8823 Nulla Rd.', '085-570-3429'),
(17, 'C55BA1EC-CD4F-E3CA-FC6C-D2AC29BAE17F', 'OSU32AZD5CB', 'Risa Mckay', 'P.O. Box 117, 2809 Diam Av.', '085-225-8104'),
(18, '5784D8A3-33A0-B376-12FD-3A812B89DA0B', 'GLF95MYW7ZC', 'Lev Johns', 'Ap #925-6905 Amet Road', '085-262-0601'),
(19, '53BFB7CA-DA1C-E5DF-E567-B6DE5237E52E', 'SOP63CEC7SX', 'Wyatt Gilbert', '934-4418 Morbi Rd.', '085-574-6684'),
(20, '1B319BEE-2CF0-25BF-B256-A4B3676159CC', 'RGK70NHQ7LL', 'Zeph Carpenter', '896-5517 Non St.', '085-921-6372'),
(21, '8E1EAFC3-30AB-17CA-3B13-99AEE27AC37E', 'PUE11XDF2PC', 'Sophia White', 'Ap #400-4688 Lacinia Road', '085-232-2314'),
(22, 'uii', '$2y$10$AyZdLwuC16dOQ/csRpesm.aQNFpq.L1KpBvvs0jKUNkkoujhI.qGy', 'kaslen', 'UII', '0821421421'),
(23, 'joko', '$2y$10$4bnu.GkV/JAd2RIZ4XSfK.hqTEzjqudN36oiDPZt19O39ckEo0BQG', 'Joko Sujoko', 'Yogyakarta', '085291839218'),
(24, 'jok', '$2y$10$yKMWyB2Ozw.34mhLWz73Oerkgdn3mjyjUTXmTA5Zj0TuwxLW2h6Bq', 'Mas Joko', 'Yogyakarta', '0859218321'),
(25, 'masganteng', '$2y$10$qxB8hDz66nMvdRNWaU5ieeVn40l83oph0eMpHFIlplZ/DO0wEWGjS', 'Gabriel Imam', 'Yogyakarta', '085723910123'),
(26, 'risto', '$2y$10$NpTgU7PGMLtgbltxCEfVmOu5LlyaRlDX83JUbtH9Y2A/vTgm9pKPe', 'Risto Abrar', 'Yogyakarta', '08572198321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
