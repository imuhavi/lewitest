-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 22, 2022 at 09:38 AM
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
(1, 'Size', '[\"S\",\"M\",\"L\",\"XL\",\"XXL\"]', '2022-09-19 21:03:04', '2022-09-19 21:04:26'),
(2, 'Color', '[\"Red\",\"Green\",\"Yellow\",\"Navy Blue\",\"Sky\",\"Black\"]', '2022-09-19 21:04:03', '2022-09-19 21:04:03');

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
(1, 'Default category', NULL, NULL, 'Default', 'Active', 'default_category', 'Default category', 'Default description', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(2, 'Womens', '1663615835_D97mmI9HsVbOKNbH.png', NULL, 'Deleteable', 'Active', 'womens', 'womens', 'womens', '2022-09-19 19:21:20', '2022-09-19 19:30:35'),
(3, 'Man', '1663615984_CWXltJY4M6ZpMeaq.png', NULL, 'Deleteable', 'Active', 'man', 'man', 'man', '2022-09-19 19:33:04', '2022-09-19 19:33:04');

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

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, 'b2a749b7-ace0-4fe6-a1b3-f72fa66b666b', 'database', 'default', '{\"uuid\":\"b2a749b7-ace0-4fe6-a1b3-f72fa66b666b\",\"displayName\":\"App\\\\Mail\\\\SubscriptionWillBeExpired\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":13:{s:8:\\\"mailable\\\";O:34:\\\"App\\\\Mail\\\\SubscriptionWillBeExpired\\\":29:{s:4:\\\"shop\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\Shop\\\";s:2:\\\"id\\\";i:2;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:22:\\\"rahmmed.info@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:8:\\\"markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:5:\\\"theme\\\";N;s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";s:29:\\\"\\u0000*\\u0000assertionableRenderStrings\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Swift_TransportException: Failed to authenticate on SMTP server with username \"support@5dots.sa\" using 2 possible authenticators. Authenticator LOGIN returned Expected response code 235 but got code \"535\", with message \"535 Incorrect authentication data\r\n\". Authenticator PLAIN returned Expected response code 235 but got code \"535\", with message \"535 Incorrect authentication data\r\n\". in /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/AuthHandler.php:191\nStack trace:\n#0 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpTransport.php(371): Swift_Transport_Esmtp_AuthHandler->afterEhlo(Object(Swift_SmtpTransport))\n#1 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(148): Swift_Transport_EsmtpTransport->doHeloCommand()\n#2 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer.php(65): Swift_Transport_AbstractSmtpTransport->start()\n#3 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(521): Swift_Mailer->send(Object(Swift_Message), Array)\n#4 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(288): Illuminate\\Mail\\Mailer->sendSwiftMessage(Object(Swift_Message))\n#5 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(187): Illuminate\\Mail\\Mailer->send(\'frontend.email....\', Array, Object(Closure))\n#6 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(188): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#8 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(65): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\MailManager))\n#9 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle(Object(Illuminate\\Mail\\MailManager))\n#10 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#12 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#13 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#14 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#15 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#16 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#17 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#18 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(120): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Mail\\SendQueuedMailable), false)\n#19 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#20 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#21 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#22 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Mail\\SendQueuedMailable))\n#23 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#24 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(428): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#26 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(172): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#27 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#28 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#29 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#32 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#33 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#34 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Console/Command.php(136): Illuminate\\Container\\Container->call(Array)\n#35 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/symfony/console/Command/Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#36 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Console/Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#37 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/symfony/console/Application.php(1028): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/symfony/console/Application.php(299): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/symfony/console/Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Console/Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 /Users/ahmmed/Desktop/Rasel/farish-ecom/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 {main}', '2022-09-21 13:04:59'),
(2, 'f5ff5be2-e7bc-469d-be41-c7773cda3b8a', 'database', 'default', '{\"uuid\":\"f5ff5be2-e7bc-469d-be41-c7773cda3b8a\",\"displayName\":\"App\\\\Mail\\\\SubscriptionWillBeExpired\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":13:{s:8:\\\"mailable\\\";O:34:\\\"App\\\\Mail\\\\SubscriptionWillBeExpired\\\":29:{s:4:\\\"shop\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\Shop\\\";s:2:\\\"id\\\";i:2;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:22:\\\"rahmmed.info@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:8:\\\"markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:5:\\\"theme\\\";N;s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";s:29:\\\"\\u0000*\\u0000assertionableRenderStrings\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Swift_TransportException: Failed to authenticate on SMTP server with username \"support@5dots.sa\" using 2 possible authenticators. Authenticator LOGIN returned Expected response code 235 but got code \"535\", with message \"535 Incorrect authentication data\r\n\". Authenticator PLAIN returned Expected response code 235 but got code \"535\", with message \"535 Incorrect authentication data\r\n\". in /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/AuthHandler.php:191\nStack trace:\n#0 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpTransport.php(371): Swift_Transport_Esmtp_AuthHandler->afterEhlo(Object(Swift_SmtpTransport))\n#1 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(148): Swift_Transport_EsmtpTransport->doHeloCommand()\n#2 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer.php(65): Swift_Transport_AbstractSmtpTransport->start()\n#3 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(521): Swift_Mailer->send(Object(Swift_Message), Array)\n#4 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(288): Illuminate\\Mail\\Mailer->sendSwiftMessage(Object(Swift_Message))\n#5 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(187): Illuminate\\Mail\\Mailer->send(\'frontend.email....\', Array, Object(Closure))\n#6 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(188): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#8 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(65): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\MailManager))\n#9 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle(Object(Illuminate\\Mail\\MailManager))\n#10 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#12 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#13 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#14 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#15 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#16 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#17 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#18 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(120): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Mail\\SendQueuedMailable), false)\n#19 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#20 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#21 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#22 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Mail\\SendQueuedMailable))\n#23 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#24 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(428): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#26 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(172): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#27 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#28 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#29 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#32 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#33 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Container/Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#34 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Console/Command.php(136): Illuminate\\Container\\Container->call(Array)\n#35 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/symfony/console/Command/Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#36 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Console/Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#37 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/symfony/console/Application.php(1028): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/symfony/console/Application.php(299): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/symfony/console/Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Console/Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 /Users/ahmmed/Desktop/Rasel/farish-ecom/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 /Users/ahmmed/Desktop/Rasel/farish-ecom/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 {main}', '2022-09-21 13:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_logo_white` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_logo_black` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost` decimal(8,2) NOT NULL DEFAULT '0.00',
  `shipping_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `tax` decimal(8,2) NOT NULL DEFAULT '0.00',
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
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `app_name`, `app_logo_white`, `app_logo_black`, `shipping_cost`, `shipping_days`, `tax`, `app_phone`, `app_email`, `app_address`, `app_copyright_text`, `seo_title`, `seo_description`, `seo_keywords`, `mail_type`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encryption`, `mail_address`, `mail_from_name`, `app_id`, `app_secret`, `created_at`, `updated_at`) VALUES
(1, '5dots', '', '', '0.00', '7', '0.00', '0534588012', 'info@5dots.sa', 'Al-Khobar', 'Copyright © 2022 [5dots.sa] All rights reserved.', '5dots', '5dots Ecommerce', '5dots, Ecommerce', 'SMTP', '5dots.sa', '465', 'support@5dots.sa', 'Pt!bPT{fJ1UC', 'ssl', 'support@5dots.sa', '5dots', '714160622894-b6r69hrksht10le06klackjee5q3uaii.apps.googleusercontent.com', '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', '2022-09-20 05:00:07', '2022-09-20 05:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(4, 'default', '{\"uuid\":\"78c88d9f-abce-458d-b605-f9c197de8726\",\"displayName\":\"App\\\\Mail\\\\SubscriptionWillBeExpired\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":13:{s:8:\\\"mailable\\\";O:34:\\\"App\\\\Mail\\\\SubscriptionWillBeExpired\\\":29:{s:4:\\\"shop\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\Shop\\\";s:2:\\\"id\\\";i:2;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:22:\\\"rahmmed.info@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:8:\\\"markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:5:\\\"theme\\\";N;s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";s:29:\\\"\\u0000*\\u0000assertionableRenderStrings\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1663826505, 1663826505),
(5, 'default', '{\"uuid\":\"4cf5120d-1715-4a47-a9e0-7f725f39d6e1\",\"displayName\":\"App\\\\Mail\\\\ShopCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":13:{s:8:\\\"mailable\\\";O:20:\\\"App\\\\Mail\\\\ShopCreated\\\":29:{s:4:\\\"shop\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\Shop\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:22:\\\"rahmmed.bd24@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:8:\\\"markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:5:\\\"theme\\\";N;s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";s:29:\\\"\\u0000*\\u0000assertionableRenderStrings\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1663837633, 1663837633),
(6, 'default', '{\"uuid\":\"1dfefece-bf8d-42d1-a231-7c0c1797f17e\",\"displayName\":\"App\\\\Mail\\\\ShopCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":13:{s:8:\\\"mailable\\\";O:20:\\\"App\\\\Mail\\\\ShopCreated\\\":29:{s:4:\\\"shop\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\Shop\\\";s:2:\\\"id\\\";i:4;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:22:\\\"rahmmed.bd24@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:8:\\\"markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:5:\\\"theme\\\";N;s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";s:29:\\\"\\u0000*\\u0000assertionableRenderStrings\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1663838271, 1663838271),
(7, 'default', '{\"uuid\":\"570ff62f-9a46-42b4-a673-0b11ec1e6b50\",\"displayName\":\"App\\\\Mail\\\\ShopCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":13:{s:8:\\\"mailable\\\";O:20:\\\"App\\\\Mail\\\\ShopCreated\\\":29:{s:4:\\\"shop\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\Shop\\\";s:2:\\\"id\\\";i:5;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:22:\\\"rahmmed.bd24@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:8:\\\"markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:5:\\\"theme\\\";N;s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";s:29:\\\"\\u0000*\\u0000assertionableRenderStrings\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1663838687, 1663838687),
(8, 'default', '{\"uuid\":\"1f6d8d52-b2b1-42c7-a24c-01fe00aa4cce\",\"displayName\":\"App\\\\Mail\\\\ShopCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":13:{s:8:\\\"mailable\\\";O:20:\\\"App\\\\Mail\\\\ShopCreated\\\":29:{s:4:\\\"shop\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\Shop\\\";s:2:\\\"id\\\";i:6;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:22:\\\"rahmmed.bd24@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:8:\\\"markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:5:\\\"theme\\\";N;s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";s:29:\\\"\\u0000*\\u0000assertionableRenderStrings\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1663838960, 1663838960);

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
(10, '2022_01_13_075341_create_attributes_table', 1),
(11, '2022_04_02_110929_create_sliders_table', 1),
(12, '2022_04_03_080520_create_products_table', 1),
(13, '2022_04_03_080549_create_product_images_table', 1),
(14, '2022_05_08_100031_create_subscriptions_table', 1),
(15, '2022_05_08_100639_create_subscription_options_table', 1),
(16, '2022_05_11_105008_create_shops_table', 1),
(17, '2022_05_17_100953_create_states_table', 1),
(18, '2022_05_17_101032_create_cities_table', 1),
(19, '2022_05_17_111404_create_countries_table', 1),
(20, '2022_06_21_065945_create_user_details_table', 1),
(21, '2022_06_21_070032_create_orders_table', 1),
(22, '2022_06_21_071020_create_transactions_table', 1),
(23, '2022_06_21_072329_create_order_details_table', 1),
(24, '2022_08_22_233442_create_withdraws_table', 1),
(25, '2022_08_26_230710_create_seller_transactions_table', 1),
(26, '2021_12_31_120832_create_general_settings_table', 2),
(27, '2022_09_21_185954_create_jobs_table', 3),
(28, '2022_09_22_121916_create_notifications_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('2d34885c-6d52-42ba-b537-08036f5a0338', 'App\\Notifications\\NotifySellerRegister', 'App\\Models\\User', 1, '{\"user_id\":6,\"name\":\"Matthew Sharp\"}', NULL, '2022-09-22 09:29:20', '2022-09-22 09:29:20'),
('49ae9055-4531-40cc-986c-6105e3ee7491', 'App\\Notifications\\NotifyCreateProduct', 'App\\Models\\User', 1, '{\"product_id\":11,\"name\":\"Quinn Mcbride\"}', NULL, '2022-09-22 08:54:11', '2022-09-22 08:54:11'),
('84bf2524-f370-45e1-940b-73bfd7dbfe57', 'App\\Notifications\\NotifySellerRegister', 'App\\Models\\User', 1, '{\"user_id\":5,\"name\":null}', NULL, '2022-09-22 09:24:47', '2022-09-22 09:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL COMMENT 'customer_id',
  `coupon_id` bigint(20) UNSIGNED DEFAULT NULL,
  `coupon_discount_amount` double(10,2) NOT NULL DEFAULT '0.00',
  `shipping_cost` double NOT NULL DEFAULT '0',
  `tax` double(10,2) NOT NULL DEFAULT '0.00',
  `amount` double(10,2) NOT NULL DEFAULT '0.00',
  `payment_method` enum('Card','COD') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'COD',
  `is_paid` enum('Paid','Unpaid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unpaid',
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Pending','Accept','Complete','Cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL COMMENT 'seller_id',
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `unit_price` double(10,2) NOT NULL DEFAULT '0.00',
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` bigint(20) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `payment_invoices`
--

INSERT INTO `payment_invoices` (`id`, `order_id`, `client_id`, `InvoiceId`, `InvoiceStatus`, `InvoiceValue`, `Currency`, `InvoiceDisplayValue`, `TransactionId`, `TransactionStatus`, `PaymentGateway`, `PaymentId`, `CardNumber`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 1697767, 'Paid', '89.756', 'KD', '1,104.000 SR', 1697767, 'Succss', 'VISA/MASTER', 7071697767127318374, '450875xxxxxx1019', '2022-09-22 09:07:01', '2022-09-22 09:07:01'),
(2, 4, 4, 1697790, 'Paid', '89.756', 'KD', '1,104.000 SR', 1697790, 'Succss', 'VISA/MASTER', 7071697790127319273, '450875xxxxxx1019', '2022-09-22 09:17:40', '2022-09-22 09:17:40'),
(3, 5, 5, 1697802, 'Paid', '89.756', 'KD', '1,104.000 SR', 1697802, 'Succss', 'VISA/MASTER', 7071697802127319973, '450875xxxxxx1019', '2022-09-22 09:23:19', '2022-09-22 09:23:19'),
(4, 5, 5, 1697802, 'Paid', '89.756', 'KD', '1,104.000 SR', 1697802, 'Succss', 'VISA/MASTER', 7071697802127319973, '450875xxxxxx1019', '2022-09-22 09:24:10', '2022-09-22 09:24:10'),
(5, 5, 5, 1697802, 'Paid', '89.756', 'KD', '1,104.000 SR', 1697802, 'Succss', 'VISA/MASTER', 7071697802127319973, '450875xxxxxx1019', '2022-09-22 09:24:36', '2022-09-22 09:24:36'),
(6, 6, 6, 1697813, 'Paid', '89.756', 'KD', '1,104.000 SR', 1697813, 'Succss', 'VISA/MASTER', 7071697813127321072, '450875xxxxxx1019', '2022-09-22 09:29:11', '2022-09-22 09:29:11');

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
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `products` (`id`, `user_id`, `category_id`, `sub_category_id`, `name`, `slug`, `product_sku`, `description`, `thumbnail`, `pdf`, `status`, `purchase_price`, `price`, `discount_type`, `discount`, `unit`, `min`, `max`, `quantity`, `tags`, `isCashAvailable`, `attributes`, `meta_title`, `meta_description`, `meta_image`, `is_draft`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 5, 'Man Casual Shirt', 'man-casual-shirt', 'RA-3934-2', '<p>Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database,</p>\r\n\r\n<p>you will be prompted for confirmation before the seeders are executed in the&nbsp;<code>production</code>&nbsp;environment. To force the seeders to run without a prompt.</p>\r\n\r\n<p>In order to protect you from running seeding commands against your production database you will be prompted for confirmation before the seeders are executed in the&nbsp;<code>production</code>&nbsp;environment. To force the seeders to run without a prompt.</p>', '1663651570_04R9JxBDHI04jSz7.jpeg', NULL, 'Active', '120.00', '180.00', NULL, NULL, 'pc', 1, 10, 100, 'shirt,man,Ut obcaecati qui fac', 0, '[\"[\\\"2\\\",\\\"Red\\\"]\",\"[\\\"2\\\",\\\"Navy Blue\\\"]\",\"[\\\"2\\\",\\\"Sky\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\",\"[\\\"1\\\",\\\"S\\\"]\",\"[\\\"1\\\",\\\"M\\\"]\",\"[\\\"1\\\",\\\"L\\\"]\",\"[\\\"1\\\",\\\"XL\\\"]\"]', 'Ab excepturi amet a', 'Nostrud temporibus q', NULL, 0, '2022-09-20 05:26:11', '2022-09-21 13:38:50'),
(2, 2, 3, 7, 'Man Perfume', 'man-perfume', 'RA-5939-2', '<p>Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database,</p>\r\n\r\n<p>you will be prompted for confirmation before the seeders are executed in the&nbsp;<code>production</code>&nbsp;environment. To force the seeders to run without a prompt.</p>\r\n\r\n<p>In order to protect you from running seeding commands against your production database you will be prompted for confirmation before the seeders are executed in the&nbsp;<code>production</code>&nbsp;environment. To force the seeders to run without a prompt.</p>', '1663652282_33CfYH59r0dbwiZt.png', NULL, 'Active', '200.00', '300.00', 'Percent', 5, 'pc', 1, 10, 100, 'perfume', 0, NULL, 'Man Perfume', 'Man Perfume', NULL, 0, '2022-09-20 05:38:02', '2022-09-21 13:38:50'),
(3, 2, 3, 6, 'Man Watch', 'man-watch', 'RA-7260-2', '<p>Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database,</p>\r\n\r\n<p>you will be prompted for confirmation before the seeders are executed in the&nbsp;<code>production</code>&nbsp;environment. To force the seeders to run without a prompt.</p>\r\n\r\n<p>In order to protect you from running seeding commands against your production database you will be prompted for confirmation before the seeders are executed in the&nbsp;<code>production</code>&nbsp;environment. To force the seeders to run without a prompt.</p>', '1663652473_UcJSKLgp2uOGiH6u.png', NULL, 'Active', '150.00', '250.00', 'Percent', 10, 'pc', 1, 10, 100, 'man,watch', 0, '[\"[\\\"2\\\",\\\"Navy Blue\\\"]\",\"[\\\"2\\\",\\\"Sky\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\"]', 'Man Watch', 'Man Watch', NULL, 0, '2022-09-20 05:41:13', '2022-09-21 13:38:50'),
(4, 2, 3, 6, 'Man formal shoes', 'man-formal-shoes', 'RA-2377-2', '<p>Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database,</p>\r\n\r\n<p>you will be prompted for confirmation before the seeders are executed in the&nbsp;<code>production</code>&nbsp;environment. To force the seeders to run without a prompt.</p>\r\n\r\n<p>In order to protect you from running seeding commands against your production database you will be prompted for confirmation before the seeders are executed in the&nbsp;<code>production</code>&nbsp;environment. To force the seeders to run without a prompt.</p>', '1663652783_S7X4hDnLciWgyDDq.jpg', NULL, 'Active', '180.00', '250.00', 'Percent', 5, 'Pieces', 1, 10, 100, 'shoes', 0, '[\"[\\\"2\\\",\\\"Green\\\"]\",\"[\\\"2\\\",\\\"Navy Blue\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\",\"[\\\"1\\\",\\\"S\\\"]\",\"[\\\"1\\\",\\\"M\\\"]\",\"[\\\"1\\\",\\\"L\\\"]\",\"[\\\"1\\\",\\\"XL\\\"]\"]', 'Man formal shoes', 'Man formal shoes', NULL, 0, '2022-09-20 05:46:23', '2022-09-21 13:38:50'),
(5, 2, 2, 2, 'Stone Freeman', 'A deserunt et esse v', 'RA-4309-2', '<p>Expedita qui illo di.</p>', '1663828508_P6zvnV76rIrkUeKs.png', NULL, 'Active', '344.00', '567.00', 'Percent', 10, 'Aut modi do ea volup', 50, 72, 6, 'Necessitatibus quis', 1, '[\"[\\\"2\\\",\\\"Green\\\"]\",\"[\\\"2\\\",\\\"Navy Blue\\\"]\",\"[\\\"2\\\",\\\"Sky\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\",\"[\\\"1\\\",\\\"M\\\"]\",\"[\\\"1\\\",\\\"L\\\"]\",\"[\\\"1\\\",\\\"XL\\\"]\",\"[\\\"1\\\",\\\"XXL\\\"]\"]', 'Tempore consequatur', 'Distinctio Aspernat', NULL, 0, '2022-09-22 06:35:08', '2022-09-22 06:35:08'),
(7, 2, 2, 1, 'Kyla Sparks', 'Corrupti iste atque', 'RA-6733-2', '<p>Irure molestias sit .</p>', '1663829563_2TZEPSgnyQGhgLCC.jpg', NULL, 'Active', '771.00', '215.00', NULL, NULL, 'pc', 5, 35, 121, 'Pariatur Dolorem su', 0, '[\"[\\\"2\\\",\\\"Yellow\\\"]\",\"[\\\"2\\\",\\\"Navy Blue\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\",\"[\\\"1\\\",\\\"S\\\"]\",\"[\\\"1\\\",\\\"L\\\"]\"]', 'Beatae minim dolor d', 'Vel molestiae labori', NULL, 1, '2022-09-22 06:52:43', '2022-09-22 06:52:43'),
(8, 2, 2, 3, 'Mason Knox', 'Sit vel aut incidunt', 'RA-6428-2', '<p>Voluptatem, voluptat.</p>', '1663830020_pGWwhT3a2DDkb7Qc.png', NULL, 'Active', '926.00', '501.00', NULL, NULL, 'pc', 1, 7, 310, 'Recusandae Incididu', 1, '[\"[\\\"2\\\",\\\"Navy Blue\\\"]\",\"[\\\"2\\\",\\\"Sky\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\",\"[\\\"1\\\",\\\"M\\\"]\",\"[\\\"1\\\",\\\"L\\\"]\"]', 'Ad provident placea', 'Nobis velit cupidita', NULL, 0, '2022-09-22 07:00:20', '2022-09-22 07:00:20'),
(9, 2, 2, 2, 'Jacob Anderson', 'Aut in dolores et ma', 'RA-3433-2', '<p>Aut doloribus aliqua.</p>', '1663830156_0hP3ATkt5BueBorQ.png', NULL, 'Active', '544.00', '174.00', NULL, NULL, 'Cm', 3, 97, 493, 'Magnam tempore aliq', 1, '[\"[\\\"2\\\",\\\"Navy Blue\\\"]\",\"[\\\"1\\\",\\\"M\\\"]\",\"[\\\"1\\\",\\\"XXL\\\"]\"]', 'Autem similique veni', 'Ipsum eaque modi al', NULL, 0, '2022-09-22 07:02:36', '2022-09-22 07:02:36'),
(10, 2, 3, 5, 'Zeph Garner', 'Iusto pariatur Ex v', 'RA-4781-2', '<p>Pariatur. Eum quam q.</p>', '1663830749_PtxOXfmQDFkAz8qF.jpg', NULL, 'Active', '234.00', '456.00', NULL, NULL, 'Dignissimos ipsum c', 1, 39, 48, 'Quia alias neque nul', 1, '[\"[\\\"2\\\",\\\"Green\\\"]\",\"[\\\"2\\\",\\\"Sky\\\"]\",\"[\\\"2\\\",\\\"Black\\\"]\",\"[\\\"1\\\",\\\"XL\\\"]\"]', 'Distinctio Et sed m', 'Mollitia sit rerum d', NULL, 0, '2022-09-22 07:12:29', '2022-09-22 07:12:29'),
(11, 2, 2, 1, 'Quinn Mcbride', 'Et provident aute r', 'RA-9210-2', '<p>Eveniet, magna enim .</p>', '1663836851_JCY8cztV882VoDZe.jpg', NULL, 'Active', '566.00', '997.00', NULL, NULL, 'cm', 1, 13, 381, 'Eaque harum ut volup', 0, NULL, 'Similique suscipit a', 'Sint quis rerum vol', NULL, 0, '2022-09-22 08:54:11', '2022-09-22 08:54:11');

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
(1, 1, '1663651571_RtCys1v4x1Mf8YuE.jpeg', '2022-09-20 05:26:11', '2022-09-20 05:26:11'),
(2, 1, '1663651571_E91l3herWpPjmfFI.jpeg', '2022-09-20 05:26:11', '2022-09-20 05:26:11'),
(3, 1, '1663651571_zP13OtRc4YNEp5IW.png', '2022-09-20 05:26:11', '2022-09-20 05:26:11'),
(4, 1, '1663651571_4qxEYhR0AjAMnzDM.jpeg', '2022-09-20 05:26:11', '2022-09-20 05:26:11'),
(6, 2, '1663652282_dLV7t69a6IMdSefG.png', '2022-09-20 05:38:03', '2022-09-20 05:38:03'),
(7, 2, '1663652283_tFLtI9uEQ7hxPqEc.png', '2022-09-20 05:38:03', '2022-09-20 05:38:03'),
(8, 2, '1663652283_pnpsko2iNMv0xwcg.png', '2022-09-20 05:38:03', '2022-09-20 05:38:03'),
(9, 2, '1663652283_0N2McHCv6BdRGjGE.png', '2022-09-20 05:38:03', '2022-09-20 05:38:03'),
(10, 3, '1663652473_sVUrA3lnkGv89fak.jpeg', '2022-09-20 05:41:13', '2022-09-20 05:41:13'),
(11, 3, '1663652473_F1h0zGRPeehZPHuM.jpeg', '2022-09-20 05:41:14', '2022-09-20 05:41:14'),
(12, 3, '1663652474_2SNfQyqRlQNPBT0Y.png', '2022-09-20 05:41:14', '2022-09-20 05:41:14'),
(13, 3, '1663652474_gpDb4P4wbey6QS6F.png', '2022-09-20 05:41:14', '2022-09-20 05:41:14'),
(14, 4, '1663652783_WIuMp8dJkPcZeMJ5.png', '2022-09-20 05:46:23', '2022-09-20 05:46:23'),
(15, 4, '1663652783_cIhIxlh6kNABWDg3.jpeg', '2022-09-20 05:46:23', '2022-09-20 05:46:23'),
(16, 4, '1663652783_2cgaOZkSSu0wKJpH.jpg', '2022-09-20 05:46:23', '2022-09-20 05:46:23'),
(17, 4, '1663652783_FaUhzBl0tDo1qz63.jpg', '2022-09-20 05:46:23', '2022-09-20 05:46:23'),
(18, 5, '1663828508_k9yRZZp2BbjxkhK2.png', '2022-09-22 06:35:08', '2022-09-22 06:35:08'),
(19, 5, '1663828508_9e94tLBus36iZCvp.png', '2022-09-22 06:35:08', '2022-09-22 06:35:08'),
(21, 7, '1663829563_4zDnJco7NBJJH3ke.jpg', '2022-09-22 06:52:43', '2022-09-22 06:52:43'),
(22, 7, '1663829563_SDRQMTfavpmkvZFO.jpg', '2022-09-22 06:52:43', '2022-09-22 06:52:43'),
(23, 7, '1663829563_1kSWcnRg808lCjZs.jpg', '2022-09-22 06:52:43', '2022-09-22 06:52:43'),
(24, 8, '1663830020_seFArTCUBn8TIhch.png', '2022-09-22 07:00:20', '2022-09-22 07:00:20'),
(25, 8, '1663830020_06ZCIIsiKDH9f8LG.png', '2022-09-22 07:00:21', '2022-09-22 07:00:21'),
(26, 8, '1663830021_bIFvYGEGRNkTPQVg.png', '2022-09-22 07:00:21', '2022-09-22 07:00:21'),
(27, 9, '1663830156_qOLGTbLV9Nssa9jk.png', '2022-09-22 07:02:36', '2022-09-22 07:02:36'),
(28, 9, '1663830156_1JwxFlC0lavvcsgM.png', '2022-09-22 07:02:36', '2022-09-22 07:02:36'),
(29, 9, '1663830156_TRYWh5zX6qlFEtIq.png', '2022-09-22 07:02:36', '2022-09-22 07:02:36'),
(30, 10, '1663830749_nSjWkxL9WJeG4KGg.jpg', '2022-09-22 07:12:29', '2022-09-22 07:12:29'),
(31, 10, '1663830749_hCkDglGSjag278RJ.jpg', '2022-09-22 07:12:29', '2022-09-22 07:12:29'),
(32, 10, '1663830749_vnxhWQR93D0eHXt6.jpg', '2022-09-22 07:12:29', '2022-09-22 07:12:29'),
(33, 10, '1663830749_UdaKF0yz5j7HixOu.jpg', '2022-09-22 07:12:29', '2022-09-22 07:12:29'),
(34, 11, '1663836851_JVctE15ogrq6t5g3.jpg', '2022-09-22 08:54:11', '2022-09-22 08:54:11'),
(35, 11, '1663836851_FCDdmlpHIKiiQPEY.jpg', '2022-09-22 08:54:11', '2022-09-22 08:54:11'),
(36, 11, '1663836851_5Hmmlr1ZEECs9Dff.jpg', '2022-09-22 08:54:11', '2022-09-22 08:54:11'),
(37, 11, '1663836851_waFShAZj7mQSWA92.jpg', '2022-09-22 08:54:11', '2022-09-22 08:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `seller_transactions`
--

CREATE TABLE `seller_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_invoice_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_transactions`
--

INSERT INTO `seller_transactions` (`id`, `user_id`, `payment_invoice_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '1,104.000 SR', '2022-09-22 09:07:01', '2022-09-22 09:07:01'),
(2, 4, 2, '1,104.000 SR', '2022-09-22 09:17:40', '2022-09-22 09:17:40'),
(3, 5, 3, '1,104.000 SR', '2022-09-22 09:23:19', '2022-09-22 09:23:19'),
(4, 5, 4, '1,104.000 SR', '2022-09-22 09:24:10', '2022-09-22 09:24:10'),
(5, 5, 5, '1,104.000 SR', '2022-09-22 09:24:36', '2022-09-22 09:24:36'),
(6, 6, 6, '1,104.000 SR', '2022-09-22 09:29:11', '2022-09-22 09:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_logo` text COLLATE utf8mb4_unicode_ci,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `user_id`, `subscription_id`, `shop_name`, `account_number`, `shop_logo`, `state_id`, `city_id`, `postal_code`, `address`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 'Rasel Shops', 'SA2345678976543212345', '1663826720_YyjZ6wp5Wfr78hvY.png', 2856, 102835, '99307', 'Al qatif Road', 'Active', '2022-09-19 20:15:14', '2022-09-22 06:05:20'),
(3, 3, 1, 'Zenaida Tate', 'SA000000002384943409873', '1663837503_8fybx89ZYsl8zsHk.png', 2850, 102833, '89711', 'Optio fugiat quis', 'Inactive', '2022-09-22 09:05:03', '2022-09-22 09:05:03'),
(4, 4, 1, 'Bruce Spence', 'SA00000000283933992345', '1663838184_hQJggqmJMc6p0gOJ.png', 2855, 102856, '46768', 'Distinctio Nemo aut', 'Inactive', '2022-09-22 09:16:24', '2022-09-22 09:16:24'),
(5, 5, 1, 'Bradley Beasley', 'SA00000000234567890987', '1663838546_LPX5WV2dOPqbFaxY.png', 2856, 102805, '16200', 'Et cum dicta fugiat', 'Inactive', '2022-09-22 09:22:26', '2022-09-22 09:22:26'),
(6, 6, 1, 'Matthew Sharp', 'SA000000002234884992983', '1663838885_PXoI1ke6swRO5NfT.png', 2851, 102839, '85318', 'Molestiae anim sunt', 'Inactive', '2022-09-22 09:28:05', '2022-09-22 09:28:05');

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
(1, 2, 'Women Fashion', 'New Collection', '1663616920_qH63dddnQZwv3vnW.png', 'Active', '2022-09-19 19:48:40', '2022-09-19 19:48:40'),
(2, 3, 'Man Fashion', 'New Collection', '1663617941_AIN7NGAE2yfg2IM8.png', 'Active', '2022-09-19 19:49:07', '2022-09-19 20:05:41');

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
(1, 2, 'women cloths', NULL, '1663615386_4XkRootowNh0N5bf.png', 'Active', 'women-cloths', 'women cloths', 'women cloths', '2022-09-19 19:23:06', '2022-09-19 19:23:06'),
(2, 2, 'women accessories', NULL, '1663615476_dyURlraF8C0BAsvb.png', 'Active', 'women-accessories', 'women accessories', 'women accessories', '2022-09-19 19:24:36', '2022-09-19 19:24:36'),
(3, 2, 'skin care', NULL, '1663615623_alVII6xnTQqjBo49.png', 'Active', 'skin-care', 'skin care', 'skin care', '2022-09-19 19:27:03', '2022-09-19 19:27:03'),
(4, 2, 'women perfume', NULL, '1663615699_RfFnKkrZzjWVYWWy.png', 'Active', 'women-perfume', 'women perfume', 'women perfume', '2022-09-19 19:28:19', '2022-09-19 19:28:19'),
(5, 3, 'Man Cloths', NULL, '1663616146_piTbhBRzYpjK76Pz.png', 'Active', 'man-cloths', 'Man Cloths', 'Man Cloths', '2022-09-19 19:35:46', '2022-09-19 19:35:46'),
(6, 3, 'Man Accessories', NULL, '1663616229_UG3SM7YVgDIDYo7Z.png', 'Active', 'man-accessories', 'Man Accessories', 'Man Accessories', '2022-09-19 19:37:09', '2022-09-19 19:37:09'),
(7, 3, 'Man Perfume', NULL, '1663616333_tvJsIDJgqx2QnhQQ.png', 'Active', 'man-perfume', 'Man Perfume', 'Man Perfume', '2022-09-19 19:38:53', '2022-09-19 19:38:53'),
(8, 3, 'Man Care', NULL, '1663616390_VSgEmuh23bXXhApX.png', 'Active', 'man-care', 'Man Care', 'Man Care', '2022-09-19 19:39:51', '2022-09-19 19:39:51');

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
(1, 'Basic', '960.00', '30', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(2, 'Silver', '2880.00', '90', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(3, 'Gold', '5570.00', '180', '2022-09-19 18:55:50', '2022-09-19 18:55:50');

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
(1, 1, 'Marketing', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(2, 1, 'Storage', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(3, 1, 'Packaging', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(4, 1, 'Shipping', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(5, 2, '1 Months free', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(6, 2, 'Marketing', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(7, 2, 'Storage', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(8, 2, 'Packaging', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(9, 2, 'Shipping', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(10, 3, '3 Months Free', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(11, 3, 'Marketing', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(12, 3, 'Storage', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(13, 3, 'Packaging', '2022-09-19 18:55:50', '2022-09-19 18:55:50'),
(14, 3, 'Shipping', '2022-09-19 18:55:50', '2022-09-19 18:55:50');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `role` enum('Admin','Seller','Customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Customer',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `provider_id`, `provider`, `avatar`, `role`, `phone`, `balance`, `due_balance`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Farish Ahmmed', '5dots.sa@gmail.com', '2022-09-19 18:55:50', '$2y$10$MW9QFaIMrSNLHHxscLDykeGXqE2Jltu/rCORGttT7pDcDpINl.i0a', NULL, NULL, NULL, 'Admin', '0572868132', '0.00', '0.00', NULL, NULL, '2022-09-19 18:55:50', '2022-09-19 20:09:52'),
(2, 'Rasel Ahmmed', 'rahmmed.info@gmail.com', '2022-09-19 20:18:01', '$2y$10$UmbaAFbFPRp5GW2Dpa1zpuGUvuuG3tUiv32axEx.b/xOOlxgwRBve', NULL, NULL, '1663619684_bhbybXJY92Z9gZFv.jpeg', 'Seller', '0578868132', '0.00', '0.00', 'Al qatif Road', NULL, '2022-09-19 20:15:14', '2022-09-19 20:34:44'),
(3, 'Amela Aguilar', 'rahmmed.bd25@gmail.com', '2022-09-22 09:09:29', '$2y$10$4DGo8zvAApAe2I.qW2hd0OH6KikXw5OENXcVANyvNhIrN4sitbQCS', NULL, NULL, NULL, 'Seller', '0527423487', '0.00', '0.00', 'Optio fugiat quis', NULL, '2022-09-22 09:05:03', '2022-09-22 09:09:29'),
(4, 'Hamish Cote', 'rahmmed.bd26@gmail.com', NULL, '$2y$10$KBlzLi64/CIZEpW.lTRL2ubgs2sqc75LV6bwJHgeuvcEHS9HsNRky', NULL, NULL, NULL, 'Seller', '0525598390', '0.00', '0.00', 'Distinctio Nemo aut', NULL, '2022-09-22 09:16:24', '2022-09-22 09:16:24'),
(5, 'Minerva Little', 'rahmmed.bd27@gmail.com', NULL, '$2y$10$UkdcW8zCp/bDgHzMuCAm6OfgH.gaDj4DZ8lKLWQTQDI.b9yz/q8UG', NULL, NULL, NULL, 'Seller', '0582534587', '0.00', '0.00', 'Et cum dicta fugiat', NULL, '2022-09-22 09:22:26', '2022-09-22 09:22:26'),
(6, 'Justine Fields', 'rahmmed.bd24@gmail.com', NULL, '$2y$10$LAgdacHUDHMjXzNayBTF7ufJ.bKCJ34rSnzbh.19/V88X49GLfBYO', NULL, NULL, NULL, 'Seller', '0527434893', '0.00', '0.00', 'Molestiae anim sunt', NULL, '2022-09-22 09:28:05', '2022-09-22 09:28:05');

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

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(10,2) NOT NULL DEFAULT '0.00',
  `status` enum('Pending','Accept','Paid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
  ADD UNIQUE KEY `products_product_sku_unique` (`product_sku`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `seller_transactions`
--
ALTER TABLE `seller_transactions`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_invoices`
--
ALTER TABLE `payment_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `seller_transactions`
--
ALTER TABLE `seller_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2862;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

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
