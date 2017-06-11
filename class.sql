-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-06-09 21:43:07
-- 伺服器版本: 10.1.21-MariaDB
-- PHP 版本： 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `class`
--

-- --------------------------------------------------------

--
-- 資料表結構 `activity`
--

CREATE TABLE `activity` (
  `activityID` int(11) NOT NULL,
  `title` text NOT NULL,
  `activityclass` varchar(4) NOT NULL,
  `content` text NOT NULL,
  `startTime` datetime NOT NULL,
  `endTime` datetime NOT NULL,
  `releaseTime` datetime NOT NULL,
  `url` text NOT NULL,
  `clickcount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `activity`
--

INSERT INTO `activity` (`activityID`, `title`, `activityclass`, `content`, `startTime`, `endTime`, `releaseTime`, `url`, `clickcount`) VALUES
(1, '5/17 職涯講座', '學校', '高陽描述“紅頂商人”胡雪巖時，就曾經這樣寫：\r\n“其實胡雪巖的手腕也很簡單，胡雪巖會說話，更會聽話，不管那人是如何言語無味，\r\n他能一本正經，兩眼注視，彷彿聽得極感興味似的。\r\n同時，他也真的是在聽，緊要關頭補充一、兩語，引伸一、兩義，使得滔滔不絕者，有\r\n莫逆於心之快，自然覺得投機而成至交”。\r\n\r\n\r\n\r\n傾聽是人與人之間溝通的主要武器， <http://www.594sales.com/1060/20161101> 怎\r\n麼說比說什麼更重要，\r\n\r\n就輔組為你邀請到學術實務皆有豐富資歷的人資專家蒞校，與你分享聽與說的藝術，趕\r\n快報名不要錯過囉！\r\n\r\n\r\n\r\n【職涯講座】\r\n\r\n一、主題：聽與說的藝術-溝通力\r\n\r\n二、主講人：美商宏智國際顧問有限公司台灣分公司  亞太區顧問  錢書華Michael\r\nChien博士\r\n\r\n三、時間：106年5月12日(五)中午12:20~13:50\r\n\r\n四、地點：綜合研究大樓一樓國際會議廳 RB-102\r\n\r\n五、講座報名網址：  <http://career.ntust.edu.tw/?ac1=other_lectures>\r\nhttp://career.ntust.edu.tw/?ac1=other_lectures\r\n\r\n\r\n※前30名入場者，憑學生證領取MOS精緻餐點乙份。\r\n\r\n　全程參與還有機會抽中威秀電影票2張及7-11禮券200元喔！\r\n\r\n\r\n\r\n學務處就業輔導組　熱情邀約！', '2017-05-12 12:30:00', '2017-05-12 13:50:00', '2017-05-01 00:00:00', 'http://career.ntust.edu.tw/?ac1=other_lectures', 3),
(2, '6/18 統神降臨台科', '學校', '6/18 統神受電競設邀請來到台科\r\n\r\n將在IB大樓舉辦LOL教學\r\n\r\n請大家踴躍參加唷\r\n', '2017-06-18 10:30:00', '2017-06-18 16:00:00', '2017-05-02 00:00:00', '', 3),
(3, '五月天台科校園演唱會', '學校', '五月天即將在6月6日來到台科囉!\r\n\r\n想要一睹天團的風采嗎?\r\n\r\n那就趕快按下底下的參加吧!!!!', '2017-06-06 18:00:00', '2017-06-06 23:00:00', '2017-05-16 21:18:27', '', 3),
(4, '班游統計', '班級', '一年一次的班游又要來臨啦\r\n\r\n請大家踴躍參加\r\n\r\n欲參加者在下方選擇參加即可', '2017-06-07 08:00:00', '2017-06-08 20:00:00', '2017-05-04 00:00:00', '', 3),
(5, '畢業旅行到泰國', '班級', '畢業旅行要到泰國囉!!\r\n\r\n有美食\r\n\r\n有泰國浴\r\n\r\n有人妖\r\n\r\n欲參加者請下方點選參加送出', '2017-07-07 07:00:00', '2017-07-15 20:00:00', '2017-05-04 00:00:00', '', 3),
(58, '蘇打綠即將在6月8日來到台科囉!\r\n', '學校', '蘇打綠即將在6月8日來到台科囉!\r\n\r\n想要一睹天團的風采嗎?\r\n\r\n那就趕快按下底下的參加吧!', '2017-06-08 12:00:00', '2017-06-08 16:00:00', '2017-05-09 00:00:00', '', 0),
(59, '羅志祥即將在6月10日來到台科囉!\r\n', '學校', '羅志祥即將在6月10日來到台科囉!\r\n\r\n想要一睹天團的風采嗎?\r\n\r\n那就趕快按下底下的參加吧!', '2017-06-10 14:00:00', '2017-06-10 21:00:00', '2017-05-10 00:00:00', '', 0),
(81, '科P市長光臨台科', '學校', '想親眼觀看科P市長語不驚人死不修的說話藝術嗎?\r\n\r\n想親眼觀看科P市長語不驚人死不修的說話藝術嗎?\r\n\r\n想親眼觀看科P市長語不驚人死不修的說話藝術嗎?\r\n\r\n欲參加同學請在下方選擇參加!!!', '2017-06-09 08:00:00', '2017-06-09 13:00:00', '2017-05-13 23:30:36', '', 0),
(89, '中忍考試在台科', '學校', '第八次火之國中忍考試在台科\r\n\r\n第八次火之國中忍考試在台科\r\n\r\n第八次火之國中忍考試在台科\r\n\r\n欲報名者請在下方點選參加', '2017-06-08 13:00:00', '2017-06-08 19:00:00', '2017-05-14 01:42:02', '', 0),
(90, '過期的活動測試', '學校', '過期的活動測試\r\n\r\n過期的活動測試\r\n\r\n過期的活動測試', '2017-05-28 15:00:00', '2017-05-28 20:00:00', '2017-05-29 03:12:29', '', 0),
(91, '科P市長再臨台科', '學校', '想親眼觀看科P市長語不驚人死不修的說話藝術嗎?\r\n\r\n想親眼觀看科P市長語不驚人死不修的說話藝術嗎?\r\n\r\n想親眼觀看科P市長語不驚人死不修的說話藝術嗎?\r\n\r\n欲參加同學請在下方選擇參加!!!', '2017-06-30 15:00:00', '2017-06-30 18:00:00', '2017-05-29 04:14:26', '', 0),
(92, '導生聚', '班級', '學期第二次導生聚報名開始囉\r\n\r\n欲參加者請在下方點選參加喔', '2017-06-20 00:00:00', '2017-06-20 14:00:00', '2017-05-31 01:17:10', '', 0),
(93, '暑假班遊', '班級', '暑假班遊到日本\r\n\r\n欲參加者請在下方點選參加喔', '2017-07-05 08:00:00', '2017-07-10 20:00:00', '2017-05-31 01:18:54', '', 0),
(94, '台科格鬥大賽', '學校', '第一屆台科格鬥大賽即將開始囉\r\n\r\n活動邀請拳王泰森到場觀摩\r\n\r\n請欲參加的同學在下列表單內填寫報名', '2017-06-20 19:00:00', '2017-06-20 23:00:00', '2017-06-06 18:11:09', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `activityapply`
--

CREATE TABLE `activityapply` (
  `applyID` int(11) NOT NULL,
  `activityID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `applyTime` datetime NOT NULL,
  `participate` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `activityapply`
--

INSERT INTO `activityapply` (`applyID`, `activityID`, `memberID`, `applyTime`, `participate`) VALUES
(1, 2, 7, '2017-05-07 02:18:50', 'y'),
(2, 3, 7, '2017-05-07 02:28:51', 'y'),
(3, 3, 10, '2017-05-07 02:31:05', 'y'),
(4, 2, 10, '2017-05-07 02:31:21', 'n'),
(5, 4, 6, '2017-05-07 12:12:56', 'y'),
(8, 4, 10, '2017-05-07 06:55:54', 'y'),
(11, 5, 12, '2017-05-08 10:22:46', 'y'),
(13, 59, 3, '2017-05-19 00:00:00', 'y'),
(14, 59, 4, '2017-05-19 00:00:00', 'n'),
(15, 59, 5, '2017-05-19 01:00:00', 'y'),
(16, 59, 6, '2017-05-19 02:00:00', 'y'),
(17, 59, 7, '2017-05-19 03:00:00', 'y'),
(18, 59, 8, '2017-05-19 04:00:00', 'y'),
(19, 59, 9, '2017-05-19 05:00:00', 'y'),
(20, 59, 10, '2017-05-19 06:00:00', 'y'),
(25, 59, 1, '2017-05-13 19:16:49', 'y'),
(28, 5, 1, '2017-05-14 01:50:48', 'y'),
(33, 4, 1, '2017-05-16 21:06:09', 'y'),
(36, 3, 1, '2017-05-16 21:18:18', 'y'),
(45, 81, 1, '2017-05-16 21:48:26', 'y'),
(52, 58, 1, '2017-05-21 19:31:44', 'y'),
(57, 2, 1, '2017-05-21 22:11:33', 'y'),
(59, 89, 1, '2017-05-26 20:40:05', 'y'),
(60, 89, 2, '2017-05-29 01:55:42', 'y'),
(61, 81, 2, '2017-05-29 01:58:34', 'y'),
(62, 59, 2, '2017-05-29 01:58:38', 'y'),
(63, 58, 2, '2017-05-29 01:58:46', 'y'),
(64, 5, 2, '2017-05-29 01:58:51', 'y'),
(65, 4, 2, '2017-05-29 01:58:56', 'y'),
(66, 3, 2, '2017-05-29 01:59:00', 'y'),
(67, 2, 2, '2017-05-29 01:59:05', 'y'),
(68, 90, 1, '2017-05-29 03:12:48', 'y'),
(69, 90, 2, '2017-05-29 03:13:00', 'y'),
(70, 91, 1, '2017-05-29 04:14:32', 'y'),
(71, 90, 12, '2017-05-29 04:16:55', 'y'),
(72, 90, 15, '2017-05-30 01:48:31', 'y'),
(73, 89, 15, '2017-05-30 01:48:42', 'y'),
(74, 92, 1, '2017-05-31 01:17:47', 'y'),
(77, 94, 1, '2017-06-06 23:08:40', 'y');

-- --------------------------------------------------------

--
-- 資料表結構 `announcement`
--

CREATE TABLE `announcement` (
  `announcementID` int(11) NOT NULL,
  `announcementclass` varchar(4) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `releaseTime` datetime NOT NULL,
  `clickcount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `announcement`
--

INSERT INTO `announcement` (`announcementID`, `announcementclass`, `title`, `content`, `releaseTime`, `clickcount`) VALUES
(1, '總務處', '【萬安演習】106年萬安40號演習注意事項', '106年度軍民聯合防空（萬安40號）演習通知\r\n一、時間：106年5月18日(星期四) 下午13時30分至14時00分\r\n二、本校配合事宜：\r\n(一)聞警報發布時，教職員工生應採取如下步驟：\r\n教職員工生 應關閉門窗、電燈，勿至室外 走動。\r\n(二)聞警報發布時，防護團應立即採取如下步驟：\r\n1.    團本部立即督導各任務班執行防護、疏散工作。\r\n2.    管制中心立即對各任務班指揮與管制，執行警報命令接收、下達與通報，並應隨時與各班保持聯繫，適時將訊息傳達團本部與各相關單位。\r\n3.    防護班立即執行校區出入口管制及人車疏散避難、引導校園內人員進入避難位置，並應嚴密警戒，以防止不法份子乘機潛入、破壞。\r\n4.    消防班、工程班、供應班、救護班、核生化偵檢班等人員應攜帶裝備器材， 至待命位置向班長報到待命，俾便處理緊急狀況。\r\n \r\n感謝您的配合與協助！', '2017-05-11 13:00:00', 2),
(2, '電算中心', '【電子計算機中心】勒索軟體 WanaCrypt0r 2.0 攻擊 Windows 系統漏洞。', '各位師長、同學們好：\r\n \r\n1.      教育機構資安通報平台於近日公告資訊，勒索軟體 WanaCrypt0r 2.0 攻擊 Windows 系統漏洞，造成檔案加密無法使用。\r\n2.      據瞭解，此勒索病毒係透過系統漏洞進行攻擊，建議盡快安裝官方釋出之安全性更新，避免機構及個人電腦遭受感染。\r\n3.      教育機構ANA通報平台之建議措施，請參照網址說明：http://cert.ntu.edu.tw/Document/announce/announce_170513.htm\r\n4.      如主機尚未被感染，請採取以下緊急防護措施：\r\n(1)  關閉主機網路芳鄰 TCP port 445\r\n(2)  請依教育機構http://cert.ntu.edu.tw/Document/announce/announce_170513.htm方式修補系統漏洞。\r\n(3)  請製作備份檔案，並存放在不同地點，至少有一個系統備份處於實體隔離之網路環境。\r\n5.      如有任何問題，請逕洽電算中心，校內分機 1049 臧先生。\r\n \r\n電子計算機中心  敬啟', '2017-05-15 09:00:00', 3),
(3, '學生議會', '學生議會-學生選課權益表單調查結果公告', '本學生議會於2017年2月21日進行通識向度及體育選課的調查\r\n分別以全校信件、學生議會粉絲專頁、天大地大台科大頭殼(talk)版，進行線上問卷調查。\r\n共384份有效問卷\r\n\r\n經調查結果主要分為以下幾點：\r\n通識課程\r\n1.台科學生希望通識向度能同103學年度不分任何向度\r\n2.不要有通識課程年級、科系時段的限制\r\n3.通識課程的課程可以有更多的變化，予以更改課程方向\r\n4.期望抽課制度能以尚未修過類似課程的同學為優先抽選\r\n體育課程\r\n1.沒有時段限制，讓同學能有排課上的自由\r\n2.任何年段的學生都能同時修習兩堂體育課，非只有大四（含以上）學生\r\n3.上學期沒有修體育課者，下學期能選課修習\r\n4.抽籤部分，同學期許過人數上限就抽籤，其他沒抽到的同學則選擇其他體育項目\r\n此外，在表單截止日後一週便著手與校方溝通，由於課程上的安排對於學校行政、教授、外聘講師、學生等，皆會受到影響，因此本案仍在執行中，若有新訊息，會立即更新，讓大家知曉！\r\n第九屆學生議會\r\n附檔連結:\r\ngoo.gl/t08Gby', '2017-05-15 17:00:00', 2),
(4, '註冊組', '二次退選結束時間通知', '各位同學好： \r\n \r\n   二次退選電腦作業將於5月19日下午5點結束，請同學把握時間上網列印申請單，並經導師(指導教授)簽名後於5月22日下午5點前送教務處，逾期無法辦理。\r\n \r\n未完成手續者視同未辦理二次退選。\r\n \r\nDear students,\r\n \r\nThe on-line process for the 2nd Dropping Courses will be ended at 5 pm. on May. 19, please make sure to print out the application form via Student Information System.\r\nAfter Advisor signs the form, please submit it to Academic Affairs Office before 5 pm. on May 22. The late submission will NOT be accepted.\r\n \r\nUnfinished procedures will be considered as NOT doing the 2nd Dropping Courses.', '2017-05-25 13:00:00', 5),
(5, '學生議會', '【學生會代寄－大學生暑假返鄉5折優惠列車】', '【大學生暑假返鄉5折優惠列車】 \r\n5/24開放購票\r\n暑假即將開始，台灣高鐵特別針對大學生返鄉需求，於6月20日（二）至6月26日（一）規劃「大學生暑假返鄉5折優惠列車」，自5月24日（三）凌晨零時起開放購票。有需要的同學可到官網查詢~\r\n高鐵公司特別提醒大學生，乘車時務必攜帶本人有效之學生證正本以備查驗，以免影響優惠權益，詳細資訊及相關規定，請參考高鐵企業網站 <http://www.thsrc.com.tw/…/530e869c-479d-441a-a4b4-61a816682…> 。\r\n', '2017-05-25 15:00:00', 4),
(6, '註冊組', ' 第三教學大樓停電施工106年6月8日(週四)17:00至20:00', '親愛的師長、同仁、學生大家好：\r\n體育館因總變電站變壓器故障需臨時接第三教學大樓用電，需停電進行施作，提早完工將提早供電，造成您的不便敬請見諒。\r\n \r\n施工時間為\r\n106年6月8日(週四)17:00至20:00，敬請及早因應，造成不便之處，請多多包涵。\r\n \r\n國立台灣科技大學總務處營繕組\r\n王明賢  (02)2730-3233\r\n震聯電業股份有限公司\r\n張先生0920-923171', '2017-06-06 18:05:34', 0),
(7, '註冊組', '敬請使用【非黑色塑膠袋】包裝垃圾', '各位教職員工師生 您好：\r\n \r\n根據「臺北市政府環境保護局清除違規垃圾包及免用專用垃圾袋垃圾作業規定」不得使用黑色塑膠袋包裝垃圾，敬請使用透明非黑色塑膠袋包裝，並於本校垃圾場開放時間時拿至垃圾場丟棄，\r\n \r\n未符合規定者將依「臺北市政府環境保護局清除違規垃圾包及免用專用垃圾袋垃圾作業規定」禁止傾倒在本校垃圾場，\r\n \r\n愛護環境，也請您做好垃圾分類，感謝您的配合與協助，謝謝。\r\n \r\n總務處 敬啟\r\n \r\n【垃圾場開放時間】\r\n星期一 ~ 星期五\r\n　上午：8時至9時\r\n　下午：15時至16時\r\n星期日\r\n　中午：11時30分至12時30分', '2017-06-06 18:09:08', 0),
(8, '註冊組', 'TR研揚大樓一樓廣場舉辦「失物招領」義賣活動,歡迎同學踴躍參與!', '各位同學及同仁大家好!\r\n本校「失物招領系統」業已上線供查詢，若有遺失物品之同學或同仁，請由學校首頁 →學生(或常用連結)→失物招領系統進入查詢，網址: http://lost.ntust.edu.tw/ ，或親至學生活動中心二樓學務處 02 櫃台洽詢。\r\n 本處訂於06月10日~06月12日每日12:30~15:30於TR研揚大樓一樓廣場，舉辦105年05月16日至105年10月17日期間公告招領之失物義賣。因本次拍賣物已經依本校失物招領處理要點之規定，完成六個月之公告期限，始進行義賣，爰義賣清理後，恕無法再辦理認領，還請各位同學及同仁多多配合及體諒(義賣物品詳如附檔)。\r\n 本次義賣所得將納入本校「校務基金」經費學生救助項目運用，歡迎大家共襄盛舉，有需要之同學或同仁，請多多利用。選購時請自備零錢。\r\n另該期間拾獲無人認領之雨傘及安全帽，將以愛心傘及愛心安全帽型式利用，請有需要之同學或同仁，至學務處02櫃台登記借用。\r\n                     \r\n                                                                                                                                                              學務處啟\r\n \r\n另外「領導與溝通」課程師生也同時舉辦了二手市集，也誠摯歡迎您前來。\r\n搬地來，錢就來的活動，歡迎您的到來。\r\n底下網址為活動粉絲專業，您一定不容錯過，欲知詳情裡面請。\r\n\r\nhttps://www.facebook.com/%E6%90%AC%E5%9C%B0%E4%BE%86%E9%8C%A2%E5%B0%B1%E4%BE%86-2133306110018341/\r\n\r\n或者臉書直接搜尋 『搬地來，錢就來』\r\n\r\n即可找到囉', '2017-06-06 18:22:06', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `authority`
--

CREATE TABLE `authority` (
  `authorityIdentity` varchar(20) NOT NULL DEFAULT 'menber',
  `memberID` int(11) NOT NULL,
  `memberAccount` varchar(20) NOT NULL,
  `memberPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `authority`
--

INSERT INTO `authority` (`authorityIdentity`, `memberID`, `memberAccount`, `memberPassword`) VALUES
('quest', 0, '', '1234'),
('admin', 1, 'admin', '1234'),
('member', 2, 'B10330327', '1234'),
('member', 3, 'B10433007', '1234'),
('member', 4, 'B10433033', '1234'),
('member', 5, 'B10333035', '1234'),
('menber', 6, 'B10409001', '1234'),
('menber', 7, 'B10409002', '1234'),
('menber', 8, 'B10409003', '1234'),
('menber', 9, 'B10409004', '1234'),
('menber', 10, 'B10409005', '1234'),
('menber', 11, 'B10409006', '1234'),
('menber', 12, 'B10409007', '1234'),
('menber', 13, 'B10409008', '1234'),
('menber', 14, 'B10409009', '1234'),
('menber', 15, 'B10409010', '1234'),
('menber', 16, 'B10409011', '1234'),
('menber', 17, 'B10409012', '1234'),
('member', 18, 'B10409013', '1234'),
('member', 19, 'B10409014', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `discuss`
--

CREATE TABLE `discuss` (
  `discussID` int(11) NOT NULL,
  `discussclass` varchar(4) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `releaseTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `memberID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `discuss`
--

INSERT INTO `discuss` (`discussID`, `discussclass`, `title`, `content`, `releaseTime`, `memberID`) VALUES
(1, '選課', '推薦的通識課', '請問學長姐，有推薦涼的通識課嗎~~', '2017-06-04 10:31:42', 7),
(2, '選課', '請問微積分課程', '請問學長姐有推薦哪個微積分老師的課嗎', '2017-06-04 10:32:42', 9),
(14, '徵課本', '請問學長姐有微積分課本嗎', '請問學長姐有微積分課本嗎\r\n有的話感謝大大借我或者是賣我！！！', '2017-06-04 10:31:50', 11),
(18, '班游', '暑假大家一起去玩吧', '暑假快到了\r\n大家有想要去哪裡玩的嗎\r\n有的話可以跟這次的負責人，也就是我建議班游的地點哦！', '2017-06-04 10:33:59', 4),
(21, '555', '555', '555', '2017-06-05 06:40:58', 4),
(22, '測試', '話題測試', '測試\r\nTEST', '2017-06-06 11:43:33', 1),
(23, '課程', '請問有推薦的通識爽課嗎', '請問有推薦的通識爽課嗎??\r\n\r\n有人可以推薦的嗎~感恩!', '2017-06-06 11:58:33', 2),
(24, '二手書', '請問有二手的統計課本嗎?', '請問有二手的統計課本嗎?\r\n\r\n有人可以賣的 幫忙一下喔!', '2017-06-06 11:59:47', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `discussmessage`
--

CREATE TABLE `discussmessage` (
  `messageID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `discussID` int(11) NOT NULL,
  `content` text NOT NULL,
  `releaseTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `discussmessage`
--

INSERT INTO `discussmessage` (`messageID`, `memberID`, `discussID`, `content`, `releaseTime`) VALUES
(1, 2, 1, '感動散文阿', '2017-06-06 12:30:20'),
(7, 2, 1, '溝通與表達也不錯啊', '0000-00-00 00:00:00'),
(8, 5, 24, '我有阿 FB請私密\r\n\r\n\r\n\r\n', '0000-00-00 00:00:00'),
(9, 5, 23, '魚菜共生很好混喔', '0000-00-00 00:00:00'),
(10, 5, 23, '溝通與表達也不錯', '0000-00-00 00:00:00'),
(11, 5, 18, '我覺得去泰國不錯', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `imageID` int(11) NOT NULL,
  `imageDirID` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `releaseTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `image`
--

INSERT INTO `image` (`imageID`, `imageDirID`, `title`, `url`, `releaseTime`) VALUES
(1, 1, '2017.06.05班聚1', 'img/memory/1/1.jpg', '2017-06-02 13:07:59'),
(2, 1, '2017.06.05班聚2', 'img/memory/1/2.jpg', '2017-06-02 13:08:11'),
(3, 2, '資訊網路', 'img/memory/2/1.jpg', '2017-06-02 13:48:03'),
(4, 1, '2017.06.05班聚3', 'img/memory/1/3.JPG', '0000-00-00 00:00:00'),
(5, 1, '2017.06.05班聚4', 'img/memory/1/4.JPG', '0000-00-00 00:00:00'),
(6, 1, '2017.06.05班聚5', 'img/memory/1/5.JPG', '0000-00-00 00:00:00'),
(7, 2, '賴源正老師', 'img/memory/2/2.jpg', '0000-00-00 00:00:00'),
(8, 3, '唱歌1', 'img/memory/3/1.JPG', '0000-00-00 00:00:00'),
(9, 5, '哈哈哈', 'img/memory/5/1.JPG', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `imagedir`
--

CREATE TABLE `imagedir` (
  `imageDirID` int(11) NOT NULL,
  `dirName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `imagedir`
--

INSERT INTO `imagedir` (`imageDirID`, `dirName`) VALUES
(1, '2017.06.05班聚'),
(2, '班導帥氣上課照'),
(3, '歌唱比賽'),
(4, '班遊'),
(5, '測試');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `memberID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` varchar(2) NOT NULL,
  `picture` text NOT NULL,
  `birthday` date DEFAULT NULL,
  `constellation` varchar(4) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `skill` text NOT NULL,
  `interest` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`memberID`, `name`, `sex`, `picture`, `birthday`, `constellation`, `email`, `phone`, `skill`, `interest`) VALUES
(0, '訪客', '男', '', NULL, '', '', '', '', ''),
(1, '管理員', '男', 'img/member/picture/1.jpg', NULL, '', '', '', '', ''),
(2, '鄒智炎', '男', 'img/member/picture/2.jpg', '2017-07-01', '獅子座', 'ringmoon308@gmail.com', '0975853165', '1.睡覺', '1.睡覺'),
(3, '梁筑晴', '男', 'img/member/picture/0.jpg', NULL, '', '', '', '', ''),
(4, '游堯升', '男', 'img/member/picture/0.jpg', NULL, '', '', '', '', ''),
(5, '陸怡娟', '女', 'img/member/picture/5.jpg', '1995-05-01', '牡羊座', 'B10333035@mail.ntust.edu.tw', '0900', '1.問她本人吧', '1.問她本人吧'),
(6, '騙人布', '男', 'img/member/picture/6.jpg', '2017-04-01', '牡羊座', '', '', '1.騙人', '1.騙人'),
(7, '櫻木花道', '男', 'img/member/picture/7.jpg', '2017-04-01', '牡羊座', '', '', '1.灌籃', '1.灌籃'),
(8, '小丸子', '女', 'img/member/picture/8.jpg', '2017-04-04', '牡羊座', '', '', '1.找爺爺', '1.找爺爺'),
(9, '江戶川柯南', '男', 'img/member/picture/9.jpg', '2017-05-04', '金牛座', '', '', '1.推理', '1.推理'),
(10, '蒙奇D魯夫', '男', 'img/member/picture/10.jpg', '2017-05-05', '金牛座', '', '', '1.成為海賊王', '1.成為海賊王'),
(11, '雲雀恭彌', '男', 'img/member/picture/11.jpg', '2017-05-05', '金牛座', '', '', '1.擔任風紀股長', '1.擔任風紀股長'),
(12, '赤木剛憲', '男', 'img/member/picture/12.jpg', '2017-05-10', '金牛座', '', '', '1.擔任籃球隊長\r\n2.揍櫻木花道', '1.擔任籃球隊長'),
(13, '藍波', '男', 'img/member/picture/13.jpg', '2017-05-28', '雙子座', '', '', '1.要忍耐', '1.要忍耐'),
(14, '西索', '男', 'img/member/picture/14.jpg', '2017-06-06', '雙子座', '', '', '1.抽鬼牌', '1.抽鬼牌'),
(15, '宇智波鼬', '男', 'img/member/picture/15.jpg', '2017-06-09', '雙子座', '', '', '1.瞪人', '1.瞪人'),
(16, '胖虎', '男', 'img/member/picture/16.jpg', '2017-06-15', '雙子座', '', '', '1.追大雄\r\n', '1.追大雄\r\n2.唱歌a\r\n'),
(17, '君麻呂', '男', 'img/member/picture/17.jpg', '2017-06-15', '雙子座', 'B10409012@mail.ntust.edu.tw', '0988883012', '1.啃骨頭', '1.啃骨頭'),
(18, '唐老大', '男', 'img/member/picture/18.jpg', '1967-07-18', '巨蟹座', 'B10409013@mail.ntust.edu.tw', '0988883013', '1.飆車\r\n2.甩尾\r\n3.摔角\r\n', '1.飆車\r\n2.甩尾\r\n3.摔角'),
(19, '間柴了', '男', 'img/member/picture/0.jpg', '2017-06-30', '巨蟹座', '', '', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `video`
--

CREATE TABLE `video` (
  `videoID` int(11) NOT NULL,
  `videoDirID` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `releaseTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `video`
--

INSERT INTO `video` (`videoID`, `videoDirID`, `title`, `url`, `releaseTime`) VALUES
(1, 1, '班遊1', 'https://www.youtube.com/embed/CY1ZK5w_gDY', '2017-06-02 14:57:46'),
(2, 1, '班遊2', 'https://www.youtube.com/embed/Shq3d__yTNA', '0000-00-00 00:00:00'),
(3, 1, '班遊3', 'https://www.youtube.com/embed/WxquJvvRJxg', '0000-00-00 00:00:00'),
(4, 2, '唱歌比賽1', 'https://www.youtube.com/embed/somM60ZW2B4', '0000-00-00 00:00:00'),
(5, 2, '唱歌比賽2', 'https://www.youtube.com/embed/MRXc11XisCo', '2017-06-02 15:31:08');

-- --------------------------------------------------------

--
-- 資料表結構 `videodir`
--

CREATE TABLE `videodir` (
  `videoDirID` int(11) NOT NULL,
  `dirName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `videodir`
--

INSERT INTO `videodir` (`videoDirID`, `dirName`) VALUES
(1, '班遊'),
(2, '歌唱比賽'),
(3, '畢業典禮'),
(4, '企業參訪'),
(5, '測試');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activityID`),
  ADD KEY `activityID` (`activityID`);

--
-- 資料表索引 `activityapply`
--
ALTER TABLE `activityapply`
  ADD PRIMARY KEY (`applyID`),
  ADD KEY `applyID` (`applyID`),
  ADD KEY `activityID` (`activityID`),
  ADD KEY `memberID` (`memberID`);

--
-- 資料表索引 `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcementID`),
  ADD KEY `announcementID` (`announcementID`);

--
-- 資料表索引 `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`memberID`),
  ADD UNIQUE KEY `memberID` (`memberID`),
  ADD UNIQUE KEY `memberAccount` (`memberAccount`),
  ADD KEY `authorityIdentity` (`authorityIdentity`),
  ADD KEY `memberID_2` (`memberID`);

--
-- 資料表索引 `discuss`
--
ALTER TABLE `discuss`
  ADD PRIMARY KEY (`discussID`),
  ADD KEY `discussID` (`discussID`),
  ADD KEY `memberID` (`memberID`);

--
-- 資料表索引 `discussmessage`
--
ALTER TABLE `discussmessage`
  ADD PRIMARY KEY (`messageID`),
  ADD KEY `messageID` (`messageID`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `discussID` (`discussID`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`imageID`),
  ADD KEY `imageDirID` (`imageDirID`);

--
-- 資料表索引 `imagedir`
--
ALTER TABLE `imagedir`
  ADD PRIMARY KEY (`imageDirID`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberID`),
  ADD UNIQUE KEY `menberID_2` (`memberID`),
  ADD KEY `menberID` (`memberID`);

--
-- 資料表索引 `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`videoID`),
  ADD KEY `videoDirID` (`videoDirID`);

--
-- 資料表索引 `videodir`
--
ALTER TABLE `videodir`
  ADD PRIMARY KEY (`videoDirID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `activity`
--
ALTER TABLE `activity`
  MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- 使用資料表 AUTO_INCREMENT `activityapply`
--
ALTER TABLE `activityapply`
  MODIFY `applyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- 使用資料表 AUTO_INCREMENT `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用資料表 AUTO_INCREMENT `authority`
--
ALTER TABLE `authority`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- 使用資料表 AUTO_INCREMENT `discuss`
--
ALTER TABLE `discuss`
  MODIFY `discussID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- 使用資料表 AUTO_INCREMENT `discussmessage`
--
ALTER TABLE `discussmessage`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用資料表 AUTO_INCREMENT `image`
--
ALTER TABLE `image`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用資料表 AUTO_INCREMENT `imagedir`
--
ALTER TABLE `imagedir`
  MODIFY `imageDirID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用資料表 AUTO_INCREMENT `video`
--
ALTER TABLE `video`
  MODIFY `videoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用資料表 AUTO_INCREMENT `videodir`
--
ALTER TABLE `videodir`
  MODIFY `videoDirID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `activityapply`
--
ALTER TABLE `activityapply`
  ADD CONSTRAINT `activityapply_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activityapply_ibfk_2` FOREIGN KEY (`activityID`) REFERENCES `activity` (`activityID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `discuss`
--
ALTER TABLE `discuss`
  ADD CONSTRAINT `discuss_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `discussmessage`
--
ALTER TABLE `discussmessage`
  ADD CONSTRAINT `discussmessage_ibfk_1` FOREIGN KEY (`discussID`) REFERENCES `discuss` (`discussID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `discussmessage_ibfk_2` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`imageDirID`) REFERENCES `imagedir` (`imageDirID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `authority` (`memberID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`videoDirID`) REFERENCES `videodir` (`videoDirID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
