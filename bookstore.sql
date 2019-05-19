-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 19, 2019 lúc 07:09 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `author`
--

CREATE TABLE `author` (
  `ID` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Birthday` date NOT NULL,
  `Info` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `author`
--

INSERT INTO `author` (`ID`, `Name`, `Birthday`, `Info`, `Image`) VALUES
('TG001', 'Nguyễn Nhật Ánh', '1955-05-07', 'Nguyễn Nhật Ánh sinh ngày 7 tháng 5 năm 1955 tại tỉnh Quảng Nam.  Ông được coi là một trong những nhà văn thành công nhất viết sách cho tuổi thơ, tuồi mới lớn với hơn 100 tác phẩm các thể loại.\n\nTrước khi trở thành nhà văn nổi tiếng, Nguyễn Nhật Ánh từng có thời gian đi dạy học, viết báo với nhiều bút danh như Chu Đình Ngạn, Lê Duy Cật, Đông Phương Sóc, Sóc Phương Đông,... Năm 13 tuổi, ông đã có thơ đăng báo. Năm 1984, tác phẩm truyện dài đầu tiên Trước vòng chung kết đã định vị tên tuổi của ông trong lòng độc giả và kể từ đó, ông tập trung viết cho lứa tuổi thanh thiếu niên.\n\nTên tuổi của nhà văn Nguyễn Nhật Ánh gắn liền với các tác phẩm làm say lòng độc giả bao thế hệ như Mắt biếc, Cỏn chút gì để nhớ, Hạ đỏ, Cô gái đến từ hôm qua, Chú bé rắc rối,… Truyện của ông được tái bản liên tục và chưa bao giờ giảm sức hút với những người yêu mến chất văn Nguyễn Nhật Ánh.\n\nÔng cũng đã đoạt nhiều giải thưởng như: năm 1990, truyện dài “Chú bé rắc rối” được Trung ương Đoàn Thanh niên Cộng sản Hồ Chí Minh trao giải thưởng Văn học Trẻ hạng A. Năm 1995, ông được bầu chọn là nhà văn được yêu thích nhất trong 20 năm (1975-1995) qua cuộc trưng cầu ý kiến bạn đọc về các gương mặt trẻ tiêu biểu trên mọi lĩnh vực của Thành đoàn TP HCM và Báo Tuổi trẻ, đồng thời được Hội Nhà văn TP HCM chọn là một trong 20 nhà văn trẻ tiêu biểu trong 20 năm (1975-1995).\n\nNăm 2010, tác phẩm Cho tôi xin một vé đi tuổi thơ của ông được trao tặng Giải thưởng Văn học ASEAN.', 'http://localhost:8080/php_mvc/bookStore/files/nguyen-nhat-anh.jpg'),
('TG002', 'Nhiều tác giả', '2019-01-09', 'Được nhiều tác giả cùng nhau biên soạn', 'http://localhost:8080/php_mvc/bookStore/files/nhieu-tac-gia.png'),
('TG003', 'Shinkai Makoto', '1964-01-03', '\nShinkai Makoto tốt nghiệp đại học Chūō ngành văn học Nhật Bản. Tại đó, ông là thành viên câu lạc bộ văn học trẻ với nhiệm vụ chính là vẽ sách. Ông nói cảm hứng sáng tạo của mình bắt nguồn từ manga, anime và tiểu thuyết được đọc thời cấp 2. Anime yêu thích của ông là Laputa của đạo diễn Miyazaki Hayao.\n\nSau khi tốt nghiệp Chūō năm 1994, Shinkai Makoto thiết kế đồ hoạ và làm clip game tại công ty trò chơi Falcom trong 5 năm. Thời gian này, ông đã gặp nhạc sĩ Tenmon và cộng tác với Tenmon trong tất cả các phim của mình.\n\nNăm 1999, Shinkai Makoto phát hành một phim hoạt hình ngắn trắng đen dài khoảng 5 phút là Nàng và Con mèo của Nàng. Bộ phim dành nhiều giải thưởng, trong đó có giải thưởng lớn tại \"CG Animation Contest\" của PROJECT TEAM DOGA.\n\nSau khi chiến thắng giải thưởng ấy, ông bắt đầu tìm ý tưởng cho dự án tiếp theo khi làm việc tại Falcom. Vào tháng 6 năm 2000, ông bắt đầu có ý tưởng về phim Tiếng gọi từ vì sao xa sau khi vẽ bức tranh một cô gái trong buồng lái đang cầm điện thoại di động. Mangazoo sau đó đã đến gặp và đề nghị làm việc với ông trên một dự án anime có thể thu lợi nhuận. Tháng 5 năm 2001, ông nghỉ việc tại Falcom và bắt đầu bắt tay làm Tiếng gọi từ vì sao xa.\n\nTiếng gọi từ vì sao xa mở đầu cho hàng loạt anime thành công tiếp theo của Shinkai Makoto bao gồm Bên kia đám mây, nơi ta hẹn ước (phát hành ngày 20 tháng 11 năm 2004), 5 Centimet trên giây (phát hành ngày 3 tháng 3 năm 2007) và Những đứa trẻ đuổi theo tinh tú (phát hành ngày 7 tháng 5 năm 2011). Ngoài ra, ông còn viết tiểu thuyết đầu tay là 5 centimet trên giây.\n\nTác phẩm mới nhất của ông chính là Your Name – Tên cậu là gì? đã gây nên cơn sốt tại các phòng vé của Nhật Bản nói riêng cũng như thế giới nói chung, và đã trở thành phim anime có doanh thu toàn cầu cao nhất trong lịch sử.', 'http://localhost:8080/php_mvc/bookStore/files/makoto-shinkai.jpg'),
('TG004', 'Trác Nhã', '1995-07-19', 'Trương Nhã Trác, sinh ngày 19/7/1995, cung Cự Giải, ở Bắc Kinh, Trung Quốc. Là nữ sinh trường kịch và là một trong những hot girl thế hệ mới chiếm được nhiều cảm tình của cư dân mạng xứ Trung.\nHiện đang theo học tại khoa nhạc kịch hệ chính quy, Học viện hý kịch Trung Ương Trung Quốc, Trương Nhã Trác nổi tiếng ngay từ những ngày đầu nhập học bởi nhan sắc và chiều cao vượt trội của mình.\n\nSở hữu chiều cao 1,72m, nặng 46kg, thể hình của Trương Nhã Trác được coi là hình mẫu lý tưởng của nhiều cô gái.\n\nKết hợp với khuôn mặt thanh tú, làn da trắng hồng và mái tóc dài đen nhánh, Nhã Trác luôn khiến người đối diện rung động với vẻ đẹp của cô nàng.\n\nKhông chỉ có sắc, Nhã Trác còn có tài, cô nàng thường xuyên đứng thứ hạng cao ở lớp trong những môn chuyên ngành, cũng năng nổ tham gia nhiều hoạt động diễn xuất trong trường.\n\nMới đây, vở kịch nói \"Nhà\" có sự tham gia diễn xuất của Nhã Trác đã nhận được phản ứng rất tốt, khiến tên tuổi của hot girl sinh năm 1995 ngày một nổi tiếng hơn.\n\nTrong cuộc sống đời thường, Nhã Trác được nhận xét là cô gái kín đáo, duyên dáng. Cư dân mạng gọi cô là \"nữ thần phong cách\" bởi mỗi hành động, cử chỉ của hot girl này đều rất tao nhã, thanh thoát.\n\nCũng như nhiều nữ sinh theo đuổi nghệ thuật khác, Nhã Trác có sở thích khiêu vũ, ca hát, du lịch. Cô nàng đặc biệt yêu thích nhạc kịch và rất muốn gắn bó với môn nghệ thuật này.\n\nTrang cá nhân của Nhã Trác thường xuyên cập nhật những hình ảnh xinh đẹp, đáng yêu của bản thân, thu hút gần 300.000 người theo dõi.\n\nMặc dù đã công khai có bạn trai khi đăng tải nhiều hình ảnh thân mật trên trang cá nhân, cô nàng vẫn nhận được rất nhiều sự ủng hộ và là hình mẫu bạn gái lý tưởng của nhiều chàng trai độc thân.\n\nĐối với Nhã Trác, gia đình, người yêu là những người quan trọng nhất, là thứ được ưu tiên nhất. \"Có gia đình, có tình yêu, tất cả mọi thứ sẽ tốt hơn\", Nhã Trác chia sẻ.\n\nThường xuyên xuất hiện với hình ảnh xinh đẹp tinh khiết, Nhã Trác nhận được rất nhiều lời tán dương.\n\nVới nhan sắc và tài năng cùng tinh thần ham học hỏi, nhiều người tin rằng tương lai, hot girl sinh năm 1995 này sẽ còn tiến xa.\n', 'http://localhost:8080/php_mvc/bookStore/files/trac-nha.jpg'),
('TG023', 'Tuệ Nhi', '1992-02-04', 'Tuệ Nhi – người phụ nữ mạnh mẽ đến từ Hải phòng.\n\nTuệ Nhi thường xuyên được biết tới qua những chương trình thiện nguyện hơn là được biết tới với tư cách một người viết.\nĐọc văn Tuệ Nhi ta thấy hiện lên trong đó hình ảnh một Tuệ Nhi nội tâm nhưng bản lĩnh, giàu tình cảm nhưng điềm tĩnh thu hút tôi thật sự. Hẳn rồi đấy là chất văn của một cô gái đi qua quá nhiều những biến cố thăng trầm để vẫn luôn kiêu hãnh, biết mình là ai, biết mình nên làm gì?', 'http://localhost:8080/php_mvc/bookStore/files/tue-nhi.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `ID` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Pay` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `ID` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Bill` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Book` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Customer` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Date_Invoice` date NOT NULL,
  `ID_Employee` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Total_Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `ID` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `ID_Author` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Kind` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Publishing_Year` date NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `ID_Publisher` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`ID`, `Name`, `Description`, `ID_Author`, `ID_Kind`, `Publishing_Year`, `Price`, `Quantity`, `ID_Publisher`, `Image`) VALUES
('B001', 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', 'Ta bắt gặp trong Tôi Thấy Hoa Vàng Trên Cỏ Xanh một thế giới đấy bất ngờ và thi vị non trẻ với những suy ngẫm giản dị thôi nhưng gần gũi đến lạ. Câu chuyện của Tôi Thấy Hoa Vàng Trên Cỏ Xanh có chút này chút kia, để ai soi vào cũng thấy mình trong đó, kiểu như lá thư tình đầu đời của cu Thiều chẳng hạn... ngây ngô và khờ khạo.\n\nNhưng Tôi Thấy Hoa Vàng Trên Cỏ Xanh hình như không còn trong trẻo, thuần khiết trọn vẹn của một thế giới tuổi thơ nữa. Cuốn sách nhỏ nhắn vẫn hồn hậu, dí dỏm, ngọt ngào nhưng lại phảng phất nỗi buồn, về một người cha bệnh tật trốn nhà vì không muốn làm khổ vợ con, về một người cha khác giả làm vua bởi đứa con tâm thầm của ông luôn nghĩ mình là công chúa,... Những bài học về luân lý, về tình người trở đi trở lại trong day dứt và tiếc nuối.\n\nTôi Thấy Hoa Vàng Trên Cỏ Xanh lắng đọng nhẹ nhàng trong tâm tưởng để rồi ai đã lỡ đọc rồi mà muốn quên đi thì thật khó.', 'TG001', 'K003', '2010-11-15', 64000, 100, 'P002', 'http://localhost:8080/php_mvc/bookStore/files/toi_thay_hoa_vang.jpg'),
('B002', 'Công phá toán 2', 'Công Phá Toán 2 giúp các bạn hệ thống lại toàn bộ phương pháp, tư duy giải Toán cần thiết trong toàn bộ chương trình lớp 11. Sách đặc biệt chú trọng tới những vấn đề học sinh hay nhầm lẫn.\n\nSách giúp các bạn nắm được toàn bộ những vấn đề hay nhất, cần thiết nhất trong 200 đề thi thử của các trường, Sở Giáo dục và Đào tạo trên toàn quốc. Cuốn sách sẽ giúp các bạn sàng lọc những vấn đề quan trọng và cần phải học để tiết kiệm thời gian sưu tầm, in ấn đề.\n\nĐi kèm với cuốn sách là 20 đề thi thử mới nhất 2018, đề thi sẽ được tằng kèm qua email.', 'TG002', 'K005', '2018-09-23', 152000, 80, 'P005', 'http://localhost:8080/php_mvc/bookStore/files/cong_pha_toan_2.jpg'),
('B003', 'Bảy Bước Tới Mùa Hè', 'Bảy bước tới mùa hè là tác phẩm mới nhất của Nguyễn Nhật Ánh, được nhà văn đề tặng \"Những năm ấu thơ\", như một món quà dành tặng các bạn đọc thân thiết của mình nhân dịp đầu năm mới.\n\nCâu chuyện về một mùa hè ngọt ngào, những trò chơi nghịch ngợm và bâng khuâng tình cảm tuổi mới lớn. Chỉ vậy thôi nhưng chứng tỏ tác giả đúng là nhà kể chuyện hóm hỉnh, khiến độc giả cuốn hút từ trang đầu đến trang cuối cùng. Chúng ta sẽ bắt gặp giọng văn giản dị, trong trẻo của nhà văn Nguyễn Nhật Ánh và một kết thúc có hậu đầy thuyết phục ở cuối truyện. Câu chuyện về tuổi học trò đầy ắp những kỷ niệm thơ bé ngọt ngào với tình thầy trò, bè bạn, tình xóm giềng, họ hàng qua cách nhìn đời nhẹ nhàng, rộng lượng.\n\nNhà văn chia sẻ: \"Tôi thích sự vui tươi của câu chuyện và sự hồn nhiên của nhân vật. Có thể nói đây là tác phẩm đầy ắp tiếng cười. Tạm thời xa rời những trang văn chứa nhiều chiêm nghiệm của người lớn, qua tác phẩm này tôi muốn quay trở lại lối viết mà tác giả không cố ý để lại quá nhiều dấu tay trên bản thảo. Tác giả trong tác phẩm này cũng đang ở… tuổi mười lăm!\"', 'TG001', 'K006', '2015-02-10', 78000, 100, 'P002', 'http://localhost:8080/php_mvc/bookStore/files/bay-buoc-toi-mua-he_2.jpg'),
('B004', '5 Centimet Trên Giây', '5cm/s không chỉ là vận tốc của những cánh anh đào rơi, mà còn là vận tốc khi chúng ta lặng lẽ bước qua đời nhau, đánh mất bao cảm xúc thiết tha nhất của tình yêu.\n\nBằng giọng văn tinh tế, truyền cảm, 5 centimet trên giây mang đến những khắc họa mới về tâm hồn và khả năng tồn tại của cảm xúc, bắt đầu từ tình yêu trong sáng, ngọt ngào của một cô bé và cậu bé. Ba giai đoạn, ba mảnh ghép, ba ngôi kể chuyện khác nhau nhưng đều xoay quanh nhân vật nam chính, người luôn bị ám ảnh bởi kí ức và những điều đã qua…\n\nKhác với những câu chuyện cuốn bạn chạy một mạch, truyện này khó mà đọc nhanh. Ngón tay bạn hẳn sẽ ngừng lại cả trăm lần trên mỗi trang sách. Chỉ vì một cử động rất khẽ, một câu thoại, hay một xúc cảm bất chợt có thể sẽ đánh thức những điều tưởng chừng đã ngủ quên trong tiềm thức, như ngọn đèn vừa được bật sáng trong tâm trí bạn. Và rồi có lúc nó vượt quá giới hạn chịu đựng, bạn quyết định gấp cuốn sách lại chỉ để tận hưởng chút ánh sáng từ ngọn đèn, hay đơn giản là để vết thương trong lòng mình có thời gian tự tìm xoa dịu.', 'TG003', 'K002', '2018-02-05', 37500, 200, 'P001', 'http://localhost:8080/php_mvc/bookStore/files/5-centimet-tren-giay%20%281%29.jpg'),
('B005', 'Thất tịch không mưa', 'Thất tịch: Mùng 7 tháng 7 âm lịch, chính là lễ Valentine của Trung Quốc. Cô sinh ngày Mùng 7 tháng 7 - Ngày Thất tịch.\n\nTừ nhỏ cô đã thầm yêu anh, như số kiếp không thể thay đổi tình yêu trong sáng ấy, như lần đầu được nếm mùi vị của quả khế mới chín. Sau đó cô và anh xa nhau, gặp lại đều cách nhau ba năm. 15 tuổi, anh lên phía bắc học, từ đó mất liên lạc; 18 tuổi, cô nông nổi đi gặp anh, đổi lại là sự đau lòng; 21 tuổi, cuối cùng anh cũng quay về để chịu tang mẹ; 24 tuổi, anh kết hôn, đưa người vợ mới cưới tới tận nơi xa. Anh từng là thần hộ mệnh của cô, dịu dàng, cẩn thận che chở, bao dung. Đã từng ngoắc tay với cô, thề sẽ mãi mãi ở bên nhau. Cô có thể mất đi tất cả, nhưng không thể không có anh - người hiểu cô nhất. Ngày 7-7 là ngày gặp mặt của Ngưu Lang Chức Nữ, mưa ngày 7-7 là nước mắt của nỗi nhớ nhung vậy. Giờ cô 27 tuổi, liệu có thể có một ngày 7-7 không mưa, để cô được gặp lại anh một lần nữa...\n\nHai con người yêu nhau đến tận xương tủy, yêu đến vụn vỡ con tim nhưng lại không thể nào đến với nhau. Hai con người ấy mang theo con tim khiếm khuyết đi tìm kiếm yêu thương trong thế giới ngoài kia nhưng không thể. Vì với cô, anh là Thẩm Hàn Vũ độc nhất vô nhị không ai có thế thay thế, chỉ có một mình anh. Còn với anh, cô là Thẩm Thiên Tình mà anh yêu quí nhất, là người mà anh thề sẽ bảo vệ suốt đời, không có cô anh chỉ là một cái xác không hồn. Một tình yêu đẹp đến thế, sâu nặng đến thế, thế nhưng họ lại không thể là của nhau. Không thể trách anh, không thể trách cô, có chăng là oán hận cái số phận đã đặt tình yêu nồng đậm của họ vào một tình huống quá éo le, biến nó trở thành bi kịch của cả cuộc đời. Anh yêu cô, yêu đến đau lòng, nhưng chỉ có thể ở bên cô, chăm sóc cô với tư cách là một người anh trai, anh yêu cô, yêu đến mức thà để cô được thanh thản đã không ngần ngại mang một trái tim trống rỗng đi tìm kiếm hình bóng người con gái anh yêu trong những cô gái khác. Còn cô, cô yêu anh từ bé, yêu đến mức đối với cô, chỉ cần anh là đủ, chỉ cần anh tồn tại thì cô hạnh phúc, thế nhưng tình cảm ấy bị thứ bi kịch đau lòng kia ngăn chặn.\n\nCái chết - có nhiều người sẽ xem nó là một điều tồi tệ nhất, nhưng với cái chết trong câu chuyện này thì nó là cách giải thoát cho họ khỏi số phận đầy bi ai và đau đớn đến xé lòng kia. Và như anh đã nói: “Tình, đợi anh”, cô sẽ đợi, đợi anh thực sự đến bên cô, đợi để được thuộc về nhau trọn vẹn, đợi để chìm đắm trong tình yêu của họ, và đợi, đợi để thực sự được là một người con gái yêu anh.', 'TG001', 'K001', '2013-08-25', 59300, 120, 'P001', 'http://localhost:8080/php_mvc/bookStore/files/that-tich-khong-mua-a%20%283%29.jpg'),
('B006', 'Khéo Ăn Nói Sẽ Có Được Thiên Hạ', 'Xã hội hiện đại, từ xin việc đến thăng chức, từ tình yêu đến hôn nhân, từ giao lưu đến hợp tác… không việc gì không cần tài ăn nói.\n\nKhéo ăn nói giống như sở hữu loại “dầu bôi trơn” đảm bảo các mối quan hệ của bạn “vận hành” trơn tru. Không khéo ăn nói, gặp chuyện nhỏ mắc trở ngại, gặp chuyện lớn vấp thất bại.\n\nLàm thế nào để nói năng trôi chảy? Làm thế nào để nói lời “đi vào lòng người”? Trong những dịp khác nhau, với những người khác nhau, ở những tình huống không giống nhau… có cuốn sách này gợi ý, bạn sẽ thành người khéo ăn nói.', 'TG004', 'K003', '2014-09-05', 54000, 200, 'P003', 'http://localhost:8080/php_mvc/bookStore/files/kheo-an-kheo-noi-se-co-duoc-thien-ha%20%282%29.jpg'),
('B007', 'Your Name', 'Your Name. là câu chuyện nổi tiếng và đạt được nhiều kỉ lục ở cả hai bản phim và truyện, xoay quanh một thiếu niên và một thiếu nữ hoán đổi linh hồn với nhau, sống dậy ở môi trường hoàn toàn khác biệt và tự thích ứng theo bản năng. Sự hoán đổi đó không đơn thuần để đem đến trạng thái hòa hợp về tình cảm, kể lại một chuyện tình ly kì làm lòng ta hồi hộp rồi khuây khỏa, mà gây ấn tượng hơn, là lưu ý chúng ta về định mệnh hình thành từ những hành vi nhỏ nhặt nhất, về ý nghĩa sâu xa tiềm ẩn trong từng sự vật bé bỏng nhất, như sợi dây tết, như rượu cúng thần, như vị trí và hành vi của từng người trong suốt dòng thời gian biến động.\nSau khi đọc xong nó, nên đọc sang cuốn này. Vì Your Name. Another Side: Earthbound chính là một dạng “Your Name. chuyện chưa kể”, là tác phẩm bổ sung hoàn hảo và đầy tham vọng cho cuốn tiểu thuyết lời ít ý nhiều ấy. Hoàn hảo ở chỗ rất nhiều tình tiết và diễn biến tâm lý tồn tại dưới dạng bí hiểm hoặc gây thắc mắc trong Your Name. (cả phim lẫn truyện) sang cuốn sách này đều được trải ra lớp lang và rạch ròi.\nTham vọng ở chỗ, từ bối cảnh và mở đầu-kết thúc đã định trước, Another Side Earthbound tự phát triển cho mình một hình thức và cách diễn giải riêng, chỉ ra quan hệ nhân quả giữa giữa quá khứ-hiện tại, giữa thiên tai-tập quán, giữa văn hóa-thần thoại, giữa phá hủy-say mê…\nNói cách khác, Your Name. Another Side: Earthbound là thành tố làm một Your Name. mà bạn đã biết trở nên đầy đặn, sâu sắc, và tròn vẹn.', 'TG003', 'K003', '2014-02-15', 64000, 100, 'P001', 'http://localhost:8080/php_mvc/bookStore/files/your-name---bia-1.u4972.d20170519.t093922.230473.jpg'),
('B008', 'Ngồi khóc trên cây ( truyện dài)', 'Mở đầu là kỳ nghỉ hè tại một ngôi làng thơ mộng ven sông với nhân vật là những đứa trẻ mới lớn có vô vàn trò chơi đơn sơ hấp dẫn ghi dấu mãi trong lòng.   Mối tình đầu trong veo của cô bé Rùa và chàng sinh viên quê học ở thành phố có giống tình đầu của bạn thời đi học? Và cái cách họ thương nhau giấu giếm, không dám làm nhau buồn, khát khao hạnh phúc đến nghẹt thở có phải là câu chuyện chính?\n\n\"Nồng nàn lên với\n\nCốc rượu trên tay\n\nXanh xanh lên với\n\nTrời cao ngàn ngày\n\nDài nhanh lên với\n\nTóc xõa ngang mày\n\nLớn nhanh lên với\n\nBé bỏng chiều nay”\n\nBạn sẽ được tác giả dẫn đi liền một mạch trong một thứ cảm xúc rưng rưng của tình yêu thương. Bạn sẽ thấy may mắn vì đang đuợc sống trong cuộc sống này, thấy yêu thế những tấm tình người… tất cả đều đẹp hồn hậu một cách giản dị.\n\nVới cuốn sách này, một lần nữa người đọc lại được Nguyễn Nhật Ánh tặng món quà quý giá: lòng tin vào điều tốt có thật trên đời.', 'TG001', 'K004', '2017-08-07', 86400, 90, 'P002', 'http://localhost:8080/php_mvc/bookStore/files/ngoi-khoc-tren-caytruyen-dai.jpg'),
('B009', 'Con Chó Nhỏ Mang Giỏ Hoa Hồng', 'Con Chó Nhỏ Mang Giỏ Hoa Hồng là tác phẩm mới nhất của nhà văn chuyên viết cho thanh thiếu niên Nguyễn Nhật Ánh, nối tiếp sau Bảy bước tới mùa hè, Tôi thấy hoa vàng trên cỏ xanh… gây sóng gió thị trường sách năm 2015.\n\n5 chương sách với 86 câu chuyện cực kỳ thú vị và hài hước về 5 con chó 5 loài 5 tính cách trong 1 gia đình có 3 người đều yêu chúng nhưng theo từng cách riêng của mình. Các câu chuyện về tình bạn giữa chúng với nhau, giữa chúng với chị Ni, ba mẹ, khách đến nhà… thực sự mang lại một thế giới trong trẻo, những đoạn đời dễ thương quyến rũ tuổi mới lớn.\n\nMột quyển sách lôi cuốn viết cho tất cả chúng ta: trẻ con và người lớn. Cuộc đời của 5 con chó nhỏ: Haili, Batô, Suku, Êmê và Pig  được tái hiện như đời sống của mỗi con người: tình bạn, tình yêu, đam mê, lòng dũng cảm, sự sợ hãi, và những ước mơ...\n\nTrích đoạn\n\nSuku là một thằng cún nói chung ai nhìn cũng thích.\n\nĐôi mắt tròn, đen lay láy, ngây thơ ngơ ngác, mỗi khi nhìn ai là khiến người ta phải động lòng.\n\nCún là gọi theo thói quen hồi bé, chứ thật ra chúng tôi đã sống bên nhau nhiều năm rồi, tóm lại đã qua tuổi vị thành niên từ lâu.\n\nDù vậy, so với thời niên thiếu bộ dạng của thằng Suku không thay đổi là mấy. nó chỉ có béo lên vì ăn nhiều quá.\n\nSuku có đôi tai dài. Lông nó màu trằng, óng ảnh và xoăn từng cụm, phủ dày từ chỏm đầu đến tận các ngón chân - trông nó giống hệt như một con cừu. Khi nó nằm im, rất nhiều người tưởng nó là một con chó nhồi bông. Suku xinh đẹp như thế, tất nhiên ai cũng muốn vuốt ve. Rất nhiều người bị vẻ ngoài đáng yêu của nó đánh lừa, nhưng chuyện đó tôi sẽ kể sau...', 'TG001', 'K004', '2016-01-24', 71100, 230, 'P001', 'http://localhost:8080/php_mvc/bookStore/files/con_cho_nho_bia_thuong_bia_1_1.jpg'),
('B010', 'Duyên Phận Ý Trời Hay Tại Lòng Người', 'Duyên Phận Ý Trời Hay Tại Lòng Người là những cung bậc cảm xúc ai rồi cũng một lần trải qua như thế, là những dòng nhớ thương da diết của mối tình dang dở, là những đắn đo, nghĩ suy về tình yêu và tuổi trẻ của mỗi người. Là khi đã yêu phải dám đương đầu và chấp nhận, ngay cả khi đối phương đã đổi dạ thay lòng.\n\nNên là, đừng trách người, trách mình hay trách duyên phận. Bởi trên thế gian này, bạn gặp gỡ ai, quen biết ai, bỏ lỡ ai. Tất cả đều đã được sắp đặt. Và tình yêu hiển nhiên là sai khi chúng ta không có vỏ bọc bảo vệ cho thứ tình cảm mong manh dễ vỡ ấy mà thôi.\n\nDuyên Phận Ý Trời Hay Tại Lòng Người nếu lơ đãng lật sẽ bỏ qua, đọc thật kĩ sẽ khiến bạn rơi lệ.\n\nBạn sẽ không thể rời mắt và ngừng nghĩ suy về câu chuyện chiếc bánh mì và tình yêu của cô gái khi đứng trước lựa chọn quan trọng của cuộc đời mình.\n\nBạn cũng không thể cầm lòng trước nỗi đau về cả thể xác lẫn tinh thần của cô gái trẻ trước sự thay lòng của bạn trai khi vừa hay tin mình bị tai nạn.\n\nHoặc câu chuyện về ra mắt nhà người yêu đầy thú vị và hài hước từ việc bổ dứa của nàng dâu tương lai.\n\nSuy cho cùng, chuyện tình cảm không phải là chuyện có thể điều khiển theo ý mình. Và trong mỗi giai đoạn của cuộc đời, chúng ta rồi sẽ gặp nhiều người, đối mặt với nhiều thứ. Có thể sẽ cùng nhau sánh bước nhưng có ai chắc rằng sẽ là mãi mãi?\n\nChỉ là khi tìm được người đúng nhất, cùng nhau trải qua muôn bậc cảm xúc, đủ loại gian khổ trên đời ta mới biết quý trọng mà cố gắng, mới biết đâu là một nửa đích thực của đời mình.\n\nTháng 9 này, Duyên Phận Ý Trời Hay Tại Lòng Người chắc hẳn sẽ là món quà vừa vặn nhất để bạn dành tặng bản thân khi mùa thu đang về.\n\nTin tôi đi, rồi bạn sẽ tìm thấy tuổi trẻ và tình yêu của mình nơi đó…', 'TG023', 'K003', '2014-02-05', 60200, 200, 'P002', 'http://localhost:8080/php_mvc/bookStore/files/duyen-phan-y-troi.jpg'),
('B011', 'Bão Lửa U23 – Thường Châu Tuyết Trắng', 'Như chúng ta đều biết, những thành quả mà Đội tuyển U23 Việt Nam đạt được tại VCK U23 châu Á 2018 đã mang lại những cảm xúc khó quên trong lòng mỗi người con đất Việt. Những cảm hứng tuyệt vời đó thật hiếm hoi và đáng quý, cần được lan tỏa, lưu giữ theo thời gian, để luôn  nhắc nhở chúng ta rằng, người Việt giàu tinh thần dân tộc, tinh thần thượng võ, giàu ý chí, nghị lực, đặc biệt là trước những thử thách, nghịch cảnh. Thế hệ trẻ Việt Nam hoàn toàn có thể chinh phục những đỉnh cao trong nhiều lĩnh vực khác như kinh tế, giáo dục, khoa học kỹ thuật… như trong thể thao như U23 đã làm được.\n\nXuất phát từ nguồn cảm hứng tuyệt vời mà sự kiện U23 mang lại và lan tỏa trên cả nước trong thời gian qua, chúng tôi  – Ban Dự án Bão Lửa của Sống – Thương hiệu sách Tác giả Việt của Alpha Books đã triển khai thực hiện cuốn sách Bão lửa U23 – Thường Châu tuyết trắng nhằm tri ân tập thể cán bộ, cầu thủ U23 Việt Nam – những anh hùng trên sân cỏ, HLV Park Hang Seo cùng các thành viên Ban huấn luyện, các ông bầu Đoàn Nguyên Đức, Đỗ Quang Hiển… những người đã tâm huyết gây dựng, tận lực cống hiến cho thắng lợi vang dội của bóng đá Việt Nam trong sự kiện vừa qua.\n\nCuốn sách tập hợp gần 50 bài viết chất lượng, cô đọng và sâu sắc của nhiều cây bút thể thao có tiếng như Trương Anh Ngọc, Phạm Trung Tuyến, Hoàng Linh, Nguyên Khôi, Quốc Việt…; của các tác giả, nhà văn, nhà nghiên cứu thuộc nhiều lĩnh vực khác nhau, như Chu Văn Sơn, Nguyễn Quang Thiều, Đinh Hoàng Anh, Trần Vinh Dự, Nguyễn Cảnh Bình,... đặc biệt là có sự tham gia của Lê Huy Khoa – Trợ lý ngôn ngữ HLV Park Hang Seo.\n\nĐã có rất nhiều những bài báo viết về chiến công của đội tuyển U23 trong quãng thời gian ngắn ngủi vừa qua. Nhưng cuốn sách này khác hẳn với những gì đã được viết ra, đơn giản vì nó không chỉ cô đọng lại từng khoảnh khắc của những trận đấu đã qua, những hiệu ứng cảm xúc kỳ diệu U23 đã mang lại cho cả dân tộc, mà còn cung cấp những cái nhìn rất sâu về từng khía cạnh của những nguyên nhân và chân dung những con người đã làm nên chiến thắng, những khó khăn đã trải qua, những rắc rối gặp phải trên đường vào chung kết, nhưng cũng không quên nhắc đến con đường tiếp theo của bóng đá Việt Nam sau thành công này. \n\nĐặc biệt hơn, cuốn sách cung cấp những bài viết bàn về kinh nghiệm sâu sắc rút ra sau sự kiện U23 không chỉ cho chính lĩnh vực thể thao mà cho nhiều lĩnh vực khác như giáo dục – đào tạo, quản lý, kinh tế…\n\nXu hướng là thứ nhất thời nhưng cảm xúc chân thật sẽ còn đọng lại mãi. Cuốn sách Bão lửa U23 – Thường Châu tuyết trắng lưu giữ những cảm xúc chân thật của người hâm mộ bóng đá Việt Nam, của chính các tuyển thủ và những người làm chuyên môn… qua từng chặng đường, từng khoảnh khắc hiếm có. Cuốn sách sẽ đóng vai một chứng nhân lịch sử, một người đã đi qua giây phút bi tráng và hào hùng của dân tộc để ghi lại những thước phim tư liệu quý. Nó ra đời và tồn tại vì ngay khoảnh khắc đó những con tim Việt Nam đã xích lại gần nhau thân thương, ấm áp và rạng rỡ, ngay khoảnh khắc đó chúng ta yêu U23, tình yêu mãnh liệt và chân thành nhất!\n\nĐây là một cuốn sách rất đáng đọc vào lúc này, khi những dư âm của chiến công U23 vẫn còn, nhưng cũng là để ngẫm ngợi sâu hơn về nhiều điều liên quan đến họ nói riêng và cả nền bóng đá Việt Nam nói chung.', 'TG002', 'K004', '2018-08-09', 89000, 120, 'P009', 'http://localhost:8080/php_mvc/bookStore/files/u23%20%281%29.jpg'),
('B012', 'Lỡ chúng ta FA Cả Đời thì sao', 'Lỡ Chúng Ta FA Cả Đời Thì Sao – Cuốn sách viết về nỗi lòng của những kẻ độc thân không cô đơn.\n\nCuốn sách  giúp bạn nhìn thấu cả ấm áp và lạnh lẽo của thế giới này.\n\n “Có ai trong chúng ta từng nghĩ  có thể mình sẽ FA suốt một đời hay chưa?”\n\nBạn đã rất lâu rồi không yêu, có lúc nghi ngờ liệu mình còn khả năng yêu ai hay không?\n\nCó lúc bạn hy vọng bản thân bạc tình một chút, như thế sẽ không sợ giây phút chỉ còn lại một mình cô độc.\n\nBa tháng trước, bạn vẫn có đôi, vậy mà hôm nay  đây chỉ có mình bạn.\n\nTất cả những ai cô đơn, không vui, mất ngủ, hoan nghênh các bạn lật giở những trang trong cuốn sách này bởi ở đây có những câu chuyện dành cho:\n\nCho những ai đã đi qua đổ vỡ\n\nCho những ngày cô đơn cùng cực, buồn bã cùng cực\n\nCho những ngày cô độc, nhìn quanh thế giới to là thế rộng là thế mà chỉ có duy nhất bạn ôm lấy vai gầy\n\nCho những ngày chúng ta bị tổn thương, đau đớn tưởng chết.\n\nNhưng như vậy thì đã sao? Con người ấy mà, có gặp sẽ có tan, tất cả những điều ở trước mắt chúng ta đều là quá khứ, chúng ta lúc nào cũng đang không ngừng giã biệt quá khứ. Thứ chúng ta có được là may mắn, thứ chúng ta đánh mất là cuộc đời.\n\n“FA thì sao?\n\nThì chẳng sao, chúng ta cần phải sống  trọn vẹn với cảm xúc của mình hơn. Không phải lo nghĩ quá nhiều đến cảm xúc của người khác.\n\nLàm điều mình thích, ăn món mình yêu, gặp vài người quen. Làm tất cả những thứ mình không thể làm trước đây. Dám làm, dám mạo hiểm hơn vì không phải nghĩ quá nhiều.\n\nTrưởng thành hơn trong cảm xúc, nhẹ nhàng và dịu dàng hơn trong cuộc sống.\n\nCho mình những cơ hội mới, niềm thương mới để lựa chọn thật kỹ một lần. Đừng đi qua những vết chân thời gian đã cũ.\n\n“Lỡ như chúng ta độc thân cả đời, trên bầu trời không còn sao sáng, giữa mây mù không còn những hạt mưa. Nhưng trong thế giới bạc bẽo này, bạn còn có tôi, luôn mở rộng vòng tay ôm bạn vào lòng…”\n\nThật ra chúng ta vẫn ngày ngày mải miết đi tìm những dịu dàng giữa bộn bề cuộc sống, cuốn sách này là tất cả ấm ám mùa Đông này dành cho bạn. Hãy đọc cuốn sách này nếu bạn đang trong trạng thái chán chường về tất cả bởi nó sẽ tiếp thêm cho bạn thật nhiều năng lượng tươi mới để sống một cuộc đời thú vị hơn đó !', 'TG023', 'K006', '2017-12-02', 74000, 110, 'P001', 'http://localhost:8080/php_mvc/bookStore/files/lo-chung-ta-fa-ca-doi.png'),
('B0982', 'Chúc Một Ngày Tốt Lành', 'Đọc tựa cuốn sách mới nhất của nhà văn Nguyễn Nhật Ánh là muốn mở ngay trang sách. Bạn sẽ thấy một thứ ngôn ngữ lạ của Hàn Quốc hay của nước nào tùy bạn đoán,  Gô un un là Chào buổi sáng; Un gô gô là Chúc ngủ ngon, và nữa, Chiếp un un; Ăng gô gô; Chiếp chiếp gô…\n\nSau chó Bê Tô, rồi Hai con mèo ngồi bên cửa sổ, nhà văn viết về một cặp heo\n\nNhân vật chính là hai con heo con, Lọ Nồi thông minh và Đeo Nơ xinh đẹp, cùng bạn chó Mõm Ngắn con chị Vện, mẹ Nái Sề, anh Đuôi Xoăn, Cánh Cụt và bọn gà chíp nhà chị Mái Hoa, … đã làm nên một câu chuyện vô cùng thú vị..\n\nVà thế giới trở nên thay đổi!', 'TG001', 'K003', '2014-03-05', 69200, 200, 'P002', 'http://localhost:8080/php_mvc/bookStore/files/ngay-tot-lanh.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `homepageattr`
--

CREATE TABLE `homepageattr` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `homepageattr`
--

INSERT INTO `homepageattr` (`ID`, `Name`, `Content`) VALUES
(1, 'top_banner', '[{\"image\":\"http:\\/\\/localhost:8080\\/php_mvc\\/bookStore\\/files\\/banner2%20%281%29.png\",\"id\":\"1\",\"title\":\"S\\u00e1ch\",\"description\":\"M\\u1ed7i cu\\u1ed1n s\\u00e1ch l\\u00e0 b\\u1ee9c tranh k\\u00ec di\\u1ec7u v\\u1ec1 cu\\u1ed9c s\\u1ed1ng\",\"linkbtn\":\"http:\\/\\/localhost:8080\\/php_mvc\\/bookStore\\/Home\\/work\",\"textbtn\":\"Kh\\u00e1m ph\\u00e1 ngay\"},{\"id\":\"2\",\"title\":\"L\\u1ee3i \\u00edch c\\u1ee7a \\u0111\\u1ecdc s\\u00e1ch\",\"description\":\"Nh\\u1eefng g\\u00ec s\\u00e1ch d\\u1ea1y ch\\u00fang ta c\\u0169ng gi\\u1ed1ng nh\\u01b0 l\\u1eeda. Ch\\u00fang ta l\\u1ea5y n\\u00f3 t\\u1eeb nh\\u00e0 h\\u00e0ng x\\u00f3m, th\\u1eafp n\\u00f3 trong nh\\u00e0 ta, \\u0111em n\\u00f3 truy\\u1ec1n cho ng\\u01b0\\u1eddi kh\\u00e1c v\\u00e0 n\\u00f3 tr\\u1edf th\\u00e0nh t\\u00e0i s\\u1ea3n c\\u1ee7a t\\u1ea5t c\\u1ea3 m\\u1ecdi ng\\u01b0\\u1eddi.\",\"linkbtn\":\"http:\\/\\/localhost:8080\\/php_mvc\\/bookStore\\/Home\\/work\",\"textbtn\":\"\\u0110\\u1ecdc ngay\",\"image\":\"http:\\/\\/localhost:8080\\/php_mvc\\/bookStore\\/files\\/banner-bg-book1%20%281%29.jpg\"},{\"id\":\"3\",\"title\":\"T\\u1ee7 s\\u00e1ch cho b\\u1ea1n\",\"description\":\"T\\u00f4i \\u0111\\u1ecdc l\\u1ed3i c\\u1ea3 m\\u1eaft v\\u00e0 v\\u1eabn kh\\u00f4ng \\u0111\\u1ecdc \\u0111\\u01b0\\u1ee3c \\u0111\\u1ee7 t\\u1edbi m\\u1ed9t n\\u1eeda\\u2026 ng\\u01b0\\u1eddi ta c\\u00e0ng \\u0111\\u1ecdc nhi\\u1ec1u, ng\\u01b0\\u1eddi ta c\\u00e0ng th\\u1ea5y c\\u00f2n nhi\\u1ec1u \\u0111i\\u1ec1u c\\u1ea7n ph\\u1ea3i \\u0111\\u1ecdc.\",\"linkbtn\":\"http:\\/\\/localhost:8080\\/php_mvc\\/bookStore\\/Home\\/work\",\"textbtn\":\"\\u0110i n\\u00e0o\",\"image\":\"http:\\/\\/localhost:8080\\/php_mvc\\/bookStore\\/files\\/as.jpg\"},{\"id\":\"4\",\"title\":\"H\\u1ed9i s\\u00e1ch Online\",\"description\":\"T\\u1ea5t c\\u1ea3 nh\\u1eefng g\\u00ec con ng\\u01b0\\u1eddi l\\u00e0m, ngh\\u0129 ho\\u1eb7c tr\\u1edf th\\u00e0nh: \\u0111\\u01b0\\u1ee3c b\\u1ea3o t\\u1ed3n m\\u1ed9t c\\u00e1ch k\\u1ef3 di\\u1ec7u tr\\u00ean nh\\u1eefng trang s\\u00e1ch. \",\"linkbtn\":\"http:\\/\\/localhost:8080\\/php_mvc\\/bookStore\\/Home\\/work\",\"textbtn\":\"Gh\\u00e9 th\\u0103m\",\"image\":\"http:\\/\\/localhost:8080\\/php_mvc\\/bookStore\\/files\\/banner1%20%282%29.jpg\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kind`
--

CREATE TABLE `kind` (
  `ID` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kind`
--

INSERT INTO `kind` (`ID`, `Name`) VALUES
('K001', 'Truyện tranh'),
('K002', 'Trinh thám'),
('K003', 'Tiểu thuyết'),
('K004', 'Văn hóa - Xã hội'),
('K005', 'Sách giáo khoa'),
('K006', 'Truyện học đường'),
('K007', 'Văn Học');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `publisher`
--

CREATE TABLE `publisher` (
  `ID` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Info` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `publisher`
--

INSERT INTO `publisher` (`ID`, `Name`, `Address`, `Phone`, `Info`) VALUES
('P001', 'Nhà xuất bản Kim Đồng', '55 Quang Trung, Hai Bà Trưng, Hà Nội', '02439434730', 'Đây là nhà xuất bản sách nổi tiếng cho thiếu nhi thuộc trực thuộc Trung ương Đoàn TNCS Hồ Chí Minh. Các nhà văn trẻ có thể gửi tác phẩm của mình cho nhà xuất bản Kim Đồng. Nhà xuất bản Kim Đồng chuyên in ấn, xuất bản sách dành cho thiếu nhi và các bậc phụ huynh trong cả nước. Ngoài ra nhà xuất bản còn có nhiều sách để quảng bá và giới thiệu văn hóa Việt Nam ra thế giới.'),
('P002', 'Nhà xuất bản Trẻ', '161B Lý Chính Thắng, Phường 7, Quận 3, Thành phố Hồ Chí Minh.', '(028) 39316289', 'Nhà xuất bản trẻ xuất bản sách và văn hóa phẩm các loại, phục vụ chủ yếu là các đối tượng trẻ như thanh niên, thiếu nhi, tổ chức Đoàn các cấp của thành phố, phục vụ bạn đọc trong và ngoài nước. Nhà xuất bản có nhận xuất bản nhiều thể loại sách như: tài liệu chính trị, kiến thức phổ thông, văn hóa – xã hội, nghệ thuật, văn học, từ điển,...'),
('P003', 'Nhà xuất bản Tổng hợp thành phố Hồ Chí Minh', '62 Nguyễn Thị Minh Khai, Phường Đa Kao, Quận 1, TP.HCM', '(028) 38 225 340', 'Nhà xuất bản Tổng hợp thành phố Hồ Chí Minh được thành lập từ năm 1977. Đúng như tên gọi của nhà xuất bản là cơ quan hội tụ về tư tưởng, văn hóa, chính trị của Đảng bộ và nhân dân thành phố. Nhà xuất bản Tổng hợp thành phố Hồ chí Minh xuất bản hàng ngàn tựa sách gồm nhiều thể loại'),
('P004', 'Nhà xuất bản chính trị quốc gia', 'Số 6/86 Duy Tân, Cầu Giấy, Hà Nội.', '0280.49221', 'Nhà xuất bản Chính trị quốc gia là đơn vị sự nghiệp trung ương của Đảng, xuất bản những cuốn sách về chính trị của Đảng và Nhà nước. Tổ chức biên tập, xuất bản các sách chính trị, xã hội, lý luận và pháp luật. Nhà xuất bản xuất bản sách chính trị nhằm nâng cao các kiến thức của nhân dân về chính trị, xã hội, lý luận và pháp luật. Phục vụ sự nghiệp đổi mới và hai nhiệm vụ chiến lược xây dựng và bảo vệ Tổ quốc.'),
('P005', 'Nhà xuất bản giáo dục', '81 Trần Hưng Đạo, Hà Nội', '024 38220801', 'Nhà xuất bản Giáo dục được thành lập ngày 1 tháng 6 năm 1957. Nhà xuất bản là một doanh nghiệp Nhà nước trực thuộc Bộ Giáo dục và Đào tạo.'),
('P006', 'Nhà xuất bản Hội Nhà văn', 'Số 65 Nguyễn Du, Hà Nội', '024.38222135', 'Nhà xuất bản Hội Nhà văn được thành lập năm 1957. Nhà xuất bản Hội Nhà văn là sự kế thừa và tiếp thu có hiệu quả của công tác xuất bản của Nhà xuất bản Văn nghệ. Sản phẩm chủ yếu của nhà xuất bản là xuất bản sách đa dạng các thể loại như: tiểu thuyết, văn học, truyện ngắn, nghiên cứu, thơ,… và báo chí.'),
('P007', 'Nhà xuất bản Tư pháp', 'Số 35 Trần Quốc Toản, Hoàn Kiếm, Hà Nội', '024.62632078', 'Nhà xuất bản Tư pháp là đơn vị sự nghiệp trực thuộc Bộ Tư pháp, nhà xuất bản có nhiệm vụ xuất bản ra sách có những nội dung nhằm mục đích tuyên truyền chủ trương các chính sách của Đảng, pháp luật của Nhà nước về ngành Tư pháp.'),
('P008', 'Nhà xuất bản thông tin và truyền thông', 'Tầng 6, Tòa nhà Cục Tần số Vô tuyến điện, số 115 Trần Duy Hưng, Hà Nội ', '024 35772145', 'Nhà xuất bản là tổ chức trực thuộc Bộ Thông tin và Truyền Thông, có nhiệm vụ thực hiện chức năng xuất bản sách phục vụ cho công tác quản lý nhà nước về: Tài liệu chính trị, pháp luật, xã hội, văn hóa xã hội, nghệ thuật, lịch sử truyền thống, địa lí,…Và đặc biệt là các nhiệm vụ khác do Bộ Thông tin và Truyền thông giao phó.'),
('P009', 'Nhà xuất bản lao động', '175 Giảng Võ, Đống Đa, Hà Nội', '0243.8515380 ', 'Nhà xuất bản chuyên in sách về nhiệm vụ tổ chức bản thảo, biên tập và phát hành sách về các lĩnh vực:\r\n\r\nĐường lối của Đảng.\r\nGiáo dục truyền thống cho công nhân, lao động và toàn xã hội.\r\nPhổ biến, giáo dục kiến thức toàn diện cho người dân, công nhân, lao động.\r\nCông trình nghiên cứu, tham khảo, tổng kết kinh nghiệm nghiệp cụ công tác công đoàn.\r\nLịch sử, phong trào, thi đua, của công đoàn.\r\nBồi dưỡng tay nghề, bảo hiểm xã hội, bảo hộ lao động.\r\nBảo vệ môi trường, ngăn ngừa và chống các tệ nạn xã hội.\r\nBồi dưỡng kiến thức quản ký kinh tế, giáo dục khoa học và công nghệ.\r\nHướng dẫn thực hiện các luật và giới thiệu văn bản dưới luật.\r\nGiáo trình và tài liệu phục vụ học tập, giảng dạy trong hệ thống Công đoàn\r\nLịch và văn hoá phẩm các loại.\r\nVăn học, nghệ thuật, văn hoá phục vụ công nhân, viên chức lao động và toàn xã hội.'),
('P010', 'Nhà xuất bản giao thông vận tải', '80B Trần Hưng Đạo, Hoàn Kiếm, Hà Nội', '024 3.9423346', 'Đúng như tên gọi của nó. Đây là nhà xuất bản duy nhất chuyên trong lĩnh vực giao thông vận tải. Sau hơn 30 năm xây dựng và phát triển, nhà xuất bản đã trở thành một thương hiệu trong ngành Xuất bản ngành này tại Việt Nam. ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate`
--

CREATE TABLE `rate` (
  `ID_Book` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ID_User` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Time_Rate` datetime NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the_order`
--

CREATE TABLE `the_order` (
  `ID` int(11) NOT NULL,
  `ID_Order` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Customer` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Book` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Invoice_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `the_order`
--

INSERT INTO `the_order` (`ID`, `ID_Order`, `ID_Customer`, `ID_Book`, `Quantity`, `Price`, `Invoice_Date`) VALUES
(1, '571002', '678778', 'B008', 2, 172800, '2019-01-14 11:32:03'),
(2, '553960', '872630', 'B009', 1, 71100, '2019-01-14 11:40:39'),
(3, '514890', '618248', 'B002', 1, 152000, '2019-01-14 11:41:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_user`
--

CREATE TABLE `type_user` (
  `ID` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_user`
--

INSERT INTO `type_user` (`ID`, `Name`) VALUES
('ADM', 'Admin'),
('ANO', 'Khách không phải thành viên'),
('CUS', 'Khách hàng'),
('EMP', 'Nhân viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Birthday` date NOT NULL,
  `ID_Type_User` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://placehold.it/400x400'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Name`, `Address`, `Phone`, `Mail`, `Birthday`, `ID_Type_User`, `Image`) VALUES
(1000, 'admin', '123', 'Hoàng Văn Thành', '100Q Hùng Vương Phường 9 Quận 5 Tp HCM', '0332072362', 'thanhhoang317@gmail.com', '1998-06-20', 'ADM', 'http://placehold.it/400x400'),
(1001, 'thanhhv', '123', 'Hoàng Văn Thành', '240 An dương vương quận 5', '0332072362', 'thanhhoang317@gmail.com', '1998-08-11', 'EMP', 'http://localhost:8080/php_mvc/bookStore/files/hi1%20%286%29.png'),
(1002, 'tuandq', '123', 'Đoàn Quang Tuấn', 'QUảng trị tà rụt', '038525798', 'doantuan998@gmail.com', '1998-04-01', 'EMP', 'http://localhost:8080/php_mvc/bookStore/files/20161002-0025.jpeg'),
(1003, 'thientv', '123', 'Trương Văn Thiên', '287 Lê Văn Sĩ Phương 12 QUận 4 Tp Hồ Chí Minh', '123', 'thientv@gmail.com', '1998-05-20', 'CUS', 'http://localhost:8080/php_mvc/bookStore/files/20161108-0010.jpeg'),
(1004, 'tiennmt', '123', 'Nguyễn Thị Mỹ Tiên', '100 Hùng Vương Phường 9 Quận 5 Tp Hồ Chí Minh', '012831237', 'tiennguyen23@gmail.com', '1999-02-12', 'CUS', 'http://localhost:8080/php_mvc/bookStore/files/tien-trong-book.jpg'),
(678778, '307676', '307676', 'nguyễn văn tèo', '120 đông hà quảng trị', '0352658955', 'teonv@gmail.com', '2001-08-05', 'CUS', 'http://localhost:8080/php_mvc/bookStore/files/sach-toi-la-ai-va-neu-vay-thi-bao-nhieu.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_kind_fk_book` (`ID_Kind`),
  ADD KEY `id_author_fk_author` (`ID_Author`),
  ADD KEY `id_publisher_fk_book` (`ID_Publisher`);

--
-- Chỉ mục cho bảng `homepageattr`
--
ALTER TABLE `homepageattr`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `kind`
--
ALTER TABLE `kind`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `the_order`
--
ALTER TABLE `the_order`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_user_fk_type` (`ID_Type_User`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `homepageattr`
--
ALTER TABLE `homepageattr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `the_order`
--
ALTER TABLE `the_order`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=678779;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `id_author_fk_author` FOREIGN KEY (`ID_Author`) REFERENCES `author` (`ID`),
  ADD CONSTRAINT `id_kind_fk_book` FOREIGN KEY (`ID_Kind`) REFERENCES `kind` (`ID`),
  ADD CONSTRAINT `id_publisher_fk_book` FOREIGN KEY (`ID_Publisher`) REFERENCES `publisher` (`ID`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `id_user_fk_type` FOREIGN KEY (`ID_Type_User`) REFERENCES `type_user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
