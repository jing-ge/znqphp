-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-08-03 08:58:34
-- 服务器版本： 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `znq`
--

-- --------------------------------------------------------

--
-- 表的结构 `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `con_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `subtime` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `comments`
--

INSERT INTO `comments` (`id`, `uid`, `con_id`, `comment`, `subtime`) VALUES
(1, 1, 1, '对第一篇的评论', 1501306425),
(2, 1, 2, '对第二篇的评论', 1501306425),
(3, 1, 3, '第三篇', 1501306425),
(4, 1, 1, '第一篇的第二个', 1501306428),
(5, 1, 4, '是的放假了快速的减肥看来是', 1501503047),
(6, 1, 4, '讲课风格别看国防观不管能不能', 1501503057),
(7, 1, 4, '的说法开发和', 1501503067),
(8, 1, 18, 'zhazha', 1501577179),
(9, 1, 18, 'laji', 1501577392),
(10, 1, 17, 'laji', 1501577645),
(11, 1, 19, '你个大傻逼', 1501577736),
(12, 1, 20, '你个大傻逼', 1501577789),
(13, 1, 22, '你个大傻逼', 1501578152),
(14, 1, 22, 'erhuoi a ', 1501665496),
(15, 1, 23, 'shishiquba', 1501740450);

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `topicid` varchar(20) NOT NULL,
  `subtime` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `content`
--

INSERT INTO `content` (`id`, `uid`, `title`, `content`, `topicid`, `subtime`) VALUES
(1, 1, '填', '今天天气不错啊', '1', 1501301557),
(2, 1, '扎哈', '手机打开了房间速度', '2', 1501302547),
(3, 1, '靖哥今天好帅', '巴拉巴拉', '3', 1501302557),
(4, 1, '就打开了手机费', '速度快放假了快速的减肥说到底发sdk发动快速方块', '2', 1501493657),
(5, 1, 'title', 'contetn', '2', 1501572601),
(6, 1, 'kjdsf', 'contetn', '4', 1501572739),
(7, 1, '7', 'contentt', '10', 1501572769),
(8, 1, 'bala', 'sdjfkljsdkf ', '1', 1501572927),
(9, 1, 'sdjkf', 'dsfnnmvc', '6', 1501573162),
(10, 1, '345', 'sdkfjdkl', '2', 1501573207),
(11, 1, 'shangqiang', 'sdjfkldsjkl', '2', 1501573282),
(12, 1, 'shangqkl', 'ksldfj ', '10', 1501573323),
(13, 1, ',mnm,', 'fksldjfkl', '2', 1501573456),
(14, 1, 'klsdfjklj', 'sdf,msdnfm,', '2', 1501573472),
(15, 1, 'kljerk', 'mn,.gn', '2', 1501573541),
(16, 1, 'kjl', 'kjlkjl', '1', 1501573749),
(17, 1, 'shuoshuo', 'dsfj', '2', 1501573824),
(18, 1, 'dsfk', 'kdsfjklds', '2', 1501573866),
(19, 1, '我要表白', '我爱xxxxxxxx', '1', 1501577724),
(20, 1, '唉是', '巴拉', '1', 1501577782),
(21, 1, '表白', '测试', '1', 1501578126),
(22, 1, '扎好针', '啦', '3', 1501578143),
(23, 1, '测试呀', '测试测试', '1', 1501578338);

-- --------------------------------------------------------

--
-- 表的结构 `shoucang`
--

CREATE TABLE `shoucang` (
  `id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shoucang`
--

INSERT INTO `shoucang` (`id`, `content_id`, `uid`) VALUES
(6, 23, 1),
(8, 19, 1),
(3, 21, 1),
(9, 15, 1),
(13, 2, 1),
(15, 18, 1),
(16, 22, 1);

-- --------------------------------------------------------

--
-- 表的结构 `topic`
--

CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `imgurl` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `topic`
--

INSERT INTO `topic` (`id`, `name`, `imgurl`) VALUES
(1, '表白', '/public/static/imges/topic/biaobai.png'),
(2, '动画', '/public/static/imges/topic/donghua.png'),
(3, '二次元', '/public/static/imges/topic/erciyuan.png'),
(4, '番剧', '/public/static/imges/topic/fanju.png'),
(5, '舞蹈', '/public/static/imges/topic/wudao.png'),
(6, 'IT', '/public/static/imges/topic/it.png'),
(7, '视频', '/public/static/imges/topic/shiping.png'),
(8, '水吧', '/public/static/imges/topic/shuiba.png'),
(9, '跳蚤市场', '/public/static/imges/topic/tiaozaoshichang.png'),
(10, '校园生活', '/public/static/imges/topic/xiaoyuanshenghuo.png'),
(11, '音乐', '/public/static/imges/topic/yinyue.png'),
(12, '游戏', '/public/static/imges/topic/youxi.png'),
(13, '待定1', '/public/static/imges/topic/daiding1.png'),
(14, '待定2', '/public/static/imges/topic/daiding2.png'),
(15, '待定3', '/public/static/imges/topic/daiding3.png'),
(16, '待定4', '/public/static/imges/topic/daiding4.png');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nickName` varchar(20) NOT NULL,
  `avatarUrl` varchar(200) NOT NULL,
  `gender` int(11) NOT NULL,
  `province` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `nickName`, `avatarUrl`, `gender`, `province`, `city`) VALUES
(1, '靖哥', 'http://wx.qlogo.cn/mmhead/Q3auHgzwzM6CAOcUMsEj8hAMN6UKdwVAf1Qs1jGLH35paxv1VnibZqg/132', 1, 'Hunan', 'Changsha'),
(2, 'Queenie.女帝', 'http://wx.qlogo.cn/mmhead/dxTsTDVZSKWRhEch5uFx5ujf1rpXuXhIqbqrViaE8nFc/132', 2, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `zan`
--

CREATE TABLE `zan` (
  `id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zan`
--

INSERT INTO `zan` (`id`, `content_id`, `uid`) VALUES
(1, 2, 1),
(3, 5, 1),
(4, 7, 1),
(55, 23, 1),
(51, 4, 1),
(44, 6, 1),
(42, 18, 1),
(52, 22, 1),
(53, 21, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoucang`
--
ALTER TABLE `shoucang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`nickName`);

--
-- Indexes for table `zan`
--
ALTER TABLE `zan`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- 使用表AUTO_INCREMENT `shoucang`
--
ALTER TABLE `shoucang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- 使用表AUTO_INCREMENT `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `zan`
--
ALTER TABLE `zan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
