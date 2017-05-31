-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-05-31 01:19:38
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
(93, '暑假班遊', '班級', '暑假班遊到日本\r\n\r\n欲參加者請在下方點選參加喔', '2017-07-05 08:00:00', '2017-07-10 20:00:00', '2017-05-31 01:18:54', '', 0);

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
(74, 92, 1, '2017-05-31 01:17:47', 'y');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `releaseTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `discussmessage`
--

CREATE TABLE `discussmessage` (
  `messageID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `discussID` int(11) NOT NULL,
  `content` text NOT NULL,
  `releaseTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `imageID` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `releaseTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(19, '間柴了', '男', 'img/member/picture/19.jpg', '2017-06-30', '巨蟹座', '', '', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `video`
--

CREATE TABLE `video` (
  `videoID` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `releaseTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD KEY `discussID` (`discussID`);

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
  ADD PRIMARY KEY (`imageID`);

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
  ADD PRIMARY KEY (`videoID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `activity`
--
ALTER TABLE `activity`
  MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- 使用資料表 AUTO_INCREMENT `activityapply`
--
ALTER TABLE `activityapply`
  MODIFY `applyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- 使用資料表 AUTO_INCREMENT `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcementID` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `authority`
--
ALTER TABLE `authority`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- 使用資料表 AUTO_INCREMENT `discuss`
--
ALTER TABLE `discuss`
  MODIFY `discussID` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `discussmessage`
--
ALTER TABLE `discussmessage`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `image`
--
ALTER TABLE `image`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `video`
--
ALTER TABLE `video`
  MODIFY `videoID` int(11) NOT NULL AUTO_INCREMENT;
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
-- 資料表的 Constraints `discussmessage`
--
ALTER TABLE `discussmessage`
  ADD CONSTRAINT `discussmessage_ibfk_1` FOREIGN KEY (`discussID`) REFERENCES `discuss` (`discussID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `discussmessage_ibfk_2` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `authority` (`memberID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
