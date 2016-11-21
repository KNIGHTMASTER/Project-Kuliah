/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : pegadaian

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-11-21 16:40:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `barang`
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `idbarang` varchar(20) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `harga_masuk` bigint(20) DEFAULT NULL,
  `harga_keluar` bigint(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `perpanjang_per_bln` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`idbarang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('00001', 'televisi', '2002-02-20', '2003-01-01', '200000', '250000', '2', '10000');
INSERT INTO `barang` VALUES ('00002', 'kulkas', '2004-09-21', '2004-10-01', '400000', '550000', '1', '10000');
INSERT INTO `barang` VALUES ('00003', 'komputer', '2003-07-10', '2004-07-30', '300000', '350000', '1', '13000');
INSERT INTO `barang` VALUES ('00004', 'magic com', '2000-12-05', '2001-01-02', '75000', '100000', '1', '10000');
INSERT INTO `barang` VALUES ('00005', 'dvd combo box', '2003-04-02', '2004-05-01', '200000', '225000', '1', '12000');
INSERT INTO `barang` VALUES ('00006', 'notebook', '2006-11-15', '2006-12-20', '500000', '550000', '1', '15000');
INSERT INTO `barang` VALUES ('00007', 'vcd player', '2002-10-10', '2005-05-22', '100000', '125000', '1', '7000');
INSERT INTO `barang` VALUES ('00008', 'sepeda motor', '2007-04-21', '2008-10-19', '3000000', '3500000', '1', '50000');
INSERT INTO `barang` VALUES ('00009', 'kalung emas', '2006-01-12', '2006-04-10', '400000', '450000', '1', '10000');
INSERT INTO `barang` VALUES ('00010', 'cincin emas', '2006-01-12', '2006-04-10', '350000', '400000', '1', '10000');

-- ----------------------------
-- Table structure for `employee`
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `idemployee` varchar(20) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  KEY `idemployee` (`idemployee`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('00001', 'angelo', 'texas');
INSERT INTO `employee` VALUES ('00002', 'peter', 'ottawa');
INSERT INTO `employee` VALUES ('00003', 'hendrick', 'los angeles');
INSERT INTO `employee` VALUES ('00004', 'adam jones', 'chernobil');
INSERT INTO `employee` VALUES ('00005', 'shieere', 'michigan');
INSERT INTO `employee` VALUES ('00006', 'john', 'castonia');
INSERT INTO `employee` VALUES ('00007', 'varga', 'merseyside');
INSERT INTO `employee` VALUES ('00008', 'knight', 'antananarivo');
INSERT INTO `employee` VALUES ('00009', 'fabiano', 'barcelona');
INSERT INTO `employee` VALUES ('00010', 'loius', 'rotterdam');

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `nia` varchar(5) DEFAULT NULL,
  `password` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('12345', '12345');

-- ----------------------------
-- Table structure for `nasabah`
-- ----------------------------
DROP TABLE IF EXISTS `nasabah`;
CREATE TABLE `nasabah` (
  `idnasabah` varchar(20) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `no_telp` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idnasabah`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nasabah
-- ----------------------------
INSERT INTO `nasabah` VALUES ('00001', 'rahul', 'new delhi', '091255821');
INSERT INTO `nasabah` VALUES ('00002', 'cvetkov', 'rotterdam', '089274124');
INSERT INTO `nasabah` VALUES ('00003', 'burma', 'teeneside', '097581345');
INSERT INTO `nasabah` VALUES ('00004', 'van den bergh', 'new castle', '0977712333');
INSERT INTO `nasabah` VALUES ('00005', 'van hooijdonk', 'amsterdam', '089688312');
INSERT INTO `nasabah` VALUES ('00006', 'niajin', 'persia', '093434123');
INSERT INTO `nasabah` VALUES ('00007', 'mido', 'kairo', '099587132');
INSERT INTO `nasabah` VALUES ('00008', 'hessam', 'libya', '097571231');
INSERT INTO `nasabah` VALUES ('00009', 'shirmma', 'cyprus', '0873434412');
INSERT INTO `nasabah` VALUES ('00010', 'anthonie', 'madrid', '0623564233');
INSERT INTO `nasabah` VALUES ('00011', 'eleven', 'winning', '094412101');

-- ----------------------------
-- Table structure for `transaksi`
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `idtransaksi` varchar(20) NOT NULL,
  `jenis` varchar(10) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  PRIMARY KEY (`idtransaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi
-- ----------------------------

-- ----------------------------
-- Table structure for `tran_keluar`
-- ----------------------------
DROP TABLE IF EXISTS `tran_keluar`;
CREATE TABLE `tran_keluar` (
  `no_resi` varchar(5) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  PRIMARY KEY (`no_resi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tran_keluar
-- ----------------------------
INSERT INTO `tran_keluar` VALUES ('00001', '1', '1000', '2011-04-08');
INSERT INTO `tran_keluar` VALUES ('00003', '3', '30000', '2011-04-23');
INSERT INTO `tran_keluar` VALUES ('00002', '2', '20000', '2011-04-12');

-- ----------------------------
-- Table structure for `tran_masuk`
-- ----------------------------
DROP TABLE IF EXISTS `tran_masuk`;
CREATE TABLE `tran_masuk` (
  `no_resi` varchar(5) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  PRIMARY KEY (`no_resi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tran_masuk
-- ----------------------------
INSERT INTO `tran_masuk` VALUES ('00001', '1', '20500', '1990-01-01');
INSERT INTO `tran_masuk` VALUES ('00002', '2', '20000', '2011-04-13');
