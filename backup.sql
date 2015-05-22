DROP TABLE IF EXISTS `detailtreatment`;

CREATE TABLE `detailtreatment` (
  `IDDETAILTREATMENT` varchar(255) NOT NULL,
  `IDREKAM` int(11) DEFAULT NULL,
  `TANGGALTREATMENT` date DEFAULT NULL,
  PRIMARY KEY (`IDDETAILTREATMENT`),
  KEY `FK_DIGUNAKAN` (`IDREKAM`),
  CONSTRAINT `FK_DIGUNAKAN` FOREIGN KEY (`IDREKAM`) REFERENCES `rekammedis` (`IDREKAM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `detailtreatment` WRITE;

UNLOCK TABLES;


DROP TABLE IF EXISTS `obat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obat` (
  `IDOBAT` int(11) NOT NULL,
  `KODEOBAT` varchar(144) DEFAULT NULL,
  `NAMAOBAT` varchar(144) DEFAULT NULL,
  `JENIS` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDOBAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `obat` WRITE;
/*!40000 ALTER TABLE `obat` DISABLE KEYS */;
INSERT INTO `obat` VALUES (0,'12345','Cream Whitening Pagi 1','Cream');
/*!40000 ALTER TABLE `obat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasien`
--

DROP TABLE IF EXISTS `pasien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pasien` (
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasien`
--

LOCK TABLES `pasien` WRITE;
/*!40000 ALTER TABLE `pasien` DISABLE KEYS */;
INSERT INTO `pasien` VALUES (1,'Budi Sudarsono','L','Jl. Demak Timur No.21','Surabaya','Jawa Timur','Semarang','1989-02-08','+6285230134241','AF5DDC'),(2,'Ayu Ashari','P','Jl. Keputih Tegal Timur No.44','Surabaya','Jawa Timur','Bojonegoro','1993-04-02','+62908989999',NULL),(3,'Jamal Abdul Naser','L','Jl. Batu Bulan No.76','Malang','Jawa Timur','Soroako','2000-07-13','085732211432',NULL),(4,'Bunga Citra Lestari','P','Jl. Nias No.32','Jakarta','DKI Jakarta','Jakarta','1999-05-17','085731321145',NULL),(5,'Dani Nurwannto','L','Jl. Rangkah Timur No.22','Medan','Sumatera Utara','Medan','2015-03-16','080965443526',NULL),(6,'Bejo Sukipo Ningrat','','Jl. Malioboro No.33','Yogyakarta','Yogyakarta','Sleman','2003-10-29','085230134244',NULL),(7,'','P','','','-','','0000-00-00','',''),(8,'Burhanudin Harahap','L','Jl. Raya Ngambon','Bojonegoro','Jawa Timur','Bojonegoro','1993-04-02','085730134241','57CFD4'),(9,'Siti Munawaroh','P','RT:006/RW:002, Desa. Ngrejeng, Kec. Purwosari','Bojonegoro','Jawa Timur','Bojonegoro','1993-03-18','085730134244','A45C75');
/*!40000 ALTER TABLE `pasien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rekamdetailobat`
--

DROP TABLE IF EXISTS `rekamdetailobat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rekamdetailobat` (
  `IDDETAILTREATMENT` varchar(255) NOT NULL,
  `IDOBAT` int(11) NOT NULL,
  PRIMARY KEY (`IDDETAILTREATMENT`,`IDOBAT`),
  KEY `FK_DIPAKAI2` (`IDOBAT`),
  CONSTRAINT `FK_DIPAKAI1` FOREIGN KEY (`IDDETAILTREATMENT`) REFERENCES `detailtreatment` (`IDDETAILTREATMENT`),
  CONSTRAINT `FK_DIPAKAI2` FOREIGN KEY (`IDOBAT`) REFERENCES `obat` (`IDOBAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rekamdetailobat`
--

LOCK TABLES `rekamdetailobat` WRITE;
/*!40000 ALTER TABLE `rekamdetailobat` DISABLE KEYS */;
/*!40000 ALTER TABLE `rekamdetailobat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rekamdetailtreatment`
--

DROP TABLE IF EXISTS `rekamdetailtreatment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rekamdetailtreatment` (
  `IDDETAILTREATMENT` varchar(255) NOT NULL,
  `IDTREATMENT` int(11) NOT NULL,
  PRIMARY KEY (`IDDETAILTREATMENT`,`IDTREATMENT`),
  KEY `FK_DIPAKAI4` (`IDTREATMENT`),
  CONSTRAINT `FK_DIPAKAI3` FOREIGN KEY (`IDDETAILTREATMENT`) REFERENCES `detailtreatment` (`IDDETAILTREATMENT`),
  CONSTRAINT `FK_DIPAKAI4` FOREIGN KEY (`IDTREATMENT`) REFERENCES `treatment` (`IDTREATMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rekamdetailtreatment`
--

LOCK TABLES `rekamdetailtreatment` WRITE;
/*!40000 ALTER TABLE `rekamdetailtreatment` DISABLE KEYS */;
/*!40000 ALTER TABLE `rekamdetailtreatment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rekammedis`
--

DROP TABLE IF EXISTS `rekammedis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rekammedis` (
  `IDREKAM` int(11) NOT NULL,
  `IDPASIEN` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDREKAM`),
  KEY `FK_DETAIL` (`IDPASIEN`),
  CONSTRAINT `FK_DETAIL` FOREIGN KEY (`IDPASIEN`) REFERENCES `pasien` (`IDPASIEN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rekammedis`
--

LOCK TABLES `rekammedis` WRITE;
/*!40000 ALTER TABLE `rekammedis` DISABLE KEYS */;
/*!40000 ALTER TABLE `rekammedis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `treatment`
--

DROP TABLE IF EXISTS `treatment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `treatment` (
  `IDTREATMENT` int(11) NOT NULL,
  `NAMATREATMENT` varchar(144) DEFAULT NULL,
  `KATEGORITREATMENT` varchar(144) DEFAULT NULL,
  PRIMARY KEY (`IDTREATMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `treatment`
--

LOCK TABLES `treatment` WRITE;
/*!40000 ALTER TABLE `treatment` DISABLE KEYS */;
/*!40000 ALTER TABLE `treatment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `IDUSER` varchar(128) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `LEVEL` int(11) DEFAULT NULL,
  `LASTLOGIN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`IDUSER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('1','admin','21232f297a57a5a743894a0e4a801fc3',1,'2015-03-27 13:39:17');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
