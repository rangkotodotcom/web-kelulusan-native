/*
 Navicat Premium Data Transfer

 Source Server         : MariaDB_Local
 Source Server Type    : MariaDB
 Source Server Version : 100420
 Source Host           : localhost:3306
 Source Schema         : lulus

 Target Server Type    : MariaDB
 Target Server Version : 100420
 File Encoding         : 65001

 Date: 19/11/2022 16:08:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_adm
-- ----------------------------
DROP TABLE IF EXISTS `t_adm`;
CREATE TABLE `t_adm`  (
  `nama` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `komite` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pustaka` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`nama`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_adm
-- ----------------------------
INSERT INTO `t_adm` VALUES ('Inestifani', 'Inestifani-Komite.jpg', 'Inestifani-Pustaka.jpg');

-- ----------------------------
-- Table structure for t_history
-- ----------------------------
DROP TABLE IF EXISTS `t_history`;
CREATE TABLE `t_history`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aktifitas` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `oleh` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 134 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_history
-- ----------------------------
INSERT INTO `t_history` VALUES (1, 'cetak skl', '12-004-070-3', '2019-04-27 10:18:41');
INSERT INTO `t_history` VALUES (2, 'cetak skl', '12-004-070-3', '2019-04-27 10:18:43');
INSERT INTO `t_history` VALUES (3, 'reset pass user Inestifani', 'admin', '2019-05-08 22:52:23');
INSERT INTO `t_history` VALUES (4, 'cetak skl', '12-004-070-3', '2019-05-08 22:56:21');
INSERT INTO `t_history` VALUES (5, 'cetak skl', '12-004-070-3', '2019-05-08 22:56:22');
INSERT INTO `t_history` VALUES (6, 'cetak skl', '12-004-070-3', '2019-05-08 22:57:47');
INSERT INTO `t_history` VALUES (7, 'cetak skl', '12-004-070-3', '2019-05-08 22:57:49');
INSERT INTO `t_history` VALUES (8, 'cetak skl', '12-004-070-3', '2019-05-08 23:01:23');
INSERT INTO `t_history` VALUES (9, 'cetak skl', '12-004-070-3', '2019-05-08 23:01:26');
INSERT INTO `t_history` VALUES (10, 'cetak skl', '12-004-070-3', '2019-05-08 23:02:02');
INSERT INTO `t_history` VALUES (11, 'cetak skl', '12-004-070-3', '2019-05-08 23:02:04');
INSERT INTO `t_history` VALUES (12, 'cetak skl', '12-004-070-3', '2019-05-09 00:55:51');
INSERT INTO `t_history` VALUES (13, 'cetak skl', '12-004-070-3', '2019-05-09 00:55:53');
INSERT INTO `t_history` VALUES (14, 'cetak skl', '12-004-070-3', '2019-05-11 10:17:38');
INSERT INTO `t_history` VALUES (15, 'cetak skl', '12-004-070-3', '2019-05-11 10:18:13');
INSERT INTO `t_history` VALUES (16, 'cetak skl', '12-004-070-3', '2019-05-11 10:18:16');
INSERT INTO `t_history` VALUES (17, 'import nilai rapor siswa', 'admin', '2019-05-11 15:06:27');
INSERT INTO `t_history` VALUES (18, 'import nilai USBN siswa', 'admin', '2019-05-11 15:06:44');
INSERT INTO `t_history` VALUES (19, 'cetak skl', 'admin', '2019-05-11 15:11:20');
INSERT INTO `t_history` VALUES (20, 'cetak skl', 'admin', '2019-05-11 15:11:23');
INSERT INTO `t_history` VALUES (21, 'cetak skl', 'admin', '2019-05-11 15:16:07');
INSERT INTO `t_history` VALUES (22, 'cetak skl', 'admin', '2019-05-11 15:16:10');
INSERT INTO `t_history` VALUES (23, 'cetak skl', 'admin', '2019-05-11 15:20:05');
INSERT INTO `t_history` VALUES (24, 'cetak skl', 'admin', '2019-05-11 15:20:07');
INSERT INTO `t_history` VALUES (25, 'cetak skl', 'admin', '2019-05-11 15:22:17');
INSERT INTO `t_history` VALUES (26, 'cetak skl', 'admin', '2019-05-11 15:22:20');
INSERT INTO `t_history` VALUES (27, 'cetak skl', 'admin', '2019-05-11 15:24:12');
INSERT INTO `t_history` VALUES (28, 'cetak skl', 'admin', '2019-05-11 15:24:15');
INSERT INTO `t_history` VALUES (29, 'cetak skl', 'admin', '2019-05-11 15:25:18');
INSERT INTO `t_history` VALUES (30, 'cetak skl', 'admin', '2019-05-11 15:25:23');
INSERT INTO `t_history` VALUES (31, 'cetak skl', 'admin', '2019-05-11 15:32:26');
INSERT INTO `t_history` VALUES (32, 'cetak skl', 'admin', '2019-05-11 15:32:31');
INSERT INTO `t_history` VALUES (33, 'cetak skl', 'admin', '2019-05-11 15:33:51');
INSERT INTO `t_history` VALUES (34, 'cetak skl', 'admin', '2019-05-11 15:33:52');
INSERT INTO `t_history` VALUES (35, 'cetak skl', 'admin', '2019-05-11 15:36:38');
INSERT INTO `t_history` VALUES (36, 'cetak skl', 'admin', '2019-05-11 15:36:40');
INSERT INTO `t_history` VALUES (37, 'cetak skl', 'admin', '2019-05-11 15:38:37');
INSERT INTO `t_history` VALUES (38, 'cetak skl', 'admin', '2019-05-11 15:38:42');
INSERT INTO `t_history` VALUES (39, 'cetak skl', 'admin', '2019-05-11 15:39:57');
INSERT INTO `t_history` VALUES (40, 'cetak skl', 'admin', '2019-05-11 15:40:02');
INSERT INTO `t_history` VALUES (41, 'cetak skl', 'admin', '2019-05-11 15:41:28');
INSERT INTO `t_history` VALUES (42, 'cetak skl', 'admin', '2019-05-11 15:41:32');
INSERT INTO `t_history` VALUES (43, 'cetak skl', 'admin', '2019-05-11 15:52:07');
INSERT INTO `t_history` VALUES (44, 'cetak skl', 'admin', '2019-05-11 15:52:10');
INSERT INTO `t_history` VALUES (45, 'cetak skl', 'admin', '2019-05-11 15:53:37');
INSERT INTO `t_history` VALUES (46, 'cetak skl', 'admin', '2019-05-11 15:53:43');
INSERT INTO `t_history` VALUES (47, 'cetak skl', 'admin', '2019-05-11 15:55:02');
INSERT INTO `t_history` VALUES (48, 'cetak skl', 'admin', '2019-05-11 15:55:04');
INSERT INTO `t_history` VALUES (49, 'cetak skl', 'admin', '2019-05-11 15:56:23');
INSERT INTO `t_history` VALUES (50, 'cetak skl', 'admin', '2019-05-11 15:56:27');
INSERT INTO `t_history` VALUES (51, 'cetak skl', 'admin', '2019-05-11 15:57:52');
INSERT INTO `t_history` VALUES (52, 'cetak skl', 'admin', '2019-05-11 15:57:56');
INSERT INTO `t_history` VALUES (53, 'cetak skl', 'admin', '2019-05-11 15:59:03');
INSERT INTO `t_history` VALUES (54, 'cetak skl', 'admin', '2019-05-11 15:59:06');
INSERT INTO `t_history` VALUES (55, 'cetak skl', 'admin', '2019-05-12 18:58:05');
INSERT INTO `t_history` VALUES (56, 'cetak skl', 'admin', '2019-05-12 18:58:07');
INSERT INTO `t_history` VALUES (57, 'cetak skl', 'admin', '2019-05-12 19:00:48');
INSERT INTO `t_history` VALUES (58, 'cetak skl', 'admin', '2019-05-12 19:00:51');
INSERT INTO `t_history` VALUES (59, 'cetak skl', 'admin', '2019-05-12 19:04:08');
INSERT INTO `t_history` VALUES (60, 'cetak skl', 'admin', '2019-05-12 19:04:09');
INSERT INTO `t_history` VALUES (61, 'cetak skl', 'admin', '2019-05-12 19:05:23');
INSERT INTO `t_history` VALUES (62, 'cetak skl', 'admin', '2019-05-12 19:05:24');
INSERT INTO `t_history` VALUES (63, 'cetak skl', 'admin', '2019-05-12 19:06:46');
INSERT INTO `t_history` VALUES (64, 'cetak skl', 'admin', '2019-05-12 19:06:47');
INSERT INTO `t_history` VALUES (65, 'cetak skl', 'admin', '2019-05-12 19:07:43');
INSERT INTO `t_history` VALUES (66, 'cetak skl', 'admin', '2019-05-12 19:07:44');
INSERT INTO `t_history` VALUES (67, 'cetak skl', 'admin', '2019-05-12 19:14:21');
INSERT INTO `t_history` VALUES (68, 'cetak skl', 'admin', '2019-05-12 19:14:24');
INSERT INTO `t_history` VALUES (69, 'cetak skl', 'admin', '2019-05-12 19:15:38');
INSERT INTO `t_history` VALUES (70, 'cetak skl', 'admin', '2019-05-12 19:15:39');
INSERT INTO `t_history` VALUES (71, 'cetak user', 'admin', '2019-05-12 21:17:08');
INSERT INTO `t_history` VALUES (72, 'cetak user', 'admin', '2019-05-12 21:17:10');
INSERT INTO `t_history` VALUES (73, 'cetak user', 'admin', '2019-05-12 21:19:02');
INSERT INTO `t_history` VALUES (74, 'cetak user', 'admin', '2019-05-12 21:19:04');
INSERT INTO `t_history` VALUES (75, 'cetak user', 'admin', '2019-05-12 21:21:17');
INSERT INTO `t_history` VALUES (76, 'cetak user', 'admin', '2019-05-12 21:21:19');
INSERT INTO `t_history` VALUES (77, 'cetak user', 'admin', '2019-05-12 21:22:37');
INSERT INTO `t_history` VALUES (78, 'cetak user', 'admin', '2019-05-12 21:22:38');
INSERT INTO `t_history` VALUES (79, 'cetak user', 'admin', '2019-05-12 21:23:40');
INSERT INTO `t_history` VALUES (80, 'cetak user', 'admin', '2019-05-12 21:23:41');
INSERT INTO `t_history` VALUES (81, 'cetak user', 'admin', '2019-05-12 21:26:09');
INSERT INTO `t_history` VALUES (82, 'cetak user', 'admin', '2019-05-12 21:26:11');
INSERT INTO `t_history` VALUES (83, 'cetak user', 'admin', '2019-05-12 21:29:56');
INSERT INTO `t_history` VALUES (84, 'cetak user', 'admin', '2019-05-12 21:29:57');
INSERT INTO `t_history` VALUES (85, 'cetak user', 'admin', '2019-05-12 21:31:57');
INSERT INTO `t_history` VALUES (86, 'cetak user', 'admin', '2019-05-12 21:31:58');
INSERT INTO `t_history` VALUES (87, 'cetak user', 'admin', '2019-05-12 21:33:01');
INSERT INTO `t_history` VALUES (88, 'cetak user', 'admin', '2019-05-12 21:33:02');
INSERT INTO `t_history` VALUES (89, 'cetak user', 'admin', '2019-05-12 21:34:39');
INSERT INTO `t_history` VALUES (90, 'cetak user', 'admin', '2019-05-12 21:34:40');
INSERT INTO `t_history` VALUES (91, 'cetak user', 'admin', '2019-05-12 21:38:33');
INSERT INTO `t_history` VALUES (92, 'cetak user', 'admin', '2019-05-12 21:38:34');
INSERT INTO `t_history` VALUES (93, 'cetak user', 'admin', '2019-05-12 21:40:51');
INSERT INTO `t_history` VALUES (94, 'cetak user', 'admin', '2019-05-12 21:40:53');
INSERT INTO `t_history` VALUES (95, 'cetak user', 'admin', '2019-05-12 21:42:29');
INSERT INTO `t_history` VALUES (96, 'cetak user', 'admin', '2019-05-12 21:42:31');
INSERT INTO `t_history` VALUES (97, 'cetak user', 'admin', '2019-05-12 21:44:16');
INSERT INTO `t_history` VALUES (98, 'cetak user', 'admin', '2019-05-12 21:44:17');
INSERT INTO `t_history` VALUES (99, 'cetak user', 'admin', '2019-05-12 21:45:46');
INSERT INTO `t_history` VALUES (100, 'cetak user', 'admin', '2019-05-12 21:45:47');
INSERT INTO `t_history` VALUES (101, 'cetak user', 'admin', '2019-05-12 21:48:32');
INSERT INTO `t_history` VALUES (102, 'cetak user', 'admin', '2019-05-12 21:48:33');
INSERT INTO `t_history` VALUES (103, 'cetak user', 'admin', '2019-05-12 21:53:05');
INSERT INTO `t_history` VALUES (104, 'cetak user', 'admin', '2019-05-12 21:53:06');
INSERT INTO `t_history` VALUES (105, 'cetak user', 'admin', '2019-05-12 21:57:01');
INSERT INTO `t_history` VALUES (106, 'cetak user', 'admin', '2019-05-12 21:57:03');
INSERT INTO `t_history` VALUES (107, 'cetak user', 'admin', '2019-05-12 21:58:55');
INSERT INTO `t_history` VALUES (108, 'cetak user', 'admin', '2019-05-12 21:58:57');
INSERT INTO `t_history` VALUES (109, 'cetak user', 'admin', '2019-05-12 22:08:01');
INSERT INTO `t_history` VALUES (110, 'cetak user', 'admin', '2019-05-12 22:08:02');
INSERT INTO `t_history` VALUES (111, 'cetak user', 'admin', '2019-05-12 22:09:49');
INSERT INTO `t_history` VALUES (112, 'cetak user', 'admin', '2019-05-12 22:09:50');
INSERT INTO `t_history` VALUES (113, 'cetak user', 'admin', '2019-05-12 22:14:52');
INSERT INTO `t_history` VALUES (114, 'cetak user', 'admin', '2019-05-12 22:14:52');
INSERT INTO `t_history` VALUES (115, 'cetak user', 'admin', '2019-05-12 22:16:15');
INSERT INTO `t_history` VALUES (116, 'cetak user', 'admin', '2019-05-12 22:16:16');
INSERT INTO `t_history` VALUES (117, 'cetak user', 'admin', '2019-05-12 22:17:33');
INSERT INTO `t_history` VALUES (118, 'cetak user', 'admin', '2019-05-12 22:17:34');
INSERT INTO `t_history` VALUES (119, 'cetak user', 'admin', '2019-05-12 22:24:56');
INSERT INTO `t_history` VALUES (120, 'cetak user', 'admin', '2019-05-12 22:24:57');
INSERT INTO `t_history` VALUES (121, 'cetak user', 'admin', '2019-05-12 22:25:37');
INSERT INTO `t_history` VALUES (122, 'cetak user', 'admin', '2019-05-12 22:25:38');
INSERT INTO `t_history` VALUES (123, 'cetak user', 'admin', '2019-05-12 22:26:04');
INSERT INTO `t_history` VALUES (124, 'cetak user', 'admin', '2019-05-12 22:26:06');
INSERT INTO `t_history` VALUES (125, 'cetak user', 'admin', '2019-05-12 22:28:30');
INSERT INTO `t_history` VALUES (126, 'cetak user', 'admin', '2019-05-12 22:28:32');
INSERT INTO `t_history` VALUES (127, 'tambah user Siswa', 'admin', '2019-05-13 14:46:31');
INSERT INTO `t_history` VALUES (128, 'aktif user Alya Nuraini', 'Bgj4m', '2020-06-30 17:58:45');
INSERT INTO `t_history` VALUES (129, 'non-aktif user Alya Nuraini', 'Bgj4m', '2020-06-30 17:58:49');
INSERT INTO `t_history` VALUES (130, 'hapus user Siswa', 'Bgj4m', '2020-06-30 17:59:02');
INSERT INTO `t_history` VALUES (131, 'reset pass user Inestifani', 'Bgj4m', '2020-06-30 18:00:08');
INSERT INTO `t_history` VALUES (132, 'reset pass user Inestifani', 'admin', '2021-03-04 20:25:44');
INSERT INTO `t_history` VALUES (133, 'non-aktif user Inestifani', 'admin', '2021-03-04 20:25:52');

-- ----------------------------
-- Table structure for t_izin_login
-- ----------------------------
DROP TABLE IF EXISTS `t_izin_login`;
CREATE TABLE `t_izin_login`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `akses` enum('buka','tutup') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `awal` enum('login','timer','maintenance') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `waktu_mundur` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_izin_login
-- ----------------------------
INSERT INTO `t_izin_login` VALUES (1, 'buka', 'login', '2019-05-04 17:00:00');

-- ----------------------------
-- Table structure for t_ld_siswa
-- ----------------------------
DROP TABLE IF EXISTS `t_ld_siswa`;
CREATE TABLE `t_ld_siswa`  (
  `nama` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `t_lahir` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_lhr` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `n_ortu` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nis` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nisn` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_pes` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jurusan` enum('A','S') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`no_pes`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_ld_siswa
-- ----------------------------
INSERT INTO `t_ld_siswa` VALUES ('ALYA NURAINI', 'Jakarta', '10 Mei 2000', 'Abdul Kadir', '35034', '0005015870', '12-004-002-7', 'A', 'lia.jpg');
INSERT INTO `t_ld_siswa` VALUES ('RISKE DASVIANITA', 'Kepala Hilalang', '30 November 1999', 'Dasrizal', '35173', '9996471928', '12-004-040-9', '', 'keke.jpg');
INSERT INTO `t_ld_siswa` VALUES ('INESTIFANI', 'Padang Panjang', '19 Juli 2000', 'Harmendani', '35040', '0005233277', '12-004-070-3', '', 'ines.jpg');

-- ----------------------------
-- Table structure for t_linfo
-- ----------------------------
DROP TABLE IF EXISTS `t_linfo`;
CREATE TABLE `t_linfo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subjek` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `info` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_linfo
-- ----------------------------
INSERT INTO `t_linfo` VALUES (1, 'Cara Melihat Kelulusan', '<p>1. Setelah login dengan user yang di dapat dari admin<br />\r\n2. Silahkan lihat kelulusan pada menu hasil<br />\r\n3. Silahkan cek data diri, apabila ada kesalahan harap hubungi admin<br />\r\n4. Silahkan cetak surat kelulusan pada menu nilai un<br />\r\n5. Syarat dalam mencetak surat kelulusan adalah mengupload kartu registrasi adm dari tatausaha dan kartu bebas pustaka pada menu administrasi<br />\r\n6. Semoga Sukses</p>\r\n', '2018-12-06 18:38:06');
INSERT INTO `t_linfo` VALUES (2, 'Penting', '<p>Biasakan logout setelah login, <strong>jangan</strong> lansung close browser karena akan membuat user anda akan bermasalah serta mengakibatkan user siswa yang lain kesulitan untuk login.<br />\r\nBagi User yang bermasalah, Silahkan hubungi Admin</p>\r\n', '2018-12-23 16:10:01');

-- ----------------------------
-- Table structure for t_linfo_a
-- ----------------------------
DROP TABLE IF EXISTS `t_linfo_a`;
CREATE TABLE `t_linfo_a`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subjek` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `info` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_linfo_a
-- ----------------------------
INSERT INTO `t_linfo_a` VALUES (1, 'Panduan Bagi Admin', '<ol>\r\n	<li>Silahkan Masukan data dan nilai siswa dengan benar</li>\r\n	<li>Sebelum memasukan data siswa, harap periksa terlebih dahulu agar tidak salah</li>\r\n	<li>No peserta pada data dan nilai siswa jangan sampai berbeda dengan user siswa</li>\r\n	<li>Sebelum mengimport data dan nilai serta user siswa, silahkan centang form kosongkan data agar tidak ada data ganda</li>\r\n	<li>Dalam mengupload foto siswa, Maksimal Hanya 20 file</li>\r\n	<li>Jika ada kesalahan data atau nilai siswa,silahkan di edit lansung. sedangkan jika ada kesalahan user siswa,hapus user tersebut lalu tambahkan kembali</li>\r\n	<li>Jika ada siswa yang lupa password, silahkan klik reset password pada menu data user dan tombol ON atau OFF untuk mengaktif dan non aktifkan user siswa</li>\r\n	<li>Sebelum mengaktikan user siswa, silahkan cek terlebih dahulu persyaratan yang di upload siswa pada menu bukti adm</li>\r\n	<li>Admin dapat melihat seluruh kritik dan saran dari siswa pada menu kotak saran</li>\r\n</ol>\r\n', '2018-12-06 11:37:08');

-- ----------------------------
-- Table structure for t_ln_siswa
-- ----------------------------
DROP TABLE IF EXISTS `t_ln_siswa`;
CREATE TABLE `t_ln_siswa`  (
  `nama` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_pes` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bin` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bing` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mat` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pil` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mapel_pil` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ket` enum('LULUS','TIDAK LULUS') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`nama`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_ln_siswa
-- ----------------------------
INSERT INTO `t_ln_siswa` VALUES ('ALYA NURAINI', '12-004-002-7', '76.00', '74.00', '35.00', '60.00', 'Biologi', 'LULUS');
INSERT INTO `t_ln_siswa` VALUES ('INESTIFANI', '12-004-070-3', '76.00', '76.00', '37.50', '62.50', 'Fisika', 'LULUS');
INSERT INTO `t_ln_siswa` VALUES ('RISKE DASVIANITA', '12-004-040-9', '74.00', '78.00', '35.00', '57.50', 'Kimia', 'LULUS');

-- ----------------------------
-- Table structure for t_luser
-- ----------------------------
DROP TABLE IF EXISTS `t_luser`;
CREATE TABLE `t_luser`  (
  `nama` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pass` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` enum('aktif','non-aktif') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` enum('admin','siswa') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ganti` enum('sudah','belum') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`nama`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_luser
-- ----------------------------
INSERT INTO `t_luser` VALUES ('Admin', 'admin', '$2y$10$FeRNuKKnWqrgT7j2iUMUZesxKgqL99l0RIXfzmOZIxoIoVB8A8D8O', 'aktif', 'admin', 'sudah');
INSERT INTO `t_luser` VALUES ('Alya Nuraini', '12-004-002-7', 'beQEbUjv', 'non-aktif', 'siswa', 'belum');
INSERT INTO `t_luser` VALUES ('Inestifani', '12-004-070-3', 'otE2ShZY', 'non-aktif', 'siswa', 'belum');
INSERT INTO `t_luser` VALUES ('Riske Dasvianita', '12-004-040-9', 'eIzQUYj3', 'non-aktif', 'siswa', 'belum');

-- ----------------------------
-- Table structure for t_n_rapor
-- ----------------------------
DROP TABLE IF EXISTS `t_n_rapor`;
CREATE TABLE `t_n_rapor`  (
  `nama` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_pes` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pai` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ppkn` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ind` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mtk` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sejind` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ing` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `senbud` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pjok` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pkwu` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mat_sej` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fis_eko` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kim_sos` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bio_geo` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lm` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_n_rapor
-- ----------------------------
INSERT INTO `t_n_rapor` VALUES ('ALYA NURAINI', '12-004-002-7', '78.00', '79.00', '80.00', '81.00', '82.00', '83.00', '84.00', '85.00', '86.00', '87.00', '88.00', '89.00', '90.00', '91.00');
INSERT INTO `t_n_rapor` VALUES ('INESTIFANI', '12-004-070-3', '78.01', '79.01', '80.01', '81.01', '82.01', '83.01', '84.01', '85.01', '86.01', '87.01', '88.01', '89.01', '90.01', '91.01');
INSERT INTO `t_n_rapor` VALUES ('RISKE DASVIANITA', '12-004-040-9', '78.02', '79.02', '80.02', '81.02', '82.02', '83.02', '84.02', '85.02', '86.02', '87.02', '88.02', '89.02', '90.02', '91.02');

-- ----------------------------
-- Table structure for t_n_sekolah
-- ----------------------------
DROP TABLE IF EXISTS `t_n_sekolah`;
CREATE TABLE `t_n_sekolah`  (
  `nama` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_pes` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pai` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ppkn` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ind` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mtk` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sejind` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ing` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `senbud` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pjok` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pkwu` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mat_sej` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fis_eko` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kim_sos` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bio_geo` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lm` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_n_sekolah
-- ----------------------------
INSERT INTO `t_n_sekolah` VALUES ('ALYA NURAINI', '12-004-002-7', '78.00', '79.00', '80.00', '81.00', '82.00', '83.00', '84.00', '85.00', '86.00', '87.00', '88.00', '89.00', '90.00', '91.00');
INSERT INTO `t_n_sekolah` VALUES ('INESTIFANI', '12-004-070-3', '78.01', '79.01', '80.01', '81.01', '82.01', '83.01', '84.01', '85.01', '86.01', '87.01', '88.01', '89.01', '90.01', '91.01');
INSERT INTO `t_n_sekolah` VALUES ('RISKE DASVIANITA', '12-004-040-9', '78.02', '79.02', '80.02', '81.02', '82.02', '83.02', '84.02', '85.02', '86.02', '87.02', '88.02', '89.02', '90.02', '91.02');

-- ----------------------------
-- Table structure for t_online
-- ----------------------------
DROP TABLE IF EXISTS `t_online`;
CREATE TABLE `t_online`  (
  `nama` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` enum('admin','siswa') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `online` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `login` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_online
-- ----------------------------

-- ----------------------------
-- Table structure for t_pesan
-- ----------------------------
DROP TABLE IF EXISTS `t_pesan`;
CREATE TABLE `t_pesan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `penerima` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kirim` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `baca` enum('belum','sudah') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_pesan
-- ----------------------------
INSERT INTO `t_pesan` VALUES (1, 'Inestifani', 'Admin', 'pesan 1', '2019-01-31 15:48:05', 'belum');
INSERT INTO `t_pesan` VALUES (2, 'Inestifani', 'Admin', 'pesan ke 2', '2019-01-31 15:48:14', 'belum');
INSERT INTO `t_pesan` VALUES (3, 'Alya Nuraini', 'Admin', 'pesan 1', '2019-01-31 16:49:38', 'belum');
INSERT INTO `t_pesan` VALUES (4, 'Alya Nuraini', 'Admin', 'pesan 2', '2019-01-31 16:49:48', 'belum');
INSERT INTO `t_pesan` VALUES (5, 'Inestifani', 'Admin', 'Pesan 3', '2019-01-31 16:42:35', 'belum');
INSERT INTO `t_pesan` VALUES (6, 'Admin', 'Inestifani', '<p>kirim pesan</p>\r\n', '2019-02-01 18:56:36', 'belum');
INSERT INTO `t_pesan` VALUES (7, 'Inestifani', 'Admin', '<p>balas lagi</p>\r\n', '2019-02-01 18:54:28', 'belum');

-- ----------------------------
-- Table structure for t_saran
-- ----------------------------
DROP TABLE IF EXISTS `t_saran`;
CREATE TABLE `t_saran`  (
  `nama` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kritik` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `saran` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `t_kirim` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`nama`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_saran
-- ----------------------------
INSERT INTO `t_saran` VALUES ('Inestifani', 'ini kritik saya yang saya sampaikan untuk admin bahwa saya mengkritik dengan baik dan benar', 'ini saran saya yang saya sampaikan untuk admin bahwa saya menyarankan dengan baik dan benar', '2018-08-24 11:14:14');

SET FOREIGN_KEY_CHECKS = 1;
