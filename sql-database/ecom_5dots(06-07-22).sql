-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 06, 2022 at 01:54 PM
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
(1, 'Size', '[\"Sm\",\"Md\",\"Lg\",\"Xl\",\"2xl\"]', '2022-06-12 07:46:59', '2022-06-20 19:23:30'),
(2, 'Color', '[\"Red\",\"Green\",\"White\",\"Black\",\"Blue\",\"Yellow\"]', '2022-06-12 07:47:33', '2022-06-20 19:23:05');

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
(2, 'BabyPlus', '1655069130_0l7XOQF6USGB2dPH.png', NULL, 'Active', 'babyplus', 'BabyPlus', 'BabyPlus Brand', '2022-06-12 18:25:30', '2022-06-12 18:25:30'),
(3, 'Black Decker', '1655069182_I8v1YX1tAgtTWVGU.png', NULL, 'Active', 'black-decker', 'Black Decker', 'Black Decker Brand', '2022-06-12 18:26:22', '2022-06-12 18:26:22'),
(4, 'Nike', '1655070021_RO141AQGvym0D1tM.png', NULL, 'Active', 'nike', 'nike', 'Nike Brand', '2022-06-12 18:40:21', '2022-06-12 18:40:21'),
(5, 'Ajmal', '1655761730_JiTG17eB67E9mqIB.png', NULL, 'Active', 'ajmal', 'ajmal', 'ajmal', '2022-06-20 18:48:50', '2022-06-20 18:48:50'),
(6, 'Calvin Klein', '1655762317_R2JnJmLmRrJrfeHT.png', NULL, 'Active', 'calvin-klein', 'Calvin Klein CK One for Unisex, Eau de Toilette, 200 ml', 'Calvin Klein CK One for Unisex, Eau de Toilette, 200 ml', '2022-06-20 18:58:37', '2022-06-20 18:58:37'),
(7, 'Boss', '1655762353_ocOEIuPzQW49pV8Y.png', NULL, 'Active', 'boss', 'booss', 'booss', '2022-06-20 18:59:13', '2022-06-20 18:59:13'),
(8, 'Johnson\'s', '1655765474_PE5HhnWTIc0niC2t.png', NULL, 'Active', 'johnson\'s', 'Johnson\'s', 'Johnson\'s', '2022-06-20 19:51:14', '2022-06-20 19:51:14'),
(9, 'ROCF ROSSINI', '1655766576_bQkfKSkjsctIiifu.png', NULL, 'Active', 'rocf-rossini', 'ROCF ROSSINI', 'ROCF ROSSINI', '2022-06-20 20:09:36', '2022-06-20 20:09:36'),
(10, 'Reyban', '1655766598_5bg91PyGsv9g090E.png', NULL, 'Active', 'reyban', 'Reyban', 'Reyban', '2022-06-20 20:09:58', '2022-06-20 20:09:58');

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
(1, 'Default category', NULL, NULL, 'Default', 'Active', 'default_category', 'Default category', 'Default description', '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(2, 'Womens', '1655024841_NtKzdOLleOTUBfJE.png', NULL, 'Deleteable', 'Active', 'womens', 'Womens', 'Womens Category', '2022-06-12 06:07:22', '2022-06-12 06:07:22'),
(3, 'Mens', '1655024866_iEICdJPUHtnVUTIv.png', NULL, 'Deleteable', 'Active', 'mens', 'Mens Category', 'Mens Category', '2022-06-12 06:07:47', '2022-06-12 06:07:47'),
(4, 'Accessories', '1655024917_oB3n5gnZFwz4cAWV.jpg', NULL, 'Deleteable', 'Active', 'accessories', 'Accessories', 'Accessories', '2022-06-12 06:08:37', '2022-06-12 06:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `state_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` decimal(8,2) NOT NULL,
  `longitude` decimal(8,2) NOT NULL,
  `flag` double(8,2) UNSIGNED NOT NULL,
  `wikiDataId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`, `state_code`, `country_id`, `country_code`, `latitude`, `longitude`, `flag`, `wikiDataId`, `created_at`, `updated_at`) VALUES
(102804, 'Abha', 2853, '14', 194, 'SA', '18.22', '42.51', 1.00, 'Q190948', '2019-10-05 19:17:54', '2019-10-05 19:17:54'),
(102805, 'Abqaiq', 2856, '04', 194, 'SA', '25.93', '49.67', 1.00, 'Q27177', '2019-10-05 19:17:54', '2019-10-05 19:17:54'),
(102806, 'Abū ‘Arīsh', 2858, '09', 194, 'SA', '16.97', '42.83', 1.00, 'Q2821731', '2019-10-05 19:17:54', '2020-05-01 13:23:14'),
(102807, 'Ad Darb', 2858, '09', 194, 'SA', '17.72', '42.25', 1.00, 'Q31868833', '2019-10-05 19:17:54', '2019-10-05 19:17:54'),
(102808, 'Ad Dawādimī', 2849, '01', 194, 'SA', '24.51', '44.39', 1.00, 'Q27258', '2019-10-05 19:17:54', '2020-05-01 13:23:14'),
(102809, 'Ad Dilam', 2849, '01', 194, 'SA', '23.99', '47.16', 1.00, 'Q31868886', '2019-10-05 19:17:54', '2019-10-05 19:17:54'),
(102810, 'Adh Dhibiyah', 2861, '05', 194, 'SA', '26.03', '43.16', 1.00, 'Q31868886', '2019-10-05 19:17:54', '2019-10-05 19:17:54'),
(102811, 'Afif', 2849, '01', 194, 'SA', '23.91', '42.92', 1.00, 'Q27139', '2019-10-05 19:17:54', '2019-10-05 19:17:54'),
(102812, 'Ain AlBaraha', 2849, '01', 194, 'SA', '24.76', '43.77', 1.00, 'Q27139', '2019-10-05 19:17:54', '2019-10-05 19:17:54'),
(102813, 'Al Arţāwīyah', 2849, '01', 194, 'SA', '26.50', '45.35', 1.00, 'Q31871949', '2019-10-05 19:17:54', '2020-05-01 13:23:14'),
(102814, 'Al Awjām', 2856, '04', 194, 'SA', '26.56', '49.94', 1.00, 'Q4164621', '2019-10-05 19:17:54', '2020-05-01 13:23:14'),
(102815, 'Al Bahah', 2859, '11', 194, 'SA', '20.01', '41.47', 1.00, 'Q27176', '2019-10-05 19:17:54', '2019-10-05 19:17:54'),
(102816, 'Al Baţţālīyah', 2856, '04', 194, 'SA', '25.43', '49.63', 1.00, 'Q31872122', '2019-10-05 19:17:54', '2020-05-01 13:23:14'),
(102817, 'Al Bukayrīyah', 2861, '05', 194, 'SA', '26.14', '43.66', 1.00, 'Q31872259', '2019-10-05 19:17:54', '2020-05-01 13:23:14'),
(102818, 'Al Fuwayliq', 2861, '05', 194, 'SA', '26.44', '43.25', 1.00, 'Q31872595', '2019-10-05 19:17:54', '2019-10-05 19:17:54'),
(102819, 'Al Hadā', 2850, '02', 194, 'SA', '21.37', '40.29', 1.00, 'Q4703935', '2019-10-05 19:17:54', '2020-05-01 13:23:14'),
(102820, 'Al Hufūf', 2856, '04', 194, 'SA', '25.36', '49.59', 1.00, 'Q27136', '2019-10-05 19:17:54', '2020-05-01 13:23:14'),
(102821, 'Al Jafr', 2856, '04', 194, 'SA', '25.38', '49.72', 1.00, 'Q31873138', '2019-10-05 19:17:54', '2019-10-05 19:17:54'),
(102822, 'Al Jarādīyah', 2858, '09', 194, 'SA', '16.58', '42.91', 1.00, 'Q4704123', '2019-10-05 19:17:54', '2020-05-01 13:23:14'),
(102823, 'Al Jubayl', 2856, '04', 194, 'SA', '27.02', '49.62', 1.00, 'Q27430', '2019-10-05 19:17:54', '2019-10-05 19:17:54'),
(102824, 'Al Jumūm', 2850, '02', 194, 'SA', '21.62', '39.70', 1.00, 'Q12185747', '2019-10-05 19:17:54', '2020-05-01 13:23:14'),
(102825, 'Al Khafjī', 2856, '04', 194, 'SA', '28.44', '48.49', 1.00, 'Q31873774', '2019-10-05 19:17:54', '2020-05-01 13:23:14'),
(102826, 'Al Kharj', 2849, '01', 194, 'SA', '24.16', '47.33', 1.00, 'Q2162128', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102827, 'Al Majāridah', 2853, '14', 194, 'SA', '19.12', '41.91', 1.00, 'Q31874518', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102828, 'Al Markaz', 2856, '04', 194, 'SA', '25.40', '49.73', 1.00, 'Q31874729', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102829, 'Al Mindak', 2859, '11', 194, 'SA', '20.16', '41.28', 1.00, 'Q31875144', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102830, 'Al Mithnab', 2861, '05', 194, 'SA', '25.86', '44.22', 1.00, 'Q31875144', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102831, 'Al Mubarraz', 2856, '04', 194, 'SA', '25.41', '49.59', 1.00, 'Q31875209', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102832, 'Al Munayzilah', 2856, '04', 194, 'SA', '25.38', '49.67', 1.00, 'Q31875344', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102833, 'Al Muwayh', 2850, '02', 194, 'SA', '22.43', '41.76', 1.00, 'Q31875487', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102834, 'Al Muţayrifī', 2856, '04', 194, 'SA', '25.48', '49.56', 1.00, 'Q31875523', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102835, 'Al Qaţīf', 2856, '04', 194, 'SA', '26.57', '50.01', 1.00, 'Q31875721', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102836, 'Al Qurayn', 2856, '04', 194, 'SA', '25.48', '49.60', 1.00, 'Q31875811', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102837, 'Al Qārah', 2856, '04', 194, 'SA', '25.42', '49.67', 1.00, 'Q31875851', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102838, 'Al Wajh', 2852, '07', 194, 'SA', '26.25', '36.45', 1.00, 'Q27251', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102839, 'Al-`Ula', 2851, '03', 194, 'SA', '26.61', '37.92', 1.00, 'Q27242', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102840, 'An Nimāş', 2853, '14', 194, 'SA', '19.15', '42.12', 1.00, 'Q31882853', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102841, 'Ar Rass', 2861, '05', 194, 'SA', '25.87', '43.50', 1.00, 'Q1878991', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102842, 'Arar', 2854, '08', 194, 'SA', '30.98', '41.04', 1.00, 'Q1878991', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102843, 'As Saffānīyah', 2856, '04', 194, 'SA', '27.97', '48.73', 1.00, 'Q31890141', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102844, 'As Sulayyil', 2849, '01', 194, 'SA', '20.46', '45.58', 1.00, 'Q27221', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102845, 'Ash Shafā', 2850, '02', 194, 'SA', '21.07', '40.31', 1.00, 'Q4804436', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102846, 'At Tūbī', 2856, '04', 194, 'SA', '26.56', '49.99', 1.00, 'Q31892461', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102847, 'Az Zulfī', 2849, '01', 194, 'SA', '26.30', '44.82', 1.00, 'Q31894563', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102848, 'Aţ Ţaraf', 2856, '04', 194, 'SA', '25.36', '49.73', 1.00, 'Q31895318', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102849, 'Badr Ḩunayn', 2851, '03', 194, 'SA', '23.78', '38.79', 1.00, 'Q27256', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102850, 'Buraydah', 2861, '05', 194, 'SA', '26.33', '43.97', 1.00, 'Q259253', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102851, 'Dammam', 2856, '04', 194, 'SA', '26.43', '50.10', 1.00, 'Q160320', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102852, 'Dhahran', 2856, '04', 194, 'SA', '26.29', '50.11', 1.00, 'Q268915', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102853, 'Duba', 2852, '07', 194, 'SA', '27.35', '35.69', 1.00, 'Q268915', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102854, 'Farasān', 2858, '09', 194, 'SA', '16.70', '42.12', 1.00, 'Q268915', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102855, 'Ghran', 2850, '02', 194, 'SA', '21.98', '39.37', 1.00, 'Q268915', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102856, 'Ha\'il', 2855, '06', 194, 'SA', '27.52', '41.69', 1.00, 'Q675568', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102857, 'Hafar Al-Batin', 2856, '04', 194, 'SA', '28.43', '45.97', 1.00, 'Q27400', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102858, 'Jeddah', 2850, '02', 194, 'SA', '21.54', '39.20', 1.00, 'Q374365', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102859, 'Jizan', 2858, '09', 194, 'SA', '16.89', '42.55', 1.00, 'Q27660', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102860, 'Julayjilah', 2856, '04', 194, 'SA', '25.50', '49.60', 1.00, 'Q32130900', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102861, 'Khamis Mushait', 2853, '14', 194, 'SA', '18.30', '42.73', 1.00, 'Q759381', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102862, 'Khobar', 2856, '04', 194, 'SA', '26.28', '50.21', 1.00, 'Q311266', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102863, 'Marāt', 2849, '01', 194, 'SA', '25.07', '45.46', 1.00, 'Q32139417', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102864, 'Mecca', 2850, '02', 194, 'SA', '21.43', '39.83', 1.00, 'Q5806', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102865, 'Medina', 2851, '03', 194, 'SA', '24.47', '39.61', 1.00, 'Q35484', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102866, 'Mislīyah', 2858, '09', 194, 'SA', '17.46', '42.56', 1.00, 'Q32140978', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102867, 'Mizhirah', 2858, '09', 194, 'SA', '16.83', '42.73', 1.00, 'Q32141037', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102868, 'Mulayjah', 2856, '04', 194, 'SA', '27.27', '48.42', 1.00, 'Q32141302', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102869, 'Najrān', 2860, '10', 194, 'SA', '17.49', '44.13', 1.00, 'Q27174', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102870, 'Qaisumah', 2856, '04', 194, 'SA', '28.31', '46.13', 1.00, 'Q3543647', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102871, 'Qal‘at Bīshah', 2853, '14', 194, 'SA', '20.00', '42.61', 1.00, 'Q27135', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102872, 'Qurayyat', 2857, '12', 194, 'SA', '31.33', '37.34', 1.00, 'Q2829401', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102873, 'Raḩīmah', 2856, '04', 194, 'SA', '26.71', '50.06', 1.00, 'Q2829401', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102874, 'Riyadh', 2849, '01', 194, 'SA', '24.69', '46.72', 1.00, 'Q3692', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102875, 'Rābigh', 2850, '02', 194, 'SA', '22.80', '39.03', 1.00, 'Q27274', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102876, 'Sabt Al Alayah', 2853, '14', 194, 'SA', '19.70', '41.92', 1.00, 'Q27274', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102877, 'Sakakah', 2857, '12', 194, 'SA', '29.97', '40.21', 1.00, 'Q27469', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102878, 'Sayhāt', 2856, '04', 194, 'SA', '26.48', '50.05', 1.00, 'Q2744182', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102879, 'Sulţānah', 2851, '03', 194, 'SA', '24.49', '39.59', 1.00, 'Q7636782', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102880, 'Sājir', 2849, '01', 194, 'SA', '25.18', '44.60', 1.00, 'Q32188864', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102881, 'Tabuk', 2852, '07', 194, 'SA', '28.40', '36.57', 1.00, 'Q244232', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102882, 'Tabālah', 2853, '14', 194, 'SA', '19.95', '42.40', 1.00, 'Q32189185', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102883, 'Tanūmah', 2861, '05', 194, 'SA', '27.10', '44.13', 1.00, 'Q32189686', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102884, 'Ta’if', 2850, '02', 194, 'SA', '21.27', '40.42', 1.00, 'Q182640', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102885, 'Tumayr', 2849, '01', 194, 'SA', '25.70', '45.87', 1.00, 'Q32190410', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102886, 'Turabah', 2850, '02', 194, 'SA', '21.21', '41.63', 1.00, 'Q32190427', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102887, 'Turaif', 2854, '08', 194, 'SA', '31.67', '38.66', 1.00, 'Q32190427', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102888, 'Tārūt', 2856, '04', 194, 'SA', '26.57', '50.04', 1.00, 'Q32190514', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102889, 'Umm Lajj', 2852, '07', 194, 'SA', '25.02', '37.27', 1.00, 'Q32190969', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102890, 'Umm as Sāhik', 2856, '04', 194, 'SA', '26.65', '49.92', 1.00, 'Q32190880', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102891, 'Wed Alnkil', 2861, '05', 194, 'SA', '25.43', '42.83', 1.00, 'Q32190880', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102892, 'Yanbu', 2851, '03', 194, 'SA', '24.09', '38.06', 1.00, 'Q466027', '2019-10-05 19:17:55', '2019-10-05 19:17:55'),
(102893, 'shokhaibٍ', 2849, '01', 194, 'SA', '24.49', '46.27', 1.00, 'Q466027', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102894, 'Şabyā', 2858, '09', 194, 'SA', '17.15', '42.63', 1.00, 'Q32219237', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102895, 'Şafwá', 2856, '04', 194, 'SA', '26.65', '49.96', 1.00, 'Q27234', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102896, 'Şuwayr', 2857, '12', 194, 'SA', '30.12', '40.39', 1.00, 'Q32219471', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102897, 'Şāmitah', 2858, '09', 194, 'SA', '16.60', '42.94', 1.00, 'Q4164177', '2019-10-05 19:17:55', '2020-05-01 13:23:14'),
(102898, 'Ţubarjal', 2857, '12', 194, 'SA', '30.50', '38.22', 1.00, 'Q4164177', '2019-10-05 19:17:55', '2020-05-01 13:23:14');

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
(2, 'Cyber Monday 2022', 'cyber22', '12.00', 'Percent', '2000.00', '100.00', 'Cart', '2022-07-01', '2022-07-31', NULL, NULL, '2022-05-13 11:47:58', '2022-05-13 11:47:58'),
(3, 'Text Coupon 1', 'text_coupon', '10.00', 'Percent', '1000.00', '100.00', 'Product', '2022-06-20', '2022-08-20', NULL, '[\"6\",\"7\",\"8\",\"9\",\"10\"]', '2022-06-20 11:05:50', '2022-06-20 11:05:50'),
(4, 'Text Coupon 2', 'text_coupon2', '12.00', 'Percent', '5000.00', '100.00', 'Category', '2022-06-20', '2022-07-20', '[\"sub_category-1\"]', NULL, '2022-06-20 11:07:37', '2022-06-20 11:07:37');

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
  `shipping_cost` decimal(8,2) NOT NULL DEFAULT '30.00',
  `shipping_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '7',
  `tax` int(11) NOT NULL DEFAULT '15',
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

INSERT INTO `general_settings` (`id`, `app_name`, `app_logo_white`, `app_logo_black`, `shipping_cost`, `shipping_days`, `tax`, `app_phone`, `app_email`, `app_address`, `app_copyright_text`, `seo_title`, `seo_description`, `seo_keywords`, `mail_type`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encryption`, `mail_address`, `mail_from_name`, `created_at`, `updated_at`) VALUES
(1, '5dots E-commerce', '1656911514_hv41gaXsXoiHWeGV.png', NULL, '30.00', '7', 15, '+966 53 458 8012', 'info@5dots.com', 'Al-khobar', 'Made By &copy; 5dots.sa', '5dots e-commerce', '5dots multi-vendors e-commerces.', '5dots', 'SMTP', 'smtp.mailtrap.io', '2525', 'bcbb5a36522425', '04c13fb15063a9', 'tls', 'support@admin.com', '5dots', '2022-07-02 05:15:20', '2022-07-04 08:07:50');

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
(13, '2022_01_13_075341_create_attributes_table', 1),
(14, '2022_04_02_110929_create_sliders_table', 1),
(15, '2022_04_03_080520_create_products_table', 1),
(16, '2022_04_03_080549_create_product_images_table', 1),
(17, '2022_05_08_100031_create_subscriptions_table', 3),
(18, '2022_05_08_100639_create_subscription_options_table', 3),
(19, '2022_05_11_105008_create_shops_table', 3),
(23, '2022_05_17_100953_create_states_table', 4),
(24, '2022_05_17_101032_create_cities_table', 4),
(25, '2022_05_17_111404_create_countries_table', 4),
(57, '2022_06_21_065945_create_user_details_table', 5),
(58, '2022_06_21_070032_create_orders_table', 5),
(59, '2022_06_21_071020_create_transactions_table', 5),
(60, '2022_06_21_072329_create_order_details_table', 5),
(62, '2021_12_31_120832_create_general_settings_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED DEFAULT NULL,
  `coupon_discount_amount` double(10,2) NOT NULL DEFAULT '0.00',
  `shipping_cost` double NOT NULL DEFAULT '0',
  `tax` double(10,2) NOT NULL DEFAULT '0.00',
  `amount` double(10,2) NOT NULL DEFAULT '0.00',
  `payment_method` enum('Card','COD') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'COD',
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Pending','Accept','Complete','Cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `coupon_id`, `coupon_discount_amount`, `shipping_cost`, `tax`, `amount`, `payment_method`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 0.00, 30, 171.00, 1140.00, 'COD', 'l dsfjl saf lks sjfl lsldf lsf s', 'Pending', '2022-06-29 10:50:13', '2022-06-29 10:50:13'),
(2, 1, NULL, 0.00, 30, 171.00, 1140.00, 'COD', 'Quia fugit iusto la', 'Pending', '2022-06-30 00:25:25', '2022-06-30 00:25:25'),
(3, 1, NULL, 0.00, 30, 171.00, 1140.00, 'COD', 'Autem aut illo et ea', 'Pending', '2022-06-30 00:26:59', '2022-06-30 00:26:59'),
(4, 1, NULL, 0.00, 30, 150.00, 1000.00, 'COD', 'hello', 'Pending', '2022-07-03 08:43:38', '2022-07-03 08:43:38'),
(5, 1, NULL, 0.00, 30, 171.00, 1140.00, 'COD', 'hi', 'Pending', '2022-07-04 10:11:21', '2022-07-04 10:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `unit_price` double(10,2) NOT NULL DEFAULT '0.00',
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` bigint(20) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `seller_id`, `product_id`, `unit_price`, `color`, `size`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 6, 600.00, 'Black', '', 2, '2022-06-29 10:50:13', '2022-06-29 10:50:13'),
(2, 2, 2, 6, 599.97, 'Black', '', 2, '2022-06-30 00:25:25', '2022-06-30 00:25:25'),
(3, 3, 1, 6, 570.00, 'Black', '', 2, '2022-06-30 00:26:59', '2022-06-30 00:26:59'),
(4, 4, 2, 1, 500.00, 'Red', 'Lg', 2, '2022-07-03 08:43:38', '2022-07-03 08:43:38'),
(5, 5, 1, 6, 570.00, 'Green', '', 2, '2022-07-04 10:11:21', '2022-07-04 10:11:21');

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
  `discount_type` enum('Percent','Flat') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `isCashAvailable` tinyint(1) NOT NULL DEFAULT '1',
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

INSERT INTO `products` (`id`, `seller_id`, `category_id`, `sub_category_id`, `brand_id`, `name`, `slug`, `description`, `thumbnail`, `pdf`, `status`, `purchase_price`, `price`, `discount_type`, `discount`, `unit`, `min`, `max`, `quantity`, `tags`, `isCashAvailable`, `attributes`, `meta_title`, `meta_description`, `meta_image`, `is_draft`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 1, 2, 'White Oxford Shirt', 'white-oxford-shirt', '<p>Casual wear (casual attire or clothing) may be a Western code that&rsquo;s relaxed, occasional, spontaneous and fitted to everyday use</p>', '1655031663_rQTIWqc00s0mVOJg.png', NULL, 'Active', '400.00', '500.00', NULL, NULL, 'Pieces', 2, 5, 23, 'womens,cloths', 1, '[\"[\\\"2\\\",\\\"Red\\\"]\",\"[\\\"2\\\",\\\"White\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\",\"[\\\"1\\\",\\\"sm\\\"]\",\"[\\\"1\\\",\\\"md\\\"]\",\"[\\\"1\\\",\\\"lg\\\"]\"]', 'White Oxford Shirt', 'Casual wear (casual attire or clothing) may be a Western code that’s relaxed, occasional, spontaneous and fitted to everyday use', NULL, 0, '2022-06-12 08:01:03', '2022-06-20 19:02:16'),
(3, 2, 2, 1, 3, 'Darmani Woolen Comfort', 'darmani-woolen-comfort', '<p>Fendi began life in 1925 as a fur and leather speciality store in Rome. Despite growing into one of the world&rsquo;s most renowned luxury labels, the business has retained its family feel, with a focus on fine detail, Italian craftsmanship and the support of local artisans.</p>', '1655034221_3lAK4AWB8HUAOn0T.png', NULL, 'Active', '234.00', '300.00', NULL, NULL, 'Pieces', 1, 3, 20, 'womens', 0, '[\"[\\\"2\\\",\\\"Red\\\"]\",\"[\\\"2\\\",\\\"Green\\\"]\",\"[\\\"2\\\",\\\"White\\\"]\"]', 'Darmani Woolen Comfort', 'Fendi began life in 1925 as a fur and leather speciality store in Rome. Despite growing into one of the world’s most renowned luxury labels,', NULL, 0, '2022-06-12 08:43:41', '2022-06-18 23:08:43'),
(4, 2, 2, 1, 2, 'Hoppister Tops', 'hoppister-tops', '<p>Fendi began life in 1925 as a fur and leather speciality store in Rome. Despite growing into one of the world&rsquo;s most renowned luxury labels, the business has retained its family feel, with a focus on fine detail, Italian craftsmanship and the support of local artisans.</p>', '1655034656_lZAjt1i8UG8y62UB.png', NULL, 'Active', '399.00', '500.00', NULL, NULL, 'Pieces', 2, 5, 20, 'womens', 1, '[\"[\\\"2\\\",\\\"White\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\",\"[\\\"1\\\",\\\"md\\\"]\",\"[\\\"1\\\",\\\"lg\\\"]\"]', 'Hoppister Tops', 'Fendi began life in 1925 as a fur and leather speciality store in Rome. Despite growing into one of the world’s most renowned luxury labels,', NULL, 0, '2022-06-12 08:50:57', '2022-06-18 23:08:04'),
(5, 1, 2, 4, NULL, 'Pior Womes Bangles', 'pior-womes-bangles', '<p>Structured buffed nappa leather top handle bag in &lsquo;scarlet&rsquo; red. Carry handle at top. Detachable and adjustable shoulder strap with lanyard clasp fastening.</p>', '1655035135_WNBSca7ryyNH1xHs.png', NULL, 'Active', '100.00', '220.00', 'Percent', 10, 'Pieces', 2, 10, 50, 'accessories,bangles', 0, '[\"[\\\"1\\\",\\\"sm\\\"]\",\"[\\\"1\\\",\\\"md\\\"]\",\"[\\\"1\\\",\\\"lg\\\"]\"]', 'Pior Womes Bangles', 'Structured buffed nappa leather top handle bag in ‘scarlet’ red. Carry handle at top. Detachable and adjustable shoulder strap with lanyard clasp fastening.', NULL, 0, '2022-06-12 08:58:55', '2022-06-12 08:58:55'),
(6, 1, 2, 2, NULL, 'Tippot Classic', 'tippot-classic', '<p>The new-model Submariner now features Rolex&rsquo;s powerhouse calibre 3235 Perpetual movement. An upgrade from the calibre 3135 movement,</p>', '1655037196_TjfgnVINstPJ3q9R.png', NULL, 'Active', '500.00', '600.00', 'Percent', 5, 'Pieces', 1, 23, 50, 'watches,women', 0, '[\"[\\\"2\\\",\\\"Green\\\"]\",\"[\\\"2\\\",\\\"White\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\"]', 'Tippot Classic', 'The new-model Submariner now features Rolex’s powerhouse calibre 3235 Perpetual movement. An upgrade from the calibre 3135 movement,', NULL, 0, '2022-06-12 09:33:16', '2022-06-21 16:37:36'),
(7, 2, 2, 3, NULL, 'Black Desert Boots', 'black-desert-boots', '<p>Thundercats are on the move, Thundercats are loose. Feel the magic, hear the roar, Thundercats are loose. Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thundercats! Thundercats are on the move, Thundercats are loose. Feel the magic, hear the roar, Thundercats are loose. Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thundercats</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:420px; position:absolute; top:58.7969px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '1655038254_C2CSqZ5pS9qrWHBb.png', NULL, 'Active', '200.00', '250.00', 'Flat', 50, 'Pieces', 1, 5, 23, 'women,shoes', 0, '[\"[\\\"2\\\",\\\"Red\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\",\"[\\\"1\\\",\\\"sm\\\"]\",\"[\\\"1\\\",\\\"lg\\\"]\",\"[\\\"1\\\",\\\"xl\\\"]\"]', 'Thundercats are loose. Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats!', 'Thundercats are loose. Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats!', NULL, 0, '2022-06-12 09:50:54', '2022-06-12 09:50:54'),
(8, 2, 2, 4, NULL, 'Woman Hand Tote Bag', 'woman-hand-tote-bag', '<h4>Product Details:</h4>\r\n\r\n<ul>\r\n	<li>Brand Name:&nbsp;JIN QIAO ER</li>\r\n	<li>Handbags Type:&nbsp;Shoulder Bags</li>\r\n	<li>Types of bags:&nbsp;Shoulder &amp; Handbags</li>\r\n	<li>Main Material:&nbsp;PU</li>\r\n	<li>Shape:&nbsp;Composite Bag</li>\r\n	<li>Exterior:&nbsp;Silt Pocket</li>\r\n	<li>Model Number:&nbsp;B274</li>\r\n	<li>Gender:&nbsp;WOMEN</li>\r\n	<li>Lining Material:&nbsp;Polyester</li>\r\n	<li>Number of Handles/Straps:&nbsp;Single</li>\r\n	<li>Decoration:&nbsp;Rivet</li>\r\n	<li>Decoration:&nbsp;Letter</li>\r\n</ul>', '1655038835_38iAXJqWcgzg3BEm.jpg', NULL, 'Active', '500.00', '580.00', 'Percent', 5, 'Pieces', 1, 5, 20, 'handbag,womens', 0, '[\"[\\\"2\\\",\\\"Green\\\"]\",\"[\\\"2\\\",\\\"White\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\",\"[\\\"2\\\",\\\"Blue\\\"]\",\"[\\\"1\\\",\\\"md\\\"]\",\"[\\\"1\\\",\\\"lg\\\"]\"]', 'Woman Hand Tote Bag', 'Product Details:\r\nBrand Name: JIN QIAO ER\r\nHandbags Type: Shoulder Bags\r\nTypes of bags: Shoulder & Handbags\r\nMain Material: PU', NULL, 0, '2022-06-12 10:00:35', '2022-06-12 10:00:35'),
(9, 2, 3, 5, 2, 'Men Shirt Custom Shirts', 'men-shirt-custom-shirts', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quae illo soluta sapiente minus voluptatibus molestias voluptates maiores repudiandae, velit quaerat error! Dolor alias voluptates rerum vitae illum officiis laboriosam, eos fugiat necessitatibus iste quasi vero porro at asperiores atque numquam adipisci esse perferendis hic dolore dolores facere quidem? Voluptatum, nemo voluptates.</p>\r\n\r\n<p>Qui, animi odit voluptatem velit nostrum rem maiores. Qui esse magnam enim natus numquam ab adipisci nihil mollitia odio ducimus architecto unde harum saepe illum, ipsa hic dicta alias cumque et minus veritatis assumenda a quo. Possimus, vitae est! Fuga quidem minima sunt modi. Officia natus quaerat nobis ut ab nulla. Tempora, corrupti? Animi excepturi voluptatem quod consectetur culpa autem aliquid? Inventore adipisci officia error dolore provident omnis sint perferendis, consequuntur, sapiente magni sequi quo quis nesciunt molestiae vero iure cum laboriosam fugit. Numquam sed expedita alias non? Sequi, harum cupiditate!</p>\r\n\r\n<p>Quasi non laboriosam optio ex fugit delectus minus incidunt excepturi! Nisi iure ex, nulla perspiciatis similique est, libero sapiente hic error amet, quisquam vel obcaecati fugit. Maxime cupiditate voluptatibus, nisi ullam error voluptas culpa at animi sequi eius suscipit ad ipsum qui illum provident dolores facere necessitatibus commodi vel in,&nbsp;</p>', '1655049987_xQ2MgEib5hfa70ke.png', NULL, 'Active', '200.00', '250.00', NULL, NULL, 'Pieces', 1, 5, 20, 'mens,shirt', 0, '[\"[\\\"2\\\",\\\"Red\\\"]\",\"[\\\"2\\\",\\\"Green\\\"]\",\"[\\\"2\\\",\\\"White\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\",\"[\\\"1\\\",\\\"sm\\\"]\",\"[\\\"1\\\",\\\"md\\\"]\",\"[\\\"1\\\",\\\"lg\\\"]\",\"[\\\"1\\\",\\\"xl\\\"]\"]', 'Men Shirt Custom Shirts', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quae illo soluta sapiente minus voluptatibus molestias voluptates maiores repudiandae,', NULL, 0, '2022-06-12 13:06:27', '2022-06-20 19:05:26'),
(10, 2, 3, 5, 3, 'Mens Cotton Shirts', 'mens-cotton-shirts', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quae illo soluta sapiente minus voluptatibus molestias voluptates maiores repudiandae, velit quaerat error! Dolor alias voluptates rerum vitae illum officiis laboriosam, eos fugiat necessitatibus iste quasi vero porro at asperiores atque numquam adipisci esse perferendis hic dolore dolores facere quidem? Voluptatum, nemo voluptates.</p>\r\n\r\n<p>Qui, animi odit voluptatem velit nostrum rem maiores. Qui esse magnam enim natus numquam ab adipisci nihil mollitia odio ducimus architecto unde harum saepe illum, ipsa hic dicta alias cumque et minus veritatis assumenda a quo. Possimus, vitae est! Fuga quidem minima sunt modi. Officia natus quaerat nobis ut ab nulla. Tempora, corrupti? Animi excepturi voluptatem quod consectetur culpa autem aliquid?</p>\r\n\r\n<p>Inventore adipisci officia error dolore provident omnis sint perferendis, consequuntur, sapiente magni sequi quo quis nesciunt molestiae vero iure cum laboriosam fugit. Numquam sed expedita alias non? Sequi, harum cupiditate! Quasi non laboriosam optio ex fugit delectus minus incidunt excepturi! Nisi iure ex, nulla perspiciatis similique est, libero sapiente hic error amet, quisquam vel obcaecati fugit. Maxime cupiditate voluptatibus, nisi ullam error voluptas culpa at animi sequi eius suscipit ad ipsum qui illum provident dolores facere necessitatibus commodi vel in,&nbsp;</p>', '1655050206_Y9Q63UHztgyCtmGE.jpeg', NULL, 'Active', '150.00', '230.00', NULL, NULL, 'Pieces', 1, 5, 30, 'mens,shier', 0, '[\"[\\\"2\\\",\\\"White\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\",\"[\\\"2\\\",\\\"Blue\\\"]\",\"[\\\"1\\\",\\\"md\\\"]\",\"[\\\"1\\\",\\\"lg\\\"]\",\"[\\\"1\\\",\\\"xl\\\"]\"]', 'Mens Cotton Shirts', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quae illo soluta sapiente minus voluptatibus molestias voluptates maiores repudiandae,', NULL, 0, '2022-06-12 13:10:06', '2022-06-20 19:05:44'),
(11, 2, 3, 6, NULL, 'Men Smart Watch', 'men-smart-watch', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quae illo soluta sapiente minus voluptatibus molestias voluptates maiores repudiandae, velit quaerat error! Dolor alias voluptates rerum vitae illum officiis laboriosam, eos fugiat necessitatibus iste quasi vero porro at asperiores atque numquam adipisci esse perferendis hic dolore dolores facere quidem? Voluptatum, nemo voluptates.</p>\r\n\r\n<p>Qui, animi odit voluptatem velit nostrum rem maiores. Qui esse magnam enim natus numquam ab adipisci nihil mollitia odio ducimus architecto unde harum saepe illum, ipsa hic dicta alias cumque et minus veritatis assumenda a quo. Possimus, vitae est! Fuga quidem minima sunt modi. Officia natus quaerat nobis ut ab nulla.</p>\r\n\r\n<p>Tempora, corrupti? Animi excepturi voluptatem quod consectetur culpa autem aliquid? Inventore adipisci officia error dolore provident omnis sint perferendis, consequuntur, sapiente magni sequi quo quis nesciunt molestiae vero iure cum laboriosam fugit. Numquam sed expedita alias non? Sequi, harum cupiditate!</p>\r\n\r\n<p>Quasi non laboriosam optio ex fugit delectus minus incidunt excepturi! Nisi iure ex, nulla perspiciatis similique est, libero sapiente hic error amet, quisquam vel obcaecati fugit. Maxime cupiditate voluptatibus, nisi ullam error voluptas culpa at animi sequi eius suscipit ad ipsum qui illum provident dolores facere necessitatibus commodi vel in,&nbsp;</p>', '1655051074_Sb5fGt48IzHiz6zy.png', NULL, 'Active', '200.00', '349.00', 'Percent', 7, 'Piece', 1, 5, 20, 'watch,mens', 0, '[\"[\\\"2\\\",\\\"Red\\\"]\",\"[\\\"2\\\",\\\"Green\\\"]\",\"[\\\"2\\\",\\\"White\\\"]\",\"[\\\"1\\\",\\\"sm\\\"]\",\"[\\\"1\\\",\\\"md\\\"]\",\"[\\\"1\\\",\\\"lg\\\"]\"]', 'Men Smart Watch', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quae illo soluta sapiente minus voluptatibus molestias voluptates maiores repudiandae, velit quaerat error!', NULL, 0, '2022-06-12 13:24:34', '2022-06-12 13:24:34'),
(12, 2, 3, 7, 4, 'Men\'s White Sneakers', 'men\'s-white-sneakers', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quae illo soluta sapiente minus voluptatibus molestias voluptates maiores repudiandae, velit quaerat error! Dolor alias voluptates rerum vitae illum officiis laboriosam, eos fugiat necessitatibus iste quasi vero porro at asperiores atque numquam adipisci esse perferendis hic dolore dolores facere quidem? Voluptatum, nemo voluptates.</p>\r\n\r\n<p>Qui, animi odit voluptatem velit nostrum rem maiores. Qui esse magnam enim natus numquam ab adipisci nihil mollitia odio ducimus architecto unde harum saepe illum, ipsa hic dicta alias cumque et minus veritatis assumenda a quo. Possimus, vitae est! Fuga quidem minima sunt modi.</p>\r\n\r\n<p>Officia natus quaerat nobis ut ab nulla. Tempora, corrupti? Animi excepturi voluptatem quod consectetur culpa autem aliquid? Inventore adipisci officia error dolore provident omnis sint perferendis, consequuntur, sapiente magni sequi quo quis nesciunt molestiae vero iure cum laboriosam fugit.</p>\r\n\r\n<p>Numquam sed expedita alias non? Sequi, harum cupiditate! Quasi non laboriosam optio ex fugit delectus minus incidunt excepturi! Nisi iure ex, nulla perspiciatis similique est, libero sapiente hic error amet, quisquam vel obcaecati fugit. Maxime cupiditate voluptatibus, nisi ullam error voluptas culpa at animi sequi eius suscipit ad ipsum qui illum provident dolores facere necessitatibus commodi vel in,&nbsp;</p>', '1655060501_fjdHhTXoVZuu6PUK.jpg', NULL, 'Active', '300.00', '400.00', NULL, NULL, 'Pieces', 1, 5, 30, 'sneakers,mens,shoes', 0, '[\"[\\\"2\\\",\\\"Green\\\"]\",\"[\\\"2\\\",\\\"White\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\"]', 'Men\'s White Sneakers', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quae illo soluta sapiente minus voluptatibus molestias voluptates maiores repudiandae, velit quaerat error!', NULL, 0, '2022-06-12 16:01:42', '2022-06-12 18:40:48'),
(13, 1, 4, 12, 3, 'Women Modern Solder Bag', 'women-modern-solder-bag', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quae illo soluta sapiente minus voluptatibus molestias voluptates maiores repudiandae, velit quaerat error!</p>\r\n\r\n<p>Dolor alias voluptates rerum vitae illum officiis laboriosam, eos fugiat necessitatibus iste quasi vero porro at asperiores atque numquam adipisci esse perferendis hic dolore dolores facere quidem? Voluptatum, nemo voluptates. Qui, animi odit voluptatem velit nostrum rem maiores.</p>\r\n\r\n<p>Qui esse magnam enim natus numquam ab adipisci nihil mollitia odio ducimus architecto unde harum saepe illum, ipsa hic dicta alias cumque et minus veritatis assumenda a quo. Possimus, vitae est! Fuga quidem minima sunt modi. Officia natus quaerat nobis ut ab nulla. Tempora, corrupti? Animi excepturi voluptatem quod consectetur culpa autem aliquid?&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-17px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '1655070739_i2Efm744PJKCvFjp.jpeg', NULL, 'Active', '200.00', '300.00', 'Flat', 50, 'Pieces', 1, 5, 30, 'bags', 0, '[\"[\\\"2\\\",\\\"Red\\\"]\",\"[\\\"2\\\",\\\"Green\\\"]\",\"[\\\"2\\\",\\\"White\\\"]\"]', 'Women Modern Solder Bag', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quae illo soluta sapiente minus voluptatibus molestias voluptates maiores repudiandae, velit quaerat error!', NULL, 0, '2022-06-12 18:52:19', '2022-06-12 18:52:19'),
(14, 2, 4, 13, 5, 'Lattafa Oud For Glory Badee Al Oud Eau de Parfum 100ml', 'lattafa-oud-for-glory-badee-al-oud-eau-de-parfum-100ml', '<p>Lattafa Oud For Glory Badee Al Oud Eau de Parfum 100ml.&nbsp;Lattafa Oud For Glory Badee Al Oud Eau de Parfum 100ml.&nbsp;Lattafa Oud For Glory Badee Al Oud Eau de Parfum 100ml</p>', '1655763246_apQ1CXmabf77YSyS.png', NULL, 'Active', '100.00', '130.00', 'Percent', 7, 'Peaces', 1, 10, 20, 'parfume', 0, NULL, 'Lattafa Oud For Glory Badee Al Oud Eau de Parfum 100ml', 'Lattafa Oud For Glory Badee Al Oud Eau de Parfum 100ml', NULL, 0, '2022-06-20 19:14:06', '2022-06-20 19:14:06'),
(15, 1, 4, 13, 7, 'Versace Pour Homme Dylan Blue EDT, 6.7', 'versace-pour-homme-dylan-blue-edt,-6.7', '<h1>About this item</h1>\r\n\r\n<ul>\r\n	<li>The bottle with clean lines comes in dark, Mediterranean blue with a golden cap and a golden Medusa seal</li>\r\n	<li>Country of origin is United States</li>\r\n	<li>The package dimension of the product is 4cmL x 5cmW x 4cmH</li>\r\n	<li>The package weight of the product is 6.7 ounces</li>\r\n</ul>', '1655764164_shWOQchlFr9Qmehl.png', NULL, 'Active', '120.00', '150.00', 'Percent', 7, 'Pieces', 1, 10, 50, 'parfume', 0, NULL, 'Versace Pour Homme Dylan Blue EDT, 6.7', 'Versace Pour Homme Dylan Blue EDT, 6.7', NULL, 0, '2022-06-20 19:29:24', '2022-06-20 19:29:24'),
(16, 2, 4, 13, 6, 'Calvin Klein CK One for Unisex, Eau de Toilette, 200 ml', 'calvin-klein-ck-one-for-unisex,-eau-de-toilette,-200-ml', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>', '1655764351_wIcTPyC6e0foAucO.png', NULL, 'Active', '120.00', '160.00', 'Percent', 5, 'Pieces', 1, 10, 50, 'parfume', 0, NULL, 'Calvin Klein CK One for Unisex, Eau de Toilette, 200 ml', 'Calvin Klein CK One for Unisex, Eau de Toilette, 200 ml', NULL, 0, '2022-06-20 19:32:31', '2022-06-20 19:32:31'),
(17, 2, 4, 10, 8, 'Johnson Soft Cream 24H Moisture 300Ml', 'johnson-soft-cream-24h-moisture-300ml', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,</p>\r\n\r\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>', '1655765641_sbc2ThrsNJcYOZ4U.png', NULL, 'Active', '100.00', '130.00', 'Percent', 4, 'Pieces', 1, 12, 100, 'beauty,skin care', 0, NULL, 'Johnson Soft Cream 24H Moisture 300Ml', 'Johnson Soft Cream 24H Moisture 300Ml', NULL, 0, '2022-06-20 19:54:01', '2022-06-20 19:54:01'),
(18, 2, 4, 10, 8, 'Johnson Shampoo 500 ml new shape', 'johnson-shampoo-500-ml-new-shape', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>', '1655765960_gn4usB5NE83RM09O.png', NULL, 'Active', '20.00', '40.00', 'Percent', 8, 'Pieces', 1, 10, 100, 'shamp,babay', 0, NULL, 'Johnson Shampoo 500 ml new shape', 'Johnson Shampoo 500 ml new shape', NULL, 0, '2022-06-20 19:59:20', '2022-06-20 19:59:20'),
(19, 2, 4, 10, 8, 'Green Wealth Neo Hair Lotion - Hair Treatment and Root Nutrients 120 m', 'green-wealth-neo-hair-lotion---hair-treatment-and-root-nutrients-120-m', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>', '1655766345_CgeqIYUhuc2xkABW.png', NULL, 'Active', '90.00', '120.00', NULL, NULL, 'Pieces', 1, 10, 100, 'shampu', 0, NULL, 'Green Wealth Neo Hair Lotion - Hair Treatment and Root Nutrients 120 m', 'Green Wealth Neo Hair Lotion - Hair Treatment and Root Nutrients 120 m', NULL, 0, '2022-06-20 20:05:45', '2022-06-20 20:05:45'),
(20, 2, 4, 11, 9, 'Flexible Kids Sunglasses Polarized Sun Glasses Girls Boys', 'flexible-kids-sunglasses-polarized-sun-glasses-girls-boys', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>', '1655766847_qnNPekO5I9vfO3lB.jpg', NULL, 'Active', '80.00', '100.00', NULL, NULL, 'Pieces', 1, 10, 100, 'sun-glass', 0, '[\"[\\\"2\\\",\\\"Red\\\"]\",\"[\\\"2\\\",\\\"Green\\\"]\",\"[\\\"2\\\",\\\"White\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\",\"[\\\"1\\\",\\\"Sm\\\"]\",\"[\\\"1\\\",\\\"Md\\\"]\",\"[\\\"1\\\",\\\"Lg\\\"]\"]', 'Flexible Kids Sunglasses Polarized Sun Glasses Girls Boys', 'Flexible Kids Sunglasses Polarized Sun Glasses Girls Boys', NULL, 0, '2022-06-20 20:14:07', '2022-06-20 20:14:47');

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
(1, 1, '1655031663_MoLqHjuB6emUrsKU.jpeg', '2022-06-12 08:01:03', '2022-06-12 08:01:03'),
(2, 1, '1655031663_HacVg2Tl3JuJAtxs.jpeg', '2022-06-12 08:01:03', '2022-06-12 08:01:03'),
(3, 1, '1655031663_saFydxzyaCYPjhu2.jpg', '2022-06-12 08:01:03', '2022-06-12 08:01:03'),
(4, 1, '1655031663_TEUutywTQk4v2tAb.png', '2022-06-12 08:01:04', '2022-06-12 08:01:04'),
(5, 1, '1655031664_hljXfBEsQeAFxO8M.jpeg', '2022-06-12 08:01:04', '2022-06-12 08:01:04'),
(6, 3, '1655034221_hYTcAedivDmTXGoW.png', '2022-06-12 08:43:41', '2022-06-12 08:43:41'),
(7, 3, '1655034221_beANC6mQCwHCekAH.png', '2022-06-12 08:43:42', '2022-06-12 08:43:42'),
(8, 3, '1655034222_T7gnWCkyaYfpAjLi.png', '2022-06-12 08:43:42', '2022-06-12 08:43:42'),
(9, 3, '1655034222_uksfHxEk50QKNVJR.png', '2022-06-12 08:43:42', '2022-06-12 08:43:42'),
(10, 3, '1655034222_RuRtmDDRtXbewomA.jpeg', '2022-06-12 08:43:42', '2022-06-12 08:43:42'),
(11, 4, '1655034657_8bIjKiLZshDIVcme.png', '2022-06-12 08:50:57', '2022-06-12 08:50:57'),
(12, 4, '1655034657_cdgWmlWd1CBFaGSi.jpeg', '2022-06-12 08:50:57', '2022-06-12 08:50:57'),
(13, 4, '1655034657_Pm4YfA8h7ctsH1zi.jpg', '2022-06-12 08:50:57', '2022-06-12 08:50:57'),
(14, 4, '1655034657_vAWAhx5zHx1fiGZL.jpg', '2022-06-12 08:50:57', '2022-06-12 08:50:57'),
(15, 4, '1655034657_rFQ4Q9OvGZBQonfO.png', '2022-06-12 08:50:57', '2022-06-12 08:50:57'),
(16, 4, '1655034657_avPL0VwCv6aPHR5j.jpeg', '2022-06-12 08:50:57', '2022-06-12 08:50:57'),
(17, 5, '1655035135_GAdXrmIZgwHMF1vN.png', '2022-06-12 08:58:55', '2022-06-12 08:58:55'),
(18, 5, '1655035135_u1bz95oHU0ieM1XO.png', '2022-06-12 08:58:56', '2022-06-12 08:58:56'),
(19, 6, '1655037196_8Cywm8oWy4app21u.png', '2022-06-12 09:33:16', '2022-06-12 09:33:16'),
(20, 6, '1655037196_n6eJ6HObZBNtMdHk.png', '2022-06-12 09:33:17', '2022-06-12 09:33:17'),
(21, 6, '1655037197_8um6vZM3FGF5WtB0.png', '2022-06-12 09:33:17', '2022-06-12 09:33:17'),
(22, 7, '1655038254_9IDhw0psLM0V4vSN.png', '2022-06-12 09:50:54', '2022-06-12 09:50:54'),
(23, 7, '1655038254_ncuoxQdMMVgPDzZi.jpg', '2022-06-12 09:50:54', '2022-06-12 09:50:54'),
(24, 8, '1655038835_6IdXm6netwEw9N5c.png', '2022-06-12 10:00:35', '2022-06-12 10:00:35'),
(25, 8, '1655038835_4Ly5MiJwpiWrYHDj.png', '2022-06-12 10:00:35', '2022-06-12 10:00:35'),
(26, 8, '1655038835_BXdpQnWK7m37spZv.jpg', '2022-06-12 10:00:35', '2022-06-12 10:00:35'),
(27, 8, '1655038835_kfGUOKYf4X267bap.jpeg', '2022-06-12 10:00:35', '2022-06-12 10:00:35'),
(28, 9, '1655049987_DfWfGFvHVB1v4SlA.jpeg', '2022-06-12 13:06:27', '2022-06-12 13:06:27'),
(29, 9, '1655049987_5mCpKlnBx8cEec7y.jpeg', '2022-06-12 13:06:27', '2022-06-12 13:06:27'),
(30, 9, '1655049987_Seq5cI0wqYzVk1kD.png', '2022-06-12 13:06:27', '2022-06-12 13:06:27'),
(31, 9, '1655049987_Bfe0DXltIVBZAH8t.jpeg', '2022-06-12 13:06:27', '2022-06-12 13:06:27'),
(32, 9, '1655049987_BsaFmEp4BHCrG1TP.jpeg', '2022-06-12 13:06:27', '2022-06-12 13:06:27'),
(33, 10, '1655050206_mk13JaHFDjYHKVSV.jpeg', '2022-06-12 13:10:06', '2022-06-12 13:10:06'),
(34, 10, '1655050206_TFy7USkMSBvBDKqu.png', '2022-06-12 13:10:07', '2022-06-12 13:10:07'),
(35, 10, '1655050207_42HUq1ZHRwGCb1OB.jpeg', '2022-06-12 13:10:07', '2022-06-12 13:10:07'),
(36, 10, '1655050207_I1yfgFbSgmwxUMhz.jpeg', '2022-06-12 13:10:07', '2022-06-12 13:10:07'),
(37, 11, '1655051074_t1VWDG2LTIlpEjNr.jpeg', '2022-06-12 13:24:34', '2022-06-12 13:24:34'),
(38, 11, '1655051074_VoR6dR4iEI5dq702.jpeg', '2022-06-12 13:24:34', '2022-06-12 13:24:34'),
(39, 11, '1655051074_pvig2pqej8CcJKQt.jpeg', '2022-06-12 13:24:34', '2022-06-12 13:24:34'),
(40, 11, '1655051074_Mp5YtRRJ0OtjnJET.png', '2022-06-12 13:24:35', '2022-06-12 13:24:35'),
(41, 12, '1655060502_Ei8idd3cYdlyNOzf.jpg', '2022-06-12 16:01:42', '2022-06-12 16:01:42'),
(42, 12, '1655060502_jCZVCvFr7q8qHy0i.png', '2022-06-12 16:01:42', '2022-06-12 16:01:42'),
(43, 12, '1655060502_i0VTxN7HTfnLgysn.jpeg', '2022-06-12 16:01:42', '2022-06-12 16:01:42'),
(44, 13, '1655070739_1d4mzObigXcZD095.jpeg', '2022-06-12 18:52:19', '2022-06-12 18:52:19'),
(45, 13, '1655070739_vJHl2XyvcVLJGfYt.jpeg', '2022-06-12 18:52:19', '2022-06-12 18:52:19'),
(46, 13, '1655070739_4ZNdIxtgX5VRysy6.jpeg', '2022-06-12 18:52:19', '2022-06-12 18:52:19'),
(47, 13, '1655070739_Obfi4yKMq5TsB4Es.jpg', '2022-06-12 18:52:19', '2022-06-12 18:52:19'),
(48, 14, '1655763246_SM46jJuVEHzaTCt3.png', '2022-06-20 19:14:06', '2022-06-20 19:14:06'),
(49, 14, '1655763246_TGdJ29fpCIe3H2r4.png', '2022-06-20 19:14:07', '2022-06-20 19:14:07'),
(50, 14, '1655763247_uB1LUpWxGQmdrzHB.png', '2022-06-20 19:14:07', '2022-06-20 19:14:07'),
(51, 14, '1655763247_VRtxmERaIsgOZkHE.png', '2022-06-20 19:14:07', '2022-06-20 19:14:07'),
(52, 14, '1655763247_5YzxgwNs3dYEC2mn.png', '2022-06-20 19:14:07', '2022-06-20 19:14:07'),
(53, 15, '1655764164_FquzEUvvh22oN99S.png', '2022-06-20 19:29:25', '2022-06-20 19:29:25'),
(54, 15, '1655764165_VqHnUFjSUXtsNSHN.png', '2022-06-20 19:29:25', '2022-06-20 19:29:25'),
(55, 15, '1655764165_aOZ0oXDAdlU2uXeQ.png', '2022-06-20 19:29:25', '2022-06-20 19:29:25'),
(56, 15, '1655764165_oTeuQgeEKMmdZuL6.png', '2022-06-20 19:29:25', '2022-06-20 19:29:25'),
(57, 15, '1655764165_aEooT8lb9CQyaRm3.png', '2022-06-20 19:29:25', '2022-06-20 19:29:25'),
(58, 16, '1655764351_yR0ORs1iC6PKskYI.png', '2022-06-20 19:32:31', '2022-06-20 19:32:31'),
(59, 16, '1655764351_T93VUGGeFO1jsBcx.png', '2022-06-20 19:32:31', '2022-06-20 19:32:31'),
(60, 16, '1655764351_4em2Nr0pomLpBKtt.png', '2022-06-20 19:32:31', '2022-06-20 19:32:31'),
(61, 16, '1655764351_EOEx58e3cqfblq6A.png', '2022-06-20 19:32:31', '2022-06-20 19:32:31'),
(62, 16, '1655764351_5brssNKRKX3KHgUr.png', '2022-06-20 19:32:31', '2022-06-20 19:32:31'),
(63, 17, '1655765641_aXyGfSUUDLW11U8G.png', '2022-06-20 19:54:01', '2022-06-20 19:54:01'),
(64, 17, '1655765641_TLGRVoai7nwIC1ok.png', '2022-06-20 19:54:01', '2022-06-20 19:54:01'),
(65, 17, '1655765641_nID5ixj26rfmjbDp.png', '2022-06-20 19:54:01', '2022-06-20 19:54:01'),
(66, 17, '1655765641_PGDy5KsA3kX1IWED.png', '2022-06-20 19:54:02', '2022-06-20 19:54:02'),
(67, 18, '1655765960_vbdd9y3xRsg5f1Us.png', '2022-06-20 19:59:20', '2022-06-20 19:59:20'),
(68, 18, '1655765960_w1vLRP8x73i2wT6p.png', '2022-06-20 19:59:20', '2022-06-20 19:59:20'),
(69, 19, '1655766345_9BWlUVLbO7x9ng1m.png', '2022-06-20 20:05:45', '2022-06-20 20:05:45'),
(70, 19, '1655766345_95Lbyj0n7eyUQK9e.png', '2022-06-20 20:05:45', '2022-06-20 20:05:45'),
(71, 19, '1655766345_yiN9lyqufhBRPtjC.png', '2022-06-20 20:05:45', '2022-06-20 20:05:45'),
(72, 19, '1655766345_77MvdExplu4SUo09.png', '2022-06-20 20:05:46', '2022-06-20 20:05:46'),
(73, 19, '1655766346_590V1oIUyou70HDj.png', '2022-06-20 20:05:46', '2022-06-20 20:05:46'),
(74, 20, '1655766847_MnOxYwNAsf0ayZDR.png', '2022-06-20 20:14:07', '2022-06-20 20:14:07'),
(75, 20, '1655766847_KKpTTj0M5c3g2Tt2.jpeg', '2022-06-20 20:14:07', '2022-06-20 20:14:07'),
(76, 20, '1655766847_82lxJxfFb5hGVpyt.jpg', '2022-06-20 20:14:07', '2022-06-20 20:14:07');

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
(1, 2, 'Demoshop1', NULL, '0123456789', '01282932990', 'seller-1@demo.com', 'Khobar City', 'King Abdulaziz Road-123', 'Dammam', NULL, '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(2, 3, 'Demoshop2', NULL, '01234567879', '01282932968', 'seller-2@demo.com', 'Khobar City', 'King Abdulaziz Road-125', 'Dammam', NULL, '2022-06-12 05:59:25', '2022-06-12 05:59:25');

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
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `category_id`, `title`, `sub_title`, `banner`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Womens Fashion', 'New Collection 2022', '1655025770_2WgqEApzJkFfBafl.jpeg', 'Active', '2022-06-12 06:22:50', '2022-06-12 06:22:50'),
(7, 3, 'Mens Fashions', 'New Collection', '1656990512_TPUPGcWUDwaI2D5j.jpeg', 'Active', '2022-07-04 21:08:32', '2022-07-04 21:08:32');

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
(1, 'Facebook', '12345', '12345', '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(2, 'Google', '12345', '12345', '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(3, 'Twitter', '12345', '12345', '2022-06-12 05:59:25', '2022-06-12 05:59:25');

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
(1, 2, 'Women Cloths', NULL, '1655025094_pNwjSbxgXFJnXy25.png', 'Active', 'women-cloths', 'Women Cloth', 'Womens Cloth', '2022-06-12 06:11:34', '2022-06-12 06:11:34'),
(2, 2, 'Women Watches', NULL, '1655025149_cQE976NCv2YEaY3J.png', 'Active', 'women-watches', 'women watches', 'Women watches Category', '2022-06-12 06:12:29', '2022-06-12 06:12:29'),
(3, 2, 'Women Shoes', NULL, '1655025195_5tM93VqDm2546cJj.png', 'Active', 'women-shoes', 'women shoes', 'women shoes category', '2022-06-12 06:13:15', '2022-06-12 06:13:15'),
(4, 2, 'Women Accessories', NULL, '1655025280_4ZdJJtFSDKE2J3dy.png', 'Active', 'women-accessories', 'women accessories', 'women accessories category', '2022-06-12 06:14:40', '2022-06-12 06:14:40'),
(5, 3, 'Men Cloths', NULL, '1655025371_n4AOMX65zFd2qKQl.png', 'Active', 'men-cloths', 'men cloths', 'men cloths category', '2022-06-12 06:16:11', '2022-06-12 06:16:11'),
(6, 3, 'Men Watches', NULL, '1655025417_tAXky6LHnw41djrU.png', 'Active', 'men-watches', 'men watches', 'men watches category', '2022-06-12 06:16:57', '2022-06-12 06:16:57'),
(7, 3, 'Men Shoes', NULL, '1655025456_gkreRGGow6jNSnBo.png', 'Active', 'men-shoes', 'men shoes', 'men shoes category', '2022-06-12 06:17:36', '2022-06-12 06:17:36'),
(8, 3, 'Men Accessories', NULL, '1655029222_Uc2V5G8AFEObW6Ve.png', 'Active', 'men-accessories', 'men accessories', 'men accessories category', '2022-06-12 07:20:23', '2022-06-12 07:20:23'),
(10, 4, 'Skin & body care', NULL, '1655062988_sUHM8OisF45ZOQrN.png', 'Active', 'skin-&-body-care', 'beauty', 'beauty category.', '2022-06-12 16:43:08', '2022-06-20 19:47:53'),
(11, 4, 'Eyewear', NULL, '1655063657_wBrf8iWE5U25nfep.png', 'Active', 'eyewear', 'eyewear', 'eyewear category', '2022-06-12 16:54:17', '2022-06-12 16:54:17'),
(12, 4, 'Bags', NULL, '1655063924_al0QMxriJhxl343p.png', 'Active', 'bags', 'bags', 'bags category', '2022-06-12 16:58:44', '2022-06-12 16:58:44'),
(13, 4, 'Parfumes & Fragment', NULL, '1655761537_P7x6NTh5L700zeD3.png', 'Active', 'parfumes-&-fragment', 'Parfumes & Fragment', 'Parfumes & Fragment', '2022-06-20 18:45:37', '2022-06-20 18:45:37');

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
(1, 'Basic', '960.00', '30', '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(2, 'Silver', '2880.00', '90', '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(3, 'Gold', '5570.00', '180', '2022-06-12 05:59:25', '2022-06-12 05:59:25');

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
(1, 1, 'Marketing', '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(2, 1, 'Storage', '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(3, 1, 'Packaging', '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(4, 1, 'Shipping', '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(5, 2, '1 Months free', '2022-06-12 05:59:26', '2022-06-12 05:59:26'),
(6, 2, 'Marketing', '2022-06-12 05:59:26', '2022-06-12 05:59:26'),
(7, 2, 'Storage', '2022-06-12 05:59:26', '2022-06-12 05:59:26'),
(8, 2, 'Packaging', '2022-06-12 05:59:26', '2022-06-12 05:59:26'),
(9, 2, 'Shipping', '2022-06-12 05:59:26', '2022-06-12 05:59:26'),
(10, 3, '3 Months Free', '2022-06-12 05:59:26', '2022-06-12 05:59:26'),
(11, 3, 'Marketing', '2022-06-12 05:59:26', '2022-06-12 05:59:26'),
(12, 3, 'Storage', '2022-06-12 05:59:26', '2022-06-12 05:59:26'),
(13, 3, 'Packaging', '2022-06-12 05:59:26', '2022-06-12 05:59:26'),
(14, 3, 'Shipping', '2022-06-12 05:59:26', '2022-06-12 05:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `status` enum('Pending','Complete','Failed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1140, 'Pending', '2022-06-29 10:50:13', '2022-06-29 10:50:13'),
(2, 1, 2, 1140, 'Pending', '2022-06-30 00:25:25', '2022-06-30 00:25:25'),
(3, 1, 3, 1140, 'Pending', '2022-06-30 00:26:59', '2022-06-30 00:26:59'),
(4, 1, 4, 1000, 'Pending', '2022-07-03 08:43:38', '2022-07-03 08:43:38'),
(5, 1, 5, 1140, 'Pending', '2022-07-04 10:11:21', '2022-07-04 10:11:21');

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
(1, 'Super admin', 'admin@admin.com', '2022-06-12 05:59:25', '$2y$10$ESW.WRKxF2edDqT5Oj.LbugOcHbtFzslcx/NoZhm1giO16A2EKufy', NULL, 'Admin', NULL, NULL, '0.00', '0.00', NULL, NULL, '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(2, 'Mr. Seller-1', 'seller-1@demo.com', '2022-06-12 05:59:25', '$2y$10$oicqnIMIyidNTXDhXWHZzOeuGpQym6RLEutVdel6AuQE37Dv6MbMm', NULL, 'Seller', NULL, NULL, '0.00', '0.00', NULL, NULL, '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(3, 'Mr. Seller-2', 'seller-2@demo.com', '2022-06-12 05:59:25', '$2y$10$Z3LXg4k98i8aEXNbQxNmPOHkCfg.BcpKX8lw.uyLBi9DR6o31tqn2', NULL, 'Seller', NULL, NULL, '0.00', '0.00', NULL, NULL, '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(4, 'Mr. Customer', 'customer@customer.com', '2022-06-12 05:59:25', '$2y$10$jkDvRvfpuyCuQowNNm1qGuuns/b4m06ZNw0T7sYIQAx4m2ASuSwCq', NULL, 'Customer', NULL, NULL, '0.00', '0.00', NULL, NULL, '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(5, 'Mr. Customer 2', 'customer2@customer.com', '2022-06-12 05:59:25', '$2y$10$0h6Fc4P28sQy8K.XCgIhg.HPoEfL37xW5YOpHXvVqmsEJk3fioDo6', NULL, 'Customer', NULL, NULL, '0.00', '0.00', NULL, NULL, '2022-06-12 05:59:25', '2022-06-12 05:59:25'),
(6, 'Mr. Customer 3', 'customer3@customer.com', '2022-06-12 05:59:25', '$2y$10$fTYZ6OH0T5AL/wPhdtLu.etviLDFWV4W9pSLMd6wBdw0utp8YovLW', NULL, 'Customer', NULL, NULL, '0.00', '0.00', NULL, NULL, '2022-06-12 05:59:25', '2022-06-12 05:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `state_id`, `city_id`, `phone`, `postal_code`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 2850, 102845, '+1 (994) 802-8265', '11114', 'Reprehenderit praese', '2022-06-29 10:50:13', '2022-07-04 10:11:21');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
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
  ADD UNIQUE KEY `subcategories_slug_unique` (`slug`),
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
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102899;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscription_options`
--
ALTER TABLE `subscription_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

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
