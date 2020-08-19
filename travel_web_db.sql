-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 19, 2020 lúc 09:21 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `travel_web_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `check_in`, `check_out`, `note`, `total`, `created_at`, `updated_at`) VALUES
(43, 73, '2020-08-19', '2020-08-20', '1', 2000000, '2020-08-17 15:48:13', '2020-08-17 15:48:13'),
(44, 74, '2020-08-22', '2020-08-23', '1', 400000, '2020-08-18 15:05:42', '2020-08-18 15:05:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_bill` bigint(20) UNSIGNED NOT NULL,
  `id_tour` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_details`
--

INSERT INTO `bill_details` (`id`, `id_bill`, `id_tour`, `id_user`, `price`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 44, 9, 1, '400000', '2', 'Đã đi tour đi', '2020-08-18 15:05:42', '2020-08-18 21:48:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idUser` int(11) NOT NULL,
  `idNews` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `idUser`, `idNews`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Bài đăng hay!', '2020-07-16 03:02:13', NULL),
(2, 1, 2, 'Bài đăng hay đấy!', '2020-07-16 03:45:52', NULL),
(5, 1, 1, 'Nhất định sẽ đến đó 1 lần cho biết :))', '2020-07-16 03:33:36', NULL),
(18, 3, 1, '.', '2020-07-26 04:28:13', '2020-07-26 04:28:13'),
(19, 3, 2, '.', '2020-07-26 04:28:21', '2020-07-26 04:28:21'),
(21, 3, 1, 'av', '2020-07-26 04:39:47', '2020-07-26 04:39:47'),
(22, 3, 1, '.', '2020-07-26 04:44:24', '2020-07-26 04:44:24'),
(25, 1, 1, 'hihi', '2020-07-26 06:00:49', '2020-07-26 06:00:49'),
(26, 1, 1, 'aaaaa', '2020-08-05 03:50:18', '2020-08-05 03:50:18'),
(27, 1, 3, 'aaa', '2020-08-05 04:29:38', '2020-08-05 04:29:38'),
(31, 4, 1, 'a', '2020-08-17 13:46:56', '2020-08-17 13:46:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone_number`, `email`, `working_date`, `url`, `created_at`, `updated_at`) VALUES
(1, '99 Tô Hiến Thành, Sơn Trà, Đà Nẵng', '0366 908 087', 'vnenjoytravel@gmail.com', 'Thứ 2 - Thứ 6, 8:00-22:00', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.0769458726827!2d108.24078887020062!3d16.06054664668701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177f2ced6d8b%3A0xeac35f2960ca74a4!2zOTkgVMO0IEhp4bq_biBUaMOgbmgsIFBoxrDhu5tjIE3hu7ksIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1595562304035!5m2!1svi!2s', '2020-08-19 04:40:42', '2020-08-19 04:40:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `quantity`, `created_at`, `updated_at`) VALUES
(73, 'Test', 'nguyenchoqt@gmail.com', '0366666', 10, '2020-08-17 15:48:13', '2020-08-17 15:48:13'),
(74, 'Test', 'nguyenchoqt@gmail.com', '0366666', 2, '2020-08-18 15:05:42', '2020-08-18 15:05:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favorite_tours`
--

CREATE TABLE `favorite_tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idUser` int(11) NOT NULL,
  `idTour` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `favorite_tours`
--

INSERT INTO `favorite_tours` (`id`, `idUser`, `idTour`, `created_at`, `updated_at`) VALUES
(30, 4, 5, '2020-08-12 07:11:26', '2020-08-12 07:11:26'),
(31, 4, 9, '2020-08-12 07:16:26', '2020-08-12 07:16:26'),
(33, 4, 13, '2020-08-12 07:44:01', '2020-08-12 07:44:01'),
(35, 4, 15, '2020-08-12 07:52:46', '2020-08-12 07:52:46'),
(36, 4, 12, '2020-08-17 13:13:02', '2020-08-17 13:13:02'),
(38, 1, 9, '2020-08-18 21:49:24', '2020-08-18 21:49:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_07_16_081230_create_news_table', 1),
(2, '2020_07_16_081705_create_comments_table', 2),
(5, '2020_07_20_025725_create_type_tours_table', 4),
(8, '2020_07_21_020951_create_tours_table', 5),
(9, '2020_07_27_080102_create_favorite_tours_table', 6),
(12, '2020_08_04_143855_create_slides_table', 7),
(13, '2020_08_05_041923_create_customers_table', 8),
(14, '2020_08_08_050951_create_bills_table', 9),
(22, '2020_08_13_173447_create_contacts_table', 11),
(23, '2020_08_08_051050_create_bill_details_table', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summarize` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `summarize`, `content`, `image`, `view_number`, `created_at`, `updated_at`) VALUES
(1, 'Đà Nẵng Có Gì Để Chơi Tháng 7 Này?', 'abccc', 'Đà Nẵng mùa này chẳng có gì để chơi cả!', 'images\\places\\danang.jpg', 12, '2020-07-16 03:17:37', NULL),
(2, 'Hà Nội nên đến đâu', '', '', 'images\\places\\hanoi.jpg', 0, '2020-07-26 10:39:50', '2020-07-26 10:39:50'),
(3, 'Manh', '', '', 'images\\places\\hanoi.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Quảng Trị', 'images/slides/slide1.jpg', NULL, NULL),
(2, 'Hà Giang', 'images/slides/slide3.jpg', NULL, NULL),
(3, 'Phan Thiết', 'images/slides/slide4.jpg', NULL, NULL),
(4, 'Cô Tô', 'images/slides/coto.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summarize` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` bigint(20) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `on_sale` double(8,2) NOT NULL,
  `schedule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tours`
--

INSERT INTO `tours` (`id`, `title`, `summarize`, `content`, `image`, `id_type`, `price`, `on_sale`, `schedule`, `created_at`, `updated_at`) VALUES
(5, 'Đà Nẵng', 'Khám phá thành phố \'đáng sống\' này nhé!', '<b>Đến với Đà Nẵng là đến với những trải nghiệm thú vị không đâu có được.\r\n<br>1. Thành phố của những cây cầu</b>\r\n<br>\r\nĐà Nẵng không chỉ được biết đến như một thành phố xanh, sạch đẹp, văn minh, thân thiện và đáng sống, mà Đà Nẵng còn có sông Hàn thơ mộng chạy trong lòng thành phố và cả những chiếc cầu độc đáo bắc qua dòng sông này.\r\n<br>\r\nTiêu biểu nhất phải kể đến là cầu quay sông Hàn, đến nay vẫn là cây cầu quay duy nhất tại Việt Nam, đem lại sự tò mò cho người dân và du khách đến Đà Nẵng. Mới mẻ hơn, du khách có thể bách bộ tại cầu Trần Thị Lý với những sợi cáp hình cánh buồm được thắp đèn led đổi màu độc đáo. Cách đó không xa là cầu Rồng với thiết kế đặc biệt như một con rồng uốn lượn giữa sông Hàn, có thể phun nước và phun lửa chắc chắn đem lại sự phấn khích cho du khách. Hay một ngày yên bình, du khách có thể ghé thăm cầu Thuận Phước bắc ngang qua biển ngắm nhìn nơi giao thoa giữa sông Hàn và vịnh Đà Nẵng, và cảm nhận sự hùng vĩ của thiên nhiên.\r\n<br><br>\r\n            <b>2. Bãi biển đẹp nhất hành tinh</b></br>\r\n            Biển Đà Nẵng kéo dài gần 60km với nhiều bãi tắm liên hoàn đẹp tuyệt vời kéo dài từ chân đèo Hải Vân đến Non Nước được du khách thập phương biết đến là một trong những điểm nghỉ ngơi, thư giãn, tắm biển lý tưởng nhất khu vực Châu Á. Tạp chí Forbes – Mỹ đã bình chọn Biển Đà Nẵng là một trong 6 bãi biển quyến rũ nhất hành tinh cùng với bãi biển Bahia – Brazil, Bondi – Úc, Castelo – Bồ Đào Nha, Las Minitas – Dominia, và Wailea thuộc bang Hawai của Mỹ.\r\n            <br><br>\r\n            <b>3. Tuyến cáp treo nhiều kỷ lục thế giới</b></br>\r\n            Cáp treo Bà Nà được xây dựng nhằm thay thế tuyến đường bộ vốn dĩ hiểm trở. Tuyến cáp mới với 86 cabin được thiết kế hở, vận tốc 6m/s giúp du khách trải nghiệm thời tiết bên ngoài ở độ cao hơn 1.000 m trong thời gian cáp vận hành. Từ chân núi, du khách có thể lên đến đỉnh Bà Nà chỉ trong 30 phút và tận hưởng các dịch vụ vui chơi giải trí cũng như nghỉ dưỡng tại Khu du lịch Bà Nà Hills.\r\n            Tuyến cáp này đạt 4 kỷ lục thế giới, gồm: Dài nhất: 5.801m; Độ chênh lớn nhất: 1.368m; Tổng chiều dài cáp dài nhất: 11.587m; Sợi cáp nặng nhất: 141,24 tấn.\r\n            <br><br>\r\n            <b>4. Cung đường di sản Đà Nẵng – Hội An – Mỹ Sơn – Huế - Động Phong Nha</b></br>\r\n            Đà Nẵng với vị trí trung tâm của miền Trung đã trở thành cầu nối các di sản văn hóa thế giới thành một thể. Chỉ cách Đà Nẵng 30km, phố cổ Hội An sẵn sàng đón tiếp du khách từ khắp mọi nơi. Và cũng chỉ cần khoảng cách bấy nhiêu để di chuyển từ Hội An đến thánh địa Mỹ Sơn trầm mặc, huyền bí. Vươn xa hơn ra phía Bắc chỉ khoảng 100km, du khách đã có thể đến được với kinh thành và nhã nhạc cung đình Huế, và xa hơn nữa là khám phá động Phong Nha kỳ bí, hùng vĩ. Không chỉ là tâm điểm của 3 di sản thế giới, thành phố Đà Nẵng còn có nhiều danh thắng tuyệt đẹp đến nỗi du khách khó có thể nào quên được sau khi đã đến thăm thành phố này.\r\n            <br>\r\n            Với sân bay quốc tế Đà Nẵng, tuyến đường sắt Bắc Nam, và vô vàn các công ty lữ hành, du khách hoàn toàn có thể tìm được những dịch vụ tốt nhất cho chuyến đi của mình.\r\n            <b>5. Thời trang du lịch</b><br>\r\n            Đối với những cô gái muốn du lịch đến Đà Nẵng, việc chuẩn bị cả khăn len và bikini là điều hết sức bình thường. Đồ tắm khi đi biển Mỹ Khê; váy Maxi cho sông Hàn lộng gió; và còn cả áo dài khi thăm đền chùa và phố cổ Hội An… Đó là chưa kể còn có cả áo khoác và khăn len nếu đến với đỉnh núi Bà Nà mờ sương.\r\n            <br>\r\n            Chưa khi nào mà việc du lịch đến một thành phố lại phải chuẩn bị nhiều phong cách thời trang đối lập đến vậy. Tuy nhiên, đó lại là một điều hết sức thú vị và đáng để chúng ta khám phá.\r\n            ', 'images/places/danang.jpg', 1, '200000', 50.00, '7N6D', '2020-07-21 05:15:23', '2020-07-21 05:15:23'),
(6, 'Hội An', 'Thú vị một số trải nghiệm khi du lịch Hội An!', '            <b>Đến với Đà Nẵng là đến với những trải nghiệm thú vị không đâu có được.\r\n            <br>1.  Đi dạo Phố Cổ về đêm</b><br>\r\n            Một trải nghiệm rất đơn giản, du khách chỉ cần bước ra ngoài phố và ngắm nhìn những ngôi nhà cổ, những con phố đèn lồng rực rỡ về đêm. Bạn sẽ ngỡ như mình lạc vào buổi dạ tiệc của ánh sáng, một bức tranh kết hợp giữa sự bình lặng của kiến trúc cổ xưa với hình ảnh dân dã và sự nhộn nhịp của cuộc sống hiện đại. Có lẽ đẹp nhất vẫn là đôi bờ sông Hoài, nơi những vệt màu sáng lấp lánh trên mặt nước. Hội An còn đẹp hơn nữa khi không còn du khách và những hàng quán, khi ấy phố cổ mới thật sự mang một dáng hình xưa cũ, trầm mặc.\r\n            <br><br>\r\n            <b>2. Thả đèn hoa đăng</b></br>\r\n            Vẫn là khi đêm về, bên cạnh việc chỉ ngắm nhìn, du khách còn có thể hòa mình vào cùng trang trí cho bữa tiệc ánh sáng trên bờ sông. Một trải nghiệm vô cùng thú vị mà rất nhiều khách thích làm là thả hoa đăng trên sông Hoài. Chính tay bạn sẽ được thả những chiếc đèn nhỏ lấp lánh xuống sông, với hy vọng những chiếc đèn sẽ mang lại may mắn, bình an cho người thân, bạn bè. Bên cạnh đèn lồng, hoa đăng cũng đã dần trở thành nét đặc trưng của <b>du lịch Hội An.</b>\r\n            <br><br>\r\n            <b>3. Thưởng thức đặc sản Cao Lầu Hội An</b></br>\r\n            Cao Lầu là món ăn đặc sản Hội An mà bất cứ ai khi tới đây cũng nên thử. Nguồn gốc tên gọi của món ăn này khá thú vị. Xưa kia khi thương nhân tới Hội An buôn bán, phải thưởng thức món này ở trên “lầu cao” để có thể trông coi hàng. Từ đó, món ăn này mang tên Cao Lầu.\r\n            <br>\r\n            Một bát Cao Lầu Hội An chứa đủ vị ngon, với cảm giác sựt sựt của sợi mì, vị chua, ngọt, cay, chát của rau sống, hương thơm của mắm, nước thịt, nước tương,… và miếng tóp mỡ giòn tan trong miệng.\r\n            <br>\r\n            Du khách có thể thưởng thức món ăn này ở quán Bà Bé nằm ở đầu ngõ 69 Phan Châu Trinh, hay quán Hát ở ngã tư Trần Phú giao với Hoàng Diệu. Ngoài ra, các nhà hàng cho khách nước ngoài ở dọc phố Bạch Đằng cũng phục vụ món Cao Lầu.\r\n            <br><br>\r\n            <b>4. Đi thuyền trên sông Hoài vào buổi tối</b></br>\r\n            Đi thuyền ngắm nhìn Phố Cổ vào ban đêm và thả hoa đăng là thú vui được rất nhiều cặp đôi yêu thích, đặc biệt là những người đến Hội An để chụp đám cưới. Tuy nhiên nếu du khách không có đôi thì vẫn có thể đi cùng gia đình, bạn bè.\r\n            <br><br>\r\n            <b>5. Chụp ảnh kỷ niệm ở Hội An</b><br>\r\n            Website BuzzFeed Travel từng xếp hạng Hội An ở vị trí thứ 3 trong danh sách những địa điểm chụp ảnh selfie tuyệt nhất thế giới. Vì thế đến Hội An, bạn đừng quên chụp selfie tại các địa danh nổi tiếng như: cầu An Hội, cầu Nhật, bức tường huyền thoại ở Hoàng Văn Thụ, hẻm ngõ giếng, bờ sông Hoài…\r\n            <img src=\'images/places/trainghiemhoian.jpg\' alt=\'Hội An\'>\r\n            ', 'images/places/hoian.jpg', 1, '3000000', 0.00, '7N6D', '2020-07-21 05:15:23', '2020-07-21 05:15:23'),
(7, 'Hà Nội', 'Một Vài Cẩm Nang Khi Đi Du Lịch Ở Hà Nội', '            <b><i>Hà Nội góp nhặt từng mảnh ghép, vẽ lên cho mình một dáng hình nhẹ nhàng mà quyến rũ, đằm thắm mà kiêu sa. Hà Nội, có vô vàn những vần thơ được viết, những bài hát cứ thế tuôn trào, bởi người ta ấy, yêu lắm, thương lắm một Hà Nội trong tim. Đã đôi lần về Hà Nội, là để du lịch hay vì một lý do nào khác ngang bước qua Thủ đô, đều lỡ nhịp không nỡ rời đi. Từ con phố rụng rơi đầy hoa sữa đến góc tường vàng phai bạc màu thời gian, từ bờ hồ dịu mát đến một thoáng bình yên trong hẻm vắng, mọi thứ đều khắc nhớ vào tim, lâu thật lâu, như một ký ức đẹp tươi, xoa dịu tâm hồn đang mệt nhoài với cuộc sống bon chen ngoài kia. Hà Nội, hai tiếng gọi giản đơn, mà mỗi lần cất lên lại cảm thấy thương yêu ngập tràn cả lối về.</i><br>\r\n            <br>1. Thời điểm du lịch Hà Nội lý tưởng</b><br>\r\n            Khí hậu Hà Nội còn được chia thành bốn mùa khá rõ rệt, mỗi mùa lại có một vẻ đẹp riêng nên bạn có thể du lịch đến đây vào bất kỳ thời điểm nào trong năm. Tuy nhiên, theo các kinh nghiệm du lịch Hà Nội thì thành phố nổi tiếng nhất là vào các mùa hoa và đặc biệt là mùa thu Hà Nội.\r\n            <br>\r\n            <ul>\r\n                <li><b>Mùa hoa</b>: Hà Nội quanh năm ngập tràn trong các mùa hoa như hoa đào (tháng 1), hoa ban (tháng 2), hoa sưa (tháng 3), hoa sen (mùa hè), hoa sữa (tháng 9 – 10), cúc họa mi (tháng 10 – 12)…</li>\r\n                <li><b>Mùa thu – đầu đông</b>: Luôn được đi vào thơ ca với biết bao lãng mạn, Hà Nội lúc thu về cho đến đầu đông là thời gian đẹp nhất của thành phố. Tiết trời lúc này đã bớt nóng, nắng nhẹ, trong cái se lạnh, có thêm hương hoa sữa trải rộng khắp các con phố.</li>\r\n            </ul>\r\n            <br><br>\r\n            <b>2.  Phương tiện di chuyển ở Hà Nội</b></br>\r\n            <b>Xe máy</b>: Thuê xe máy tại Hà Nội rất đơn giản. Bạn có thể liên hệ với khách sạn hoặc gọi trực tiếp dịch vụ cho thuê xe. Giá một chiếc xe khoảng 100.000 – 150.000 VND/ ngày.\r\n            <br>\r\n            <b>Taxi</b>: Cho một chuyến du lịch thoải mái, bạn có thể chọn di chuyển bằng taxi. Các hãng taxi phổ biến ở Hà Nội là Mai Linh (SĐT: 024.38.222.666), Taxi Group (SĐT: 024.38.26.26.26), V20 (SĐT: 024.38.20.20.20)\r\n            <br>\r\n            <b>Xích lô</b>: Một hình ảnh đặc trưng của phố cổ chính là chiếc xích lô vẫn còn được giữ lại để phục vụ du lịch. Bạn có thể dễ dàng bắt xích lô khi ở phố cổ, dạo vòng quanh những con phố nhỏ trong lúc nghe những câu chuyện thú vị từ bác xích lô.\r\n            <br>\r\n            <b>Xe điện</b>: Một hình thức thú vị để tham qua phố cổ khác là xe điện. Vé xe được bán tại khu vực bờ hồ Hoàn Kiếm với giá 15.000 VND/ chuyến 15 phút.\r\n            <br><br>\r\n            <b>3. Thưởng thức đặc sản Cao Lầu Hội An</b></br>\r\n            Cao Lầu là món ăn đặc sản Hội An mà bất cứ ai khi tới đây cũng nên thử. Nguồn gốc tên gọi của món ăn này khá thú vị. Xưa kia khi thương nhân tới Hội An buôn bán, phải thưởng thức món này ở trên “lầu cao” để có thể trông coi hàng. Từ đó, món ăn này mang tên Cao Lầu.\r\n            <br>\r\n            Một bát Cao Lầu Hội An chứa đủ vị ngon, với cảm giác sựt sựt của sợi mì, vị chua, ngọt, cay, chát của rau sống, hương thơm của mắm, nước thịt, nước tương,… và miếng tóp mỡ giòn tan trong miệng.\r\n            <br>\r\n            Du khách có thể thưởng thức món ăn này ở quán Bà Bé nằm ở đầu ngõ 69 Phan Châu Trinh, hay quán Hát ở ngã tư Trần Phú giao với Hoàng Diệu. Ngoài ra, các nhà hàng cho khách nước ngoài ở dọc phố Bạch Đằng cũng phục vụ món Cao Lầu.\r\n            <br><br>\r\n            <b>4.  Địa điểm du lịch ở Hà Nội</b></br>\r\n            <b>Hồ Hoàn Kiếm</b>\r\n            <br>\r\n            Nằm ngay trung tâm thủ đô chính là hồ Hoàn Kiếm – hồ nước gắn liền với câu chuyện lịch sử quan trọng của thủ đô. Xung quanh hồ Hoàn Kiếm còn là một quần thể kiến trúc lịch sử đa dạng, trở thành một địa điểm không thể bỏ qua cho bất kỳ ai đến du lịch Hà Nội.\r\n            <br>\r\n            Những di tích trong khu vực hồ Hoàn Kiếm: Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc, Tháp Bút, Đài Nghiên, Tháp Hòa Phong…\r\n            <br>\r\n            Địa chỉ: Ngay giữa phố cổ, thuộc địa bàn quận Hoàn Kiếm\r\n            <br>\r\n\r\n            <b>Khu vực Phố Cổ</b>\r\n\r\n            <br>Có thể nói “36 phố phường” là điều đã làm nên danh tiếng của Hà Nội. Khởi đầu là một khu dân cư nằm bên ngoài hoàng thành, khu phố đã nhộn nhịp trong suốt vài trăm năm với các hoạt động thủ công nghiệp và buôn bán.\r\n            <br>Đến phố cổ ngày nay, bạn vẫn còn được tận hưởng không gian cổ kính, nhuốm màu thời gian của những ngôi nhà kiểu thấp, mái ngói, tường rêu. Tham khảo thêm bí kíp khám phá phố cổ trong một ngày để không bỏ lỡ những trải nghiệm tuyệt vời nhất tại đây nhé!\r\n            <br>Những địa điểm tham quan trong khu phố cổ: đền Bạch Mã, nhà cổ 87 Mã Mây, Ô Quan Chưởng, và tất nhiên là không thể thiếu một “kho tàng” ẩm thực tại đây.\r\n            <br>\r\n            ...\r\n            <br><br>\r\n            <b>5. “Càn quét” món ngon Hà Nội</b><br>\r\n            Phở Hà Nội<br>\r\n            Chả cá Lã Vọng Bún thang Bún đậu mắm tôm\r\n            <br>\r\n            Cháo sườn\r\n            <br>\r\n            Ăn vặt đường phố\r\n        \r\n          \r\n            ', 'images/places/trainghiemhanoi.jpg', 3, '3000000', 0.00, '7N6D', '2020-07-21 05:15:23', '2020-07-21 05:15:23'),
(8, 'Đà Nẵng', 'Khám phá thành phố \'đáng sống\' này nhé!', '            <b>Đến với Đà Nẵng là đến với những trải nghiệm thú vị không đâu có được.\r\n            <br>1. Thành phố của những cây cầu</b><br>\r\n            Đà Nẵng không chỉ được biết đến như một thành phố xanh, sạch đẹp, văn minh, thân thiện và đáng sống, mà Đà Nẵng còn có sông Hàn thơ mộng chạy trong lòng thành phố và cả những chiếc cầu độc đáo bắc qua dòng sông này.\r\n            Tiêu biểu nhất phải kể đến là cầu quay sông Hàn, đến nay vẫn là cây cầu quay duy nhất tại Việt Nam, đem lại sự tò mò cho người dân và du khách đến Đà Nẵng. Mới mẻ hơn, du khách có thể bách bộ tại cầu Trần Thị Lý với những sợi cáp hình cánh buồm được thắp đèn led đổi màu độc đáo. Cách đó không xa là cầu Rồng với thiết kế đặc biệt như một con rồng uốn lượn giữa sông Hàn, có thể phun nước và phun lửa chắc chắn đem lại sự phấn khích cho du khách. Hay một ngày yên bình, du khách có thể ghé thăm cầu Thuận Phước bắc ngang qua biển ngắm nhìn nơi giao thoa giữa sông Hàn và vịnh Đà Nẵng, và cảm nhận sự hùng vĩ của thiên nhiên.\r\n            <br><br>\r\n            <b>2. Bãi biển đẹp nhất hành tinh</b></br>\r\n            Biển Đà Nẵng kéo dài gần 60km với nhiều bãi tắm liên hoàn đẹp tuyệt vời kéo dài từ chân đèo Hải Vân đến Non Nước được du khách thập phương biết đến là một trong những điểm nghỉ ngơi, thư giãn, tắm biển lý tưởng nhất khu vực Châu Á. Tạp chí Forbes – Mỹ đã bình chọn Biển Đà Nẵng là một trong 6 bãi biển quyến rũ nhất hành tinh cùng với bãi biển Bahia – Brazil, Bondi – Úc, Castelo – Bồ Đào Nha, Las Minitas – Dominia, và Wailea thuộc bang Hawai của Mỹ.\r\n            <br><br>\r\n            <b>3. Tuyến cáp treo nhiều kỷ lục thế giới</b></br>\r\n            Cáp treo Bà Nà được xây dựng nhằm thay thế tuyến đường bộ vốn dĩ hiểm trở. Tuyến cáp mới với 86 cabin được thiết kế hở, vận tốc 6m/s giúp du khách trải nghiệm thời tiết bên ngoài ở độ cao hơn 1.000 m trong thời gian cáp vận hành. Từ chân núi, du khách có thể lên đến đỉnh Bà Nà chỉ trong 30 phút và tận hưởng các dịch vụ vui chơi giải trí cũng như nghỉ dưỡng tại Khu du lịch Bà Nà Hills.\r\n            Tuyến cáp này đạt 4 kỷ lục thế giới, gồm: Dài nhất: 5.801m; Độ chênh lớn nhất: 1.368m; Tổng chiều dài cáp dài nhất: 11.587m; Sợi cáp nặng nhất: 141,24 tấn.\r\n            <br><br>\r\n            <b>4. Cung đường di sản Đà Nẵng – Hội An – Mỹ Sơn – Huế - Động Phong Nha</b></br>\r\n            Đà Nẵng với vị trí trung tâm của miền Trung đã trở thành cầu nối các di sản văn hóa thế giới thành một thể. Chỉ cách Đà Nẵng 30km, phố cổ Hội An sẵn sàng đón tiếp du khách từ khắp mọi nơi. Và cũng chỉ cần khoảng cách bấy nhiêu để di chuyển từ Hội An đến thánh địa Mỹ Sơn trầm mặc, huyền bí. Vươn xa hơn ra phía Bắc chỉ khoảng 100km, du khách đã có thể đến được với kinh thành và nhã nhạc cung đình Huế, và xa hơn nữa là khám phá động Phong Nha kỳ bí, hùng vĩ. Không chỉ là tâm điểm của 3 di sản thế giới, thành phố Đà Nẵng còn có nhiều danh thắng tuyệt đẹp đến nỗi du khách khó có thể nào quên được sau khi đã đến thăm thành phố này.\r\n            <br>\r\n            Với sân bay quốc tế Đà Nẵng, tuyến đường sắt Bắc Nam, và vô vàn các công ty lữ hành, du khách hoàn toàn có thể tìm được những dịch vụ tốt nhất cho chuyến đi của mình.\r\n            <b>5. Thời trang du lịch</b><br>\r\n            Đối với những cô gái muốn du lịch đến Đà Nẵng, việc chuẩn bị cả khăn len và bikini là điều hết sức bình thường. Đồ tắm khi đi biển Mỹ Khê; váy Maxi cho sông Hàn lộng gió; và còn cả áo dài khi thăm đền chùa và phố cổ Hội An… Đó là chưa kể còn có cả áo khoác và khăn len nếu đến với đỉnh núi Bà Nà mờ sương.\r\n            <br>\r\n            Chưa khi nào mà việc du lịch đến một thành phố lại phải chuẩn bị nhiều phong cách thời trang đối lập đến vậy. Tuy nhiên, đó lại là một điều hết sức thú vị và đáng để chúng ta khám phá.\r\n            ', 'images/places/danang.jpg', 5, '2', 100.00, 'Không giới hạn', '2020-07-21 05:15:23', '2020-07-21 05:15:23'),
(9, 'Đà Nẵng 3', 'Khám phá thành phố \'đáng sống\' này nhé!', '<b>Đến với Đà Nẵng là đến với những trải nghiệm thú vị không đâu có được.\r\n<br>1. Thành phố của những cây cầu</b>\r\n<br>\r\nĐà Nẵng không chỉ được biết đến như một thành phố xanh, sạch đẹp, văn minh, thân thiện và đáng sống, mà Đà Nẵng còn có sông Hàn thơ mộng chạy trong lòng thành phố và cả những chiếc cầu độc đáo bắc qua dòng sông này.\r\n<br>\r\nTiêu biểu nhất phải kể đến là cầu quay sông Hàn, đến nay vẫn là cây cầu quay duy nhất tại Việt Nam, đem lại sự tò mò cho người dân và du khách đến Đà Nẵng. Mới mẻ hơn, du khách có thể bách bộ tại cầu Trần Thị Lý với những sợi cáp hình cánh buồm được thắp đèn led đổi màu độc đáo. Cách đó không xa là cầu Rồng với thiết kế đặc biệt như một con rồng uốn lượn giữa sông Hàn, có thể phun nước và phun lửa chắc chắn đem lại sự phấn khích cho du khách. Hay một ngày yên bình, du khách có thể ghé thăm cầu Thuận Phước bắc ngang qua biển ngắm nhìn nơi giao thoa giữa sông Hàn và vịnh Đà Nẵng, và cảm nhận sự hùng vĩ của thiên nhiên.\r\n<br><br>\r\n            <b>2. Bãi biển đẹp nhất hành tinh</b></br>\r\n            Biển Đà Nẵng kéo dài gần 60km với nhiều bãi tắm liên hoàn đẹp tuyệt vời kéo dài từ chân đèo Hải Vân đến Non Nước được du khách thập phương biết đến là một trong những điểm nghỉ ngơi, thư giãn, tắm biển lý tưởng nhất khu vực Châu Á. Tạp chí Forbes – Mỹ đã bình chọn Biển Đà Nẵng là một trong 6 bãi biển quyến rũ nhất hành tinh cùng với bãi biển Bahia – Brazil, Bondi – Úc, Castelo – Bồ Đào Nha, Las Minitas – Dominia, và Wailea thuộc bang Hawai của Mỹ.\r\n            <br><br>\r\n            <b>3. Tuyến cáp treo nhiều kỷ lục thế giới</b></br>\r\n            Cáp treo Bà Nà được xây dựng nhằm thay thế tuyến đường bộ vốn dĩ hiểm trở. Tuyến cáp mới với 86 cabin được thiết kế hở, vận tốc 6m/s giúp du khách trải nghiệm thời tiết bên ngoài ở độ cao hơn 1.000 m trong thời gian cáp vận hành. Từ chân núi, du khách có thể lên đến đỉnh Bà Nà chỉ trong 30 phút và tận hưởng các dịch vụ vui chơi giải trí cũng như nghỉ dưỡng tại Khu du lịch Bà Nà Hills.\r\n            Tuyến cáp này đạt 4 kỷ lục thế giới, gồm: Dài nhất: 5.801m; Độ chênh lớn nhất: 1.368m; Tổng chiều dài cáp dài nhất: 11.587m; Sợi cáp nặng nhất: 141,24 tấn.\r\n            <br><br>\r\n            <b>4. Cung đường di sản Đà Nẵng – Hội An – Mỹ Sơn – Huế - Động Phong Nha</b></br>\r\n            Đà Nẵng với vị trí trung tâm của miền Trung đã trở thành cầu nối các di sản văn hóa thế giới thành một thể. Chỉ cách Đà Nẵng 30km, phố cổ Hội An sẵn sàng đón tiếp du khách từ khắp mọi nơi. Và cũng chỉ cần khoảng cách bấy nhiêu để di chuyển từ Hội An đến thánh địa Mỹ Sơn trầm mặc, huyền bí. Vươn xa hơn ra phía Bắc chỉ khoảng 100km, du khách đã có thể đến được với kinh thành và nhã nhạc cung đình Huế, và xa hơn nữa là khám phá động Phong Nha kỳ bí, hùng vĩ. Không chỉ là tâm điểm của 3 di sản thế giới, thành phố Đà Nẵng còn có nhiều danh thắng tuyệt đẹp đến nỗi du khách khó có thể nào quên được sau khi đã đến thăm thành phố này.\r\n            <br>\r\n            Với sân bay quốc tế Đà Nẵng, tuyến đường sắt Bắc Nam, và vô vàn các công ty lữ hành, du khách hoàn toàn có thể tìm được những dịch vụ tốt nhất cho chuyến đi của mình.\r\n            <b>5. Thời trang du lịch</b><br>\r\n            Đối với những cô gái muốn du lịch đến Đà Nẵng, việc chuẩn bị cả khăn len và bikini là điều hết sức bình thường. Đồ tắm khi đi biển Mỹ Khê; váy Maxi cho sông Hàn lộng gió; và còn cả áo dài khi thăm đền chùa và phố cổ Hội An… Đó là chưa kể còn có cả áo khoác và khăn len nếu đến với đỉnh núi Bà Nà mờ sương.\r\n            <br>\r\n            Chưa khi nào mà việc du lịch đến một thành phố lại phải chuẩn bị nhiều phong cách thời trang đối lập đến vậy. Tuy nhiên, đó lại là một điều hết sức thú vị và đáng để chúng ta khám phá.\r\n            ', 'images/places/danang.jpg', 4, '200000', 50.00, 'Không giới hạn', '2020-07-21 05:15:23', '2020-07-21 05:15:23'),
(10, 'Đà Nẵng', 'Khám phá thành phố \'đáng sống\' này nhé!', '            <b>Đến với Đà Nẵng là đến với những trải nghiệm thú vị không đâu có được.\r\n            <br>1. Thành phố của những cây cầu</b><br>\r\n            Đà Nẵng không chỉ được biết đến như một thành phố xanh, sạch đẹp, văn minh, thân thiện và đáng sống, mà Đà Nẵng còn có sông Hàn thơ mộng chạy trong lòng thành phố và cả những chiếc cầu độc đáo bắc qua dòng sông này.\r\n            Tiêu biểu nhất phải kể đến là cầu quay sông Hàn, đến nay vẫn là cây cầu quay duy nhất tại Việt Nam, đem lại sự tò mò cho người dân và du khách đến Đà Nẵng. Mới mẻ hơn, du khách có thể bách bộ tại cầu Trần Thị Lý với những sợi cáp hình cánh buồm được thắp đèn led đổi màu độc đáo. Cách đó không xa là cầu Rồng với thiết kế đặc biệt như một con rồng uốn lượn giữa sông Hàn, có thể phun nước và phun lửa chắc chắn đem lại sự phấn khích cho du khách. Hay một ngày yên bình, du khách có thể ghé thăm cầu Thuận Phước bắc ngang qua biển ngắm nhìn nơi giao thoa giữa sông Hàn và vịnh Đà Nẵng, và cảm nhận sự hùng vĩ của thiên nhiên.\r\n            <br><br>\r\n            <b>2. Bãi biển đẹp nhất hành tinh</b></br>\r\n            Biển Đà Nẵng kéo dài gần 60km với nhiều bãi tắm liên hoàn đẹp tuyệt vời kéo dài từ chân đèo Hải Vân đến Non Nước được du khách thập phương biết đến là một trong những điểm nghỉ ngơi, thư giãn, tắm biển lý tưởng nhất khu vực Châu Á. Tạp chí Forbes – Mỹ đã bình chọn Biển Đà Nẵng là một trong 6 bãi biển quyến rũ nhất hành tinh cùng với bãi biển Bahia – Brazil, Bondi – Úc, Castelo – Bồ Đào Nha, Las Minitas – Dominia, và Wailea thuộc bang Hawai của Mỹ.\r\n            <br><br>\r\n            <b>3. Tuyến cáp treo nhiều kỷ lục thế giới</b></br>\r\n            Cáp treo Bà Nà được xây dựng nhằm thay thế tuyến đường bộ vốn dĩ hiểm trở. Tuyến cáp mới với 86 cabin được thiết kế hở, vận tốc 6m/s giúp du khách trải nghiệm thời tiết bên ngoài ở độ cao hơn 1.000 m trong thời gian cáp vận hành. Từ chân núi, du khách có thể lên đến đỉnh Bà Nà chỉ trong 30 phút và tận hưởng các dịch vụ vui chơi giải trí cũng như nghỉ dưỡng tại Khu du lịch Bà Nà Hills.\r\n            Tuyến cáp này đạt 4 kỷ lục thế giới, gồm: Dài nhất: 5.801m; Độ chênh lớn nhất: 1.368m; Tổng chiều dài cáp dài nhất: 11.587m; Sợi cáp nặng nhất: 141,24 tấn.\r\n            <br><br>\r\n            <b>4. Cung đường di sản Đà Nẵng – Hội An – Mỹ Sơn – Huế - Động Phong Nha</b></br>\r\n            Đà Nẵng với vị trí trung tâm của miền Trung đã trở thành cầu nối các di sản văn hóa thế giới thành một thể. Chỉ cách Đà Nẵng 30km, phố cổ Hội An sẵn sàng đón tiếp du khách từ khắp mọi nơi. Và cũng chỉ cần khoảng cách bấy nhiêu để di chuyển từ Hội An đến thánh địa Mỹ Sơn trầm mặc, huyền bí. Vươn xa hơn ra phía Bắc chỉ khoảng 100km, du khách đã có thể đến được với kinh thành và nhã nhạc cung đình Huế, và xa hơn nữa là khám phá động Phong Nha kỳ bí, hùng vĩ. Không chỉ là tâm điểm của 3 di sản thế giới, thành phố Đà Nẵng còn có nhiều danh thắng tuyệt đẹp đến nỗi du khách khó có thể nào quên được sau khi đã đến thăm thành phố này.\r\n            <br>\r\n            Với sân bay quốc tế Đà Nẵng, tuyến đường sắt Bắc Nam, và vô vàn các công ty lữ hành, du khách hoàn toàn có thể tìm được những dịch vụ tốt nhất cho chuyến đi của mình.\r\n            <b>5. Thời trang du lịch</b><br>\r\n            Đối với những cô gái muốn du lịch đến Đà Nẵng, việc chuẩn bị cả khăn len và bikini là điều hết sức bình thường. Đồ tắm khi đi biển Mỹ Khê; váy Maxi cho sông Hàn lộng gió; và còn cả áo dài khi thăm đền chùa và phố cổ Hội An… Đó là chưa kể còn có cả áo khoác và khăn len nếu đến với đỉnh núi Bà Nà mờ sương.\r\n            <br>\r\n            Chưa khi nào mà việc du lịch đến một thành phố lại phải chuẩn bị nhiều phong cách thời trang đối lập đến vậy. Tuy nhiên, đó lại là một điều hết sức thú vị và đáng để chúng ta khám phá.\r\n            ', 'images/places/danang.jpg', 5, '2', 100.00, 'Không giới hạn', '2020-07-21 05:15:23', '2020-07-21 05:15:23'),
(11, 'Hà Nội', 'Một Vài Cẩm Nang Khi Đi Du Lịch Ở Hà Nội', '            <b><i>Hà Nội góp nhặt từng mảnh ghép, vẽ lên cho mình một dáng hình nhẹ nhàng mà quyến rũ, đằm thắm mà kiêu sa. Hà Nội, có vô vàn những vần thơ được viết, những bài hát cứ thế tuôn trào, bởi người ta ấy, yêu lắm, thương lắm một Hà Nội trong tim. Đã đôi lần về Hà Nội, là để du lịch hay vì một lý do nào khác ngang bước qua Thủ đô, đều lỡ nhịp không nỡ rời đi. Từ con phố rụng rơi đầy hoa sữa đến góc tường vàng phai bạc màu thời gian, từ bờ hồ dịu mát đến một thoáng bình yên trong hẻm vắng, mọi thứ đều khắc nhớ vào tim, lâu thật lâu, như một ký ức đẹp tươi, xoa dịu tâm hồn đang mệt nhoài với cuộc sống bon chen ngoài kia. Hà Nội, hai tiếng gọi giản đơn, mà mỗi lần cất lên lại cảm thấy thương yêu ngập tràn cả lối về.</i><br>\r\n            <br>1. Thời điểm du lịch Hà Nội lý tưởng</b><br>\r\n            Khí hậu Hà Nội còn được chia thành bốn mùa khá rõ rệt, mỗi mùa lại có một vẻ đẹp riêng nên bạn có thể du lịch đến đây vào bất kỳ thời điểm nào trong năm. Tuy nhiên, theo các kinh nghiệm du lịch Hà Nội thì thành phố nổi tiếng nhất là vào các mùa hoa và đặc biệt là mùa thu Hà Nội.\r\n            <br>\r\n            <ul>\r\n                <li><b>Mùa hoa</b>: Hà Nội quanh năm ngập tràn trong các mùa hoa như hoa đào (tháng 1), hoa ban (tháng 2), hoa sưa (tháng 3), hoa sen (mùa hè), hoa sữa (tháng 9 – 10), cúc họa mi (tháng 10 – 12)…</li>\r\n                <li><b>Mùa thu – đầu đông</b>: Luôn được đi vào thơ ca với biết bao lãng mạn, Hà Nội lúc thu về cho đến đầu đông là thời gian đẹp nhất của thành phố. Tiết trời lúc này đã bớt nóng, nắng nhẹ, trong cái se lạnh, có thêm hương hoa sữa trải rộng khắp các con phố.</li>\r\n            </ul>\r\n            <br><br>\r\n            <b>2.  Phương tiện di chuyển ở Hà Nội</b></br>\r\n            <b>Xe máy</b>: Thuê xe máy tại Hà Nội rất đơn giản. Bạn có thể liên hệ với khách sạn hoặc gọi trực tiếp dịch vụ cho thuê xe. Giá một chiếc xe khoảng 100.000 – 150.000 VND/ ngày.\r\n            <br>\r\n            <b>Taxi</b>: Cho một chuyến du lịch thoải mái, bạn có thể chọn di chuyển bằng taxi. Các hãng taxi phổ biến ở Hà Nội là Mai Linh (SĐT: 024.38.222.666), Taxi Group (SĐT: 024.38.26.26.26), V20 (SĐT: 024.38.20.20.20)\r\n            <br>\r\n            <b>Xích lô</b>: Một hình ảnh đặc trưng của phố cổ chính là chiếc xích lô vẫn còn được giữ lại để phục vụ du lịch. Bạn có thể dễ dàng bắt xích lô khi ở phố cổ, dạo vòng quanh những con phố nhỏ trong lúc nghe những câu chuyện thú vị từ bác xích lô.\r\n            <br>\r\n            <b>Xe điện</b>: Một hình thức thú vị để tham qua phố cổ khác là xe điện. Vé xe được bán tại khu vực bờ hồ Hoàn Kiếm với giá 15.000 VND/ chuyến 15 phút.\r\n            <br><br>\r\n            <b>3. Thưởng thức đặc sản Cao Lầu Hội An</b></br>\r\n            Cao Lầu là món ăn đặc sản Hội An mà bất cứ ai khi tới đây cũng nên thử. Nguồn gốc tên gọi của món ăn này khá thú vị. Xưa kia khi thương nhân tới Hội An buôn bán, phải thưởng thức món này ở trên “lầu cao” để có thể trông coi hàng. Từ đó, món ăn này mang tên Cao Lầu.\r\n            <br>\r\n            Một bát Cao Lầu Hội An chứa đủ vị ngon, với cảm giác sựt sựt của sợi mì, vị chua, ngọt, cay, chát của rau sống, hương thơm của mắm, nước thịt, nước tương,… và miếng tóp mỡ giòn tan trong miệng.\r\n            <br>\r\n            Du khách có thể thưởng thức món ăn này ở quán Bà Bé nằm ở đầu ngõ 69 Phan Châu Trinh, hay quán Hát ở ngã tư Trần Phú giao với Hoàng Diệu. Ngoài ra, các nhà hàng cho khách nước ngoài ở dọc phố Bạch Đằng cũng phục vụ món Cao Lầu.\r\n            <br><br>\r\n            <b>4.  Địa điểm du lịch ở Hà Nội</b></br>\r\n            <b>Hồ Hoàn Kiếm</b>\r\n            <br>\r\n            Nằm ngay trung tâm thủ đô chính là hồ Hoàn Kiếm – hồ nước gắn liền với câu chuyện lịch sử quan trọng của thủ đô. Xung quanh hồ Hoàn Kiếm còn là một quần thể kiến trúc lịch sử đa dạng, trở thành một địa điểm không thể bỏ qua cho bất kỳ ai đến du lịch Hà Nội.\r\n            <br>\r\n            Những di tích trong khu vực hồ Hoàn Kiếm: Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc, Tháp Bút, Đài Nghiên, Tháp Hòa Phong…\r\n            <br>\r\n            Địa chỉ: Ngay giữa phố cổ, thuộc địa bàn quận Hoàn Kiếm\r\n            <br>\r\n\r\n            <b>Khu vực Phố Cổ</b>\r\n\r\n            <br>Có thể nói “36 phố phường” là điều đã làm nên danh tiếng của Hà Nội. Khởi đầu là một khu dân cư nằm bên ngoài hoàng thành, khu phố đã nhộn nhịp trong suốt vài trăm năm với các hoạt động thủ công nghiệp và buôn bán.\r\n            <br>Đến phố cổ ngày nay, bạn vẫn còn được tận hưởng không gian cổ kính, nhuốm màu thời gian của những ngôi nhà kiểu thấp, mái ngói, tường rêu. Tham khảo thêm bí kíp khám phá phố cổ trong một ngày để không bỏ lỡ những trải nghiệm tuyệt vời nhất tại đây nhé!\r\n            <br>Những địa điểm tham quan trong khu phố cổ: đền Bạch Mã, nhà cổ 87 Mã Mây, Ô Quan Chưởng, và tất nhiên là không thể thiếu một “kho tàng” ẩm thực tại đây.\r\n            <br>\r\n            ...\r\n            <br><br>\r\n            <b>5. “Càn quét” món ngon Hà Nội</b><br>\r\n            Phở Hà Nội<br>\r\n            Chả cá Lã Vọng Bún thang Bún đậu mắm tôm\r\n            <br>\r\n            Cháo sườn\r\n            <br>\r\n            Ăn vặt đường phố\r\n        \r\n          \r\n            ', 'images/places/trainghiemhanoi.jpg', 3, '3000000', 0.00, '7N6D', '2020-07-21 05:15:23', '2020-07-21 05:15:23'),
(12, 'Đà Nẵng 3', 'Khám phá thành phố \'đáng sống\' này nhé!', '<b>Đến với Đà Nẵng là đến với những trải nghiệm thú vị không đâu có được.\r\n<br>1. Thành phố của những cây cầu</b>\r\n<br>\r\nĐà Nẵng không chỉ được biết đến như một thành phố xanh, sạch đẹp, văn minh, thân thiện và đáng sống, mà Đà Nẵng còn có sông Hàn thơ mộng chạy trong lòng thành phố và cả những chiếc cầu độc đáo bắc qua dòng sông này.\r\n<br>\r\nTiêu biểu nhất phải kể đến là cầu quay sông Hàn, đến nay vẫn là cây cầu quay duy nhất tại Việt Nam, đem lại sự tò mò cho người dân và du khách đến Đà Nẵng. Mới mẻ hơn, du khách có thể bách bộ tại cầu Trần Thị Lý với những sợi cáp hình cánh buồm được thắp đèn led đổi màu độc đáo. Cách đó không xa là cầu Rồng với thiết kế đặc biệt như một con rồng uốn lượn giữa sông Hàn, có thể phun nước và phun lửa chắc chắn đem lại sự phấn khích cho du khách. Hay một ngày yên bình, du khách có thể ghé thăm cầu Thuận Phước bắc ngang qua biển ngắm nhìn nơi giao thoa giữa sông Hàn và vịnh Đà Nẵng, và cảm nhận sự hùng vĩ của thiên nhiên.\r\n<br><br>\r\n            <b>2. Bãi biển đẹp nhất hành tinh</b></br>\r\n            Biển Đà Nẵng kéo dài gần 60km với nhiều bãi tắm liên hoàn đẹp tuyệt vời kéo dài từ chân đèo Hải Vân đến Non Nước được du khách thập phương biết đến là một trong những điểm nghỉ ngơi, thư giãn, tắm biển lý tưởng nhất khu vực Châu Á. Tạp chí Forbes – Mỹ đã bình chọn Biển Đà Nẵng là một trong 6 bãi biển quyến rũ nhất hành tinh cùng với bãi biển Bahia – Brazil, Bondi – Úc, Castelo – Bồ Đào Nha, Las Minitas – Dominia, và Wailea thuộc bang Hawai của Mỹ.\r\n            <br><br>\r\n            <b>3. Tuyến cáp treo nhiều kỷ lục thế giới</b></br>\r\n            Cáp treo Bà Nà được xây dựng nhằm thay thế tuyến đường bộ vốn dĩ hiểm trở. Tuyến cáp mới với 86 cabin được thiết kế hở, vận tốc 6m/s giúp du khách trải nghiệm thời tiết bên ngoài ở độ cao hơn 1.000 m trong thời gian cáp vận hành. Từ chân núi, du khách có thể lên đến đỉnh Bà Nà chỉ trong 30 phút và tận hưởng các dịch vụ vui chơi giải trí cũng như nghỉ dưỡng tại Khu du lịch Bà Nà Hills.\r\n            Tuyến cáp này đạt 4 kỷ lục thế giới, gồm: Dài nhất: 5.801m; Độ chênh lớn nhất: 1.368m; Tổng chiều dài cáp dài nhất: 11.587m; Sợi cáp nặng nhất: 141,24 tấn.\r\n            <br><br>\r\n            <b>4. Cung đường di sản Đà Nẵng – Hội An – Mỹ Sơn – Huế - Động Phong Nha</b></br>\r\n            Đà Nẵng với vị trí trung tâm của miền Trung đã trở thành cầu nối các di sản văn hóa thế giới thành một thể. Chỉ cách Đà Nẵng 30km, phố cổ Hội An sẵn sàng đón tiếp du khách từ khắp mọi nơi. Và cũng chỉ cần khoảng cách bấy nhiêu để di chuyển từ Hội An đến thánh địa Mỹ Sơn trầm mặc, huyền bí. Vươn xa hơn ra phía Bắc chỉ khoảng 100km, du khách đã có thể đến được với kinh thành và nhã nhạc cung đình Huế, và xa hơn nữa là khám phá động Phong Nha kỳ bí, hùng vĩ. Không chỉ là tâm điểm của 3 di sản thế giới, thành phố Đà Nẵng còn có nhiều danh thắng tuyệt đẹp đến nỗi du khách khó có thể nào quên được sau khi đã đến thăm thành phố này.\r\n            <br>\r\n            Với sân bay quốc tế Đà Nẵng, tuyến đường sắt Bắc Nam, và vô vàn các công ty lữ hành, du khách hoàn toàn có thể tìm được những dịch vụ tốt nhất cho chuyến đi của mình.\r\n            <b>5. Thời trang du lịch</b><br>\r\n            Đối với những cô gái muốn du lịch đến Đà Nẵng, việc chuẩn bị cả khăn len và bikini là điều hết sức bình thường. Đồ tắm khi đi biển Mỹ Khê; váy Maxi cho sông Hàn lộng gió; và còn cả áo dài khi thăm đền chùa và phố cổ Hội An… Đó là chưa kể còn có cả áo khoác và khăn len nếu đến với đỉnh núi Bà Nà mờ sương.\r\n            <br>\r\n            Chưa khi nào mà việc du lịch đến một thành phố lại phải chuẩn bị nhiều phong cách thời trang đối lập đến vậy. Tuy nhiên, đó lại là một điều hết sức thú vị và đáng để chúng ta khám phá.\r\n            ', 'images/places/danang.jpg', 4, '200000', 50.00, 'Không giới hạn', '2020-07-21 05:15:23', '2020-07-21 05:15:23'),
(14, 'Đà Nẵng 3', 'Khám phá thành phố \'đáng sống\' này nhé!', '<b>Đến với Đà Nẵng là đến với những trải nghiệm thú vị không đâu có được.\r\n<br>1. Thành phố của những cây cầu</b>\r\n<br>\r\nĐà Nẵng không chỉ được biết đến như một thành phố xanh, sạch đẹp, văn minh, thân thiện và đáng sống, mà Đà Nẵng còn có sông Hàn thơ mộng chạy trong lòng thành phố và cả những chiếc cầu độc đáo bắc qua dòng sông này.\r\n<br>\r\nTiêu biểu nhất phải kể đến là cầu quay sông Hàn, đến nay vẫn là cây cầu quay duy nhất tại Việt Nam, đem lại sự tò mò cho người dân và du khách đến Đà Nẵng. Mới mẻ hơn, du khách có thể bách bộ tại cầu Trần Thị Lý với những sợi cáp hình cánh buồm được thắp đèn led đổi màu độc đáo. Cách đó không xa là cầu Rồng với thiết kế đặc biệt như một con rồng uốn lượn giữa sông Hàn, có thể phun nước và phun lửa chắc chắn đem lại sự phấn khích cho du khách. Hay một ngày yên bình, du khách có thể ghé thăm cầu Thuận Phước bắc ngang qua biển ngắm nhìn nơi giao thoa giữa sông Hàn và vịnh Đà Nẵng, và cảm nhận sự hùng vĩ của thiên nhiên.\r\n<br><br>\r\n            <b>2. Bãi biển đẹp nhất hành tinh</b></br>\r\n            Biển Đà Nẵng kéo dài gần 60km với nhiều bãi tắm liên hoàn đẹp tuyệt vời kéo dài từ chân đèo Hải Vân đến Non Nước được du khách thập phương biết đến là một trong những điểm nghỉ ngơi, thư giãn, tắm biển lý tưởng nhất khu vực Châu Á. Tạp chí Forbes – Mỹ đã bình chọn Biển Đà Nẵng là một trong 6 bãi biển quyến rũ nhất hành tinh cùng với bãi biển Bahia – Brazil, Bondi – Úc, Castelo – Bồ Đào Nha, Las Minitas – Dominia, và Wailea thuộc bang Hawai của Mỹ.\r\n            <br><br>\r\n            <b>3. Tuyến cáp treo nhiều kỷ lục thế giới</b></br>\r\n            Cáp treo Bà Nà được xây dựng nhằm thay thế tuyến đường bộ vốn dĩ hiểm trở. Tuyến cáp mới với 86 cabin được thiết kế hở, vận tốc 6m/s giúp du khách trải nghiệm thời tiết bên ngoài ở độ cao hơn 1.000 m trong thời gian cáp vận hành. Từ chân núi, du khách có thể lên đến đỉnh Bà Nà chỉ trong 30 phút và tận hưởng các dịch vụ vui chơi giải trí cũng như nghỉ dưỡng tại Khu du lịch Bà Nà Hills.\r\n            Tuyến cáp này đạt 4 kỷ lục thế giới, gồm: Dài nhất: 5.801m; Độ chênh lớn nhất: 1.368m; Tổng chiều dài cáp dài nhất: 11.587m; Sợi cáp nặng nhất: 141,24 tấn.\r\n            <br><br>\r\n            <b>4. Cung đường di sản Đà Nẵng – Hội An – Mỹ Sơn – Huế - Động Phong Nha</b></br>\r\n            Đà Nẵng với vị trí trung tâm của miền Trung đã trở thành cầu nối các di sản văn hóa thế giới thành một thể. Chỉ cách Đà Nẵng 30km, phố cổ Hội An sẵn sàng đón tiếp du khách từ khắp mọi nơi. Và cũng chỉ cần khoảng cách bấy nhiêu để di chuyển từ Hội An đến thánh địa Mỹ Sơn trầm mặc, huyền bí. Vươn xa hơn ra phía Bắc chỉ khoảng 100km, du khách đã có thể đến được với kinh thành và nhã nhạc cung đình Huế, và xa hơn nữa là khám phá động Phong Nha kỳ bí, hùng vĩ. Không chỉ là tâm điểm của 3 di sản thế giới, thành phố Đà Nẵng còn có nhiều danh thắng tuyệt đẹp đến nỗi du khách khó có thể nào quên được sau khi đã đến thăm thành phố này.\r\n            <br>\r\n            Với sân bay quốc tế Đà Nẵng, tuyến đường sắt Bắc Nam, và vô vàn các công ty lữ hành, du khách hoàn toàn có thể tìm được những dịch vụ tốt nhất cho chuyến đi của mình.\r\n            <b>5. Thời trang du lịch</b><br>\r\n            Đối với những cô gái muốn du lịch đến Đà Nẵng, việc chuẩn bị cả khăn len và bikini là điều hết sức bình thường. Đồ tắm khi đi biển Mỹ Khê; váy Maxi cho sông Hàn lộng gió; và còn cả áo dài khi thăm đền chùa và phố cổ Hội An… Đó là chưa kể còn có cả áo khoác và khăn len nếu đến với đỉnh núi Bà Nà mờ sương.\r\n            <br>\r\n            Chưa khi nào mà việc du lịch đến một thành phố lại phải chuẩn bị nhiều phong cách thời trang đối lập đến vậy. Tuy nhiên, đó lại là một điều hết sức thú vị và đáng để chúng ta khám phá.\r\n            ', 'images/places/danang.jpg', 4, '200000', 50.00, 'Không giới hạn', '2020-07-21 05:15:23', '2020-07-21 05:15:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_tours`
--

CREATE TABLE `type_tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_tours`
--

INSERT INTO `type_tours` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tour Giá Rẻ', '2020-07-20 19:06:42', '2020-07-20 19:06:42'),
(2, 'Tour Nổi Bật', '2020-07-20 19:06:42', '2020-07-20 19:06:42'),
(3, 'Tour Khuyến Mãi', '2020-07-20 19:06:42', '2020-07-20 19:06:42'),
(4, 'Tour Trăng Mật', '2020-07-20 19:06:42', '2020-07-20 19:06:42'),
(5, 'Tour Gia Đình', '2020-07-20 19:06:42', '2020-07-20 19:06:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Manh Nguyen', 'nguyenchoqt@gmail.com', NULL, 1, '$2y$10$8H6Hh7jgipsh4bIXnCr2VeJpEtutB57ud5Fk2gCQFbkhKzDvYTdOO', 'fTyoPngFnWtojsfC34O6liAhvCztK03I7KfNefBtjUdwsZjKMgBlIuw8t4cl', '2020-07-22 17:31:56', '2020-08-18 21:37:05'),
(2, 'Ho Thi On', 'on.ho21@student.passerellesnumeriques.org', NULL, 0, '$2y$10$4.dYZ2.GbDPxjs.cHtVK7eXKFmE1SIpJAHzmFRWDSH9jKbFtNUZ.q', 'R1YdjcdsJx27tDkd7j1oVyTb8fQlfRGaeHTELyXWZCASn7lSw0zdhxxUhJS3', '2020-07-24 17:39:10', '2020-07-24 17:39:10'),
(3, 'Test', 'test@travelapp.com', NULL, 0, '$2y$10$y4oPhHSXRyzSqFDPKe6WeOhsuSygxf.ACTcdGAVaWfUjRE0sNhVoG', NULL, '2020-07-26 01:49:04', '2020-07-26 01:49:04'),
(4, 'Test', 'test2@travelapp.com', NULL, 0, '$2y$10$LegsnesT8PTGZTiWepMVE.vlQTgrBWxEHt6k3lmEAyGp1ZrdUR2y2', NULL, '2020-08-05 04:48:28', '2020-08-05 04:48:28'),
(5, 'hothion', 'onho@gmail.com', NULL, 0, '$2y$10$W3FPg9O1gBtKe24fJ9KSUuqkbpt04Tm0050jU9DglBbmUvnA8JEbi', NULL, '2020-08-12 21:03:32', '2020-08-12 21:03:32');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_id_customer_foreign` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_details_id_bill_foreign` (`id_bill`),
  ADD KEY `bill_details_id_tour_foreign` (`id_tour`),
  ADD KEY `bill_details_id_user_foreign` (`id_user`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `favorite_tours`
--
ALTER TABLE `favorite_tours`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_tours`
--
ALTER TABLE `type_tours`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `favorite_tours`
--
ALTER TABLE `favorite_tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `type_tours`
--
ALTER TABLE `type_tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`);

--
-- Các ràng buộc cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_id_bill_foreign` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bill_details_id_tour_foreign` FOREIGN KEY (`id_tour`) REFERENCES `tours` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bill_details_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
