-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2016 at 11:46 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `robo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '1944786917@qq.com', '$2y$10$txRw.WnuIZnmVLkCzwjyDOk6OFxVtk0ivQJy5er6xorEk0Lt58qye', 'EsOMn4w1r5uiBOoehiDAFPctpOUl8VTP1vRt5mIVbAxhrb5LEQD9gfPKKyKb', '2016-09-13 07:44:25', '2016-09-23 13:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cname`, `title`, `father_id`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'about/', '关于Gold Many', 0, '2016-09-14 00:00:00', '2016-09-28 00:56:57', 1),
(2, 'trade-conditions/account-types/', '条件', 0, '2016-09-14 08:25:21', '2016-09-14 08:25:21', 1),
(3, 'trading-accounts/standard/', '账户', 0, '2016-09-14 08:47:28', '2016-09-28 00:47:17', 1),
(4, 'operations/', '交易服务', 0, '2016-09-14 08:48:06', '2016-09-14 08:48:06', 1),
(5, 'forex-affiliate/', '合作伙伴', 0, '2016-09-14 08:48:46', '2016-09-14 08:48:46', 1),
(6, 'beginner/', '学习资源', 0, '2016-09-14 08:51:05', '2016-09-14 08:51:05', 1),
(7, 'analytics/', '分析', 0, '2016-09-14 08:51:28', '2016-09-14 08:51:28', 1),
(9, 'about/why-goldmany/', '为什么选择GoldMany', 1, '2016-09-14 09:21:16', '2016-09-28 01:45:28', 1),
(10, 'about/mission/', '公司宗旨', 1, '2016-09-17 03:15:00', '2016-09-17 03:15:00', 1),
(11, 'about/business-model/', '商业模式', 1, '2016-09-17 03:15:24', '2016-09-17 03:15:24', 1),
(12, 'about/liquidity-providers/', '流动性', 1, '2016-09-17 03:15:50', '2016-09-17 03:15:50', 1),
(13, 'about/regulation/', '公司监管', 1, '2016-09-17 03:16:24', '2016-09-17 03:16:24', 1),
(14, 'about/news/', '公司新闻', 1, '2016-09-17 03:16:59', '2016-09-17 03:16:59', 1),
(15, 'about/feedback/', '反馈建议', 1, '2016-09-17 03:17:30', '2016-09-17 03:17:30', 1),
(16, 'about/faq/', '常见问题', 1, '2016-09-17 03:17:56', '2016-09-17 03:17:56', 1),
(18, 'trade-conditions/account-types/', '账户类型', 2, '2016-09-17 03:22:28', '2016-09-17 03:23:49', 1),
(19, 'trade-conditions/specifications/', '合约细则', 2, '2016-09-17 03:24:20', '2016-09-17 03:24:20', 1),
(20, 'trade-conditions/ecn/', '专业ECN 账户', 2, '2016-09-17 06:26:00', '2016-09-17 06:26:00', 1),
(21, 'about/sponsorship/', '锦标赛', 1, '2016-09-28 00:53:04', '2016-09-28 00:53:04', 1),
(22, 'about/exhibition/', 'Gold Many 展览会', 1, '2016-09-28 00:56:40', '2016-09-28 00:56:40', 1),
(23, 'about/awards/', '授予奖项', 1, '2016-09-28 00:59:09', '2016-09-28 00:59:09', 1),
(24, 'about/media/', 'GoldMany 媒体', 1, '2016-09-28 00:59:50', '2016-09-28 00:59:50', 1),
(25, 'about/contacts/', '联系我们', 1, '2016-09-28 01:00:31', '2016-09-28 01:00:31', 1),
(26, 'trade-conditions/cfd-trading-goldmany/', 'CFD(差价合约）', 2, '2016-09-28 01:13:06', '2016-09-28 01:13:06', 1),
(27, 'trade-conditions/forex-order-types/', '订单类型', 2, '2016-09-28 01:13:41', '2016-09-28 01:13:41', 1),
(28, 'trade-conditions/terminals/', '交易终端', 2, '2016-09-28 01:14:03', '2016-09-28 01:14:03', 1),
(29, 'trade-conditions/metatrader4-mt4/', ' MetaTrader 4 (MT4)', 2, '2016-09-28 01:14:44', '2016-09-28 01:14:44', 1),
(30, 'trade-conditions/webtrader/', '«移动外汇» 服务', 2, '2016-09-28 01:15:34', '2016-09-28 01:15:34', 1),
(31, 'trading-accounts/standard/', '开设账户', 3, '2016-09-28 01:17:08', '2016-09-28 01:17:08', 1),
(32, 'trading-accounts/demo/', '模拟账户', 3, '2016-09-28 01:17:28', '2016-09-28 01:17:28', 1),
(33, 'trading-accounts/download-metatrader4-mt4/', '下载MT4交易平台', 3, '2016-09-28 01:17:55', '2016-09-28 01:17:55', 1),
(34, 'trading-accounts/account-management/', '会员中心', 3, '2016-09-28 01:18:15', '2016-09-28 01:18:15', 1),
(35, 'operations/bonuses-promotions/', '赠金,计划和活动', 4, '2016-09-28 01:21:54', '2016-09-28 01:21:54', 1),
(36, 'operations/security/', '资金安全', 4, '2016-09-28 01:22:31', '2016-09-28 01:22:31', 1),
(37, 'operations/deposit-withdraw/', '存款 / 取款', 4, '2016-09-28 01:32:11', '2016-09-28 01:32:11', 1),
(38, 'operations/1000-up-leverage/', '杠杆最大值1:1000', 4, '2016-09-28 01:32:45', '2016-09-28 01:32:45', 1),
(39, 'operations/forex-contest/', '外汇模拟账户比赛', 4, '2016-09-28 01:36:46', '2016-09-28 01:36:46', 1),
(40, 'operations/forex-vps/', 'VPS外汇服务器', 4, '2016-09-28 01:37:27', '2016-09-28 01:37:27', 1),
(41, 'forex-affiliate/forex-agent-program/', '"Agent"伙伴计划 (IB)', 5, '2016-09-28 01:39:19', '2016-09-28 01:39:19', 1),
(42, 'forex-affiliate/webmaster-affiliate-program/', ' "Webmaster" 伙伴计划 (IB)', 5, '2016-09-28 01:39:53', '2016-09-28 01:39:53', 1),
(43, 'forex-affiliate/introducing-broker-ib/', '区域代表', 5, '2016-09-28 01:40:26', '2016-09-28 01:40:26', 1),
(44, 'forex-affiliate/whitelabel/', '白标签伙伴计划', 5, '2016-09-28 01:40:53', '2016-09-28 01:40:53', 1),
(45, 'forex-affiliate/affiliate-accounts/', '点差增加的交易账户', 5, '2016-09-28 01:41:29', '2016-09-28 01:41:29', 1),
(46, 'forex-affiliate/loyalty-program/', '"忠诚计划"', 5, '2016-09-28 01:42:10', '2016-09-28 01:42:10', 1),
(47, 'forex-affiliate/help-partner/', '代理援助', 5, '2016-09-28 01:42:37', '2016-09-28 01:42:37', 1),
(48, 'forex-affiliate/informers/', '外汇资讯', 5, '2016-09-28 01:43:02', '2016-09-28 01:43:02', 1),
(49, 'beginner/forex-education/', ' 外汇视频教程', 6, '2016-09-28 01:47:38', '2016-09-28 01:47:38', 1),
(50, 'beginner/how-to-trade-forex/', ' 如何进行外汇交易', 6, '2016-09-28 01:48:17', '2016-09-28 01:48:17', 1),
(51, 'beginner/what-is-forex-trading/', '什么是外汇交易', 6, '2016-09-28 01:48:50', '2016-09-28 01:48:50', 1),
(52, 'beginner/order-type/', '常见定单类型', 6, '2016-09-28 01:49:13', '2016-09-28 01:49:13', 1),
(53, 'beginner/metatrader-4-demo-account/', 'MetaTrader 4模拟帐户', 6, '2016-09-28 01:49:41', '2016-09-28 01:49:41', 1),
(54, 'beginner/expert-advisors/', '外汇专家顾问(EA)', 6, '2016-09-28 01:50:08', '2016-09-28 01:50:08', 1),
(55, 'beginner/risk/', '风险控制', 6, '2016-09-28 01:50:42', '2016-09-28 01:50:42', 1),
(56, 'beginner/glossary/', '常用术语', 6, '2016-09-28 01:51:02', '2016-09-28 01:51:02', 1),
(57, 'analytics/economic-calendar/', '外汇日历', 7, '2016-09-28 01:52:54', '2016-09-28 01:52:54', 1),
(58, 'analytics/forex-forecast/', '外汇分析 外汇预测', 7, '2016-09-28 01:53:20', '2016-09-28 01:53:20', 1),
(59, 'analytics/charts/', '免费外汇图表', 7, '2016-09-28 01:54:18', '2016-09-28 01:54:18', 1),
(60, 'analytics/forex-calculator/', '外汇保证金计算器', 7, '2016-09-28 01:54:39', '2016-09-28 01:54:39', 1),
(61, 'analytics/interest-rates/', '外汇利率', 7, '2016-09-28 01:55:01', '2016-09-28 01:55:01', 1),
(62, 'analytics/national-holidays/', '银行假日', 7, '2016-09-28 01:55:21', '2016-09-28 01:55:21', 1),
(63, 'analytics/tradingcentral/', 'Trading Central的预测和分析', 7, '2016-09-28 01:55:57', '2016-09-28 01:55:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_admins_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_14_034452_create_categories_table', 2),
('2016_09_14_034452_create_posts_table', 3),
('2016_09_25_022824_create_post_tag_pivot', 4),
('2016_09_25_022824_create_tags_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--


-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_raw` text COLLATE utf8_unicode_ci NOT NULL,
  `content_html` text COLLATE utf8_unicode_ci NOT NULL,
  `page_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_draft` tinyint(1) NOT NULL,
  `layout` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL COMMENT '分类id',
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_published_at_index` (`published_at`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `slug`, `title`, `subtitle`, `content_raw`, `content_html`, `page_image`, `meta_description`, `is_draft`, `layout`, `created_at`, `updated_at`, `published_at`, `category_id`) VALUES
(1, 'roboforex', '关于RoboForex', 'about', '联系我们', '<p>联系我们</p>\n', NULL, '', 0, NULL, '2016-09-25 08:42:47', '2016-09-28 12:13:51', '2016-09-25 09:09:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag_pivot`
--

DROP TABLE IF EXISTS `post_tag_pivot`;
CREATE TABLE IF NOT EXISTS `post_tag_pivot` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_tag_pivot_post_id_index` (`post_id`),
  KEY `post_tag_pivot_tag_id_index` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `post_tag_pivot`
--


-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `layout` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'blog.layouts.index',
  `reverse_direction` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_tag_unique` (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tags`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', '1944786917@qq.com', '$2y$10$txRw.WnuIZnmVLkCzwjyDOk6OFxVtk0ivQJy5er6xorEk0Lt58qye', 'V6CM7UwW8eLeNr4uIp4u61jelDYLzx9Z8XeUsnkmNkpznLmw1HxqqU2xvj4r', '2016-09-13 07:44:25', '2016-09-13 09:21:37');
