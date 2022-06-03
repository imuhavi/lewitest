-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 03, 2022 at 12:52 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_5dots`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Size', '[\"small\",\"medium\",\"Large\",\"Extra Large\"]', '2022-05-13 11:49:10', '2022-05-13 11:49:10'),
(2, 'Color', '[\"Red\",\"Green\",\"Blue\",\"Sky\",\"White\",\"Black\"]', '2022-05-13 11:49:54', '2022-05-13 11:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `banner` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `banner`, `status`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', '1652450333_sC1uf1G48qlTFypv.png', '1652450333_b4VnTWVmKNQtCnRD.png', 'Active', 'adidas', 'adidas', 'adidas', '2022-05-13 10:58:53', '2022-05-13 10:58:53'),
(2, 'Apple', '1652450366_xnKy2PiCeRmEXpTs.png', '1652450366_hkMbhWKXEdRP7MT0.png', 'Active', 'apple', 'apple', 'apple', '2022-05-13 10:59:26', '2022-05-13 10:59:26'),
(3, 'Babyplus', '1652450433_NCcx6N1a5EwEW6w8.png', '1652450433_NMagXgMH0JX3vpzo.png', 'Active', 'babyplus', 'babyplus', 'babyplus', '2022-05-13 11:00:33', '2022-05-13 11:00:33'),
(4, 'Black Deacker', '1652450477_wptpZCBs4KbyCH1A.png', '1652450477_RVNxkHnQaHGXdOZF.png', 'Active', 'black-deacker', 'black-deacker', 'black-deacker', '2022-05-13 11:01:17', '2022-05-13 11:01:17'),
(5, 'Samsung', '1652450573_xAtd3bD497hioAhp.png', '1652450573_b2wr5Tc7SYkMSPxb.png', 'Active', 'samsung', 'samsung', 'samsung', '2022-05-13 11:02:53', '2022-05-13 11:02:53'),
(6, 'Green Grass', '1652450704_0mt5DAXwoCLMu2Qm.png', '1652450704_FfNaQSvImaCdPwJZ.png', 'Active', 'green-grass', 'green-grass', 'green-grass', '2022-05-13 11:05:04', '2022-05-13 11:05:04'),
(7, 'Nike', '1652450899_vH62pK1n6UiwGuAK.png', '1652450899_ijJPrmqLVRflrD3z.png', 'Active', 'nike', 'nike', 'nike', '2022-05-13 11:08:19', '2022-05-13 11:08:19'),
(8, 'Philips', '1652452840_zZlN5zNYGt4recEt.png', '1652452840_o7xqvbQ3esTQbA9M.png', 'Active', 'philips', 'philips', 'philips', '2022-05-13 11:40:40', '2022-05-13 11:40:40'),
(9, 'Stearling', '1652452938_fgNoLcjiozU3KAJy.png', '1652452938_8j4DVrRAiCnVjHwW.png', 'Active', 'stearling', 'stearling', 'stearling', '2022-05-13 11:42:18', '2022-05-13 11:42:18'),
(10, 'Red', '1652453005_gJYAIxNOriajOBKA.png', '1652453005_XjGVXZMMa5QVPnku.png', 'Active', 'red', 'red', 'red', '2022-05-13 11:43:25', '2022-05-13 11:43:25'),
(11, 'Ray ban', '1652453042_aYyeRt1Ir1l3Kefd.png', '1652453042_AXJJxRF8yeV1538c.png', 'Active', 'ray-ban', 'ray-ban', 'ray-ban', '2022-05-13 11:44:02', '2022-05-13 11:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci,
  `icon` text COLLATE utf8mb4_unicode_ci,
  `type` enum('Default','Deleteable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Deleteable',
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `banner`, `icon`, `type`, `status`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Default category', NULL, NULL, 'Default', 'Active', 'default_category', 'Default category', 'Default description', '2022-05-10 09:34:40', '2022-05-10 09:34:40'),
(2, 'Women\'s', '1652198709_DkBrWuch2vv4VgEV.jpeg', '1652189714_BwsTRz4DrTqGw0LM.jpeg', 'Deleteable', 'Active', 'womens', 'women\'s', 'women\'s', '2022-05-10 10:35:14', '2022-05-10 13:05:09'),
(3, 'Men\'s', '1652197384_rubpxPCPnoYJRhoJ.png', '1652189747_f4hlfERBeZZ47Mhe.png', 'Deleteable', 'Active', 'mens', 'men\'s', 'men\'s', '2022-05-10 10:35:47', '2022-05-10 12:43:04'),
(4, 'Accesories', '1652198901_zhDAEGYFpDzbXaCT.png', '1652189781_rPA8dmYkZFyuHmBa.png', 'Deleteable', 'Active', 'accessories', 'accesories', 'accesories', '2022-05-10 10:36:21', '2022-05-10 13:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` mediumint(8) UNSIGNED NOT NULL,
  `state_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` mediumint(8) UNSIGNED NOT NULL,
  `country_code` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2014-01-01 01:01:01',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` tinyint(1) NOT NULL DEFAULT '1',
  `wikiDataId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Rapid API GeoDB Cities'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`, `state_code`, `country_id`, `country_code`, `latitude`, `longitude`, `created_at`, `updated_at`, `flag`, `wikiDataId`) VALUES
(102804, 'Abha', 2853, '14', 194, 'SA', '18.21639000', '42.50528000', '2019-10-05 19:17:54', '2019-10-05 19:17:54', 1, 'Q190948'),
(102805, 'Abqaiq', 2856, '04', 194, 'SA', '25.93402000', '49.66880000', '2019-10-05 19:17:54', '2019-10-05 19:17:54', 1, 'Q27177'),
(102806, 'Abū ‘Arīsh', 2858, '09', 194, 'SA', '16.96887000', '42.83251000', '2019-10-05 19:17:54', '2020-05-01 13:23:14', 1, 'Q2821731'),
(102807, 'Ad Darb', 2858, '09', 194, 'SA', '17.72285000', '42.25261000', '2019-10-05 19:17:54', '2019-10-05 19:17:54', 1, 'Q31868833'),
(102808, 'Ad Dawādimī', 2849, '01', 194, 'SA', '24.50772000', '44.39237000', '2019-10-05 19:17:54', '2020-05-01 13:23:14', 1, 'Q27258'),
(102809, 'Ad Dilam', 2849, '01', 194, 'SA', '23.99104000', '47.16181000', '2019-10-05 19:17:54', '2019-10-05 19:17:54', 1, 'Q31868886'),
(102810, 'Adh Dhibiyah', 2861, '05', 194, 'SA', '26.02700000', '43.15700000', '2019-10-05 19:17:54', '2019-10-05 19:17:54', 1, 'Q31868886'),
(102811, 'Afif', 2849, '01', 194, 'SA', '23.90650000', '42.91724000', '2019-10-05 19:17:54', '2019-10-05 19:17:54', 1, 'Q27139'),
(102812, 'Ain AlBaraha', 2849, '01', 194, 'SA', '24.75806000', '43.77389000', '2019-10-05 19:17:54', '2019-10-05 19:17:54', 1, 'Q27139'),
(102813, 'Al Arţāwīyah', 2849, '01', 194, 'SA', '26.50387000', '45.34813000', '2019-10-05 19:17:54', '2020-05-01 13:23:14', 1, 'Q31871949'),
(102814, 'Al Awjām', 2856, '04', 194, 'SA', '26.56324000', '49.94331000', '2019-10-05 19:17:54', '2020-05-01 13:23:14', 1, 'Q4164621'),
(102815, 'Al Bahah', 2859, '11', 194, 'SA', '20.01288000', '41.46767000', '2019-10-05 19:17:54', '2019-10-05 19:17:54', 1, 'Q27176'),
(102816, 'Al Baţţālīyah', 2856, '04', 194, 'SA', '25.43333000', '49.63333000', '2019-10-05 19:17:54', '2020-05-01 13:23:14', 1, 'Q31872122'),
(102817, 'Al Bukayrīyah', 2861, '05', 194, 'SA', '26.13915000', '43.65782000', '2019-10-05 19:17:54', '2020-05-01 13:23:14', 1, 'Q31872259'),
(102818, 'Al Fuwayliq', 2861, '05', 194, 'SA', '26.44360000', '43.25164000', '2019-10-05 19:17:54', '2019-10-05 19:17:54', 1, 'Q31872595'),
(102819, 'Al Hadā', 2850, '02', 194, 'SA', '21.36753000', '40.28694000', '2019-10-05 19:17:54', '2020-05-01 13:23:14', 1, 'Q4703935'),
(102820, 'Al Hufūf', 2856, '04', 194, 'SA', '25.36467000', '49.58764000', '2019-10-05 19:17:54', '2020-05-01 13:23:14', 1, 'Q27136'),
(102821, 'Al Jafr', 2856, '04', 194, 'SA', '25.37736000', '49.72154000', '2019-10-05 19:17:54', '2019-10-05 19:17:54', 1, 'Q31873138'),
(102822, 'Al Jarādīyah', 2858, '09', 194, 'SA', '16.57946000', '42.91240000', '2019-10-05 19:17:54', '2020-05-01 13:23:14', 1, 'Q4704123'),
(102823, 'Al Jubayl', 2856, '04', 194, 'SA', '27.01740000', '49.62251000', '2019-10-05 19:17:54', '2019-10-05 19:17:54', 1, 'Q27430'),
(102824, 'Al Jumūm', 2850, '02', 194, 'SA', '21.61694000', '39.69806000', '2019-10-05 19:17:54', '2020-05-01 13:23:14', 1, 'Q12185747'),
(102825, 'Al Khafjī', 2856, '04', 194, 'SA', '28.43905000', '48.49132000', '2019-10-05 19:17:54', '2020-05-01 13:23:14', 1, 'Q31873774'),
(102826, 'Al Kharj', 2849, '01', 194, 'SA', '24.15541000', '47.33457000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q2162128'),
(102827, 'Al Majāridah', 2853, '14', 194, 'SA', '19.12361000', '41.91111000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q31874518'),
(102828, 'Al Markaz', 2856, '04', 194, 'SA', '25.40000000', '49.73333000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q31874729'),
(102829, 'Al Mindak', 2859, '11', 194, 'SA', '20.15880000', '41.28337000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q31875144'),
(102830, 'Al Mithnab', 2861, '05', 194, 'SA', '25.86012000', '44.22228000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q31875144'),
(102831, 'Al Mubarraz', 2856, '04', 194, 'SA', '25.40768000', '49.59028000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q31875209'),
(102832, 'Al Munayzilah', 2856, '04', 194, 'SA', '25.38333000', '49.66667000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q31875344'),
(102833, 'Al Muwayh', 2850, '02', 194, 'SA', '22.43333000', '41.75829000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q31875487'),
(102834, 'Al Muţayrifī', 2856, '04', 194, 'SA', '25.47878000', '49.55824000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q31875523'),
(102835, 'Al Qaţīf', 2856, '04', 194, 'SA', '26.56542000', '50.00890000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q31875721'),
(102836, 'Al Qurayn', 2856, '04', 194, 'SA', '25.48333000', '49.60000000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q31875811'),
(102837, 'Al Qārah', 2856, '04', 194, 'SA', '25.41667000', '49.66667000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q31875851'),
(102838, 'Al Wajh', 2852, '07', 194, 'SA', '26.24551000', '36.45249000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q27251'),
(102839, 'Al-`Ula', 2851, '03', 194, 'SA', '26.60853000', '37.92316000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q27242'),
(102840, 'An Nimāş', 2853, '14', 194, 'SA', '19.14547000', '42.12009000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q31882853'),
(102841, 'Ar Rass', 2861, '05', 194, 'SA', '25.86944000', '43.49730000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q1878991'),
(102842, 'Arar', 2854, '08', 194, 'SA', '30.97531000', '41.03808000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q1878991'),
(102843, 'As Saffānīyah', 2856, '04', 194, 'SA', '27.97083000', '48.73000000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q31890141'),
(102844, 'As Sulayyil', 2849, '01', 194, 'SA', '20.46067000', '45.57792000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q27221'),
(102845, 'Ash Shafā', 2850, '02', 194, 'SA', '21.07210000', '40.31185000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q4804436'),
(102846, 'At Tūbī', 2856, '04', 194, 'SA', '26.55778000', '49.99167000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q31892461'),
(102847, 'Az Zulfī', 2849, '01', 194, 'SA', '26.29945000', '44.81542000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q31894563'),
(102848, 'Aţ Ţaraf', 2856, '04', 194, 'SA', '25.36232000', '49.72757000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q31895318'),
(102849, 'Badr Ḩunayn', 2851, '03', 194, 'SA', '23.78292000', '38.79047000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q27256'),
(102850, 'Buraydah', 2861, '05', 194, 'SA', '26.32599000', '43.97497000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q259253'),
(102851, 'Dammam', 2856, '04', 194, 'SA', '26.43442000', '50.10326000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q160320'),
(102852, 'Dhahran', 2856, '04', 194, 'SA', '26.28864000', '50.11396000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q268915'),
(102853, 'Duba', 2852, '07', 194, 'SA', '27.35134000', '35.69014000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q268915'),
(102854, 'Farasān', 2858, '09', 194, 'SA', '16.70222000', '42.11833000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q268915'),
(102855, 'Ghran', 2850, '02', 194, 'SA', '21.98027000', '39.36521000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q268915'),
(102856, 'Ha\'il', 2855, '06', 194, 'SA', '27.52188000', '41.69073000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q675568'),
(102857, 'Hafar Al-Batin', 2856, '04', 194, 'SA', '28.43279000', '45.97077000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q27400'),
(102858, 'Jeddah', 2850, '02', 194, 'SA', '21.54238000', '39.19797000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q374365'),
(102859, 'Jizan', 2858, '09', 194, 'SA', '16.88917000', '42.55111000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q27660'),
(102860, 'Julayjilah', 2856, '04', 194, 'SA', '25.50000000', '49.60000000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q32130900'),
(102861, 'Khamis Mushait', 2853, '14', 194, 'SA', '18.30000000', '42.73333000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q759381'),
(102862, 'Khobar', 2856, '04', 194, 'SA', '26.27944000', '50.20833000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q311266'),
(102863, 'Marāt', 2849, '01', 194, 'SA', '25.07064000', '45.45775000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q32139417'),
(102864, 'Mecca', 2850, '02', 194, 'SA', '21.42664000', '39.82563000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q5806'),
(102865, 'Medina', 2851, '03', 194, 'SA', '24.46861000', '39.61417000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q35484'),
(102866, 'Mislīyah', 2858, '09', 194, 'SA', '17.45988000', '42.55720000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q32140978'),
(102867, 'Mizhirah', 2858, '09', 194, 'SA', '16.82611000', '42.73333000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q32141037'),
(102868, 'Mulayjah', 2856, '04', 194, 'SA', '27.27103000', '48.42419000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q32141302'),
(102869, 'Najrān', 2860, '10', 194, 'SA', '17.49326000', '44.12766000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q27174'),
(102870, 'Qaisumah', 2856, '04', 194, 'SA', '28.31117000', '46.12729000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q3543647'),
(102871, 'Qal‘at Bīshah', 2853, '14', 194, 'SA', '20.00054000', '42.60520000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q27135'),
(102872, 'Qurayyat', 2857, '12', 194, 'SA', '31.33176000', '37.34282000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q2829401'),
(102873, 'Raḩīmah', 2856, '04', 194, 'SA', '26.70791000', '50.06194000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q2829401'),
(102874, 'Riyadh', 2849, '01', 194, 'SA', '24.68773000', '46.72185000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q3692'),
(102875, 'Rābigh', 2850, '02', 194, 'SA', '22.79856000', '39.03493000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q27274'),
(102876, 'Sabt Al Alayah', 2853, '14', 194, 'SA', '19.70000000', '41.91667000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q27274'),
(102877, 'Sakakah', 2857, '12', 194, 'SA', '29.96974000', '40.20641000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q27469'),
(102878, 'Sayhāt', 2856, '04', 194, 'SA', '26.48345000', '50.04849000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q2744182'),
(102879, 'Sulţānah', 2851, '03', 194, 'SA', '24.49258000', '39.58572000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q7636782'),
(102880, 'Sājir', 2849, '01', 194, 'SA', '25.18251000', '44.59964000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q32188864'),
(102881, 'Tabuk', 2852, '07', 194, 'SA', '28.39980000', '36.57151000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q244232'),
(102882, 'Tabālah', 2853, '14', 194, 'SA', '19.95000000', '42.40000000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q32189185'),
(102883, 'Tanūmah', 2861, '05', 194, 'SA', '27.10000000', '44.13333000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q32189686'),
(102884, 'Ta’if', 2850, '02', 194, 'SA', '21.27028000', '40.41583000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q182640'),
(102885, 'Tumayr', 2849, '01', 194, 'SA', '25.70347000', '45.86835000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q32190410'),
(102886, 'Turabah', 2850, '02', 194, 'SA', '21.21406000', '41.63310000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q32190427'),
(102887, 'Turaif', 2854, '08', 194, 'SA', '31.67252000', '38.66374000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q32190427'),
(102888, 'Tārūt', 2856, '04', 194, 'SA', '26.57330000', '50.04028000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q32190514'),
(102889, 'Umm Lajj', 2852, '07', 194, 'SA', '25.02126000', '37.26850000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q32190969'),
(102890, 'Umm as Sāhik', 2856, '04', 194, 'SA', '26.65361000', '49.91639000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q32190880'),
(102891, 'Wed Alnkil', 2861, '05', 194, 'SA', '25.42670000', '42.83430000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q32190880'),
(102892, 'Yanbu', 2851, '03', 194, 'SA', '24.08954000', '38.06180000', '2019-10-05 19:17:55', '2019-10-05 19:17:55', 1, 'Q466027'),
(102893, 'shokhaibٍ', 2849, '01', 194, 'SA', '24.49023000', '46.26871000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q466027'),
(102894, 'Şabyā', 2858, '09', 194, 'SA', '17.14950000', '42.62537000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q32219237'),
(102895, 'Şafwá', 2856, '04', 194, 'SA', '26.64970000', '49.95522000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q27234'),
(102896, 'Şuwayr', 2857, '12', 194, 'SA', '30.11713000', '40.38925000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q32219471'),
(102897, 'Şāmitah', 2858, '09', 194, 'SA', '16.59601000', '42.94435000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q4164177'),
(102898, 'Ţubarjal', 2857, '12', 194, 'SA', '30.49987000', '38.21603000', '2019-10-05 19:17:55', '2020-05-01 13:23:14', 1, 'Q4164177');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso2` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonecode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tld` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `native` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subregion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezones` text COLLATE utf8mb4_unicode_ci,
  `translations` text COLLATE utf8mb4_unicode_ci,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `emoji` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emojiU` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` tinyint(1) NOT NULL DEFAULT '1',
  `wikiDataId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Rapid API GeoDB Cities'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `iso3`, `iso2`, `phonecode`, `capital`, `currency`, `currency_symbol`, `tld`, `native`, `region`, `subregion`, `timezones`, `translations`, `latitude`, `longitude`, `emoji`, `emojiU`, `created_at`, `updated_at`, `flag`, `wikiDataId`) VALUES
(194, 'Saudi Arabia', 'SAU', 'SA', '966', 'Riyadh', 'SAR', '﷼', '.sa', 'العربية السعودية', 'Asia', 'Western Asia', '[{\"zoneName\":\"Asia\\/Riyadh\",\"gmtOffset\":10800,\"gmtOffsetName\":\"UTC+03:00\",\"abbreviation\":\"AST\",\"tzName\":\"Arabia Standard Time\"}]', '{\"br\":\"Arábia Saudita\",\"pt\":\"Arábia Saudita\",\"nl\":\"Saoedi-Arabië\",\"hr\":\"Saudijska Arabija\",\"fa\":\"عربستان سعودی\",\"de\":\"Saudi-Arabien\",\"es\":\"Arabia Saudí\",\"fr\":\"Arabie Saoudite\",\"ja\":\"サウジアラビア\",\"it\":\"Arabia Saudita\"}', '25.00000000', '45.00000000', '🇸🇦', 'U+1F1F8 U+1F1E6', '2018-07-20 20:11:03', '2021-02-20 14:24:49', 1, 'Q851');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT '0.00',
  `discount_type` enum('Amount','Percent') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Amount',
  `max_discount_amount` decimal(8,2) NOT NULL DEFAULT '0.00',
  `min_shopping_amount` decimal(8,2) NOT NULL DEFAULT '0.00',
  `type` enum('Cart','Product','Category') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Cart',
  `start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_ids` text COLLATE utf8mb4_unicode_ci,
  `product_ids` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `code`, `discount`, `discount_type`, `max_discount_amount`, `min_shopping_amount`, `type`, `start`, `end`, `category_ids`, `product_ids`, `created_at`, `updated_at`) VALUES
(1, 'New Year Celebration', 'newyear-2022', '22.00', 'Percent', '1000.00', '100.00', 'Category', '2022-05-14', '2022-05-31', '[\"category-3\"]', NULL, '2022-05-13 11:46:14', '2022-05-13 11:46:14'),
(2, 'Cyber Monday 2022', 'cyber22', '12.00', 'Percent', '2000.00', '100.00', 'Cart', '2022-07-01', '2022-07-31', NULL, NULL, '2022-05-13 11:47:58', '2022-05-13 11:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_logo_white` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_logo_black` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_copyright_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci,
  `mail_type` enum('SMTP','GMAIL') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_encryption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `app_name`, `app_logo_white`, `app_logo_black`, `app_phone`, `app_email`, `app_address`, `app_copyright_text`, `seo_title`, `seo_description`, `seo_keywords`, `mail_type`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encryption`, `mail_address`, `mail_from_name`, `created_at`, `updated_at`) VALUES
(1, '5dots | E-commerce', '1652453644_PAaWwbrmnQy7Af4G.png', '1652453644_IJbqwqDkVcLeKoDy.png', '01911111111', 'laravel@ecom.com', 'This is demo address', 'This is demo copyright text', 'Laravel Ecommerce', 'Laravel Ecommerce', 'Laravel, Ecommerce', 'SMTP', 'smtp.mailtrap.io', '2525', 'bcbb5a36522425', '04c13fb15063a9', 'tls', 'laravel@ecom.com', 'Laravel Ecommerce', '2022-05-10 09:34:40', '2022-05-13 11:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_02_01_030511_create_payment_invoices_table', 1),
(6, '2021_12_22_053039_create_categories_table', 1),
(7, '2021_12_22_064753_create_subcategories_table', 1),
(8, '2021_12_22_090930_create_coupons_table', 1),
(9, '2021_12_23_074406_create_brands_table', 1),
(10, '2021_12_31_034847_create_sellers_table', 1),
(11, '2021_12_31_120810_create_social_configs_table', 1),
(12, '2021_12_31_120832_create_general_settings_table', 1),
(13, '2022_01_13_075341_create_attributes_table', 1),
(14, '2022_04_02_110929_create_sliders_table', 1),
(15, '2022_04_03_080520_create_products_table', 1),
(16, '2022_04_03_080549_create_product_images_table', 1),
(17, '2022_05_08_100031_create_subscriptions_table', 1),
(18, '2022_05_08_100639_create_subscription_options_table', 1),
(19, '2022_05_11_105008_create_shops_table', 2),
(27, '2022_05_17_101032_create_cities_table', 3),
(28, '2022_05_17_111404_create_countries_table', 3),
(30, '2022_05_17_100953_create_states_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_invoices`
--

CREATE TABLE `payment_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `InvoiceId` bigint(20) UNSIGNED NOT NULL,
  `InvoiceStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InvoiceValue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InvoiceDisplayValue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionId` bigint(20) UNSIGNED NOT NULL,
  `TransactionStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PaymentGateway` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PaymentId` bigint(20) UNSIGNED NOT NULL,
  `CardNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `thumbnail` text COLLATE utf8mb4_unicode_ci,
  `pdf` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `purchase_price` decimal(8,2) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `discount_type` enum('Percent','Flat') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Flat',
  `discount` int(11) DEFAULT NULL,
  `shipping_cost` decimal(8,2) DEFAULT NULL,
  `shipping_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `isCashAvailable` tinyint(1) NOT NULL DEFAULT '1',
  `tax` decimal(8,2) DEFAULT NULL,
  `attributes` text COLLATE utf8mb4_unicode_ci,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_image` text COLLATE utf8mb4_unicode_ci,
  `is_draft` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `seller_id`, `category_id`, `sub_category_id`, `brand_id`, `name`, `slug`, `description`, `thumbnail`, `pdf`, `status`, `purchase_price`, `price`, `discount_type`, `discount`, `shipping_cost`, `shipping_days`, `unit`, `min`, `max`, `quantity`, `tags`, `isCashAvailable`, `tax`, `attributes`, `meta_title`, `meta_description`, `meta_image`, `is_draft`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 1, 1, 'Micro Form Bag', 'micro-form-bag', '<p>Meet your new go-to going-out bag. Handcrafted from premium Italian leather, the Micro Form Bag features a button-snap closure, an adjustable strap, and a polished, streamlined shape. Plus,</p>\r\n\r\n<p>it&rsquo;s micro but mighty, which means it can hold all of your essentials&mdash;like your phone, keys, wallet, and lipstick&mdash;without weighing you down. Turns out the best things really do come in small packages.</p>', '1654207763_GXpwcwuuGQLnwToB.jpg', '1652460340_jfLc0doOLpkoIekT.pdf', 'Active', '200.00', '230.00', 'Percent', 10, '30.00', '7', 'Piece', 1, 10, 20, 'bag,womens', 1, '15.00', '[\"[\\\"2\\\",\\\"Red\\\"]\",\"[\\\"2\\\",\\\"Green\\\"]\",\"[\\\"2\\\",\\\"Blue\\\"]\",\"[\\\"1\\\",\\\"medium\\\"]\",\"[\\\"1\\\",\\\"Large\\\"]\"]', 'Micro Form Bag', 'Meet your new go-to going-out bag. Handcrafted from premium Italian leather, the Micro Form Bag features a button-', '1652460340_llBcwmRCnm4C8JLh.jpg', 0, '2022-05-13 13:45:40', '2022-06-02 19:09:23'),
(3, 3, 2, 5, 3, 'Ina Moonen', 'ina-moonen', '<p>Vero deserunt mollit.&nbsp;Grammatical mistakes can be easy to make. But fear not! Our team at Grammarly has compiled a handy list of common grammatical errors to help make your writing accurate,</p>', '1653853215_QYoLPs9rwpRsNCOP.jpeg', NULL, 'Active', '400.00', '500.00', 'Flat', 100, '30.00', '7', 'Quantity', 4, 61, 980, 'Quam laborum volupta', 0, '15.00', NULL, 'Aliquam rerum et fac', 'Quia excepteur ipsam', NULL, 0, '2022-05-29 16:40:15', '2022-05-29 16:40:15'),
(4, 7, 2, 9, 8, 'Womens Mordern Bag', 'womens-mordern-bag', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable.</p>\r\n\r\n<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>\r\n\r\n<p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '1654208611_S17jU87tWfrfbNW6.jpg', NULL, 'Active', '500.00', '400.00', 'Percent', 12, '30.00', '7', 'Quantity', 2, 10, 20, 'bags', 1, '15.00', '[\"[\\\"2\\\",\\\"Green\\\"]\",\"[\\\"2\\\",\\\"Blue\\\"]\",\"[\\\"1\\\",\\\"medium\\\"]\",\"[\\\"1\\\",\\\"Large\\\"]\"]', 'There are many variations of passages', 'There are many variations of passages there are many variations of passages.', NULL, 0, '2022-06-02 19:23:31', '2022-06-02 19:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1652460340_sf9hTL0tSc1Tbuqc.jpg', '2022-05-13 13:45:40', '2022-05-13 13:45:40'),
(2, 1, '1652460340_rCuNGUGtgM7o3JQc.jpg', '2022-05-13 13:45:40', '2022-05-13 13:45:40'),
(8, 3, '1653853215_PscaIXIl0fTNbPHm.png', '2022-05-29 16:40:15', '2022-05-29 16:40:15'),
(9, 3, '1653853215_qITVHYUdG5uMw4fo.png', '2022-05-29 16:40:15', '2022-05-29 16:40:15'),
(10, 3, '1653853215_FTLIYBVUDjPekOtn.png', '2022-05-29 16:40:16', '2022-05-29 16:40:16'),
(11, 3, '1653853216_tUUkaRBfWiQ6wezV.png', '2022-05-29 16:40:16', '2022-05-29 16:40:16'),
(12, 4, '1654208611_b96gn9tJxVGzzrcn.jpg', '2022-06-02 19:23:31', '2022-06-02 19:23:31'),
(13, 4, '1654208611_3I3RvzQ3300rxde8.jpg', '2022-06-02 19:23:31', '2022-06-02 19:23:31'),
(14, 4, '1654208611_APTlRkXCyWiOKG6P.jpg', '2022-06-02 19:23:31', '2022-06-02 19:23:31'),
(15, 4, '1654208611_AhZMG8L8g9Ywhdc4.jpg', '2022-06-02 19:23:31', '2022-06-02 19:23:31'),
(16, 4, '1654208611_1Zkt0d7QhblnHHPs.jpg', '2022-06-02 19:23:31', '2022-06-02 19:23:31'),
(17, 4, '1654208611_gfKyP6vxQ8QBS6MO.jpg', '2022-06-02 19:23:31', '2022-06-02 19:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `user_id`, `shop_name`, `shop_logo`, `primary_phone`, `secondary_phone`, `email`, `shop_location`, `shop_address`, `city`, `country`, `created_at`, `updated_at`) VALUES
(1, 2, 'Demoshop1', NULL, '0123456789', '01282932990', 'seller-1@demo.com', 'Khobar City', 'King Abdulaziz Road-123', 'Dammam', NULL, '2022-05-10 09:34:40', '2022-05-10 09:34:40'),
(2, 3, 'Demoshop2', NULL, '01234567879', '01282932968', 'seller-2@demo.com', 'Khobar City', 'King Abdulaziz Road-125', 'Dammam', NULL, '2022-05-10 09:34:40', '2022-05-10 09:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_logo` text COLLATE utf8mb4_unicode_ci,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `user_id`, `subscription_id`, `shop_name`, `shop_logo`, `state`, `city`, `postal_code`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 2, 'ahmmed', '1652513769_JPC7orDbWs1DUJl5.jpeg', 'Eastern Provence', 'Dammam', '32437', '3161 King Abdulaziz Rd, Ar Rabiyah, Dammam', 'Inactive', '2022-05-14 04:36:09', '2022-05-14 04:36:09'),
(2, 7, 3, 'Brendan Sawyer', '1652518971_1mc8wHrVegTqB4sP.png', 'Eastern Provence', 'Dammam', '57242', 'Et pariatur Obcaeca', 'Inactive', '2022-05-14 06:02:51', '2022-05-14 06:02:51'),
(3, 7, 2, 'Chadwick Henderson', '1652520335_S9oXTLbHOn36c8Tt.png', 'Eastern Provence', 'Dammam', '20788', 'Esse voluptatem adip', 'Inactive', '2022-05-14 06:25:35', '2022-05-14 06:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `category_id`, `title`, `banner`, `status`, `created_at`, `updated_at`) VALUES
(4, 2, 'Womens Collection 22', '1652454818_x6SDGJiC0rQkpopm.jpg', 'Active', '2022-05-13 12:13:39', '2022-05-13 12:13:51'),
(5, 4, 'Home Appliance', '1652458143_V1MYOcImzryxjPSM.jpg', 'Active', '2022-05-13 13:09:03', '2022-05-13 13:10:20'),
(6, 3, 'Mens Summer 22', '1652459843_jBkmVHLQ3OOK7opp.jpg', 'Active', '2022-05-13 13:37:23', '2022-05-13 13:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `social_configs`
--

CREATE TABLE `social_configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('Facebook','Google','Twitter') COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_secret` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_configs`
--

INSERT INTO `social_configs` (`id`, `type`, `app_id`, `app_secret`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', '12345', '12345', '2022-05-10 09:34:40', '2022-05-10 09:34:40'),
(2, 'Google', '12345', '12345', '2022-05-10 09:34:40', '2022-05-10 09:34:40'),
(3, 'Twitter', '12345', '12345', '2022-05-10 09:34:40', '2022-05-10 09:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` mediumint(8) UNSIGNED NOT NULL,
  `country_code` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fips_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` tinyint(1) NOT NULL DEFAULT '1',
  `wikiDataId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Rapid API GeoDB Cities'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `country_code`, `fips_code`, `iso2`, `latitude`, `longitude`, `created_at`, `updated_at`, `flag`, `wikiDataId`) VALUES
(2849, 'Riyadh Region', 194, 'SA', '10', '01', '22.75543850', '46.20915470', '2019-10-05 17:48:50', '2020-12-21 15:50:25', 1, 'Q1249255'),
(2850, 'Makkah Region', 194, 'SA', '14', '02', '21.52355840', '41.91964710', '2019-10-05 17:48:50', '2020-12-21 15:50:25', 1, 'Q234167'),
(2851, 'Al Madinah Region', 194, 'SA', '05', '03', '24.84039770', '39.32062410', '2019-10-05 17:48:50', '2020-12-21 15:50:25', 1, 'Q236027'),
(2852, 'Tabuk Region', 194, 'SA', '19', '07', '28.24533350', '37.63866220', '2019-10-05 17:48:50', '2020-12-21 15:50:25', 1, 'Q1315953'),
(2853, '\'Asir Region', 194, 'SA', '11', '14', '19.09690620', '42.86378750', '2019-10-05 17:48:50', '2020-12-21 15:50:25', 1, 'Q779855'),
(2854, 'Northern Borders Region', 194, 'SA', '15', '08', '30.07991620', '42.86378750', '2019-10-05 17:48:50', '2020-12-21 15:50:25', 1, 'Q201781'),
(2855, 'Ha\'il Region', 194, 'SA', '13', '06', '27.70761430', '41.91964710', '2019-10-05 17:48:50', '2020-12-21 15:50:25', 1, 'Q243656'),
(2856, 'Eastern Province', 194, 'SA', '06', '04', NULL, NULL, '2019-10-05 17:48:50', '2019-10-05 17:48:50', 1, 'Q953508'),
(2857, 'Al Jawf Region', 194, 'SA', '20', '12', '29.88735600', '39.32062410', '2019-10-05 17:48:50', '2020-12-21 15:50:25', 1, 'Q1471266'),
(2858, 'Jizan Region', 194, 'SA', '17', '09', '17.17381760', '42.70761070', '2019-10-05 17:48:50', '2020-12-21 15:50:25', 1, 'Q269973'),
(2859, 'Al Bahah Region', 194, 'SA', '02', '11', '20.27227390', '41.44125100', '2019-10-05 17:48:50', '2020-12-21 15:50:25', 1, 'Q852774'),
(2860, 'Najran Region', 194, 'SA', '16', '10', '18.35146640', '45.60071080', '2019-10-05 17:48:50', '2020-12-21 15:50:25', 1, 'Q464718'),
(2861, 'Al-Qassim Region', 194, 'SA', '08', '05', '26.20782600', '43.48373800', '2019-10-05 17:48:50', '2020-12-21 15:50:25', 1, 'Q1105411');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci,
  `icon` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `banner`, `icon`, `status`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 3, 'Men\'s Clothes', '1652189840_suxL1gFOCRabHnq1.png', '1652189840_alQLf2puWcVSuexE.png', 'Active', 'men\'s-clothes', 'men\'s-clothes', 'men\'s-clothes', '2022-05-10 10:37:20', '2022-05-10 10:37:20'),
(2, 3, 'Men\'s Footware', '1652189903_DCq3WcZQWm5Si3VE.png', '1652189903_kB8XFvHdfSueTRSk.png', 'Active', 'men\'s-footware', 'men\'s-footware', 'men\'s-footware', '2022-05-10 10:38:24', '2022-05-10 10:38:24'),
(3, 3, 'Men\'s Sportsware', '1652190003_Uog2uqYOfHVuDwPG.png', '1652190003_FrXeswJCIVfr2q44.png', 'Active', 'men\'s-sportsware', 'Men\'s Sportsware', 'Men\'s Sportsware', '2022-05-10 10:40:04', '2022-05-10 10:40:04'),
(4, 3, 'Mens Watches', '1652190040_DQzciU3FfMHXdF2H.png', '1652190040_5IfLASWv9e9IaVyu.png', 'Active', 'mens-watches', 'mens-watches', 'mens-watches', '2022-05-10 10:40:40', '2022-05-10 10:40:40'),
(5, 2, 'Women\'s Clothes', '1652191328_cOJN7sNJoqhudZW3.jpeg', '1652191328_McwGv3vnZ21uQYgk.png', 'Active', 'women\'s-clothes', 'women\'s-clothes', 'women\'s-clothes', '2022-05-10 11:02:08', '2022-05-10 11:02:08'),
(6, 2, 'Women\'s Watches', '1652192523_G49KhVsH9qURICao.png', '1652192523_okPrWIpm6gyunXzS.png', 'Active', 'women\'s-watches', 'women\'s-watches', 'women\'s-watches', '2022-05-10 11:22:04', '2022-05-10 11:22:04'),
(7, 2, 'Womens\'s Footware', '1652192594_zLJ6Q6d1COdSkcH7.png', '1652192594_ama2gYFNbJb6yF5F.png', 'Active', 'womens\'s-footware', 'womens\'s-footware', 'womens\'s-footware', '2022-05-10 11:23:14', '2022-05-10 11:23:14'),
(8, 2, 'Women\'s Sportsware', '1652192715_NJcehUinh8wwXL2Q.png', '1652192715_9Uovx689ToQNhYmC.png', 'Active', 'women\'s-sportsware', 'women\'s-sportsware', 'women\'s-sportsware', '2022-05-10 11:25:15', '2022-05-10 11:25:15'),
(9, 4, 'Bags', '1652201969_vFDLc2bA9plLeW7a.png', '1652201969_SEZVM32wkwT3hiuR.png', 'Active', 'bags', 'bags', 'bags', '2022-05-10 13:59:30', '2022-05-10 13:59:30'),
(10, 4, 'Jewellary', '1652202026_JpNAp9fvDsPkUOEo.png', '1652202026_vffWWtPDLgEo0I60.png', 'Active', 'jewellary', 'jewellary', 'jewellary', '2022-05-10 14:00:26', '2022-05-10 14:00:26'),
(11, 4, 'Makeup', '1652202086_VwUe09KyBL8ojCDc.png', '1652202086_y2mnPovIoJIrccSB.png', 'Active', 'makeup', 'Makeup', 'Makeup', '2022-05-10 14:01:26', '2022-05-10 14:01:26'),
(12, 4, 'Perfumes', '1652202146_TBPGmrylHbBSMN0U.png', '1652202146_oEv01ltEOSn0o4vE.png', 'Active', 'perfumes', 'perfumes', 'perfumes', '2022-05-10 14:02:26', '2022-05-10 14:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '30',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `name`, `price`, `days`, `created_at`, `updated_at`) VALUES
(1, 'Basic', '960.00', '30', '2022-05-10 09:34:40', '2022-05-10 09:34:40'),
(2, 'Silver', '2880.00', '90', '2022-05-10 09:34:40', '2022-05-10 09:34:40'),
(3, 'Gold', '5570.00', '180', '2022-05-10 09:34:40', '2022-05-10 09:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_options`
--

CREATE TABLE `subscription_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscription_options`
--

INSERT INTO `subscription_options` (`id`, `subscription_id`, `option`, `created_at`, `updated_at`) VALUES
(40, 1, 'Marketing', '2022-05-17 04:24:06', '2022-05-17 04:24:06'),
(41, 1, 'Storage', '2022-05-17 04:24:06', '2022-05-17 04:24:06'),
(42, 1, 'Packaging', '2022-05-17 04:24:06', '2022-05-17 04:24:06'),
(43, 1, 'Shipping', '2022-05-17 04:24:06', '2022-05-17 04:24:06'),
(44, 2, '1 Months free', '2022-05-17 04:24:06', '2022-05-17 04:24:06'),
(45, 2, 'Marketing', '2022-05-17 04:24:06', '2022-05-17 04:24:06'),
(46, 2, 'Storage', '2022-05-17 04:24:06', '2022-05-17 04:24:06'),
(47, 2, 'Packaging', '2022-05-17 04:24:06', '2022-05-17 04:24:06'),
(48, 2, 'Shipping', '2022-05-17 04:24:06', '2022-05-17 04:24:06'),
(49, 3, '3 Months Free', '2022-05-17 04:24:06', '2022-05-17 04:24:06'),
(50, 3, 'Marketing', '2022-05-17 04:24:06', '2022-05-17 04:24:06'),
(51, 3, 'Storage', '2022-05-17 04:24:06', '2022-05-17 04:24:06'),
(52, 3, 'Packaging', '2022-05-17 04:24:06', '2022-05-17 04:24:06'),
(53, 3, 'Shipping', '2022-05-17 04:24:06', '2022-05-17 04:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `role` enum('Admin','Seller','Customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Customer',
  `phone_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00',
  `due_balance` decimal(10,2) NOT NULL DEFAULT '0.00',
  `address` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `role`, `phone_1`, `phone_2`, `balance`, `due_balance`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super admin', 'admin@admin.com', '2022-05-10 09:34:40', '$2y$10$5.A1XuYdC9GUHhbEoSJcS.VZcJipCNwVAGpDiUUT4grj38pj/bCHG', NULL, 'Admin', NULL, NULL, '0.00', '0.00', NULL, NULL, '2022-05-10 09:34:40', '2022-05-10 09:34:40'),
(2, 'Mr. Seller-1', 'seller-1@demo.com', '2022-05-10 09:34:40', '$2y$10$zFecEL4gRvO2DyepowyMuOsAPwcAdY/Yf72DfIuZCSfnjfocjZePe', NULL, 'Seller', NULL, NULL, '0.00', '0.00', NULL, NULL, '2022-05-10 09:34:40', '2022-05-10 09:34:40'),
(3, 'Mr. Seller-2', 'seller-2@demo.com', '2022-05-10 09:34:40', '$2y$10$.zeDRaDQVm2uYB4DCP.nfugmBz/V9bpM8IZmMkAUcnlB7UvfYtAvu', NULL, 'Seller', NULL, NULL, '0.00', '0.00', NULL, NULL, '2022-05-10 09:34:40', '2022-05-10 09:34:40'),
(4, 'Mr. Customer', 'customer@customer.com', '2022-05-10 09:34:40', '$2y$10$.BvJLQ1wagWSLiddkoknXOutCL45u4brwytPzyyCfv.iWq5G9aCZy', NULL, 'Customer', NULL, NULL, '0.00', '0.00', NULL, NULL, '2022-05-10 09:34:40', '2022-05-10 09:34:40'),
(5, 'Mr. Customer 2', 'customer2@customer.com', '2022-05-10 09:34:40', '$2y$10$NxHudXJ6y9DGPIPdzet45OvfGDoHGy0KWKkTv4ZM0dg9.iQsBrHW2', NULL, 'Customer', NULL, NULL, '0.00', '0.00', NULL, NULL, '2022-05-10 09:34:40', '2022-05-10 09:34:40'),
(6, 'Mr. Customer 3', 'customer3@customer.com', '2022-05-10 09:34:40', '$2y$10$hHa/jP5ES831nKMp82IOAO7iDlIWX4tS1aYXq95CMRCozmp7jXFzO', NULL, 'Customer', NULL, NULL, '0.00', '0.00', NULL, NULL, '2022-05-10 09:34:40', '2022-05-10 09:34:40'),
(7, 'Rasel Ahmmed', 'rahmmed.info@gmail.com', NULL, '$2y$10$UMUA6Jti75QLqLEyDhic2un3pKyS8e1K9rY9DTqd5O9YQLivJhQsK', NULL, 'Seller', '72868132', NULL, '0.00', '0.00', '3161 King Abdulaziz Rd, Ar Rabiyah, Dammam', NULL, '2022-05-14 04:36:09', '2022-05-14 04:36:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_test_ibfk_1` (`state_id`),
  ADD KEY `cities_test_ibfk_2` (`country_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_invoices`
--
ALTER TABLE `payment_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_seller_id_foreign` (`seller_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sellers_user_id_foreign` (`user_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_category_id_foreign` (`category_id`);

--
-- Indexes for table `social_configs`
--
ALTER TABLE `social_configs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_configs_type_unique` (`type`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_region` (`country_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_options`
--
ALTER TABLE `subscription_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102899;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `payment_invoices`
--
ALTER TABLE `payment_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_configs`
--
ALTER TABLE `social_configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2862;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscription_options`
--
ALTER TABLE `subscription_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `cities_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sellers`
--
ALTER TABLE `sellers`
  ADD CONSTRAINT `sellers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
