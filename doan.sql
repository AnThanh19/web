-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2021 lúc 03:51 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthd`
--

CREATE TABLE `cthd` (
  `MASP` int(10) NOT NULL,
  `SOHD` int(10) NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `THANHTIEN` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cthd`
--

INSERT INTO `cthd` (`MASP`, `SOHD`, `SOLUONG`, `THANHTIEN`) VALUES
(1, 78, 1, 35000),
(1, 99, 1, 30000),
(1, 101, 1, 30000),
(2, 100, 1, 40000),
(2, 102, 1, 40000),
(2, 103, 1, 40000),
(3, 99, 1, 20000),
(3, 100, 2, 40000),
(3, 101, 1, 20000),
(3, 102, 1, 20000),
(3, 103, 2, 40000),
(4, 78, 1, 25000),
(5, 101, 1, 20000),
(5, 102, 1, 20000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe`
--

CREATE TABLE `ghe` (
  `MAGHE` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `PHONG` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `LOAIGHE` int(11) NOT NULL,
  `GIA` double NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ghe`
--

INSERT INTO `ghe` (`MAGHE`, `PHONG`, `LOAIGHE`, `GIA`, `stt`) VALUES
('0', '1', 1, 0, 0),
('0', '2', 1, 0, 0),
('0', '3', 1, 0, 0),
('0', '4', 1, 0, 0),
('0', '5', 1, 0, 0),
('A1', '1', 1, 45000, 1),
('A1', '2', 1, 45000, 1),
('A1', '3', 1, 45000, 1),
('A1', '4', 1, 45000, 1),
('A1', '5', 1, 45000, 1),
('A10', '1', 1, 45000, 10),
('A10', '2', 1, 45000, 10),
('A10', '3', 1, 45000, 10),
('A10', '4', 1, 45000, 10),
('A10', '5', 1, 45000, 10),
('A2', '1', 1, 45000, 2),
('A2', '2', 1, 45000, 2),
('A2', '3', 1, 45000, 2),
('A2', '4', 1, 45000, 2),
('A2', '5', 1, 45000, 2),
('A3', '1', 1, 45000, 3),
('A3', '2', 1, 45000, 3),
('A3', '3', 1, 45000, 3),
('A3', '4', 1, 45000, 3),
('A3', '5', 1, 45000, 3),
('A4', '1', 1, 45000, 4),
('A4', '2', 1, 45000, 4),
('A4', '3', 1, 45000, 4),
('A4', '4', 1, 45000, 4),
('A4', '5', 1, 45000, 4),
('A5', '1', 1, 45000, 5),
('A5', '2', 1, 45000, 5),
('A5', '3', 1, 45000, 5),
('A5', '4', 1, 45000, 5),
('A5', '5', 1, 45000, 5),
('A6', '1', 1, 45000, 6),
('A6', '2', 1, 45000, 6),
('A6', '3', 1, 45000, 6),
('A6', '4', 1, 45000, 6),
('A6', '5', 1, 45000, 6),
('A7', '1', 1, 45000, 7),
('A7', '2', 1, 45000, 7),
('A7', '3', 1, 45000, 7),
('A7', '4', 1, 45000, 7),
('A7', '5', 1, 45000, 7),
('A8', '1', 1, 45000, 8),
('A8', '2', 1, 45000, 8),
('A8', '3', 1, 45000, 8),
('A8', '4', 1, 45000, 8),
('A8', '5', 1, 45000, 8),
('A9', '1', 1, 45000, 9),
('A9', '2', 1, 45000, 9),
('A9', '3', 1, 45000, 9),
('A9', '4', 1, 45000, 9),
('A9', '5', 1, 45000, 9),
('B1', '1', 1, 45000, 11),
('B1', '2', 1, 45000, 11),
('B1', '3', 1, 45000, 11),
('B1', '4', 1, 45000, 11),
('B1', '5', 1, 45000, 11),
('B10', '1', 1, 45000, 20),
('B10', '2', 1, 45000, 20),
('B10', '3', 1, 45000, 20),
('B10', '4', 1, 45000, 20),
('B10', '5', 1, 45000, 20),
('B2', '1', 1, 45000, 12),
('B2', '2', 1, 45000, 12),
('B2', '3', 1, 45000, 12),
('B2', '4', 1, 45000, 12),
('B2', '5', 1, 45000, 12),
('B3', '1', 1, 45000, 13),
('B3', '2', 1, 45000, 13),
('B3', '3', 1, 45000, 13),
('B3', '4', 1, 45000, 13),
('B3', '5', 1, 45000, 13),
('B4', '1', 1, 45000, 14),
('B4', '2', 1, 45000, 14),
('B4', '3', 1, 45000, 14),
('B4', '4', 1, 45000, 14),
('B4', '5', 1, 45000, 14),
('B5', '1', 1, 45000, 15),
('B5', '2', 1, 45000, 15),
('B5', '3', 1, 45000, 15),
('B5', '4', 1, 45000, 15),
('B5', '5', 1, 45000, 15),
('B6', '1', 1, 45000, 16),
('B6', '2', 1, 45000, 16),
('B6', '3', 1, 45000, 16),
('B6', '4', 1, 45000, 16),
('B6', '5', 1, 45000, 16),
('B7', '1', 1, 45000, 17),
('B7', '2', 1, 45000, 17),
('B7', '3', 1, 45000, 17),
('B7', '4', 1, 45000, 17),
('B7', '5', 1, 45000, 17),
('B8', '1', 1, 45000, 18),
('B8', '2', 1, 45000, 18),
('B8', '3', 1, 45000, 18),
('B8', '4', 1, 45000, 18),
('B8', '5', 1, 45000, 18),
('B9', '1', 1, 45000, 19),
('B9', '2', 1, 45000, 19),
('B9', '3', 1, 45000, 19),
('B9', '4', 1, 45000, 19),
('B9', '5', 1, 45000, 19),
('C1', '1', 1, 45000, 21),
('C1', '2', 1, 45000, 21),
('C1', '3', 1, 45000, 21),
('C1', '4', 1, 45000, 21),
('C1', '5', 1, 45000, 21),
('C10', '1', 1, 45000, 30),
('C10', '2', 1, 45000, 30),
('C10', '3', 1, 45000, 30),
('C10', '4', 1, 45000, 30),
('C10', '5', 1, 45000, 30),
('C2', '1', 1, 45000, 22),
('C2', '2', 1, 45000, 22),
('C2', '3', 1, 45000, 22),
('C2', '4', 1, 45000, 22),
('C2', '5', 1, 45000, 22),
('C3', '1', 1, 45000, 23),
('C3', '2', 1, 45000, 23),
('C3', '3', 1, 45000, 23),
('C3', '4', 1, 45000, 23),
('C3', '5', 1, 45000, 23),
('C4', '1', 1, 45000, 24),
('C4', '2', 1, 45000, 24),
('C4', '3', 1, 45000, 24),
('C4', '4', 1, 45000, 24),
('C4', '5', 1, 45000, 24),
('C5', '1', 1, 45000, 25),
('C5', '2', 1, 45000, 25),
('C5', '3', 1, 45000, 25),
('C5', '4', 1, 45000, 25),
('C5', '5', 1, 45000, 25),
('C6', '1', 1, 45000, 26),
('C6', '2', 1, 45000, 26),
('C6', '3', 1, 45000, 26),
('C6', '4', 1, 45000, 26),
('C6', '5', 1, 45000, 26),
('C7', '1', 1, 45000, 27),
('C7', '2', 1, 45000, 27),
('C7', '3', 1, 45000, 27),
('C7', '4', 1, 45000, 27),
('C7', '5', 1, 45000, 27),
('C8', '1', 1, 45000, 28),
('C8', '2', 1, 45000, 28),
('C8', '3', 1, 45000, 28),
('C8', '4', 1, 45000, 28),
('C8', '5', 1, 45000, 28),
('C9', '1', 1, 45000, 29),
('C9', '2', 1, 45000, 29),
('C9', '3', 1, 45000, 29),
('C9', '4', 1, 45000, 29),
('C9', '5', 1, 45000, 29),
('D1', '1', 1, 45000, 31),
('D1', '2', 1, 45000, 31),
('D1', '3', 1, 45000, 31),
('D1', '4', 1, 45000, 31),
('D1', '5', 1, 45000, 31),
('D10', '1', 1, 45000, 40),
('D10', '2', 1, 45000, 40),
('D10', '3', 1, 45000, 40),
('D10', '4', 1, 45000, 40),
('D10', '5', 1, 45000, 40),
('D2', '1', 1, 45000, 32),
('D2', '2', 1, 45000, 32),
('D2', '3', 1, 45000, 32),
('D2', '4', 1, 45000, 32),
('D2', '5', 1, 45000, 32),
('D3', '1', 1, 45000, 33),
('D3', '2', 1, 45000, 33),
('D3', '3', 1, 45000, 33),
('D3', '4', 1, 45000, 33),
('D3', '5', 1, 45000, 33),
('D4', '1', 1, 45000, 34),
('D4', '2', 1, 45000, 34),
('D4', '3', 1, 45000, 34),
('D4', '4', 1, 45000, 34),
('D4', '5', 1, 45000, 34),
('D5', '1', 1, 45000, 35),
('D5', '2', 1, 45000, 35),
('D5', '3', 1, 45000, 35),
('D5', '4', 1, 45000, 35),
('D5', '5', 1, 45000, 35),
('D6', '1', 1, 45000, 36),
('D6', '2', 1, 45000, 36),
('D6', '3', 1, 45000, 36),
('D6', '4', 1, 45000, 36),
('D6', '5', 1, 45000, 36),
('D7', '1', 1, 45000, 37),
('D7', '2', 1, 45000, 37),
('D7', '3', 1, 45000, 37),
('D7', '4', 1, 45000, 37),
('D7', '5', 1, 45000, 37),
('D8', '1', 1, 45000, 38),
('D8', '2', 1, 45000, 38),
('D8', '3', 1, 45000, 38),
('D8', '4', 1, 45000, 38),
('D8', '5', 1, 45000, 38),
('D9', '1', 1, 45000, 39),
('D9', '2', 1, 45000, 39),
('D9', '3', 1, 45000, 39),
('D9', '4', 1, 45000, 39),
('D9', '5', 1, 45000, 39),
('E1', '1', 1, 45000, 41),
('E1', '2', 1, 45000, 41),
('E1', '3', 1, 45000, 41),
('E1', '4', 1, 45000, 41),
('E1', '5', 1, 45000, 41),
('E10', '1', 1, 45000, 50),
('E10', '2', 1, 45000, 50),
('E10', '3', 1, 45000, 50),
('E10', '4', 1, 45000, 50),
('E10', '5', 1, 45000, 50),
('E2', '1', 1, 45000, 42),
('E2', '2', 1, 45000, 42),
('E2', '3', 1, 45000, 42),
('E2', '4', 1, 45000, 42),
('E2', '5', 1, 45000, 42),
('E3', '1', 1, 45000, 43),
('E3', '2', 1, 45000, 43),
('E3', '3', 1, 45000, 43),
('E3', '4', 1, 45000, 43),
('E3', '5', 1, 45000, 43),
('E4', '1', 1, 45000, 44),
('E4', '2', 1, 45000, 44),
('E4', '3', 1, 45000, 44),
('E4', '4', 1, 45000, 44),
('E4', '5', 1, 45000, 44),
('E5', '1', 1, 45000, 45),
('E5', '2', 1, 45000, 45),
('E5', '3', 1, 45000, 45),
('E5', '4', 1, 45000, 45),
('E5', '5', 1, 45000, 45),
('E6', '1', 1, 45000, 46),
('E6', '2', 1, 45000, 46),
('E6', '3', 1, 45000, 46),
('E6', '4', 1, 45000, 46),
('E6', '5', 1, 45000, 46),
('E7', '1', 1, 45000, 47),
('E7', '2', 1, 45000, 47),
('E7', '3', 1, 45000, 47),
('E7', '4', 1, 45000, 47),
('E7', '5', 1, 45000, 47),
('E8', '1', 1, 45000, 48),
('E8', '2', 1, 45000, 48),
('E8', '3', 1, 45000, 48),
('E8', '4', 1, 45000, 48),
('E8', '5', 1, 45000, 48),
('E9', '1', 1, 45000, 49),
('E9', '2', 1, 45000, 49),
('E9', '3', 1, 45000, 49),
('E9', '4', 1, 45000, 49),
('E9', '5', 1, 45000, 49),
('F1', '1', 1, 45000, 51),
('F1', '2', 1, 45000, 51),
('F1', '3', 1, 45000, 51),
('F1', '4', 1, 45000, 51),
('F1', '5', 1, 45000, 51),
('F10', '1', 1, 45000, 60),
('F10', '2', 1, 45000, 60),
('F10', '3', 1, 45000, 60),
('F10', '4', 1, 45000, 60),
('F10', '5', 1, 45000, 60),
('F2', '1', 1, 45000, 52),
('F2', '2', 1, 45000, 52),
('F2', '3', 1, 45000, 52),
('F2', '4', 1, 45000, 52),
('F2', '5', 1, 45000, 52),
('F3', '1', 1, 45000, 53),
('F3', '2', 1, 45000, 53),
('F3', '3', 1, 45000, 53),
('F3', '4', 1, 45000, 53),
('F3', '5', 1, 45000, 53),
('F4', '1', 1, 45000, 54),
('F4', '2', 1, 45000, 54),
('F4', '3', 1, 45000, 54),
('F4', '4', 1, 45000, 54),
('F4', '5', 1, 45000, 54),
('F5', '1', 1, 45000, 55),
('F5', '2', 1, 45000, 55),
('F5', '3', 1, 45000, 55),
('F5', '4', 1, 45000, 55),
('F5', '5', 1, 45000, 55),
('F6', '1', 1, 45000, 56),
('F6', '2', 1, 45000, 56),
('F6', '3', 1, 45000, 56),
('F6', '4', 1, 45000, 56),
('F6', '5', 1, 45000, 56),
('F7', '1', 1, 45000, 57),
('F7', '2', 1, 45000, 57),
('F7', '3', 1, 45000, 57),
('F7', '4', 1, 45000, 57),
('F7', '5', 1, 45000, 57),
('F8', '1', 1, 45000, 58),
('F8', '2', 1, 45000, 58),
('F8', '3', 1, 45000, 58),
('F8', '4', 1, 45000, 58),
('F8', '5', 1, 45000, 58),
('F9', '1', 1, 45000, 59),
('F9', '2', 1, 45000, 59),
('F9', '3', 1, 45000, 59),
('F9', '4', 1, 45000, 59),
('F9', '5', 1, 45000, 59),
('G1', '1', 1, 45000, 61),
('G1', '2', 1, 45000, 61),
('G1', '3', 1, 45000, 61),
('G1', '4', 1, 45000, 61),
('G1', '5', 1, 45000, 61),
('G10', '1', 1, 45000, 70),
('G10', '2', 1, 45000, 70),
('G10', '3', 1, 45000, 70),
('G10', '4', 1, 45000, 70),
('G10', '5', 1, 45000, 70),
('G2', '1', 1, 45000, 62),
('G2', '2', 1, 45000, 62),
('G2', '3', 1, 45000, 62),
('G2', '4', 1, 45000, 62),
('G2', '5', 1, 45000, 62),
('G3', '1', 1, 45000, 63),
('G3', '2', 1, 45000, 63),
('G3', '3', 1, 45000, 63),
('G3', '4', 1, 45000, 63),
('G3', '5', 1, 45000, 63),
('G4', '1', 1, 45000, 64),
('G4', '2', 1, 45000, 64),
('G4', '3', 1, 45000, 64),
('G4', '4', 1, 45000, 64),
('G4', '5', 1, 45000, 64),
('G5', '1', 1, 45000, 65),
('G5', '2', 1, 45000, 65),
('G5', '3', 1, 45000, 65),
('G5', '4', 1, 45000, 65),
('G5', '5', 1, 45000, 65),
('G6', '1', 1, 45000, 66),
('G6', '2', 1, 45000, 66),
('G6', '3', 1, 45000, 66),
('G6', '4', 1, 45000, 66),
('G6', '5', 1, 45000, 66),
('G7', '1', 1, 45000, 67),
('G7', '2', 1, 45000, 67),
('G7', '3', 1, 45000, 67),
('G7', '4', 1, 45000, 67),
('G7', '5', 1, 45000, 67),
('G8', '1', 1, 45000, 68),
('G8', '2', 1, 45000, 68),
('G8', '3', 1, 45000, 68),
('G8', '4', 1, 45000, 68),
('G8', '5', 1, 45000, 68),
('G9', '1', 1, 45000, 69),
('G9', '2', 1, 45000, 69),
('G9', '3', 1, 45000, 69),
('G9', '4', 1, 45000, 69),
('G9', '5', 1, 45000, 69),
('H1', '1', 1, 45000, 71),
('H1', '2', 1, 45000, 71),
('H1', '3', 1, 45000, 71),
('H1', '4', 1, 45000, 71),
('H1', '5', 1, 45000, 71),
('H10', '1', 1, 45000, 80),
('H10', '2', 1, 45000, 80),
('H10', '3', 1, 45000, 80),
('H10', '4', 1, 45000, 80),
('H10', '5', 1, 45000, 80),
('H2', '1', 1, 45000, 72),
('H2', '2', 1, 45000, 72),
('H2', '3', 1, 45000, 72),
('H2', '4', 1, 45000, 72),
('H2', '5', 1, 45000, 72),
('H3', '1', 1, 45000, 73),
('H3', '2', 1, 45000, 73),
('H3', '3', 1, 45000, 73),
('H3', '4', 1, 45000, 73),
('H3', '5', 1, 45000, 73),
('H4', '1', 1, 45000, 74),
('H4', '2', 1, 45000, 74),
('H4', '3', 1, 45000, 74),
('H4', '4', 1, 45000, 74),
('H4', '5', 1, 45000, 74),
('H5', '1', 1, 45000, 75),
('H5', '2', 1, 45000, 75),
('H5', '3', 1, 45000, 75),
('H5', '4', 1, 45000, 75),
('H5', '5', 1, 45000, 75),
('H6', '1', 1, 45000, 76),
('H6', '2', 1, 45000, 76),
('H6', '3', 1, 45000, 76),
('H6', '4', 1, 45000, 76),
('H6', '5', 1, 45000, 76),
('H7', '1', 1, 45000, 77),
('H7', '2', 1, 45000, 77),
('H7', '3', 1, 45000, 77),
('H7', '4', 1, 45000, 77),
('H7', '5', 1, 45000, 77),
('H8', '1', 1, 45000, 78),
('H8', '2', 1, 45000, 78),
('H8', '3', 1, 45000, 78),
('H8', '4', 1, 45000, 78),
('H8', '5', 1, 45000, 78),
('H9', '1', 1, 45000, 79),
('H9', '2', 1, 45000, 79),
('H9', '3', 1, 45000, 79),
('H9', '4', 1, 45000, 79),
('H9', '5', 1, 45000, 79),
('I1', '1', 2, 120000, 81),
('I1', '2', 2, 120000, 81),
('I1', '3', 2, 120000, 81),
('I1', '4', 2, 120000, 81),
('I1', '5', 2, 120000, 81),
('I2', '1', 2, 120000, 82),
('I2', '2', 2, 120000, 82),
('I2', '3', 2, 120000, 82),
('I2', '4', 2, 120000, 82),
('I2', '5', 2, 120000, 82),
('I3', '1', 2, 120000, 83),
('I3', '2', 2, 120000, 83),
('I3', '3', 2, 120000, 83),
('I3', '4', 2, 120000, 83),
('I3', '5', 2, 120000, 83),
('I4', '1', 2, 120000, 84),
('I4', '2', 2, 120000, 84),
('I4', '3', 2, 120000, 84),
('I4', '4', 2, 120000, 84),
('I4', '5', 2, 120000, 84),
('I5', '1', 2, 120000, 85),
('I5', '2', 2, 120000, 85),
('I5', '3', 2, 120000, 85),
('I5', '4', 2, 120000, 85),
('I5', '5', 2, 120000, 85);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `SOHD` int(10) NOT NULL,
  `MATV` int(10) DEFAULT NULL,
  `MAKM` int(10) DEFAULT NULL,
  `MANV` int(10) DEFAULT NULL,
  `NGAYHD` datetime NOT NULL,
  `TONG` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`SOHD`, `MATV`, `MAKM`, `MANV`, `NGAYHD`, `TONG`) VALUES
(0, 1, 1, 1, '2021-12-18 09:32:39', 270000),
(81, 55, 0, 40, '2021-12-18 09:37:10', 225000),
(91, 62, 0, 39, '2021-12-19 10:20:18', 45000),
(93, 61, 0, 40, '2021-12-19 10:40:12', 255000),
(95, 61, 5, 47, '2021-12-19 10:45:33', 162000),
(96, 61, 5, 54, '2021-12-19 11:17:49', 108000),
(97, 55, 5, 39, '2021-12-19 11:26:10', 108000),
(98, 55, 5, 54, '2021-12-19 11:29:48', 270000),
(99, 61, 0, 43, '2021-12-19 14:26:26', 260000),
(100, 63, 5, 52, '2021-12-20 09:45:25', 161000),
(101, 63, 5, 39, '2021-12-20 09:47:18', 178000),
(102, 62, 5, 52, '2021-12-20 14:59:19', 188000),
(103, 64, 3, 52, '2021-12-21 09:36:27', 125000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MAKM` int(10) NOT NULL,
  `NGAYBATDAU` date NOT NULL,
  `NGAYKETTHUC` date NOT NULL,
  `PHANTRAM` int(11) NOT NULL,
  `POSTER` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MOTA` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MAKM`, `NGAYBATDAU`, `NGAYKETTHUC`, `PHANTRAM`, `POSTER`, `MOTA`) VALUES
(1, '2021-12-24', '2021-12-26', 5, 'SP004130_1.jpg', 'Chương trình khuyến mãi giảm giá cho khách hàng mua vé online tại trang web'),
(2, '2021-12-23', '2021-12-25', 10, 'SP004130_1.jpg', 'Chương trình khuyến mãi giảm giá cho khách hàng mua vé online tại trang web'),
(3, '2021-12-21', '2021-12-22', 50, 'big-sale-poster-vector-easy-to-edit-34462902.jpg', 'Chương trình khuyến mãi giảm cho khách hàng mua vé online tại trang web'),
(4, '2021-12-30', '2021-12-31', 10, 'tải xuống.png', 'Chương trình khuyến mãi giảm cho khách hàng mua vé online tại trang web'),
(5, '2021-12-19', '2021-12-21', 10, 'tải xuống.png', ''),
(6, '2021-02-07', '2021-02-09', 10, 'images (1).jpg', ''),
(7, '2021-11-27', '2021-11-29', 10, '', ''),
(8, '2021-09-08', '2021-09-10', 20, '', ''),
(9, '2021-02-18', '2021-02-20', 30, '', ''),
(10, '2021-04-12', '2021-04-14', 30, '', ''),
(11, '2021-05-02', '2021-05-04', 20, '', ''),
(12, '2021-04-10', '2021-04-12', 10, '', ''),
(13, '2021-07-03', '2021-07-05', 10, '', ''),
(14, '2021-07-31', '2021-08-02', 20, '', ''),
(15, '2021-07-06', '2021-07-08', 10, '', ''),
(16, '2021-02-20', '2021-02-22', 10, '', ''),
(17, '2021-09-06', '2021-09-08', 20, '', ''),
(18, '2021-05-10', '2021-05-12', 10, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MANV` int(10) NOT NULL,
  `TENNV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GIOITINH` int(11) NOT NULL DEFAULT 2,
  `NGAYSINH` datetime NOT NULL,
  `DIACHI` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYVAOLAM` datetime NOT NULL,
  `CHUCVU` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `LUONG` double NOT NULL,
  `CCCD` char(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MANV`, `TENNV`, `GIOITINH`, `NGAYSINH`, `DIACHI`, `SDT`, `NGAYVAOLAM`, `CHUCVU`, `LUONG`, `CCCD`) VALUES
(1, 'Đỗ Thị Thanh An', 1, '1994-03-07 00:00:00', 'Bình Phước', '0987654321', '2021-01-01 00:00:00', 'Quản lý', 10000000, '444247222'),
(2, 'Trần Quang Khả', 0, '1986-07-24 00:00:00', 'Quảng Ngãi', '0331003618', '2021-01-01 00:00:00', 'Quản lý', 10000000, '163192365'),
(3, 'Huỳnh Anh Kiệt', 0, '1992-06-20 00:00:00', 'Bến Tre', '0222820854', '2021-01-01 00:00:00', 'Quản lý', 10000000, '623842195'),
(4, 'Hà Hoàng Giang', 0, '1996-04-01 00:00:00', 'Bắc Ninh', '0755786013', '2021-01-01 00:00:00', 'Quản lý', 10000000, '861544602'),
(5, 'Nguyễn Khiêm', 0, '1989-04-28 00:00:00', 'Vĩnh Long', '0782561241', '2021-01-01 00:00:00', 'Quản lý', 10000000, '725286319'),
(6, 'Đặng Hữu Giáp', 0, '1987-02-13 00:00:00', 'Bến Tre', '0445252524', '2021-01-01 00:00:00', 'Quản lý', 10000000, '988621656'),
(7, 'Đỗ Anh Bạ', 0, '1995-07-15 00:00:00', 'Hưng Yên', '0872842218', '2021-01-01 00:00:00', 'Quản lý', 10000000, '136911531'),
(8, 'Trần Quang Bật', 0, '1989-08-21 00:00:00', 'Lâm Đồng', '0700920449', '2021-01-01 00:00:00', 'Quản lý', 10000000, '723253042'),
(9, 'Lý Văn Dục', 0, '1994-04-16 00:00:00', 'Bắc Giang', '0939189616', '2021-01-01 00:00:00', 'Quản lý', 10000000, '871667635'),
(10, 'Trần Thị Nghiên', 1, '1987-09-17 00:00:00', 'Đà Nẵng', '0232852561', '2021-01-01 00:00:00', 'Quản lý bán vé', 9000000, '232644359'),
(11, 'Dương Thị Hinh', 1, '1995-04-23 00:00:00', 'Bắc Giang', '0935186731', '2021-01-01 00:00:00', 'Quản lý bán vé', 9000000, '157313462'),
(12, 'Nguyễn Thị Khiêu', 1, '1996-11-11 00:00:00', 'Quảng Bình', '0112894279', '2021-01-01 00:00:00', 'Quản lý bán vé', 9000000, '162412604'),
(13, 'Võ Huy Tổ', 0, '1994-04-24 00:00:00', 'Sơn La', '0448417427', '2021-01-01 00:00:00', 'Quản lý bán vé', 9000000, '203123995'),
(14, 'Hoàng Long Hào', 0, '1988-08-31 00:00:00', 'Hà Nam', '0756827717', '2021-01-01 00:00:00', 'Quản lý bán vé', 9000000, '619254852'),
(15, 'Nguyễn Thái Tân', 0, '1994-01-29 00:00:00', 'Bà rịa – Vũng tàu', '0732126176', '2021-01-01 00:00:00', 'Quản lý bán vé', 9000000, '237035608'),
(16, 'Phạm Văn Cảnh', 0, '1994-08-25 00:00:00', 'Tuyên Quang', '0376045300', '2021-01-01 00:00:00', 'Quản lý bán vé', 9000000, '555366841'),
(17, 'Lê Huy Thận', 0, '1986-06-09 00:00:00', 'Hà Nam', '0979104984', '2021-01-01 00:00:00', 'Quản lý bán vé', 9000000, '314232750'),
(18, 'Hồ Thị Tâm', 1, '1986-07-09 00:00:00', 'Hòa Bình', '0540645264', '2021-01-01 00:00:00', 'Quản lý bán vé', 9000000, '141016107'),
(19, 'Trần Văn Tước', 0, '1987-12-06 00:00:00', 'Đắk Lắk', '0921079831', '2021-01-01 00:00:00', 'Quản lý bán vé', 9000000, '457124149'),
(20, 'Bùi Anh Nương', 0, '1991-01-28 00:00:00', 'Ninh Bình', '0572026862', '2021-01-01 00:00:00', 'Quản lý bán hàng', 9000000, '500078312'),
(21, 'Hoàng Đình Phú', 0, '2001-02-10 00:00:00', 'Đăk Lăk', '0743472256', '2021-01-01 00:00:00', 'Quản lý bán hàng', 9000000, '385056889'),
(22, 'Văn Quốc Trịnh', 0, '2000-03-20 00:00:00', 'Gia Lai', '0856534269', '2021-01-01 00:00:00', 'Quản lý bán hàng', 9000000, '805863663'),
(23, 'Trương Nguyễn Trường Duy', 0, '2001-04-10 00:00:00', 'Long An', '0898000146', '2021-01-01 00:00:00', 'Quản lý bán hàng', 9000000, '860329885'),
(24, 'Đặng Hữu Chương', 0, '1998-07-19 00:00:00', 'Quảng Nam', '0463524041', '2021-01-01 00:00:00', 'Quản lý bán hàng', 9000000, '812279354'),
(25, 'Phạm Quốc Hùng', 0, '2001-07-20 00:00:00', 'TP.Hồ Chí Minh', '0659253600', '2021-01-01 00:00:00', 'Quản lý bán hàng', 9000000, '952718641'),
(26, 'Vũ Huy Dần', 0, '1998-01-12 00:00:00', 'Bà rịa – Vũng tàu', '0547226341', '2021-01-01 00:00:00', 'Quản lý bán hàng', 9000000, '557905891'),
(27, 'Nguyễn Huy Thoả', 0, '1998-09-26 00:00:00', 'Thanh Hóa', '0576873053', '2021-01-01 00:00:00', 'Quản lý bán hàng', 9000000, '921360944'),
(28, 'Lý Quang Bạc', 0, '2002-09-20 00:00:00', 'Sơn La', '0136163083', '2021-01-01 00:00:00', 'Quản lý bán hàng', 9000000, '872794392'),
(29, 'Trần Thị Khương', 1, '2001-12-20 00:00:00', 'Vĩnh Phúc', '0136450513', '2021-01-01 00:00:00', 'Quản lý bán hàng', 9000000, '639370522'),
(30, 'Dương Uy Công', 0, '2000-01-26 00:00:00', 'Nam Định', '0139261424', '2021-01-01 00:00:00', 'Nhân viên bán vé', 7000000, '838941563'),
(31, 'Đặng Huy Lãnh', 0, '2000-06-19 00:00:00', 'Gia Lai', '0846068016', '2021-01-01 00:00:00', 'Nhân viên bán hàng', 7000000, '445982293'),
(32, 'Bùi Huy Chú', 0, '1998-12-16 00:00:00', 'Bình Định', '0129731656', '2021-01-01 00:00:00', 'Nhân viên soát vé', 7000000, '404596359'),
(33, 'Phạm Nhật Thống', 0, '2002-06-25 00:00:00', 'Điện Biên', '0886448416', '2021-01-01 00:00:00', 'Nhân viên bán vé', 7000000, '187505146'),
(34, 'Trần Hữu Trình', 0, '2001-09-29 00:00:00', 'Quảng Nam', '0786709199', '2021-01-01 00:00:00', 'Nhân viên bán hàng', 7000000, '625967778'),
(35, 'Ngô Văn Ngự', 0, '1999-03-29 00:00:00', 'Quảng Trị', '0193220647', '2021-01-01 00:00:00', 'Nhân viên bán hàng', 7000000, '622228964'),
(36, 'Đỗ Đình Trực', 0, '1998-06-30 00:00:00', 'Vĩnh Long', '0691721880', '2021-01-01 00:00:00', 'Nhân viên bán hàng', 7000000, '919231099'),
(37, 'Võ Huy Mai', 0, '2002-06-06 00:00:00', 'Quảng Nam', '0209840507', '2021-01-01 00:00:00', 'Nhân viên bán vé', 7000000, '298943798'),
(38, 'Võ Huy Tỵ', 0, '2002-09-30 00:00:00', 'Nghệ An', '0228799647', '2021-01-01 00:00:00', 'Nhân viên soát vé', 7000000, '412921154'),
(39, 'Hồ Anh Ðối', 0, '2001-08-09 00:00:00', 'Long An', '0805350776', '2021-01-01 00:00:00', 'Nhân viên bán hàng', 7000000, '783434388'),
(40, 'Hoàng Huy Cú', 0, '2002-12-16 00:00:00', 'Ninh Thuận', '0930422877', '2021-01-01 00:00:00', 'Nhân viên bán vé', 7000000, '517600495'),
(41, 'Bùi Thái Trữ', 0, '2000-08-29 00:00:00', 'Thành phố Hồ Chí Minh', '0198073284', '2021-01-01 00:00:00', 'Nhân viên bán hàng', 7000000, '798762997'),
(42, 'Trần Quang Ngoạn', 0, '2001-07-14 00:00:00', 'Bình Phước', '0815859575', '2021-01-01 00:00:00', 'Nhân viên bán hàng', 7000000, '216073634'),
(43, 'Vũ Huy Vọng', 0, '2001-01-02 00:00:00', 'Cao Bằng ', '0497136556', '2021-01-01 00:00:00', 'Nhân viên soát vé', 7000000, '583614049'),
(44, 'Vũ Đình Chủng', 0, '2002-03-22 00:00:00', 'Bắc Giang', '0585896465', '2021-01-01 00:00:00', 'Nhân viên bán hàng', 7000000, '769531631'),
(45, 'Ngô Huy Hướng', 0, '1999-11-18 00:00:00', 'Quảng Ninh', '0555539453', '2021-01-01 00:00:00', 'Nhân viên bán hàng', 7000000, '331763220'),
(46, 'Phạm Huy Quảng', 0, '2002-12-24 00:00:00', 'Đắk Lắk', '0275927951', '2021-01-01 00:00:00', 'Nhân viên soát vé', 7000000, '237132616'),
(47, 'Phạm Quang Khu', 0, '1998-04-14 00:00:00', 'Bạc Liêu', '0921547969', '2021-01-01 00:00:00', 'Nhân viên soát vé', 7000000, '317230721'),
(48, 'Đỗ Anh Ngoan', 0, '2001-05-26 00:00:00', 'Lai Châu', '0508834833', '2021-01-01 00:00:00', 'Nhân viên soát vé', 7000000, '937365315'),
(49, 'Lê Hữu Sở', 0, '2001-02-27 00:00:00', 'Cần Thơ', '0482967694', '2021-01-01 00:00:00', 'Nhân viên bán vé', 7000000, '821790059'),
(50, 'Nguyễn Quang Duyên', 0, '2002-08-31 00:00:00', 'Đồng Nai', '0540106213', '2021-01-01 00:00:00', 'Nhân viên bán vé', 7000000, '585333617'),
(51, 'Ngô Huy An', 0, '2000-05-26 00:00:00', 'Vĩnh Phúc', '0238403242', '2021-01-01 00:00:00', 'Nhân viên bán hàng', 7000000, '662255959'),
(52, 'Huỳnh Quang Song', 0, '1999-04-07 00:00:00', 'Tiền Giang', '0585357581', '2021-01-01 00:00:00', 'Nhân viên bán vé', 7000000, '208632491'),
(53, 'Phạm Huy Khưu', 0, '1999-03-13 00:00:00', 'Hà Giang', '0948111692', '2021-01-01 00:00:00', 'Nhân viên bán vé', 7000000, '340775224'),
(54, 'Trần Huy Ðảm', 0, '2001-08-25 00:00:00', 'Bắc Ninh', '0335684050', '2021-01-01 00:00:00', 'Nhân viên bán hàng', 7000000, '521374644'),
(55, 'Đặng Huy Quận', 0, '2002-04-01 00:00:00', 'Hải Phòng', '0175451495', '2021-01-01 00:00:00', 'Nhân viên bán hàng', 7000000, '853043418'),
(56, 'Dương Quang Chính', 0, '2001-06-23 00:00:00', 'Bình Dương', '0650876196', '2021-01-01 00:00:00', 'Nhân viên bán hàng', 7000000, '860201253'),
(57, 'Trần Huy Triều', 0, '2001-08-03 00:00:00', 'Đắk Lắk', '0540826139', '2021-01-01 00:00:00', 'Nhân viên bán vé', 7000000, '510956947'),
(58, 'Đồng Quang Quý', 0, '1997-10-27 00:00:00', 'Bình Định', '0699588821', '2021-01-01 00:00:00', 'Quản lý', 10000000, '532704759');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `MAPHIM` int(10) NOT NULL,
  `TENPHIM` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `THOILUONG` int(11) NOT NULL,
  `NGONNGU` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `THELOAI` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `DAODIEN` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DIENVIEN` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MOTA` varchar(800) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DOTUOI` int(11) DEFAULT NULL,
  `TRAILER` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `POSTER` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KHOICHIEU` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`MAPHIM`, `TENPHIM`, `THOILUONG`, `NGONNGU`, `THELOAI`, `DAODIEN`, `DIENVIEN`, `MOTA`, `DOTUOI`, `TRAILER`, `POSTER`, `KHOICHIEU`) VALUES
(1, 'Kẻ nguyền ta chết', 100, 'Tiếng Anh - Phụ đề Tiếng Việt', 'Hành Động, Hồi hộp, Tâm Lý', 'Taylor Sheridan', 'Angelina Jolie, Jon Bernthal, Nicholas Hoult', '\"Those Who Wish Me Dead\" xoay quanh câu chuyện về cậu bé Connor (Finn Little) trốn chạy sự truy lùng của hai sát thủ (do Nicholas Hoult và Aidan Gillen thủ vai). Owen, cha của Connor là một kế toán nắm giữ bí mật có thể ảnh hưởng đến giới có chức có quyền. Vì thế, hai bố con bị đuổi cùng giết tận.', 18, 'https://www.youtube.com/embed/s9boPsyrehg', 'kenguyen.jpg', '2021-12-19'),
(2, 'The Conjuring: Ma xui quỷ khiến', 112, 'Tiếng Anh - Phụ đề Tiếng Việt', 'Kinh dị', 'Michael Chaves', 'Vera Farmiga, Patrick Wilson, Sterling Jerins, Julian Hilliard', 'The Conjuring​: Ma xui quỷ khiến là một bộ phim kinh dị siêu nhiên năm 2021 của Mỹ, được đạo diễn bởi Michael Chaves từ một kịch bản của David Leslie Johnson-McGoldrick. Bộ phim sẽ đóng vai trò là phần tiếp theo của Ám ảnh kinh hoàng và Ám ảnh kinh hoàng 2, và là phần thứ tám trong Vũ trụ The Conjuring.', 16, 'https://www.youtube.com/embed/tbs3XRt0hhI', 'conju.jpg', '2021-12-19'),
(3, 'Hiện thân tà ác', 111, 'Tiếng Anh - Phụ đề Tiếng Việt', 'Kinh dị', 'James Wan', 'Annabelle Wallis, Maddie Hasson, George Young', 'Hiện Thân Tà Ác kể về Madison như tê dại khi sống trong ảo ảnh điên cuồng về những vụ giết người tàn ác. Tình trạng của cô trở nên tồi tệ hơn khi Madison nhận ra, những giấc mơ đó lại chính là hiện thực ghê rợn mà mình phải đối mặt.', 18, 'https://www.youtube.com/embed/2pQ8QpdyMaI', 'hienthantaac.jpg', '2021-12-19'),
(4, 'Án tử trên xe', 94, 'Tiếng Hàn - Phụ đề Tiếng Việt', 'Hồi hộp', 'Kim Changju', 'Jo Woo Jin, Lee Jae-in, Jin Kyung và Ji Changwook', 'Sung-gyu (JO Woo Jin), một giám đốc ngân hàng đang trên đường đi làm với 2 đứa con thì bất ngờ nhận được một cuộc gọi bí ẩn. Người gọi đe doạ đã gài bom trong xe, và cảnh báo bom sẽ phát nổ nếu bất cứ ai rời khỏi ghế ngồi… Sung-gyu lúc đầu cho rằng đó là một cuộc gọi lừa đảo, nhưng khi xe đồng nghiệp của anh phát nổ, anh nhận ra điều này là thật. Như thể vẫn chưa đủ, cảnh sát truy đuổi Sung-gyu vì nghi ngờ anh là kẻ chủ mưu của vụ nổ bom. Sung-gyu gần như tuyệt vọng trước tình thế nghìn cân treo sợi tóc vì không thể ngắt cuộc gọi của kẻ bí ẩn và phải tìm cách giữ an toàn cho những đứa con của mình…', 16, 'https://www.youtube.com/embed/OGCaSDHIkIU', 'antutrenxe.jpg', '2021-12-17'),
(5, 'Tộc săn người', 105, 'Tiếng Anh - Phụ đề Tiếng Việt', 'Kinh dị', 'Mike P. Nelson', 'Charlotte Vega, Adain Bradley, Emma Dumont, Dylan McTee, Daisy Head, Bill Sage, Matthew Modine', 'Tộc Săn Người (Tựa tiếng Anh: Wrong Turn: The Foundation) là phần 7 của series phim kinh dị nổi tiếng Wrong Turn, kể về hành trình trekking đến vùng núi hoang sơ Virginia của một nhóm bạn thân. Dù đã được cảnh báo nhiều lần rằng không được đi ra khỏi con đường mòn được đánh dấu, nhóm bạn vẫn để sự tò mò dẫn dắt và quyết định thử tìm một lối đi khác. Từ đây, họ đã lạc lối vào lãnh địa của Tộc Săn Người và phải đối mặt với muôn vàn cái bẫy chết chóc trong khu rừng. Liệu họ có thể an toàn thoát khỏi thiên la địa võng ghê rợn và tàn bạo của Tộc Săn Người?', 18, 'https://www.youtube.com/embed/muHsZdRTCds', 'tocsannguoi.jpg', '2021-12-17'),
(6, 'Hung thần trắng', 91, 'Tiếng Anh - Phụ đề Tiếng Việt', 'Hồi hộp', 'Martin Wilson', 'Katrina Bowden, Aaron Jakubenko, Tim Kano, Kimie Tsukakoshi, Te Kohe Tuhaka', '', 18, 'https://www.youtube.com/embed/A7eqA3Z96kk', 'hungthantrang.jpg', '2021-12-15'),
(7, 'Lật mặt 48H', 110, 'Tiếng Việt', 'Hành Động', 'Lý Hải', 'Võ Thành Tâm, Mạc Văn Khoa, Huỳnh Đông.', 'Lý Hải trở lại với dòng phim hành động sở trường của mình. Bối cảnh hoành tráng với sự đầu tư nghiêm túc, siêu phẩm hành động Việt Lật Mặt 48h sẽ kể về một hành trình trốn chạy đầy kịch tính, nghẹt thở đến phút cuối cùng.', 18, 'https://www.youtube.com/embed/kBY2k3G6LsM', 'latmat.jpg', '2021-12-31'),
(8, 'Bố già', 128, 'Tiếng Việt', 'Gia đình, Hài', 'Vũ Ngọc Đãng & Trấn Thành', 'Trấn Thành, Tuấn Trần, Ngân Chi,…', 'Phim sẽ xoay quanh lối sống thường nhật của một xóm lao động nghèo, ở đó có bộ tứ anh em Giàu - Sang - Phú - Quý với Ba Sang sẽ là nhân vật chính, hay lo chuyện bao đồng nhưng vô cùng thương con cái. Câu chuyện phim tập trung về hai cha con Ba Sang (Trấn Thành) và Quắn (Tuấn Trần). Dù yêu thương nhau nhưng khoảng cách thế hệ đã đem đến những bất đồng lớn giữa hai cha con. Liệu cả hai có thể cho nhau cơ hội thấu hiểu đối phương, thu hẹp khoảng cách và tạo nên hạnh phúc từ sự khác biệt?', 13, 'https://www.youtube.com/embed/jluSu8Rw6YE', 'bogia.jpg', '2021-12-31'),
(9, 'Godzilla VS Kong', 113, 'Tiếng Anh - Phụ đề Tiếng Việt', 'Hành động, Thần thoại', 'Adam Wingard', 'Millie Bobby Brown, Alexander Skarsgård, Rebecca Hall, Eiza González, Kyle Chandler', 'Khi hai kẻ thù truyền kiếp gặp nhau trong một trận chiến ngoạn mục, số phận của cả thế giới vẫn còn bị bỏ ngỏ… Bị đưa khỏi Đảo Đầu Lâu, Kong cùng Jia, một cô bé mồ côi có mối liên kết mạnh mẽ với mình và đội bảo vệ đặc biệt hướng về mái nhà mới. Bất ngờ, nhóm đụng độ phải Godzilla hùng mạnh, tạo ra một làn sóng hủy diệt trên toàn cầu. Thực chất, cuộc chiến giữa hai kẻ khổng lồ dưới sự thao túng của các thế lực vô hình mới chỉ là điểm khởi đầu để khám phá những bí ẩn nằm sâu trong tâm Trái đất.', 13, 'https://www.youtube.com/embed/odM92ap8_c0', 'gozilla.webp', '2021-12-31'),
(10, 'Ong nhí phiêu lưu ký', 88, 'Tiếng Anh - Phụ đề Tiếng Việt', 'Hoạt hình', 'Noel Cleary', 'Coco Jack Gillies, Evie Gillies, Benson Jack Anthony, Justine Clarke, Shane Dundas; David Collins', '\"Ong nhí phiêu lưu ký: Giải cứu công chúa kiến\" (Tựa tiếng Anh: Maya The Bee 3: The Golden Orb) là hành trình tiếp theo của bộ đôi Maya và Willi sau phần phim \"Ong nhí phiêu lưu ký: Đại chiến cúp ong mật ăn khách tại Việt Nam.', 0, 'https://www.youtube.com/embed/RVzlfJ2vWLY', 'ongnhi.jpg', '2021-12-31'),
(11, 'Kẻ vô danh', 92, 'Tiếng Anh - Phụ đề Tiếng Việt', 'Hành Động, Hồi hộp, Tâm Lý', 'Ilya Naishuller', 'Bob Odenkirk, Connie Nielsen, RZA, Aleksey Serebryakov', 'Đôi khi người đàn ông mà bạn không để ý lại là người nguy hiểm nhất. Hutch Mansell, một người cha và người chồng bị đánh giá thấp và bị coi thường, luôn coi thường sự phẫn nộ của cuộc đời và không bao giờ lùi bước. Một kẻ vô danh.\r\n', 18, 'https://www.youtube.com/embed/_qVn8CswIB0', 'kevodanh.jpg', '2021-12-31'),
(12, 'Thiên thần hộ mệnh', 124, 'Tiếng Việt', 'Hồi hộp, Tâm lý', 'Victor Vũ', 'Trúc Anh, Amee, Salim, Samuel An', 'Cái chết của một cô ca sĩ nổi tiếng dẫn đến sự thành công của một cô ca sĩ trẻ khác. Câu chuyện này có liên quan như thế nào đến sự giúp đỡ của một \"thiên thần hộ mệnh\"?', 18, 'https://www.youtube.com/embed/1H-2FeFOM08', 'thienthan.jpg', '2021-12-31'),
(13, 'Vùng đất câm lặng II', 97, 'Tiếng Anh - Phụ đề Tiếng Việt', 'Kinh dị', 'John Krasinski', 'Cillian Murphy, Emily Blunt, Noah Jupe', 'Gia đình Abbot gồm người mẹ Evelyn cùng ba con chạy trốn đến một thành phố tưởng như an toàn. Tuy nhiên, cả gia đình không ngờ rằng ở thế giới bên ngoài cũng đã bị những sinh vật ngoài hành tinh thâu tóm. \"Vùng đất câm lặng” lúc này đã trở thành “thế giới câm lặng” khi những người sống sót tiếp tục phải lẩn trốn, không được tạo ra tiếng động mỗi khi di chuyển hay giao tiếp với nhau.', 16, 'https://www.youtube.com/embed/BpdDN9d9Jio', 'vungdat.jpg', '2021-12-15'),
(14, 'Điệp vụ cảm tử', 132, 'Tiếng Anh - Phụ đề Tiếng Việt', 'Hành động', 'James Gunn', 'Margot Robbie, Idris Elba, John Cena', 'The Suicide Squad - Điệp Vụ Cảm Tử kể về nhóm Task Force X bao gồm các thành viên là những phần tử nguy hiểm và có siêu năng lực đặc biệt được chỉ huy bởi Amanda Waller, họ có nhiệm vụ đột kích lên 1 hòn đảo có tên là Corto Maltese, nơi diễn ra cuộc đảo chính và thành lập chính phủ chống Mỹ. Tại hòn đảo này, các nhà chức trách đang kiểm soát một con quái vật tên là Starro - có năng lực biến con người thành cái xác không hồn, điều này khiến cho an ninh thế giới bị đe dọa một cách nghiêm trọng. Nhóm bọn Task Force X buộc phải đối mặt với vô số kẻ thù trên hòn đảo, nếu xảy ra bất cứ sai lầm bọn họ sẽ phải trả giá bằng mạng sống.', 18, 'https://www.youtube.com/embed/QTg5K0XDiaE', 'diepvu.jpg', '2021-12-16'),
(16, 'Tiệc trăng máu', 100, 'Tiếng Việt', 'Hài', 'Nguyễn Quang Dũng', 'Thu Trang, Thái Hòa,...', 'Tiệc trăng máu là một bộ phim điện ảnh Việt Nam do đạo diễn Nguyễn Quang Dũng thực hiện, khởi chiếu vào ngày 20 tháng 10, 2020. Phim được làm lại từ bản gốc Perfect Strangers của Italy, ngoài ra còn nổi tiếng với bản remake Intimate Strangers của Hàn Quốc.', 16, 'https://youtu.be/s9boPsyrehg', 'tiectrang.jpg', '2021-12-31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rapchieu`
--

CREATE TABLE `rapchieu` (
  `MARAP` int(10) NOT NULL,
  `TENRAP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DIACHI` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rapchieu`
--

INSERT INTO `rapchieu` (`MARAP`, `TENRAP`, `DIACHI`, `email`, `sdt`) VALUES
(1, 'Sinh viên', 'Bình Dương', 'svcine@gmai.com', 1221823432),
(2, 'Thuận An', 'Bình Dương', 'tacine@gmai.com', 1221823333),
(3, 'Thủ Dầu Một', 'Bình Dương', 'tdmcine@gmai.com', 1221823444),
(4, 'Vincom Quận 9', 'TP HCM', 'q9cine@gmai.com', 1221823555),
(5, 'Vincom Thủ Đức', 'TP HCM', 'vcq9cine@gmai.com', 1221823555),
(6, 'Gigamall Thủ Đức', 'TP HCM', 'ggtdcine@gmai.com', 1221823666),
(7, 'Vivo City', 'TP HCM', 'vivocine@gmai.com', 1221823777),
(8, 'Aeon Bình Tân', 'TP HCM', 'aeoncine@gmai.com', 1221823888),
(9, 'Sư Vạn Hạnh', 'TP HCM', 'svhcine@gmai.com', 1221823999),
(10, 'Đà Lạt', 'Lâm Đồng', 'dlcine@gmai.com', 1221823100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` int(10) NOT NULL,
  `TENSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GIA` double NOT NULL,
  `anh` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `TENSP`, `GIA`, `anh`) VALUES
(1, 'Bắp rang bơ', 30000, 'bap.jpg'),
(2, 'Bắp phô mai', 40000, 'bapphomai.jpg'),
(3, 'Coca nhỏ', 20000, 'co.png'),
(4, 'Coca lớn', 30000, 'co.png'),
(5, 'Pepsi nhỏ', 20000, 'pepnho.jfif'),
(6, 'Pepsi lớn', 30000, 'pepsi.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suatchieu`
--

CREATE TABLE `suatchieu` (
  `MASC` int(10) NOT NULL,
  `MAGHE` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PHONG` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MAPHIM` int(10) DEFAULT NULL,
  `MARAP` int(10) DEFAULT NULL,
  `SOHD` int(10) DEFAULT NULL,
  `NGAYCHIEU` datetime NOT NULL,
  `suat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `suatchieu`
--

INSERT INTO `suatchieu` (`MASC`, `MAGHE`, `PHONG`, `MAPHIM`, `MARAP`, `SOHD`, `NGAYCHIEU`, `suat`) VALUES
(39, '0', '1', 1, 2, 0, '2021-12-21 12:00:00', 0),
(40, '0', '1', 1, 2, 0, '2021-12-20 00:00:00', 2147483647),
(41, '0', '2', 2, 2, 0, '2021-12-24 09:10:00', 2147483647),
(42, '0', '2', 2, 2, 0, '2021-12-25 11:30:00', 0),
(43, '0', '1', 5, 5, 0, '2021-12-23 19:30:00', 2147483647),
(44, '0', '1', 6, 1, 0, '2021-12-24 18:00:00', 0),
(45, '0', '1', 2, 2, 0, '2021-12-21 00:00:00', 2147483647),
(46, '0', '1', 13, 1, 0, '2021-12-18 12:00:00', 2147483647),
(47, '0', '1', 14, 2, 0, '2021-12-20 09:00:00', 2147483647),
(48, '0', '1', 10, 10, 0, '2021-12-29 00:00:00', 0),
(49, '0', '2', 11, 1, 0, '2021-12-11 00:00:00', 0),
(50, '0', '1', 12, 2, 0, '2021-12-31 00:00:00', 2147483647),
(51, '0', '2', 13, 3, 0, '2021-12-11 00:00:00', 0),
(52, '0', '1', 14, 4, 0, '2021-12-22 09:00:00', 0),
(53, '0', '1', 1, 1, 0, '2021-12-19 11:49:00', 2147483647),
(54, '0', '1', 4, 4, 0, '2021-12-20 11:49:00', 2147483647),
(55, '0', '1', 12, 2, 0, '2022-01-10 17:41:00', 2147483647),
(60, 'I1', '1', 1, 2, 80, '2021-12-18 12:00:00', 39),
(61, 'C2', '1', 1, 2, 80, '2021-12-18 12:00:00', 39),
(91, 'A4', '1', 1, 2, 81, '2021-12-19 00:00:00', 40),
(92, 'A5', '1', 1, 2, 81, '2021-12-19 00:00:00', 40),
(94, 'G4', '1', 1, 2, 81, '2021-12-19 00:00:00', 40),
(95, 'G5', '1', 1, 2, 81, '2021-12-19 00:00:00', 40),
(96, 'G6', '1', 1, 2, 81, '2021-12-19 00:00:00', 40),
(99, 'H7', '1', 1, 2, 82, '2021-12-19 12:00:00', 39),
(100, 'B2', '1', 1, 2, 82, '2021-12-19 12:00:00', 39),
(104, 'D6', '1', 1, 2, 91, '2021-12-19 12:00:00', 39),
(109, 'H4', '1', 1, 2, 93, '2021-12-20 00:00:00', 40),
(110, 'H5', '1', 1, 2, 93, '2021-12-20 00:00:00', 40),
(111, 'I2', '1', 1, 2, 93, '2021-12-20 00:00:00', 40),
(113, 'H6', '1', 1, 2, 93, '2021-12-20 00:00:00', 40),
(128, 'H5', '1', 14, 2, 95, '2021-12-20 09:00:00', 47),
(129, 'H4', '1', 14, 2, 95, '2021-12-20 09:00:00', 47),
(130, 'A4', '1', 14, 2, 95, '2021-12-20 09:00:00', 47),
(131, 'A5', '1', 14, 2, 95, '2021-12-20 09:00:00', 47),
(132, 'I2', '1', 4, 4, 96, '2021-12-20 11:49:00', 54),
(134, 'I3', '1', 1, 2, 97, '2021-12-19 12:00:00', 39),
(135, 'G4', '1', 4, 4, 98, '2021-12-20 11:49:00', 54),
(136, 'G5', '1', 4, 4, 98, '2021-12-20 11:49:00', 54),
(137, 'E5', '1', 4, 4, 98, '2021-12-20 11:49:00', 54),
(138, 'E6', '1', 4, 4, 98, '2021-12-20 11:49:00', 54),
(139, 'I3', '1', 4, 4, 98, '2021-12-20 11:49:00', 54),
(146, 'C5', '1', 5, 5, 99, '2021-12-23 19:30:00', 43),
(147, 'C6', '1', 5, 5, 99, '2021-12-23 19:30:00', 43),
(148, 'I3', '1', 5, 5, 99, '2021-12-23 19:30:00', 43),
(149, 'C6', '1', 14, 4, 100, '2021-12-22 09:00:00', 52),
(150, 'C5', '1', 14, 4, 100, '2021-12-22 09:00:00', 52),
(151, 'I4', '1', 1, 2, 101, '2021-12-21 12:00:00', 39),
(152, '0', '1', 6, 1, 0, '2021-12-24 12:20:00', 0),
(153, 'I3', '1', 14, 4, 102, '2021-12-22 09:00:00', 52),
(154, 'F7', '1', 14, 4, 103, '2021-12-22 09:00:00', 52),
(155, 'F6', '1', 14, 4, 103, '2021-12-22 09:00:00', 52);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `MATV` int(10) NOT NULL,
  `TENTV` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `GIOITINH` int(11) DEFAULT 2,
  `NGAYSINH` datetime DEFAULT NULL,
  `DIACHI` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `CCCD` char(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGAYDK` datetime DEFAULT NULL,
  `DIEMTICHLUY` int(11) DEFAULT NULL,
  `LOAITK` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`MATV`, `TENTV`, `GIOITINH`, `NGAYSINH`, `DIACHI`, `SDT`, `CCCD`, `NGAYDK`, `DIEMTICHLUY`, `LOAITK`, `EMAIL`) VALUES
(1, 'An', 1, '2001-11-05 00:00:00', 'Bình Phước', '112233', '12345', '2021-11-05 00:00:00', 12, 'Bạc', '123@gmail.com'),
(2, 'Đỗ Huy Nhiễu', 0, '1994-09-08 00:00:00', 'Cần Thơ', '0153567809', '580858845', '2021-01-01 00:00:00', 588, 'Vàng', '10859@kh.com'),
(3, 'Trần Uy Hoàng', 0, '1995-10-10 00:00:00', 'Thừa Thiên Huế', '0163009627', '353382347', '2021-01-01 00:00:00', 45, 'Vàng', '10334@kh.com'),
(4, 'Phạm Quang Cử', 0, '1985-05-26 00:00:00', 'Thừa Thiên Huế', '0188681061', '689181229', '2021-01-01 00:00:00', 8, 'Vàng', '10889@kh.com'),
(5, 'Nguyễn Thị Phồn', 1, '1994-05-26 00:00:00', 'Đồng Nai', '0785802699', '241090026', '2021-01-01 00:00:00', 699, 'Vàng', '10308@kh.com'),
(6, 'Bùi Thị Quỳnh', 1, '1993-02-09 00:00:00', 'An Giang', '0397379074', '285548936', '2021-01-01 00:00:00', 116, 'Vàng', '10373@kh.com'),
(7, 'Nguyễn Anh Cai', 0, '1985-05-01 00:00:00', 'Vĩnh Long', '0319693969', '700676939', '2021-01-01 00:00:00', 705, 'Vàng', '10289@kh.com'),
(8, 'Hoàng Đình Chinh', 0, '1991-10-27 00:00:00', 'Ninh Thuận', '0673073849', '356675571', '2021-01-01 00:00:00', 112, 'Vàng', '10852@kh.com'),
(9, 'Huỳnh Quang Câu', 0, '1990-09-22 00:00:00', 'Quảng Ngãi', '0695189786', '898607672', '2021-01-01 00:00:00', 565, 'Vàng', '10535@kh.com'),
(10, 'Nguyễn Thị Nữ', 1, '1990-12-09 00:00:00', 'Cà Mau', '0476853482', '435734831', '2021-01-01 00:00:00', 33, 'Vàng', '10684@kh.com'),
(11, 'Võ Thị Bổng', 1, '1985-02-13 00:00:00', 'Cà Mau', '0806912115', '674832827', '2021-01-01 00:00:00', 743, 'Vàng', '10142@kh.com'),
(12, 'Hồ Long Thinh', 0, '1998-08-17 00:00:00', 'Đồng Tháp', '0562496867', '722736040', '2021-01-01 00:00:00', 859, 'Vàng', '10769@kh.com'),
(13, 'Lê Thị Ðịnh', 1, '1985-04-28 00:00:00', 'Tiền Giang', '0286322796', '665362928', '2021-01-01 00:00:00', 334, 'Vàng', '10125@kh.com'),
(14, 'Nguyễn Thị Truyền', 1, '1994-12-05 00:00:00', 'Lâm Đồng', '0599080385', '702459870', '2021-01-01 00:00:00', 889, 'Vàng', '10435@kh.com'),
(15, 'Hồ Đình Long', 0, '1988-08-17 00:00:00', 'Thanh Hóa', '0942374772', '563153354', '2021-01-01 00:00:00', 308, 'Vàng', '10058@kh.com'),
(16, 'Hoàng Uy Ðủ', 0, '1996-11-10 00:00:00', 'Bình Định', '0791764237', '998853607', '2021-01-01 00:00:00', 373, 'Vàng', '10940@kh.com'),
(17, 'Vũ Anh Thập', 0, '1996-11-03 00:00:00', 'Điện Biên', '0923324284', '823221450', '2021-01-01 00:00:00', 289, 'Vàng', '10503@kh.com'),
(18, 'Lý Thị Tác', 1, '1991-12-22 00:00:00', 'Đắk Lắk', '0961378790', '807076535', '2021-01-01 00:00:00', 852, 'Vàng', '10260@kh.com'),
(19, 'Nguyễn Hữu Di', 0, '1996-08-11 00:00:00', 'Gia Lai', '0196714444', '655078498', '2021-01-01 00:00:00', 535, 'Vàng', '10496@kh.com'),
(20, 'Bùi Quang Vịnh', 0, '1995-03-26 00:00:00', 'Nghệ An', '0963591428', '841391866', '2021-01-01 00:00:00', 684, 'Vàng', '10790@kh.com'),
(21, 'Huỳnh Thị Vũ', 1, '1998-03-27 00:00:00', 'Bà rịa – Vũng tàu', '0535465820', '712457058', '2021-01-01 00:00:00', 142, 'Bạc', '10761@kh.com'),
(22, 'Huỳnh Thị Quả', 1, '1992-12-27 00:00:00', 'Vĩnh Long', '0632024687', '383219507', '2021-01-01 00:00:00', 769, 'Bạc', '10862@kh.com'),
(23, 'Hoàng Đình Phú', 0, '2001-02-10 00:00:00', 'Đăk Lăk', '0431031749', '663311988', '2021-01-01 00:00:00', 125, 'Bạc', '10266@kh.com'),
(24, 'Văn Quốc Trịnh', 0, '2000-03-20 00:00:00', 'Gia Lai', '0657505047', '953898852', '2021-01-01 00:00:00', 435, 'Bạc', '10021@kh.com'),
(25, 'Trương Nguyễn Trường Duy', 0, '2001-04-10 00:00:00', 'Long An', '0856213321', '144926185', '2021-01-01 00:00:00', 58, 'Bạc', '10201@kh.com'),
(26, 'Đặng Hữu Chương', 0, '1998-07-19 00:00:00', 'Quảng Nam', '0101400012', '302780788', '2021-01-01 00:00:00', 940, 'Bạc', '10742@kh.com'),
(27, 'Phạm Quốc Hùng', 0, '2001-07-20 00:00:00', 'TP.Hồ Chí Minh', '0950149046', '116098714', '2021-01-01 00:00:00', 503, 'Bạc', '10169@kh.com'),
(28, 'Lý Long Hải', 0, '2000-11-26 00:00:00', 'Lai Châu', '0959921393', '825380894', '2021-01-01 00:00:00', 260, 'Bạc', '10499@kh.com'),
(29, 'Phan Anh Dị', 0, '2001-07-19 00:00:00', 'Quảng Ngãi', '0817789252', '401708365', '2021-01-01 00:00:00', 496, 'Bạc', '10045@kh.com'),
(30, 'Phạm Huy Ðược', 0, '2001-02-27 00:00:00', 'Hà Nam', '0959874470', '442465097', '2021-01-01 00:00:00', 790, 'Bạc', '10076@kh.com'),
(31, 'Trần Huy Thực', 0, '2000-04-23 00:00:00', 'Yên Bái', '0345034615', '393353661', '2021-01-01 00:00:00', 761, 'Bạc', '10858@kh.com'),
(32, 'Ngô Thị Kiên', 1, '1998-03-13 00:00:00', 'Thái Bình', '0741489626', '437414127', '2021-01-01 00:00:00', 862, 'Bạc', '10251@kh.com'),
(33, 'Ngô Huy Dần', 0, '2001-09-16 00:00:00', 'Vĩnh Phúc', '0986852625', '462418343', '2021-01-01 00:00:00', 266, 'Bạc', '10733@kh.com'),
(34, 'Hồ Đình Quít', 0, '1998-09-05 00:00:00', 'Tiền Giang', '0692480790', '323693659', '2021-01-01 00:00:00', 21, 'Bạc', '10983@kh.com'),
(35, 'Vũ Huy Dũ', 0, '2002-09-21 00:00:00', 'Cà Mau', '0843297142', '733455290', '2021-01-01 00:00:00', 201, 'Bạc', '10017@kh.com'),
(36, 'Hồ Uy Bắc', 0, '2000-04-05 00:00:00', 'Hà Nam', '0400250882', '472117446', '2021-01-01 00:00:00', 742, 'Bạc', '10552@kh.com'),
(37, 'Nguyễn Huy Hàm', 0, '1998-02-04 00:00:00', 'Tây Ninh', '0616519096', '180721378', '2021-01-01 00:00:00', 169, 'Bạc', '10411@kh.com'),
(38, 'Vũ Huy Thể', 0, '1998-01-14 00:00:00', 'Đà Nẵng', '0310839607', '495689289', '2021-01-01 00:00:00', 499, 'Bạc', '10262@kh.com'),
(39, 'Lê Huy Liệu', 0, '1998-04-12 00:00:00', 'Lạng Sơn', '0701846601', '589513709', '2021-01-01 00:00:00', 45, 'Bạc', '10332@kh.com'),
(40, 'Đặng Nhật Vịnh', 0, '2002-01-26 00:00:00', 'Kon Tum', '0509939206', '570213433', '2021-01-01 00:00:00', 76, 'Bạc', '10668@kh.com'),
(41, 'Dương Thái Chú', 0, '1998-04-10 00:00:00', 'Lâm Đồng', '0401702859', '827782648', '2021-01-01 00:00:00', 858, 'Bạc', '10802@kh.com'),
(42, 'Lê Thị Khiêu', 1, '2001-12-12 00:00:00', 'Thừa Thiên Huế', '0382148064', '200656681', '2021-01-01 00:00:00', 251, 'Bạc', '10215@kh.com'),
(43, 'Phạm Huy Ðủ', 0, '2000-12-04 00:00:00', 'Quảng Ngãi', '0949291638', '334396530', '2021-01-01 00:00:00', 733, 'Bạc', '10002@kh.com'),
(44, 'Lê Nhật Mưu', 0, '2000-01-12 00:00:00', 'Thái Nguyên', '0647891757', '515145618', '2021-01-01 00:00:00', 983, 'Bạc', '10238@kh.com'),
(45, 'Dương Quang Sát', 0, '2001-10-22 00:00:00', 'Thái Bình', '0305469645', '269699894', '2021-01-01 00:00:00', 17, 'Bạc', '10139@kh.com'),
(46, 'Trần Thái Duật', 0, '2000-06-22 00:00:00', 'Bắc Giang', '0908557521', '438013082', '2021-01-01 00:00:00', 552, 'Bạc', '10819@kh.com'),
(47, 'Đỗ Nhật Nhạn', 0, '1999-04-22 00:00:00', 'Hòa Bình', '0254506863', '969488491', '2021-01-01 00:00:00', 411, 'Bạc', '10615@kh.com'),
(48, 'Hồ Nhật Bi', 0, '2001-11-17 00:00:00', 'Ninh Bình', '0685869382', '413226615', '2021-01-01 00:00:00', 262, 'Bạc', '10015@kh.com'),
(49, 'Nguyễn Nhật Phát', 0, '1999-08-17 00:00:00', 'Bạc Liêu', '0111977094', '707119925', '2021-01-01 00:00:00', 332, 'Đồng', '10808@kh.com'),
(50, 'Hồ Huy Giá', 0, '1999-03-21 00:00:00', 'Khánh Hòa', '0598988172', '689547719', '2021-01-01 00:00:00', 668, 'Đồng', '10582@kh.com'),
(51, 'Dương Uy Chính', 0, '2000-08-02 00:00:00', 'Hà Giang', '0330484048', '183088517', '2021-01-01 00:00:00', 802, 'Đồng', '10729@kh.com'),
(55, 'Thanh An', 1, '2001-11-11 00:00:00', 'Phú Riềng, Bình Phước', '0988888888', '12345678', '2021-11-05 00:00:00', 10, 'Bạc', '123@gm.uit.edu.vn'),
(58, 'a', 2, NULL, NULL, '123321', NULL, '2021-12-14 00:00:00', NULL, NULL, '123'),
(59, '1', 2, NULL, NULL, '1', NULL, '2021-12-14 00:00:00', NULL, NULL, '1'),
(60, '2', 2, NULL, NULL, '2', NULL, '2021-12-14 16:02:37', NULL, NULL, '2'),
(61, 'Kim Thành', 1, '2001-10-09 00:00:00', 'Quảng Nam', '012345', '123454321', '2021-12-19 10:06:21', NULL, NULL, 'Thanh@gmail.com'),
(62, 'Đình Phú', 1, '2002-11-11 00:00:00', 'Đắk Lắk', '0987789', '1234566543', '2021-12-19 10:11:02', 0, 'Bạc', 'Phu@gmail.com'),
(63, 'Thành Tín', 0, '2001-12-12 00:00:00', 'TPHCM', '0987789987', '333444555', '2021-12-20 09:44:25', 0, 'Bạc', 'Tin@gmail.com'),
(64, 'Đỗ Thị Thanh An', 1, '2000-11-11 00:00:00', 'Bình Phước', '0999999999', '1234445555', '2021-12-21 09:35:44', 0, 'Bạc', 'ThanhAn@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `USER` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `PASS` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `POSITION` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`USER`, `PASS`, `POSITION`) VALUES
('012345', '827ccb0eea8a706c4c34a16891f84e7b', 1),
('0943154872', '827ccb0eea8a706c4c34a16891f84e7b', 1),
('0987654321', '827CCB0EEA8A706C4C34A16891F84E7B', 0),
('0987789', 'f16b19ea72eeca73cfbbdecc9a17ab8a', 1),
('0987789987', '663807780cb7b90d2d0f28bc07b38d5a', 1),
('0988888888', '9fe191e0dc23fd89254410383465b335', 1),
('0999999999', 'b3ee54a861291e3dea579dbfd5f7c548', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`MASP`,`SOHD`);

--
-- Chỉ mục cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`MAGHE`,`PHONG`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`SOHD`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MAKM`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MANV`),
  ADD UNIQUE KEY `CCCD` (`CCCD`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`MAPHIM`);

--
-- Chỉ mục cho bảng `rapchieu`
--
ALTER TABLE `rapchieu`
  ADD PRIMARY KEY (`MARAP`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`);

--
-- Chỉ mục cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  ADD PRIMARY KEY (`MASC`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`MATV`),
  ADD UNIQUE KEY `SDT` (`SDT`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `CCCD` (`CCCD`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `USER` (`USER`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `SOHD` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MAKM` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MANV` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `MAPHIM` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `rapchieu`
--
ALTER TABLE `rapchieu`
  MODIFY `MARAP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MASP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  MODIFY `MASC` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `MATV` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
